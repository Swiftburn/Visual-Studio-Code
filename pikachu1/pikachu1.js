//Listener attached to the page
window.addEventListener("load", init);

function init()
{
    let demoButton = document.getElementById("demo-btn");
    demoButton.addEventListener("click", changeImage);
}

function changeImage()
{
    let pokeballImg = document.getElementById("pokeball");
    pokeballImg.src = "pikachu.gif";
}