<!DOCTYPE html>
<head><meta name="viewport" content="width=device-width,initial-scale=1">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   
    <x-top topButton="<"/>
   <div class="flex flex-col">
     <h3 class="text-center text-3xl mt-8">注册</h3>
    <form action="register" method=post>
        @csrf
        <input class="ml-20 h-10 w-50 mt-30" name="user" type=text placeholder="用户名">
        <input class="ml-20 h-10 w-50 mt-10" type=password placeholder="密码" name="password">
        <input class="ml-20 h-10 w-50 mt-10" name="name" type="text" placeholder="名字">
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
</body>
<style>
    .submit{
     width:130px;
     height:60px;
     margin-top:60px;
     margin-left:110px;
     border:2px solid;
     border-radius:30px;
}
</style>
<script>
    document.addEventListener('click',function (e){
     const nav=e.target.matches("#nav");
      if(nav){
       window.location.href="/login";
           }
         });
    
</script>
</html>