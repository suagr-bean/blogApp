
const dealMap= new Map();
let key=null;
let  title=false;
let time=false;
let content=false;
let data={title:"",time:"",content:""}
export function update(){
document.querySelectorAll('.update').forEach(update=>{
update.addEventListener('click',(event)=>{
     const contents=event.target.closest('.contents');
     
     if(contents){
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
 })
}

export function save(){
    
   
    document.querySelectorAll('.save').forEach(save=>{
       save.addEventListener('click',function(event){
          const father=event.target.closest('.contents');
         
          
          if(father){
             const titles=father.querySelector('.h1title');
             const times=father.querySelector('.h2time');
             const pcontents=father.querySelector('.pcontent');
             titles.contentEditable="false";
             times.contentEditable="false";
             pcontents.contentEditable="false";
            const titleMap =dealMap.get(key).title;
            const timeMap=dealMap.get(key).time;
            const contentMap=dealMap.get(key).pcontent;
            
              
             let newtitle=titles.textContent;
            let newtime=times.textContent;
            let  newcontent=pcontents.innerHTML;
             
            if(timeMap!==newtime){
               time=true;
               data.time=newtime;
              
            }
            if(titleMap!==newtitle){
               title=true;
               data.title=newtitle;
            }
            if(contentMap!==newcontent){
               content=true;
               data.content=newcontent;
            }
             
          }
       })
    })
}
export function ajaxdata(){
   console.log(data);
}
