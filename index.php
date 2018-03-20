<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Trello Demo</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" >
     <script src="vendor/bootstrap/js/bootstrap.min.js" ></script>
     <script src="vendor/jquery/jquery.slim.min.js"></script>
     <script src="vendor/popper/popper.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




     <script src="assets/js/main.js" ></script>
     <link rel="stylesheet" href="assets/css/style.css">



  </head>

  <body>






      <div id="mynav">
        <nav class="navbar navbar-expand-lg navbar-light bg-trello-nav-col nopadding">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <form class="form-inline my-2 my-lg-0">
    <button class="btn btn-sm btn-trello-btn mx-2 text-white" type="submit">
  <span class="mr-1"><img src="/trello-mark-blue.svg" alt="LOGO" height="15" width="15"></span>
    <strong>Boards</strong></button>
      <!-- <input class="form-control mr-sm-2" type="search" aria-label="Search"> -->
      <div class="inner-addon right-addon">
        <i class="fa fa-search icons"></i>
        <input type="text" class="form-control form-control-sm btn-trello-btn" />
    </div>

    </form>

  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
    <img class="ml-auto" src="assets/images/witflo.png" alt="Smiley face" height="35" width="150">

    <form class="form-inline ml-auto">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <button class="btn btn-sm btn-trello-btn mx-1 " type="submit"><i class="fa fa-plus icons"></i></button>
      <button class="btn btn-sm btn-trello-btn mx-1 " type="submit"><i class="fa fa-info-circle icons"></i></button>
      <button class="btn btn-sm btn-trello-btn mx-1 " type="submit"><i class="fa fa-bell icons"></i></button>
      <button class="btn btn-light btn-circle mx-1 " type="submit"><strong>SK</strong></button>
    </form>
  <!-- </div> -->
  </nav>


   <!-- Second Navbar -->
      <!-- <nav class="navbar navbar-expand-lg navbar-light nopadding bg-trello-nav2-col">
        <form class="form-inline ">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-sm btn-change btn-board bg-trello-nav2-col mx-2 text-white" type="submit"><strong><h5>Trello Board</h5></strong></button>
          <button class="btn btn-sm btn-change bg-trello-nav2-col mx-1 text-white" type="submit"><i class="fa fa-star-o icons"></i></button>
          <button class="btn btn-sm btn-change bg-trello-nav2-col mx-1 text-white" type="submit">Personal</button>
          <button class="btn btn-sm btn-change bg-trello-nav2-col mx-1 text-white" type="submit"><i class="fa fa-gear mr-2 icons"></i>Public</button>
          </form>
          <form class="form-inline ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-sm btn-change-menu btn-menu bg-trello-nav2-col mx-2 text-white" type="submit"><i class="fa fa-ellipsis-h mr-2 icons"></i>Show Menu</button>
          </form>
      </nav> -->





      </div>



    <!-- Main Trello Body -->

      <div class="container">
        <div></div>

      </div>


  <div class="container-fluid"  style="background-color:white" >
  <!--

  <div class="row"  >
    <div class="col-sm-12" id="sidebar" style="background-color:black; height:50px;">2nd</div>
  </div>
  -->
  <div class="container-fluid" style="height:300px; background-color:white" >

  <div class="Personal_Board ">

    <div  style="background-color:white;">  <i class="fa fa-user mr-3" aria-hidden="true"></i><strong>Personal Boards</strong></div>
  </div>


  <div class="row ">
    <div class="col-sm-3"  style="background-color:white;">
      <div class="row" id="box1">
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
        <div class="col-sm-10">

        <class="card" style="width: 18rem;" class="bg-primary">
        <div><h7>Untitle Board</h7>

        <label id="bookmarkstar" onclick="mybookmark(this.id)"><img src="assets/images/white_star.svg" width="20" height="20"/>
        </div>
        </div>
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
      </div>
    </div>
    <div class="col-sm-3"  style="background-color:white;">
      <div class="row" id="box1">
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
        <div class="col-sm-10 " id="1000">
        <class="card" style="width: 18rem;" class="bg-primary">
        <div class="Myhover"><h7 >Untitle Board1</h7>

        <label id="bookmarkstarp1" onclick="mybookmark(this.id)"><img src="assets/images/white_star.svg" width="20" height="20"/>
        </div>
        </div>
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
      </div>
    </div>
    <div class="col-sm-3"  style="background-color:white;">
      <div class="row" id="box1">
        <div id=""class="col-sm-1"  style="background-color:white;height: 80px;"></div>
        <div class="col-sm-10">
        <class="card" style="width: 18rem;" class="bg-primary">
        <div><h7>Untitle Board</h7>

        <label id="bookmarkstarp2" onclick="mybookmark(this.id)"><img src="assets/images/white_star.svg" width="20" height="20"/>
        </div>
        </div>
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
      </div>
    </div>
    <div class="col-sm-3"  style="background-color:white;">
      <div class="row" id="box1">
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
        <div class="col-sm-10">
        <class="card" style="width: 18rem;" class="bg-primary">
        <div><h7>Untitle Board</h7>

      <label id="bookmarkstarp3" onclick="mybookmark(this.id)"><img src="assets/images/white_star.svg" width="20" height="20"/>
        </div>
        </div>
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
      </div>
    </div>
  </div>

    <div class="Blank_space_under_Personal_board"><div  style="background-color:white;">Blank_space_under_Gro_board</div></div>
  </div>




  <div class="container-fluid" style="height:300px; background-color:white" >

  <div class="Group_Board">

    <div  style="background-color:white;">  <i class="fa fa-group" aria-hidden="true"></i><b>Group Boards<b></div>
  </div>


  <div class="row">
    <div class="col-sm-3"  style="background-color:white;">
      <div class="row" id="box1">
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
        <div class="col-sm-10">

        <class="card" style="width: 18rem;" class="bg-primary">
        <div><h7>Untitle Board</h7>

        <label id="bookmarkstarg1" onclick="mybookmark(this.id)"><img src="assets/images/white_star.svg" width="20" height="20"/>
        </div>
        </div>
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
      </div>
    </div>
    <div class="col-sm-3"  style="background-color:white;">
      <div class="row" id="box1">
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
        <div class="col-sm-10">
        <class="card" style="width: 18rem;" class="bg-primary">
        <div><h7>Untitle Board</h7>

        <label id="bookmarkstarg2" onclick="mybookmark(this.id)"><img src="assets/images/white_star.svg" width="20" height="20"/>
        </div>
        </div>
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
      </div>
    </div>
    <div class="col-sm-3"  style="background-color:white;">
      <div class="row" id="box1">
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
        <div class="col-sm-10">
        <class="card" style="width: 18rem;" class="bg-primary">
        <div><h7>Untitle Board</h7>

        <label id="bookmarkstarg3" onclick="mybookmark(this.id)"><img src="assets/images/white_star.svg" width="20" height="20"/>
        </div>
        </div>
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
      </div>
    </div>
    <div class="col-sm-3"  style="background-color:white;">
      <div class="row" id="box1">
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
        <div class="col-sm-10">
        <class="card" style="width: 18rem;" class="bg-primary">
        <div><h7>Untitle Board</h7>

        <label id="bookmarkstarg4" onclick="mybookmark(this.id)"><img src="assets/images/ white_star.svg" width="20" height="20"/>
        </div>
        </div>
        <div class="col-sm-1"  style="background-color:white;height: 80px;"></div>
      </div>
    </div>
  </div>

    <div class="Blank_space_under_Personal_board"><div  style="background-color:white;">Blank_space_under_Personal_board</div>
    </div>
  </div>


  </div>
  <div class="row"  >
    <div class="col-sm-12" id="sidebar" style="background-color:#0094AB; height:50px;">footer</div>
  </div>
  </div>

  </body>
  </html>
