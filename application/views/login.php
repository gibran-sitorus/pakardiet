<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="<?php echo base_url(); ?>">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="assets/vendors/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/vendors/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php 
              $flash_message = $this->session->flashdata('handler_msg');
              if( ! empty($flash_message) ) {
                echo '<p class="alert alert-'. $flash_message['type'] .'" id="flash_message"><b>'. $flash_message['msg'] .'</b></p>';
              }
            ?>
            <form action="<?php echo $form_login; ?>" method="post">
              <h1>Sistem Pakar Diet</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default">Log In</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Don't Have Account?
                  <a href="#signup" class="to_register" style="color: blue;"> Sign Up </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>&copy;<?php echo date('Y'); ?> All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <?php 
              $flash_message = $this->session->flashdata('handler_msg');
              if( ! empty($flash_message) ) {
                echo '<p class="alert alert-'. $flash_message['type'] .'" id="flash_message"><b>'. $flash_message['msg'] .'</b></p>';
              }
            ?>
            <form action="<?php echo $form_register; ?>" method="post">
              <h1>Create Account</h1>
              <div>
                <?php echo form_error('reg_username'); ?>
                <input type="text" class="form-control" name="reg_username" placeholder="Username" value="<?php echo set_value('reg_username'); ?>" required />
              </div>
              <div>
                <?php echo form_error('reg_firstname'); ?>
                <input type="text" class="form-control" name="reg_firstname" placeholder="First Name" value="<?php echo set_value('reg_firstname'); ?>" required />
              </div>
              <div>
                <?php echo form_error('reg_lastname'); ?>
                <input type="text" class="form-control" name="reg_lastname" placeholder="Last Name" value="<?php echo set_value('reg_lastname'); ?>" required />
              </div>
              <div>
                <?php echo form_error('reg_gender'); ?>
                <select class="form-control" name="reg_gender" id="reg_gender" required style="margin-bottom: 20px;">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="M">Laki-laki</option>
                  <option value="F">Perempuan</option>
                </select>
              </div>
              <div>
                <?php echo form_error('reg_weight'); ?>
                <input type="number" class="form-control" name="reg_weight" placeholder="Berat Badan (kg)" value="<?php echo set_value('reg_weight'); ?>" required style="margin-bottom: 20px;" />
              </div>
              <div>
                <?php echo form_error('reg_height'); ?>
                <input type="number" class="form-control" name="reg_height" placeholder="Tinggi Badan (cm)" value="<?php echo set_value('reg_height'); ?>" required style="margin-bottom: 20px;" />
              </div>
              <div>
                <?php echo form_error('reg_age'); ?>
                <input type="number" class="form-control" name="reg_age" placeholder="Usia (thn)" value="<?php echo set_value('reg_age'); ?>" required style="margin-bottom: 20px;" />
              </div>
              <div>
                <?php echo form_error('reg_password'); ?>
                <input type="password" class="form-control" name="reg_password" placeholder="Password" value="<?php echo set_value('reg_password'); ?>" required />
              </div>
              <div>
                <?php echo form_error('reg_repassword'); ?>
                <input type="password" class="form-control" name="reg_repassword" placeholder="Retype Password" value="<?php echo set_value('reg_repassword'); ?>" required />
              </div>
              <div>
                <button type="submit" class="btn btn-warning">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already have an account ?
                  <a href="#signin" class="to_register" style="color: blue;"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>&copy;<?php echo date('Y'); ?> All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
