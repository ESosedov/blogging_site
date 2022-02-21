<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        if ($request->method() == 'POST') {
            $body = "<p><b>Имя: </b>{$request->input('name')}</p>";
            $body .= "<p><b>E-mail: </b>{$request->input('email')}</p>";
            $body .= "<p><b>Тема письма: </b>{$request->input('subject')}</p>";
            $body .= "<p><b>Текст: </b><br>" . nl2br($request->input('text')) . "</p>";
            Mail::to('popandropus@yandex.com')->send(new ContactMail($body));
            $request->session()->flash('success', 'Сообщение отправлено');
            return redirect()->route('contact');
        }


        return view('contact.send');
    }
}
