

export function deleteCom(){
  
  
   


document.addEventListener('click',function (e){
    const button=e.target.closest(".delcom");
    
   const id=button?.dataset?.value;
   
  if(id){
   fetch(`/comment/${id}`,{
    method:'DELETE',
    headers:{
      'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]').content,
      'CONTENT-Type':'application/json'
    }
   }).then(response=>{
      if(response.ok){
         console.log('评论删除成功');
         this.closest('.com').remove();

      }else{
         console.log('删除失败');
      }
   }).catch(error=>{
      console.log("网络错误",error);
   })
}
})
}


