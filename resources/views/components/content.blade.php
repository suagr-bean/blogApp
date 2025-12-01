@vite(['resources/css/app.css', 'resources/js/app.js'])


<div class=" w-full flex flex-col h-130 overflow-y-auto 
">
<h2 id="cont-title"class="mt-3 p-3 text-xl w-full h-15 ">
</h2>

<h3 id="cont-time"class="w-full p-3 text-base h-4 mt-3 ">
 </h3>
<p  id="cont-content"class=" text-base w-full p-3 mt-4 flex:0.6 ">
    <p>
<p class="">
  没有评论
</p>
<from>
<input type="text" placeholder="评论">
<button class="border text-base ">提交</button>
</from>
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