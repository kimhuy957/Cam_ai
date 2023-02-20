<?php include "../head.php";
    include "config/sql.php";
    include "config/function.php";?>
<link rel="stylesheet" href="../dist/assets/css/css.css">
<div class="mdk-drawer-layout__content page-content">

<!-- Header -->

<div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body"
     id="default-navbar"
     data-primary>

    <!-- Navbar toggler -->
    <button class="navbar-toggler d-block d-lg-none rounded-0"
            type="button"
            data-toggle="sidebar">
        <span class="material-icons">menu</span>
    </button>

    <!-- Navbar Brand -->
    <a href="index.html"
       class="navbar-brand mr-16pt d-lg-none">
        <img class="navbar-brand-icon mr-0 mr-lg-8pt"
             src="assets/images/logo/accent-teal-100@2x.png"
             width="32"
             alt="Huma">
        <span class="d-none d-lg-block">Huma</span>
    </a>

    <!-- <button class="btn navbar-btn mr-16pt" data-toggle="modal" data-target="#apps">Apps <i class="material-icons">arrow_drop_down</i></button> -->

    <form class="search-form navbar-search d-none d-md-flex mr-16pt"
          action="index.html">
        <button class="btn"
                type="submit"><i class="material-icons">search</i></button>
        <input type="text"
               class="form-control"
               placeholder="Search ...">
    </form>

    <div class="flex"></div>

    <div class="nav navbar-nav flex-nowrap d-none d-lg-flex mr-16pt"
         style="white-space: nowrap;">
        <div class="nav-item dropdown d-none d-sm-flex">
            <a href="#"
               class="nav-link dropdown-toggle"
               data-toggle="dropdown">EN</a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header"><strong>Select language</strong></div>
                <a class="dropdown-item active"
                   href="">English</a>
                <a class="dropdown-item"
                   href="">French</a>
                <a class="dropdown-item"
                   href="">Romanian</a>
                <a class="dropdown-item"
                   href="">Spanish</a>
            </div>
        </div>
    </div>

    <div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
        <div class="nav-item dropdown d-none d-sm-flex">
            <a href="#"
               class="nav-link d-flex align-items-center dropdown-toggle"
               data-toggle="dropdown">
                <img width="32"
                     height="32"
                     class="rounded-circle mr-8pt"
                     src="assets/images/people/50/guy-3.jpg"
                     alt="account" />
                <span class="flex d-flex flex-column mr-8pt">
                    <span class="navbar-text-100">Laza Bogdan</span>
                    <small class="navbar-text-50">Administrator</small>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header"><strong>Account</strong></div>
                <a class="dropdown-item"
                   href="edit-account.html">Edit Account</a>
                <a class="dropdown-item"
                   href="billing.html">Billing</a>
                <a class="dropdown-item"
                   href="billing-history.html">Payments</a>
                <a class="dropdown-item"
                   href="login.html">Logout</a>
            </div>
        </div>

        <!-- Notifications dropdown -->
        <div class="nav-item ml-16pt dropdown dropdown-notifications">
            <button class="nav-link btn-flush dropdown-toggle"
                    type="button"
                    data-toggle="dropdown"
                    data-dropdown-disable-document-scroll
                    data-caret="false">
                <i class="material-icons">notifications</i>
                <span class="badge badge-notifications badge-accent">2</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <div data-perfect-scrollbar
                     class="position-relative">
                    <div class="dropdown-header"><strong>System notifications</strong></div>
                    <div class="list-group list-group-flush mb-0">

                        <a href="javascript:void(0);"
                           class="list-group-item list-group-item-action unread">
                            <span class="d-flex align-items-center mb-1">
                                <small class="text-black-50">3 minutes ago</small>

                                <span class="ml-auto unread-indicator bg-accent"></span>

                            </span>
                            <span class="d-flex">
                                <span class="avatar avatar-xs mr-2">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                    </span>
                                </span>
                                <span class="flex d-flex flex-column">

                                    <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                </span>
                            </span>
                        </a>

                        <a href="javascript:void(0);"
                           class="list-group-item list-group-item-action">
                            <span class="d-flex align-items-center mb-1">
                                <small class="text-black-50">5 hours ago</small>

                            </span>
                            <span class="d-flex">
                                <span class="avatar avatar-xs mr-2">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <i class="material-icons font-size-16pt text-primary">group_add</i>
                                    </span>
                                </span>
                                <span class="flex d-flex flex-column">
                                    <strong class="text-black-100">Adrian. D</strong>
                                    <span class="text-black-70">Wants to join your private group.</span>
                                </span>
                            </span>
                        </a>

                        <a href="javascript:void(0);"
                           class="list-group-item list-group-item-action">
                            <span class="d-flex align-items-center mb-1">
                                <small class="text-black-50">1 day ago</small>

                            </span>
                            <span class="d-flex">
                                <span class="avatar avatar-xs mr-2">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <i class="material-icons font-size-16pt text-warning">storage</i>
                                    </span>
                                </span>
                                <span class="flex d-flex flex-column">

                                    <span class="text-black-70">Your deploy was successful.</span>
                                </span>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- // END Notifications dropdown -->

        <!-- Notifications dropdown -->
        <div class="nav-item ml-16pt dropdown dropdown-notifications">
            <button class="nav-link btn-flush dropdown-toggle"
                    type="button"
                    data-toggle="dropdown"
                    data-dropdown-disable-document-scroll
                    data-caret="false">
                <i class="material-icons icon-24pt">mail_outline</i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <div data-perfect-scrollbar
                     class="position-relative">
                    <div class="dropdown-header"><strong>Messages</strong></div>
                    <div class="list-group list-group-flush mb-0">

                        <a href="javascript:void(0);"
                           class="list-group-item list-group-item-action unread">
                            <span class="d-flex align-items-center mb-1">
                                <small class="text-black-50">5 minutes ago</small>

                                <span class="ml-auto unread-indicator bg-accent"></span>

                            </span>
                            <span class="d-flex">
                                <span class="avatar avatar-xs mr-2">
                                    <img src="assets/images/people/110/woman-5.jpg"
                                         alt="people"
                                         class="avatar-img rounded-circle">
                                </span>
                                <span class="flex d-flex flex-column">
                                    <strong class="text-black-100">Michelle</strong>
                                    <span class="text-black-70">Clients loved the new design.</span>
                                </span>
                            </span>
                        </a>

                        <a href="javascript:void(0);"
                           class="list-group-item list-group-item-action">
                            <span class="d-flex align-items-center mb-1">
                                <small class="text-black-50">5 minutes ago</small>

                            </span>
                            <span class="d-flex">
                                <span class="avatar avatar-xs mr-2">
                                    <img src="assets/images/people/110/woman-5.jpg"
                                         alt="people"
                                         class="avatar-img rounded-circle">
                                </span>
                                <span class="flex d-flex flex-column">
                                    <strong class="text-black-100">Michelle</strong>
                                    <span class="text-black-70">🔥 Superb job..</span>
                                </span>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- // END Notifications dropdown -->
    </div>

    <div class="dropdown border-left-2 navbar-border">
        <button class="navbar-toggler navbar-toggler-custom d-block"
                type="button"
                data-toggle="dropdown"
                data-caret="false">
            <span class="material-icons">business_center</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header"><strong>Select company</strong></div>
            <a href=""
               class="dropdown-item active d-flex align-items-center">

                <div class="avatar avatar-sm mr-8pt">

                    <span class="avatar-title rounded bg-primary">FM</span>

                </div>

                <small class="ml-4pt flex">
                    <span class="d-flex flex-column">
                        <strong class="text-black-100">FrontendMatter Inc.</strong>
                        <span class="text-black-50">Administrator</span>
                    </span>
                </small>
            </a>
            <a href=""
               class="dropdown-item d-flex align-items-center">

                <div class="avatar avatar-sm mr-8pt">

                    <span class="avatar-title rounded bg-accent">HH</span>

                </div>

                <small class="ml-4pt flex">
                    <span class="d-flex flex-column">
                        <strong class="text-black-100">HumaHuma Inc.</strong>
                        <span class="text-black-50">Publisher</span>
                    </span>
                </small>
            </a>
        </div>
    </div>

