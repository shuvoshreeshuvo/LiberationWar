


<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-6">

    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <!-- Content -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">আমাদের সম্পর্কে</h5>
                <p>বহু মানুষের আত্মত্যাগ ও বীরত্বের মাধ্যমে পাকিস্তানি হানাদার বাহিনীকে পরাজিত করে আমরা পেয়েছি আমাদের স্বাধীনতা। জাতি অর্জন করেছে বিজয়। ইতিহাসে আমরা পরিচিত হয়েছি বীর বাঙালি ও বিজয়ী জাতি হিসাবে।নতুন প্রজন্মকে মুক্তিযুদ্ধের সঠিক ইতিহাস জানতে হবে। স্বাধীনতার চেতনায় দেশকে...</p>
            </div>

        </div>
        <a style="font-size:15px;text-decoration: none;color: white" href="About">Read More</a>
    </div>


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright. All rights reserved.
    </div>
    <!-- Copyright -->

  

</footer>
<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

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


</body>
</html>