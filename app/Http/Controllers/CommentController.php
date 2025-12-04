<?php
namespace App\Http\Controllers;
use App\Models\comment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class CommentController extends Controller{
    public function createComment(Request $request){
        $data=[
            
            'username'=>$request->input('username'),
             'comment'=>$request->input('comment'),
             'title'=>$request->input('title')
        ];
         comment::create($data);
    }

}