@include('institute_admin_panel.dashboard.include.header')
<style>
    #stock_message {
        display: none;
    }
</style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('institute_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <!-- Stock Modal -->
        {{-- <form action="{{ route('store-add-stock') }}" method="POST" id="add_stock">
            @csrf
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Stock</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="stock">
                            <div class="alert alert-success" id="stock_message" style="display: none;"></div>
                            <!-- Updated this line -->
                            <span>Stock</span>
                            <input type="hidden" name="stock_id" id="stock_id">
                            <input type="number" class="form-control" name="stock" id="stock"
                                placeholder="i.e. 500" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="fw-btn-fill btn btn-success ">Add Now</button>
                            <button type="button" class="fw-btn-fill btn btn-danger"
                                data-dismiss="modal">cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form> --}}
        <!-- Stock Modal End Here-->
        <!-- Usage Modal -->
        {{-- <form action="{{ route('store-add-usage') }}" method="POST" id="add_usage">
            @csrf
            <div class="modal fade" id="usageexampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="usageexampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Usage</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="usage">
                            <div class="alert alert-success" id="usage_message" style="display: none;"></div>
                            <!-- Updated this line -->
                            <span>Usage</span>
                            <input type="hidden" name="usage_id" id="usage_id">
                            <input type="number" class="form-control" name="usage" id="usage"
                                placeholder="i.e. 500" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="fw-btn-fill btn btn-success ">Add Now</button>
                            <button type="button" class="fw-btn-fill btn btn-danger"
                                data-dismiss="modal">cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form> --}}
        <!-- Usage Modal End Here-->
        <!-- Sidebar Area Start Here -->
        @include('institute_admin_panel.dashboard.include.sidebar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">

            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                <ul>
                    <li>
                        <a href="{{ route('institute_Dashboard') }}">Home</a>
                    </li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if (session('delete-message-inventory'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('delete-message-inventory') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Inventory</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Item Name</th>
                                    <th>Available Quantity</th>
                                    <th>Quantity Assign</th>
                                    {{-- <th>Stock</th>
                                    <th>Usage</th> --}}
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventory_lists as $inventory_list)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $inventory_list->item_name }}</td>
                                        <td>{{ $inventory_list->stock }}</td>
                                        <td>{{ $inventory_list->usage }}</td>
                                        {{-- <td>
                                            <a class="dropdown-item" href="#">
                                                <button type="button" class="fw-btn-fill btn btn-primary stock"
                                                    data-toggle="modal" data-target="#exampleModalCenter"
                                                    data-id="{{ $inventory_list->id }}"
                                                    data-stock="{{ $inventory_list->stock }}">
                                                    Add Stock
                                                </button>
                                            </a>
                                        </td> --}}
                                        {{-- <td>
                                            <a class="dropdown-item" href="#">
                                                <button type="button" class="fw-btn-fill btn btn-primary usage"
                                                    data-toggle="modal" data-target="#usageexampleModalCenter"
                                                    data-id="{{ $inventory_list->id }}"
                                                    data-stock="{{ $inventory_list->usage }}">
                                                    Add Usage
                                                </button>
                                            </a>
                                        </td> --}}
                                        {{-- <td>
                                            <a class="dropdown-item"
                                                href="{{ route('delete-inventory', ['delete' => $inventory_list->id]) }}">
                                                <button type="submit" class="fw-btn-fill btn btn-danger">
                                                    Delete
                                                </button>
                                            </a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">

                {{-- @include('main_super_admin.dashboard.include.poweredby') --}}
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
<script>
    $(document).ready(function() {
        $('.stock').click(function() {
            var id = $(this).data('id');
            $('#stock_id').val(id);
        });
    });
    $('.stock').click(function() {
        var id = $(this).data('id');
        var stock = $(this).data('stock');
        $('#stock_id').val(id);
        $('#stock').val(stock);
    });
    $('#add_stock').on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            contentType: false,
            processData: false,
            async: false,
        }).done(function(response) {
            var message = response;
            // $("#stock_message").html(message).show();
            $("#stock_message").text(message).show();

            $('#exampleModalCenter').modal('show');
        }).fail(function(xhr, status, error) {
            console.error(error);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.usage').click(function() {
            var id = $(this).data('id');
            $('#usage_id').val(id);
        });
    });

    $('#add_usage').on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            contentType: false,
            processData: false,
            async: false,
        }).done(function(response) {
            var message = response;
            $("#usage_message").text(message).show();

            // Get the updated available quantity from the response and update the table cell
            var updatedAvailableQuantity = parseInt($('#stock').text()) - parseInt($('#usage').val());
            $('#stock').text(updatedAvailableQuantity);

            $('#usageexampleModalCenter').modal('show');
        }).fail(function(xhr, status, error) {
            console.error(error);
        });
    });
</script>
