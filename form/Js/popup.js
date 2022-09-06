const openPopUp = document.getElementById('open_pop_up');
const closePopUpOne = document.getElementById('close_pop_up_one');
const closePopUpTwo = document.getElementById('close_pop_up_two');
const closePopUpThree = document.getElementById('close_pop_up_three');
const popUp = document.getElementById('popup');
const popUpTwo = document.getElementById('popUpTwo');
const popUpThree = document.getElementById('popUpthree');
const openPopUpTwo = document.getElementById('open__popup__two');
const openPopUpThree = document.getElementById('open__popup__three');

openPopUp.addEventListener('click', function(e){
    e.preventDefault();
    popUp.classList.add('popup__active');

})

openPopUpTwo.addEventListener('click', function(e){
    e.preventDefault();
    
    popUpTwo.classList.add('popup__active');
})

openPopUpThree.addEventListener('click', function(e){
    e.preventDefault();
   
    popUpThree.classList.add('popup__active');
    
})

closePopUpOne.onclick = function() {
    popUp.classList.remove('popup__active');
  };

  closePopUpOne.onclick = function() {
    popUp.classList.remove('popup__active');
  };

  closePopUpTwo.onclick = function() {
    popUpTwo.classList.remove('popup__active');
  };

  closePopUpThree.onclick = function() {
    popUpThree.classList.remove('popup__active');
  };


