<!-- 
include("pages/connection.php");
session_start();
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IRI | Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      min-width: 150px;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      color: #333;
      margin: 0 !important;
      text-decoration: none;
      display: block;
      width: 100%;
      padding: 0px 10px;
    }

    .dropdown-content a:hover {
      background-color: #f9f9f9;
    }
  </style>
  <!-- endinject -->
  <link rel="shortcut icon" href="#" />

  <style>
    .badgex {
      position: absolute;
      top: -8px;
      right: 10px;
      padding: 4px 8px;
      border-radius: 50%;
      background-color: red;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="dashboard.php"><img src="images/logo.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="images/logo.png" alt="logo" /></a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="profile.php">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <!-- partial -->
     <!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <!-- Existing menu items... -->
     <!-- CRM Section -->
     <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#crm1" aria-expanded="false" aria-controls="crm">
        <i class="fas fa-tasks menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      
      </a>
      
    </li>
    <!-- CRM Section -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#crm" aria-expanded="false" aria-controls="crm">
        <i class="fas fa-tasks menu-icon"></i>
        <span class="menu-title">Invoices</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="crm">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="invoices.php">Invoices</a></li>

          <!-- Add other CRM features as needed -->
        </ul>
      </div>
    </li>

    <!-- Event Management Section -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <i class="fas fa-file menu-icon"></i>
        <span class="menu-title">Offers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="offers.php">Offers</a></li>
        </ul>
      </div>
    </li>

    <!-- Training Section -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#training" aria-expanded="false" aria-controls="training">
        <i class="fas fa-file menu-icon"></i>
        <span class="menu-title">Leads</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="training">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="leads.php">Leads</a></li>
        </ul>
      </div>
    </li>

    <!-- Registrations Section -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="fas fa-chart-pie menu-icon"></i>
        <span class="menu-title">Employees</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="employees.php">Employees</a></li>
        <li class="nav-item"><a class="nav-link" href="employees.php">Commission</a></li>
        <li class="nav-item"><a class="nav-link" href="employees.php">Sale Performance</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts1" aria-expanded="false" aria-controls="charts">
        <i class="fas fa-chart-pie menu-icon"></i>
        <span class="menu-title">Marketing Tools</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts1">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="marketingtools.php">Email Marketing</a></li>
        <li class="nav-item"><a class="nav-link" href="marketingtools.php">Call to Customers</a></li>
        
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts2" aria-expanded="false" aria-controls="charts">
        <i class="fas fa-chart-pie menu-icon"></i>
        <span class="menu-title">Promotions/Offers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts2">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="offers.php">Current Promotions</a></li>
        <li class="nav-item"><a class="nav-link" href="offers.php">Promotion to customers</a></li>
        
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts3" aria-expanded="false" aria-controls="charts">
        <i class="fas fa-chart-pie menu-icon"></i>
        <span class="menu-title">Financial Integration</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts3">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="financial.php">Reconcillation of Payment</a></li>
        <li class="nav-item"><a class="nav-link" href="financial.php">Handling down payments</a></li>
        
        </ul>
      </div>
    </li>

    <!-- Publications Section -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
        <i class="fab fa-trello menu-icon"></i>
        <span class="menu-title">Customers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="page-layouts">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>
        </ul>
      </div>
    </li>

    <!-- Content Management Section -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#menu" aria-expanded="false" aria-controls="menu">
        <i class="fab fa-trello menu-icon"></i>
        <span class="menu-title">Tasks</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="menu">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="tasks.php">Tasks</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#menu1" aria-expanded="false" aria-controls="menu">
        <i class="fab fa-trello menu-icon"></i>
        <span class="menu-title">Info Board</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="menu1">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="infoboard.php">Media</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
<!-- partial -->
