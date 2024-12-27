<?php
namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{



    public function index()
    {
        $birimler = Department::all();
        return view('units.index', compact('birimler'));
    }

    public function show($id)
    {
        $birim = Department::findOrFail($id);
        return view('units.show', compact('birim'));
    }
}
