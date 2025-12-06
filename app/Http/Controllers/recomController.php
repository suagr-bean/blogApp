<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class recomController extends Controller{
    public function random (){
       $showdata=Blog::inRandomOrder()->first();
       //dd($showdata);
       return view('show',compact('showdata'));
    }
    public function getRandom(){
        $showdata=Blog::inRandomOrder()->first();
        return response()->json($showdata);
    }
}