
$(document).ready(function(){
$("#submit").click(function(){
var username = $("#username").val();
var password = $("#password").val();
var FName = $("#FName").val();
var LName = $("#LName").val();


// Returns successful data submission message when the entered information is stored in database.
var dataString = 'usename1='+ username + '&password1=' + password + '&Fname1=' + FName + '&LName1=' + LName;
if((username=='') || (password == '') || (FName == '') || (LName == '')){
	alert("Please Fill All Fields");
}
else{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "LoginPHP.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});
