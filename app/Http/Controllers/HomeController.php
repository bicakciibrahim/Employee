<?php
namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Projects;
use App\Models\Tasks;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index(Request $request)
{

$search = $request->get('search');


if ($search) {
$employees = Employees::where('ad', 'like', "%$search%")
->orWhere('soyad', 'like', "%$search%")
->orWhere('email', 'like', "%$search%")
->get();
} else {

$employees = Employees::all();
}


$projects = Projects::all();
$tasks = Tasks::all();

// Arama sonucunu blade şablonuna aktar
return view('home', compact('employees', 'projects', 'tasks', 'search'));



}
    public function home()
    {
        $employees = Employees::all();
        $projects = Projects::all();
        $tasks = Tasks::all();

        return view('index', compact('employees', 'projects', 'tasks'));
    }
}
