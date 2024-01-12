<!DOCTYPE html>
<html lang="en">
@include('institute_admin_panel.dashboard.include.header')

<style>
    #yellow {
        height: 300px;

    }
</style>

<body>


    <div id="wrapper" class="wrapper bg-ash">
        @include('institute_admin_panel.dashboard.include.navbar')

        <div class="dashboard-page-one">
    @include('institute_admin_panel.dashboard.include.sidebar')

            <div class="dashboard-content-one">

                <div class="breadcrumbs-area">
                    <h3>Institute Dashboard </h3>
                    <ul>
                        <li>  
                            <a href="/main_assets/home.html">Home</a>
                        </li>
                        <li>Admin</li>
                    </ul>
                </div>


                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congratulations!</strong> {{ session('success') }}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>  
                @endif

                <div class="card height-auto">
                    <div class="card-body" id="yellow">


                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>{{$pagename}}</h3>
                            </div>

                        </div>    

                        <form class="new-added-form" action="{{route('save-session')}}" method="POST">
                            @csrf


                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-12 form-group">

                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

                                    <p>Start Date: <input type="text" id="datepicker" class="form-control" name="start_date" required /></p>
                                </div>


                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <p>End Date: <input type="text" class="form-control" id="endDatePicker" name="end_date" /></p>
                                </div>

                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                        Save
                                    </button>
                                </div>

                            </div>
                        </form>

                        <script>
                            $(function() {
                                var currentYear = new Date().getFullYear();
                                var startYear = currentYear - 100; // Pichle 100 saal se
                                var endYear = currentYear + 500; // Agley 100 saal tak

                                $('#datepicker').datepicker({
                                    changeYear: true,
                                    showButtonPanel: true,
                                    dateFormat: 'yy',
                                    yearRange: startYear + ':' + endYear, // Set minimum and maximum year range
                                    onClose: function(dateText, inst) {
                                        var selectedYear = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                        $('#endDatePicker').val(parseInt(selectedYear) + 1); // Set year in the second input
                                        $(this).datepicker('setDate', new Date(selectedYear, 1));
                                    }
                                });

                                $("#datepicker").focus(function() {
                                    $(".ui-datepicker-month").hide();
                                    $(".ui-datepicker-calendar").hide();
                                });
                            });
                        </script>





                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>