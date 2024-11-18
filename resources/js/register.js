const inputs = document.querySelectorAll('.my-input');

inputs.forEach(input => {
const sessionName = input.dataset.sessionName;

input.addEventListener('input', () => {
    if (input.value !== sessionName) {
    input.classList.remove('focus:border-green-700') || input.classList.remove('focus:border-red-700');
    } else if (input.value == sessionName) {
    input.classList.add('focus:border-green-700');
    } else {
    input.classList.add('focus:border-red-700');   
    }
});
});

const checkboxes = document.querySelectorAll('.gender-checkbox');

function selectGender() {
    const target = event.target;
    checkboxes.forEach(box => {
        if(box != target)
        {
            box.checked = false;
        } 
    } )
    
}

const dropdownButton = document.querySelector('.dropdown-button');
const dropdownlist = document.querySelector('.dropdown-list');
const town = document.querySelectorAll('.town');
const peerTown = document.querySelector('.peer-town');

dropdownButton.addEventListener("click", () => {
    dropdownlist.classList.toggle('hidden');
    dropdownButton.classList.toggle('bg-reddish-white');
    dropdownButton.classList.toggle('bg-[#F9FAFB]');
    peerTown.classList.toggle('text-yellow-sea');
    dropdownButton.classList.toggle('border-yellow-sea');
    dropdownButton.classList.toggle('border-2');
} );


function selectTown()
{

    dropdownButton.textContent = event.target.value;
    town.forEach(town => {
        if(town != event.target)
        {
            town.checked = false;
        }
    })         
    dropdownlist.classList.add('hidden');
    dropdownButton.classList.toggle('bg-reddish-white');
    dropdownButton.classList.toggle('bg-[#F9FAFB]');
    peerTown.classList.toggle('text-yellow-sea');
    dropdownButton.classList.toggle('border-yellow-sea');
    dropdownButton.classList.toggle('border-2');
}