</div>

<!-- // END Header -->

<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Nhân Viên</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active">

                        Nhân Viên

                    </li>

                </ol>

            </div>


        </div>

        <div class="row"
             role="tablist">
            <div class="col-auto border-left">
                <a href=""
                   class="btn btn-accent">Add Staff</a>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid page__container page__container page-section">

    

    <div class="page-separator">
        <div class="page-separator__text">Employees</div>
    </div>
    <div class="row card-group-row mb-lg-8pt">
    <div class="card mb-0 col-md-10 col-sm">

        <div class="table-responsive"
             data-toggle="lists"
             data-lists-sort-by="js-lists-values-employee-name"
             data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>
            <div class="list-group list-group-form">
                                    <?php
                                        $sql=mysqli_query($conn,"SELECT * from user Where id=".$_GET['id']."");
                                        while($hien=mysqli_fetch_assoc($sql)){
                                            echo'
                                            <div class="list-group-item">
                                                <div class="form-group row align-items-center mb-0">
                                                    <label class="form-label col-form-label col-sm-3">Mã Nhân Viên</label>
                                                    <div class="col-sm-9">
                                                        <h2>'.$hien['id'].'</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group row align-items-center mb-0">
                                                    <label class="form-label col-form-label col-sm-3">Họ và tên</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="'.$hien['fullname'].'" placeholder="Ghi họ và tên">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group row align-items-center mb-0">
                                                    <label class="form-label col-form-label col-sm-3">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="'.$hien['email'].'" placeholder="Ghi email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group row align-items-center mb-0">
                                                    <label class="form-label col-form-label col-sm-3">Ngày sinh</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" value="'.$hien['date_birth'].'">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">Ngày vào</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" value="'.$hien['date_job_receive'].'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-3">Vai Trò</label>
                                            <div class="col-sm-9">
                                            <select id="cars" value="'.$hien['role'].'">
                                            <option value="1">Admin</option>
                                            <option value="2">Quản lý</option>
                                            <option value="3">Nhân Viên</option>
                                          </select>
                                            </div>
                                        </div>
                                    </div>
                                            '
                                            ;
                                            
                                        }
                                    ?>
                                    </div>            
        </div>

        <!-- <div class="card-body bordet-top text-right">
