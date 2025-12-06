@props(['data'])
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<style>
    .block{
        position:fixed;
        background:white  ;
        top:70px;
        left:0;
        height:85vh;
        width:100%;
        display:block;  
        overflow-y:auto;
       
    }
    .none{
        transform : translateY(100px);
        display:none;

    }
    body{
        width:360px;
        height:auto;
        background:#FAF3E3;
        overflow-y:auto;
    }
    
    
</style>
<body id="body">
    
    <x-top topButton="≡" home="true">解放日记</x-top>
    

    
     <x-setting/>
  
    <x-content :data="$dataSeach" />
    <div id="menucont"class="none" >
    <x-menu :data=$data />
    </div>
    
 
</body>
<script src="//cdn.jsdelivr.net/npm/eruda"></script>
<script>eruda.init()
    //调试工具
</script>
<script>
    
     let body=document.getElementById("body");
   document.addEventListener('click', function(e) {
      const text=e.target.matches('#nav');
       
       console.log(body);
    if (e.target.matches('#nav')) {//改变隐藏菜单显示
        body.style.overflowY='hidden';
        const sidebar = document.querySelector('#menucont');
        const  button=e.target;
        
        button.textContent="=";
        
        sidebar.classList.toggle("block");
        sidebar.classList.toggle("none");
        button.textContent=sidebar.classList.contains('block')?'×':'≡';
        } else
        body.style.overflowY="auto";
   });
    
     
</script>

</html>