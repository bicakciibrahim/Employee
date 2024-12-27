<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function contact()
    {
        return view('contact.contact');
    }

    public function home(Request $request)
    {



        return redirect()->route('complaints.create')->with('success', 'Şikayetiniz başarıyla gönderildi.');
    }



    public function create()
    {
        return view('contact.complaint');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isim' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telefon' => 'nullable|string|max:15',
            'mesaj' => 'required|string',
        ]);

        Complaint::create($request->all());

        return redirect()->back()->with('success', 'Şikayetiniz başarıyla gönderildi!');
    }
}
