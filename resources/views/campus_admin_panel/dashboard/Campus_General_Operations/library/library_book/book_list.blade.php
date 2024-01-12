@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">

            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>{{ $pagename }}</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-12-xxxl col-xl-12 col-lg-12 col-12 form-group mt-5 text-right">
                    <a href="{{ route('add-book') }}">
                        <button type="button" class="btn btn-warning text-white mb-3" style="font-size: 16px">
                            Add Book
                        </button>
                    </a>
                </div>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if (session('delete-message-Institute'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('delete-message-Institute') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>{{$pagename}}</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>View</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap mt-5">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>id</th>
                                    <th>Title</th>
                                    <th>Book Number</th>
                                    <th>Publisher</th>
                                    <th>Author</th>
                                    <th>Subject</th>
                                    <th>Book Price</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $lib_books as $lib_book)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $lib_book->book_title }}</td>
                                        <td>{{ $lib_book->book_number }}</td>
                                        <td>{{ $lib_book->publisher }}</td>
                                        <td>{{ $lib_book->author }}</td>
                                        <td>{{ $lib_book->subject }}</td>
                                        <td>{{ $lib_book->book_price }}</td>
                                        <td>{{ $lib_book->post_date }}</td>
                                        <td>{{ $lib_book->description }}</td>
                                        <td>Action</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('campus_admin_panel.dashboard.include.footer')
