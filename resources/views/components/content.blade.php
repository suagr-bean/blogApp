
<div class=" ml-6 w-78 mt-2 flex flex-col h-200 overflow-y-auto overflow-x-hidden
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

<p class="text-3xl ml-33 w-full h-10 mb-2"> 评论</p>
@foreach($item->comments as $com)
 <div class="w-78 h-30 border mt-2">
  <button class="border w-25 h-8 mt-3" id="show-user">{{$com->username}}</button>
<p class="w-full h-25 ml-3 mt-1">{{$com->comment}}</p>
  <p class="w-40 h-6 ml-3 mt-1">{{$com->created_at}}</p>

</div>
@endforeach
<form method=post action="/comment">
  @csrf
  <input type="text" class="hidden" name="title"value="{{$item->title}}">
  @Auth
  <input type="text"class="hidden" name="username" value="{{Auth::user()->name}}">
  @endAuth
  
  <input class="w-60 h-30 mt-3 ml-8 border" type="text" name="comment">
  <button class="w-10 h-8 border mt-1 ml-32">提交</button>
</div>
</div>
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