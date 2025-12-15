
const file=document.querySelector(".choose");
file.addEventListener('change',function(event){
 const image=event.target.files[0];
 const show=document.querySelector('.img-show');
  if(image){
    const read =new FileReader();
    
    read.onload=function(e){
        console.log("读取成功");
        
        show.src=e.target.result;
    }
    read.onerror=function(e){
        console.log(e.target.error);
    }
     read.readAsDataURL(image);
  }
     
});

