
 var form1 = document.getElementById('form1');
 var form2 = document.getElementById('form2');
 var form3 = document.getElementById('form3');
 var form4 = document.getElementById('form4');
 var form5 = document.getElementById('form5');
 var submit = document.getElementById(submit);
 var counter = 0 ;

function animatedForm(){
    const arrows = document.querySelectorAll(".fa-arrow-down");

    arrows.forEach(arrow => {
        arrow.addEventListener('click', () => {
 
            // on recupere l'input a afficher

            if(counter == 0){
                counter += 1;
                parent = form1;
                nextForm = form2;
                nextSlide(parent, nextForm);
            }else if(counter == 1){
                counter += 1;
                parent = form2;
                nextForm = form3;
                nextSlide(parent, nextForm);
            }else if(counter == 2){
                counter += 1;
                parent = form3;
                nextForm = form4;
                nextSlide(parent, nextForm);
            }else if(counter == 3){
                counter += 1;
                parent = form4;
                nextForm = form5;
                nextSlide(parent, nextForm);
            }

            parent.addEventListener('animationend', () => {
                    parent.style.animation = "";
                })
        })
    })
}

function nextSlide(parent, nextForm){
    parent.classList.add('inactive');
    parent.classList.remove('active');
    nextForm.classList.add("active");

}

animatedForm();
