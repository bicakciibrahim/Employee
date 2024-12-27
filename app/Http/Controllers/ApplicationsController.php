<?php
namespace App\Http\Controllers;

use App\Models\Application;  // Basvuru yerine Application modelini kullanıyoruz
use App\Models\Department;  // 'birimler' tablosunun karşılık geldiği model
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
public function create()
{
$birimler = Department::all(); // 'birimler' tablosundaki tüm verileri çek
return view('contact.application', compact('birimler'));
}

public function store(Request $request)
{
$request->validate([
'isim' => 'required|string|max:255',
'email' => 'nullable|email',
'telefon' => 'nullable|string|max:15',
'birim_id' => 'required|exists:birimler,id', // 'birimler' tablosundaki id'yi doğrula
'mesaj' => 'nullable|string',
]);

// Başvuru verisini oluşturuyoruz
Application::create([
'isim' => $request->isim,
'email' => $request->email,
'telefon' => $request->telefon,
'birim_id' => $request->birim_id,  // 'birim_id' seçeneği burada kaydedilir
'mesaj' => $request->mesaj,
]);

return redirect()->back()->with('success', 'Başvurunuz başarıyla alındı!');
}
}
