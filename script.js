//  popUp

const openBtn = document.getElementById("openModel");
const closeBtn = document.getElementById("closeModel");
const model = document.getElementById("model");

openBtn.addEventListener("click", () => {
    model.classList.add("open");
});

closeBtn.addEventListener("click", () => {
    model.classList.remove("open");
});

// nav background
let header = document.querySelector("header");

window.addEventListener("scroll", () => {
    header.classList.toggler("shadow",vwindow.scrolly > 0)
})

// Filter
$(document).ready(function () {
    $(".filter-item").click(function () {
        const value = $(this).attr("data-filter");
        if(value == "all"){
            $(".post-box").show("1000")
        } else{
            $(".post-box")
            .not("." + value)
            .hide(1000);
            $(".post-box")
            .filter("." + value)
            .show(1000)
        }
    });
    $(".filter-item").click(function () {
        $(this).addClass("active-filter").siblings().removeClass("active-filter")
    });
});

/*
let popup = document.getElementById(elementld,"model");

function openModel(){
   popup.classList.add('open-popup')
}

function closeModel(){
    popup.classList.remove(tokens, 'open-popup')
}
    */