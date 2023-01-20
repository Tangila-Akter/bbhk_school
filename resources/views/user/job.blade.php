<!DOCTYPE html>
<html lang="en">

@include('user.css')
<style>
    .card{
        box-shadow: 4px 4px 4px 1px #00000030;
    }
    .card:hover{
        box-shadow: 5px 2px 12px 6px black;
    }
    b{
        color: black;
    }
    a{
      text-decoration: none;
      color: #fff;
    }
    a:hover{
      text-decoration: none;
      color: #fff;
    }
    .text{
      color:black;
    }
    .red{
        color: red;
    }
    .card{
      width: 41rem;
    }
    .py-5 {
      padding-bottom: 0rem !important;
      padding-top: 1rem !important;
    }
    @media (max-width: 991.98px) {
  .modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 63%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
    outline: 0;
}
.card{
  width: 25rem;
}
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
    <!-- Button trigger modal -->
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">Job & Vacancies Documents</h4>
        </div>
  </div>
  <!-- Modal -->
  @foreach ($data as $data)
  





  {{-- card --}}
 
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $data->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted text">Deadline:<span class="red">{{ $data->deadline }}</span></h6>
                  <button type="button" class="btn btn-info" >
                    <a href="{{ url('/job_details',$data->id) }}">See Details</a>
                    
                  </button>
                  
                </div>
              </div>
        </div>
    </div>

</div>
    <!-- About End -->

 @endforeach
   

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


@include('user.script')
</body>

</html>