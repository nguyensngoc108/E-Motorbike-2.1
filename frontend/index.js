// const wrapper = document.querySelector(".aspect-ratio-169 img");
// const menuItems1 = document.querySelectorAll(".menu");



// menuItems1.forEach((item,index) => {
//     item.addEventListener("click", () => {
//         wrapper.style.transform = `translateX(${-100 * index}vw)`;
    
//     })
// })

// var MenuItems = document.getElementById("MenuItems");
// MenuItems.style.maxHeight = "0px";
// function menutoggle(){
//     if(MenuItems.style.maxHeight == "0px"){
//         MenuItems.style.maxHeight = "200px";
//     }
//     else{
//         MenuItems.style.maxHeight = "0px";
//     }
// } 

const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector('.aspect-ratio-169')
const dotItem = document.querySelectorAll(".dot")
const header = document.querySelector(".header")
let imgNum = imgPosition.length;
let index = 0;

     
imgPosition.forEach(function(image,index){
        image.style.left = index*100+"%"
        dotItem[index].addEventListener("click" ,function(){
                slider(index);
                // imgContainer.style.left = "-" + index*100 +"%"
        }
        )
})
function imgSlide(){
        index++;
        if(index >= imgNum){
                index = 0;
        }
        // function slider(index){
                imgContainer.style.left = "-" + index*100 +"%"
        // }
}

function slider(index){
        imgContainer.style.left = "-" + index*100 +"%"
        const dotAct = document.querySelector('.active');
        dotAct.classList.remove("active")
        dotItem[index].classList.add("active")

}
setInterval(imgSlide,5000);


// window.addEventListener("scroll",function(){
//         x = window.scrollY;
//         if(x>100){
//                 header.classList.add("sticky");
//         }
//         else{
//                 header.remove.add("sticky");
//         }

// })



// Product


