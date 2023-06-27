let menu = document.querySelector('.menu');
document.querySelector('.menu__burger').addEventListener('click', function(){
    menu.classList.toggle('active') 
})
let massagebox = document.querySelector('.massagebox__background-1');
document.querySelector('.massagebox__close-1').addEventListener('click', function(){
    massagebox.classList.toggle('hide')
})
let massagebox2 = document.querySelector('.massagebox__background-2');
document.querySelector('.massagebox__close-2').addEventListener('click', function(){
    massagebox2.classList.toggle('hide')
})
let sum = document.querySelector('.sum__background');
document.querySelector('.sum__close').addEventListener('click', function(){
    sum.classList.toggle('hide')
})