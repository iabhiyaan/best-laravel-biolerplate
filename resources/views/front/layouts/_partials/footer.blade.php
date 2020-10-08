<a id="button"></a>
<div class="footer-area">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-sm-6 col-md-4 col-xl-3">
        <div class="single-footer-widget footer_1">
          <a href="/" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600" data-sal-easing="ease-out-bounce"> <img class="footer__logo" src="/images/main/{{ $dashboard_composer->footer_logo }}" alt=""> </a>
          <p data-sal="slide-up" data-sal-duration="1000" data-sal-delay="700" data-sal-easing="ease-out-bounce">
            {{ $dashboard_composer->footer_description }} </p>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-xl-4">
        <div class="single-footer-widget footer_2">
          <h4 data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600" data-sal-easing="ease-out-bounce">
            Newsletter</h4>
          <p data-sal="slide-up" data-sal-duration="1000" data-sal-delay="700" data-sal-easing="ease-out-bounce">Stay
            updated with our latest trends Seed heaven so said place
            winged over given forth fruit.
          </p>
          <form action="{{ route('saveSubscribers') }}" method="POST">
            @csrf
            <div class="form-group" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600" data-sal-easing="ease-out-bounce">
              <div class="input-group mb-3">
                <input type="text" name="email" class="form-control" placeholder="Enter email address">
                <div class="input-group-append">
                  <button type="submit" class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                </div>
              </div>
            </div>
          </form>
          <div class="social_icon">
            <a target="_blank" href="{{ $dashboard_composer->facebook }}" data-sal="slide-up" data-sal-duration="900" data-sal-delay="600" data-sal-easing="ease-out-bounce">
              <i class="fa fa-facebook"></i>
            </a>
            <a target="_blank" href="{{ $dashboard_composer->twitter }}" data-sal="slide-up" data-sal-duration="900" data-sal-delay="700" data-sal-easing="ease-out-bounce">
              <i class="fa fa-twitter"></i>
            </a>
            <a target="_blank" href="{{ $dashboard_composer->instagram }}" data-sal="slide-up" data-sal-duration="900" data-sal-delay="800" data-sal-easing="ease-out-bounce">
              <i class="fa fa-instagram"></i>
            </a>
            <a target="_blank" href="{{ $dashboard_composer->whatsapp }}" data-sal="slide-up" data-sal-duration="900" data-sal-delay="900" data-sal-easing="ease-out-bounce">
              <i class="fa fa-whatsapp"></i>
            </a>
          </div>
          <h4 class="mt-3" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600" data-sal-easing="ease-out-bounce">Download our app</h4>
          <div class="d-flex align-items-center">
            <a target="_blank" href="{{ $dashboard_composer->appstore_link }}" class="mr-3" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="700" data-sal-easing="ease-out-bounce">
              <img src="/images/apple.png" alt="appstore">
            </a>
            <a target="_blank" href="{{ $dashboard_composer->playstore_link }}" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="800" data-sal-easing="ease-out-bounce">
              <img src="/images/playstore.png" alt="playstore">
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-md-4">
        <div class="single-footer-widget footer_2">
          <h4 data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600" data-sal-easing="ease-out-bounce">
            Contact us</h4>
          <div class="contact_info">
            <p data-sal="slide-up" data-sal-duration="1000" data-sal-delay="700" data-sal-easing="ease-out-bounce">
              <span> Address :</span> {{ $dashboard_composer->address }}</p>
            <p data-sal="slide-up" data-sal-duration="1000" data-sal-delay="800" data-sal-easing="ease-out-bounce">
              <span> Phone :</span> {{ $dashboard_composer->mobile }}</p>
            <p data-sal="slide-up" data-sal-duration="1000" data-sal-delay="900" data-sal-easing="ease-out-bounce">
              <span> Email : </span>{{ $dashboard_composer->email }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright_part_text text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="d-sm-flex justify-content-between" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="700" data-sal-easing="ease-out-bounce">
                  <p class="footer-text m-0">© 2020 LMEBS </p>
                  <p class="footer-text m-0">Design & Developed by <a target="_blank" href="https://webhousenepal.com/">Web House Nepal</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="/assets/front/js/jquery-1.12.1.min.js"></script>
<script src="/assets/front/js/popper.min.js"></script>
<script src="/assets/front/js/bootstrap.min.js"></script>
<script src="/assets/front/js/jquery.magnific-popup.js"></script>
<!-- <script src="/assets/front/js/swiper.min.js"></script> -->
<!-- <script src="/assets/front/js/masonry.pkgd.js"></script> -->
<script src="/assets/front/js/owl.carousel.min.js"></script>
<!-- <script src="/assets/front/js/jquery.nice-select.min.js"></script> -->
<!-- <script src="/assets/front/js/slick.min.js"></script> -->
<script src="/assets/front/js/sal.js"></script>
<script src="/assets/front/js/lightbox.js"></script>
<!-- <script src="/assets/front/js/jquery.counterup.min.js"></script> -->
<!-- <script src="/assets/front/js/waypoints.min.js"></script> -->
<script src="/assets/front/js/custom.js"></script>
@stack('scripts')
</body>

</html>