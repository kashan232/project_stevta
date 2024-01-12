@include('screen_ready_for_uni.include.header')
<style>
    .recepitcard {
        width: 70%;
        margin: 10px auto;
        padding: 20px;
        border: 1px solid #000;
    }
    .header {
        text-align: center;
    }
    .header h2 {
        font-size: 20px;
        margin: 0;
    }
    .header p {
        font-size: 14px;
        margin: 0;
    }
    .logo {
        text-align: center;
    }
    .logo img {
        max-width: 100px;
    }
    .receipt-info {
        margin-top: 20px;
    }
    .receipt-info p {
        font-size: 14px;
        margin: 5px 0;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid #000;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    .footer {
        margin-top: 20px;
        text-align: center;
    }
    .footer p {
        font-size: 14px;
        margin: 0;
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
                    <div class="container recepitcard">
                        <div class="header">
                            <h2>University Name</h2>
                            <p>Address: 123 University Street, City, Country</p>
                            <p>Email: info@university.edu</p>
                            <p>Phone: +123 456 7890</p>
                        </div>
                
                           <div class="logo">
                            <img src="/main_assets/img/logo3.png" alt="University Logo">
                        </div>
                
                        <div class="receipt-info">
                            <p>Receipt No: 12345</p>
                            <p>Date: 2023-11-01</p>
                            <p>Name: Ali Khan</p>
                            <p>Student ID: 123456</p>
                        </div>
                
                        <table>
                            <tr>
                                <th>Description</th>
                                <th>Amount (USD)</th>
                            </tr>
                            <tr>
                                <td>Tuition Fee</td>
                                <td>500.00</td>
                            </tr>
                            <tr>
                                <td>Library Fee</td>
                                <td>50.00</td>
                            </tr>
                            <tr>
                                <td>Registration Fee</td>
                                <td>100.00</td>
                            </tr>
                            <tr>
                                <td>Total Amount:</td>
                                <td>650.00 USD</td>
                            </tr>
                            <tr>
                                <td>Payment Amount:</td>
                                <td>650.00 USD</td>
                            </tr>
                            <tr>
                                <td>Payment Date:</td>
                                <td>2023-11-01</td>
                            </tr>
                        </table>
                
                        <div class="footer">
                            <p>Thank you for your payment!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')