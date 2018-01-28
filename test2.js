//This function is going to check the form of the input.
function checker() {
	var name, phone, email;
	var flag1=false, flag2=false, flag3=false;
	display = false;
	name = document.getElementById("name").value;
	phone = document.getElementById("phone").value;
	email = document.getElementById("mail").value;
	if (!name) {
		alert("You must enter a name!")
		flag1 = false;
	} else {
		flag1 = true;
	}
	//regex for phone and email.
	if (!phone
			.match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/g)) {
		alert("You phone number is not valid!");
		flag2 = false;
	} else {
		flag2 = true;
	}
	if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g)) {
		alert("You email address is not valid");
		flag3 = false;
	} else {
		flag3 = true;
	}
	if (flag1==true&&flag2==true&&flag3==true){
		display = true;
	}
}
//if the input is valid then output the information.
function displayContact()
{
	if(display==true)
		{
		document.getElementById('displayInformation').style.display ='block';
		}
	}
var display = false;