<header class="navbar-custom">

    <div class="navbar-left">

        <!-- Desktop Sidebar Toggle -->
        <button
            class="btn-desktop-toggle d-none d-xl-flex align-items-center justify-content-center me-3"
            id="desktop-sidebar-toggle"
            aria-label="Minimize Sidebar">

            <i class="bi bi-chevron-bar-left"></i>

        </button>


        <!-- Mobile Sidebar Toggle -->
        <button
            class="sidebar-toggle-btn me-2"
            id="sidebar-toggle"
            aria-label="Toggle Navigation">

            <i class="bi bi-list"></i>

        </button>

    </div>



    <!-- Search -->
    <div class="navbar-search-wrapper">

        <input
            type="text"
            class="navbar-search-input"
            placeholder="Search cars, users, bookings..."
            id="main-search">

        <button
            class="navbar-search-btn"
            aria-label="Search">

            <i class="bi bi-search"></i>

        </button>

    </div>



    <!-- Right Side -->
    <div class="navbar-actions">


        <!-- Profile Dropdown -->
        <div class="dropdown ms-2">

            <button
                class="navbar-profile-btn dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                id="profile-dropdown">


                <!-- Profile Image -->
                <img
                    src="{{ asset('admin_assets/assets/images/ata.jpeg') }}"
                    alt="Profile Image"
                    class="navbar-profile-img">


                <!-- User Name -->
                <span class="navbar-profile-name d-none d-md-inline">

                    {{ Auth::user()->name ?? 'SHAYAN RAFIQUE' }}

                </span>


                <i class="bi bi-chevron-down navbar-profile-caret"></i>

            </button>



            <!-- Dropdown Menu -->
            <ul
                class="dropdown-menu dropdown-menu-end dropdown-menu-profile"
                aria-labelledby="profile-dropdown">


                <!-- Profile -->
                <li>

                    <a
                        class="dropdown-item"
                        href="{{ url('/profile') }}">

                        <i class="bi bi-person"></i>

                        My Profile

                    </a>

                </li>


                <!-- Back To Website -->
                <li>

                    <a
                        class="dropdown-item"
                        href="{{ url('/') }}">

                        <i class="bi bi-house"></i>

                        Back To Website

                    </a>

                </li>


                <li>
                    <hr class="dropdown-divider">
                </li>


                <!-- Logout -->
                <li>

                    <form
                        action="{{ url('/logout') }}"
                        method="POST">

                        @csrf

                        <button
                            type="submit"
                            class="dropdown-item text-danger border-0 bg-transparent w-100 text-start">

                            <i class="bi bi-box-arrow-right"></i>

                            Logout

                        </button>

                    </form>

                </li>


            </ul>

        </div>

    </div>

</header>