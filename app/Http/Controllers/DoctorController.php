<?php

namespace App\Http\Controllers;

use App\Mail\NewUserCompleteRegistration;
use App\Models\{User};
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = User::role('doctor')->paginate(10);
        // dd($doctors);
        return view('pages.backend.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.doctors.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'mobile' => 'required|phone',
            'degree' => 'required',
            'experience' => 'required',
            'fees' => 'required',
            'available_days' => 'required',
            'slot_duration' => 'required',
            'time_slot' => 'required',
            'mobile_country' => 'required'
        ], [
            'mobile.phone' => "Please input a correct mobile number",
        ]);

        $user = (new User)->fill([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'contacts' => [
                'mobile' => [
                    'working_line' => PhoneNumber::make($request->mobile, $request->mobile_country)
                ]
            ]
        ]);

        $doctor_meta = [
            'availability' => [
                'days' => collect($request->available_days)->keys(),
                'time' => $request->time_slot
            ],
            'title' => $request->title,
            'degree' => $request->degree,
            'experience' => $request->experience,
            'fees' => $request->fees,
            'slot_duration' => $request->slot_duration
        ];

        $user->meta = $doctor_meta;
        $user->save();

        if($request->has('profile_photo')) {
            // Upload User Avatar
            $user->addMediaFromRequest('profile_photo')->toMediaCollection('avatar');
        }

        $user->assignRole('doctor');

        Mail::to($user)->queue(new NewUserCompleteRegistration($user));

        return redirect()->route('backend.doctors.index')->withSuccess('A new doctor has been enrolled in the system successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
