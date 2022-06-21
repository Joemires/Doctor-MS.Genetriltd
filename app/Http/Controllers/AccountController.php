<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller {

    public function overview(Request $request) {
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

    public function profile(Request $request, $tab = 'index', User $user = null) {
        if($user instanceof User && ! $user->hasRole('admin')) {
            abort(403);
        }
        $user = $user ?: $request->user();
        $user->load('roles');
        return view('pages.backend.profile.' . $tab, compact('user'));
    }
}
