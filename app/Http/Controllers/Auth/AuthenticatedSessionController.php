<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Spatie\Permission\Traits\HasRoles;

class AuthenticatedSessionController extends Controller
{
    use HasRoles;
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view ('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        
        $user = User::find(auth()->id());

        if ($user->hasRole('admin'))
        {
            return redirect()->route('admin.beranda.index');
        } else if ($user->hasRole('pelanggan pending'))
        {
            return redirect()->route('pending');
        } 
        
        elseif ($user->hasRole('pelanggan'))
        {
            return redirect()->route('suplai.home');

        }

        return redirect()->back();

        

        // return redirect()->intended(route('dashboard', absolute: false));
       
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
