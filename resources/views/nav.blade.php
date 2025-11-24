<!DOCTYPE html>
<head>
     <!-- Laravel 10、11推荐 -->
    @vite(['resources/css/nav.css'])
    
</head>
<body>
    @yield("home")
    @yield("text")
    
    <nav class="nav"> 
        <a  class ="home"href="/home">home</a>
        <a  class = "text"href="/text">text</a>
    </nav>
    <h1> hello laravel</h1>
</body>
</html>