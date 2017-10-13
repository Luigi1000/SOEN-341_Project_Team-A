function registerValidation()
{
	var e = true;
	var email = document.getElementById('inputEmail');
	var patn = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var m = email.value.search(patn);

	if(m == -1)
	{
		alert("The email format is not correct! Please enter your email again!");
		e = false;
	}
	else
		e = true;

	var s = true;
	var pwd = document.getElementById("pwd");
	var patn2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/; // at least 8 characters with at least one Capital letter, at least one lower case letter and at least one number and at least one Special character.
	var b = pwd.value.search(patn2);

	if(b == -1 || pwd.length < 8)
	{
		alert("The password format is not correct! Please enter your password again!");
		s = false;
	}
	else
		s = true;

	var r = true;
	var pwd = document.getElementById("pwd");
	var repwd = document.getElementById("repwd");

	if(pwd.value != repwd.value )
	{
		alert("The Re-type Password doed not match the initial one! Please enter your password again!");
		r = false;
	}
	else
		r = true;

	var v = true;
	var patn = document.getElementById("username");
	var a = patn.value.search(/[a-zA-Z0-9]/);

	if(a == -1) 
	{
		alert("The nickname format is not correct! Please enter your nickname again!");
		v = false;
	}
	else
		v = true;

	if(e==true && s==true && r==true && v==true) 
	{
		return true;
	}
	else
		return false;
}

function dragMe1()
{
    var slider = document.getElementById("myRange1").value;
    var output = document.getElementById("range1");
    output.innerHTML = slider + " km"; // Display the slider value
    
}
function dragMe2()
{
    var slider = document.getElementById("myRange2").value;
    var output = document.getElementById("range2");
    output.innerHTML = slider + " CAD"; // Display the slider value
    
}