var _user = document.getElementById('user')
var _pass = document.getElementById('password')
// console.log(_user)
function login() {
	if(_user.value.trim() == ""){
		_user.style.border = '1px solid red'
		return false
	}
	if(_pass.value.trim() == ""){
		_pass.style.border = '1px solid red'
		return false
	}
	return true
}
var _rguser = document.getElementById('rguser')
var _rgpass = document.getElementById('rgPassword')
function sigup() {
	
	if(_rguser.value.trim() == ""){
		_rguser.style.border = '1px solid red'
		return false
	}
	if(_rgpass.value.trim() == ""){
		_rgpass.style.border = '1px solid red'
		return false
	}
	return true
}
