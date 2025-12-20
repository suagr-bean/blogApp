<div{{ $attributes->merge(['class' => '']) }}></div>
 <div class="bg-[#fdf6e3] w-full h-12 flex  items-center justify-center px-1 shadow-lg">

   
   <button id ="nav" class=" mt-1  w-20 h-15 text-3xl  ">{{$attributes->get('button','')}}</button>
   
      <h1 class="self-center text-2xl  mt-4 w-25 h-10">{{$slot}}</h1>
 @Auth
 <img id="userImage"class=" ml-5 w-[45px] h-[45px] border rounded-full"src="{{asset($url)}}"/>  
 @else 
<a  class=" w-20 h-8 text-base mt-auto text-black "href="/login">登录</a>
@endauth
</div>
<div class="fixed   p-1 flex gap-10 h-10 w-full bg-orange-100 ">
  <a href="/home"class=" ml-2 text-base ">文章</a>
  <a href="/show" class="text-base  ">推荐 </a>
  <a href="/person/{{$name}}">主页</a>
  <a>关注</a>
  <form  method="post"action="/layout">
  @csrf 
  @if(Auth::check())
  <button>退出</button>
   @endif
  </form>
</div>
