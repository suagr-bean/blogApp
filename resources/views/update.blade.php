<! DOCTYPE html>
<body>
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
#title{
    Width:100%;
    height:40vh;
}

</style>
</html>.