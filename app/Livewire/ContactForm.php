<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $subject = '';

    public string $message = '';

    public bool $privacy = false;

    public string $contactAddress = 'Polska';

    public string $contactEmail = 'contact@example.com';

    public string $contactPhone = '+48 123 456 789';

    public function mount(): void
    {
        $settings = app(GeneralSettings::class);

        $this->contactAddress = $settings->address ?? $this->contactAddress;
        $this->contactEmail = $settings->email ?? $this->contactEmail;
        $this->contactPhone = $settings->phone ?? $this->contactPhone;
    }

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'subject' => ['required', 'string', 'min:3', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
            'privacy' => ['accepted'],
        ];
    }

    protected function messages(): array
    {
        return [
            'name.required' => 'Pole imię i nazwisko jest wymagane.',
            'name.min' => 'Imię i nazwisko musi mieć minimum :min znaki.',
            'email.required' => 'Pole email jest wymagane.',
            'email.email' => 'Podaj prawidłowy adres email.',
            'subject.required' => 'Pole temat jest wymagane.',
            'subject.min' => 'Temat musi mieć minimum :min znaki.',
            'message.required' => 'Pole wiadomość jest wymagane.',
            'message.min' => 'Wiadomość musi mieć minimum :min znaków.',
            'privacy.accepted' => 'Musisz zaakceptować politykę prywatności.',
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            Mail::to(config('mail.from.address'))
                ->queue(new ContactFormMail(
                    $this->name,
                    $this->email,
                    $this->subject,
                    $this->message
                ));

            session()->flash('success', 'Dziękujemy! Twoja wiadomość została wysłana. Odpowiemy najszybciej jak to możliwe.');

            $this->reset(['name', 'email', 'phone', 'subject', 'message', 'privacy']);
        } catch (\Exception $e) {
            session()->flash('error', 'Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.');
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
