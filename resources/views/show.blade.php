
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@vite(['resources/css/app.css', 'resources/js/components/button.js'])
</head>
<body>
    

<x-top home="false"/>
<x-setting />

<x-rec :data='$showdata'/>
<script>

</script>
<script src="//cdn.jsdelivr.net/npm/eruda"></script>
<script>eruda.init()</script>
</body>
 </html>