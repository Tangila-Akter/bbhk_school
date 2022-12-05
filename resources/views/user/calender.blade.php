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
            <div class="col-lg-4">
                <div class="w3-third w3-container">
                    <strong>
                        <a href="/">
                            <img src="user/img/flower.jpg" class="img_logo">
                        </a>
                    </strong>
                    
                  </div>
            </div>
            <div class="col-lg-8 text-center text-lg-center">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 ">
                        <p class="header"><strong style="color:#65C178;">ভূঁইয়ার বাজার হনুফা খাতুন উচ্চ বিদ্যালয়</strong><br>
                        
                            Scince-1999</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-center">
                       
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        
                    </div>
                </div>
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