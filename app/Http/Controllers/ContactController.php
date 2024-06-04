<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact1()
    {
        return view('web/contact');
    }
    public function store(Request $request)
    {
        // Valido dhe përpuno të dhënat e postuara nga forma
        $validatedData = $request->validate([
            'name' => 'name',
            'email' => 'sname',
            'subject' => 'e',
            'message' => 'mesazhi',
        ]);
    
        // Krijo një model të ri të bazuar në të dhënat e postuara
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->sname = $request->input('email');
        $contact->e = $request->input('subject');
        $contact->mesazhi = $request->input('message');
    
        // Ruaj modelin në bazën e të dhënave
        $contact->save();
    
        // Kthej një përgjigje ose ridrejto në faqen tjetër me mesazhin e konfirmimit
        return redirect('web/contact')->with('success', 'Të dhënat janë ruajtur me sukses!');
    }
    
}
