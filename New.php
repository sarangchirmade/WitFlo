<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/popper/popper.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
 <!-- <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> -->

</head>
<style>
.tab-pane{
  font-size: 15px;
}

.profile-image.is-editable {
    cursor: pointer;
}
.profile-image {
    -moz-user-select: none;
    background-color: #d6dadc;
    border-radius: 10em;
    cursor: default;
    display: block;
    height: 35px;
    overflow: hidden;
    position: relative;
    text-decoration: none;
    width: 35px;
    z-index: 0;
}
.tabbed-pane-header-image {
    float: left;

}
a {
    color: #444;
}
a {
    background-color: transparent;
}
.profile-image-change-text, .profile-image-initials {
    font-weight: 50;
    left: 0;
    position: absolute;
    text-align: center;
}
.profile-image-initials {
    display: block;
    font-size: 14px;
    height: 35px;
    line-height: 35px;
    overflow: hidden;
    top: 0;
    width: 35px;
    z-index: 1;
}
</style>
<body>



<div class="container-fluid bg-light" style="width:500px">

  <!-- <ul class="nav nav-tabs text-align:center">
    <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
    <li><a data-toggle="tab" href="#menu1">Cards</a></li>
    <li><a data-toggle="tab" href="#menu2">Settings</a></li>
    <li><a data-toggle="tab" href="#menu3">Trello Gold</a></li>
  </ul> -->

  <div class="tab-content" style="width:700px;">
    <div id="home" class="tab-pane fade in active">
      <h4>Activity</h4>
      <!-- <div class="tabbed-pane-header-wrapper u-clearfix">
        <a class="tabbed-pane-header-image profile-image is-editable js-change-avatar-profile" href="">
    <span class="profile-image-initials">HS</span> -->

        <a class="tabbed-pane-header-image profile-image is-editable js-change-avatar-profile" href="">
    <span class="profile-image-initials">HS</span>

    </a>
      <p><Strong>Harshada Shirole</strong> changed the background of<a href="/harshada"> United board</a></p>
        <p>Mar 19 at 3:10 PM -on board <a href=""> United board</a></p>
        <hr>

        <a class="tabbed-pane-header-image profile-image is-editable js-change-avatar-profile" href="">
      <span class="profile-image-initials">HS</span>

      </a>
        <p><Strong>Harshada Shirole</strong> moved<a href=""> bhavna</a> from Done to Doing</p>
          <p>Mar 19 at 3:10 PM -on board <a href=""> United board</a></p>
          <hr>

          <a class="tabbed-pane-header-image profile-image is-editable js-change-avatar-profile" href="">
        <span class="profile-image-initials">HS</span>

        </a>
          <p><Strong>Harshada Shirole</strong> moved<a href=""> hello</a> from Done to Doing</p>
            <p>Mar 19 at 3:10 PM -on board <a href=""> United board</a></p>
            <hr>

            <a class="tabbed-pane-header-image profile-image is-editable js-change-avatar-profile" href="">
            <span class="profile-image-initials">HS</span>

            </a>
            <p><Strong>Harshada Shirole</strong> moved<a href=""> bhavna</a> from Done to Doing</p>
              <p>Mar 19 at 3:10 PM -on board <a href=""> United board</a></p>
              <hr>

    </div>
    <div id="menu1" class="tab-pane fade">
      <br>
        <p><a href="">...sorting by boards</a></p>

    </div>
    <div id="menu2" class="tab-pane fade">

      <h4>Account Details</h4>
      <hr>
      <p><a href="">Change Name,Initials,or Bio...</a></p>
      <p><a href="">Change Avatar...</a></p>
      <p><a href="">Change Password...</a></p>
      <p><a href="">Change Email...</a></p>
      <p><a href="">Change Languages...</a></p><br>

      <h4>Credentials</h4>
      <hr>
      <h4>Notifications</h4>
      <hr>
<p><a href="">Change Notification Email Frequency...</a></p>
<p><a href="">Allow Desktop Notification...</a></p>
<br>
<h4>Accessibility</h4>
<hr>
<p><a href="">Enable</a></p>

    </div>
    <div id="menu3" class="tab-pane fade">
      <h3><strong>Get extra fun and functionality.</Strong></h3>
        <p>Trello Gold gives you all the regular Trello featyures plus...</p>

    </div>
  </div>
</div>

</body>
</html>
