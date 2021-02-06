		function validation(){
	

  var name = document.getElementById("name").value;
  var address = document.getElementById("address").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var officerid = document.getElementById("officerid").value;
  var state = document.getElementById("state").value;
  var district = document.getElementById("district").value;


  var namecheck = /^[a-zA-Z]+(([',. ][a-zA-Z ])?[a-zA-Z]*)*$/;

  var addresscheck = /^[a-zA-Z0-9]+(([',. /][a-zA-Z0-9 ])?[a-zA-Z0-9/.,]*)*$/;

 
  var statenamecheck = /^[A-Za-z]{3,30}$/;
  var districtnamecheck = /^[A-Za-z]{3,30}$/;
  //user name should conatin upper letter , lower letter , number , underscore or any combination of these
  var officeridcheck = /^[A-Za-z_0-9]{3,30}$/;	
  
 

  // indian number starts with 6,7,8,9 and contains 10 number

  var numbercheck = /^[6789][0-9]{9}$/;


  var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    if(officeridcheck.test(officerid)){
  	document.getElementById("officeriderror").innerHTML = " ";
  }
  else{
  	document.getElementById("officeriderror").innerHTML = "** OfficerId is Can not be Empty ";
  	document.getElementById("officerid").focus();
  	return false;

  }


      if(namecheck.test(name)){
  	document.getElementById("nameerror").innerHTML = " ";
  }
  else{
  	document.getElementById("nameerror").innerHTML = "** Name Should contains at least 3 character ";
  	document.getElementById("name").focus();
  	return false;

  }

     if(numbercheck.test(phone)){
  	document.getElementById("phonenumerror").innerHTML = " ";
  }


  else{
  	document.getElementById("phonenumerror").innerHTML = "** Phone number is Invalid ";
  	document.getElementById("phone").focus();
  	return false;

  }

      if(emailcheck.test(email)){
  	document.getElementById("emailerror").innerHTML = " ";
  }


  else{
  	document.getElementById("emailerror").innerHTML = "** Email address is Invalid ";
  	document.getElementById("email").focus();
  	return false;

  }


    if(addresscheck.test(address)){
  	document.getElementById("addresserror").innerHTML = " ";
  }
  else{
  	document.getElementById("addresserror").innerHTML = "** Address field is Invalid ";
  	document.getElementById("address").focus();
  	return false;

  }







  if(statenamecheck.test(state)){
  	document.getElementById("statenameerror").innerHTML = " ";
  	console.log("here");
  }
  else{
  	document.getElementById("statenameerror").innerHTML = "** State name is Invalid ";
  	document.getElementById("state").focus();
  	console.log("not here");
  	return false;

  }
      if(districtnamecheck.test(district)){
  	document.getElementById("districtnameerror").innerHTML = " ";
  }
  else{
  	document.getElementById("districtnameerror").innerHTML = "** District name is Invalid ";
  	document.getElementById("district").focus();
  	return false;

  }

}

	