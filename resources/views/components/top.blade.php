
 <div class="bg-[#fdf6e3] w-full h-18 flex  items-center px-4">
    
   <button id ="nav" class=" mt-1 ml-4 w-15 h-15 text-3xl  ">></button>
      <h1 class="tex-black-400 text-2xl ml-15 mt-3 w-40">解放日记</h1>
  @auth
 <button id="name"class="w-15 h-10 text-2xl ml-18 border rounded-lg  bg-orange-200 "
 >{{Auth::user()->name}}</button>
 @else
<a  class="w-10 h-20 text-xl ml-10 mt-6 text-blue-300  "href="/login">登录</a>
@endauth
</div>
