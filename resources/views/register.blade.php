<!DOCTYPE html>
<head><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body>
    
   <div id="body">
     <h3>注册</h3>
    <form action="register" method=post>
        @csrf
        <input class="user" name="user" type=text placeholder="用户名">
        <input class="password" type=password placeholder="密码" name="password">
        <input name="name" type="text">
        <button class="submit"type="submit">注册</button>
    </form>
</div>
</body>
<style>
    #body{
        margin:0;
        padding:0;
        width:350px;
        height:680px;
        background:orange;
    }
    h3{
        margin:0;
        padding:0;
    }
    .user{
        width:200px;
        height:35px;
        margin-top:180px;
        margin-left:80px;
    }
    .password{
        width:200px;
        height:35px;
        margin-left:80px;
        margin-top:50px;
    }
    .submit{
        width:50px;
        height:30px;
        margin-top:60px;
        margin-left:150px;
    }
</style>
</html>