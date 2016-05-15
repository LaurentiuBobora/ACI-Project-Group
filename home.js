( function( $ ) {
$( document ).ready(function() {
$('#cssmenu').prepend('<div id="bg-one"></div><div id="bg-two"></div><div id="bg-three"></div><div id="bg-four"></div>');
});
} )( jQuery );

 function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


function jsFunction(){
  var myselect = document.getElementById("role_id");
  var cv = document.getElementById("file");
  var lvl = ['1', '2'];
  if (lvl.indexOf(myselect.options[myselect.selectedIndex].value) > -1 )
  {
    cv.style.display = 'none';
  }
  else
  {
    cv.style.display = 'inline';
  }
}