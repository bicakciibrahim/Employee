<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Proje Listesi
    public function index()
    {
        $projects = Projects::paginate(10); // Projeleri sayfalandırarak getir
        return view('project.index', compact('projects'));
    }

    // Proje Detayları
    public function show($id)
    {
        $project = Projects::find($id);
        $employees = Employees::all();

        if (!$project) {
            return redirect()->route('project.index')->with('error', 'Proje bulunamadı.');
        }

        return view('project.show', compact('project', 'employees'));
    }

    // Proje Düzenleme
    public function edit($id)
    {
        $project = Projects::find($id);
        $employees = Employees::all();

        if (!$project) {
            return redirect()->route('project.index')->with('error', 'Proje bulunamadı.');
        }

        return view('project.edit', compact('project', 'employees'));
    }

    // Proje Güncelleme
    public function update(Request $request, $id)
    {
        $project = Projects::find($id);

        if (!$project) {
            return redirect()->route('project.index')->with('error', 'Proje bulunamadı.');
        }

        $request->validate([
            'calisan_id' => 'required|exists:calisanlar,id',
        ]);

        $project->update([
            'calisan_id' => $request->calisan_id,
        ]);

        return redirect()->route('project.index')->with('success', 'Proje başarıyla güncellendi.');
    }


    public function create()
    {
        $employees = Employees::all(); // Çalışanları al
        return view('project.create', compact('employees'));
    }

    // Proje verilerini kaydetme
    public function store(Request $request)
    {
        // Validasyon
        $validated = $request->validate([
            'ad' => 'required|string|max:255',
            'aciklama' => 'required|string',
            'baslangic_tarihi' => 'required|date',
            'bitis_tarihi' => 'required|date',
            'calisan_id' => 'required|exists:employees,id',
        ]);

        // Proje verilerini kaydetme
        $project = new Projects();
        $project->ad = $validated['ad'];
        $project->aciklama = $validated['aciklama'];
        $project->baslangic_tarihi = $validated['baslangic_tarihi'];
        $project->bitis_tarihi = $validated['bitis_tarihi'];
        $project->calisan_id = $validated['calisan_id'];
        $project->save();

        // Başarılı kaydetme sonrasında yönlendirme
        return redirect()->route('project.index')->with('success', 'Proje başarıyla eklendi!');
    }



}
