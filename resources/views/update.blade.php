<! DOCTYPE html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <head><meta name="viewport" content="width=device-width,initial-scale=1">

</head>
<body>
    <x-top title="修改" topButton="/"></x-top>
    <form action="/update" method="post">
    @csrf
    <input type="text" name="number">
    <button>查询</button>
</form>
<form action="/change" method="post" >
@csrf
   <input name="id" value='{{$data->id??""}}'>
   <input name="number"value='{{$data->number??""}}'>
  <input type="text" Name="title" value='{{$data->title??""}}'>
  <input type="text" Name ="time"value='{{$data->time??""}}'>
     <textarea id="title" name="content">{{$data->content??""}}</textarea>
 <button>修改保存</button>
</form>
</body>
<style>


</style>
</html>.