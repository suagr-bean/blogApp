
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@vite(['resources/css/app.css', 'resources/js/components/button.js','resources/js/components/showname.js'])
</head>
<body>
    
<div class="bg-orange-400/30">
<x-top home="false"/>
<a class=" border fixed top-[220px] left-60 bg-orange-300 rounded-lg  text-blue-600"href="/send">✍🏻写文章</a>
<x-rec :data='$showdata'/>
<a id="read"href="/home/{{$showdata->id}}"
class="fixed  w-30 h-6 top-[560px] left-[130px] text-orange-400/50 text-xl">阅读全文<a>

</div>

<script src="//cdn.jsdelivr.net/npm/eruda"></script>
<script>eruda.init()</script>
</body>
<script>
    
    
</script>

 </html>