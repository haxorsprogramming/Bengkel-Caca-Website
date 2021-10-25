<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bengkel Caca - Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" , shrink-to-fit="no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- base:css -->
    <link rel="stylesheet" href="ladun/login_page/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="ladun/login_page/vendors/base/vendor.bundle.base.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@700&family=Nunito:wght@600&display=swap" rel="stylesheet">
    <!-- endinject -->
    <link rel="stylesheet" href="ladun/login_page/css/style.css">
    <!-- endinject -->
</head>

<body style="font-family: 'Nunito', sans-serif;">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="main-panel">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5" id="login_app">
                                <div class="brand-logo" style="text-align:center;">
                                    <img src="ladun/base/logo.png" alt="logo" style="width:250px;">
                                    <h3 style="font-weight:bold;margin-top:40px;"></h3>
                                </div>
                                <div style="text-align:center;">
                                    <h6 class="font-weight-light">Harap masuk untuk melanjutkan.</h6>
                                    <div>
                                        <div class="pt-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text"  id="txt_username" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="password" id="txt_password" placeholder="Password">
                                            </div>
                                            <div id="capNotifLogin">

                                            </div>
                                            <div class="mt-3">
                                                <a id="btnMasuk" v-on:click="login_atc" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="javascript:void(0)">Masuk</a>
                                            </div>
                                            <div class="mt-2">
                                                <div style='padding-top:12px;'>
                                                    <h5 class="font-weight-light">Develop By : <a href="https://tukanglemari.my.id" target='new'>Aditia Darma Nasution</a></h5>
                                                    <strong> Bengkel-Caca is open-sourced software licensed under the
                                                        <a href="https://www.gnu.org/licenses/gpl-2.0.html">GPL v2.0</a></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id='divWorker'></div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- base:js -->
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

            <script src="ladun/login_page/vendors/base/vendor.bundle.base.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <!-- endinject -->
            <!-- inject:js -->
            <script src="ladun/login_page/js/template.js"></script>
            <!-- endinject -->
            <script>
                const server = "{{ url('/') }}";
            </script>
            <script src="ladun/login_page/js/login.js"></script>
</body>

</html>