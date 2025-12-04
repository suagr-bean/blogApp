<div class="w-full h-15  p-3 bg-blue-100">
<div class="ml-8 flex gap-10 text-base text-orange-300">
    <p id="1"> 推荐</p>
    <p id="2"> 关注</p>
    @Auth
    <p id="3"> 发布</p>
    <p id="4"> 资料</p>
    @endAuth
</div>
</div>
<script>
     
 
    document.addEventListener('click',function (e){
     if(e.target.id==1){
        window.location.href="/show";
     } else if(e.target.id==2){
        window.location.href="/home";
     } else if(e.target.id==3){
        window.location.href="/send";
     } else if(e.target.id==4){
       window.location.href="/person"
     }
    });
    
</script>