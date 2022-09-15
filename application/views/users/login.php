

    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><h1>EDCCA <?php echo strtoupper($title); ?></h1><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
               <?php echo form_open('index.php/users/login'); ?>
               <?php echo validation_errors(); ?>
               <?php if($this->session->flashdata('login_failed')): ?>
               <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
               <?php endif; ?>
               <?php if($this->session->flashdata('user_loggedout')): ?>
               <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
              <?php endif; ?>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off" name="username" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                <?php echo form_close(); ?>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="<?php echo base_url()?>index.php/users/register" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>