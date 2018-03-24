<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js" ></script> -->

    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" >
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="assets/css/modal.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Trello</title>
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
}

    #recipient-name{
        opacity: 0.3;
    }
    #recipient-name:hover{
        opacity: 0.9;
    }
#Mycreatecard{
  opacity: 0.5;
}
#newboardcardwindow{

   opacity: 1;
}
#newboardcardcontainer{
  width:400px;

}
.modal-content{
    background: transparent;
border: none;
}
#mySelect{
     background: transparent;
}
#Modalcontentid{
  width:400px;
   background: transparent;
   border: none;
}

#recipient-name{
        opacity: 0.3;
    }
    #recipient-name:hover{
        opacity: 0.9;
    }
#Mycreatecard{
  opacity: 0.5;
}
#newboardcardwindow{

   opacity: 1;
}
#newboardcardcontainer{

  width:400px;

}
#Modalcontentid{
  width:400px;
   color: transparent;
   opacity: 1;
}

.modal-content1{
  top:0%;
  left: 180%;
  outline: none;
  overflow:hidden;
}
/*
*/
/*.btn-sidebar-color{
  background: #F8F9FA;
}

.btn-sidebar-color:hover{
  background: #d6dadc;
}*/
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
  /*Circular Buttons*/



  .collapse.show{
     width: 350px;

  }
  .myrandomcard{
    opacity: 0.5;
  }

  #card1:hover{
          background: #0094AE;;
          color : white;

        }
        .card:hover{
                background: #0094AE;;
                /* color : white; */

              }

    </style>
  </head>
  <body >

<script type="text/javascript">

// var count=0;
// var colorname;
function mybackgroundcolour1(myclr){
    // colorname=myckr;
document.getElementById('newboardcardwindow').style.background=myclr;

}
$(document).ready(function() {
    $('#infobuttonclose').click(function() {

        $('#down').css('display', 'none');
    });


    $('#createboardbutton').prop('disabled', true);

    $('#recipient-name').keyup(function(){


        if ($('#recipient-name').val() != '' )
        {

            $('#createboardbutton').prop('disabled', false);


        }
        else
        {

            $('#createboardbutton').prop('disabled', true);
        }
    });

    $('#createboardbutton').click(function(){
            var nameofcard = $('#recipient-name').val();
            var x = $('#newboardcardwindow').css('background');
            var card="  <div class='col-lg-3 col-md-4 col-sm-12'><div class='card mt-2  ' style='color:white;background:"+x+"'><div class='card-titles  mx-auto mt-4'><h4>"+nameofcard+"</h4></div><div class='card-body'></div></div></div>";
         document.getElementById('myrowid').innerHTML+=card;
         $('#recipient-name').val("");
        $("#modal").modal('hide');

     });

$('#dropdownMenuButton').click(function(){

$('#down').css('display', 'block');
});

$('#bclick').click(function(){
    $('.carousel').carousel('next');
    });
// bclick
 }
);




