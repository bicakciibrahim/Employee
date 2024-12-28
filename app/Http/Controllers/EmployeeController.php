<?php
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employees;
use App\Models\EmployeeType;
use App\Models\Projects;
use App\Models\Tasks;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

public function list()
{
$employees = Employees::all();
return view('employee.employees', compact('employees'));
}


public function show($id)
{
$employee = Employees::with(['employeeType', 'projects'])->findOrFail($id); // Projeleri de dahil ettik
return view('employee.show', compact('employee'));
}


public function edit($id)
{
$employee = Employees::findOrFail($id);
$tasks = Tasks::all();
$employeeTypes = EmployeeType::all(); // Çalışan türlerini alıyoruz
$projects = Projects::all(); // Projeleri alıyoruz
return view('employee.edit', compact('employee', 'employeeTypes', 'tasks', 'projects'));
}


public function update(Request $request, $id)
{
$employee = Employees::findOrFail($id);

// Doğrulama
$validated = $request->validate([
'ad' => 'required|string|max:255',
'soyad' => 'required|string|max:255',
'email' => 'required|email',
'telefon' => 'required|string|max:15',
'ise_baslangic_tarihi' => 'required|date',
'son_calisma_tarihi' => 'nullable|date',
'maas' => 'required|numeric',
'gorev_id' => 'nullable|exists:gorevler,id', // Görev opsiyonel ama mevcut olmalı
'employee_type_id' => 'nullable|exists:calisan_turleri,id', // employee_type_id nullable olarak geçiyor
]);


$employeeTypeId = $request->input('employee_type_id') ?? $employee->employee_type_id;


$employee->update([
'ad' => $request->ad,
'soyad' => $request->soyad,
'email' => $request->email,
'telefon' => $request->telefon,
'ise_baslangic_tarihi' => $request->ise_baslangic_tarihi,
'son_calisma_tarihi' => $request->son_calisma_tarihi,
'maas' => $request->maas,
'gorev_id' => $request->task_id ?? $employee->gorev_id, // Varsayılan olarak mevcut değer kalır
'calisan_turu_id' => $employeeTypeId ?? $employee->calisan_turu_id,
]);


return redirect()->route('employee.show', $id)->with('success', 'Çalışan bilgileri başarıyla güncellendi.');
}

// Employee creation form
    public function createEmployeeForm()
    {
        $employeeTypes = EmployeeType::all();
        $tasks = Tasks::all();
        $departments = Department::all(); // Birimler burada alınıyor

        return view('employee.create', compact('employeeTypes', 'tasks', 'departments'));
    }


// Store new employee data
    public function saveNewEmployee(Request $request)
    {
        // Form verilerini doğrulama
        $validated = $request->validate([
            'ad' => 'required|string|max:255',
            'soyad' => 'required|string|max:255',
            'email' => 'required|email|unique:calisanlar,email', // 'employees' yerine 'calisanlar'
            'telefon' => 'required|string|max:15',
            'ise_baslangic_tarihi' => 'required|date',
            'son_calisma_tarihi' => 'nullable|date',
            'maas' => 'required|numeric',
            'calisan_turu_id' => 'required|exists:calisan_turleri,id', // Çalışan türü id doğrulama
            'gorev_id' => 'nullable|exists:gorevler,id', // Görev ilişkisi doğrulama
            'birim_id' => 'required|exists:departments,id', // Birim id doğrulama
        ]);

        // Yeni çalışanı oluşturma
        $employee = Employees::create([
            'ad' => $request->ad,
            'soyad' => $request->soyad,
            'email' => $request->email,
            'telefon' => $request->telefon,
            'ise_baslangic_tarihi' => $request->ise_baslangic_tarihi,
            'son_calisma_tarihi' => $request->son_calisma_tarihi,
            'maas' => $request->maas,
            'calisan_turu_id' => $request->calisan_turu_id,
            'gorev_id' => $request->gorev_id,
            'birim_id' => $request->birim_id, // Birimi ekliyoruz
        ]);

        // Başarıyla kaydedildikten sonra listeye yönlendiriyoruz
        return redirect()->route('employee.list')->with('success', 'Çalışan başarıyla eklendi.');
    }


}
