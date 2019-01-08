    <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('').'assets/'?>dist/img/pp.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['userdata']->nama?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url()?>product"><i class="fa fa-circle-o"></i> Product</a></li>
            <li><a href="<?php echo base_url()?>product/post"><i class="fa fa-circle-o"></i> Input Product</a></li>
            <li><a href="<?php echo base_url()?>product/viewslide"><i class="fa fa-sliders"></i> Slide</a></li>
            <li><a href="<?php echo base_url()?>product/postslide"><i class="fa fa-sliders"></i> Input Slide</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url()?>operator/post"><i class="fa fa-sign-in"></i>Register Admin</a></li>
          </ul>
        </li>
        