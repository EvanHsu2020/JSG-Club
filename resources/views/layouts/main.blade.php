<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <base href="{{ config('app.url') }}" />
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <link rel="image_src" type="image/jpeg" href="">

    <!-- css -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/init.css') }}{{ config('app.cssver') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}{{ config('app.cssver') }}" rel="stylesheet">
    <link href="{{ asset('js/owl.carousel/assets/owl.carousel.min.css') }}{{ config('app.cssver') }}" rel="stylesheet">
    <link href="{{ asset('js/owl.carousel/assets/owl.theme.default.css') }}{{ config('app.cssver') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}{{ config('app.cssver') }}" rel="stylesheet">
    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">

@yield('csscode')

    <script src="//assets.adobedtm.com/82b79fea3e6a/18bc3c1b1073/launch-59980cde8e31-staging.min.js" async></script>

  </head>
<body>
<!-- Important Info -->
<div class="healthyInfo">
  <div class="msg">
    Your well-being and safety is our priority. Find tips on staying healthy and get the latest updates on the <a href="https://www.discoverhongkong.com/eng/latest-travel-advisories.html" target="_blank">Hong Kong Government’s website</a>.
    <div class="top-important-notices">
      <svg class="important-notices mr-2">
        <use xlink:href="images/important-notices.svg#Layer_1"></use>
      </svg>
    </div>
  </div>
  <a href="javascript:;" class="healthyInfoClose">
      <svg class="important-noticesClose mr-2">
        <use xlink:href="images/close.svg#close_btn"></use>
      </svg>
  </a>
</div>
<header class="header{{ $whitebg or '' }}" data-analytics-id="winedine" data-analytics-text="header">
    <div class="w-100 h-100">
      <ul class="header-menu">
        <li><a href="" class="menu-masterclasses" data-analytics-id="navigation-menu" data-analytics-text="online-masterclasses"><span>Online masterclasses</span></a></li>
        <li><a href="/wine-cellar" class="menu-wine" data-analytics-id="navigation-menu" data-analytics-text="wine-cellar"><span>Wine cellar</span></a></li>
        <li><a href="" class="menu-greatfeast" data-analytics-id="navigation-menu" data-analytics-text="great-offers-great-feast"><span>Great offers Great feast</span></a></li>
        <li><a href="" class="munu-hot" data-analytics-id="navigation-menu" data-analytics-text="what-s-hot"><span>What’s Hot</span></a></li>
      </ul>
      <ul class="header-language">
        <li><a href="" class="nowtag"><span>ENG</span></a></li>
        <li><a href=""><span>繁體</span></a></li>
        <li><a href=""><span>简体</span></a></li>
      </ul>
      <a href="javascript:;" class="menubars menubars-btn d-xl-none">
        <svg class="menubars-svg">
          <use xlink:href="images/xsmenubars.svg#xsmenubars"></use>
        </svg>
      </a>
      <a href="/intro" class="header-logo"><img src="images/logo.png"></a>
    </div>
</header>

@yield('content')

<footer class="footer" data-analytics-id="winedine" data-analytics-text="footer">
    <div class="footer-link">
      <div class="under18">Under the law of Hong Kong, intoxicating liquor must not be sold or supplied to a minor under 18 years old in the course of business.</div>
      <a href="https://www.discoverhongkong.com/eng/hktb/about.html" target="_blank">About Hong Kong Tourism Board</a>
      <a href="https://www.discoverhongkong.com/eng/contact-us.html" target="_blank">Contact Us</a><span class="d-lg-none"><br></span>
      <a href="https://www.discoverhongkong.com/eng/privacy-policy.html" target="_blank">Privacy policy</a>
      <a href="https://www.discoverhongkong.com/eng/cookies.html" target="_blank">Cookie policy</a>
      <a href="https://www.discoverhongkong.com/eng/terms-of-use.html" target="_blank">Terms of use</a>
    </div>
    <div class="footer-copyright">Copyright © 2020 Hong Kong Tourism Board. All rights reserved.</div>
    <a href="https://www.discoverhongkong.com/" target="_blank" class="footer-logo"><img src="images/hlogo.png"></a>
</footer>

<div class="mobile-menu-box" id="mobilemenu">
  <div class="mobile-menu" id="mobilemenuitem">
      <ul class="mobile-menu-item">
        <li><a href="" class="menu-masterclasses nowtag"><span>Online masterclasses</span></a></li>
        <li><a href="/wine-cellar" class="menu-wine"><span>Wine cellar</span></a></li>
        <li><a href="" class="menu-greatfeast"><span>Great offers Great feast</span></a></li>
        <li><a href="" class="menu-hot"><span>What’s Hot</span></a></li>
      </ul>
      <div class="mobile-menu-logo"><img src="images/logo.png"></div>
      <a href="javascript:;" class="mobile-menu-Close">
          <svg class="important-noticesClose mr-2">
            <use xlink:href="images/close.svg#close_btn"></use>
          </svg>
      </a>
      <div class="mobile-menu-footer">
        <a href="javascript:;" class="mbtn popupSubscribe">Subscribe e-News</a>
        <a href="" class="mbtn mt-2">
          <span><svg class="mobile-menu-iconshare">
            <use xlink:href="images/share-icon.svg#iconshare"></use>
          </svg></span>
          <span>Share</span>
        </a>
      </div>


  </div>
