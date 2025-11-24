<!DOCTYPE html>
<head>
    @vite(['resources/css/blog.css'])
</head>
<body>
    <div id="blog">
        <div class="top">
        <h1>解放日记blog</h1>
       <button id ="nav">≡</button> </div>
        <div id="show">
        <div id="page" class="none">
            <button id="back">🔙</button>
            @foreach($data as $item )
                <p id="menu{{$item->id}}" onclick="show({{$item->id}})">{{$item->title}}</p>
                
            @endforeach
        </div>
        <div class="showcontent">
            <h3 id="text"></h3>
            <h5 id="time"></h5>
         <p id="content" ></p>
        </div>
</div>
     </div>
     <style>
    
      
     </style>
    <script>
    //隐藏显示
       const control =document.getElementById("page");
       
       const nav=document.getElementById("nav");
       nav.addEventListener('click',()=>{
       control.classList.toggle("show");
       
});
   const back =document.getElementById("back");
   back.addEventListener('click',()=>{
    control.classList.remove("show");
     
   });
    
     const data =@json($data);
     function show(id){
        const  showid=data.find(p=>p.id==id);
        if(showid){
            const show =document.getElementById("content");
            const time =document.getElementById("time");
            document.getElementById("menu"+id).style.background="red";
            show.innerText=showid.content;
             time.innerText=showid.time;
            const text=document.getElementById("text");
            text.textContent=showid.title;
            control.classList.remove("show");
        }
        document.getElementById("menu"+id).style.background="white";
     }

    </script>
    
</body>
</html>