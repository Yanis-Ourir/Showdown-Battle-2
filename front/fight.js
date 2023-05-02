let warriorCard = document.getElementById('warrior-card');
let wizardCard = document.getElementById('wizard-card');
let archerCard = document.getElementById('archer-card');


warriorCard.addEventListener('click', () => {
    window.location.href = "http://localhost:90/TP-POO/front/fight.php?class=warrior";
})

wizardCard.addEventListener('click', () => {
    window.location.href = "http://localhost:90/TP-POO/front/fight.php?class=wizard";
})

archerCard.addEventListener('click', () => {
    window.location.href = "http://localhost:90/TP-POO/front/fight.php?class=archer";
})