<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="advertise"></div>
        <nav>
            <img src="" alt="boolean logo">
        
            <ul>
                @foreach(config('main.menu') as $menu)
                    @if($loop->last)
                        <li class={{ Route::currentRouteName() == $menu['pathId'] ? 'active' : ''}}>
                            <button><a href="{{ route($menu['pathId'])}}">{{$menu['displayText']}}</a></button>
                        </li>

                    @else    
                        <li class={{ Route::currentRouteName() == $menu['pathId'] ? 'active' : ''}}>
                            <a href="{{ route($menu['pathId'])}}">{{$menu['displayText']}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <div class="hero">
            @yield('hero-title','default-HOMEPAGE')
        </div>
    </header>
    
</body>
</html>