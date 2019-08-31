<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function principal(){
        $data = User::all();
        $user = Auth::user();
        return view('principal')->with(compact('data','user'));
    }

    public function new(Request $request){
        //dd($request->all());
        $user= new User();
        $user->name = $request->name;
        $user->username= $request->username;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        if (isset($request->access)) {
            $user->access_permission = 'si';
        }
        if (isset($request->add)) {
            $user->add_permission = 'si';
        }
        if (isset($request->consult)) {
            $user->cunsult_permission = 'si';
        }

        $user->save();
        return redirect('/principal')->with('success','Agregado Correctamente');
    }
}
