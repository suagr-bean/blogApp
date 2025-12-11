<div id="menu" class='overflow-x-hidden'>

<h2 class="text-2xl  text-black-600 mt-6">目录</h2>

@foreach($data??[] as $item)
<ol >
    <a href="/home/{{$item->id}}">
    <li  data-value="{{$item->title}}"
     class="active:translate-y-1  text-black-600   rounded-3xl  w-30 h-50  shadow-2xl">
     
<p  
class=" text-base w-20 p-2 text-2xl">{{$item->title}}</p>
<p>{{$item->time}} 
    <button class=" ml-3 border ">{{$item->name}} </button>
  </p>
<p class="text-base mt-1 line-clamp-2  ">{{$item->content}} </p>
</li>
</a>
<ol >
@endforeach
</div>
<style>
    #menu{
        
        
        display:flex;
        flex-direction:column;
    }
</style>
