<?php

namespace App\Livewire;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ContactForm extends Component
{
    public $email;

    public $name;

    public $subject;

    public $message;

    public function rules(): array
    {
        return (new ContactFormRequest)->rules();
    }

    /**
     * @throws ValidationException
     */
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function send(): void
    {

        $validated = $this->validate();
        //        dd($validated); // dump the validated data

        Mail::to('markjc@mweb.co.za')->send(new ContactMail($validated));
        $this->reset();
        session()->flash('success', 'Thanks for contacting us, we will get back to you soon.');
    }
}
