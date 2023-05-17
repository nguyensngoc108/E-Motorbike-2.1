const wrapper = document.querySelector(".sliderWrapper");
const menuItems1 = document.querySelectorAll(".menuItem");



menuItems1.forEach((item,index) => {
    item.addEventListener("click", () => {
        wrapper.style.transform = `translateX(${-100 * index}vw)`;
    
    })
})

var MenuItems = document.getElementById("MenuItems");
MenuItems.style.maxHeight = "0px";
function menutoggle(){
    if(MenuItems.style.maxHeight == "0px"){
        MenuItems.style.maxHeight = "200px";
    }
    else{
        MenuItems.style.maxHeight = "0px";
    }
} 

const login = document.getElementById("Login");
login.addEventListener("click", () => {
    fetch()
})