<!DOCTYPE html>
<html lang="en">

@include('user.css')
<style>
    @media (max-width: 991.98px) {
        .pic{
        width: 305px !important;
        height: 679px !important;
    }}

    .pic{
        width: 1000px !important;
        height: 900px !important;
    }
</style>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                <a href="{{ url('home') }}">
                    <img src="school/logo.png" class="img_logo">
                </a>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-10 col-xl-10 col-xxl-10 text-center ">
                <p class=" mt-2"><h4 style="color:#65C178; ">ভূঁইয়ার বাজার হনুফা খাতুন উচ্চ বিদ্যালয়</h4><br>
                        
                    Scince-1999</p>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
@include('user.navbar')
    <!-- Navbar End -->
    
 

    <!-- About Start -->
    <div class="container py-5" id="Notice">
        <div class="row py-5">

                <h4 class="text-secondary mb-3">Academic Calendar</h4><br>
                @foreach ($data as $data)
                    <img class="img-fluid w-100 pic" src="calender/{{ $data->image }}" alt="">
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- About End -->


   

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


@include('user.script')
</body>

</html>