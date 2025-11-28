<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    #menu-block{
        position:fixed;
        background:blue;
        top:0;
        left:0;
        height:100vh;
        width:100%;
        display:block;      
    }
    #menu-none{
        display:none;
    }
</style>
<body>
    
    <x-top />
    <x-content title="测试" time="10" content="测试"/>
    <div id="menu-none">
    @foreach($data as $title )
    <x-menu  title="{{$title->title}}"/>
    @endforeach
    </div>

<script>
    document.addEventListener("DOMContentLoaded",function(){
    const block=document.getElementById("menu-none");
    const col=document.getElementById("colmenu");
    col.addEventListener('click',function(){
       
        block.classList.toggle("menu-block");
    });
});
</script>
</body>
</html>