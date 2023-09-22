<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterSubscriptionForm extends Component
{
    public $email;
    public $successMessage = '';

    protected $rules = [
        'email' => 'required|email|unique:newsletter_subscribers',
    ];

    public function subscribe()
    {
        $this->validate();

        // Ajoutez l'e-mail de l'utilisateur à votre liste de diffusion ou à votre service de marketing par e-mail
        Newsletter::subscribe($this->email);

        // Définissez le message de succès
        $this->successMessage = 'Vous êtes maintenant abonné à notre newsletter !';

        // Effacez le champ email après l'abonnement réussi
        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.newsletter-subscription-form');
    }
}

