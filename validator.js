let name = document.getElementsByClassName('name')[0];
let price = document.getElementsByClassName('price')[0];
let quantity = document.getElementsByClassName('quantity')[0];
let pic = document.getElementsByClassName('pic')[0];
let acceptBtn = document.getElementsByClassName('acceptBtn')[0];
let form = document.getElementsByClassName('form')[0];

let errorName = document.getElementsByClassName('errorName')[0];
let errorPrice = document.getElementsByClassName('errorPrice')[0];
let errorQuantity = document.getElementsByClassName('errorQuantity')[0];
let errorPic = document.getElementsByClassName('errorPic')[0];

function validator(){
    if(name.value == "" || name.value.length > 60){
        event.preventDefault();
        
        name.focus();
        
        errorName.style.color = 'red';
        errorName.textContent = 'Поле не может быть пустым, не более 60 символов';
        errorName.style.fontStyle = "italic";
        errorName.style.fontSize = 14;
        form.insertBefore(errorName, name.nextSibling);
    }
    else{
        errorName.textContent = '';
    }
    
    if(price.value == "" || price.value < 0){
        event.preventDefault();
        
        price.focus();
        
        errorPrice.style.color = 'red';
        errorPrice.textContent = 'Не может быть пустым. Не меньше 0';
        errorPrice.style.fontStyle = "italic";
        errorPrice.style.fontSize = 14;
        form.insertBefore(errorPrice, price.nextSibling);
    }
    else{
        errorPrice.textContent = '';
    }
    
    if(quantity.value == "" || quantity.value < 0){
        event.preventDefault();
        
        quantity.focus();
        
        errorQuantity.style.color = 'red';
        errorQuantity.textContent = 'Не может быть пустым. Не меньше 0';
        errorQuantity.style.fontStyle = "italic";
        errorQuantity.style.fontSize = 14;
        form.insertBefore(errorQuantity, quantity.nextSibling);
    }
    else{
        errorQuantity.textContent = '';
    }
    
    if(pic.value == "" || pic.value.length > 60){
        event.preventDefault();
        
        pic.focus();
        
        errorPic.style.color = 'red';
        errorPic.textContent = 'Поле не может быть пустым, не более 60 символов';
        errorPic.style.fontStyle = "italic";
        errorPic.style.fontSize = 14;
        form.insertBefore(errorPic, pic.nextSibling);
    }
    else{
        errorPic.textContent = '';
    }
}

acceptBtn.addEventListener("click", validator);