</div>

<!-- cookie Info -->
<div class="cookieInfo">
  <div class="msg hometopad">
    <div class="row">
      <div class="col-12 closeiTxt">
      We use cookies to ensure that we give you the best experience on our website, to understand your interests and provide personalised content to you as further set out in our Cookie Policy <a href="https://www.discoverhongkong.com/eng/cookies.html" target="_blank">here</a>.
      </div>
    </div>
  </div>
  <div class="closeiInfo"><a href="javascript:;" class="cookieInfoClose"><span>I accept</span></a></div>
</div>

<!-- subscribe email -->
<div class="subscribe-email-box">
  <div class="msg">
    <div class="t1">Sign Up <span class="d-none d-sm-block"></span>for the Latest Updates</div>
    <div class="t2">Be the first to know the latest news of <br>Hong Kong Wine & Dine Festival 2020.</div>
    <div class="t3">
      <input type="text" name="subscribeEmail" id="subscribeEmail" class="subscribeEmail" value="" placeholder="Please enter your email">
      <span class="subscribeEmail-errorinfo" data-info="Email is mandatory"></span>
    </div>
    <div class="t4">
      <a href="javascript:;" class="mbtn2 SubscribeNow-btn">Submit</a>
    </div>
  </div>
  <a href="javascript:;" class="subscribe-email-Close">
      <svg class="subscribeClose">
        <use xlink:href="images/close2.svg#close_btn2"></use>
      </svg>
  </a>
</div>

<!-- subscribe email popup -->
<div class="subscribe-popup-box subscribe-popup-join">
  <div class="h-100 subscribe-subscribe-popup2">
  <div class="container h-100">
    <div class="row align-items-center  h-100">
      <div class="col align-self-center">
        <form action="/subscribe" method="post" class="subscribeform" id="subscribeform">
        <input type="hidden" name="enewslang" value="eng">
        {!! csrf_field() !!}
        <div class="msg">
          <div class="t1">Sign Up <span class="d-sm-none"><br></span>for the Latest Updates</div>
          <div class="t2">Be the first to know the latest news of Hong Kong Wine & Dine Festival 2020.</div>
          <div class="row t3">
            <div class="col-sm-6">
              <input type="text" name="uname" id="uname" class="subscribeEmail" value="{{ old('uname') }}" placeholder="Name*">
            </div>
            <div class="col-sm-6">
              <input type="email" name="umail" id="umail" class="subscribeEmail" value="{{ old('umail') }}" placeholder="Email*">
            </div>
            <div class="col-sm-6">
              <select name="ucountry" id="ucountry" class="subscribeEmail">
                <option value="">Residence*</option>
                <option value="1">Argentina</option>
                <option value="2">Australia</option>
                <option value="3">Austria</option>
                <option value="4">Bahrain</option>
                <option value="5">Belgium</option>
                <option value="6">Brazil</option>
                <option value="7">Canada</option>
                <option value="8">Denmark</option>
                <option value="9">Egypt</option>
                <option value="10">Fiji</option>
                <option value="11">Finland</option>
                <option value="12">France</option>
                <option value="13">Germany</option>
                <option value="14">Honduras</option>
                <option value="15">Hong Kong</option>
                <option value="16">India</option>
                <option value="17">Indonesia</option>
                <option value="18">Israel</option>
                <option value="19">Italy</option>
                <option value="20">Japan</option>
                <option value="21">Jordan</option>
                <option value="22">Kuwait</option>
                <option value="23">Macao</option>
                <option value="24">Mainland China</option>
                <option value="25">Malaysia</option>
                <option value="26">Mauritius</option>
                <option value="27">Mexico</option>
                <option value="28">Netherlands</option>
                <option value="29">New Zealand</option>
                <option value="30">Norway</option>
                <option value="31">Pakistan</option>
                <option value="32">Philippines</option>
                <option value="33">Portugal</option>
                <option value="34">Russia</option>
                <option value="35">Saudi Arabia</option>
                <option value="36">Singapore</option>
                <option value="37">South Africa</option>
                <option value="38">South Korea</option>
                <option value="39">Spain</option>
                <option value="40">Sri Lanka</option>
                <option value="41">Sweden</option>
                <option value="42">Switzerland</option>
                <option value="43">Taiwan</option>
                <option value="44">Thailand</option>
                <option value="45">Turkey</option>
                <option value="46">U.K.</option>
                <option value="47">U.S.A.</option>
                <option value="48">United Arab Emirates</option>
                <option value="49">Venezuela</option>
                <option value="50">Others - Africa</option>
                <option value="51">Others - Central America</option>
                <option value="52">Others - Central America</option>
                <option value="53">Others - Europe</option>
                <option value="54">Others - Middle East</option>
                <option value="55">Others - South America</option>
                <option value="56">Others – South East Asia</option>
                <option value="57">Others – South Pacific</option>
                <option value="58">Ireland</option>
              </select>
            </div>
            <div class="col-sm-6">
              <select name="uanguage" id="uanguage" class="subscribeEmail">
                <option value="">Language*</option>
                <option value="1">English</option>
                <option value="2">Traditional Chinese</option>
                <option value="3">Simplified Chinese</option>
              </select>
            </div>
            <div class="col-12 mt-4 mb-4">
              <div class="mb-3">Your information is for our internal use only. To learn more about how this information is used, please refer to our <a href="https://www.discoverhongkong.com/us/privacy-policy.html" target="_blank">Privacy Policy.</a></div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="privacycheck" name="privacycheck">
                <label class="custom-control-label" for="privacycheck">I have read and agree to the Privacy Policy.</label>
              </div>
            </div>



            <div class="col-sm-auto text-nowrap">
              <!--<img src="images/captcha.png">-->
              {!! captcha_image_html('WDCaptcha') !!}
            </div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-6">
              <input type="text" name="captcha" id="captcha" class="subscribeEmail blackline" value="" placeholder="Please enter code as shown in the image">
              <span class="CaptchaError"></span>
            </div>          
          </div>
          <div class="col-12 mb-4">
            <div class="custom-control custom-checkbox text-left">(* denotes compulsory fields)
            </div>
          </div>
          <div class="t4">
            <div class="subscribePopupFooter">
              <button class="mbtn2 subscribeSubmit" type="submit" id="subscribeSubmit">
                Submit
              </button>
              <a href="javascript:;" class="mbtn3">Cancel</a>
            </div>
          </div>
          <div class="topicon">
            <img src="images/icon-hand.png">
          </div>
          <a href="javascript:;" class="subscribe-popup-Close subscribe-popup-join-Close">
              <svg class="subscribeClose">
                <use xlink:href="images/close2.svg#close_btn2"></use>
              </svg>
          </a>
        </div>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>

