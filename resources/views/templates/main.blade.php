<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Global.css">
    <link rel="stylesheet" href="css/MainTemplateStyle.css">
    <link rel="stylesheet" href="css/indexStyle.css">
    <title>Document</title>
</head>
<body>
    <nav id="mainNavBar">
        <div id="logo">
            <h1>LOGO</h1>
        </div>
        <div id="mainNavBarLinks">
            <a href="{{ url('/') }}" class="link">Home</a>
            <a href="{{ url('/') }}" class="link">Seevices</a>
            <a href="{{ url('/') }}" class="link">About</a>
            <a href="{{ url('/') }}" class="link">Contact</a>
            <a href="{{ url('/') }}" class="link">FAQ</a>
            <a href="{{ url('SignUp') }}" class="link SignupLink">SIGN UP</a>
            <div id="Menu">
                
            </div>
        </div>
    </nav>

    <main>
        @yield('MainContent')
    </main>

    
</body>
</html>