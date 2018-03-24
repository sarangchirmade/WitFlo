$("div").click(function() {
		var icon = $("div.fa", this);
		var isClicked = icon.data("clicked");
    icon.data("clicked", !isClicked);
}).hover(function () {
    // hover in
    var icon = $("div.fa", this);
    var isClicked = icon.data("clicked");
    var remCls = isClicked ? "fa-star" : "fa-star-o",
    		addCls = isClicked ? "fa-star-o" : "fa-star"
    icon
    	.removeClass(remCls)
      .addClass(addCls);
}, function () {
    // hover out
    var icon = $("div.fa", this);
    var isClicked = icon.data("clicked");
    var remCls = isClicked ? "fa-star-o" : "fa-star",
    		addCls = isClicked ? "fa-star" : "fa-star-o"
    icon
    	.removeClass(remCls)
      .addClass(addCls);
});

var marked=0;

function mybookmark(click_id){



	if(marked==0)
	{
		this.marked=1;
		document.getElementById(click_id).innerHTML ='<img id="yellowstar" src="assets/images/black_star.svg" width="20" height="20" >';

	}
	else{
		this.marked=0;
		document.getElementById(click_id).innerHTML ='<img id="yellowstar" src="assets/images/white_star.svg" width="20" height="20" >';

	}

}
