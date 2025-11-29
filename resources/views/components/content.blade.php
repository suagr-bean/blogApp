<div class=" w-full flex flex-col h-130 overflow-y-auto">
<h2 id="cont-title"class="p-3">
</h2>
<h3 id="cont-time"class="   p-1  mt:3">
 </h3>
<p  id="cont-content"class="mt-4 flex-1 ">
    <p>
<div>
<style>
    #con-title{
      height:40px;
       font-size:60px;
       font-weight: 700;
    }
   #con-time{
      height:20px;
      font-size:10px;
}
</style>
<script>
  window.update= function(){
       
       const number=window.number;
       const data =window.data;
       if(number!=0){
         
        const findData=data.find(d=>d.number==number);
         
         if(findData){
         document.getElementById("cont-title").textContent
         =findData.title;
         document.getElementById("cont-time").textContent
         =findData.time;
         document.getElementById("cont-content").innerText
         =findData.content;
         }
       }
    }
</script>