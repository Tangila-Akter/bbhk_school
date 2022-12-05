<!DOCTYPE html>
<html lang="en">

@include('user.css')
<style>
    form{
        color: black;
    width: 108%;
    border-radius: 10px;
    background-color: #dee2e6;
    padding: 17px;

       
    }
    input[type=text], select, textarea{
        color: black;
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}
input[type=email] {
    color: black;
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}
@media (max-width: 991.98px) {
    .px-3 {
    padding-left: 8rem !important;
}
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
            <div class="col-md-12 mx-auto">
                <h4 class="text-secondary mb-3">Contact Us</h4>
                
                <div class="row contact">

                    
                    <form action="{{ url('/uploadcontact') }}" method="post" enctype="multipart/form-data" data-aos="fade-right">
                        @csrf
                        <label>Name:</label>
                        <input type="text" name="name"  placeholder="your name" class="box"><br><br>
                        <label>Email:</label>
                        <input type="email" name="email" placeholder="your email" class="box"><br><br>
                        <label>Phone Number:</label>
                        <input type="text" name="phone" placeholder="your phone number" class="box"><br><br>
                        <label>Message:</label>
                        <textarea name="msg" class="box address" placeholder="Write something.." style="height:100px"></textarea><br><br>
                        <input type="submit" value="submit" class="btn btn-success">
                    </form>
                
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