<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@vite(['resources/css/app.css', 'resources/js/app.js'])
    </<head>
    <body>
       <x-top  topButton="">发布文章</x-top>
       <x-setting/>
     <div class="h-140 w-full flex flex-col">
        
       <div class=" ml-5 mt-6 h-130 w-80 border-4 rounded-xl bg-orange-200  ">
        <form action="/create" method="post">
            @csrf 
       
        <input class="text-xl w-full h-10 p-3 mt-10 " type="text" name="number" placeholder="id">
        <input  class="text-2xl w-full h-12   p-3 "type="text" name="title" placeholder="标题">
        @Auth
        <input type=hidden name=userName value="{{Auth::user()->name}}">
        @endauth
        <input class="text-xl w-full h-10 p-3"type="text" name="time"placeholder="时间"></br>
        <textarea class="text-xl w-full h-60  p-3" name="content" placeholder="内容" ></textarea>
      
        <button class="w-15 h-15 ml-32 mt-8 border rounded-full bg-blue-300 "type="submit">保存</button>
        <div>
    </div>
</form>

    <body>
        <style>
           
        </style>
</html>