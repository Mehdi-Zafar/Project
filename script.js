
// function func(event){
//     console.log("button pressed!");
// }

document.addEventListener('DOMContentLoaded', function (event) {
    function func(){
        console.log("button pressed!");
    }
    document.querySelector(".btn").addEventListener('click',func);
});



// document.querySelector("button").addEventListener("click",func);

// document.querySelector("button").onclick = func;