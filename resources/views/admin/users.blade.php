<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>All Users - Admin Panel</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet"
        href="{{ asset('admin_assets/assets/libs/bootstrap/css/bootstrap.min.css') }}">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet"
        href="{{ asset('admin_assets/assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

    {{-- Main Admin CSS --}}
    <link rel="stylesheet"
        href="{{ asset('admin_assets/assets/css/main.css') }}">

    <style>
        /* =========================
           Users Page
        ========================= */

        .users-page {
            width: 100%;
            min-width: 0;
        }

        .users-card {
            width: 100%;
            overflow: hidden;
        }

        .users-table-wrapper {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .users-table {
            width: 100%;
            min-width: 750px;
            margin-bottom: 0;
        }

        .user-image {
            width: 55px;
            height: 55px;
            min-width: 55px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #ddd;
            display: block;
        }

        .user-image-placeholder {
            width: 55px;
            height: 55px;
            min-width: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-name {
            font-weight: 600;
            white-space: normal;
            word-break: break-word;
        }

        .user-email {
            white-space: normal;
            word-break: break-word;
        }

        .delete-btn {
            white-space: nowrap;
        }

        /* =========================
           Mobile
        ========================= */

        @media (max-width: 575.98px) {

            .page-header {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 12px;
            }

            .page-heading h2 {
                font-size: 21px;
            }

            .page-heading p {
                font-size: 13px;
            }

            .total-users {
                font-size: 13px !important;
            }

            .users-card .card-header {
                padding: 14px;
            }

            .users-card .card-header h5 {
                font-size: 16px;
            }

            .users-card .card-body {
                padding: 10px;
            }

            .users-table {
                min-width: 700px;
            }

            .user-image,
            .user-image-placeholder {
                width: 48px;
                height: 48px;
                min-width: 48px;
            }

            .delete-btn {
                font-size: 12px;
                padding: 5px 9px;
            }
        }
    </style>

</head>


<body>

    {{-- =========================
         SIDEBAR
    ========================== --}}

    @include('admin.sidebar')


    {{-- =========================
         MAIN WRAPPER
    ========================== --}}

    <div class="main-wrapper">

        {{-- =========================
             NAVBAR
        ========================== --}}

        @include('admin.navbar')


        {{-- =========================
             MAIN CONTENT
        ========================== --}}

        <main>

            <div class="container-fluid py-4 users-page">

                {{-- =========================
                     PAGE HEADER
                ========================== --}}

                <div class="d-flex justify-content-between align-items-center mb-4 page-header">

                    <div class="page-heading">

                        <h2 class="fw-bold mb-1">
                            All Users
                        </h2>

                        <p class="text-muted mb-0">
                            Manage all registered users
                        </p>

                    </div>


                    <div>

                        <span class="badge bg-primary fs-6 total-users">
                            Total Users: {{ $users->count() }}
                        </span>

                    </div>

                </div>


                {{-- =========================
                     SUCCESS MESSAGE
                ========================== --}}

                @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">

                        <i class="bi bi-check-circle-fill me-2"></i>

                        {{ session('success') }}

                        <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                        </button>

                    </div>

                @endif


                {{-- =========================
                     ERROR MESSAGE
                ========================== --}}

                @if(session('error'))

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">

                        <i class="bi bi-exclamation-triangle-fill me-2"></i>

                        {{ session('error') }}

                        <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                        </button>

                    </div>

                @endif


                {{-- =========================
                     USERS CARD
                ========================== --}}

                <div class="card shadow-sm border-0 users-card">

                    {{-- Card Header --}}

                    <div class="card-header bg-white py-3">

                        <h5 class="mb-0 fw-bold">

                            <i class="bi bi-people-fill me-2"></i>

                            Registered Users

                        </h5>

                    </div>


                    {{-- Card Body --}}

                    <div class="card-body">

                        {{-- Responsive Table --}}

                        <div class="users-table-wrapper">

                            <table class="table table-hover align-middle users-table">

                                {{-- =========================
                                     TABLE HEADER
                                ========================== --}}

                                <thead class="table-light">

                                    <tr>

                                        <th>
                                            #
                                        </th>

                                        <th>
                                            Image
                                        </th>

                                        <th>
                                            Name
                                        </th>

                                        <th>
                                            Email
                                        </th>

                                        <th>
                                            Action / Role
                                        </th>

                                        <th>
                                            Delete Profile
                                        </th>

                                    </tr>

                                </thead>


                                {{-- =========================
                                     TABLE BODY
                                ========================== --}}

                                <tbody>

                                    @forelse($users as $user)

                                        <tr>

                                            {{-- ID --}}

                                            <td>
                                                {{ $user->id }}
                                            </td>


                                            {{-- =====================
                                                 USER IMAGE
                                            ====================== --}}

                                            <td>

                                                @if($user->image)

                                                    <img
                                                        src="{{ asset('images/users/' . $user->image) }}"
                                                        alt="{{ $user->name }}"
                                                        class="user-image"
                                                    >

                                                @else

                                                    <div class="bg-secondary text-white user-image-placeholder">

                                                        <i class="bi bi-person-fill fs-4"></i>

                                                    </div>

                                                @endif

                                            </td>


                                            {{-- =====================
                                                 NAME
                                            ====================== --}}

                                            <td>

                                                <div class="user-name">
                                                    {{ $user->name }}
                                                </div>

                                            </td>


                                            {{-- =====================
                                                 EMAIL
                                            ====================== --}}

                                            <td>

                                                <div class="user-email">
                                                    {{ $user->email }}
                                                </div>

                                            </td>


                                            {{-- =====================
                                                 ROLE
                                            ====================== --}}

                                            <td>

                                                @if($user->action == 1)

                                                    <span class="badge bg-danger">

                                                        <i class="bi bi-shield-fill-check me-1"></i>

                                                        Admin

                                                    </span>

                                                @else

                                                    <span class="badge bg-primary">

                                                        <i class="bi bi-person-fill me-1"></i>

                                                        User

                                                    </span>

                                                @endif

                                            </td>


                                            {{-- =====================
                                                 DELETE
                                            ====================== --}}

                                            <td>

                                                <form
                                                    action="{{ url('/admin/users/' . $user->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this user profile?');"
                                                >

                                                    @csrf

                                                    @method('DELETE')


                                                    <button
                                                        type="submit"
                                                        class="btn btn-sm btn-danger delete-btn"
                                                    >

                                                        <i class="bi bi-trash-fill me-1"></i>

                                                        Delete

                                                    </button>

                                                </form>

                                            </td>

                                        </tr>


                                    @empty

                                        {{-- =====================
                                             NO USERS
                                        ====================== --}}

                                        <tr>

                                            <td
                                                colspan="6"
                                                class="text-center py-5"
                                            >

                                                <i class="bi bi-people fs-1 text-muted"></i>

                                                <p class="text-muted mt-2 mb-0">
                                                    No users found.
                                                </p>

                                            </td>

                                        </tr>

                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>


    {{-- =========================
         BOOTSTRAP JS
    ========================== --}}

    <script src="{{ asset('admin_assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>


    {{-- =========================
         DASHBOARD JS
    ========================== --}}

    <script src="{{ asset('admin_assets/assets/js/dashboard.js') }}">
    </script>


</body>

</html>