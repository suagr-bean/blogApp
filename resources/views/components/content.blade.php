<div class="w-75 h-98 ml-9 mt-5 flex flex-col overflow-y:auto">
@foreach($data as $item)
<div >
<h1>{{$item->title}}<h1>
<h2>{{$item->time}}</h2>
<h3>{{$item->name}}</h2>
<p class="white-space:pre-wrap">{{$item->content}}</p>
</div>
<span class="border mt-3"></span>
<p>评论</p>

@foreach($item->comments as $com)
<div class="border">
<h3>{{$com->comment}}</h3>
<h3>{{$com->username}}</h3>
<h4>{{$com->created_at}}
</div>
@endforeach
<form method=post action="/comment">
@csrf
<input type="text" class="hidden"name="title"
value="{{$item->title}}">
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
