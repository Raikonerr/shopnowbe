let username = document.getElementById('username');
let password = document.getElementById('password');
let form = document.querySelector('#form');


form.addEventListener("submit", e => {
    e.preventDefault();

    if(username.value == ''){
        errorMessage(username);
    }
    else{
        succesMessage(username);
    }

    if(password.value == ''){
        errorMessage(password);
    } else{
        succesMessage(password);
    }


    if(username.value !== '' && password.value !== ''){
        window.location = "../index.php";
    }
});

function errorMessage(input){
    input.classList.remove("succes");
    input.classList.add("error");
}
function succesMessage(input){
    input.classList.remove("error");
    input.classList.add("succes");
}


