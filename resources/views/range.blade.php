<!DOCTYPE html>
<head>
   
</head>
<body>
   <h1>text</h1>
   <div id="but"></div> 
  
   
     
  <script >
   const color =["h","s","d","c"];
   const number =["A","K","Q","J","10","9","8","7","6","5","4","3","2"];
   const all =[];
   
   /* color.forEach(suit=>{
      number.forEach(number =>{
        all.push(suit+number);
      });
    });*/
    const number2=Array.from(number);
   number.forEach ((number,i)=>{
      number2.forEach((number2,j)=>{
        if(i<=j){
          all.push(number+number2)
        }
      });
    });
   const but = document.getElementById("but");
   all.forEach( element => {

    const button =document.createElement("button");
    button.textContent= element;
     but.appendChild(button);
   });

  </script>
  <style>
    #but{
      
      background-color : pink;
     display:flex;
     flex-flow : row wrap;
      gap:10px;
    }
    #but button{
      width:10vw;
      height:5vh;
      flex: 0 0 2%;
      color : blue;
      background-color : orange;
      
    }
  </style>
</body>


</html>