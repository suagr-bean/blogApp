<div id="menu">

<h2 class="text-2xl ml-10 text-black-600">目录</h2>

@foreach($data??[] as $item)
<ol><li class="text-indigo-600  ">
<p  id="menu-number" data-value="{{$item->number}}"
class="ml-5 text-base w-100 mt-2 ml-4">{{$item->title}}</p>
</li><ol class>
@endforeach
</div>
<style>
    #menu{
        
        width:200px;
        height:auto;
        display:flex;
        flex-direction:column;
    }
</style>
