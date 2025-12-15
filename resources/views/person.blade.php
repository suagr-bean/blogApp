<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@vite(['resources/css/app.css', 'resources/js/components/person.js'])
</head>
<body>
    <x-top />
    
    <div class="flex flex-col">
    <div class="w-80 p-5 mt-8 ml-3 h-[540px] border "> 
    @auth
    <form id="fetchform" action='/home/person'>
        @csrf
    <input class="mt-4" name="name"value='{{Auth::user()->name}}'>
    <label >
        <p class="border w-16 h-6 pl-5  fixed top-46 left-63 text-[12px] rounded-[18px] ">头像</p>
        <input type="file" name="image"accept='image/*' class="file hidden">
</label>
    <input name="profile"class="border mt-5 w-50 h-7"placeholder="介绍自己"/>
    <button type="submit"class="border fixed top-[200px] left-[190px]">保存</button>
</form>
    <img src="#" class="show fixed top-28 left-64 border   rounded-full object-cover w-[60px] h-[60px] ">
    
    @endauth
    <form method="post" action='layout'>
    @csrf
    @auth
    <input  type="text" class="hidden"placeholder="{{Auth::user()->name}}">
    <button class="fixed border rounded-[18px] w-16 h-6 top-60 left-63">退出</button>
     @endauth
    </form>
    <p class=" w-full mt-10 border"></p>

</div>
    

    
     
    

</div>

 <script src="//cdn.jsdelivr.net/npm/eruda"></script>
 <script>eruda.init()</script>
</body>

</html>