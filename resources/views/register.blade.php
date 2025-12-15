<!DOCTYPE html>
<head><meta name="viewport" content="width=device-width,initial-scale=1">
@vite(['resources/css/app.css', 'resources/js/components/person.js'])
</head>
<body>
   
    <x-top />
   <div class="flex flex-col">
     <h3 class="text-center text-3xl mt-3">注册</h3>
    <form action="register" method=post>
        @csrf
        
        <input class="ml-20 h-10 w-50 mt-20" name="user" type=text placeholder="用户名">
        <input class="ml-20 h-10 w-50 mt-10" type=password placeholder="密码" name="password">
        <input class="ml-20 h-10 w-50 mt-10" name="name" type="text" placeholder="名字">
        <input  class="ml-20 h-10 w-50 mt-10" name="porfile" type="text"placeholder="个人介绍">
<label class="img flex">
        <input type="file" name="img" accept="image/*" class="hidden choose" >
        <img class="img-show mt-3 ml-35 w-[60px] h-[60px] rounded-full border"src="#">
</label>
        <button class="submit"type="submit">注册</button>
    </form>
    @if(isset($success))
    <div>
        <h3>{{$success}}</h3>
    <script>
      window.location.href='/login';
    </script>
</div>
    @endif
</div>
<script src="//cdn.jsdelivr.net/npm/eruda"></script>
<script>eruda.init()</script>
</body>
<style>
    
    .submit{
     width:130px;
     height:60px;
     margin-top:30px;
     margin-left:110px;
     border:2px solid;
     border-radius:30px;
}
</style>
<script>
    
</script>
</html>