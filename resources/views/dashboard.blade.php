
<x-body>

    @section('content')
         <!-- Begin Page Content -->
            <!-- Page Heading -->
            <!-- Page Heading -->
          <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
              <div style="height: 200px" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Year To Year Claims Performance(5Years)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    {{-- <canvas id="myAreaChart"></canvas> --}}
                  </div>
                </div>
              </div>
            </div>


                 <!-- Area Chart -->
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div style="height: 200px" class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Year To Year Sales Performance(5Years)</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="chart-area">
                        {{-- <canvas id="myAreaChart"></canvas> --}}
                      </div>
                    </div>
                  </div>
                </div>

            <!-- Area Chart -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div style="height: 200px" class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Claims Performance(5Years)</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area">
                      {{-- <canvas id="myAreaChart"></canvas> --}}
                    </div>
                  </div>
                </div>
              </div>


                   <!-- Area Chart -->
                   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div style="height: 200px" class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Sales Performance(5Years)</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                        <div class="chart-area">
                          {{-- <canvas id="myAreaChart"></canvas> --}}
                        </div>
                      </div>
                    </div>
                  </div>

          </div>





          <!-- Content Row -->
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
              <div style="height: 200px" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Year To Date Performance</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    {{-- <canvas id="myAreaChart"></canvas> --}}
                  </div>
                </div>
              </div>
            </div>

               <!-- Area Chart -->
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div style="height: 200px" class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Year To Year Claims Performance(5Years)</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area">
                      {{-- <canvas id="myAreaChart"></canvas> --}}
                    </div>
                  </div>
                </div>
              </div>


                   <!-- Area Chart -->
                   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div style="height: 200px" class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Year To Year Sales Performance(5Years)</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                        <div class="chart-area">
                          {{-- <canvas id="myAreaChart"></canvas> --}}
                        </div>
                      </div>
                    </div>
                  </div>



                   <!-- Area Chart -->
                   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div style="height: 200px" class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Sales Performance(5Years)</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                        <div class="chart-area">
                          {{-- <canvas id="myAreaChart"></canvas> --}}
                        </div>
                      </div>
                    </div>
                  </div>
          </div>


             <!-- Content Row -->
             <div class="row">



                <!-- Footer -->
                <footer class="sticky-footer">
                  <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Royal Exchange General Insurance {{date("Y")}}</span>
                    </div>
                  </div>
                </footer>
                <!-- End of Footer -->

              </div>


            @endsection
</x-body>
<style>
    #page-top{
        background-color: #efeff4;
    }

</style>
