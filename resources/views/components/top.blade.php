@props([ 'topButton' => '','home'=>false])
 <div class="bg-[#fdf6e3] w-full h-12 flex  items-center px-1 shadow-lg">
    
   
   <button id ="nav" class=" mt-1 ml-3 w-20 h-15 text-3xl  ">{{$topButton}}</button>
   <div class="flex ">
   <a href="/show" class="w-15 ml-4 h-10 text-base mt-5 ">推荐 </a>
      <h1 class=" text-2xl ml-2 mt-4 w-25 h-10">{{$slot}}</h1>
   <a href="/home"class=" w-15 h-10 ml-3 text-base mt-5">文章</a>
</div>
 @Auth
       @if($home==true)
 <button id="name"class="w-30 h-11  text-xl  border rounded-lg  bg-orange-200 "
 >{{Auth::user()->name}}</button>
 
       @endif
 @elseif ($home==false)
<a  class="w-10 h-20 text-xl ml-10 mt-6 text-blue-300  "href="/login"></a>
@else 
<a  class=" w-20 h-8 text-base ml-5 mt-auto text-black   "href="/login">登录</a>
@endauth
</div>
