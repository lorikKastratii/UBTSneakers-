
document.querySelector(".login").addEventListener("click",validateLogin);
document.querySelector(".register").addEventListener("click",validateRegister);


function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


function validateLogin(){
    let email = document.querySelector("#email").value;
    let password = document.querySelector("#password").value;
    let errorMessage = document.querySelector("#loginError");
    errorMessage.style.color = "red";
    
    if(!validateEmail(email)){
        event.preventDefault();
        errorMessage.textContent = "You must enter a valid email address !";
    }else if(password.trim() == "" || password == null){
        event.preventDefault();
        errorMessage.textContent = "Password cannot be null !";
    }else if(password.length < 6){
        event.preventDefault();
        errorMessage.textContent = "Password should be minimum 6 characters !";
    }
}


function validateRegister(){
    let firstname = document.querySelector("#firstnameRegister").value;
    let lastname = document.querySelector("#lastnameRegister").value;
    let email = document.querySelector("#emailRegister").value;
    let password = document.querySelector("#passwordRegister").value;
    let errorMessage = document.querySelector("#errorRegister");
    errorMessage.style.color = "red";

    if(firstname.trim() == "" || firstname == null){
        event.preventDefault();
        errorMessage.textContent = "Firstname cannot be null !";    
    }else if(lastname.trim() == "" || lastname == null){
        event.preventDefault();
        errorMessage.textContent = "Lastname cannot be null !";
    }else if(!validateEmail(email)){
        event.preventDefault();
        errorMessage.textContent = "You must enter a valid email address !";
    }else if(password.trim() == "" || password == null){
        event.preventDefault();
        errorMessage.textContent = "Password cannot be null !";
    }else if(password.length < 6){
        event.preventDefault();
        errorMessage.textContent = "Password should be minimum 6 characters !";
    }
}



