function validate(thisform)
{
	var ph = thisform.pnum.value;
	var username = thisform.username.value;
	var pass = thisform.password.value;
	var conpass  = thisform.pswrepeat.value;
	
	if(username == "")
	{
		alert("please enter the user name");
		thisform.username.focus();
		return false;
	}
	if(username.length < 5)
	{
		alert("User name must be atleast six character");
		thisform.username.focus();
		return false;
	}
	if(ph.length < 10)
	{
		alert("phone number should be atleast 10 digits");
		thisform.pnum.focus();
		return false;
	}
	if(isNaN(ph))
	{
		alert("Invalid phone number");
		thisform.pnum.focus();
		return false;
	}
	if(pass != conpass) 
	{
		alert("password mismatched! enter the correct password");
		return false;
	}     
 return true;

}