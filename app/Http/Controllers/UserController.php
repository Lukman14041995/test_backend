<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $user = DB::table('users')
        ->select('birth_date','name','birth_place', DB::raw('count(*) as total'))
        ->groupBy('birth_date','name','birth_place')
        ->get();
        dd($user);
        return view('users.index', compact('user'));
    }

    
}
