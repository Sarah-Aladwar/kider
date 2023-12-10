
<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    <div class="container-xxl bg-white p-0">

    @include('includes.spinner')

    @include('includes.navbar')
        
    @yield('content')


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('includes.footer')


    @include('includes.footerjs')

    
</body>

</html>