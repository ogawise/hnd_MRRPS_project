const list = document.querySelector(#list);
const button = document.querySelector(#button);
button.addEventListener('click',()=>
{
    list.classList.toggle('hidden')? button.textContent ="Open" :button.textContent= "close";

});
