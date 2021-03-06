<?php

namespace App\Http\Controllers; 

use App\User;
use App\Role;
use App\DetaiUser;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get()->load('roles');
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input('user');
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt('123456');
        $role  = Role::where('name', $data['role'])->first();

        $user->save();

        $user->roles()->attach($role);
        return response('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->input('userEdit');

        $user = User::find($data['id']);
        $user->name = $data['name'];
        $user->email = $data['email'];

        $newRole  = Role::where('name', $data['newRole'])->first();
        $oldRole  = Role::where('name', $data['oldRole'])->first();

        $user->save();

        $user->roles()->attach($newRole);
        $user->roles()->detach($oldRole['id']);
        return response([
            'result' => 'success'
        ], 200);       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = $request->input('userDelete');

        $user = User::find($id);

        $role  = Role::where('name', $data['role'])->first();
        
        $user->roles()->detach($role['id']);

        $user->delete();
        return response([
            'result' => 'success'
        ], 200);
    }
}
