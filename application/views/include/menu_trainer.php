<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

  <div class="conjtainer">
    <!-- Menu button for smallar screens -->

  </div>
</div>


<!-- Header starts -->
<header>
  <div class="container">
    <div class="row">

      <!-- Logo section -->
      <div class="col-md-4">
        <!-- Logo. -->
        <div class="logo">
          <h1><a href="javascript:void(0)" onclick="location.href='#';">Halaman Trainer</a></h1>
        </div>
        <!-- Logo ends -->
      </div>

      <!-- Button section -->
      <div class="col-md-4">

      </div>

      <!-- Data section -->



    </div>
  </div>
</header>

<!-- Main content starts -->

<div class="content">

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-dropdown"><a href="javascript:void(0)" onclick="location.href='#';">Navigation</a></div>

    <!--- Sidebar navigation -->
    <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
    <ul id="nav">
      <!-- Main menu with font awesome icon -->
      <li><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("trainer/list"); ?>';"><i class="fa fa-home"></i> Trainer</a></li>
      <li class="has_sub"><a href="javascript:void(0)" onclick="location.href='#';"><i class="fa fa-list-alt"></i> Informasi  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
        <ul>
          <li><a href="javascript:void(0)" onclick="location.href='<?php echo site_url('artikel/list_artikel'); ?>';">Artikel</a></li>
          <li><a href="javascript:void(0)" onclick="location.href='<?php echo site_url('berita/list_berita'); ?>';">Berita</a></li>
          <li><a href="javascript:void(0)" onclick="location.href='<?php echo site_url('lomba/list_lomba'); ?>';">Lomba</a></li>
        </ul>
      </li>
      <li><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("trainer/data"); ?>';"><i class="fa fa-home"></i> Data Diri</a></li>
      <li><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("logout"); ?>';"><i class="fa fa-home"></i> Log Out</a></li>
    </ul>
  </div>

  <!-- Sidebar ends -->
