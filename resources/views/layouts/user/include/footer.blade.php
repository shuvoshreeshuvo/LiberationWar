<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">আমাদের সম্পর্কে</h5>
        <p>বাংলাদেশের মুক্তিযুদ্ধ একদিনে আসেনি। মুক্তিযুদ্ধ বাঙালি জাতির বহু ত্যাগ ও সংগ্রামের ফসল। ৫২ ভাষা আন্দোলন থেকে শুরু করে ৭১ পর্যন্ত সংগ্রামের মধ্যে দিয়ে ১৯৭১ সালের অগ্নিঝরা মার্চে শুরু হয় মুক্তিযুদ্ধ।</p>
        <p>বহু মানুষের আত্মত্যাগ ও বীরত্বের মাধ্যমে পাকিস্তানি হানাদার বাহিনীকে পরাজিত করে আমরা পেয়েছি আমাদের স্বাধীনতা। জাতি অর্জন করেছে বিজয়। ইতিহাসে আমরা পরিচিত হয়েছি বীর বাঙালি ও বিজয়ী জাতি হিসাবে।নতুন প্রজন্মকে মুক্তিযুদ্ধের সঠিক ইতিহাস জানতে হবে।</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Contact Info</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> Zindabazar, Sylhet-3100,   Bangladesh</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@metrouni.edu.bd</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> +88-01610-932939</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> +88-0821-713077-8</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div id="social_icon_footer" class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Get Social</h5>

        <!-- Facebook -->
        <a href="https://www.facebook.com"  target="_blank" id="social-fb">
            <i class="fab fa-facebook-square social"></i>
        </a>
        <!-- Twitter -->
        <a href="https://twitter.com/login?lang=en"  target="_blank" id="social-tw">
          <i class="fab fa-twitter-square social"></i>
        </a>
        <!-- Google +-->
        <a href="#" id="social-gp" target="_blank">
            <i class="fab fa-google-plus-square social"></i>
        </a>
        <!-- envelope -->
        <a href="https://www.youtube.com" id="social-yt"  target="_blank">
          <i class="fab fa-youtube-square social"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 All rights reserved.
    <a href="#"> </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- CK Editor -->

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>

    <script>
        //$('textarea').ckeditor();
        $('.textarea').ckeditor(); // if class is prefered.
    </script>

<!-- CK Editor End -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{ Toastr()->error( $error, 'Error', ["positionClass" => "toast-top-right"]) }}
        @endforeach
    @endif


{!! Toastr::message() !!}


