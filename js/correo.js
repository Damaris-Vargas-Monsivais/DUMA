popupWhatsApp = () => {
  
  let btnClosePopup = document.querySelector('.closePopup');
  let btnOpenPopup1 = document.querySelector('.gmail-button1');
  let btnOpenPopup = document.querySelector('.gmail-button');
  let popup = document.querySelector('.popup-gmail');
  

  btnClosePopup.addEventListener("click",  () => {
    popup.classList.toggle('is-active-gmail-popup')
  })
  btnOpenPopup1.addEventListener("click",  () => {
    popup.classList.toggle('is-active-gmail-popup')
     popup.style.animation = "fadeIn .6s 0.0s both";
  })

  btnOpenPopup.addEventListener("click",  () => {
    popup.classList.toggle('is-active-gmail-popup')
     popup.style.animation = "fadeIn .6s 0.0s both";
  })
  
}

popupWhatsApp();