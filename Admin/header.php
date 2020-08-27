<?php session_start ();
include 'proses/koneksi.php'; ?>

<?php
if ($_SESSION['level'] != ("admin" || "operator" || "autor") || empty($_SESSION['level'])) {
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WEB BERITA DUNIA KUTUB</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- datatable -->
  <link rel="stylesheet" href="vendors/datatables/Datatables/css/jquery.dataTables.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- summernote -->
  <link rel="stylesheet" href="vendors/summernote/dist/summernote.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- sweetalert -->
  <link rel="stylesheet" href="vendors/sweetalert/dist/sweetalert.css">
  <style>
    .navbar.default-layout .navbar-brand-wrapper .navbar-brand {
      color: #000000;
      font-size: 1.5rem;
      line-height: 48px;
      margin-right: 0;
      padding: 0.25rem 0;
      display: -webkit-flex;
      display: flex;
    }
  
  </style>
  <!-- datatables -->
  <!-- <link rel="stylesheet" type="text/css" href="vendors/datatables/datatables/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="vendors/datatables/datatables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="vendors/datatables/datatables/css/dataTables.bootstrap.css"> -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-100 col-98 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <!-- <img src="images/logo.svg" alt="logo" /> -->
          <b>/JALAN TIKUNG\</b>
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">Schedule
              <span class="badge badge-danger ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <!-- <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
      <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 178975 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hola, <?php echo $_SESSION['username']; ?></span>
              <img class="img-xs rounded-circle" src="images/faces/face28.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a href="proses/logout.php" class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face28.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION['username'];?></p>
                  <div>
                    <small class="designation text-muted"><?php echo $_SESSION['level'];?></small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <!-- <a href="posting.php" class="btn btn-success btn-block">New Post
                <i class="mdi mdi-plus"></i>
              </a> -->
            </div>
          </li>
          <!-- session admin -->
          <?php if($_SESSION['level'] == 'admin') { ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posting.php">
            <i class="menu-icon mdi mdi-television"></i>
            <span class="menu-title">Postingan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Data Master</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="kategori.php">Kategori</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="biodata.php">
              <i class="menu-icon mdi mdi-content-paste"></i>
              <span class="menu-title">Info Biodata</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_user.php">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Data User</span>
            </a>
          </li>
          <!-- session operator -->
          <?php } else if ($_SESSION['level'] == 'operator') { ?>

          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posting.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">MEMPOSTING</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Data Master</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="kategori.php">Kategori</a>
                </li>
              </ul>
            </div>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="biodata.php">
              <i class="menu-icon mdi mdi-content-paste"></i>
              <span class="menu-title">Info Biodata User</span>
            </a>
          </li>

          <!-- session author -->
          <?php } else if($_SESSION['level'] == 'autor'){ ?>
          <li class="nav-item">
            <a class="nav-link" href="postingan_autor.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">MEMPOSTING</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="biodata_user.php">Biodata User</a>
                </li>
              </ul>
            </div>
          </li>
            <!-- <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="blank-page.php"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="error-404.php"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="error-500.php"> 500 </a>
                </li>
              </ul>
            </div>
          </li> -->
          <?php } ?>
        </ul>
      </nav>

      <script src="js/off-canvas.js"></script>
      <script src="js/misc.js"></script>

      <script src="js/dashboard.js"></script>