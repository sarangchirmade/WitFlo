<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <title>Trello</title>
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" >
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <style media="screen">
    #sidebar{
        background: #EDEFF0;
    }

    .btn-sidebar-color{
        background: #EDEFF0;
    }
    </style>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




     <script src="assets/js/main.js" ></script>
      <script src="assets/js/drag.js" ></script>
      <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="assets/css/side.css">



<style>

@media screen and (max-width:748px) {
#dropdownMenuButton {
display: none;
}
#searchid {
width:33.5px;

}
#board{
   display: none;
}
#boardbtn{
   width: 35px;
}

#sidebar{
    width: 316px !important;
    float: right;
    margin: 0;
    }
}


	.board-header-btn-divider {
    float: left;
    border-left: 1px solid hsla(0,0%,100%,.2);
    height: 14px;
    margin: 8px 4px 0 0;
}

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

</style>



  </head>
  <body>


    	<div id="mynav">
    		<nav class="navbar navbar-expand-lg navbar-light bg-trello-nav-col nopadding">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <form class="form-inline my-2 my-lg-0">
  	<button class="btn btn-sm btn-trello-btn mx-2 text-white" type="submit" id="boardbtn">
<span class="mr-1"><img src="trello-logo/trello-mark-blue.svg" alt="LOGO" height="15" width="15"></span>
  	<strong id="board">Boards</strong></button>
      <!-- <input class="form-control mr-sm-2" type="search" aria-label="Search"> -->
      <div class="inner-addon right-addon" id="searchid">
    		<i class="fa fa-search icons"></i>
    		<input type="text" class="form-control form-control-sm btn-trello-btn" />
		</div>

    </form>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
    <!-- <span class="navbar-toggler-icon"></span>
  </button> -->

	<!-- <div>

	</div> -->
  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
  	<img class="ml-auto" src="assets/images/tiger.gif" alt="Smiley face" height="50" width="60">

    <form class="form-inline ml-auto">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <button class="btn btn-sm btn-trello-btn mx-1 " type="submit"><i class="fa fa-plus icons"></i></button>
      <button class="btn btn-sm btn-trello-btn mx-1 " type="submit"><i class="fa fa-info-circle icons"></i></button>
      <button class="btn btn-sm btn-trello-btn mx-1 " type="submit"><i class="fa fa-bell icons"></i></button>
      <button class="btn btn-light btn-circle mx-1 " type="submit" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>SK</strong></button>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>

    </form>

  <!-- </div> -->
</nav>

<?php  require_once '/blocks/sidebar.php'; ?>

 <div>

		<!-- Second Navbar -->
			<nav class="navbar navbar-expand-lg navbar-light nopadding bg-trello-nav2-col">
			  <form class="form-inline ">
		      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
		      <button class="btn btn-sm btn-change btn-board bg-trello-nav2-col mx-2 text-white" type="submit" style="margin-top:10px "><strong><h5>Trello Board</h5></strong></button>

		      <button class="btn btn-sm btn-change bg-trello-nav2-col mx-1 text-white" type="submit"><i class="fa fa-star-o icons"></i></button>
		     <!-- <span class ="board-header-btn-divider"></span> -->
		     <!-- <button class="" href="#">Personal</a> -->
		      <button class="btn btn-sm btn-change bg-trello-nav2-col mx-1 text-white" type="submit"> Personal </button>
		      <!-- <span class ="board-header-btn-divider"></span> -->
		      <button class="btn btn-sm btn-change bg-trello-nav2-col mx-1 text-white" type="submit" ><i class="fa fa-gear mr-2 icons"></i>Public</button>
		      </form>
		      <form class="form-inline ml-auto">
		      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
		      <!-- <button class="btn btn-sm btn-change-menu btn-menu bg-trello-nav2-col mx-2 text-white" onclick="location.href="#menu-toggle" id="menu-toggle"" type="submit"><i class="fa fa-ellipsis-h mr-2 icons"></i>Show Menu</button> -->

              </form>
              <button class="btn btn-sm btn-change-menu btn-menu bg-trello-nav2-col mx-2 text-white" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar"><i class="fa fa-ellipsis-h mr-2 icons"></i>Show Menu</button>
			</nav>




    	</div>
<?php  require_once '/dragdrop.html'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>
