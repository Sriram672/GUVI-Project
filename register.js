function validateForm() {
    var username = document.forms["myForm"]["username"].value;
    var email = document.forms["myForm"]["email"].value;
    
    var password = document.forms["myForm"]["password"].value;
    var birthday = document.forms["myForm"]["birthday"].value;
    var tel = document.forms["myForm"]["tel"].value;

  
    if (username == "") {
      alert("Name must be filled out");
      return false;
    }
  
    if (email == "") {
      alert("email must be filled out");
      return false;
    }
  
    if (password== "") {
      alert("password must be filled out");
      return false;
    }
  
    if (birthday == "") {
      alert("DOB Number must be filled out");
      return false;
    }
    if (tel== "") {
        alert("Mobile Number must be filled out");
        return false;
      }
  
    // Additional validation for mobile number
    var mobileRegex = /^\d{10}$/;
    if (!mobileRegex.test(tel)) {
      alert("Mobile Number must be a valid 10-digit number");
      return false;
    }
  
    return true;
  }
  