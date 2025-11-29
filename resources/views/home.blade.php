<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    .block{
        position:fixed;
        background:#fdf6e3;
        top:72px;
        left:0;
        height:100vh;
        width:100%;
        display:block;      
    }
    .none{
        display:none;

    }
</style>
<body>
    
    <x-top />
    <x-content :data="$data" />
    <div id="menucont" class="none">
   
    <x-menu :data="$data"/>
    
    </div>
</body>

<script>
   window.number=0;
   document.addEventListener('click', function(e) {
    if (e.target.matches('#nav')) {//改变隐藏菜单显示
        const sidebar = document.querySelector('#menucont');
        var button=e.target;
        sidebar.classList.toggle("block");
        sidebar.classList.toggle("none");
        button.textContent=sidebar.classList.contains('block')?'>':'<';
        }
     if(e.target.matches("#menu-number")){
        const number =e.target.getAttribute('data-value');
        window.number=number;
      const sidebar=document.querySelector('#menucont');
        sidebar.classList.remove("block");
        sidebar.classList.add("none");
        const button =document.getElementById("nav");
        button.textContent="<";
        
       }
       
   });
     
</script>

</html>