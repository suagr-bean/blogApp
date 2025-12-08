<div class="w-75 h-[600px] ml-9 mt-5 flex flex-col overflow-y:auto">
@foreach($data as $item)
<div class='contents' data-id="{{$item->id}}">
<h1 class="h1title">{{$item->title}}<h1>
<h2 class="h2time">{{$item->time}}</h2>
<h3>{{$item->name}}</h2>
@if(Auth::check()&&Auth::user()->name==$item->name)
<button class="update"> 修改</button>
<button>删除</button>
<button class="save">保存</button>
@endif
<p class="pcontent"
 class="white-space:pre-wrap">{!!nl2br(e($item->content))!!}</p>
</div>
<span class="border mt-3"></span>
<p>评论</p>

@foreach($item->comments as $com)
<div class=" com border-b m-full h-[100px] p-4  bg-orange-100/40">
<h3>{{$com->comment}}</h3>
<button class="bg-blue-300/30 border rounded-[8px] ml-8 w-15 h-6"
>{{$com->username}}</button>
@if(Auth::check()&&Auth::user()->name==$com->username)
<button  data-value="{{$com->id}}" class="ml-5 delcom">删除{{$com->id}}</button>
@endif
<h4>{{$com->created_at}}</h4>
</div>
@endforeach
<form method=post action="/comment">
@csrf
<input type="text" class="hidden"name="id"
value="{{$item->id}}">
@Auth
<input type="text" class="hidden" name="username"
value="{{Auth::user()->name}}" >
<input type="text" name="comment"placeholder="写下评论"
class="w-70 h-15 ml-4 ">
<button class="w-20 h-10 ml-21">提交</button>
@endAuth
</form>
@endforeach
</div>