15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->
    </div>
    </div>
</div>

<div class="js-fix-footer footer border-top-2">
    <div class="container-fluid page__container page-section d-flex flex-column">
        <p class="text-70 brand mb-24pt">
            <img class="brand-icon"
                 src="assets/images/logo/black-70@2x.png"
                 width="30"
                 alt="Huma"> Thái Hưng
    </div>
    <div class="pb-16pt pb-lg-24pt">
        <div class="container-fluid page__container">
            <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
                <div class="row">
                    <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                        <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                        <nav class="nav nav-links nav--flush">
                            <a href="#"
                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square@2x.png"
                                     width="24"
                                     height="24"
                                     alt="Facebook"></a>
                            <a href="#"
                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/twitter-square@2x.png"
                                     width="24"
                                     height="24"
                                     alt="Twitter"></a>
                            <a href="#"
                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/vimeo-square@2x.png"
                                     width="24"
                                     height="24"
                                     alt="Vimeo"></a>
                            <!-- <a href="#" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a> -->
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
                        <a href=""
                           class="btn btn-outline-white">English <span class="icon--right material-icons">arrow_drop_down</span></a>
                    </div>
                    <div class="col-md-4 text-md-right">
                        <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                            <a href=""
                               class="text-white-70 text-underline mr-16pt">Terms</a>
                            <a href=""
                               class="text-white-70 text-underline">Privacy policy</a>
                        </p>
                        <p class="text-white-50 small mb-0">Copyright 2019 &copy; All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php include '../body_js.php';?>