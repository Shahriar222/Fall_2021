function validateForm() {
  var firstname = document.getElementById("First Name").value;
  var lastname = document.getElementById("Last Name").value;
  var age = document.getElementById("Age").value;
  var designation = document.getElementById("Designation" ).value;
  var preferredLanguage = document.getElementById("Preferred Language").value;
  var email = document.getElementById("E-mail").value;
  var password = document.getElementById("Password").value;

  if (
    firstname == "" ||
    firstname == "" ||
    age == "" ||
    designation == "" ||
    preferredlanguage == "" ||
    email == "" ||
    password == "" 
  ) {
    document.getElementById("message").innerHTML =
      "Please Enter All The Fields";
    document.getElementById("message").style.padding = "10px";
    return false;
  }
  return true;
}