<!-- subscribe email popup thank you -->
<div class="subscribe-popup-box subscribe-popup-thankyou">
  <div class="h-100 subscribe-subscribe-popup2">
  <div class="container h-100">
    <div class="row align-items-center h-100">
      <div class="col align-self-center">
        <div class="msg">
          <div class="t1">We have received your subscription request!</div>
          <div class="t2a mt-5">We will send you our latest e-News shortly with all the hottest news and views to help you make the most of your time in Hong Kong. </div>
          <!-- <div class="t2a mt-3">Let us know if you have any comments: <a href="info@discoverhongkong.com">info@discoverhongkong.com</a></div> -->
          <div class="t4">
            <div class="subscribePopupFooter">
              <a href="javascript:;" class="mbtn2 subscribe-popup-thankyou-Close">Got it</a>
            </div>
          </div>
          <div class="topicon">
            <img src="images/icon-hand.png">
          </div>
          <a href="javascript:;" class="subscribe-popup-Close subscribe-popup-thankyou-Close">
              <svg class="subscribeClose">
                <use xlink:href="images/close2.svg#close_btn2"></use>
              </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

@yield('footerdiv')

<script>var autoPopupSubscribe = 1;</script>
<!--include js -->
<script src="{{ asset('assets/bootstrap/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/svg4everybody.js') }}"></script>
<script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}{{ config('app.cssver') }}"></script>
<script>
$(function(){
      @if (session('subscribethankyou') AND session('subscribethankyou')=='thankyou')
        autoPopupSubscribe = 0;
        $('.subscribe-popup-thankyou').fadeIn('fast');
      @endif
      @if ($errors->first('errMsg'))
        autoPopupSubscribe = 0;
        $('.CaptchaError').html('{{ $errors->first('errMsg') }}');
        $('.subscribe-popup-join').fadeIn('fast');
        var errorRemoreId = setTimeout(function(){$('.CaptchaError').fadeOut('fast')}, 5000);
      @endif

      @if (Input::old('ucountry'))
        $('#ucountry').val('{{ old('ucountry') }}');
      @endif
      @if (Input::old('uanguage'))
        $('#uanguage').val('{{ old('uanguage') }}');
      @endif

      var validator = $("#subscribeform").validate({
      rules: {
        uname: "required",
        umail: {
          required: true,
          email: true
        },
        ucountry: "required",
        uanguage: "required",
        privacycheck: "required",
        captcha: "required",
      },
      messages: {
        uname: "Name is mandatory",
        umail: "Email is mandatory",
        ucountry: "Residence is mandatory",
        uanguage: "Language is mandatory",
        privacycheck: "Please read and agreed to the Privacy Policy",
        captcha:"Captcha code is mandatory",
        }
      });



});
</script>
@yield('jquerycode')

</body>
</html>