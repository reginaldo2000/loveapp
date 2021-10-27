<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
    
    @hasSection ('modais')
        @yield('modais')        
    @endif

    <header class="loveapp text-center">
        <div id="content-button-menu" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <span class="loveapp-title">LoveAPP <i class="fa fa-heart" aria-hidden="true"></i></span>
    </header>

    @include('layouts.navbar-menu')

    <div class="container-lg">
        <section class="main-content">
            <h3 class="content-title">{{ $contentTitle }}</h3>
            @hasSection('loveapp-content')
                @yield('loveapp-content')
            @endif
        </section>
    </div>
    @include('layouts.footer')
</body>

</html>
