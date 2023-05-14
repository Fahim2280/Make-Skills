function validateForm() {
  var name = document.getElementById("name").value;
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var gender = document.getElementById("gender").value;
  var phone = document.getElementById("phone").value;
  var address = document.getElementById("address").value;
  var dob = document.getElementById("dob").value;
  var password = document.getElementById("password").value;

  // Perform validation for each field
  if (name.trim() === "") {
    alert("Please enter your name.");
    return false;
  }

  if (username.trim() === "") {
    alert("Please enter a username.");
    return false;
  }

  if (email.trim() === "") {
    alert("Please enter your email.");
    return false;
  }

  if (gender === "") {
    alert("Please select your gender.");
    return false;
  }

  if (phone.trim() === "") {
    alert("Please enter your phone number.");
    return false;
  }

  if (address.trim() === "") {
    alert("Please enter your address.");
    return false;
  }

  if (dob.trim() === "") {
    alert("Please enter your date of birth.");
    return false;
  }

  if (password.trim() === "") {
    alert("Please enter a password.");
    return false;
  }

  // Additional validation logic if needed

  return true; // Form is valid, allow submission
}


function SvalidateForm() {
  var login = document.getElementById("login").value;
  var password = document.getElementById("password").value;

  if (login.trim() === "") {
    alert("Please enter your username or email.");
    return false;
  }

  if (password.trim() === "") {
    alert("Please enter your password.");
    return false;
  }

  return true;
}