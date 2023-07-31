<?php

namespace App\Http\Controllers;

use App\Models\Productt;
use Illuminate\Http\Request;
use app\Models\User;
use App\Models\product;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype=='user'){
                return view('dashboard');
        }
        else if($usertype=='admin'){
            return view('admin');
        }
    }
        else redirect()->back()->with('error','Login error');
    }

    public function datas(){
        $users = DB::select('select * from productts where Wilaya="oran"');
 
        foreach ($users as $user) {
             dd($user);
        }
        //

    }
    public function Frontpage()
    {
        return view('Frontpage');
    }
    public function client()
    {
        return view('client');
    }
    public function Fourni()
    {
        return view('Fourni');
    }
    public function FAQS()
    {
        return view('FAQS');
    }
    public function choose(){
        if(Auth()->user()->usertype == 'admin'){
            return '/admin';
        }
        else return'/dashboard';}


}
 