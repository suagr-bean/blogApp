<!DOCTYPE html>
<head> 
    <meta name="viewport"content="width=device-width,initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white-100">
    <x-top  topButton="<">登录</x-top>
<div class="flex flex-col ">
    <h3 class="text-center text-3xl mt-10"></h3>
    <form action="/login" method=post>
        @csrf
        <input class="ml-20 h-10 mt-30 w-50"  name="user" type=text  placeholder="用户名">
        <input  class="ml-20 h-10 mt-10 w-50"name="password"type=password placeholder="密码">
  
        <button id="login-but" type="submit" >登录</button>
     </div>
</form>
        <button  id="control">注册</button>
</div>
      
</body>
<style>
#control{
    width:130px;
    height:60px;
    margin-top:40px;
margin-left:110px;
font-size:20px;
padding:6px;
border:2px solid;
border-radius:30px;
}
 #login-but{
    
    height:60px;
    width:130px;
 margin-left:110px;
 margin-top:60px;
  font-size:20px;
  padding:6px;
  border:2px solid;
  border-radius:30px;
}
</style>
<script>
    const control=document.getElementById('control');
    control.addEventListener('click',function(){
        
        window.location.href="{{route('register.now')}}";
    });
    document.addEventListener('click',function (e){
       const nav=e.target.matches("#nav");
       if(nav){
        window.location.href="/home";
       }
    })
   
</script>

</html>