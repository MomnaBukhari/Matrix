<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="favicon" link="/favicon.ico">
    <link rel="stylesheet" href="stylesheet/style.css">
    @yield('style')
    @yield('pusherscript')
</head>
<body>
    <header class="header">

        <div class="navbar1">
            <p><a class="logo" href="/">MATRIX</a></p>
        </div>
        <nav>
            <div class="nav-menu">
                <a href="/">Profile</a>
                <a href="/">Portfolio</a>
                <a href="/">People</a>
                <a href="/">Following</a>
                <a href="">Logout</a>
            </div>
        </nav>
    </header>
    @yield('section1')
    @yield('script')
</body>
</html>
