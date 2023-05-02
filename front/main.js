let showClass = document.querySelector('#showClass');
let chooseClass = document.getElementById('class');


console.log(chooseClass.value);

chooseClass.addEventListener('change', () => {
    if (chooseClass.value === 'Warrior') {
        showClass.innerHTML = `<img src="../assets/warrior.gif" alt="warrior" class="sprite">`;
    } else if (chooseClass.value === 'Wizard') {
        showClass.innerHTML = `<img src = "../assets/wizard.gif" alt="wizard" class="sprite-vivi">`;
    } else {
        showClass.innerHTML = `<img src = "../assets/archer.gif" alt="archer" class="sprite">`;
    }
})



