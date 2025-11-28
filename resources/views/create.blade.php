<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </<head>
    <body>
        
     <div id ="body">
        <x-top/>
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
           
        </style>
</html>