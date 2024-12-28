<?php
namespace App\Http\Controllers;

use App\Models\EmployeeTraiining;
use App\Models\Employees;
use App\Models\TypeOfEducation;
use Illuminate\Http\Request;

class EmployeeTrainingController extends Controller
{
public function index()
{
$trainings = EmployeeTraiining::with(['calisan', 'egitimTuru'])->get();
return view('employee.trainings.index', compact('trainings'));
}

public function create()
{
$employees = Employees::all();
$educationTypes = TypeOfEducation::all();
return view('employee.trainings.create', compact('employees', 'educationTypes'));
}

    public function store(Request $request)
    {
        $request->validate([
            'calisan_id' => 'required|exists:employees,id',
            'egitim_turu_id' => 'required|exists:egitim_turu,id',
            'egitim_tarihi' => 'required|date',
            'egitim_durumu' => 'required|string',
        ]);

        EmployeeTraiining::create([
            'calisan_id' => $request->calisan_id,
            'egitim_turu_id' => $request->egitim_turu_id,
            'egitim_tarihi' => $request->egitim_tarihi,
            'egitim_durumu' => $request->egitim_durumu,
        ]);

        return redirect()->route('employee.trainings.index')->with('success', 'Eğitim başarıyla eklendi.');
    }



}
