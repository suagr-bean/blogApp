<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-top/>
    <form method="post" action='layout'>
    @csrf
    <button>退出 </button>
    </form>
</body>

</html>