<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Person::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return Inertia::render('Register');
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
            'name' => 'required|max:45',
            'direction' => 'required',
            'country' => 'max:30',
            'city' => 'max:30',
            'email' => 'required|email',
            'password' => 'required|max:60|min:6',
            'type_user_id' => 'required|integer',
            'person_id' => 'required|integer' 
        ]);

        $date = explode('-', $request->post('birthdate'));
        $person = new Person([
            'name' => $request->post('name'),
            'direction' => $request->post('direction'),
            'country' => $request->post('country'),
            'city' => $request->post('city'),
            'birthdate' => Date::createFromDate($date[2], $date[1], $date[0])
        ]);
        $person->save();

        $user = new User([
            'email' => $request->post('email'),
            'password' => Hash::make($request->password),
            'type_user_id' => $request->post('type_user_id'),
            'person_id' => $person->id, 
        ]);
        $user->save();
        
        $msg = [
            "data" => [
                "message" => "The person was created succesful",
                "user" => [
                    "id" => $user->id,
                    "name" => $person->name            
                ]
            ]
        ];
        return response($msg, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        $person->user;
        $data = [
            "person" => $person,
        ];

        return response($data);
        // return Inertia::render('Profile', ["data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        $user = $person->user;
        $data = [
            "person" => $person,
            "user" => $user
        ];

        return Inertia::render('Profile', ["data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $request->validate([
            'name' => 'max:45',
            'country' => 'max:30',
            'city' => 'max:30',
            'email' => 'email',
            'password' => 'max:60|min:6',
        ]);
        $user = $person->user;

        $person->update($request->post());
        $person->save();

        $user->update($request->post());
        $user->save();
        
        $msg = [
            "data" => [
                "message" => "The person was updated succesful",
                "user" => [
                    "id" => $user->id,
                    "name" => $person->name            
                ]
            ]
        ];

        return response($msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $user = $person->user;
        $person->destroy($person->id);
        $user->destroy($user->id);

        $data = [
            "data" => [
                "deleted" => true
            ],
            "status" => 200
        ];

        return response($data, 200);
    }
}