</script>



    	<div id="mynav">
    		<nav class="navbar navbar-expand-lg navbar-light bg-trello-nav-col nopadding">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <!-- <form class="form-inline my-2 my-lg-0"> -->
  	<button class="btn btn-sm btn-trello-btn mx-2 text-white" id="boardbtn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" >


        <!-- <button class="btn btn-sm btn-trello-btn mx-2 text-white" type="submit" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" > -->


        <span class="mr-1"><img src="trello-logo/trello-mark-blue.svg" alt="LOGO" height="15" width="15"></span>
              <strong id="board">Boards</strong>
          </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <!-- <h6 class="dropdown-header">Bhavna Penta (bhavnapenta)<i class="fas fa-times"></i></h6> -->
              <a class="dropdown-item" href="#"><input type="text" name="" value="" class="form-control" placeholder="Find boards by name..."></a>

              <a class="dropdown-item" href="#"><i class="fa fa-clock-o text-muted" aria-hidden="true"></i>
                <span class="text-muted ml-2" style="font-size:15px;">Recent Boards&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <button type="button" class="btn btn-sm  btn-light ml-5 " id="btn-rec"><i class="fa fa-minus icons" style="color:gray;"></i></button></a>
                <a class="dropdown-item" href="#"><strong><button id="ubbtn1" type="button" class="btn btn-primary btn-block" style="color:black">Untitled Board</button></strong></a>
                <a class="dropdown-item" href="#"><strong><button id="ubbtn1" type="button" class="btn btn-primary btn-block" style="color:black">Welcome Board</button></strong></a>

              <a class="dropdown-item" href="#"><i class="fa fa-columns text-muted" aria-hidden="true"></i>
                <span class="text-muted ml-2" style="font-size:15px;">Personal Boards&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <button type="button" class="btn btn-sm btn-light ml-5" id="pbbtn"><i class="fa fa-minus icons" style="color:gray"></i></button></a>
                <a class="dropdown-item" href="#"><strong><button id="ubbtn1" type="button" class="btn btn-primary btn-block" style="color:black">Untitled Board</button></strong></a>
                <a class="dropdown-item" href="#"><strong><button id="ubbtn1" type="button" class="btn btn-primary btn-block" style="color:black">Welcome Board</button></strong></a>

              <div class="">
                <a class="dropdown-item" href="#"><button id="cbbtn" type="button" class="btn btn-sm btn btn-light btn-block text-muted text-left"><u>Create new board...</u></button></a>
                <a class="dropdown-item" href="#"><button id="cbbtn" type="button" class="btn btn-sm btn btn-light btn-block text-muted text-left"><u>Always keep this menu open.</u></button></a>
                <a class="dropdown-item" href="#"><button id="cbbtn" type="button" class="btn btn-sm btn btn-light btn-block text-muted text-left"><u>See closed board...</u></button></a>
              </div>
             </div>

            <!-- <button type="button" class="btn btn-secondary">Large button</button> -->



              <!-- <input class="form-control mr-sm-2" type="search" aria-label="Search"> -->
              <div class="inner-addon right-addon" id="searchid">
                    <i class="fa fa-search icons"></i>
                    <input type="text" class="form-control form-control-sm btn-trello-btn" />
                </div>
         <!-- new button start -->

<!-- <span class="mr-1"><img src="trello-logo/trello-mark-blue.svg" alt="LOGO" height="15" width="15"></span>
  	<strong id="board">Boards</strong></button>
      <!-- <input class="form-control mr-sm-2" type="search" aria-label="Search"> -->
      <!-- <div class="inner-addon right-addon" id="searchid">
    		<i class="fa fa-search icons"></i>
    		<input type="text" class="form-control form-control-sm btn-trello-btn" />
		</div> -->

    <!-- </form> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
    <!-- <span class="navbar-toggler-icon"></span>
  </button> -->

  	<img class="ml-auto" src="assets\images\tiger.gif" alt="Smiley face" height="60" width="70">

    <div class="form-inline ml-auto">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-sm btn-trello-btn mx-1 " type="submit"><i class="fa fa-plus icons"></i></button> -->
      <button class="btn btn-sm btn-trello-btn mx-1 " type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus icons"></i></button>


  <!-- <div class="dropdown">    -->
    <!-- <div class="dropdown keep-open"> -->
   <div class="dropdown-menu " class="p-2" aria-labelledby="dropdownMenuButton1" style="left:auto;right: 0; width: 280px;" style="box-shadow: 1px;">

   <div class="text-center p-2 my-0" >
   <h6 class="d-inline-block">Menu </h6>
   <button type="button" class="close  d-inline-block mx-2" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar">
               <span>&times;</span>
         </button>
   </div>


   <hr class="mt-0 mx-2 mb-2 ">

   <div  id ="card1"  style="width:300px;height:79px;border:0 none;" data-toggle="modal" data-target=".bd-example-modal-sm">
     <strong class="mx-2">Create Board ...</strong>
     <div class="ml-2 mr-3" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, illum porro. Nemo.</div>
   </div>



 <div class="dropdown-menu" id="plusid" aria-labelledby="dropdownMenuLink" style="left:auto;right: 0; width: 280px;" style="box-shadow: 1px;">
    <div class="text-center p-2 my-0" >
     <!-- <i class="fa fa-arrow-left ml-auto"></i> -->
   <h6 class="d-inline-block">Create Team</h6>
   <button type="button" class="close  d-inline-block mx-2">
               <span>&times;</span>
         </button>
   </div>
   <hr class="mt-0 mx-2 mb-2">
   <strong class="mx-2">Name</strong><br>
   <input type="text" class="form-control d-block mx-2" style="width:95%" id="teamNameId">
   <strong class="mx-2 text-muted">Description</strong>  (optional)<br>
   <textarea class="form-control mx-2" id="exampleFormControlTextarea1" rows="3" style="width:95%"></textarea>
   <button class="btn btn-success mx-2 mt-3" id="createnewteam1">Create</button>
   <hr class="mx-2 mb-2">
   <div class="mx-2 mt-3 text-muted" style="font-size: 14px">A team is a group of boards and people. Use it to organize your company, side hustle, family, or friends.</div>
   <div class="mx-2 mt-3 text-muted" style="font-size: 14px">Business Class gives your team more security, administrative controls, and unlimited Power-Ups. Learn More.</div>
   </div>



   <div id ="card1"  style="width:300px;height:79px;border:0 none;" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <strong id="name" class="ml-2">Create Team ...</strong>
     <div style="font-size: 12px;" class="ml-2 mr-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea eveniet quod minima!</div>
   </div>


   <div id ="card1"  style="width:300px;height:79px;border:0 none;"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="">
     <strong class="ml-2">Create Buisiness Team ...</strong>
     <div style="font-size: 12px;" class="ml-2 mr-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex nam ipsum nulla.</div>
   </div>
   </div>
   <!-- </div> -->
 <!-- </div>  dropdown -->
      <button class="btn btn-sm btn-trello-btn mx-1 "  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle icons"></i></button>

      <div class="dropdown-menu " id="down" aria-labelledby="dropdownMenuButton" style="right:0;left:auto; width:500 px;">
          <div class="text-center">    <h6 class=" text-muted d-inline-block">Information</h6>
              <button type="button" id="infobuttonclose" class="close  d-inline-block mx-2" >
     <span>&times;</span>
