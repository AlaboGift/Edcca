 <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?php if($title == 'Home'){ echo 'active'; }?>" href="<?php echo base_url(); ?>index.php/pages/index"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                </div>
                            </li>

                              <li class="nav-item ">
                                <a class="nav-link <?php if($title == 'Algorithm'){ echo 'active'; }?>" href="<?php echo base_url(); ?>index.php/algorithms/index"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-code"></i>Edcca Algorithm</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                </div>
                             </li>

                              <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/users/logout"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-sign-out-alt"></i>Log Out</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                </div>
                             </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->