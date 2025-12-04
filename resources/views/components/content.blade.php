
<div class="border-2 ml-6 w-78 mt-6 flex flex-col h-140 overflow-y-auto overflow-x-hidden
bg-white-100 shadow-md
">
 
@foreach($data as $item)
<h2 id="cont-title"class="mt-3 p-3 text-xl w-full h-15 ">
  {{$item->title}}
  </h2>
 <h3 id="cont-time"class="w-full p-3 text-base h-4 mt-3 ">
    {{$item->time}} 
</h3>
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

<form  method="post" action="/text">
  @csrf
<input class="mt-3 w-60 h-30 ml-8 p-2 " type="text" name="comment" placeholder="写评论" class="w-40 h-20 mt-6 ml-5 mb-8">
@Auth
<input class="hidden"type="text" name="username" value="{{Auth::user()->name}}">  <!--用户名字-->
@endAuth
<input class="hidden" name="number"type="text"id="cont-number" value="{{$item->number}}">  <!--传number对应的-->
<button class="border text-base w-10 h-6 ml-35 mt-4 ">提交</button>
</form>
<p class= "w-full border mt-4"></p>
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
  window.update= function(){
       
       const number=window.number;
       const data =window.data;
       
       if(number!=0){
       const findData=data.find(d=>d.number==number);
        if(findData){
      document.getElementById("cont-title").textContent=findData.title;
    document.getElementById("cont-time").textContent=findData.time;
document.getElementById("cont-content").innerText=findData.content;
        
       }
      }
    }
</script>