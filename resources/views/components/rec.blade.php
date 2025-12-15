
@props(['data'])
<div class="w-[360px] h-[650px]  flex mt-4">


<div id="getTitle" class="mt-5 js-card mt-20 " >
    <div class=" w-70 h-[450px] border ml-10  rounded-[25px] bg-white/40 border-white/30
    shadow-blue-800 shadow-lg flex flex-col" >
  
    <p id="show-title"class="text-2xl mt-5 ml-4 font-bold">
        {{$data->title}}</p>
    <p id="show-time" class="text-base mt-2 ml-3 w-20 h-6">{{$data->time}}</p>
    <form method="get" action='/person/{{$data->name}}'>
    <button id="show-name" class="w-10 h-6 border ml-25 mt-0 rounded-lg bg-orange-300/15" data-value ="{{$data->name}}">{{$data->name}}</button>
</form>
    <p id="show-content" class="ml-4 w-53 h-73 mt-3 line-clamp-10 whitespace-normal">{!!nl2br(e($data->content))!!}</p>
    </div>
  
    <x-button class="fixed top-[60vh] left-[65vw]"/>
</div>


</div>

