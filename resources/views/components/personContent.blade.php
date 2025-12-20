@props(['content'])
<div class="w-[300px] bg-orange-100/60 h-[450px] overflow-y:auto ">
 @foreach($content as $item) 
<div class="w-full  border-b border-blue-600">
    <a href="/home/{{$item->id}}">
    <h1 class=" ml-5 mt-2 h-5">{{$item->title}}</h1>
    <h2 class="ml-5 mb-2">{{$item->time}}</h2>
</a>
</div>
@endforeach
</div>