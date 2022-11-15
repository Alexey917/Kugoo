<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&family=Roboto&display=swap" rel="stylesheet"> 
    

   <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
   <link rel="manifest" href="favicon/site.webmanifest">
   <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Kugo Test</title>
  </head>

  <body>
    <nav class="navbar">
      <div class="container">
        <div class="navbar-wrapper">
          <ul class="navbar-list">
            <li class="navbar-list-item">
              <a href="#" class="navbar-list-item-link">Сервис</a>
            </li>
            <li class="navbar-list-item">
              <a href="#" class="navbar-list-item-link">Сотрудничество</a>
            </li>
            <li class="navbar-list-item">
              <a href="#" class="navbar-list-item-link" data-toggle="modal" data-target="#feedback-modal">Заказать звонок</a>
            </li>
            <ul class="navbar-social-list">
              <li class="navbar-social-list-item">
                <a href="#" class="viber-link">
                  <svg class="viber-icon">
                    <use href="img/sprite.svg#viber"></use>
                  </svg>
                </a>
              </li>
              <li class="navbar-social-list-item">
                <a href="#" class="whatsapp-link">
                  <svg class="whatsapp-icon">
                    <use href="img/sprite.svg#whatsapp"></use>
                  </svg>
                </a>
              </li>
              <li class="navbar-social-list-item">
                <a href="#" class="tg-link">
                  <svg class="tg-icon">
                    <use href="img/sprite.svg#tg"></use>
                  </svg>
                </a>
              </li>
            </ul>
            <li class="navbar-list-item navbar-phone">
              <a href="tel:+78005055461" class="navbar-list-item-link navbar-phone-link">+7 (800) 505-54-61</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.container -->
      <hr class="navbar-seporator">

      <div class="container">
        <div class="navbar-content">
          <a href="./" class="logo">Kugoo</a>

          <button class="navbar-button">
            <div class="button-menu">
              <div class="button-line"></div>
              <div class="button-line"></div>
              <div class="button-line button-line-3"></div>
            </div>
            <span class="button-text">Каталог</span>
          </button>
  
          <div class="navbar-form">
            <input type="search" placeholder=" " name="search"
            class="navbar-input" maxlength="60" id="search">
            <label class="input-navbar-label" for="search">Искать самокат KUGO</label>
            <button type="submit" class="navbar-input-buttom">
              <svg class="search-icon">
                <use href="img/sprite.svg#search"></use>
              </svg>
            </button>
          </div>

          <div class="dropdown-menu">
            <ul class="dropdown-menu-list">
              <li class="dropdown-list-item dropdown-list-item-input">
                <div class="dropdown-form">
                  <input type="search" placeholder=" " name="search"
                  class="dropdown-input">
                  <label class="input-dropdown-label">Искать..</label>
                </div>
              </li>
              <li class="dropdown-list-item">
                <a href="#" class="dropdown-list-item-link">Каталог</a>
              </li>
              <li class="dropdown-list-item">
                <a href="#" class="dropdown-list-item-link">Баланс</a>
              </li>
              <li class="dropdown-list-item">
                <a href="#" class="dropdown-list-item-link">Избранное</a>
              </li>
              <li class="dropdown-list-item ">
                <a class="dropdown-list-item-link">Корзина</a>
              </li>
              <li class="dropdown-list-item">
                <a href="#" class="dropdown-list-item-link">Сервис</a>
              </li>
              <li class="dropdown-list-item">
                <a href="#" class="dropdown-list-item-link">Сотрудничество</a>
              </li>
              <li class="dropdown-list-item">
                <a href="#" class="dropdown-list-item-link" data-toggle="modal" data-target="#feedback-modal">Заказать звонок</a>
              </li>
              <li class="dropdown-list-item">
                <a href="tel:+78005055461" class="dropdown-list-item-link">+7 (800) 505-54-61</a>
              </li>
              <hr class="dropdown-seporator">
              <ul class="dropdown-social-list">
                <li class="dropdown-social-list-item">
                  <a href="#" class="viber-link">
                    <svg class="dropdown-viber-icon">
                      <use href="img/sprite.svg#viber"></use>
                    </svg>
                  </a>
                </li>
                <li class="dropdown-social-list-item">
                  <a href="#" class="whatsapp-link">
                    <svg class="dropdown-whatsapp-icon">
                      <use href="img/sprite.svg#whatsapp"></use>
                    </svg>
                  </a>
                </li>
            
                <li class="dropdown-social-list-item">
                  <a href="#" class="tg-link">
                    <svg class="dropdown-tg-icon">
                      <use href="img/sprite.svg#tg"></use>
                    </svg>
                  </a>
                </li>
              </ul>
                
            </ul>
          </div>

          

          <a class="dropdown-menu-toggle" href="#">
            <svg class="close-icon">
              <use href="img/sprite.svg#close"></use>
            </svg>
            <div class="dropdown-menu-line"></div>
            <div class="dropdown-menu-line dropdown-menu-line-2"></div>
            <div class="dropdown-menu-line dropdown-menu-line-3"></div>
          </a>
          
          <ul class="shopping-cart-list">
            <li class="shopping-cart-list-item">
              <img src="img/icons/balance.svg" alt="balance" class="balance-icon">
            </li>
            <li class="shopping-cart-list-item">
              <svg class="like-icon">
                <use href="img/sprite.svg#like"></use>
              </svg>
            </li>
            <li class="shopping-cart-list-item ">
              <svg class="shopping-cart-icon">
                <use href="img/sprite.svg#shopping-cart"></use>
              </svg>
              <span class="shopping-cart-list-item-text">Корзина</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar -->

    <header class="header">
     <!-- <picture>
        <source type="image/webp" srcset="img/header-img.webp">
        <source type="image/jpeg" srcset="img/header-img.jpg">
        <img  class="header-image" src="img/header-img.jpg">
      </picture>-->
      <div class="image-container">
        <div class="header-image">
          <div class="container">
            <div class="header-content">
              <div class="header-address-info">
                <svg class="placeholder-icon">
                  <use href="img/sprite.svg#placeholder"></use>
                </svg>
                <address class="header-address">Восточно-Кругликовская улица, 86
                </address>
                <span class="schedule">Вт - Сб 10:00 - 20:00</span>
              </div>
              <!-- /.header-address-info -->
    
              <h1 class="header-title">Запишитесь на бесплатный тест-драйв электросамокатов</h1>
              <p class="header-text">в Москве без ограничения по времени</p>
    
              <ul class="results-list">
                <li class="result-list-item">
                  <div class="result-icon-wrapper">
                    <svg class="kick-scooter-icon">
                      <use href="img/sprite.svg#kick-scooter"></use>
                    </svg>
                  </div>
                  <span class="result-item-text">Поймете, какая модель вам подходит</span>
                </li>
                <li class="result-list-item">
                  <div class="result-icon-wrapper">
                    <svg class="energy-icon">
                      <use href="img/sprite.svg#energy"></use>
                    </svg>
                  </div>
                  <span class="result-item-text">Проверите лучшие самокаты в деле</span>
                </li>
              </ul>
    
              <button class="header-button" data-toggle="modal" data-target="#feedback-modal">
                <span class="header-button-text">Записаться</span>
              </button>
    
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /.header -->

    <section class="section-suitable-modal">
      <div class="container">
        <div class="suitable-modal-wrapper">
          <picture>
            <source type="image/webp" srcset="img/suitable-modal-image.webp">
            <source type="image/jpeg" srcset="img/suitable-modal-image.jpg">
            <img  class="suitable-modal-img" src="img/suitable-modal-image.jpg">
          </picture>
          <div class="suitable-modal-content">
            <h2 class="suitable-modal-title">Определите максимально подходящую вам модель<br> не теоретически, а на практике</h2>
            <p class="suitable-modal-text">Тест-драйв поможет:</p>
            <ul class="suitable-modal-list">
              <li class="suitable-modal-item">
                <svg class="complete-icon">
                  <use href="img/sprite.svg#complete"></use>
                </svg>
                <p class="suitable-modal-item-text"><span class="word">Понять </span>подходит ли вам конкретная модель;</p>
              </li>
              <li class="suitable-modal-item">
                <svg class="complete-icon">
                  <use href="img/sprite.svg#complete"></use>
                </svg>
                <p class="suitable-modal-item-text"><span class="word">Испытать </span>самокат в «реальной жизни»;</p>
              </li>
              <li class="suitable-modal-item">
                <svg class="complete-icon">
                  <use href="img/sprite.svg#complete"></use>
                </svg>
                <p class="suitable-modal-item-text"><span class="word">Оценить </span>удобство хранения и эксплуатации;</p> 
              </li>
              <li class="suitable-modal-item">
                <svg class="complete-icon">
                  <use href="img/sprite.svg#complete"></use>
                </svg>
                <p class="suitable-modal-item-text"><span class="word">Узнать </span>реальные характеристики и возможности модели.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- /.section-suitable-modal -->
    
    <section class="section-study">
      <div class="container">
        <div class="section-study-wrapper">
          <picture>
            <source type="image/webp" srcset="img/section-study-image.webp">
            <source type="image/jpeg" srcset="img/section-study-image.jpg">
            <img  class="section-study-img" src="img/section-study-image.jpg">
          </picture>
          <div class="section-study-content">
            <h2 class="section-study-title">Научим правильной<br> и безопасной езде в городе вас или вашего ребенка</h2>
            <p class="section-study-text">На обучении специалист расскажет:</p>
            <ul class="section-study-list">
              <li class="section-study-item">
                <svg class="complete-icon">
                  <use href="img/sprite.svg#complete"></use>
                </svg>
                <p class="section-study-item-text">Как подготовить самокат к поездке;</p>
              </li>
              <li class="section-study-item">
                <svg class="complete-icon">
                  <use href="img/sprite.svg#complete"></use>
                </svg>
                <p class="section-study-item-text">Как «завести» самокат;</p>
              </li>
              <li class="section-study-item">
                <svg class="complete-icon">
                  <use href="img/sprite.svg#complete"></use>
                </svg>
                <p class="section-study-item-text">Как вести себя во время поездки и обезопасить себя и окружающих;</p> 
              </li>
              <li class="section-study-item">
                <svg class="complete-icon">
                  <use href="img/sprite.svg#complete"></use>
                </svg>
                <p class="section-study-item-text">Как складывать и раскладывать электросамокат;</p>
              </li>
              <li class="section-study-item">
                <svg class="complete-icon">
                  <use href="img/sprite.svg#complete"></use>
                </svg>
                <p class="section-study-item-text">Как ухаживать за своим девайсом.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- /.section-study -->

    <section class="section-available-models">
      <div class="container">
        <div class="available-models-wrapper">
          <h2 class="available-models-title">Сейчас для тест-драйва и обучения<br>доступны следующие модели</h2>
          <div class="available-models-content">
            <a href="#" class="card">
              <div class="card-content">
                <div class="card-header">
                  <div class="card-top">
                    <div class="hit">
                      <span class="hit-text">ХИТ</span>
                    </div>
                    <div class="card-balance">
                      <img src="img/icons/balance.svg" alt="balance" class="card-balance-icon">
                    </div>
                  </div>
    
                  <div class="card-img-wrapper">
                    <picture>
                      <source type="image/webp" srcset="img/Kick-scooter.webp">
                      <source type="image/jpeg" srcset="img/Kick-scooter.png">
                      <img  class="card-img" src="img/Kick-scooter.png">
                    </picture>
                  </div>
                </div>
  
                <h3 class="card-title">Kugoo Kirin M4</h3>
  
                <ul class="card-feature-list">
                  <li class="card-feature-item">
                    <svg class="charge-icon">
                      <use href="img/sprite.svg#charge"></use>
                    </svg>
                    <p class="card-feature-text">2000 mAh</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="speedometer-icon">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <p class="card-feature-text">60 км/ч</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="power-icon">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <p class="card-feature-text">1,2 л.с.</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="time-icon">
                      <use href="img/sprite.svg#time"></use>
                    </svg>
                    <p class="card-feature-text">5 часов</p>
                  </li>
                </ul>
  
                <div class="card-price">
                  <div class="price-block">
                    <p class="mini-price">39 900 ₽</p>
                    <p class="price">29 900 ₽</p>
                  </div>
                  <div class="add">
                    <div class="add-shopping-cart">
                      <svg class="shopping-cart-2-icon">
                        <use href="img/sprite.svg#shopping-cart-2"></use>
                      </svg>
                    </div>

                    <div class="add-like">
                      <svg class="like-icon-2">
                        <use href="img/sprite.svg#like-2"></use>
                      </svg>
                    </div>
                  </div>
                </div>
  
                <button class="card-button" data-toggle="modal" data-target="#feedback-modal">
                  <span class="card-button-text">Записаться на тест-драйв</span>
                </button>
              </div>
            </a>

            <a href="#" class="card">
              <div class="card-content">
                <div class="card-header">
                  <div class="card-top">
                    <div class="novelty">
                      <span class="novelty-text">Новинка</span>
                    </div>
                    <div class="card-balance">
                      <img src="img/icons/balance.svg" alt="balance" class="card-balance-icon">
                    </div>
                  </div>
    
                  <div class="card-img-wrapper">
                    <picture>
                      <source type="image/webp" srcset="img/Kick-scooter.webp">
                      <source type="image/jpeg" srcset="img/Kick-scooter.png">
                      <img  class="card-img" src="img/Kick-scooter.png">
                    </picture>
                  </div>
                </div>
  
                <h3 class="card-title">Kugoo Kirin M4</h3>
  
                <ul class="card-feature-list">
                  <li class="card-feature-item">
                    <svg class="charge-icon">
                      <use href="img/sprite.svg#charge"></use>
                    </svg>
                    <p class="card-feature-text">2000 mAh</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="speedometer-icon">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <p class="card-feature-text">60 км/ч</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="power-icon">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <p class="card-feature-text">1,2 л.с.</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="time-icon">
                      <use href="img/sprite.svg#time"></use>
                    </svg>
                    <p class="card-feature-text">5 часов</p>
                  </li>
                </ul>
  
                <div class="card-price">
                  <div class="price-block">
                    <p class="mini-price">39 900 ₽</p>
                    <p class="price">29 900 ₽</p>
                  </div>
                  <div class="add">
                    <div class="add-shopping-cart">
                      <svg class="shopping-cart-2-icon">
                        <use href="img/sprite.svg#shopping-cart-2"></use>
                      </svg>
                    </div>

                    <div class="add-like">
                      <svg class="like-icon-2">
                        <use href="img/sprite.svg#like-2"></use>
                      </svg>
                    </div>
                  </div>
                </div>
  
                <button class="card-button" data-toggle="modal" data-target="#feedback-modal">
                  <span class="card-button-text">Записаться на тест-драйв</span>
                </button>
              </div>
            </a>

            <a href="#" class="card">
              <div class="card-content">
                <div class="card-header">
                  <div class="card-top">
                    <div class="hit">
                      <span class="hit-text">ХИТ</span>
                    </div>
                    <div class="card-balance">
                      <img src="img/icons/balance.svg" alt="balance" class="card-balance-icon">
                    </div>
                  </div>
    
                  <div class="card-img-wrapper">
                    <picture>
                      <source type="image/webp" srcset="img/Kick-scooter.webp">
                      <source type="image/jpeg" srcset="img/Kick-scooter.png">
                      <img  class="card-img" src="img/Kick-scooter.png">
                    </picture>
                  </div>
                </div>
  
                <h3 class="card-title">Kugoo Kirin M4</h3>
  
                <ul class="card-feature-list">
                  <li class="card-feature-item">
                    <svg class="charge-icon">
                      <use href="img/sprite.svg#charge"></use>
                    </svg>
                    <p class="card-feature-text">2000 mAh</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="speedometer-icon">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <p class="card-feature-text">60 км/ч</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="power-icon">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <p class="card-feature-text">1,2 л.с.</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="time-icon">
                      <use href="img/sprite.svg#time"></use>
                    </svg>
                    <p class="card-feature-text">5 часов</p>
                  </li>
                </ul>
  
                <div class="card-price">
                  <div class="price-block">
                    <p class="mini-price">39 900 ₽</p>
                    <p class="price">29 900 ₽</p>
                  </div>
                  <div class="add">
                    <div class="add-shopping-cart">
                      <svg class="shopping-cart-2-icon">
                        <use href="img/sprite.svg#shopping-cart-2"></use>
                      </svg>
                    </div>

                    <div class="add-like">
                      <svg class="like-icon-2">
                        <use href="img/sprite.svg#like-2"></use>
                      </svg>
                    </div>
                  </div>
                </div>
  
                <button class="card-button" data-toggle="modal" data-target="#feedback-modal">
                  <span class="card-button-text">Записаться на тест-драйв</span>
                </button>
              </div>
            </a>

            <a href="#" class="card">
              <div class="card-content">
                <div class="card-header">
                  <div class="card-top">
                    <div class="novelty">
                      <span class="novelty-text">Новинка</span>
                    </div>
                    <div class="card-balance">
                      <img src="img/icons/balance.svg" alt="balance" class="card-balance-icon">
                    </div>
                  </div>
    
                  <div class="card-img-wrapper">
                    <picture>
                      <source type="image/webp" srcset="img/Kick-scooter.webp">
                      <source type="image/jpeg" srcset="img/Kick-scooter.png">
                      <img  class="card-img" src="img/Kick-scooter.png">
                    </picture>
                  </div>
                </div>
  
                <h3 class="card-title">Kugoo Kirin M4</h3>
  
                <ul class="card-feature-list">
                  <li class="card-feature-item">
                    <svg class="charge-icon">
                      <use href="img/sprite.svg#charge"></use>
                    </svg>
                    <p class="card-feature-text">2000 mAh</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="speedometer-icon">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <p class="card-feature-text">60 км/ч</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="power-icon">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <p class="card-feature-text">1,2 л.с.</p>
                  </li>
                  <li class="card-feature-item">
                    <svg class="time-icon">
                      <use href="img/sprite.svg#time"></use>
                    </svg>
                    <p class="card-feature-text">5 часов</p>
                  </li>
                </ul>
  
                <div class="card-price">
                  <div class="price-block">
                    <p class="mini-price">39 900 ₽</p>
                    <p class="price">29 900 ₽</p>
                  </div>
                  <div class="add">
                    <div class="add-shopping-cart">
                      <svg class="shopping-cart-2-icon">
                        <use href="img/sprite.svg#shopping-cart-2"></use>
                      </svg>
                    </div>

                    <div class="add-like">
                      <svg class="like-icon-2">
                        <use href="img/sprite.svg#like-2"></use>
                      </svg>
                    </div>
                  </div>
                </div>
  
                <button class="card-button" data-toggle="modal" data-target="#feedback-modal">
                  <span class="card-button-text">Записаться на тест-драйв</span>
                </button>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.section-study -->
    
    <section class="section-cta">
      <div class="bg-grey">
        <picture>
          <source type="image/webp" srcset="img/cta.webp">
          <source type="image/jpeg" srcset="img/cta.png">
          <img  class="cta-img" src="img/cta.png" alt="call to action">
        </picture>
        <div class="container">
          <div class="cta-form-wrapper">
            <form action="handler.php" method="POST" class="cta-form form">
            <h2 class="section-title cta-form-title">Нет нужной модели, которую<br> хотите протестировать?</h2>
            <p class="cta-form-text">Оставьте заявку, и менеджер подберет нужный самокат</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-phone" type="tel" class="input-cta phone-mask" name="userphone" placeholder=" " maxlength="30">
                <label class="phone-label" for="user-phone">+7 (___) __ - __ - __</label>
              </div>
              <button type="submit" class="cta-form-button">Оставить заявку на тест-драйв</button>
            </div>

            <div class="cta-form-footer">
              <label class="container-label">
                <input type="checkbox" id="terms" class="input-checkbox" name="checkbox">
                <span class="checkmark">
                </span>
              </label>
              <p class="notify-text">Нажимая на кнопку, вы соглашаетесь на обработку <br>персональных данных и
                <a href="#" class="policy-form-text">политикой конфиденциальности</a>
            </p>
            </div>
            <!-- /.cta-form-footer -->
            </form>
          </div>
        </div>
        <!-- /.cta-form-wrapper -->
      </div>
    </section>
    <!-- /.section-сta -->

    <footer class="footer">
      <div class="leave-email">
        <div class="container">
          <div class="footer-form-wrapper">
            <h3 class="leave-email-title">Оставьте свою почту и станьте первым,<br> кто получит скидку на новые самокаты</h3>
            <form action="handler.php" method="POST" class="footer-form form-email">
              <div class="input-group-footer-wrapper">
                <div class="input-group">
                  <input id="user-email" type="email" class="input-footer" name="useremail" placeholder=" " maxlength="30">
                  <label class="email-label" for="user-email">Введите Ваш email</label>
                </div>
                <button type="submit" class="footer-button">Подписаться</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.leave-email -->

      <div class="container">
        <div class="footer-info">
          <ul class="catalog">
            <h3 class="catalog-title">Каталог товаров</h3>
            <li class="catalog-item">
              <a href="#" class="catalog-item-link">Электросамокаты</a>
            </li>
            <li class="catalog-item">
              <a href="#" class="catalog-item-link">Электроскутеры</a>
            </li>
            <li class="catalog-item">
              <a href="#" class="catalog-item-link">Электровелосипеды</a>
            </li>
            <li class="catalog-item">
              <a href="#" class="catalog-item-link">Электровелосипеды</a>
            </li>
          </ul>
          <!-- /.catalog -->

          <div class="buyers-info">
            <h3 class="buyers-title">Покупателям</h3>
          <ul class="buyers">
            <li class="buyers-item">
              <a href="#" class="buyers-item-link">Сервисный центр</a>
            </li>
            <li class="buyers-item">
              <a href="#" class="buyers-item-link">Доставка и оплата</a>
            </li>
            <li class="buyers-item">
              <a href="#" class="buyers-item-link">Рассрочка</a>
            </li>
            <li class="buyers-item">
              <a href="#" class="buyers-item-link">Тест-драйв</a>
            </li>
            <li class="buyers-item">
              <a href="#" class="buyers-item-link">Блог</a>
            </li>
            <li class="buyers-item">
              <a href="#" class="buyers-item-link">Сотрудничество</a>
            </li>
            <li class="buyers-item">
              <a href="#" class="buyers-item-link">Контакты</a>
            </li>
            <li class="buyers-item">
              <a href="#" class="buyers-item-link">Акции</a>
            </li>
          </ul>
          <!-- /.buyers -->
          
          </div>

          <div class="contacts-info">
            <h3 class="contacts-title">Контакты</h3>
            <ul class="contacts">
              <li class="contacts-item">
                <a href="#" class="contacts-item-link">Call-центр</a>
              </li>
              <li class="contacts-item">
                <a href="tel:+78005055461" class="contacts-item-link contacts-phone">+7 (800) 505-54-61</a>
              </li>
              <li class="contacts-item">
                <a href="#" class="contacts-item-link contacts-time">Пн-Вс 10:00 - 20:00</a>
              </li>
              <li class="contacts-item">
                <a href="#" class="contacts-item-link">Сервисный центр</a>
              </li>
              <li class="contacts-item">
                <a href="tel:+74993507692" class="contacts-item-link contacts-phone">+7 (499) 350-76-92</a>
              </li>
              <li class="contacts-item">
                <a href="#" class="contacts-item-link contacts-time">Пн-Вс 10:00 - 20:00</a>
              </li>
            </ul>
            <!-- /.contacts -->
          </div>

          <div class="request-a-call">
            <a href="#" class="request-a-call-link" data-toggle="modal" data-target="#feedback-modal">Заказать звонок</a>
          </div>

        </div>
        <hr class="footer-seporator">
        <div class="footer-info-social">
          <ul class="footer-info-social-list">
            <li class="info-social-item">
              <a href="./" class="logo logo-footer">Kugoo</a>
            </li>
            <li class="info-social-item">
              <a href="#" class="info-social-item-link">
                <img class="google-play-img" src="img/google-play.png" alt="google-play">
              </a>
            </li>
            <li class="info-social-item">
              <a href="#" class="info-social-item-link">
                <img class="app-store-img" src="img/app-store.png" alt="app-store">
              </a>
            </li>
            <li class="info-social-item">
              <a href="#" class="info-social-item-link">
                <img class="vk-img" src="img/vk.png" alt="vk">
              </a>
            </li>
            <li class="info-social-item">
              <a href="#" class="info-social-item-link">
                <img class="youtube-img" src="img/youtube.png" alt="youtube">
              </a>
            </li>
            <li class="info-social-item">
              <a href="#" class="info-social-item-link">
                <img class="telegram-img" src="img/telegram.png" alt="telegram">
              </a>
            </li>
          </ul>
        </div>
        <hr class="footer-seporator">
        <div class="footer-bottom">
          <ul class="policy-list">
            <li class="policy-list-item">
              <a href="#" class="policy-list-item-link">Реквизиты</a>
            </li>
            <li class="policy-list-item">
              <a href="#" class="policy-list-item-link">Политика конфиденциальности</a>
            </li>
          </ul>
          <!-- /.policy-list -->

          <ul class="payment-list">
            <li class="payment-list-item">
              <a href="#" class="payment-list-item-link">
                <img class="pay-img" src="img/google-pay.png" alt="google-pay">
              </a>
            </li>
            <li class="payment-list-item">
              <a href="#" class="payment-list-item-link">
                <img class="pay-img" src="img/apple-pay.png" alt="apple-pay">
              </a>
            </li>
            <li class="payment-list-item">
              <a href="#" class="payment-list-item-link">
                <img class="pay-img" src="img/visa.png" alt="visa">
              </a>
            </li>
            <li class="payment-list-item">
              <a href="#" class="payment-list-item-link">
                <img class="pay-img" src="img/mastercard.png" alt="mastercard">
              </a>
            </li>
            <li class="payment-list-item">
              <a href="#" class="payment-list-item-link">
                <img class="pay-img" src="img/maestro.png" alt="maestro">
              </a>
            </li>
            <li class="payment-list-item">
              <a href="#" class="payment-list-item-link">
                <img class="pay-img" src="img/webmoney.png" alt="webmoney">
              </a>
            </li>
            <li class="payment-list-item">
              <a href="#" class="payment-list-item-link">
                <img class="pay-img" src="img/qiwi.png" alt="qiwi">
              </a>
            </li>
          </ul>
          <!-- /.payment-list -->

          <div class="online-chat">
            <span class="online-chat-text">Online чат:</span>
            <ul class="navbar-social-list footer-bottom-social-list">
              <li class="navbar-social-list-item footer-bottom-social-list-item">
                <a href="#" class="viber-link">
                  <svg class="viber-icon viber-icon-footer">
                    <use href="img/sprite.svg#viber"></use>
                  </svg>
                </a>
              </li>
              <li class="navbar-social-list-item footer-bottom-social-list-item">
                <a href="#" class="whatsapp-link">
                  <svg class="whatsapp-icon whatsapp-icon-footer">
                    <use href="img/sprite.svg#whatsapp"></use>
                  </svg>
                </a>
              </li>
              <li class="navbar-social-list-item footer-bottom-social-list-item">
                <a href="#" class="tg-link">
                  <svg class="tg-icon tg-icon-footer">
                    <use href="img/sprite.svg#tg"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <div class="modal-dialog-content">
          <h2 class="modal-title">Запишитесь на тест-драйв электросамоката</h2>
        <span class="modal-text-choose-for-yourself">и подберите модель для себя</span>
        <p class="modal-text-manager">Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.</p>
        <span class="modal-text-contact">Как с вами удобнее связаться?</span>
        <form action="handler.php" method="POST" class="cta-form modal-form form">
          <div class="input-group-wrapper modal-input-group">
            <div class="input-group">
              <input id="user-phone" type="tel" class="input-cta phone-mask" name="userphone" placeholder=" " maxlength="30">
              <label class="phone-label" for="user-phone">+7 (___) __ - __ - __</label>
            </div>
            <button type="submit" class="cta-form-button modal-form-button">Оставить заявку на тест-драйв</button>
          </div>

          <div class="cta-form-footer modal-cta-form-footer">
            <label class="container-label">
              <input type="checkbox" id="terms"  name="checkbox" required>
              <span class="checkmark">
              </span>
            </label>
            <p class="modal-notify-text">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и
              <a href="#" class="policy-form-text modal-policy-form-text">политикой конфиденциальности</a>
          </p>
          </div>
          <!-- /.cta-form-footer -->
        </form>
        </div>
        <picture>
          <source type="image/webp" srcset="img/modal-img.webp">
          <source type="image/jpeg" srcset="img/modal-img.png">
          <img  class="modal-image" src="img/modal-img.png" alt="modal-img">
        </picture>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg class="modal-close-icon">
            <use href="img/sprite.svg#modal-close"></use>
          </svg>
        </a>
      </div>
    </div>

    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>