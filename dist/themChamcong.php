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
                <h2 class="mb-0">Chấm công</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active">

                        Chấm công

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
      <div class="col-md-2 col-sm-auto card " id="phong1">
        <ul class="card-body">
            <?php
                    echo '
                    <li class="sidebar-menu-item"
                    <a class="sidebar-menu-button" href="projects.html">
                    <span class="sidebar-menu-text">Tất cả</span>
                    </a>
                    ';
                    $sql2=mysqli_query($conn,"SELECT * FROM ban ORDER BY `level`");
                    if(mysqli_num_rows($sql2)>0){
                    while($hien=mysqli_fetch_assoc($sql2)){
                        $k='';
                        echo '<li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="phongban.php?mb='.$hien['mb'].'&mp=""" >';
                                if($hien["ten_ban"]==''){
                                    $k="vui long thêm tên";
                                }
                                else{
                                    $k=$hien["ten_ban"];
                                }
                                    echo '<span class="sidebar-menu-text">'.$k.'</span>';
                                echo"</a>";

                                $sql3=mysqli_query($conn," SELECT p.ten_phong, p.mp From phong as p left join ban as b on b.mb=p.m_ban where b.mb=".$hien['mb']."");
                                echo" <ul class='card-body'>";
                                while($hien1=mysqli_fetch_assoc($sql3)){
                                    // if($hien['mb']==$hien1['m_ban'])
                                    echo "<li class='sidebar-menu-item'><a href='?mb=".$hien['mb']."&mp=".$hien1['mp']."'>
                                    <span class='sidebar-menu-text'>&nbsp&nbsp&nbsp ".$hien1['ten_phong']."</span>
                                    </a></li>";
                                    
                                }
                                echo"</ul>";  
                    echo' </li>';
            }}
            ?>
        </ul>
      </div>  
    <div class="card mb-0 col-md-10 col-sm">

        <div class="table-responsive"
             data-toggle="lists"
             data-lists-sort-by="js-lists-values-employee-name"
             data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

            <div class="card-header">
                <form class="form-inline">
                    <label class="mr-sm-2 form-label"
                           for="inlineFormFilterBy">Filter by:</label>
                    <input type="text"
                           class="form-control search mb-2 mr-sm-2 mb-sm-0"
                           id="inlineFormFilterBy"
                           placeholder="Search ...">

                    <label class="sr-only"
                           for="inlineFormRole">Role</label>
                    <select id="inlineFormRole"
                            class="custom-select mb-2 mr-sm-2 mb-sm-0">
                        <option value="All Roles">All Roles</option>
                    </select>

                    <div class="ml-auto mb-2 mb-sm-0 custom-control-inline mr-0">
                        <label class="form-label mb-0"
                               for="active">Active</label>
                        <div class="custom-control custom-checkbox-toggle ml-8pt">
                            <input checked=""
                                   type="checkbox"
                                   id="active"
                                   class="custom-control-input">
                            <label class="custom-control-label"
                                   for="active">Active</label>
                        </div>
                    </div>

                    <!-- <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
