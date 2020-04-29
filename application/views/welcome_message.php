<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
    <main>
        <div id="primary" class="blue4 p-t-b-100 height-full responsive-phone">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/img/icon/icon-plane.png" alt="">
                    </div>
                    <div class="col-lg-6 p-t-100">
                        <div class="text-white text-center">
                            <h1 style="font-weight: bold; font-size: 65px; font-family: Arial;">KEFECE</h1>
                            <p class="s-18 font-weight-lighter">Feel Another Taste</p>
                        </div>

                        <form action="<?= site_url('Login/awal_login') ?>" method="post">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                        <input type="text" class="form-control form-control-lg no-b" placeholder="Email Address" name="username">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                        <input type="password" class="form-control form-control-lg no-b" placeholder="Password" name="password">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12 text-center">
                                <input type="submit" class="btn btn-success btn-lg btn-block" name="enter" value="ENTER">
                                <a class="forget-pass text-white mt-5" href="#">Create an Account!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #primary -->
    </main>
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
</div>
<script src="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/js/app.js"></script>
<!--/#app -->
</body>
</html>