

@section('css')
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/co-version.css">
@endsection

@section('topalert')
    <div class="top-alert d-flex">
        <div class="info d-flex ">
            <img src="images/jsg-icon/info-icon.svg" alt="">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
        </div>
        <a href="javascript:;" class="info-close d-flex" id="infoClose">
            <img src="images/jsg-icon/icon-close.svg" alt="">
        </a>
    </div>
@endsection


        @section('header-nav-menu')
        <div class="nav-menu d-flex">
            <ul class="main-services d-flex">
                <li><a class="a" href="javascript:;">Offers</a></li>
                <li><a class="a" href="javascript:;">Shop</a></li>
                <li><a class="a" href="javascript:;">News</a></li>
                <li><a class="a" href="javascript:;">About</a></li>
            </ul>
            <ul class="lang d-flex">
                <li class="active"><a href="javascript:;">ENG</a></li>
                <li class=""><a href="javascript:;">繁體</a></li>
                <li class=""><a href="javascript:;">简体</a></li>
            </ul>
            <a href="javascript:;" class="login">
                <img src="images/jsg-icon/login-icon.svg" alt="">
            </a>
        </div>
        @endsection

        @section('logo-main')
            <a href="javascript:;" class="jsg-logo">
                <img src="images/jsg-logo/logo-s.png" alt="">
            </a>
        @endsection
        @section('logo-main4')
            <a href="javascript:;" class="jsg-logo">
                <img src="images/jsg-logo/logo-4.png" alt="">
            </a>
        @endsection
        @section('logo-main3')
            <a href="javascript:;" class="jsg-logo">
                <img src="images/jsg-logo/logo-s.png" alt="">
            </a>
        @endsection
        @section('header-search')
            <div class="search d-flex">
                <h2>Search Offers!</h2>
                <div class="input-search">
                    <input type="text">
                    <img src="images/jsg-icon/search-icon.svg" alt="">
                </div>
                <button class="btn">
                    <p>Search Now!</p>
                </button>
            </div>
        @endsection




@section('footer')
    <!-- footer -->
    <footer>
        <div class="footer-services d-flex">
            <div class="footer-text">
                <p>Under the law of Hong Kong,intoxicating liquor must not be sold or supplied to a minor under 18 years old in the course of business.</p>
                <div class="about-tourism">
                    About Hong kong Tourism Board
                    <a href="javascript:;">Contact Us</a>
                    <a href="javascript:;">Privacy policy</a>
                    <a href="javascript:;">Cookie policy</a>
                    Terms of use
                </div>
                <p>Copyright © 2020 Hong Kong Tourism Board. All rights reserved.</p>
            </div>

            <div class="footer-logo">
                <img src="images/jsg-logo/logo-3.png" alt="">
            </div>
        </div>
    </footer>
@endsection

@section('js')
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection

