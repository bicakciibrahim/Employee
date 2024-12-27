<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller

{



    public function show($id)
    {   $employees = Employees::all();
        $project = Projects::find($id);

        if (!$project) {
            return redirect()->route('home')->with('error', 'Proje bulunamadı.');
        }

        return view('project.show', compact('project', 'employees' ));
    }


    public function index()
    {
        $projects = Projects::paginate(10);// Tüm projeleri getir
        return view('project.index', compact('projects')); // Görünüm dosyasına gönder
    }

}
