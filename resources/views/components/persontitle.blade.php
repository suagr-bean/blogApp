@props(['data'])
<div class=" w-[300px] h-[100px] p-3">
    <img class="fixed top-28 left-65 w-15 h-15 border rounded-full" src="{{Storage::url($data->image)}}"/>
    
    <h1 class="ml-3 text-2xl">{{$data->name}}</h1>
    <h2 class="mt-5 ml-3">{{$data->profile}}</h2>

</div>