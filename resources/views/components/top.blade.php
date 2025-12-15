<div{{ $attributes->merge(['class' => '']) }}></div>
 <div class="bg-[#fdf6e3] w-full h-12 flex  items-center px-1 shadow-lg">

   
   <button id ="nav" class=" mt-1  w-20 h-15 text-3xl  ">{{$attributes->get('button','')}}</button>
   <div class="flex ">
   <a href="/show" class="w-15  h-10 text-base mt-5 ">推荐 </a>
      <h1 class=" text-2xl  mt-4 w-25 h-10">{{$slot}}</h1>
   <a href="/home"class=" w-15 h-10 ml-2 text-base mt-5">文章</a>
</div>
 @Auth
 <a href="/person/{{$name}}">
 <img id="userImage"class=" w-[45px] h-[45px] border rounded-full"src="{{asset($url)}}"/>  

</a>
 @else 
<a  class=" w-20 h-8 text-base mt-auto text-black "href="/login">登录</a>
@endauth
</div>
