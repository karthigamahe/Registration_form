function required() 
{
  	var fname = document.getElementById("firstname").value;
  	var letterformat = /^[a-zA-Z]+$/;
    var genders = document.getElementsByName("gender");
  	var mobile =document.getElementById("mobile").value;
  	var mobilenumber = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
  	var phone = document.getElementById("phone").value;
  	var phonenumber =/^[0-9]\d{2,4}-\d{6,8}$/;
  	var email = document.getElementById("email").value;
  	var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  	var checkboxes = document.getElementsByName("checkbox");
  	var address1 = document.getElementById("address1").value;
  	var city = document.getElementById("city").value;
  	var state= document.getElementById("state").value;
  	var zipcode= document.getElementById("zipcode").value;
  	var zipcodeformat = /^[0-9]\d{5}$/;
   	if(!fname.match(letterformat))   {  
  			alert("name should be filled and must be in letters"); 
  			document.getElementById("firstname").focus();  
			return false;  
			}
	if ( ( genders[0].checked == false ) && (genders[1].checked == false ) ) {
			alert ( "Please choose your Gender: Male or Female" ); 
			return false;
			}
	if(!phone.match(phonenumber)) {
			alert("phone number must be filled and should be in a format eg.0415-224586");
			document.getElementById("phone").focus();  
                return false;
            }
	if(!mobile.match(mobilenumber)) {
			alert("Mobile number must be filled and  should be in a format eg. 999-456-7894");
			document.getElementById("mobile").focus();  
                return false;
            }
    if(!email.match(emailformat)) {
			alert("email should not be blank and  should be in a format eg. 999-456-7894");
			document.getElementById("email").focus();  
                return false;
            }
    if ( ( checkboxes[0].checked == false ) && (checkboxes[1].checked == false && (checkboxes[2].checked == false)) ) {
			alert ( "Please check any course" ); 
			return false;
			}
	 if (address1 == null || address1 == "") {
    		alert("Address should not be blank");  
			document.getElementById("address1").focus();  
			return false;  
			}
	if(!city.match(letterformat))   {  
  			alert("city name should be filled and must be in letters"); 
  			document.getElementById("city").focus();  
			return false;  
			}
	if(!state.match(letterformat))   {  
  			alert("state name should be filled and must be in letters"); 
  			document.getElementById("state").focus();  
			return false;  
			}
	if(!zipcode.match(zipcodeformat)) {
			alert("zipcode must be filled and should be in a format eg.600012");
			document.getElementById("zipcode").focus();  
                return false;
            }
}
  

