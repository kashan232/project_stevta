@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('campus_admin_panel.dashboard.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <ul>
                    <li>
                        <a href="/main_assets/home.html">Home</a>
                    </li>
                    <li>Admin</li>
                </ul>
            </div>
            <!-- form   -->
            <div class="card height-auto">
                <div class="card-body">
                    @if (session('book-added'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('book-added') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- form   -->
                    <form class="new-added-form  mt-5" action="{{ route('store-book') }}" method="POST">
                        @csrf
                        <h2>Add Books</h2>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Book Title *</label>
                                <input type="text" name="book_title" id="book_title" required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Book Number*</label>
                                <input type="text" name="book_number" id="book_number" required
                                    class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Publisher*</label>
                                <input type="text" name="publisher" id="publisher" required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Author*</label>
                                <input type="text" name="author" id="author" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Subject*</label>
                                <input type="text" name="subject" id="subject" required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Book Price*</label>
                                <input type="number" name="book_price" id="book_price" required class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Post Date*</label>
                                <input type="date" name="post_date" id="post_date" required class="form-control" />
                            </div>
                            <div class="col-xl-12 col-lg-6 col-12 form-group">
                                <label>Description*</label>
                                <textarea name="description" id="" cols="30" rows="10"  class="form-control"></textarea>
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- form end  -->
                </div>
            </div>
            <!-- form   -->
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('campus_admin_panel.dashboard.include.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>