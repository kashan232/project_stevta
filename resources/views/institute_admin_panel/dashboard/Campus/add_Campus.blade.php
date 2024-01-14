@include('institute_admin_panel.dashboard.inst_include.header')
<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">
  <!--**********************************
            Nav header start
        ***********************************-->
  @include('institute_admin_panel.dashboard.inst_include.navbar')
  <!--**********************************
            Nav header end
        ***********************************-->
  <!--**********************************
            Header start
        ***********************************-->
  @include('institute_admin_panel.dashboard.inst_include.topbar')
  <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
  <!--**********************************
            Sidebar start
        ***********************************-->
  @include('institute_admin_panel.dashboard.inst_include.sidebar')
  <!--**********************************
            Sidebar end
        ***********************************-->
  <!--**********************************
            Content body start
        ***********************************-->
  <div class="content-body">
    <!-- row -->
    <div class="container-fluid">
      <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
          <div class="welcome-text">
            <h4>Campus Creation </h4>
          </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('all-courses') }}">All Campus</a></li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              @if(session('added-message-Institute'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulations!</strong> {{ session('added-message-Institute') }}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <form class="new-added-form" action="{{ route('store-campus') }}" method="POST">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                    <div class="form-group">
                      <label>Campus Name *</label>
                      <input type="text" name="campus_name" id="campus_name" placeholder="Campus Name" required class="form-control" />
                      <span class="text-danger error-message" id="error-campus_name"></span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                    <div class="form-group">
                      <label>Campus Address*</label>
                      <input type="text" name="campus_address" id="campus_address" required placeholder="Campus Address" class="form-control" />
                      <span class="text-danger error-message" id="error-campus_address"></span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                    <div class="form-group">
                      <label>Campus Phone *</label>
                      <input type="phone" name="campus_phone" id="campus_phone" required placeholder="Campus Phone" class="form-control" />
                      <span class="text-danger error-message" id="error-campus_phone"></span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                    <div class="form-group">
                      <label>Campus Website *</label>
                      <input type="text" name="campus_website" id="campus_website" placeholder="Campus Website" class="form-control" />
                      <span class="text-danger error-message" id="error-campus_website"></span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                    <div class="form-group">
                      <label>Campus Email *</label>
                      <input type="email" name="campus_email" id="campus_email" required placeholder="Campus Email" class="form-control" />
                      <span class="text-danger error-message" id="error-campus_email"></span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                    <div class="form-group">
                      <label>Campus Password *</label>
                      <input type="password" name="campus_password" id="campus_password" required placeholder="Campus Password" class="form-control" />
                      <span class="text-danger error-message" id="error-campus_password"></span>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-dark">Cencel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--**********************************
            Content body end
        ***********************************-->
  <!--**********************************
            Footer start
        ***********************************-->
  @include('institute_admin_panel.dashboard.inst_include.poweredby')
  <!--**********************************
            Footer end
        ***********************************-->

  <!--**********************************
           Support ticket button start
        ***********************************-->

  <!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
@include('institute_admin_panel.dashboard.inst_include.footer')

<script>
  function validateInput() {
    const inputElement = document.getElementById('class_name');
    const errorElement = document.getElementById('error-class_name');

    // Regular expression to match input starting with alphabetic characters followed by optional integers
    const regex = /^[A-Za-z]+[0-9]*$/;

    if (regex.test(inputElement.value)) {
      // Input matches the pattern, clear the error message
      errorElement.textContent = "";
    } else {
      // Input does not match the pattern, show an error message
      errorElement.textContent = "Please start with alphabetic characters followed by optional integers.";
      // You may also choose to revert the input to a valid state if needed.
    }
  }
</script>

</body>

</html>