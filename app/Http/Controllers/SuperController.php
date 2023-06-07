<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SuperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $user=User::get();

        return view('SuperAdmin.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
return view('SuperAdmin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(userRequest $request)
    {


       $user= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        return view('SuperAdmin.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

         $user=User::find($id);

        $pass=Hash::make($request['password']);



        if($pass==$user['password'])
        {

            $store_password=$user->password;
        }else{
            $store_password=$pass;
        }
        $user->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>$store_password,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $user=User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