<input type="checkbox" class="custom-control-input" id="inlineFormPurchase">
<label class="custom-control-label" for="inlineFormPurchase">Made a Purchase?</label>
</div> -->
                </form>
            </div>

            <table class="table mb-0 thead-border-top-0 table-nowrap">
                <thead>
                    <tr>

                        <th style="width: 18px;"
                            class="pr-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                       class="custom-control-input js-toggle-check-all"
                                       data-target="#staff"
                                       id="customCheckAllstaff">
                                <label class="custom-control-label"
                                       for="customCheckAllstaff"><span class="text-hide">Toggle all</span></label>
                            </div>
                        </th>

                        <th style="width: 150px;">
                            <a href="javascript:void(0)"
                               class="sort"
                               data-sort="js-lists-values-employer-name">Mã Nhân Viên</a>
                        </th>
                        <th>
                            <a href="javascript:void(0)"
                               class="sort"
                               data-sort="js-lists-values-employee-name">Ngày Sinh</a>
                        </th>


                        <th class="text-center"
                            style="width: 48px;">
                            <a href="javascript:void(0)"
                               class="sort"
                               data-sort="js-lists-values-projects">Ngày vào</a>
                        </th>

                        <th style="width: 37px;">Vai trò</th>

                        <!-- <th style="width: 120px;">
                            <a href="javascript:void(0)"
                               class="sort"
                               data-sort="js-lists-values-activity">Activity</a>
                        </th>-->
                        <th style="width: 51px;">
                            <a href="javascript:void(0)"
                               class="sort"
                               data-sort="js-lists-values-earnings">Tình trạng</a>
                        </th> 
                        <th style="width: 24px;"
                            class="pl-0"></th>
                    </tr>
                </thead>
                <tbody class="list"
                       id="staff">
                    <?php
                    $sql='';
                    if($_GET["mp"]==""){
                        $sql=mysqli_query($conn,"SELECT * From ten 
                        left join thuoc as t on ten.mnv=t.mnv 
                        left join phong as p on t.mp=p.mp
                        left join ban   as b on b.mb=p.m_ban
                        where b.mb=".$_GET['mb']."");
                    }
                    else{
                        $sql=mysqli_query($conn,"SELECT * From ten 
                        left join thuoc as t on ten.mnv=t.mnv 
                        left join phong as p on t.mp=p.mp
                        left join ban   as b on b.mb=p.m_ban
                        where b.mb=".$_GET['mb']." AND t.mp=".$_GET['mp']."");
                    }
                        // $sql=mysqli_query($conn,"SELECT * From ten 
                        // left join thuoc as t on ten.mnv=t.mnv 
                        // left join phong as p on t.mp=p.mp
                        // left join ban   as b on b.mb=p.m_ban
                        // where b.mb=".$_GET['mb']."");
                        while($hien=mysqli_fetch_assoc($sql)){
                            $logo=substr("".$hien['tennv']."",0,1);
                            echo'
                            <tr>

                                <td class="pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                               class="custom-control-input js-check-selected-row"
                                               id="customCheck1_2">
                                        <label class="custom-control-label"
                                               for="customCheck1_2"><span class="text-hide">Check</span></label>
                                    </div>
                                </td>
                                <td>

                                    <div class="media flex-nowrap align-items-center"
                                         style="white-space: nowrap;">
                                        <div class="avatar avatar-32pt mr-8pt">

                                            <span class="avatar-title rounded-circle">'.$logo.'</span>

                                        </div>
                                        <div class="media-body">

                                            <div class="d-flex flex-column ">
                                                <a href="ghicong.php?id='.$hien['id'].'">
                                                <p class="mb-0"><strong class="js-lists-values-employee-name">'.$hien['tennv'].'</strong></p>
                                                <small class="js-lists-values-employee-email text-50">'.$hien['email'].'</small>
                                                </a>
                                                </div>

                                        </div>
                                    </div>

                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                           <span class="js-lists-values-employer-name text-70">'.$hien['ngay_sinh'].'</span>
                                    </div>
                                </td>

                                <td class="text-center js-lists-values-projects small text-70">'.$hien['ngay_vao'].'</td>

                                <td>

                                    <a href=""
                                       class="chip chip-outline-secondary">'.$hien['vai_tro'].'</a>

                                </td>
                                <td>
                                <div class="text-center js-lists-values-projects small text-70">';
                                    if(ucwords($hien['tinh_trang'])=="Đang Làm"){
                                        echo '
                                        <span style="color:green">'.$hien['tinh_trang'].'</span>
                                        ';
                                    }
                                    elseif(ucwords($hien['tinh_trang'])=="Đã Nghỉ"){
                                        echo '
                                        <span style="color:red;">'.$hien['tinh_trang'].'</span>
                                        ';
                                    }
                                    else{
                                        echo '
                                        <span style="color:blue;">'.$hien['tinh_trang'].'</span>
                                        ';
                                    }
                           echo'</div></td>
                            </tr>
                            ';
                        }
                            ?>
                </tbody>
            </table>
            
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