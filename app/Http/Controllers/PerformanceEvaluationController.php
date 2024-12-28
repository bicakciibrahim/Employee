<?php

namespace App\Http\Controllers;

use App\Models\PerformanceEvaluation;
use Illuminate\Http\Request;

class PerformanceEvaluationController extends Controller
{
    public function index()
    {
        // Performans değerlendirme verilerini al
        $evaluations = PerformanceEvaluation::with('employee')->paginate(10); // Çalışan bilgileriyle birlikte, sayfalama ile

        return view('performance_evaluations.index', compact('evaluations')); // Blade dosyasına gönder
    }
}
