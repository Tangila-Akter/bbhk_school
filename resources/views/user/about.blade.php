<!DOCTYPE html>
<html lang="en">

@include('user.css')

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
            <div class="">
                <h4 class="text-secondary mb-3">About</h4>
                 <!-- Our Teacher -->
<div class="container">

    <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;">আমাদের শিক্ষকগণ</h2>
  <div class="row">
   <div class="col">
     <div class="card card2" style="width: 18rem;">
        <img src="user/img/p3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class=" card-title card-title0 center">আবদুল্লাহ আল-মামুন</h5><br>
            <p class="card-text card-title2" style="text-align:center;">এম, এ, এম, এড</p>
            <p class="card-text card-title2" style="text-align:center;">প্রধান শিক্ষক</p>
            <p class="card-text card-title2" style="text-align:center;">ফোন: ০১৭১৫৭৩৭৯৬৬</p>
          </div>
      </div>
   </div>
   <div class="col">
     <div class="card card2" style="width: 18rem;">
        <img src="user/img/p2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class=" card-title card-title0 center">মো: ইয়াসীন ভূঁইয়া</h5><br>
          <p class="card-text card-title2" style="text-align:center;">এম, এ, শব, এড</p>
          <p class="card-text card-title2" style="text-align:center;">সহঃ প্রধান শিক্ষক</p>
          <p class="card-text card-title2" style="text-align:center;">ফোন:</p>
        </div>
      </div>
   </div>
   <div class="col">
     <div class="card card2" style="width: 18rem;">
        <img src="user/img/p2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class=" card-title card-title0 center">মো:হেলাল উদ্দিন কামিল </h5><br>
            <p class="card-text card-title2" style="text-align:center;">সহঃ শিক্ষক</p>
            <p class="card-text card-title2" style="text-align:center;">ফোন: ০১৮২৩৫৮৩৩১২</p>
          </div>
      </div>
   </div>
   <div class="col">
    <div class="card card2" style="width: 18rem;">
       <img src="user/img/p2.jpeg" class="card-img-top" alt="...">
       <div class="card-body">
        <h5 class=" card-title card-title0 center">সুজিত চন্দ্র বড়ুয়া</h5><br>
        <p class="card-text card-title2" style="text-align:center;">এম, এস, এস, বি, এড</p>
        <p class="card-text card-title2" style="text-align:center;">সহঃ শিক্ষক</p>
        <p class="card-text card-title2" style="text-align:center;">ফোন: ০১৭১৮৬২০৬০৩</p>
      </div>
     </div>
  </div>
  <div class="col">
    <div class="card card2" style="width: 18rem;">
       <img src="user/img/p2.jpeg" class="card-img-top" alt="...">
       <div class="card-body">
        <h5 class=" card-title card-title0 center">মোহাম্মদ আলী </h5><br>
        <p class="card-text card-title2" style="text-align:center;">এম, এস, সি, বি, এড</p>
        <p class="card-text card-title2" style="text-align:center;">সহঃ শিক্ষক</p>
        <p class="card-text card-title2" style="text-align:center;">ফোন: </p>
      </div>
     </div>
  </div>
  <div class="col">
    <div class="card card2" style="width: 18rem;">
       <img src="user/img/p2.jpeg" class="card-img-top" alt="...">
       <div class="card-body">
        <h5 class=" card-title card-title0 center">মনছুর আহমেদ</h5><br>
        <p class="card-text card-title2" style="text-align:center;">কৃষি ডি:, বি, এড</p>
        <p class="card-text card-title2" style="text-align:center;">সহঃ শিক্ষক</p>
        <p class="card-text card-title2" style="text-align:center;">ফোন: </p>
      </div>
     </div>
  </div>
  <div class="col">
    <div class="card card2" style="width: 18rem;">
       <img src="user/img/p2.jpeg" class="card-img-top" alt="...">
       <div class="card-body">
        <h5 class=" card-title card-title0 center">বিবি কুলছুম</h5><br>
        <p class="card-text card-title2" style="text-align:center;">এম, এস, এস</p>
        <p class="card-text card-title2" style="text-align:center;">সহঃ শিক্ষিকা</p>
        <p class="card-text card-title2" style="text-align:center;">ফোন: </p>
      </div>
     </div>
  </div>
  <div class="col">
    <div class="card card2" style="width: 18rem;">
       <img src="user/img/p2.jpeg" class="card-img-top" alt="...">
       <div class="card-body">
        <h5 class=" card-title card-title0 center">মো: ফয়ছাল আহমদ</h5><br>
        <p class="card-text card-title2" style="text-align:center;">এম, এস, এস</p>
        <p class="card-text card-title2" style="text-align:center;">সহঃ গ্রন্থাগার</p>
        <p class="card-text card-title2" style="text-align:center;">ফোন:</p>
      </div>
     </div>
  </div>
  <div class="col">
    <div class="card card2" style="width: 18rem;">
       <img src="user/img/p2.jpeg" class="card-img-top" alt="...">
       <div class="card-body">
        <h5 class=" card-title card-title0 center">মোহাম্মদ শহিদ উল্ল্যা</h5><br>
        <p class="card-text card-title2" style="text-align:center;">এইচ, এস, সি</p>
        <p class="card-text card-title2" style="text-align:center;"> অফিস সহকারি</p>
        <p class="card-text card-title2" style="text-align:center;">ফোন:</p>
      </div>
     </div>
  </div>
  </div>
 </div>
                
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