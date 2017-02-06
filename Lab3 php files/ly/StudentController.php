<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller {
  public function index() { return view('index'); } 
	//public function index() { return view('help'); } 
  public function detail() { return view('detail');}
  	//return view('student/{id}'); }
  public function help() { return view('help'); } 
}

?>