@include('institute_admin_panel.dashboard.include.header')


<!-- Preloader Start Here -->
<div id="preloader"></div>

<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
  <!-- Header Menu Area Start Here -->
  @include('institute_admin_panel.dashboard.include.navbar')

      <!-- Header Menu Area End Here -->
      <!-- Page Area Start Here --> 
      <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
      
      @include('institute_admin_panel.dashboard.include.sidebar')
        <!-- Sidebar Area End Here --> 
        <div class="dashboard-content-one"> 
          <!-- Breadcubs Area Start Here -->
          <div class="breadcrumbs-area">
            <h3>{{$pagename}} Dashboard</h3>
            <ul>
              <li>
                <a href="/main_assets/home.html">Home</a>
              </li> 
              <li>Institute</li>
            </ul>
          </div> 
          <!-- Breadcubs Area End Here --> 
          <!-- Dashboard summery Start Here -->
          <div class="row gutters-20">
            <div class="col-xl-3 col-sm-6 col-12">    
              <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                  <div class="col-6">
                    <div class="item-icon bg-light-green">
                      <i class="flaticon-classmates text-green"></i>
                    </div> 
                  </div>
                  <div class="col-6">
                    <div class="item-content">   
                      <div class="item-title">Students</div>
                      <div class="item-number">
                        <span class="counter" data-num="{{ $students_count }}">{{ $students_count }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                  <div class="col-6">
                    <div class="item-icon bg-light-blue">
                      <i
                        class="flaticon-multiple-users-silhouette text-blue"
                      ></i>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="item-content">
                      <div class="item-title">Teachers</div>
                      <div class="item-number">
                        <span class="counter" data-num="{{ $teachers_count }}">{{ $teachers_count }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                  <div class="col-6">
                    <div class="item-icon bg-light-yellow">
                      <i class="flaticon-couple text-orange"></i>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="item-content">
                      <div class="item-title">Parents</div>
                      <div class="item-number">
                        <span class="counter" data-num="5690">5,690</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                  <div class="col-6">
                    <div class="item-icon bg-light-red">
                      <i class="flaticon-money text-red"></i>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="item-content">
                      <div class="item-title">Earnings</div>
                      <div class="item-number">
                        <span>$</span
                        ><span class="counter" data-num="193000">1,93,000</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Dashboard summery End Here -->
          <!-- Dashboard Content Start Here -->
          <div class="row gutters-20">
            <div class="col-12 col-xl-8 col-6-xxxl">
              <div class="card dashboard-card-one pd-b-20">
                <div class="card-body">
                  <div class="heading-layout1">
                    <div class="item-title">
                      <h3>Earnings</h3>
                    </div>
                    <div class="dropdown">
                      <a
                        class="dropdown-toggle"
                        href="/main_assets/#"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false"
                        >...</a
                      >

                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-times text-orange-red"></i>Close</a
                        >
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-cogs text-dark-pastel-green"></i
                          >Edit</a
                        >
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-redo-alt text-orange-peel"></i
                          >Refresh</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="earning-report">
                    <div class="item-content">
                      <div class="single-item pseudo-bg-blue">
                        <h4>Total Collections</h4>
                        <span>75,000</span>
                      </div>
                      <div class="single-item pseudo-bg-red">
                        <h4>Fees Collection</h4>
                        <span>15,000</span>
                      </div>
                    </div>
                    <div class="dropdown">
                      <a
                        class="date-dropdown-toggle"
                        href="/main_assets/#"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false"
                        >Jan 20, 2019</a
                      >
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/main_assets/#">Jan 20, 2019</a>
                        <a class="dropdown-item" href="/main_assets/#">Jan 20, 2021</a>
                        <a class="dropdown-item" href="/main_assets/#">Jan 20, 2020</a>
                      </div>
                    </div>
                  </div>
                  <div class="earning-chart-wrap">
                    <canvas
                      id="earning-line-chart"
                      width="660"
                      height="320"
                    ></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4 col-3-xxxl">
              <div class="card dashboard-card-two pd-b-20">
                <div class="card-body">
                  <div class="heading-layout1">
                    <div class="item-title">
                      <h3>Expenses</h3>
                    </div>
                    <div class="dropdown">
                      <a
                        class="dropdown-toggle"
                        href="/main_assets/#"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false"
                        >...</a
                      >

                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-times text-orange-red"></i>Close</a
                        >
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-cogs text-dark-pastel-green"></i
                          >Edit</a
                        >
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-redo-alt text-orange-peel"></i
                          >Refresh</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="expense-report">
                    <div class="monthly-expense pseudo-bg-Aquamarine">
                      <div class="expense-date">Jan 2019</div>
                      <div class="expense-amount"><span>$</span> 15,000</div>
                    </div>
                    <div class="monthly-expense pseudo-bg-blue">
                      <div class="expense-date">Feb 2019</div>
                      <div class="expense-amount"><span>$</span> 10,000</div>
                    </div>
                    <div class="monthly-expense pseudo-bg-yellow">
                      <div class="expense-date">Mar 2019</div>
                      <div class="expense-amount"><span>$</span> 8,000</div>
                    </div>
                  </div>
                  <div class="expense-chart-wrap">
                    <canvas
                      id="expense-bar-chart"
                      width="100"
                      height="300"
                    ></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-6 col-3-xxxl">
              <div class="card dashboard-card-three pd-b-20">
                <div class="card-body">
                  <div class="heading-layout1">
                    <div class="item-title">
                      <h3>Students</h3>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div id="chart" style="width: 100%; height: 400px;"></div>
                  </div>
                  <div class="student-report">
                    <div class="student-count pseudo-bg-blue">
                      <h4 class="item-title">Female Students</h4>
                      <div class="item-number">{{ $femaleCount }}</div>
                    </div>
                    <div class="student-count pseudo-bg-yellow">
                      <h4 class="item-title">Male Students</h4>
                      <div class="item-number">{{ $maleCount }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-6 col-4-xxxl">
              <div class="card dashboard-card-four pd-b-20">
                <div class="card-body">
                  <div class="heading-layout1">
                    <div class="item-title">
                      <h3>Event Calender</h3>
                    </div>
                    <div class="dropdown">
                      <a
                        class="dropdown-toggle"
                        href="/main_assets/#"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false"
                        >...</a
                      >

                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-times text-orange-red"></i>Close</a
                        >
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-cogs text-dark-pastel-green"></i
                          >Edit</a
                        >
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-redo-alt text-orange-peel"></i
                          >Refresh</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="calender-wrap">
                    <div id="fc-calender" class="fc-calender"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-4-xxxl">
              <div class="card dashboard-card-five pd-b-20">
                <div class="card-body pd-b-14">
                  <div class="heading-layout1">
                    <div class="item-title">
                      <h3>Website Traffic</h3>
                    </div>
                    <div class="dropdown">
                      <a
                        class="dropdown-toggle"
                        href="/main_assets/#"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false"
                        >...</a
                      >

                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-times text-orange-red"></i>Close</a
                        >
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-cogs text-dark-pastel-green"></i
                          >Edit</a
                        >
                        <a class="dropdown-item" href="/main_assets/#"
                          ><i class="fas fa-redo-alt text-orange-peel"></i
                          >Refresh</a
                        >
                      </div>
                    </div>
                  </div>
                  <h6 class="traffic-title">Unique Visitors</h6>
                  <div class="traffic-number">2,590</div>
                  <div class="traffic-bar">
                    <div
                      class="direct"
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Direct"
                    ></div>
                    <div
                      class="search"
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Search"
                    ></div>
                    <div
                      class="referrals"
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Referrals"
                    ></div>
                    <div
                      class="social"
                      data-toggle="tooltip"
                      data-placement="top"
                      title="Social"
                    ></div>
                  </div>
                  <div class="traffic-table table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="t-title pseudo-bg-Aquamarine">Direct</td>
                          <td>12,890</td>
                          <td>50%</td>
                        </tr>
                        <tr>
                          <td class="t-title pseudo-bg-blue">Search</td>
                          <td>7,245</td>
                          <td>27%</td>
                        </tr>
                        <tr>
                          <td class="t-title pseudo-bg-yellow">Referrals</td>
                          <td>4,256</td>
                          <td>8%</td>
                        </tr>
                        <tr>
                          <td class="t-title pseudo-bg-red">Social</td>
                          <td>500</td>
                          <td>7%</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-4-xxxl">
              <div class="card dashboard-card-six pd-b-20">
                <div class="card-body">
                  <div class="heading-layout1 mg-b-17">
                    <div class="item-title">
                      <h3>Notice Board</h3>
                    </div>
                    <div class="dropdown">
                      <a
                        class="dropdown-toggle"
                        href="/main_assets/#"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false"
                        >...</a
                      >

                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="/main_assets/#"><i class="fas fa-times text-orange-red"></i>Close</a>
                    <a class="dropdown-item" href="/main_assets/#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                    <a class="dropdown-item" href="/main_assets/#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                  </div>
                </div>
              </div>
              <!-- $all_notices  -->
              @foreach($all_notices as $all_notices)
              <div class="notice-box-wrap">
                <div class="notice-list">
                  <div class="post-date bg-skyblue">{{$all_notices->Notice_Publish_date }}</div>
                  <!-- Fetching campus name using campus_id -->

                  <!-- @php
                  $campus = DB::table('campuses')->where('id', $all_notices->campus_id)->first();
                  @endphp

                  <div class="post-date bg-skyblue">Campus: {{ $campus->campus_name }}</div> -->

                  <!-- <div class="post-date bg-skyblue">Campus id: {{$all_notices->campus_id	}}</div> -->

                  <!-- Accessing campus name using the relationship -->
                  <div class="post-date bg-skyblue">Campus: {{ $all_notices->campus->campus_name }}</div>


                  <h6 class="notice-title">
                    <a href="{{$all_notices->Notice_Link}}">{{$all_notices->Notice_Description}}</a>
                  </h6>


                  <div class="entry-meta">
                    {{$all_notices->teacher_name}} / <span>{{ getTimeAgo($all_notices->Notice_Publish_date) }}</span>
                  </div>

                  <div class="entry-meta">
                    Link / <span> <a href="{{$all_notices->Notice_Link}}" target="_blank">{{$all_notices->Notice_Link}}</a></span>
                  </div>

                </div>
              </div>
              @endforeach

              <?php
              function getTimeAgo($publishedDate)
              {
                $fetch_time = new DateTime($publishedDate);
                $current_time = new DateTime();
                $interval = $current_time->diff($fetch_time);

                if ($interval->days > 0) {
                  return $interval->format('%a days ago');
                } elseif ($interval->h > 0) {
                  return $interval->format('%h hours ago');
                } elseif ($interval->i > 0) {
                  return $interval->format('%i minutes ago');
                } else {
                  return 'just now';
                }
              }
              ?>


            </div>
          </div>
        </div>
      </div>
      <!-- Dashboard Content End Here -->
      <!-- Social Media Start Here -->
      <div class="row gutters-20">
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card dashboard-card-seven">
            <div class="social-media bg-fb hover-fb">
              <div class="media media-none--lg">
                <div class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </div>
                <div class="media-body space-sm">
                  <h6 class="item-title">Like us on facebook</h6>
                </div>
              </div>
              <div class="social-like">30,000</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card dashboard-card-seven">
            <div class="social-media bg-twitter hover-twitter">
              <div class="media media-none--lg">
                <div class="social-icon">
                  <i class="fab fa-twitter"></i>
                </div>
                <div class="media-body space-sm">
                  <h6 class="item-title">Follow us on twitter</h6>
                </div>
              </div>
              <div class="social-like">1,11,000</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card dashboard-card-seven">
            <div class="social-media bg-gplus hover-gplus">
              <div class="media media-none--lg">
                <div class="social-icon">
                  <i class="fab fa-google-plus-g"></i>
                </div>
                <div class="media-body space-sm">
                  <h6 class="item-title">Follow us on googleplus</h6>
                </div>
              </div>
              <div class="social-like">19,000</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card dashboard-card-seven">
            <div class="social-media bg-linkedin hover-linked">
              <div class="media media-none--lg">
                <div class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </div>
                <div class="media-body space-sm">
                  <h6 class="item-title">Follow us on linked</h6>
                </div>
              </div>
              <div class="social-like">45,000</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Social Media End Here -->
    </div>
    <!-- Page Area End Here -->
  </div>
  @include('institute_admin_panel.dashboard.include.footer')
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.js"></script>

  <script>
    // Sample data for the donut chart
    const data = {
      series: [45, 25],
    };

    // Options for the donut chart
    const options = {
      chart: {
        type: "donut",
      },
      series: data.series,
      labels: ["Category A", "Category B"],
    };

    // Create and render the donut chart
    const chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
  </script>