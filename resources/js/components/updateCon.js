let dealMap= new Map();
let key=null;
let data={id:"",title:"",time:"",content:""}
export function update(){

document.addEventListener('click',(event)=>{
    
     const contents=event.target.closest('.contents');
     const update=event.target.closest('.update');
     if(update){
       key=contents.dataset.id;
      
     const title=contents.querySelector('.h1title');
     const time=contents.querySelector('.h2time');
     const pcontent=contents.querySelector('.pcontent');
     
      dealMap.set(key,{
       title:title.textContent.trim(),
       time: time.textContent.trim(),
       pcontent: pcontent.innerHTML
      })
       
      title.contentEditable='true';
      time.contentEditable='true';
      pcontent.contentEditable='true'; 
      
     } 

      })
  
 
}

export function save(){
    
   
     document.addEventListener('click',function(event){
         const father=event.target.closest('.contents');
          const button=event.target.closest('.save');
           
          if(button){
             
             const titles=father.querySelector('.h1title');
             const times=father.querySelector('.h2time');
             const pcontents=father.querySelector('.pcontent');
             
             titles.contentEditable="false";
             times.contentEditable="false";
             pcontents.contentEditable="false";
            const titleMap =dealMap.get(key).title;
            const timeMap=dealMap.get(key).time;
            const contentMap=dealMap.get(key).pcontent;
             data.id=key;
             
             
             let newtitle=titles.textContent;
              let newtime=times.textContent;
            let  newcontent=pcontents.innerHTML;
             
   
             
            if(timeMap!==newtime){
               
               data.time=newtime;
              
            }
            if(titleMap!==newtitle){
               
               data.title=newtitle;
            }
            if(contentMap!==newcontent){
               
               data.content=newcontent;
            }
             
            
            fetchData();
          }
       })
    
}
export function fetchData(){
   
   const url='/updateContent';
   fetch(url,{
      method:"POST",
      headers:{
       'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]').content,
       'CONTENT-Type':'application/json'
      },
      body:JSON.stringify(data)
   }).then(response=>{
   
   })
.catch(error=>{
      console.log("错误",error);
   })
   
}
