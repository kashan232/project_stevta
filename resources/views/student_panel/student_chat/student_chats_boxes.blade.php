@include('student_panel.include.header')

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
@include('student_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>   
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 text-center">
                        <a href="{{ route('send-messagePage') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/send-message-01.png" alt="">
                                </div>
                                <h5>Send Message</h5>
                            </div>
                        </a> 
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="{{ route ('recieved-teachermessages') }}">
                            <div class="box-main-card">
                                <div class="card-content">
                                    <img src="teacher/recived-message-01.png" alt="">
                                </div>
                                <h5>Receive Message</h5>
                            </div>
                        </a>  
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <br>
        </div>
    </div>  
    <!-- Page Area End Here -->
</div>
@include('student_panel.include.footer')  

