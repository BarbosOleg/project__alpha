// regular expression constants
const login_regex = /^([A-Za-z0-9_\-.]{2,15})$/;
const mail_regex = /^([A-Za-z0-9_\-.+])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,})$/;
//=============================================================
//
const login = document.getElementById('register__login');
const password = document.getElementById('register__password');
const confirm_password = document.getElementById('register__confirm__password');
const email = document.getElementById('register__email');
const error_blok = document.getElementsByClassName('error_msg');
const red_alert = document.querySelectorAll('input');

window.addEventListener('submit', (event) =>{
    const login_value = login.value.trim();
    const password_value = password.value.trim();
    const confirm_password_value = confirm_password.value;
    const email_value = email.value;

    if(!login_regex.test(login_value))
    {
        event.preventDefault();
        red_alert[0].style.borderBottomColor = "red";
        error_blok[0].style.display = "block";
    }else{
        error_blok[0].style.display = "none";
        red_alert[0].style.borderBottomColor = "#dadada";
    } 
        

    if(password_value === '' || password_value == null)
    {
        event.preventDefault();
        red_alert[1].style.borderBottomColor = "red";
        error_blok[1].style.display = "block";
    }else{
        error_blok[1].style.display = "none";
        red_alert[1].style.borderBottomColor = "#dadada";
    }

    if(confirm_password_value != password_value || confirm_password_value === '')
    {
        event.preventDefault();
        red_alert[2].style.borderBottomColor = "red";
        error_blok[2].style.display = "block";
    }else{
        error_blok[2].style.display = "none";
        red_alert[2].style.borderBottomColor = "#dadada";
    }

    if(!mail_regex.test(email_value))
    {
        event.preventDefault();
        red_alert[3].style.borderBottomColor = "red";
        error_blok[3].style.display = "block";
    }else{
        error_blok[3].style.display = "none";
        red_alert[3].style.borderBottomColor = "#dadada";
    }
});
