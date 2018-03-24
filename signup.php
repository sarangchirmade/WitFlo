<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in to Trello</title>
    <meta name="description" content="Log in to Trello."></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="">

    <title>Log in to Trello</title>
    <style media="screen">
        .row{
            margin-top: 0;
        }
    </style>

  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <script src="assets/js/main.js" ></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->

  <!-- icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



</head>

<body>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#signupsubmit').prop('disabled', true);

      $('#name,#email, #password').keyup(function(){

          var pass = $('#email').val();
          var valid =  /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/
          if ($('#name').val() != '' && $('#password').val() != '' && $('#email').val() != '' && valid.test(pass) )
          {
               $('#signupsubmit').css('background-color', '#5AAC44');
               $('#signupbtntext').css('color', '#ffffff');
               $('#signupsubmit').prop('disabled', false);
          }
          else
          {
              $('#signupsubmit').css('background-color', '#EDEFF0');
              $('#signupbtntext').css('color', '#B0B0B0');
              $('#signupsubmit').prop('disabled', true);
          }
      });
   });

    </script>

    <div class="container mt-5 mb-5">
        <div class="row " id="a101">
            <!-- <div class="col-md-4 col-md-offset-4"></div> -->
            <div class="col-md-5 col-md-offset-5">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title font-robot mt-5"><b>Create a WitFlo Account</b> </h2>
                        <h5 class="mb-4 text-muted">or <a style="text-decoration:underline;color:#298fca"href="login.php">sign in to your account</a></h5>
                    </div>
                    <div class="panel-body" id="abc">
                        <form role="form m-3" action="index.php">
                            <!-- <fieldset> -->

                            <div class="form-group">
                               <label class="font-arial text-muted">Name </label>
                                <input class="form-control textarea-bg font-roboto" placeholder="e.g., Guybrush Threepwood" name="name" id="name"autofocus="" value="" type="text">
                            </div>
                                <div class="form-group ">
                                   <label class="font-arial text-muted"> Email  <span style="color:#999">(or username)</span></label>
                                    <input class="form-control textarea-bg"  placeholder="e.g., e.hughes@downtown.org.uk" name="email" id="email" type="email">
                                </div>
                                <div class="form-group">
                                   <label class="font-arial text-muted">Password </label>
                                    <input class="form-control textarea-bg" placeholder="e.g., *********" name="password" value id="password" type="password">
                                </div>

                               <div class="container">
                               </div>
                            <!-- </fieldset> -->
                                        <button id="signupsubmit" type="button" class="btn-lg btn-block btn-light text-muted font-roboto" style="background:EDEFF0;border:2px solid #EDEFF0;font-size:16px" onclick="location.href='index.php';"><strong class="font-roboto"><span id="signupbtntext">Create New Account</span></strong></button><br>
                            <!-- <button type="button" class="btn-lg btn-light btn-block">Log in with Google</button><br> -->
                            <!-- <button type="btn" class="btn-lg  btn-block"><img src="assets/images/Artboard.svg"> Log in with Google</button> -->
                            <button  class="btn-lg btn-block bg-light" style="border:2px solid #cdd2d4;"><img class="mr-4" src="assets/images/Artboard.svg"><span class="font-roboto text-muted" style="font-size:16px"> Sign up with Google</span></button>

                          <br>  <p class="text-muted" style="font-size: 15px;">By creating an account, you agree to our<a href=""> Terms of Service </a></p>
                            <p class="text-muted" style="font-size: 15px;">and <a href="">Privacy Policy.</a></p><br>
                        </form>
                       </div>
                    </div>
                  </div>
                </div>
              </div>





    <footer class="quiet" data-tract-group="Footer" style="text-align: center; margin-top:0;">
    <ul >
      <a  href="/tour" class="mr-2 text-muted">Tour</a>
        <a href="/Pricing" class="mr-2 text-muted">Pricing</a>
          <a href="/Apps" class="mr-2 text-muted">Apps</a>
            <a href="/Jobs"class="mr-2 text-muted">Jobs</a>
              <a href="/Blog"class="mr-2 text-muted">Blog</a>
                <a href="/Developers"class="mr-2 text-muted">Developers</a>
                  <a href="/About"class="mr-2 text-muted">About</a>
                    <a href="/Help"class="mr-2 text-muted">Help</a>
                      <a href="/Legal"class="text-muted">Legal</a>
                    </ul>

    <!-- <br> -->
    <p class="text-muted"><img src="assets/images/A.svg" width="150"></a> © Copyright 2018. All rights reserved</p>
  </footer>



</body></html>
