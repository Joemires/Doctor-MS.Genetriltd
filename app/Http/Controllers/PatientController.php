<?php

namespace App\Http\Controllers;

use App\Mail\NewUserCompleteRegistration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Propaganistas\LaravelPhone\PhoneNumber;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = User::doesntHave('roles')->paginate(10);
        // dd($patients);
        return view('pages.backend.patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.patients.form');
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
            'email' => 'required',
            'gender' => 'required|in:Male,Female,Other',
            'address' => 'required',
            'age' => 'required',
            'mobile' => 'required|phone',
            'height' => 'required',
            'weight' => 'required',
            'b_pressure' => 'required',
            'respiration' => 'required',
            'diet' => 'required',
            'pulse' => 'required',
            'b_group' => 'required',
            'allergy' => 'required'
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

        // return (new NewUserCompleteRegistration($user))->render();

        $user_meta = [
            'medical' => [
                'height' => $request->height,
                'weight' => $request->weight,
                'blood_pressure' => $request->b_pressure,
                'blood_group' => $request->b_group,
                'respiration' => $request->respiration,
                'diet' => $request->diet,
                'pulse' => $request->pulse,
                'allergy' => $request->allergy
            ],
            'age' => $request->age,
            'gender' => $request->gender
        ];

        $user->meta = $user_meta;
        $user->save();

        if($request->has('profile_photo')) {
            // Upload User Avatar
            $user->addMediaFromRequest('profile_photo')->toMediaCollection('avatar');
        }

        // Create a new address
        $user->addresses()->create([
            'label' => 'Default Address',
            'given_name' => $request->first_name,
            'family_name' => $request->last_name,
            'country_code' => $request->mobile_country,
            'street' => $request->address,
            'is_primary' => true,
            'is_billing' => true,
            'is_shipping' => true,
        ]);


        Mail::to($user)->queue(new NewUserCompleteRegistration($user));

        return redirect()->route('backend.patients.index')->withSuccess('A new doctor has been enrolled in the system successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
