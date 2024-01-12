@include('student_panel.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">

    @include('student_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center"> "{{ $pagename }}" </h3>
            </div>
            <div class="container-fluid card height-auto">
                <div class="topBg">
                    <div class="news">
                        News & Events
                    </div>
                    <div>
                        <i class="fa fa-angle-left px-2 text-white" aria-hidden="true"><a href="#"
                                style="text-decoration: none; color:#fff; padding:0 10px;"
                                onclick="goBack()">Back</a></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        @foreach ($get_all_notices as $get_all_notices)
                            <div class="row mt-3">

                                <div class="events">
                                    <div class="date">
                                        <span> {{ $get_all_notices->Notice_Publish_date }} </span>
                                    </div>
                                    <div class="desc">
                                        <div><span
                                                class="font-weight-bold">Title</span>&nbsp;:&nbsp;{{ $get_all_notices->Notice_title }}
                                        </div>
                                        <div><span
                                                class="font-weight-bold">Description</span>&nbsp;:&nbsp;{{ $get_all_notices->Notice_Description }}
                                        </div>
                                        <div class="time_link">
                                            {{-- <div class="time">02:03</div> --}}
                                            {{-- <a href="#">{{$get_all_notices->Notice_Link}}</a> --}}
                                            <div class="link"> <a href="{{ $get_all_notices->Notice_Link }}"
                                                    target="_blank">{{ $get_all_notices->Notice_Link }}</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Function to handle the "Back" functionality
    function goBack() {
        window.history.back();
    }
</script>

@include('student_panel.include.footer')
