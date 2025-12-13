<!DOCTYPE html>
<head>
    @vite(['resources/css/app.css'])
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
 <x-top/>
 @foreach($user as $data)
 <p>{{$data->user}}</p>
 <p>{{$data->name}}</p>
 @endforeach
</body>
</html>