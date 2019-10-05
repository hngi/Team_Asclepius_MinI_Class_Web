

function validateEmail(email) {
  let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
    
    const full_name = document.getElementById('full_name').value;
    const password = document.getElementById('password').value;
    const confirm_password = document.getElementById('confirm_password').value;
  const select = document.getElementById('role');
    const email = document.getElementById('email').value;
    const error_message = document.getElementById('error_message');
    error_message.style.padding = "10px";
    let text;
   if (full_name.length < 4) {
       text = "Fullname can\'t be less than 4 characters";
       error_message.textContent = text;
       return false;
   }
   if(!validateEmail(email)){
        text = "Please Enter valid Email";
        error_message.textContent = text;
        return false;
   }
   if (password.length < 8 ) {
       text = "Password can\'t be less than 8 characters";
       error_message.textContent = text;
       return false;
   } else if(confirm_password !== password){
      text = "Passwords Do Not Match";
       error_message.textContent = text;
       return false; 
   }
  if (select.selectedIndex == "") {
    text = " Please select a role";
    error_message.textContent = text;
    return false;
  }
  
}

function resetPassword() {


  const email = document.getElementById('email').value;
  const errorForResetPassword = document.getElementById('errorForResetPassword');
  errorForResetPassword.style.padding = "10px";
  let text;

  if (!validateEmail(email)) {
    text = "Please Enter valid Email";
    errorForResetPassword.textContent = text;
    return false;
  }

}

function CreateNewPassword() {

  
  const new_password = document.getElementById('new_password').value;
  const confirm_new_password = document.getElementById('confirm_new_password').value;
  const errorCreateNewPassword = document.getElementById('errorCreateNewPassword');
  errorCreateNewPassword.style.padding = "10px";
  let text;

  if (new_password.length < 8) {
      text = "Password can\'t be less than 8 character";
      errorCreateNewPassword.textContent = text;
      return false;
  } else if (confirm_new_password !== new_password) {
      text = "Password Not Match";
      errorCreateNewPassword.textContent = text;
      return false;
  }


}


    



