<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jesus.gallery/everest/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:45:00 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ME.COM" />
  <meta name="Ed" content="Sistema ADM" />
  <link rel="shortcut icon" href="img/favicon.ico">
  <title>Ventas Admin Panel</title>

  <!-- Bootstrap CSS -->
  <link href="../../assets/login/css/bootstrap.css" rel="stylesheet" media="screen">

  <!-- Animate CSS -->
  <link href="../../assets/login/css/animate.css" rel="stylesheet" media="screen">

  <!-- Main CSS -->
  <link href="../../assets/login/css/main.css" rel="stylesheet" media="screen">

  <!-- Main CSS -->
  <link href="../../assets/login/css/login.css" rel="stylesheet">

  <!-- Alertify CSS -->
  <link href="../../assets/login/css/alertify/alertify.core.css" rel="stylesheet">
  <link href="../../assets/login/css/alertify/alertify.default.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="../../assets/login/fonts/font-awesome.min.css" rel="stylesheet">

  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../../assets/login/js/html5shiv.js"></script>
  <script src="../../assets/login/js/respond.min.js"></script>
  <![endif]-->

</head>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-push-4 col-md-4 col-sm-push-3 col-sm-6 col-sx-12">

      <!-- Header end -->
      <div class="login-container">
        <div class="login-wrapper animated flipInY">

          <div class="login-header">
            <h4>Ingrese a su cuenta</h4>
          </div>

          <div id="infoMessage">
              <?php if(strlen($message)){ ?>
                  <div class="alert alert-danger no-margin">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Usuario o Clave incorrecta!!
                  </div>
              <?php } ?>

          </div>

          <?php echo form_open("auth/login");?>
              <?php
                $clase_usuario = array(
                    'class'         => 'form-control',
                    'placeholder'   => 'Usuario',
                    'autofocus'     => 'TRUE',
                    'required'     => 'TRUE'
                );

                $clase_password = array(
                    'class'         => 'form-control',
                    'placeholder'   => 'Clave',
                    'required'     => 'TRUE'
                );
              ?>
              <div class="form-group has-feedback">
                 <label class="control-label" for="identity">Usuario / Correo</label>
                 <?php echo form_input($identity,'' ,$clase_usuario); ?>
                 <i class="fa fa-user text-info form-control-feedback"></i>
              </div>

              <div class="form-group has-feedback">
                <label class="control-label" for="password">Clave</label>
                <?php echo form_input($password,'' ,$clase_password); ?>
                <i class="fa fa-key text-danger form-control-feedback"></i>
              </div>

            <p>
              Usuario: admin@admin.com <br>
              password: password  
            </p>
                
            <p>
              <?php echo lang('login_remember_label', 'remember');?>
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            </p>


            <p><?php echo form_submit('submit', lang('login_submit_btn'),"class='btn btn-danger btn-lg btn-block'");?></p>

          <?php echo form_close();?>

          <a href="forgot_password" class="underline text-info">Olvidaste tu clave</a>


        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container Fluid ends -->


<script src="../../assets/login/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../assets/login/js/bootstrap.min.js"></script>

<!-- Notifications JS -->
<script src="../../assets/login/js/alertify/alertify.js"></script>
<script src="../../assets/login/js/alertify/alertify-custom.js"></script>


  <script type="text/javascript">
    (function($) {
      // constants
      var SHOW_CLASS = 'show',
          HIDE_CLASS = 'hide',
          ACTIVE_CLASS = 'active';

      /*$('a').on('click', function(e){
        e.preventDefault();
        var a = $(this),
            href = a.attr('href');
      */

        $('.active').removeClass(ACTIVE_CLASS);
        a.addClass(ACTIVE_CLASS);

        $('.show')
            .removeClass(SHOW_CLASS)
            .addClass(HIDE_CLASS)
            .hide();

        $(href)
            .removeClass(HIDE_CLASS)
            .addClass(SHOW_CLASS)
            .hide()
            .fadeIn(550);
      });
    })(jQuery);
  </script>

  </body>
</html>