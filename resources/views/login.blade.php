<!DOCTYPE html>
<head> 
    <meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
    <x-top/>
<div id="body">
    <h3>登录页面</h3>
    <form action="/login" method=post>
        @csrf
        <input name="user" type=text class="user" placeholder="用户名">
        <input name="password"class="password" type=password placeholder="密码">
         

        <button class="submit" type="submit" >登录</button>
</form>
        <button class="register" id="control">注册</button>
</div>
    
        

</body>
<style>
#body{
    margin:0;
    width:350px;
    height:650px;
    background:orange;
}
html h3{
    padding:0;
    margin:0;
}


.user{
    width:200px;
    height:35px;
    margin-left:80px;
    margin-top:180px;
}
.password{
    width:200px;
    height:35px;
    margin-left:80px;
    margin-top:50px;
}
.submit{
 margin-left:150px;
margin-top:60px;
 width:50px;
 height:30px;
}
.register{
    margin-left:150px;
    margin-top:30px;
    width:50px;
    height:30px;
}
</style>
<script>
    const control=document.getElementById('control');
    control.addEventListener('click',function(){
        
        window.location.href="{{route('register')}}";
    });
   
</script>

</html>