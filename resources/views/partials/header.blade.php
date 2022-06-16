<header>

    <div class="header-top">
        <div class="container">

            <div class="power">dc power visa</div>
            <div class="additional">additional dc sites</div>

        </div>
    </div>

    <div class="header-bottom">
        <div class="container">

            <div class="logo">
                <img src="{{asset('img/dc-logo.png')}}" alt="logo DC Comics">
            </div>
    
            <nav>
                <ul>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li><a href="{{route('characters')}}">characters</a></li>
                    <li><a href="{{route('comics.index')}}">comics</a></li>
                    <li><a href="{{route('movies')}}">movies</a></li>
                    <li><a href="{{route('tv')}}">tv</a></li>
                    <li><a href="{{route('games')}}">games</a></li>
                    <li><a href="{{route('collectibles')}}">collectibles</a></li>
                    <li><a href="{{route('videos')}}">videos</a></li>
                    <li><a href="{{route('fans')}}">fans</a></li>
                    <li><a href="{{route('news')}}">news</a></li>
                    <li><a href="{{route('shop')}}">shop</a></li>
                    
                </ul>
            </nav>

            <div class="search">
                <input type="search" name="search_bar" id="search_bar" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            
        </div>
    </div>


</header>