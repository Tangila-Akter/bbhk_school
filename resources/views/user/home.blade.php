<!DOCTYPE html>
<html lang="en">

@include('user.css')
<style>
    #more {display: none;}
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 " src="user/img/cur-1.jpg" alt="Image">
                    
                </div>
                <div class="carousel-item">
                    <img class="w-100 " src="user/img/cur-2.jpg" alt="Image">
                    
                </div>
                <div class="carousel-item">
                    <img class="w-100 " src="user/img/cur-3.jpg" alt="Image">
                    
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    
 

    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">About Us</h4>
                <h2 class=" mb-4"><span class="text-primary">ভূঁইয়ার বাজার হনুফা খাতুন উচ্চ বিদ্যালয়</span></h2>
        
                <ul class="list-inline">
                    <li><h6>প্রধান শিক্ষকের বাণী</h6></li>
                    <br>
                    <li><h6>প্রত্যন্তর পল্লীর মাটি ও মানুষের একান্ত সান্নিধ্যে থেকে যারা নানা প্রতিকূলতার মাঝে থেকেও এলাকায় শিক্ষার আলোকে ছড়িয়ে দেয়ার 
                        জন্য বিশেষ অবদান রেখেছেন, রেখে চলেছেন তাদের মধ্যে অন্যতম নোয়াখালী জেলার সোনাইমুড়ি উপজেলার তিন নং চাষিরহাট 
                        ইউনিয়নের সাহাপাড় গ্রামের ঐতিহ্যবাহী ভূঁইয়া পরিবার। ওই পরিবারের সাত সন্তানের মধ্যে বড় সন্তান আলহাজ্ব ইদ্রিস ভুন্দিয়ার 
                        নেতৃত্বে সকলে একমত পোষণ করে নিজেদের ৭৫ শতক জমিন দান করে এবং প্রচুর অর্থ বিনিয়োগ করে ১৯৯৯ খ্রিস্টাব্দ সনে
                         তাদের মায়ের নামে "ভূঁইয়ার বাজার হনুফা খাতুন উচ্চ বিদ্যালয়" নামে স্কুলটি প্রতিষ্ঠা করেন। মেয়ে ২০১০ সালে জুনিয়র হিসেবে
                          এমপিও ভুক্ত হওয়ার পর ১লা ডিসেম্বর ২০১০ সালে আমি বিদ্যালয়টির প্রধান শিক্ষক পদে নিয়োগ প্রাপ্ত হই। তখন বিদ্যালয়ে 
                          একজন ধর্মীয় শিক্ষক একজন অফিস সহকারী একজন দপ্তরি সহ তিনজন এমপিওভুক্ত ছিলেন বাকি ৪ জন মেহমান শিক্ষক
                           ছিলেন। সংখ্যা উল্লেখ যোগ্য নয় নানা প্রতিক পরিস্থিতি মোকাবেলা শেষে পড়ালেখার মান উন্নয়ন সহ পাবলিক পরীক্ষায় ঈশ্বরের 
                           নিয়ম ফলাফল শেষে বর্তমান শিক্ষা বান্ধব সরকার 
                        ২৩/১০/২০১৯ খ্রিষ্টাব্দ তারিখে প্রজ্ঞাপনের আলোকে গত ১৯/০৪/২০২০ খ্রিষ্টাব্দ বিদ্যালয়টিকে মাধ্যমিক হিসেবে<span id="dots">...</span><span id="more">
                            এমপিও ভুক্ত করেন। ইতিমধ্যে যোগ্য ও দক্ষ শিক্ষক নিয়োগ, পাঠদানে কৌশল পরিবর্তন সহ নানামুখী পদক্ষেপ ও দিনরাত পরিশ্রমের
                             ফলে শিক্ষার মান বৃদ্ধির সাথে সাথে শিক্ষার্থীর সংখ্যা গাণিতিক হারে বৃদ্ধি পেয়েছে।
                            এ প্রতিষ্ঠানের ম্যানেজিং কমিটি, অভিভাবক, শিক্ষক-শিক্ষার্থী একই সূত্রে গাথা। সকলের সার্বিক সহযোগিতায় পল্লী গায়ের 
                            এ বিদ্যাপীঠটি সর্বদাই কোলাহল ও মুখরিত থাকে। এ বিদ্যালয়ের মাধ্যমে শিক্ষার আলো ছড়িয়ে পড়ুক দিগন্তে। মহান আল্লাহর 
                            নিকট এই কামনা সর্বদা আমিন । 
                            <br>
                            <br>
                            <br>
                            <article>
                        <h6>আব্দুল্লাহ আল মামুন</h6>    
                        <h6>এম এ, এম এড</h6>
                        <h6>প্রধান শিক্ষক</h6>
                        
                            </article>
                        </h6></li>
        
                </ul>
                

                <button href="" class="btn btn-lg btn-primary mt-3 px-4" onclick="myFunction()" id="myBtn">Read more</button>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" height="400" src="user/img/gal-3.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" height="400" src="user/img/gal-7.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" height="400" src="user/img/gal-11.jpg" alt="">
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
<script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
    </script>
</body>

</html>