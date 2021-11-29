function validateForm() {
    var letter= /^[a-z]$/;
    var fname = document.getElementById("fname").value;
    var first = letter.test(fname);
    var lname = document.getElementById("lname").value;
    var second = letter.test(fname);
    var age = document.getElementById("age").value;
    //var designation = document.getElementById("designation").value;
    //var language = document.getElementById("language").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var password = document.getElementById("password").value;
    var file = document.getElementById("file").value;
    
    
      if (fname == "" || fname.length<5 )  {
   document.getElementById("error").innerHTML="Please fill out first name";
    return false;
  }
   


 if ( lname == "" || lname.length<5) {
   document.getElementById("error").innerHTML="Please fill out last name";
    return false;
    
  }
  if ( age == "") {
   document.getElementById("error").innerHTML="Please fill out age";
    return false;
  }
  if (document.getElementById("designation1").checked == false &&  document.getElementById("designation2").checked == false &&  document.getElementById("designation3").checked == false)
  {
    document.getElementById("error").innerHTML="Please select any radio button";
    return false;
  }
  
  
  if(!res)
  {
    document.getElementById("error").innerHTML="Email format is not correct";
    return false; 
  }
  if ( password == "" || password.length<8) {
   document.getElementById("error").innerHTML="Please fill out password";
    return false;
  }
  if ( file == "") {
   document.getElementById("error").innerHTML="Please fill out file";
    return false;
  }
  else
  {
    document.getElementById("error").innerHTML= "";
    document.getElementById("ffname").innerHTML=fname;
    document.getElementById("llname").innerHTML=lname;
    document.getElementById("aage").innerHTML=age;
    document.getElementById("ddesignation").innerHTML=designation1;
    
    document.getElementById("eemail").innerHTML=email;
    document.getElementById("ppassword").innerHTML=password;
    document.getElementById("ffile").innerHTML=file;
    return false;
  }
  
  
}

