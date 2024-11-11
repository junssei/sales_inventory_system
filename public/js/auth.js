// Password Visibility & Limit
var input_password = document.getElementById("mypassword"),    
    input_username = document.getElementById("myusername"),
    input_firstNAME = document.getElementById("myfirstname"),
    input_lastNAME = document.getElementById("mylastname");

input_password.setAttribute("minlength", "8");
input_password.setAttribute("maxlength", "25");
input_username.setAttribute("minlength", "3");
input_username.setAttribute("maxlength", "25");
input_firstNAME.setAttribute("minlength", "3");
input_firstNAME.setAttribute("maxlength", "14");
input_lastNAME.setAttribute("minlength", "3");
input_lastNAME.setAttribute("maxlength", "14");

function passwordVisibility() {
    var x = document.getElementById("mypassword");
    var y = document.getElementById("mypasswordicon");
    if (x.type === "password") {
      x.type = "text";
      y.src = "_img/icon/visibility.png";
    } else {
      x.type = "password";
      y.src ="_img/icon/visibilityoff.png"; 
    }
  }

// Popup
