<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </<head>
    <body>
     <div id ="body">
        <input type="file" id="file">
        <form action="/create" method="post">
            @csrf 
        <input id="number" type="text" name="number" placeholder="id">
        <input  id="title"type="text" name="title" placeholder="标题">
        <input id ="time"type="text" name="time"placeholder="时间"></br>
        <textarea id="content" name="content" placeholder="内容" ></textarea>
        <button type="submit">保存</button>
    </div>
</form>
    <body>
        <style>
           html{
            overflow:hidden;
           }
            #body{
                background:#ffa5;
                height:100vh;
                width:auto; 
                
            }
            #file{
                margin-top:30px;
            }
            button{
                position:absolute;
                right:30px;
                bottom:30px;
                width:50px;
                height:50px;
            }
            #title,#time{
                margin-left:20px;
                width:300px;
                height:18px;
                margin-top:30px;
            }
            #content{
            margin-top:10px;
            margin-left:20px;
            width:300px;
            height:60vh;
            }
            
           textarea {
            width:80vw;
            height:60vh;
           }
        </style>
</html>