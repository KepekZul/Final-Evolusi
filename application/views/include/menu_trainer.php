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
          <h1><a href="#">Halaman Trainer</a></h1>
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
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <!--- Sidebar navigation -->
    <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
    <ul id="nav">
      <!-- Main menu with font awesome icon -->
      <li><a href="<?php echo base_url(); ?>trainer"><i class="fa fa-home"></i> Trainer</a></li>
      <li class="has_sub"><a href="#"><i class="fa fa-list-alt"></i> Informasi  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
        <ul>
          <li><a href="<?php echo base_url(); ?>artikel/list_admin">Artikel</a></li>
          <li><a href="<?php echo base_url(); ?>berita/list_admin">Berita</a></li>
          <li><a href="<?php echo base_url(); ?>lomba/list_admin">Info Lomba</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>trainer/data_diri"><i class="fa fa-home"></i> Data Diri</a></li>
      <li><a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-home"></i> Log Out</a></li>
    </ul>
  </div>

  <!-- Sidebar ends -->
