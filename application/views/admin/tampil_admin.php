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
        <aside class="main-sidebar fixed offcanvas shadow">
            <section class="sidebar">
                <div class="w-80px mt-3 mb-3 ml-3">
                    <img src="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/img/basic/logo.png" alt="">
                </div>
                <div class="relative">
                    <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
                    aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                    <i class="icon icon-cogs"></i>
                </a>
                <div class="user-panel p-3 light mb-2">
                    <div>
                        <div class="float-left image">
                            <img class="user_avatar" src="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/img/dummy/u2.png" alt="User Image">
                        </div>
                        <div class="float-left info">
                            <h6 class="font-weight-light mt-2 mb-1">Alexander Pierce</h6>
                            <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="collapse multi-collapse" id="userSettingsCollapse">
                        <div class="list-group mt-3 shadow">
                            <a href="index.html" class="list-group-item list-group-item-action ">
                                <i class="mr-2 icon-umbrella text-blue"></i>Profile
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                                <a href="#" class="list-group-item list-group-item-action"><i
                                    class="mr-2 icon-security text-purple"></i>Change Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="#">
                                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Menu</span></i>
                            </a>
                        </li>
                        <li class="treeview"><a href="#">
                            <i class="icon icon icon-package blue-text s-18"></i>
                            <span>Clothes</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>
        <!--Sidebar End-->
        <div class="has-sidebar-left">
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                        <div class="search-bar">
                            <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                            placeholder="start typing...">
                        </div>
                        <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                        aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
                    </div>
                </div>
            </div>
            <div class="sticky">
                <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
                    <div class="relative">
                        <a href="#" data-toggle="offcanvas" class="paper-nav-toggle pp-nav-toggle">
                            <i></i>
                        </a>
                    </div>
                    <!--Top Menu Start -->
                    <div class="navbar-custom-menu p-t-10">
                        <ul class="nav navbar-nav">
                            <!-- Messages-->
                            <li class="dropdown custom-dropdown messages-menu">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="icon-message "></i>
                                    <span class="badge badge-success badge-mini rounded-circle">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu pl-2 pr-2">
                                            <!-- start message -->
                                            <li>
                                                <a href="#">
                                                    <div class="avatar float-left">
                                                        <img src="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/img/dummy/u4.png" alt="">
                                                        <span class="avatar-badge busy"></span>
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <!-- start message -->
                                            <li>
                                                <a href="#">
                                                    <div class="avatar float-left">
                                                        <img src="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/img/dummy/u1.png" alt="">
                                                        <span class="avatar-badge online"></span>
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <!-- start message -->
                                            <li>
                                                <a href="#">
                                                    <div class="avatar float-left">
                                                        <img src="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/img/dummy/u2.png" alt="">
                                                        <span class="avatar-badge idle"></span>
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <!-- start message -->
                                            <li>
                                                <a href="#">
                                                    <div class="avatar float-left">
                                                        <img src="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/img/dummy/u3.png" alt="">
                                                        <span class="avatar-badge busy"></span>
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        </ul>
                                    </li>
                                    <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications -->
                            <li class="dropdown custom-dropdown notifications-menu">
                                <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-notifications "></i>
                                    <span class="badge badge-danger badge-mini rounded-circle">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer p-2 text-center"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                                aria-controls="navbarToggleExternalContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class=" icon-search3 "></i>
                            </a>
                        </li>
                        <!-- Right Sidebar Toggle Button -->
                        <li>
                            <a class="nav-link ml-2" data-toggle="control-sidebar">
                                <i class="icon-tasks "></i>
                            </a>
                        </li>
                        <!-- User Account-->
                        <li class="dropdown custom-dropdown user user-menu">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <img src="<?= base_url('') ?>assets1/paper-panel-all-files/paper-panel/production-version/assets/img/dummy/u8.png" class="user-image" alt="User Image">
                                <i class="icon-more_vert "></i>
                            </a>
                            <div class="dropdown-menu p-4">
                                <div class="row box justify-content-between my-4">
                                    <div class="col">
                                        <a href="#">
                                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                            <div class="pt-1">Apps</div>
                                        </a>
                                    </div>
                                    <div class="col"><a href="#">
                                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Profile</div>
                                    </a></div>
                                    <div class="col">
                                        <a href="#">
                                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                            <div class="pt-1">Settings</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row box justify-content-between my-4">
                                    <div class="col">
                                        <a href="#">
                                            <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                                            <div class="pt-1">Favourites</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                                            <div class="pt-1">Saved</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                                            <div class="pt-1">Settings</div>
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row box justify-content-between my-4">
                                    <div class="col">
                                        <a href="#">
                                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                            <div class="pt-1">Apps</div>
                                        </a>
                                    </div>
                                    <div class="col"><a href="#">
                                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Profile</div>
                                    </a></div>
                                    <div class="col">
                                        <a href="#">
                                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                            <div class="pt-1">Settings</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon-box"></i>
                            Dashboard
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                        <li>
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"><i class="icon icon-home2"></i>Admin</a>
                        </li>
                        <li>
                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2">
                                <i class="icon icon-plus-circle mb-3"></i>Waiter</a>
                            </li>
                        </ul>        
                    </div>
                </div>
            </header>
            <div class="container-fluid relative animatedParent animateOnce">
                <div class="tab-content pb-3" id="v-pills-tabContent">
                    <!--Today Tab Start-->
                    <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                        <div class="container mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">    
                                        <a href="<?= site_url('Admin/proses_tampil'); ?>" class="btn btn-primary mb-3">Create</a>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nomor Meja</th>
                                                    <th>Tanggal</th>
                                                    <th>Keterangan</th>
                                                    <th>Status Order</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($tampil->result() as $b) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $b->no_meja ?></td> 
                                                        <td><?php echo $b->tanggal ?></td> 
                                                        <td><?php echo $b->keterangan ?></td> 
                                                        <td><?php echo $b->status_order ?></td> 
                                                        <td>
                                                            <a href="#" class="btn btn-warning">Edit</a>
                                                            <a href="#" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane animated fadeInUpShort" id="v-pills-2">
                        <p>P</p>
                    </div>
                </div>
            </div>
        </div>
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
</body>
</html>