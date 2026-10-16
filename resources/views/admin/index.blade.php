<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Car Rental Admin Dashboard</title>

  <!-- Favicon -->
  <link rel="icon"
        type="image/png"
        href="{{ asset('admin_assets/assets/images/favicon.ico') }}">

  <!-- Bootstrap -->
  <link rel="stylesheet"
        href="{{ asset('admin_assets/assets/libs/bootstrap/css/bootstrap.min.css') }}">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet"
        href="{{ asset('admin_assets/assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

  <!-- ApexCharts -->
  <link rel="stylesheet"
        href="{{ asset('admin_assets/assets/libs/apexcharts/apexcharts.css') }}">

  <!-- Flatpickr -->
  <link rel="stylesheet"
        href="{{ asset('admin_assets/assets/libs/flatpickr/flatpickr.min.css') }}">

  <!-- Main CSS -->
  <link rel="stylesheet"
        href="{{ asset('admin_assets/assets/css/main.css') }}">

</head>

<body>


  <!-- ==========================================
       START: Sidebar
       ========================================== -->

@include('admin.sidebar')
  <!-- ==========================================
       END: Sidebar
       ========================================== -->


  <!-- ==========================================
       START: Main Content
       ========================================== -->

  <div class="main-wrapper">


    <!-- ==========================================
         START: Navbar
         ========================================== -->

@include('admin.navbar')
    <!-- ==========================================
         END: Navbar
         ========================================== -->


    <!-- ==========================================
         Dashboard Header
         ========================================== -->

    <div class="page-header">

      <div>

        <h1 class="page-title">
          Dashboard
        </h1>

      </div>

    </div>


    <!-- ==========================================
         START: Dashboard
         ========================================== -->

    <div class="row g-4">


      <!-- LEFT AREA -->

      <div class="col-xl-9 col-lg-8">


        <div class="row g-4">


          <!-- Revenue / Booking Chart -->

          <div class="col-12">

            <div class="card mb-0">


              <!-- Card Header -->

              <div class="card-header mb-2">

                <h2 class="card-title">
                  Revenue
                </h2>


                <!-- Legends -->

                <div class="d-flex gap-3 align-items-center">


                  <div class="chart-legend-item">

                    <span class="legend-dot bg-forest-medium"></span>

                    <span class="chart-legend-label">
                      Income
                    </span>

                  </div>


                  <div class="chart-legend-item">

                    <span class="legend-dot bg-lime-accent"></span>

                    <span class="chart-legend-label">
                      Expenses
                    </span>

                  </div>


                </div>

              </div>


              <!-- Revenue Amount -->

              <div class="d-flex align-items-baseline gap-2 mb-3">

                <span class="stat-value-amount">
                  $196.000
                </span>

                <span class="trend-badge trend-up fs-xs">
                  +35% from last month
                </span>

              </div>


              <!-- Chart -->

              <div id="revenue-chart"></div>


            </div>

          </div>


        </div>


      </div>


    </div>


    <!-- ==========================================
         END: Dashboard
         ========================================== -->


    <!-- ==========================================
         START: Footer
         ========================================== -->

    <footer class="footer-custom">


      <div class="footer-left">


        <span class="footer-logo">

          <i class="bi bi-asterisk"></i>

          Ha Chango Khabar Aa

        </span>


        <span class="footer-separator">
          |
        </span>


        <span class="footer-copy">

          &copy; 2026

          Made with

          <i class="bi bi-heart-fill text-danger footer-heart"></i>

          Ha Chango Khabar Aa

        </span>


      </div>


    </footer>

    <!-- ==========================================
         END: Footer
         ========================================== -->


  </div>

  <!-- ==========================================
       END: Main Content
       ========================================== -->


  <!-- ==========================================
       START: JavaScript
       ========================================== -->


  <!-- Bootstrap JS -->

  <script src="{{ asset('admin_assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


  <!-- ApexCharts JS -->

  <script src="{{ asset('admin_assets/assets/libs/apexcharts/apexcharts.min.js') }}"></script>


  <!-- Flatpickr JS -->

  <script src="{{ asset('admin_assets/assets/libs/flatpickr/flatpickr.min.js') }}"></script>


  <!-- Dashboard JS -->

  <script src="{{ asset('admin_assets/assets/js/dashboard.js') }}"></script>


  <!-- ==========================================
       END: JavaScript
       ========================================== -->


</body>

</html>