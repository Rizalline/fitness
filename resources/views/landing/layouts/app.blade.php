<!DOCTYPE html>
<html lang="en">

    @include('landing.layouts.head')

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        @include('landing.layouts.navbar')
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        @yield('content')
        <!-- Testimonial End -->


        <!-- Footer Start -->
        @include('landing.layouts.footer')

        <!-- Copyright End -->


        <!-- Back to Top -->
        <div class="back-to-top">
            <a href="#" class="btn"><i class="fa fa-arrow-up"></i></a>
        </div>


        <!-- JavaScript Libraries -->
        @include('landing.layouts.script')
    </body>

</html>
