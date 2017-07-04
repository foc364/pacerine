<?php

namespace Pacerini\Http\Controllers\Site;

use Illuminate\Http\Request;
use Pacerini\Http\Controllers\Controller;
use Snowfire\Beautymail\Beautymail;
use Pacerini\Models\Contact;
use Response;

class SiteController extends Controller
{
    public function sendEmail(Request $request) 
    {
        $contact = Contact::find(1);

        foreach ($request->form as $fields) {
            $form[$fields['name']] = $fields['value'];
        }
      
        $beautymail = app()->make(Beautymail::class);

        $beautymail->send('emails.welcome', $form, function($message) use ($contact) {

        $message
            ->from('site@pacerini.com')
            ->to($contact->email, '')
            ->subject('Contato do cliente');
        });

        return Response::json("Enviado com sucesso");

    }
}