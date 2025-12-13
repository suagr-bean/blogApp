<div id="menu" class='  overflow-y-auto min-h-[600px]
border-[2px] bg-orange-300 rounded-[10px] '>

<h2 class="text-2xl text-black-600 mt-6">目录</h2>

@foreach($data??[] as $item)
<ol >
    <a href="/home/{{$item->id}}">
    <li  data-value="{{$item->title}}"
     class=" w-[235px] ml-1 border-b ">
     
<p  
class="ml-3 h-[28px] font-bold">{{$item->title}}</p>
<div class="flex">
<p class="ml-3">{{$item->time}} </p>
    <p class="ml-10" >{{$item->name}} </p>
</div>
  
</li>
<ol >
@endforeach
</div>
<style>
    #menu{
        
        
        display:flex;
        flex-direction:column;
    }
</style>
