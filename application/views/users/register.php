    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <?php echo form_open('index.php/users/register',array("class"=>"splash-container")); ?>
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1"><center>EDCCA <?=strtoupper($title);?></center></h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
            <?php echo validation_errors(); ?>
            <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert alert-success col-sm-4">'.$this->session->flashdata('user_registered').'</p>'; ?>
            <?php endif; ?>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" required="" placeholder="Full Name" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" required="" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Confirm" name="password2" type="password">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="<?php echo base_url();?>index.php/users/login" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    <?php echo form_close(); ?>