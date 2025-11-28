<!DOCTYPE html>
<head>
    @vite(['resources/css/blog.css'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <div id="blog">
        <x-top/>
       
        <div id="show">
          
        <div id="page" class="none">
            <h3 >解放日记</h3>
            <button id="back"><</button>

            <h4>文章目录</h4>
            @foreach($data as $item )
                <p id="menu" onclick="show({{$item->id}})">{{$item->title}}</p>
                
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
            
            show.innerText=showid.content;
             time.innerText=showid.time;
            const text=document.getElementById("text");
            text.textContent=showid.title;
            control.classList.remove("show");
        }
       }

    </script>
    
</body>
</html>