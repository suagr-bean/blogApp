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
             'blog_id'=>$request->input('id')

        ];
         comment::create($data);
         return redirect()->route('homepage');
        }
        
        public function deleteCom($id){
            $comment =comment::findOrFail($id);
            $comment->delete();
        }
    }

