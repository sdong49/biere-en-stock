          
let modal;
let hidebg;

modal = document.getElementById("modal");
hidebg = document.getElementById("hidebg");

function openModal(){
    modal.style.display = "block";
    hidebg.style.display = "block";
};
function closeModal(){
    modal.style.display="none";
    hidebg.style.display="none";
}

