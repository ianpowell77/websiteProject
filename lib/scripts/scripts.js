function formValidation(){
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var phone = document.getElementById('phone').value;

	if ( name === "" || email === "" || phone === ""){
		alert('Please fill in required fields: Name, Email, Phone.');
		return false;
	} else {
		alert('Thank you, your information has been validated.')
	}
}