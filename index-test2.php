<html lang="en"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Simple Sidebar - Start Bootstrap Template</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="  https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- <link href="css/simple-sidebar1.css" rel="stylesheet"> -->
    <style>
    body{
      background: #0079BF;
    }

    .btn-sidebar-color{
      background: #F8F9FA;
    }

    .btn-sidebar-color:hover{
      background: #d6dadc;
    }
       /* .sidebar{
        top:76px;
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        right: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.2s;
        padding-top: 100px;
      }  */

      #sidebar {
          /* max-width: 250px; */
          min-height: 100%;
          right: 0;
          /* top:76px; */
           /* height: 100%; */
           width:350px;
          position: fixed;
          z-index: 1;
          right: 0;
          background-color: #EDEFF0;
          /* padding: 0; */
          /* overflow-x: hidden; */
          transition: all 0.3s;
          /* padding-top: 100px; */
      }



      .collapse.show{
         width: 350px;

      }

      /* #sidebar.active {
          margin-left: 250px;
          transition: 0.3s;
      } */

      /* .collapse{
          margin-left: 0;
      } */
      /*Circular Buttons*/
.btn-circle {
  width: 33px;
  height: 33px;
  text-align: center;
  padding: 6px 0;
  font-size: 14px;
  line-height: 1.428571429;
  border-radius: 20px;
  background: #CDD2D4;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}
/*Circular Buttons*/

    </style>


</head>

<body>





  <div class="wrapper" >

    <nav id="sidebar"  class="collapse bg-light" >

        <div class="sidebar-header text-center my-2">
            <h6 class=" d-inline-block"> <strong>Menu</strong> </h6>
            <button type="button" class="close  d-inline-block mx-2">
                  <span>&times;</span>
            </button>
          </div>

        <hr class="mt-0">
        <!-- <form class="form-inline"> -->

        <div class="d-flex flex-column">
        <!-- <div class="p-2">Flex item 1</div> -->
        <div ><li class=" list-unstyled mb-2 mx-2"><button class="btn btn-light btn-circle mx-1" type="submit"><strong>SK</strong></button></li></div>
        <div class="mx-2"><li class=" list-unstyled mx-2"><button type="button" class="btn btn-sm btn-block  text-left" name="button"><i class="fa fa-user-plus mr-2"></i> <strong>Invite ...</strong></button></div>
        </div>

        <!-- <ul>

          <li class=" list-unstyled mb-3 mx-2"><button type="button" class="btn btn-block" name="button">Invite ...</button></li>
        </ul> -->
        <hr style="margin-left:10px;">

        <div class="d-flex flex-column">
        <div class="mx-2 my-0"><li class=" list-unstyled mx-2"><button type="button" class="btn btn-sm btn-block btn-sidebar-color text-left" name="button"> <div class="d-inline-block  mr-1" style="height:15px;width:15px;background:#0079BF;border-radius:3px; margin:0;"></div> <div class="d-inline-block" ><strong  >Change Background</strong></div> </button></div>
        <div class="mx-2"><li class=" list-unstyled mx-2"><button type="button" class="btn btn-sm btn-block btn-sidebar-color text-left" name="button"> <i class="fa fa-filter mr-2"></i> <strong>Filter Cards</strong></button></div>
        <div class="mx-2"><li class=" list-unstyled mx-2"><button type="button" class="btn btn-sm btn-block btn-sidebar-color text-left" style="padding-bottom:0;"  name="button"><i class="fa fa-rocket mr-2"></i><strong>Power-Ups </strong><p style="margin-right:10px;">Calender, Google Drive and More ...</p> </button></div>
        <div class="mx-2"><li class=" list-unstyled mx-2"><button type="button" class="btn btn-sm btn-block btn-sidebar-color text-left" name="button"><i class="fa fa-filter mr-2"></i> <strong>Stickers</strong></button></div>
        <div class="mx-2"><li class=" list-unstyled mx-2"><button type="button" class="btn btn-sm btn-block btn-sidebar-color text-left" name="button"><i class="fa fa-ellipsis-h mr-2"></i> <strong>More</strong></button></div>

          </div>

          <hr style="margin-left:10px;">
          <div class="d-flex flex-column">
          <!-- <div class="p-2">Flex item 1</div> -->
          <!-- <div ><li class=" list-unstyled mb-2 mx-2"><button class="btn btn-light btn-circle mx-1" type="submit"><strong>SK</strong></button></li></div> -->
          <div class="mx-2"><li class=" list-unstyled mx-2"><button type="button" class="btn btn-sm btn-block btn-sidebar-color text-left" name="button"><i class="fa fa-list mr-2"></i> <strong>Activity</strong></button></div>
          </div>
        <!-- </form> -->
        <!-- <button class="btn btn-light btn-circle mx-1 " type="submit"><strong>SK</strong></button>
        <button type="button" class="btn btn-light" name="button">Invite ...</button> -->
        <!-- <li class="active list-unstyled components "><a href="#">Activity</a></li>
        <li class=" list-unstyled components"><a href="#">About</a></li>
        <li class=" list-unstyled components"><a href="#">Pages</a></li>
        <li class=" list-unstyled components"><a href="#">Portfolio</a></li> -->
    </nav>
  <!-- </div> -->
</div>
<!-- <button type="button" name="button" class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Sidebar</button> -->
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar">Toggle second element</button>

<!-- <div class="container"> -->
<!-- <div class="container">
  <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>mr-2
  </div>

</div>
</div> -->
<script type="text/javascript">

</script>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</html>
