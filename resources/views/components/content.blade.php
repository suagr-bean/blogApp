<div class="content ml-6 border-[2px] rounded-[11px] bg-white w-[310px] flex flex-col p-2
h-[600px] mt-4 overflow-y-auto">
 
<div class="border contents min-h-[600px] "data-id="{{$data->id}}">
    <h1 class="h1title w-full h-10 py-1 text-2xl">{{$data->title}}</h1>
    <button class=" w-12 h-10 text-xl rounded-lg">{{$data->name}}</button>
    @if(Auth::check()&&Auth::user()->name==$data->name)
    <div class="flex gap-6 mt-3">
    <button class="delete">删除</button>
    <button class="update">修改</button>
    <button class="save">保存</button>
     </div>
    @endif
    <h2 class="h2time w-full text-xl mt-2">{{$data->time}}</h2>
    <p class="pcontent w-full h-full mt-1 text-base whitespace-pre-wrap
    ">
      {{$data->content}}
    </p>
    <span class="w-full mt-3  border"></span>
</div> 
     
  
    <p class="mt-6 w-full text-2xl h-5 ">评论</p>

 @foreach($data->comments as $com)
<div class="border mb-1">
 <button>{{$com->username}}</button>
 <h4>{{$com->created_at}}</h4>
 <p>{{$com->comment}}</p>
 @if(Auth::check()&&Auth::user()->name==$com->username)
 <button class="delcom"data-value="{{$com->id??''}}">删除</button>
 @endif
</div>
 @endforeach

 
 @Auth
 <form method=post action="/comment">
  @csrf
 <input type='text'name="comment" placeholder='写下评论'>
 <input type="text" name="id" class="hidden" value="{{$data->id}}">
 
 <input type="text"name="username" class="hidden"
 value="{{Auth::user()->name}}">
 
 <button>提交<button>
  @endAuth
 </form>

</div>
 