</button>
</div>
            <!-- <img class="ml-2 " src="assets/images/g.png" alt="info image" width="279" height="135"> -->

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item ">
      <img class="ml-2 " src="assets/images/g.png" alt="info image" width="279" height="135">
    </div>
    <div class="carousel-item active">
     <img class="ml-2 " src="assets/images/b.png" alt="info image" width="279" height="135">
    </div>
    <div class="carousel-item">
      <img class="ml-2 " src="assets/images/cd.png" alt="info image" width="279" height="135">
    </div>
  </div>

  <a class="carousel-control" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <h6 class="text-center mt-2 sr-only">Join A Webinar To </h6>
  </a>
</div>
            <h6 class="text-center mt-2">Join A Webinar To </h6>
        <button id="bclick"class="btn col-12 bg-light mt-2 text-muted" type="button" name="button">Get a new tip</button>

<div class="mt-2">



        <ul >
          <a  href="/tour" class="mr-2 text-muted"><u>Tour</u></a>
            <a href="/Pricing" class="mr-2 text-muted"><u>Pricing</u></a>
              <a href="/Apps" class="mr-2 text-muted"><u>Apps</u></a>
                <a href="/blogs"class="mr-2 text-muted"><u>blogs</u></a>
                <a href="/blogs"class="mr-2 text-muted"><u>more..</u></a>

                        </ul>
</div>
       </div>
</div>
      <button class="btn btn-sm btn-trello-btn mx-1 " type="submit" onclick="location.href='board.php';" ><i class="fa fa-bell icons"></i></button>
      <button class="btn btn-light btn-circle mx-1 "data-toggle="modal" data-target="#myModal"><strong>SK</strong></button>

      <div class="modal fade" id="myModal" role="dialog" style="top:10px;">
          <div class="modal-dialog modal-sm">


            <div class="modal-content modal-content1 bg-light " >
              <div class="modal-header">
                <h6 class="modal-title text-muted">Harshada Shirole(harshadashirole)</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

              </div>


              <div class="modal-body p-0" >
                <div class="  js-profile mt-2 ml-2" id="hover1"><a  href="Panel.php"><strong>Profile</strong></a></div>
                <div class="js-profile mt-2 ml-2" href="/harshadashirole" id="hover2"><strong>Cards</strong></div>
                <div class="js-profile mt-2 ml-2" href="/harshadashirole" id="hover3"><strong>Settings</strong></div>

       <hr>
       <class="modal-body p-0">
         <div class="js-profile mt-2 ml-2" href="/harshadashirole" id="hover4"><strong>Help</strong></div>
         <div class="js-profile mt-2 ml-2" href="/harshadashirole" id="hover5"><strong>Shortcuts</strong></div>
         <div class="js-profile mt-2 ml-2" href="/harshadashirole" id="hover6"><strong>Change Language...</strong></div>

         <hr>

       <class="modal-body p-0">
       <div class="js-profile mb-2 ml-2" href="/harshadashirole" id="hover7"><strong>Log Out</strong></div>

            </div>

          </div>
        </div>


  </div>
  <!-- </div> -->
