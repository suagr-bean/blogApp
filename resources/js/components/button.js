const swith=document.querySelector("#swith");
const control=document.querySelector("#control");

let on=false;
swith.addEventListener('click',()=>{
   on=!on;
if(on){
control.style.transform='translateY(-2.2rem)'; 
show();
}else{
show();
control.style.transform='translateY(0)';
}
});
function show(){

const title=document.getElementById('show-title');
const time=document.getElementById('show-time');
const name=document.getElementById('show-name');
const content=document.getElementById('show-content');
const geturl=document.getElementById("control");
const url=geturl.getAttribute('data-url');
const formurl=document.getElementById('show-form');
fetch(url,{
method:'GET',
headers:{
'Content-Type':'application/json'
}
}).then(response=>{
if(!response.ok){
throw new Error('获取文章失败');
}
return response.json();
}).then(showdata=>{
title.textContent=showdata.title;
formurl.action='/person/'+showdata.name;
time.textContent=showdata.apply;
name.textContent=showdata.name;
content.innerHTML=showdata.content;
}).catch(error=>{
console.log("请求失败");
}).finally({

})
}