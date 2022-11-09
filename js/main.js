const dMenuToggle = document.querySelector(".dropdown-menu-toggle");
const menu = document.querySelector(".dropdown-menu");
const choiceLink = document.querySelector(".dropdown-list-item-link");
const iconToggle = document.querySelector(".dropdown-menu-line");
const iconToggleTwo = document.querySelector(".dropdown-menu-line-2");
const iconToggleThree = document.querySelector(".dropdown-menu-line-3");
const iconClose = document.querySelector(".close-icon");

const openMenu = (event) => {
  menu.classList.add("is-open");
  dMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden;"
  iconToggle.style.display = "none";
  iconToggleTwo.style.display = "none";
  iconToggleThree.style.display = "none";
  iconClose.style.display = "block";
}

const closeMenu = (event) => {
  menu.classList.remove("is-open");
  dMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = "hidden;"
  iconToggle.style.display = "block";
  iconToggleTwo.style.display = "block";
  iconToggleThree.style.display = "block";
  iconClose.style.display = "none";
 
}

dMenuToggle.addEventListener('click', (event) => {
  event.preventDefault();
  if(menu.classList.contains("is-open")) {
    closeMenu();
  } else {
    openMenu();  
  }
});


choiceLink.addEventListener('click', (event) => {
  event.preventDefault();
  closeMenu();
});


let currentModal;  //текущее модальное окно
let modalDialog;   //белое диалоговое окно

const modalButtons = document.querySelectorAll("[data-toggle=modal]");
modalButtons.forEach((button) => {
  /*клик по переключателю*/
  button.addEventListener("click", (event) => {  
    event.preventDefault();
    /*определяем текущее открытое окно*/ 
    currentModal = document.querySelector(button.dataset.target);
    /*открываем текущее окно*/
    currentModal.classList.toggle("modal-is-open");
    /*назначаем диалоговое окно*/ 
    modalDialog = currentModal.querySelector(".modal-dialog");
    /*отслеживаем клик по окну и по пустым областям*/ 
    currentModal.addEventListener("click", (event) => {
      /*если клик в пустую область (не диалог)*/ 
      if(!event.composedPath().includes(modalDialog)) {
        /*закрываем окно*/ 
        currentModal.classList.remove("modal-is-open");
      }
    });
  });
});

