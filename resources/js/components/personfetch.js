
//利用fetch 的FromData发照片介绍给后端 并处理返回展示
export function fetchdata(){
   document.getElementById("fetchform").addEventListener('submit',function(evet){
   event.preventDefault();
   const data=event.target;
   
   const formdata=new FormData(data);
    fetch(data.action,{
        method:'post',
        headers:{
         'accept':'application/json',
        },
        body:formdata
    }).then(response=>response.json())
    .then(data=>{
       console.log("成功");
    }).catch(error=>{
        console.log("错误",error);
    })
   })
}