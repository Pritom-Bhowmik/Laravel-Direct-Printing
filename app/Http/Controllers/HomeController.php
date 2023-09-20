<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Rawilk\Printing\Facades\Printing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::get();
        return view('home', compact('students'));
    }
    public function print(){
        $printJob = Printing::newPrintTask()
            ->printer(72650338)
            ->file(public_path('fullpage.pdf'))
            ->option('fit_to_page', true)
            ->send();

        $printJob->id();
        return back();

    }
}
