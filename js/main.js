const dMenuToggle = document.querySelector(".dropdown-menu-toggle");
const menu = document.querySelector(".dropdown-menu");
const choiceLink = document.querySelectorAll("[data-toggle=dropdown]");
const iconToggle = document.querySelector(".dropdown-menu-line");
const iconToggleTwo = document.querySelector(".dropdown-menu-line-2");
const iconToggleThree = document.querySelector(".dropdown-menu-line-3");
const iconClose = document.querySelector(".close-icon");

const addButtonsLike = document.querySelectorAll("[data-toggle=add-like]");
const addButtonsShoppingCart = document.querySelectorAll("[data-toggle=add-shopping-cart]");
const shoppingCart = document.querySelector("#first");
const likeIcon = document.querySelector("#first-like");
const shoppingCartTwo =document.querySelector("#second");
const iconFillSecond = document.querySelector("#second-fill");
const iconFill = document.querySelector("#first-fill");
const iconFillTwo = document.querySelector("#first-fill-like");
const addLike = document.querySelector(".add-like"); 
const addShoppingCart = document.querySelector(".add-shopping-cart"); 

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


  choiceLink.forEach((a) => {
    a.addEventListener('click', (event) => {
      event.preventDefault();
      closeMenu();
    });
  });



/* Смена иконок при клике на первой карточке */
  const clickIconShoppingCartToggle = (event) => {
    shoppingCart.classList.add("icon-remove");
    iconFill.classList.add("icon-add");
  }

  const clickIconLikeToggle = (event) => {
    likeIcon.classList.add("icon-remove-like");
    iconFillTwo.classList.add("icon-add-like");
  }


  addButtonsLike.forEach((addLike) => {
    addLike.addEventListener('click', (event) => {
      event.preventDefault();
      clickIconLikeToggle();
    });
  });

  addButtonsShoppingCart.forEach((addShoppingCart) => {
    addShoppingCart.addEventListener('click', (event) => {
      event.preventDefault();
      clickIconShoppingCartToggle();
    });
  });


 /* Смена иконок при клике на второй карточке */ 

 const clickIconShoppingCartToggle2 = (event) => {
  shoppingCartTwo.classList.add("icon-remove-2");
  iconFillSecond.classList.add("icon-add-2");
}

const clickIconLikeToggle2 = (event) => {
  likeIcon.classList.add("icon-remove-like-2");
  iconFillTwo.classList.add("icon-add-like-2");
}

addButtonsLike.forEach((addLike) => {
  addLike.addEventListener('click', (event) => {
    event.preventDefault();
    clickIconLikeToggle2();
  });
});

addButtonsShoppingCart.forEach((addShoppingCart) => {
  addShoppingCart.addEventListener('click', (event) => {
    event.preventDefault();
    clickIconShoppingCartToggle2();
  });
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

/*ловим событие нажатия на кнопку*/ 
document.addEventListener("keyup", (event) => {
  /*проверяем, что это кнопка esc и текущее окно открыто*/ 
  if(event.key == "Escape" && currentModal.classList.contains("modal-is-open")) {
    /*закрываем текущее окно*/ 
    currentModal.classList.toggle("modal-is-open");
  }
});

const forms = document.querySelectorAll(".form");  //собираем все формы
  forms.forEach((form) => {
    const validation = new JustValidate(form, {
      errorFieldCssClass: 'is-invalid',
  }); 
  validation
  .addField('[name=userphone]', [
    {
      rule: 'required',
      errorMessage: 'Укажите номер телефона',
    },
    {
      rule: 'minLength',
      value: 18,
      errorMessage: "Некорректный номер телефона",
    },
  ])  
  .addField('[name=checkbox]', [
    {
      rule: 'required',
      errorMessage: 'Поставьте галочку',
    },
  ])  
  .onSuccess((event) => {
    const thisForm = event.target;  //определяем нашу форму
    const formData = new FormData(thisForm); //данные из нашей формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
        thisForm.reset();
        } else {
          alert("Ошибка. Текст ошибки: ".response.statusText);
        }
      });
    };
    ajaxSend(formData);
  });
});

const formEmail = document.querySelectorAll(".form-email");  //собираем все формы
formEmail.forEach((form) => {
    const validation = new JustValidate(form, {
      errorFieldCssClass: 'is-invalid',
  }); 
  validation
  .addField('[name=useremail]', [
    {
      rule: 'required',
      errorMessage: 'Укажите почту',
    },
    {
      rule: 'minLength',
      value: 10,
      errorMessage: "Как минимум 10 символов",
    },
    {
      rule: "email",
      errorMessage: "Неверно введена почта",
    },
  ])  
  .onSuccess((event) => {
    const thisForm = event.target;  //определяем нашу форму
    const formData = new FormData(thisForm); //данные из нашей формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
        thisForm.reset();
        } else {
          alert("Ошибка. Текст ошибки: ".response.statusText);
        }
      });
    };
    ajaxSend(formData);
  });
});


/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});






