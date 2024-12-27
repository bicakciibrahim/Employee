<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function create()
    {
        return view('contact.suggestion');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isim' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telefon' => 'nullable|string|max:15',
            'mesaj' => 'required|string',
        ]);

        Suggestion::create($request->all());

        return redirect()->back()->with('success', 'Öneriniz başarıyla gönderildi!');
    }
}
