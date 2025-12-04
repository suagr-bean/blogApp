@props(['data'])
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    .block{
        position:fixed;
        background:white  ;
        top:72px;
        left:0;
        height:83vh;
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
    }
    
    
</style>
<body>
    
    <x-top topButton="≡" home="true">解放日记</x-top>
    

    
     <x-setting/>
  
    <x-content :data="$dataSeach" />
    <div id="menucont"class="none" >
    <x-menu :data=$data />
    
    </div>
    <script>
       
        
    </script>
</body>

<script>
   
   
   document.addEventListener('click', function(e) {
      const text=e.target.matches('#nav');
        
    if (e.target.matches('#nav')) {//改变隐藏菜单显示
         
        const sidebar = document.querySelector('#menucont');
        const  button=e.target;
        
        button.textContent="=";
        
        sidebar.classList.toggle("block");
        sidebar.classList.toggle("none");
        button.textContent=sidebar.classList.contains('block')?'×':'≡';
        }
          
   });
     
</script>

</html>