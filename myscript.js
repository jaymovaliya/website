function signupValidate(){
	var user = document.forms["signup_form"]["username"].value;
	var email = document.forms["signup_form"]["email"].value;
	var passwd = document.forms["signup_form"]["password"].value;
	if(user==null || user=="")
	{
		window.alert("Please enter username");
		document.signup_form.username.focus();
		return false;
	}
	if(email==null ||email=="")
	{
		window.alert("Please enter email");
		document.signup_form.email.focus();
		return false;
	}
	if(passwd==null || passwd=="")
	{
		window.alert("Please enter password");
		document.signup_form.password.focus();
		return false;
	}
}

function loginValidate(){
	var email = document.forms["login_form"]["email"].value;
	var passwd = document.forms["login_form"]["password"].value;
	if(email==null ||email=="")
	{
		window.alert("Please enter email");
		document.login_form.email.focus();
		return false;
	}
	if(passwd==null || passwd=="")
	{
		window.alert("Please enter password");
		document.login_form.password.focus();
		return false;
	}
}

function contactValidate(){
	var name= document.forms["contact_form"]["name"].value;
	var email = document.forms["contact_form"]["email"].value;
	var phone = document.forms["contact_form"]["phone"].value;
	var company = document.forms["contact_form"]["company"].value;
	var message = document.forms["contact_form"]["message"].value;
	if(name==null || name=="")
	{
		window.alert("Please enter name");
		document.contact_form.name.focus();
		return false;
	}
	if(email==null ||email=="")
	{
		window.alert("Please enter email");
		document.contact_form.email.focus();
		return false;
	}
	if(phone==null ||phone=="")
	{
		window.alert("Please enter phone");
		document.contact_form.phone.focus();
		return false;
	}
	if(company==null ||company=="")
	{
		window.alert("Please enter company name");
		document.contact_form.company.focus();
		return false;
	}
	if(message==null ||meaasge=="")
	{
		window.alert("Please enter message");
		document.contact_form.message.focus();
		return false;
	}
}