<?php

namespace App\Http\Livewire;

use ZxcvbnPhp\Zxcvbn;
use Livewire\Component;

class PasswordGenerate extends Component
{
    public string $password = '';

    public string $passwordStrength = 'Weak';

    public int $strengthScore = 0;

    public array $strengthLevels = [
        1 => 'Weak',
        2 => 'Fair',
        3 => 'Good',
        4 => 'Strong',
    ];

    public string $designTemplate = 'tailwind';

    public function updatedPassword($value)
    {
        $this->strengthScore = (new Zxcvbn())->passwordStrength($value)['score'];
    }

    public function render()
    {
        return view('livewire.password-generate');
    }
}
