<!DOCTYPE html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 @vite(['resources/css/app.css'])
</head>
<body>
    <x-top>解放日记</x-top>
    <div class="w-[300px] h-[550px] border rounded-[30px] bg-orange-300 ml-8 mt-10 ">
    <x-persontitle :data=$data/>
    <x-personContent :content=$content/>
</div> 
<script src="//cdn.jsdelivr.net/npm/eruda"></script>
<script>eruda.init()</script>
</body>
</html>