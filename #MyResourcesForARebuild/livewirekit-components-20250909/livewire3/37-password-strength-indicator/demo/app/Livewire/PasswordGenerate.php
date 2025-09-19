<?php

namespace App\Livewire;

use ZxcvbnPhp\Zxcvbn;
use Livewire\Component;
use Illuminate\Contracts\View\View;

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

    public function updatedPassword($value): void
    {
        $this->strengthScore = (new Zxcvbn())->passwordStrength($value)['score'];
    }

    public function render(): View
    {
        return view('livewire.'.$this->designTemplate.'.password-generate');
    }
}
