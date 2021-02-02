<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'contenu' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        \Mail::send('contact.send', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'contenu' => $input['contenu'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to($request->email, $request->name )->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Votre message a bien été envoyé !']);
    }
}