</nav>

<div class="mt-3 ml-1">


<nav class="navbar navbar-expand-lg navbar-light nopadding m-3">
         <h5 class=""><i class="fa fa-user m-3"></i>Personal Board</h5>
     </nav>

    	</div>
</div>



      <div class="container-fluid mt-1 " id="mycontainerid">


        <!-- <div class="container" id="mycontaineridinner"> -->

        <div class="row" id="myrowid">





          <div id="Mycreatecard" class="col-lg-3 col-md-4 col-sm-12" data-toggle="modal" data-target=".bd-example-modal-sm" >
            <div id="sortable" class="card bg-light mt-2" >
                <div class="card-titles mx-auto mt-4"><h4>create a board</h4></div>
              <div id="card4" class="card-body">
                <!-- <h4>create a board</h4> -->
              </div>
            </div>
          </div>





         <!-- <div class="col-3">
            <div class="card bg-warning mt-2" onclick="createBoard(myrowid)">
                 Person
            </div>
          </div> -->



        </div>

    </div>

    <div class="container-fluid" id="newrow" >
        <div class="row" id="newrow">

        </div>
    </div>

    <!-- <div class="col-3">
       <div class="card bg-warning mt-2" onclick="createBoard(myrowid)">
            Person
       </div>
     </div> -->


    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button> -->

<div id="modal"class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" id="Modalcontentid">
      <div class="container container1" id="newboardcardcontainer">
        <div class="row ">
          <div class="col-lg-8 p-0" style="width:800px">
       <div class="card mt-2 pt-0" id="newboardcardwindow" >
           <span class="row mx-auto m-1">
               <span class="col-sm-6">
     <input class="p-0 mt-0" type="text" class="form-control" id="recipient-name" placeholder="Add title Board" style="width:200px;" >
        </span>
        <span class="col-sm-6">

         <!-- isenablebutton(createboardbutton) -->
         <button class="btn-sm close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>

        </button>
     </span>
 </span>
 <span class="row ml-1 ">
     <span class="col-sm-6">
         <select id="mySelect" style="width:80px; border:none 0;">
           <option value="private">Private</option>
           <option value="public">Public</option>
         </select>
       </div>
   </span>
