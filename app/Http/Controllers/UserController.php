<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    function show()
        {
            $data = user::all();
            return view('index',['users'=>$data]);
        }

    function adddata(Request $req)
        {
            
            $user = new user;
            

            $user->nama=$req->nama;
            $user->gender=$req->gender;
            $user->email=$req->email;
            $user->alamat=$req->alamat;
            $user->save();
            return redirect('/');

        }
    function delete($id)
    {
        $data= user::find($id);
        $data->delete();
        return redirect('/');
    }

    function showUp($id)
    {
        $data=user::find($id);
        return view('update',['data'=>$data]);
    }

    function update(Request $req)
    {
        
        $data=user::find($req->id);
        $data->nama=$req->nama;
        $data->gender=$req->gender;
        $data->email=$req->email;
        $data->alamat=$req->alamat;
        $data->save();
        return redirect('/');
    }
}
