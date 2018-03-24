function mybackgroundcolour1(myclr){
document.getElementById('newboardcardwindow').style.background=myclr;

}
$(document).ready(function() {
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
        var card="  <div class='col-lg-3 col-md-4 col-sm-12'><div class='card mt-2  ' style='background:"+x+"'><div class='card-titles  mx-auto mt-4'><h4>"+nameofcard+"</h4></div><div class='card-body'></div></div></div>";
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
