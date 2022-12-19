<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        //get posts
        $user = DB::table('users')
        ->select('birth_place')
        ->selectRaw('count(birth_place) as jumlah_data_user')
        ->groupBy('birth_place')
        ->get();
        

        //return collection of posts as a resource
        return new UserResource(true, 'List Data Users', $user);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'     => 'required',
            'password'   => 'required',
            'birth_date'   => 'required',
            'birth_place'   => 'required',
            'gender'        => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

       

        //create user
        $user = User::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'password'     => $request->password,
            'birth_date'   => $request->birth_date,
            'birth_place'  => $request->birth_place,
            'gender'       => $request->gender,
        ]);

        //return response
        return new UserResource(true, 'Data User Berhasil Ditambahkan!', $user);
    }

    public function update(Request $request, User $user)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'     => 'required',
            'password'   => 'required',
            'birth_date'   => 'required',
            'birth_place'   => 'required',
            'gender'        => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        

            //update user 
            $user->update([
                'name'         => $request->name,
                'email'        => $request->email,
                'password'     => $request->password,
                'birth_date'   => $request->birth_date,
                'birth_place'  => $request->birth_place,
                'gender'       => $request->gender,
            ]);
        

        //return response
        return new UserResource(true, 'Data User Berhasil Diubah!', $user);
    }

    public function destroy(User $user)
    {
        

        //delete post
        $user->delete();

        //return response
        return new UserResource(true, 'Data User Berhasil Dihapus!', null);
    }
}
