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
                <h4 class="text-secondary mb-3">Syllabus</h4>
                @if (method_exists($data, 'links'))
          
        
                <div class="d-flex ">
        {!! $data->links() !!}
                </div>
                @endif
                            
                          
                            <form action="{{ url('syllabussearch') }}" method="get" class="form-inline" style="float:left;  ">
                            @csrf
                            
        
                            
                            
                            <input class="form-control" type="search" name="search" placeholder="search">
                            <input type="submit" value="search" class="btn btn-primary" >
                            
                          </form><br>
                      
        
                            <table class="display">
                                <thead>
                                    <tr>
                                        <th>Syllabus</th>
                                        <th>Date <div class="icon">Download</div></th>
                                        
                                    </tr>
                                </thead>
                                @foreach ($data as $data)
                                <tbody>
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->date }}
                                        <a href="{{ url('syllabus_download') }}/{{ $data->image }}"  rel="noopener noreferrer" class="icon">
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