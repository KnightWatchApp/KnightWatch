$(document).ready(function(){
$("#submit").click(function(){
var ridewalk = $("#ridewalk").val();
var pickuploc = $("#pickuplocation").val();
var otherpickuploc = $("#otherpickuploc").val();
var dropoffloc = $("#dropoffloc").val();
var otherdroploc = $("#otherdroploc").val();
var numPeople = $("#numPeople").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'ridewalk1='+ ridewalk + '&pickuploc1=' + pickuploc + '&otherpickuploc1=' + otherpickuploc + '&dropoffloc1=' + dropoffloc + '&otherdroploc1=' + otherdroploc + '&numPeople1=' + numPeople;
if(ridewalk=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
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