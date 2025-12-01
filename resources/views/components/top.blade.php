@props([ 'topButton' => '','home'=>false])
 <div class="bg-[#fdf6e3] w-full h-18 flex  items-center px-4 shadow-lg">
    
   
   <button id ="nav" class=" mt-1 ml-6 w-15 h-15 text-3xl  ">{{$topButton}}</button>
  
      <h1 class="tex-black-400 text-2xl ml-14 mt-1 w-40">{{$slot}}</h1>
 @Auth
       @if($home==true)
 <button id="name"class="w-15 h-15 text-xl ml-18 border rounded-lg  bg-orange-200 "
 >{{Auth::user()->name}}</button>
       @endif
 @elseif ($home==false)
<a  class="w-10 h-20 text-xl ml-10 mt-6 text-blue-300  "href="/login"></a>
@else 
<a  class="w-10 h-20 text-xl ml-10 mt-6 text-blue-300  "href="/login">登录</a>
@endauth
</div>
