<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    .block{
        position:fixed;
        background:#f8ecec ;
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
        position:relative;
    }
    #home{
        width:360px;
    }
</style>
<body>
    
    <x-top topButton="≡" home="true">解放日记</x-top>
    <x-setting/>
    <div id="home">
    
    <x-content :data="$data" ></x-content>
    <div id="menucont" class="none">
    <div>
   
    <x-menu :data=$data />
    
    </div>
    <script>
        window.number=0;
        window.data=@json($data);
    </script>
</body>

<script>
   window.number=0;
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
        const li=e.target.closest('li[data-value]');
        
     if(li){
        const number =li.dataset.value;//li是个对象
        
        window.number=number;
       
      const sidebar=document.querySelector('#menucont');
        sidebar.classList.remove("block");
        sidebar.classList.add("none");
        const button =document.getElementById("nav");
         button.textContent="≡";
         }
         window.update();
   });
     
</script>

</html>