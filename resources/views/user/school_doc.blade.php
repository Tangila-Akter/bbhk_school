<!DOCTYPE html>
<html lang="en">

@include('user.css')
<style>
    .icon{
        float: right;
    }
    th{
        background-color: #65C178 !important;
    color: white;
    padding: 2px;
    
    height: 52px;
    }
    table{
        width: 96% !important;
    }
    .display{
        width: 100%% !important;
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
            <div class="col-md-12 mx-auto">
                <h4 class="text-secondary mb-3">School Documents</h4>
                @if (method_exists($data, 'links'))
          
        
                <div class="d-flex ">
        {!! $data->links() !!}
                </div>
                @endif
                            
                          
                            <form action="{{ url('schoolsearch') }}" method="get" class="form-inline" style="float:left;  ">
                            @csrf
                            
        
                            
                            
                            <input class="form-control" type="search" name="search" placeholder="search">
                            <input type="submit" value="search" class="btn btn-primary" >
                            
                          </form><br>
                      
        
                            <table class="display">
                                <thead>
                                    <tr>
                                        <th>School Documents</th>
                                        <th>Date <div class="icon">Download</div></th>
                                        
                                    </tr>
                                </thead>
                                @foreach ($data as $data)
                                <tbody>
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->date }}
                                        <a href="{{ url('school_download') }}/{{ $data->image }}"  rel="noopener noreferrer" class="icon">
                                            <i class="fa fa-download" align="center"></i></a></td>
                                        
                                    </tr>
            
                                </tbody>
                                @endforeach
                            </table>
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