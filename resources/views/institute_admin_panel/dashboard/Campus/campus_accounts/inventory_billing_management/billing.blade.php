@include('institute_admin_panel.dashboard.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('institute_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        @include('institute_admin_panel.dashboard.include.sidebar')
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <ul>
                    <li>
                        <a href="{{ route('institute_Dashboard') }}">Home</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                {{-- <div class="col-lg-5 col-xl-5 col-md-5 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title w-100 text-center mt-2 mb-2">
                                    <h3>Expenses</h3>
                                </div>
                            </div>
                            @if(session('expenses-added'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Congratulations! </strong> {{ session('expenses-added') }}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <form class="new-added-form" action="{{ route('billing.post') }}" method="POST">
                                @csrf
                                <div class="row"> 
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <label>Purpose *</label>
                                        <input type="text" name="purpose_name" id="purpose"
                                            required="required" class="form-control" />
                                    </div>
                                      <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <label>Amount*</label>
                                        <input type="number" name="amount" id="amount"
                                            required="required" class="form-control" />
                                    </div>
                                      <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <label>Date*</label>
                                        <input type="date" name="date" id="date"
                                            required="required" class="form-control" />
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        <label>Description*</label>
                                        <input type="text" name="description" id="description"
                                            required="required" class="form-control" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-center  mg-t-8">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div> --}}
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="heading-layout1">
                                    <div class="item-title w-100 text-center mt-2 mb-2">
                                        <h3>Expenses List</h3>
                                    </div>
                                </div>
                                @if(session('delete-message-expense'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Congratulations! </strong> {{ session('delete-message-expense') }}.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <table class="table display data-table text-nowrap">
                                    <thead class="text-center">
                                        <tr>
                                            <th>ID</th>
                                            <th>Purpose</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($billing_lists as $billing_list)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $billing_list->purpose_name }}</td>
                                            <td>{{ $billing_list->amount }}</td>
                                            <td>{{ $billing_list->date }}</td>
                                            {{-- <td>
                                                <a class="dropdown-item" 
                                                href="{{ route('delete-bill',['delete' => $billing_list->id ]) }}">
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
                        <div class="d-flex justify-content-center mt-3"></div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>
@include('institute_admin_panel.dashboard.include.footer')
