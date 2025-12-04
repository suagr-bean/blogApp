<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@vite(['resources/css/app.css', 'resources/js/app.js'])
    </<head>
    <body>
       <x-top title="发布" topButton=""></x-top>
     <div class=" h-145 overflow-hidden flex flex-col  p-3">
        
        
        <form action="/create" method="post">
            @csrf 
       
        <input class="text-xl w-full h-10 p-3 mt-5 " type="text" name="number" placeholder="id">
        <input  class="text-2xl w-full h-12   p-3 "type="text" name="title" placeholder="标题">
        @Auth
        <input type=hidden name=userName value="{{Auth::user()->name}}">
        @endauth
        <input class="text-xl w-full h-10 p-3"type="text" name="time"placeholder="时间"></br>
        <textarea class="text-xl w-full h-80  p-3" name="content" placeholder="内容" ></textarea>
      <input type="file" class="ml-4  w-30 h-8  ">
        <button class="w-15 h-10 border mb-30 ml-60"type="submit">保存</button>
    </div>
</form>

    <body>
        <style>
           
        </style>
</html>