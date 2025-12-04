<?php
namespace App\Http\Controllers;
use App\Models\comment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class CommentController extends Controller{
    public function createComment(Request $request){
        $data=[
            'number'=>$request->input('number'),
            'username'=>$request->input('username'),
             'comment'=>$request->input('comment')
        ];
         comment::create($data);
    }

}