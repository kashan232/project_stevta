@include('screen_ready_for_uni.include.header')
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
                    <div class="row">
                        <div class="col-12-xxxl col-xl-12 col-lg-12 col-12 form-group mt-5 text-right">
                            <a href="{{ route('add-Student') }}">
                                <button type="button" class="btn btn-warning text-white mb-3" style="font-size: 16px">
                                    Add Student
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="heading-layout1 ">
                                <div>
                                    <h2>Student Merit List</h2>
                                </div>
                            </div>
                            <form class="mg-b-20">
                                <div class="row d-flex justify-content-end gutters-8">
                                    <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="Search by..." class="form-control" />
                                    </div>

                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="button" class="btn btn-warning text-white mt-2 mb-3"
                                            style="font-size: 18px">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Department Name</th>
                                            <th>Head of Department</th>
                                            <th>Total Faculty Members</th>
                                            <th>Programs Offered</th>
                                            <th>Pre-Admission Test Scores</th>
                                            <th>Merit Marks</th>
                                            <th>Unit Marks</th>
                                            <th>Final Marks</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Computer Science</td>
                                            <td>Prof. Kashan Shaikh</td>
                                            <td>25</td>
                                            <td>Bachelor's, Master's, PhD</td>
                                            <td>85</td>
                                            <td>95</td>
                                            <td>90</td>
                                            <td>90</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Physics</td>
                                            <td>Prof. Anas</td>
                                            <td>18</td>
                                            <td>Bachelor's, Master's</td>
                                            <td>78</td>
                                            <td>85</td>
                                            <td>88</td>
                                            <td>88</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Mathematics</td>
                                            <td>Prof. Iqra</td>
                                            <td>22</td>
                                            <td>Bachelor's, Master's, PhD</td>
                                            <td>92</td>
                                            <td>94</td>
                                            <td>89</td>
                                            <td>89</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Biology</td>
                                            <td>Prof. Saqib</td>
                                            <td>15</td>
                                            <td>Bachelor's, Master's</td>
                                            <td>76</td>
                                            <td>80</td>
                                            <td>75</td>
                                            <td>75</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Chemistry</td>
                                            <td>Prof. Fareed</td>
                                            <td>20</td>
                                            <td>Bachelor's, Master's, PhD</td>
                                            <td>89</td>
                                            <td>92</td>
                                            <td>88</td>
                                            <td>88</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>History</td>
                                            <td>Prof. Aunaib</td>
                                            <td>12</td>
                                            <td>Bachelor's, Master's</td>
                                            <td>70</td>
                                            <td>75</td>
                                            <td>72</td>
                                            <td>72</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Economics</td>
                                            <td>Prof. Deen Muhammad</td>
                                            <td>19</td>
                                            <td>Bachelor's, Master's, PhD</td>
                                            <td>88</td>
                                            <td>91</td>
                                            <td>87</td>
                                            <td>87</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Psychology</td>
                                            <td>Prof. Ali</td>
                                            <td>16</td>
                                            <td>Bachelor's, Master's</td>
                                            <td>79</td>
                                            <td>83</td>
                                            <td>78</td>
                                            <td>78</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Sociology</td>
                                            <td>Prof. Akraam-uddin</td>
                                            <td>14</td>
                                            <td>Bachelor's, Master's, PhD</td>
                                            <td>75</td>
                                            <td>78</td>
                                            <td>74</td>
                                            <td>74</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>English Literature</td>
                                            <td>Prof. Hassan Shah</td>
                                            <td>21</td>
                                            <td>Bachelor's, Master's</td>
                                            <td>84</td>
                                            <td>88</td>
                                            <td>86</td>
                                            <td>86</td>
                                            <td><a href="#">More Details</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>

        @include('screen_ready_for_uni.include.footer')
