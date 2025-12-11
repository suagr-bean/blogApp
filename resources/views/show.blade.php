
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@vite(['resources/css/app.css', 'resources/js/components/button.js','resources/js/components/showname.js'])
</head>
<body>
    

<x-top home="false"/>
<x-setting />

<x-rec :data='$showdata'/>
<a id="read"href="/home/{{$showdata->id}}"
class="fixed  w-30 h-6 top-[585px] left-[120px] text-orange-400/50 text-xl">阅读全文<a>
 

<script src="//cdn.jsdelivr.net/npm/eruda"></script>
<script>eruda.init()</script>
</body>
<script>
    
    
</script>

 </html>