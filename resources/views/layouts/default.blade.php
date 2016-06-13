<!DOCTYPE html>
<html lang="en">

@include('includes.header')
@yield('style')
<body class="wide" style="background-image: url(couponia/img/textures/wood-1.jpg)">


    <div class="global-wrap">
    @include('includes.sidebar')
   
    @include('includes.toparea')
    @include('includes.navmenu')
   {{-- @include('includes.loginregi') --}} 
   {{-- @include('includes.searcharea') --}} 


    <!-- loginregi -->
    <!-- toparea -->
    <!-- searcharea -->
    <!-- <div class="gap"></div> -->

            <!-- //////////////////////////////////
    //////////////END MAIN HEADER////////// 
    ////////////////////////////////////-->



        <div class="gap"></div>
        @yield('content')
        {{-- @include(includes.maincontent') --}} <!--main content loaded in homepage -->
        <!-- maincontent -->
                <!-- //////////////////////////////////
    //////////////END PAGE CONTENT///////// 
    ////////////////////////////////////-->
    @include('includes.footer')
    @yield('script')
    <!-- footer  -->

    </div>
</body>


<!-- Mirrored from remtsoy.com/tf_templates/couponia/demo_v3_3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jun 2016 07:43:03 GMT -->
</html>
