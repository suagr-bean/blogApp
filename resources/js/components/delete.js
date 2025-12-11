export function delcontent(){
 document.addEventListener('click',function(event){
    const button=event.target.closest('.delete');
    const contents=event.target.closest('.contents');
     
    if(button){
        const id=contents.dataset.id;
        
      fetch(`/content/${id}`,{
        method:'DELETE',
        headers:{
       'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]').content,
        'Content-Type':"application/json"
        }

      }).then(response=>{
        if(response.ok){
          console.log("成功");
        }
      }).catch(error=>{
        console.log("失败");
      })
    }
    
 })
}