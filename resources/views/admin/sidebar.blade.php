<div class="sidebar-wrapper" id="sidebar">

    <!-- =========================
         Brand
    ========================== -->

    <a href="{{ url('/admin') }}" class="sidebar-brand">

        <i class="bi bi-asterisk"></i>

        <span>
            SHAYAN
        </span>

    </a>


    <!-- =========================
         Sidebar Menu
    ========================== -->

    <div class="flex-grow-1 overflow-y-auto">


        <!-- =========================
             Dashboard
        ========================== -->

        <div class="sidebar-menu-section">

            <div class="sidebar-menu-title">
                Menu
            </div>

            <ul class="sidebar-menu-list">

                <li class="sidebar-menu-item">

                    <a href="{{ url('/admin') }}"
                       class="sidebar-menu-link {{ request()->is('admin') ? 'active' : '' }}"
                       id="menu-overview"
                       title="Dashboard">

                        <i class="bi bi-grid-fill"></i>

                        <span>
                            Dashboard
                        </span>

                    </a>

                </li>

            </ul>

        </div>



        <!-- =========================
             Management
        ========================== -->

        <div class="sidebar-menu-section">

            <div class="sidebar-menu-title">
                Management
            </div>

            <ul class="sidebar-menu-list">


                <!-- =====================
                     Bookings
                ====================== -->

                <li class="sidebar-menu-item">

                    <a href="{{ url('/my-bookings') }}"
                       class="sidebar-menu-link"
                       id="menu-bookings"
                       title="Bookings">

                        <i class="bi bi-calendar-check-fill"></i>

                        <span>
                            View All Bookings
                        </span>

                    </a>

                </li>



                <!-- =====================
                     Users
                ====================== -->

                <li class="sidebar-menu-item">

                    <a href="{{ url('/admin/users') }}"
                       class="sidebar-menu-link {{ request()->is('admin/users') ? 'active' : '' }}"
                       id="menu-users"
                       title="Users">

                        <i class="bi bi-people-fill"></i>

                        <span>
                            View All Users
                        </span>

                    </a>

                </li>



                <!-- =====================
                     Cars
                ====================== -->

                <li class="sidebar-menu-item">

                    <a href="{{ url('/admin/cars') }}"
   class="sidebar-menu-link {{ request()->is('admin/cars') ? 'active' : '' }}"
   id="menu-cars"
   title="Cars">

                        <i class="bi bi-car-front-fill"></i>

                        <span>
                            View All Cars
                        </span>

                    </a>

                </li>



                <!-- =====================
                     Add Car
                ====================== -->

                <li class="sidebar-menu-item">

                    <a href="#"
                       class="sidebar-menu-link"
                       id="menu-add-car"
                       title="Add Car">

                        <i class="bi bi-plus-square-fill"></i>

                        <span>
                            Add Car
                        </span>

                    </a>

                </li>


            </ul>

        </div>



        <!-- =========================
             Account
        ========================== -->

        <div class="sidebar-menu-section">

            <div class="sidebar-menu-title">
                Account
            </div>

            <ul class="sidebar-menu-list">


                <!-- =====================
                     Profile
                ====================== -->

                <li class="sidebar-menu-item">

                    <a href="{{ url('/profile') }}"
                       class="sidebar-menu-link"
                       title="Profile">

                        <i class="bi bi-person-circle"></i>

                        <span>
                            My Profile
                        </span>

                    </a>

                </li>



                <!-- =====================
                     Home
                ====================== -->

                <li class="sidebar-menu-item">

                    <a href="{{ url('/') }}"
                       class="sidebar-menu-link"
                       title="Home">

                        <i class="bi bi-house-fill"></i>

                        <span>
                            Back to Website
                        </span>

                    </a>

                </li>


            </ul>

        </div>


    </div>



    <!-- =========================
         Admin Profile
    ========================== -->

    <div class="sidebar-profile">

        <img
            src="{{ asset('admin_assets/assets/images/ata.jpeg') }}"
            alt="Administrator"
            class="sidebar-profile-img"
        >

        <div class="sidebar-profile-info">

            <div class="sidebar-profile-name">
                {{ Auth::user()->name ?? 'Administrator' }}
            </div>

            <div class="sidebar-profile-email">
                {{ Auth::user()->email ?? 'mainemail11sep@gmail.com' }}
            </div>

        </div>

    </div>

</div>