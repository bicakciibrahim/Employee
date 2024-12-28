<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\RollCall;
use Illuminate\Http\Request;

class RollCallController extends Controller
{
    public function index()
    {
        // RollCall modelini kullanarak tüm yoklama kayıtlarını alıyoruz
        $rollCalls = RollCall::with('employee')->get(); // Çalışan bilgileriyle birlikte alıyoruz.

        return view('rollcalls.index', compact('rollCalls')); // Blade dosyasına gönderiyoruz.
    }

    public function create()
    {
        // Çalışanları al
        $employees = Employees::all();

        return view('rollcalls.create', compact('employees'));
    }

    // Yoklama verisini kaydetme
    public function store(Request $request)
    {
        // Validasyon
        $request->validate([
            'calisan_id' => 'required|exists:employees,id',
            'tarih' => 'required|date',
            'giris_saati' => 'nullable|date_format:H:i',
            'cikis_saati' => 'nullable|date_format:H:i',
            'durum' => 'required|in:Geldi,Gelmedi,Geç Geldi,İzinli',
        ]);

        // Yoklama verisini kaydet
        RollCall::create([
            'calisan_id' => $request->calisan_id,
            'tarih' => $request->tarih,
            'giris_saati' => $request->giris_saati,
            'cikis_saati' => $request->cikis_saati,
            'durum' => $request->durum,
        ]);

        return redirect()->route('rollcalls.index')->with('success', 'Yoklama başarıyla eklendi!');
    }
}
