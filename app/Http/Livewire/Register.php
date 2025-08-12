<?php

namespace App\Http\Livewire;

use App\Models\School;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $step = 1;

    // Step 1 fields
    public $username = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    // Step 2 fields
    public $first_name = '';
    public $last_name = '';
    public $school_id = '';

    public function render()
    {
        return view('livewire.register', [
            'schools' => School::pluck('name', 'id'),
        ]);
    }

    public function updatedUsername()
    {
        $this->validate([
            'username' => 'required|unique:users,username',
        ]);
    }

    public function nextStep()
    {
        $this->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);
        $this->step = 2;
    }

    public function register()
    {
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'school_id' => 'required|exists:schools,id',
        ]);

        $user = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'school_id' => $this->school_id,
            'role' => 'user',
        ]);

        auth()->login($user);

        return redirect('/dashboard');
    }
}
