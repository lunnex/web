let log = document.getElementsByClassName('log')[0];
let pass1 = document.getElementsByClassName('pass1')[0];
let pass2 = document.getElementsByClassName('pass2')[0];
let form = document.getElementsByClassName('form')[0];

let acceptBtn = document.getElementsByClassName('reg')[0];

let errorLog = document.getElementsByClassName('errorLog')[0];
let errorPass = document.getElementsByClassName('errorPass')[0];


function validator(){
    if(log.value == "" || log.value.length < 3){
        event.preventDefault();
        
        log.focus();
        
        errorLog.style.color = 'red';
        errorLog.textContent = 'Поле не может быть пустым, не менее 3 символов';
        errorLog.style.fontStyle = "italic";
        errorLog.style.fontSize = 14;
        form.insertBefore(errorLog, log.nextSibling);
    }
    else{
        errorLog.textContent = '';
    }
    
    if(pass1.value == "" || pass2.value == "" || pass1.value != pass2.value || pass.value.length < 6){
        event.preventDefault();
        
        pass1.focus();
        
        errorPass.style.color = 'red';
        errorPass.textContent = 'Поле не может быть пустым. Пароли должны совпадать. Не менее 6 симовлов';
        errorPass.style.fontStyle = "italic";
        errorPass.style.fontSize = 14;
        form.insertBefore(errorPass, pass2.nextSibling);
    }
    else{
        errorPrice.textContent = '';
    }
    
    
}

acceptBtn.addEventListener("click", validator);
