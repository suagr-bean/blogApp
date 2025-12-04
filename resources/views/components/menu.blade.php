<div id="menu" >

<h2 class="text-2xl ml-40 text-black-600 mt-6">目录</h2>

@foreach($data??[] as $item)
<ol class=>
    <li  data-value="{{$item->number}}"
     class="active:translate-y-1 ml-10 text-black-600 border  rounded-3xl mt-6 mb-4 w-70 h-40 p-2 shadow-2xl">
<p  
class=" text-base w-60 p-2 text-2xl">{{$item->title}}</p>
<p>{{$item->time}} 
    <button class=" ml-3 border ">{{$item->name}} </button>
  </p>
<p class="text-base mt-1 line-clamp-2  ">{{$item->content}} </p>
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
