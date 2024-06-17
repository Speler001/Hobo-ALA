function sbut() {
    let sbutton = document.getElementById('sbutton');
    let pass1 = document.getElementById('pass1').value;
    let pass2 = document.getElementById('pass2').value;
    let errorElement = document.getElementById('error');
    if(pass1.length < 8){
        errorElement.textContent = "Het wachtwoord is te kort!"; 
        sbutton.disabled = true;
        sbutton.style.background = "rgb(0, 46, 0)";
        errorElement.classList.add('Error');
    } else if(pass1 === "" || pass2 === "") {
        sbutton.disabled = true;
        sbutton.style.background = "rgb(0, 46, 0)";
        errorElement.textContent = "Password field is empty";
        errorElement.classList.add('Error');
    } else if (pass1 === pass2) {
        sbutton.disabled = false;
        sbutton.style.background = "green"
        errorElement.textContent = "";
        errorElement.classList.remove('Error');
    } else {
        sbutton.disabled = true;
        sbutton.style.background = "rgb(0, 46, 0)";
        errorElement.textContent = "De wachtwoorden komen niet overeen!";
        errorElement.classList.add('Error');
    }
}

function displayflex(){
    var seriedisplay = document.getElementById('seriepop');
if(0 == 0){
    seriedisplay.classList.add('e');    
}
};

function ddisplayflex(){
    var seriedisplay = document.getElementById('seriepop');
if(0 == 0){
    seriedisplay.classList.remove('e');
}
};



