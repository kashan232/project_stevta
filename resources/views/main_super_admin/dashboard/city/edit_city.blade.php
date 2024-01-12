@include('main_super_admin.dashboard.include.header')

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
      <!-- Header Menu Area Start Here -->
      @include('main_super_admin.dashboard.include.navbar')
      <!-- Header Menu Area End Here -->
      <!-- Page Area Start Here -->
      <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
      @include('main_super_admin.dashboard.include.side_bar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
          <!-- Breadcubs Area Start Here -->
          <div class="breadcrumbs-area">
            <h3>City</h3>
            <ul>
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Add City</li>
            </ul>
          </div>
          <!-- Breadcubs Area End Here -->
          <!-- Admit Form Area Start Here -->
          <div class="card height-auto">
            <div class="card-body">
              @if(session('success-message-updte'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Congratulations!</strong> {{ session('success-message-updte') }}.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              <div class="heading-layout1">
                <div class="item-title">
                  <h3>Edit New City</h3>
                </div>
                <div class="dropdown">
                  <a
                    class="dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                    aria-expanded="false"
                    >...</a
                  >

                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"
                      ><i class="fas fa-times text-orange-red"></i>Close</a
                    >
                    <a class="dropdown-item" href="#"
                      ><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a
                    >
                    <a class="dropdown-item" href="#"
                      ><i class="fas fa-redo-alt text-orange-peel"></i
                      >Refresh</a
                    >
                  </div>
                </div>
              </div>
              <form class="new-added-form" action="{{ route('update-city',['id'=> $citedetails->id ]) }}" method="POST">
                @csrf
                <div class="row">
                  <div class=" col-12 form-group">
                    <label>City Name *</label>
                    <input type="text" name="city_name" id="city_name" placeholder="Enter City Name" required class="form-control" value="{{ $citedetails->city_name }}" />
                  </div>

                  <div class="col-12 form-group mg-t-8">
                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                      Save
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Area End Here -->
    </div>
@include('main_super_admin.dashboard.include.footer')
