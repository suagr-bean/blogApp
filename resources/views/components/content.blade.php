@props(['data'])
<div class="content ml-6 border-[2px] rounded-[11px]  w-[310px] flex flex-col p-2
max-h-[530px] bg-orange-200/30 overflow-y-auto mt-15">
 
<div class="border contents "data-id="{{$data->id}}">
    
    <h1 class=" h1title w-full h-15 py-1 text-2xl">{{$data->title}}</h1>
    <a class=" border mt-4 bg-orange-300 rounded-lg ml-45 text-blue-600"href="/send">✍🏻写文章</a>
    <form methon="get"action='/person/{{$data->name}}'>
    <button class=" w-12 h-10  text-xl rounded-lg">{{$data->name}}</button>
</form>
    @if(Auth::check()&&Auth::user()->name==$data->name)
    <div class="flex gap-6 mt-3">
    <button class="delete">删除</button>
    <button class="update">修改</button>
    <button class="save">保存</button>
     </div>
    @endif
    <h2 class="h2time w-full text-xl mt-2">{{$data->time}}</h2>
    <p class="pcontent w-full  mt-1 text-base whitespace-pre-wrap
    ">
      {{$data->content}}
    </p>
    <span class="w-full mt-3  border"></span>
</div> 
     
  <p class="mt-2 w-full mt-3 text-2xl h-5 ">评论</p>

 @foreach($data->comments as $com)
<div class="border mt-3">
 <button>{{$com->username}}</button>
 <h4>{{$com->created_at}}</h4>
 <p>{{$com->comment}}</p>
 @if(Auth::check()&&Auth::user()->name==$com->username)
 <button class="delcom"data-value="{{$com->id??''}}">删除</button>
 @endif
</div>
 @endforeach

 
 @auth
 <form method=post action="/comment">
  @csrf
 <input class="mt-4" type='text'name="comment" placeholder='写下评论'>
 <input type="text" name="id" class="hidden" value="{{$data->id}}">
 
 <input type="text"name="username" class="hidden"
 value="{{Auth::user()->name}}">
 
 <button>提交</button>
  @endauth
 </form>

</div>
 