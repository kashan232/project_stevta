@include('teacher_panel.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
       
            <div class="container ">
                <div class="row justify-content-center">
                    <div style="position: fixed;bottom: 0;top: 33%; width: 100%;">
                        <div class="container div_messages bg-light"
                            style="height: 89%; overflow-y: scroll;border-radius: 15px 15px 0px 0px;">
                            <div class="row p- mt-2 mb-2" id="messages_box">
                                <!-- Messages here -->
                                <div id="messages-container">
                                    <table>
                                        @foreach ($get_all_students_messages as $message)
                                            <tr>
                                                <td>{{ $message->message }}
                                                    <pre style="color: red;">Recieved From : {{ $message->student_name }} class: {{ $message->student_class}} section: {{ $message->student_section }}</pre>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                
                            </div>
                        </div>

                        
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

<!-- Include other HTML and Blade code -->

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  -->
@include('teacher_panel.include.footer')




