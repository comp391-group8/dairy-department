
function check(){
	alert('Passwords do not match!');
	var username = document.getElementById('username');
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	var confirm_password = document.getElementById('confirm_password');
	var phone_no = document.getElementById('phone_no');

	if (password===confirm_password) {

	}else{
		alert('Passwords do not match!');
		return false;
	}

}