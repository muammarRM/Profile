const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');
const navImg = document.querySelector('.logo img');

menuToggle.addEventListener('click', function() {
    nav.classList.toggle('slide');
    navImg.classList.toggle('logotype');
});

// Welcome Massge
function WelcomeMsg(){
    if(!sessionStorage.getItem('isMessageShown')){
        alert("WEBSITE PRIBADI MUAMMAR RAMADHANI MAULIZIDAN");

        var nama = prompt("Masukkan nama anda: ");
        alert("Halo, "+ nama + "!" + " Selamat datang di website pribadi saya!");
        
        sessionStorage.setItem('isMessageShown', 'true');
    }
}
function LearnMore(){
    document.getElementById("LearnMore").innerHTML = document.getElementById("penjelasan").innerHTML;

    var buttonLearnMore = document.getElementById("buttonLearnMore");
    buttonLearnMore.remove();
    document.getElementById("LearnMore").classList.add("penjelasan");
}
window.onload = WelcomeMsg;