</span>



         </div>

         <div class="col-lg-4">
            <div class ="row">
              <div class="col-lg-12">
            <button id="url('assets/images/1.jpg')"class="btn mr-1 mt-2" style="background-image:url('assets/images/1.jpg'); height: 28px;width:27px;" onclick="mybackgroundcolour1(this.id)"></button>
            <button id="url('assets/images/2.jpg')"class="btn mr-1 mt-2 "style="background-image:url('assets/images/2.jpg');height: 28px;width:27px;"onclick="mybackgroundcolour1(this.id)"></button>
             <button id="url('assets/images/3.jpg')"class="btn mr-1 mt-2" style="background-image:url('assets/images/3.jpg');height: 28px;width:27px;"onclick="mybackgroundcolour1(this.id)"></button>
          </div>
          </div>
          <div class ="row">
            <div class="col-lg-12">
              <button id="url('assets/images/4.jpg')"class="btn mr-1 mt-1 " style="background-image:url('assets/images/4.jpg'); height: 28px;width:27px;"onclick="mybackgroundcolour1(this.id)"></button>
              <button id="url('assets/images/5.jpg')"class="btn mr-1 mt-1 "style="background-image:url('assets/images/5.jpg');height:  28px;width:27px;"onclick="mybackgroundcolour1(this.id)"></button>
               <button id="url('assets/images/6.jpg')"class="btn mr-1 mt-1" style="background-image:url('assets/images/6.jpg');height:28px;width:27px;"onclick="mybackgroundcolour1(this.id)"></button>
        </div>
        </div>
        <div class ="row">
          <div class="col-lg-12">
            <button id="green"class="btn mr-1 mt-1 " style="background:green; height:  27px;width:27px;"onclick="mybackgroundcolour1(this.id)"></button>
            <button id="blue"class="btn mr-1 mt-1"style="background:blue;height:  27px;width:27px;"onclick="mybackgroundcolour1(this.id)"></button>
             <button id="red"class="btn mr-1 mt-1" style="background:red;height:  27px;width:27px;"onclick="mybackgroundcolour1(this.id)"></button>
      </div>
      </div>
          </div>

         <!-- <div class="col-lg-4">
           <div class ="row">
             <div class="col-lg-12">
           <button class="btn-sm">1</button>
           <button class="btn-sm">2</button>
            <button class="btn-sm ">4</button>
         </div>
         </div>
         <div class ="row">
           <div class="col-lg-12">
         <button class="btn-sm ">3</button>
         <button class="btn-sm ">4</button>
          <button class="btn-sm ">4</button>
       </div>
       </div>
       <div class ="row">
         <div class="col-lg-12">
       <button class="btn-sm ">3</button>
       <button class="btn-sm ">4</button>
        <button class="btn-sm ">4</button>
     </div>
     </div>
         </div> -->
         <button id="createboardbutton" class="btn-sm mt-4 col-lg-4 ">Create Board</button>

    </div>
  </div>

  </div>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/JavaScript">
  //      $( function() {
  //   $( "#sortable" ).sortable();
  //   $( "#sortable" ).disableSelection();
  //
  // } );
// function createBoard(card4_id) {
//    var card="  <div class='col-3'><div class='card mt-2 bg-warning '><div class='card-titles'>Card 1</div><div class='card-body'></div></div></div>";
//   document.getElementById('myrowid').innerHTML+=card;
//
// }
function addmodel(modalid) {
   var modal="<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'><div class='modal-dialog modal-sm'><div class='modal-content'></div></div></div>";
document.getElementById(modalid).innerHTML+=modal;

}
function getcolour(mycolourid){

}
$('#createnewteam1').click(function(){
    $('#plus').css('display', 'none');
       var teamName = $("#teamNameId").val();
       var newTeam = "<div class='mt-3'><nav class='navbar navbar-expand-lg navbar-light nopadding mx-1 '><h5><i class='fa fa-users m-3'></i>"+teamName+"</h5><button class='btn btn-sm btn-info mx-2 text-muted' type='submit'><span class='mr-1'><img src='trello-logo/trello-mark-blue.svg' alt='LOGO' height='15' width='15'></span><strong>Boards</strong></button></nav></div><div class='container-fluid mt-1' id='mycontainerid'><div class='row' id='myrowid"+teamName+"'><div id='Mycreatecard' class='col-lg-3 col-md-4 col-sm-12' data-toggle='modal' data-target='.bd-example-modal-sm' ><div id='sortable' class='card bg-light mt-2' ><div class='card-titles mx-auto mt-4'><h4>Create a Board</h4></div><div id='card4'  class='card-body'></div></div></div></div></div></div>";              // Create text with HTML
    // var txt2 = $("<p></p>").text("Text.");  // Create text with
    //       var txt3 = document.createElement("p");
    //      txt3.innerHTML = "Text.";               // Create text with DOM
         $("body").append(newTeam);


      });

// function isenablebutton(button_id){
//   // document.getElementById(button_id).enable = true;
//   $(document).ready(function() {
//      $('#button_id').prop('disabled', true);
//
//      $('#recipient-name').keyup(function(){
//
//
//          if ($('#recipient-name').val() != '' )
//          {
//
//              $('#button_id').prop('disabled', false);
//          }
//          else
//          {
//              $('#button_id').prop('disabled', true);
//          }
//      });
//   });
// }

    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>
