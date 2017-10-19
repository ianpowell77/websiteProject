$('#comment-form').on("submit", function(e){
	var name = $('#name').val();
	var email = $('#email').val();
	var phone = $('#phone').val();

	if(name === "" || email === "" || phone === "") {
		alert("Sorry, you must fill in the name, email, and phone fields.");
		e.preventDefault();
	} else {
		alert("Thank you, I will get back to your email as soon as possible.");
	}
})