<!--Start Footer-->
    
    <div class="footer-svg">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
      <path class="st0" d="M0,27.2c589.2,129.4,1044-69,1920,31v-60H3.2L0,27.2z"/>
    </svg>
    </div>
    <div class="footer-row2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 text-center">
          <a class="navbar-brand img-ctr" href="#"> <img src="{{ asset('images/cadlogoNoText.png') }}" alt="cadLogo" width="100" /></a>
          
          <ul class="footer-link-v2 link-hover mt30">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/programs">Programs</a></li>
            <li><a href="/organization">Organization</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
    <hr class="hline">
    <div class="footer-row3">
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-social-media-icons">
              <a href="{{ App\Home::first()->facebook_link }}" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="{{ App\Home::first()->instagram_link }}" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="{{ App\Home::first()->telegram_link }}" target="_blank"><i class="fab fa-telegram"></i></a>
            </div>
            <div class="footer-">
              <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> CADUTMKL. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
<!--End Footer-->