<!DOCTYPE html>
<html lang="en">

@include('user.partials.head')

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>



    @include('user.partials.header')



    @if(session()->has('message'))


    <div class="alert alert-success alert-dismissible">


        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>



        {{session()->get('message')}}

    </div>


    @endif

    @include('user.partials.baniere')


    @include('user.partials.section')


    @include('user.doctor')


    @include('user.news')


    @include('user.rdv')



    @include('user.partials.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>