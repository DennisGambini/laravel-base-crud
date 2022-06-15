<?php
$data = config('footer');
?>

<footer>

    <div class="footer-center">
        <div class="container">
            <div class="liste">
                @foreach ($data as $list)
                    <ul>
                        <li class="head">{{$list['name']}}</li>
                        @foreach($list['content'] as $li)
                        <li class="normal">
                            <a href="#">{{$li}}</a>
                        </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
            <div class="copyright">
                All Site Content TM and 2020 DC Entertainment, unless otherwise 
                <a href="#">noted here</a>. All rights reserved. <br>
                <a href="#">Cookies settings</a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <button>sign-up now!</button>
            <div class="icons">
                <span>follow us</span>
                <img src="{{asset('img/footer-facebook.png')}}" alt="immagine footer">
                <img src="{{asset('img/footer-twitter.png')}}" alt="immagine footer">
                <img src="{{asset('img/footer-youtube.png')}}" alt="immagine footer">
                <img src="{{asset('img/footer-pinterest.png')}}" alt="immagine footer">
                <img src="{{asset('img/footer-periscope.png')}}" alt="immagine footer">
            </div>
        </div>
    </div>
    


</footer>