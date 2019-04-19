var const arrows = document.querySelectorAll(".next"),
// button = document.getElementsByClassName('transition-example--button')[0],
    message = document.getElementsByClassName('dom')[0];
    
button.addEventListener('click', function () {
    // On vérifie l'état de notre composant.
    // Renvoi `true` s'il est ouvert.
    // Renvoi `false` s'il est fermé.
    var isDisplayed = message.classList.contains('is-displayed');
    // Remise à zéro des transitions.
    message.classList.remove('display-enter-active');
    message.classList.remove('display-leave-active');
    // On applique la transition souhaitée.
    // On inverse `isDisplayed` pour gérer la
    // transition entrante d'abord,
    if (!isDisplayed) {
        // en appliquant `…-enter-active` pour la transition entrante
        message.classList.add('display-enter-active');
        // et en appliquant l'état `.is-displayed`.
        message.classList.add('is-displayed');
    // Puis la transition sortante ensuite,
    } else {
        // en appliquant `…-leave-active` pour la transition sortante
        message.classList.add('display-leave-active');
        // et en appliquant l'état standard.
        message.classList.remove('is-displayed');
    }
});


// PERSO

//  var form1 = document.getElementById('form1');
//  var form2 = document.getElementById('form2');
//  var form3 = document.getElementById('form3');
//  var form4 = document.getElementById('form4');
//  var form5 = document.getElementById('form5');
//  var submit = document.getElementById(submit);
//  var counter = 0 ;

// function animatedForm(){
//     const arrows = document.querySelectorAll(".fa-arrow-down");

//     arrows.forEach(arrow => {
//         arrow.addEventListener('click', () => {
 
//             // on recupere l'input a afficher

//             if(counter == 0){
//                 counter += 1;
//                 parent = form1;
//                 nextForm = form2;
//                 nextSlide(parent, nextForm);
//             }else if(counter == 1){
//                 counter += 1;
//                 parent = form2;
//                 nextForm = form3;
//                 nextSlide(parent, nextForm);
//             }else if(counter == 2){
//                 counter += 1;
//                 parent = form3;
//                 nextForm = form4;
//                 nextSlide(parent, nextForm);
//             }else if(counter == 3){
//                 counter += 1;
//                 parent = form4;
//                 nextForm = form5;
//                 nextSlide(parent, nextForm);
//             }

//             parent.addEventListener('animationend', () => {
//                     parent.style.animation = "";
//                 })
//         })
//     })
// }

// function nextSlide(parent, nextForm){
//     parent.classList.add('inactive');
//     parent.classList.remove('active');
//     nextForm.classList.add("active");

// }

// animatedForm();
