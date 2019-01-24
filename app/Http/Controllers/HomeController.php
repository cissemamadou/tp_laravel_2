<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requestt;
use App\Etudiant;
class HomeController extends Controller
{
    //
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
//        $etudiants = Etudiant::all();
        $etudiants = Etudiant::paginate(5);
        return view('home', compact(["etudiants"]));
    }

//    public function language(String $locale)
//    {
//        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');
//        session(['locale' => $locale]);
//        return back();
//    }
}
