@include('screen_ready_for_uni.include.header')
<style>
    .card {
            border: none;
        }
        .card-title {
            text-align: left;
            font-size: 30px;
        }
        .logo {
            display: inline-block;
            width: 150px;
            float: right;
        }
        .header {
            text-align: left;
            float: left;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        .total {
            font-weight: bold;
        }
        .due-date {
            text-align: center;
            margin-top: 20px;
        }
</style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('screen_ready_for_uni.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="container mt-5">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/150" alt="Your Logo" class="logo">
                                <h2 class="card-title">Fee Bill Challan</h2>
                                <div class="header">
                                    <p><strong>Student Name:</strong> Kashan Shaikh</p>
                                    <p><strong>Roll Number:</strong> GR12345</p>
                                    <p><strong>Program:</strong> Bachelor's in Computer Science</p>
                                    <p><strong>Academic Year:</strong> 2023-2024</p>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Amount (PKR)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tuition Fee</td>
                                            <td>2,000</td>
                                        </tr>
                                        <tr>
                                            <td>Library Fee</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>Hostel Fee</td>
                                            <td>1,000</td>
                                        </tr>
                                        <tr>
                                            <td class="total">Total Amount</td>
                                            <td class="total">3,100</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="due-date"><strong>Due Date:</strong> July 15, 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
