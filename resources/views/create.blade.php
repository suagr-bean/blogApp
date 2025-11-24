<!DOCTYPE html>
<head></<head>
    <body>

        <form action="/create" method="post">
            @csrf 
        <input type="text" name="title" placeholder="标题">
        <input type="text" name="time"placeholder="时间"></br>
        <textarea name="content" placeholder="内容" ></textarea>
        <button type="submit">保存</button>
</form>
    <body>
        <style>
            button{
                width:60px;
                height:60px;
            }
           textarea {
            width:80vw;
            height:60vh;
           }
        </style>
</html>