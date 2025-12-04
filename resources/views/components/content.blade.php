
<div class=" ml-6 w-78 mt-2 flex flex-col h-140 overflow-y-auto overflow-x-hidden
bg-white-100 shadow-md
">
 
@foreach($data as $item)
<h2 id="cont-title"class="mt-3 p-3 text-xl w-full h-15 ">
  {{$item->title}}
  </h2>
 <h3 id="cont-time"class="w-full p-1 text-base h-4 mt-3 ">
    {{$item->time}} 
</h3>
<h4 class="w-full mt-1 text-base p-1 h-4 mt-3">
  {{$item->name}}
</h4>
<p  id="cont-content"class=" text-base w-full p-3 mt-4 mb-8 ">
    {{$item->content}}  
</p>
<p class="text-3xl ml-33 w-100 h-10 mb-2"> 评论</p>
@foreach($item->comments as $com)
<div class="w-60 h-40 ml-8 p-2 bg-orange-100 ">
  <button class="border w-15 h-8" id="show-user">{{$com->username}}</button>
<p>{{$com->comment}}</p>
  <p>{{$com->created_at}}</p>
</div>
@endforeach

<form  method="post" action="/addComment">
  @csrf
<input class="mt-3 w-60 h-30 ml-8 p-2 " type="text" name="comment" placeholder="写评论" class="w-40 h-20 mt-6 ml-5 mb-8">
@Auth
<input class="hidden"type="text" name="username" value="{{Auth::user()->name}}">  <!--用户名字-->
@endAuth
<input class="hidden" name="number"type="text"id="cont-number" value="{{$item->number}}">  <!--传number对应的-->
<button class="border text-base w-10 h-6 ml-35 mb-8 ">提交</button>
</form>
@endforeach
</div>

<style>
    #con-title{
      height:40px;
       font-size:60px;
       font-weight: 700;
    }
   #con-time{
      height:20px;
      font-size:10px;
}
</style>
<script>
  
</script>