<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use App\Models\Employees;
use App\Models\PermissonType;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        // Tüm izinleri ilişkili modellerle birlikte çekiyoruz
        $permissions = Permissions::with(['employee', 'permissionType'])->get();

        // İzin türlerini de form için alalım
        $permissionTypes = PermissonType::all();

        return view('permissions.index', compact('permissions', 'permissionTypes'));
    }

    public function create()
    {
        // Çalışanlar ve izin türlerini alıyoruz
        $employees = Employees::all(); // Employees yerine Calisan modelini kullanıyoruz
        $permissionTypes = PermissonType::all();

        return view('permissions.create', compact('employees', 'permissionTypes'));
    }

    public function store(Request $request)
    {
        // Verileri doğrulama
        $request->validate([
            'calisan_id' => 'required|exists:calisanlar,id', // employees yerine calisanlar tablosunu doğruluyoruz
            'izin_turu_id' => 'required|exists:izin_turleri,id',
            'baslangic_tarihi' => 'required|date',
            'bitis_tarihi' => 'required|date',
            'aciklama' => 'nullable|string',
        ]);

        // Yeni izin kaydını oluşturma
        Permissions::create($request->all());

        return redirect()->route('permissions.index')->with('success', 'Yeni izin başarıyla eklendi.');
    }
}
