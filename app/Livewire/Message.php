<?php

namespace App\Livewire;

use App\Events\chat;
use App\Events\Message as EventsMessage;
use App\Models\helpdesk;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Reverb\Events\MessageSent;
use Livewire\Attributes\On;
use Livewire\Component;


class Message extends Component
{

    public $user;
    public $userId;
    public $sender_id;
    public $receiver_id;
    public $message = '';
    public $messages=[];
    public $event;

    public function chatMessage($message)
    {
        $this->messages[] = [
            'id' => $message->id,
            'message' => $message->message,
            'sender' => $message->sender->username,
            'receiver' => $message->receiver->username,
        ] ;
      
    
       

        
    }

    public function mount($userId) {
       $this->userId = $userId;
        $this->sender_id = auth()->user()->id;
        $this->receiver_id = $userId;

        $messages = helpdesk::where (function($query)
        {
            $query->where('sender_id', $this->sender_id)
            ->where('receiver_id', $this->receiver_id);
        })
            ->orWhere(function($query) 
        {
            $query->where('sender_id', $this->receiver_id)
            ->where('receiver_id',$this->sender_id)
       ;
        })->with('sender:id,username','receiver:id,username')->get();
        
        foreach($messages as $message){
            $this->chatMessage($message);
        }

        $this->user = User::find($userId);
        $this->dispatch('scrollDown');
    
    }

  

    public function submitMessage()
    {
       $message = new helpdesk();
       $message->sender_id = $this->sender_id;
       $message->receiver_id = $this->receiver_id;
       $message->message = $this->message;
       $message->save();
       $this->chatMessage($message);
       chat::dispatch($message);
        // broadcast(new EventsMessage($message))->toOthers();
        
       $this->message = '';
       $this->dispatch('scrollDown');
     
    }
    

    public function getListeners() : array
    {
        $sender_id = Auth::id();
        
        return [
            "echo-private:chat-channel.{$sender_id},chat" => 'listenMessage'
        ];
        
     
    }
    
    public function listenMessage($event)
    {
  $chatMessage = helpdesk::whereId($event['message']['id'])->with('sender:id,name','receiver:id,name')->first();
    $this->chatMessage($chatMessage);
    $this->dispatch('scrollDown');
    }


    // #[On('Echo-private:chat-channel.{sender_id},EventsMessage')]
    // public function listenForMessage($event) 
    // {
    //     dd($event);
    //     $chatMessage = Helpdesk::findOrFail($event['message']['id']);
    //     // $this->emit('messageReceived', $chatMessage);

    //     // dd($event) ;
    //     // $chatMessage = helpdesk::whereId($event['message']['id'])->with('sender:id,name','receiver:id,name')->first();
    //     // $this->chatMessage($chatMessage);
    // }
    // protected function refreshComponent()
    // {
    //     $this->dispatch('$refresh');
    // }
    
    public function render()
    {
        
      
        return view ('livewire.message');
        
        
    }

    public function selectUser($users) {

    
     
        dd($users);
        
    
        }
}
