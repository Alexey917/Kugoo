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
  iconToggle.style.display = "none";
  iconToggleTwo.style.display = "none";
  iconToggleThree.style.display = "none";
  iconClose.style.display = "block";
}

const closeMenu = (event) => {
  menu.classList.remove("is-open");
  dMenuToggle.classList.remove("close-menu");
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


