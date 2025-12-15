@props(['data'])
<!DOCTYPE html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 
    'resources/js/components/homeMain.js'])

</head>
<style>
    .block{
        position:fixed;
        background:white;
        top:50px;
        left:0px;
        
        width:250px;
        display:block;  
        overflow-y:auto;
      
    }
    .none{
        transform : translateX(0px);
        display:none;

    }
  
    
    
    
</style>
<body >
    <div id="all">
    <x-top button="≡" >解放日记</x-top>
    
     
    
    <x-content :data="$dataSeach" />
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
      const content =document.querySelector('.content');
      
       
    if (e.target.matches('#nav')) {//改变隐藏菜单显示
        
        const sidebar = document.querySelector('#menucont');
        const  button=e.target;
        
        button.textContent="=";
        
        sidebar.classList.toggle("block");
        sidebar.classList.toggle("none");
        button.textContent=sidebar.classList.contains('block')?'×':'≡';
      if(sidebar.classList=="block"){
        content.style.overflowY="hidden";
      }else{
        content.style.overflowY="auto";
      }
}
        
   });
    
     
</script>

</html>