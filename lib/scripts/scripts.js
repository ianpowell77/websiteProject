$(window).resize(function(){
	if ($(window).width() >= 768){
		$('.head-nav').removeClass("hide");
	} else {
		$('.head-nav').addClass("hide");
	}
});

$( window ).ready(function(){
	if ($(window).width() >= 768){
		$('.head-nav').removeClass("hide");
	}
	$('.home-description').addClass('fade-in-home-message');
});

$('#comment-form').on("submit", function(e){
	var name = $('#name').val();
	var email = $('#email').val();
	var phone = $('#phone').val();

	if (name === "" || email === "" || phone === ""){
		alert("Sorry, you must fill in the name, email, and phone fields.");
		e.preventDefault();
	} else {
		alert("Thank you, I will get back to your email as soon as possible.");
	}
});

$('.menu-btn').click(function(){
	$('.head-nav').toggleClass("hide");
});

//WANT TO ADD MESSAGE FOR INCOMPLETE FIELDS
//SUCCESS PAGE FOR SOLID SUBMISSION
//MESSAGE FOR FAILED SUBMISSION