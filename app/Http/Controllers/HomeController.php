<?php

namespace App\Http\Controllers;
use App\Models\Scholarship;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $scholarships = Scholarship::where('status', "ACTIVE")->orderBy('id', 'DESC')->paginate(100);

        return view('home', [
            'scholarships' => $scholarships,
        ]);
    }
}
