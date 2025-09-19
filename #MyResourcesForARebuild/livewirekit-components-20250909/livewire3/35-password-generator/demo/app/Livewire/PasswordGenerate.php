<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;

class PasswordGenerate extends Component
{
    public string $password;
    public string $password_confirmation;
    public bool $visible = false;

    public string $designTemplate = 'tailwind';

    public function render(): View
    {
        return view('livewire.'.$this->designTemplate.'.password-generate');
    }

    public function generatePassword(): Void
    {
        $password = Str::password(config('app.PASSWORD_LENGTH'));

        $this->password = $password;
        $this->password_confirmation = $password;
    }
}
