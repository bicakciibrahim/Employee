<?php

namespace App\Http\Controllers;

use App\Models\PerformanceEvaluation;
use App\Models\Employees;
use Illuminate\Http\Request;

class PerformanceEvaluationController extends Controller
{
    // Performans Değerlendirmelerinin Listelendiği Sayfa
    public function index()
    {
        // Performans değerlendirme verilerini al ve sayfalama ile gönder
        $evaluations = PerformanceEvaluation::with('employee')->paginate(10); // Çalışan bilgileriyle birlikte, sayfalama

        return view('performance_evaluations.index', compact('evaluations')); // Blade dosyasına gönder
    }

    // Yeni Performans Değerlendirmesi Ekleme Sayfası
    public function create()
    {
        // Çalışanları al
        $employees = Employees::all();

        // Create sayfasını çalışan listesiyle birlikte döndür
        return view('performance_evaluations.create', compact('employees'));
    }

    // Performans Değerlendirmesi Kaydetme
    public function store(Request $request)
    {
        // Gelen veriyi validate et
        $request->validate([
            'calisan_id' => 'required|exists:calisanlar,id',
            'puan' => 'required|integer|min:1|max:100',
            'yorum' => 'required|string',
        ]);

        // Performans Değerlendirmesini kaydet
        PerformanceEvaluation::create([
            'calisan_id' => $request->calisan_id,
            'puan' => $request->puan,
            'yorum' => $request->yorum,
        ]);

        // Başarıyla kaydedildi mesajı ile geri dön
        return redirect()->route('performances.index')->with('success', 'Performans değerlendirmesi başarıyla eklendi.');
    }
}
