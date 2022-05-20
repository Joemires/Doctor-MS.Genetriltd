<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class OverviewController extends Controller {

    public function index(Request $request) {
        // if($request->user()->hasRole('doctor')) {
        //     return view('pages.backend.doctor.overview');
        // } else if($request->user()->hasRole('receptionist')) {
        //     return view('pages.backend.receptionist.overview');
        // } else {
        //     return view('pages.backend.patient.overview');
        // }
        // dd($doctor->getQuery()->setModel(new Transaction));

        $users =\App\Models\User::with('roles')->get()->groupBy( fn($user) => $user->getRoleNames()->first() ?? 'patient' );
        return view('pages.backend.overview', compact('users'));
    }
}
