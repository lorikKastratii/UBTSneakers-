

//AIR FORCE 1 BLACK
function airForce1ColorBlack(){
    document.getElementById("airForcePhoto").src='images/airForce1Black.jpg';
    document.getElementById("airForceLink").innerHTML = "AIR FORCE 1 BLACK";
};

//AIR FORCE 1 WHITE
function airForce1ColorWhite(){
    document.getElementById("airForcePhoto").src='images/airForce1White.jpg';
    document.getElementById("airForceLink").innerHTML = "AIR FORCE 1 WHITE";
};

//JORDAN 1 RED

function airJordan1ColorRed(){
    document.getElementById("airJordan1Photo").src='images/airJordan1Red.jpg';
    document.getElementById("airJordan1Link").innerHTML = "AIR JORDAN 1 RETRO HIGH OG 'BRED TOE'";
    document.getElementById("airJordan1Price").innerHTML = "$395+";
};

//JORDAN 1 BLUE
function airJordan1ColorBlue(){
    document.getElementById("airJordan1Photo").src='images/airJordan1Blue.jpg';
    document.getElementById("airJordan1Link").innerHTML = "AIR JORDAN 1 RETRO HIGH OG BG (GS)";
    document.getElementById("airJordan1Price").innerHTML = "$325+";
};

//JORDAN 3 WHITE
function airJordan3ColorWhite(){
    document.getElementById("airJordan3Photo").src='images/airJordan3White.jpg';
    document.getElementById("airJordan3Link").innerHTML = "AIR JORDAN 3 RETRO 'TRUE BLUE'";
    
};

//JORDAN 3 BLACK
function airJordan3ColorBlack(){
    document.getElementById("airJordan3Photo").src='images/airJordan3Black.jpg';
    document.getElementById("airJordan3Link").innerHTML = "AIR JORDAN 3 RETRO 'SPORT BLUE'";
};

//JORDAN 4 BLACK
function airJordan4Black(){
    document.getElementById("airJordan4Photo").src='images/airJordan4Black.jpg';
    document.getElementById("airJordan4Link").innerHTML = "AIR JORDAN 4 RETRO 'ALTERNATE'";
    document.getElementById("airJordan4Price").innerHTML = "$240+";
}

//JORDAN 4 WHITE
function airJordan4White(){
    document.getElementById("airJordan4Photo").src='images/airJordan4White.jpg';
    document.getElementById("airJordan4Link").innerHTML = "AIR JORDAN 4 RETRO 'MOTORSPORT'";
    document.getElementById("airJordan4Price").innerHTML = "$250+";
}

//AIR YEEZY BLACK
function airYeezyBlack(){
    document.getElementById("airYeezyPhoto").src='images/airYeezyBlack.jpg';
    document.getElementById("airYeezyLink").innerHTML = "AIR YEEZY 2 NRG<br><br>";
    document.getElementById("airYeezyPrice").innerHTML = "$7500+";
}

//AIR YEEZY RED
function airYeezyRed(){
    document.getElementById("airYeezyPhoto").src='images/airYeezyRed.jpg';
    document.getElementById("airYeezyLink").innerHTML = "AIR YEEZY 2 SP 'RED OCTOBER'";
    document.getElementById("airYeezyPrice").innerHTML = "$25170+";
}

//JORDAN 11 WHITE
function airJordan11White(){
    document.getElementById("airJordan11Photo").src='images/airJordan11White.jpg';
    document.getElementById("airJordan11Link").innerHTML = "AIR JORDAN 11 RETRO 'CONCORD'";
    document.getElementById("airJordan11Price").innerHTML = "$340+";
}

//JORDAN 11 BLACK
function airJordan11Black(){
    document.getElementById("airJordan11Photo").src='images/airJordan11Black.jpg';
    document.getElementById("airJordan11Link").innerHTML = "AIR JORDAN 11 RETRO 'BRED 2019'";
    document.getElementById("airJordan11Price").innerHTML = "$225+";
}

//CONVERSE WHITE
 function converseWhite(){
    document.getElementById("conversePhoto").src='images/converseWhite.jpg';
    document.getElementById("converseLink").innerHTML = "ALL-STAR 70S HI 'MILK'";
    document.getElementById("conversePrice").innerHTML = "$180+";
}
//CONVERSE BLACK
function converseBlack(){
    document.getElementById("conversePhoto").src='images/converseBlack.jpg';
    document.getElementById("converseLink").innerHTML = "ALL-STAR 70S HI 'PLAY'";
    document.getElementById("conversePrice").innerHTML = "$210+";
    
}

function artificialGrassDiv(){
        document.getElementById("mainMenu").style.display = "none";
        document.getElementById("indoorDiv").style.display = "none";
        document.getElementById("softGroundDiv").style.display = "none";
        document.getElementById("artificialGrassDiv").style.display = "flex";
}

function mainMenuDiv(){
        document.getElementById("artificialGrassDiv").style.display = "none";
        document.getElementById("indoorDiv").style.display = "none";
        document.getElementById("softGroundDiv").style.display = "none";
        document.getElementById("mainMenu").style.display = "flex";
}

function indoorDiv(){
    document.getElementById("artificialGrassDiv").style.display = "none";
    document.getElementById("softGroundDiv").style.display = "none";
    document.getElementById("mainMenu").style.display = "none";
    document.getElementById("indoorDiv").style.display = "flex";
}

function softGroundDiv(){
    document.getElementById("artificialGrassDiv").style.display = "none";
    document.getElementById("mainMenu").style.display = "none";
    document.getElementById("indoorDiv").style.display = "none";
    document.getElementById("softGroundDiv").style.display = "flex";
}



function registerForm(){
    document.getElementById("registerForm").style.display="block";
    document.getElementById("loginForm").style.display="none";
}

function loginForm(){
    document.getElementById("loginForm").style.display="block";
    document.getElementById("registerForm").style.display="none";
}


//LOGIN FORM VALIDATION

function validateLogin(){

    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var errorElement = document.getElementById('error');           
    var messages;


        if (username.value.trim() === '' || username.value == null){
            event.preventDefault();
            errorElement.style.color = "red";
            messages = ("Username is required");

        }

        else if (password.value.trim() === '' || password.value == null){
            errorElement.style.color = "red";
            messages = ("Password is required");
        }

         else if (password.value.length <= 6){
            errorElement.style.color = "red";
            messages =("Password must be longer than 6 characters");
        }

        else {
            errorElement.style.color="green";
            messages = "Login suuccesful !";
        }
            errorElement.innerText = messages;            
}



//email validation            
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
// REGISTER FORM VALIDATION

function validateRegister() {
    var username = document.getElementById('usernameRegister');
    var email = document.getElementById("emailRegister");
    var password = document.getElementById("passwordRegister");
    var errorElement = document.getElementById("errorRegister");
    var messages;

    
    if (username.value.trim() === '' || username.value == null){
        errorElement.style.color = "red";
        messages = ("Username is required");
    }
    else if (!validateEmail(email.value)){
        errorElement.style.color = "red";
        messages = ("You have typed an invalid email address");
    }

    else if (password.value.trim() === '' || password.value == null){
        messages = ("Password is required");
        errorElement.style.color = "red";
    }
    else if (password.value.length <= 6){
        errorElement.style.color = "red";
        messages =("Password must be longer than 6 characters");
    }
    else {
        errorElement.style.color = "green";
        messages = ("Registered successful !");
    }
    errorElement.innerText = messages;
  
}










