@props(['data'])
<!DOCTYPE html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 
    'resources/js/components/homeMain.js'])
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<style>
    .block{
        position:fixed;
        background:white;
        top:53px;
        left:0;
        height:auto;
        width:180px;
        display:block;  
        overflow-y:auto;
       
    }
    .none{
        transform : translateX(60px);
        display:none;

    }
    #body{
       
        background:orange;
        opacity:0.5
        padding-top:10px;
        padding-bottom:15px;
        overflow-y:auto;
    }
    
    
    
</style>
<body >
    <div id="all">
    <x-top topButton="≡" home="true">解放日记</x-top>
    
     <x-setting/>
    <div id="body">
    <x-content :data="$dataSeach" />
</div>
</div>
    <div id="menucont"class="none" >
    <x-menu :data=$data />
    </div>
    
    
 
</body>
<script src="//cdn.jsdelivr.net/npm/eruda"></script>
<script>eruda.init()
    //调试工具
</script>
<script>
     
     
   document.addEventListener('click', function(e) {
      const text=e.target.matches('#nav');
       const body=document.getElementById('body');
       
    if (e.target.matches('#nav')) {//改变隐藏菜单显示
        
        const sidebar = document.querySelector('#menucont');
        const  button=e.target;
        
        button.textContent="=";
        
        sidebar.classList.toggle("block");
        sidebar.classList.toggle("none");
        button.textContent=sidebar.classList.contains('block')?'×':'≡';
        body.style.overflow="hidden";
} 
        
   });
    
     
</script>

</html>