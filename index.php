<?php


if(!isset($_SESSION)){
  session_start(); 

} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link  rel="icon"   href="img/favicon.png" type="image/png" />
  <meta name="description" content="Sushi. Pedí Sushi Online. Mirá nuestro menú online de sushi.">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
   <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   
   
    <title>Tamashi Resto: Sushi & Beer</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RSEHCTKP8B"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-RSEHCTKP8B');
    </script>

</head>
<body>
    <div class="navigation">

      <header class="section-header" id="inicio">
        <h1 class="heading--primary">TAMASHI</h1>
      </header>

    <input type="checkbox" id="check" class="navigation__checkbox">
    <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
    </label>

        <ul class="navigation__list">
            <li class="navigation__item"><a href="#inicio" class="navigation__link">Inicio</a></li>
            <li class="navigation__item"><a href="#nosotros" class="navigation__link">Nosotros</a></li>
            <!-- <li class="navigation__item"><a href="promos.html" class="navigation__link">Promos</a></li> -->
            <li class="navigation__item"><a href="#menu" class="navigation__link">Menu</a></li>
            <li class="navigation__item"><a href="#contact" class="navigation__link">Contacto</a></li>
     
        </ul>
    </div>
          <script>
        
              // Select DOM items
      const navLink = document.querySelectorAll('.navigation__item'); // nav item class
      const checkbox = document.querySelector('.navigation__checkbox'); //checkbox class

      // Add Event Listener to every nav link
      for (let i = 0; i < navLink.length; i++) {
      navLink[i].addEventListener('click', checkboxOff);
      }

      // Uncheck checkbox
      function checkboxOff() {
      checkbox.checked = false;
      }

    </script>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide--1">

                 
                  <div class="button--placer">
                    <a href="https://api.whatsapp.com/send?phone=541138757088&text=%C2%A1hola%20quiero%20hacer%20un%20pedido" target="blank" 
                    class="btn btn--white">Hacé tu pedido</a>
                  </div>
                 
                </div>
                <div class="swiper-slide swiper-slide--2" >

                <div class="button--placer">
                    <a href="img/MENU_TAMASHI.pdf" 
                    class="btn btn--white">Ver Menú</a>
                  </div>
                
                </div>
                <div class="swiper-slide swiper-slide--3"></div>
         
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                  <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            </div>

    

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper('.swiper-container', {
                
                  centeredSlides: true,
                  autoplay: {
                    delay: 25000000,
                    disableOnInteraction: false,
                  },
                  pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true,
                  },
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
              
                });
              </script>



    <section class="section-nosotros" id="nosotros">
        <h2 class="heading--secondary">Nosotros</h2>
        <div class="nosotros">
            <div class="nosotros__texto">
            Teniendo como norte el brindar un nuevo concepto culinario en la Ciudad de Buenos Aires, 
            ofreciendo máxima calidad al mejor precio posible.

          Gracias al apoyo de nuestros clientes, experimentamos una explosión de crecimiento en el mercado. 
          Somos diseñadores del buen gusto, y nos esforzamos para que absolutamente cada ingrediente componga una pieza perfecta.
            </div>
            <div class="nosotros__photo">
                    <img src="./img/3.jpg" alt="" class="nosotros__photo--picture">
            </div>
        </div>
    </section>
    <section class="section-intersection--1">

    </section>
    <section class="section-menu" id="menu">
        <h2 class="heading--secondary heading--secondary--menu">NUESTRO MENÚ</h2>

        <div class="menu">
            <div class="menu__item menu__item--1">
              <div class="menu__text">
                Wok
              </div>
            </div>
            <div class="menu__item menu__item--2">
              <div class="menu__text">
              Sushi
              </div>
            </div>
       

            <a href="img/MENU_TAMASHI.pdf" target="blank" class="btn btn--menu">DESCARGÁ EL MENU COMPLETO</a>
        </div>
    </section>

    <section class="section-intersection--2">

    </section>

    <section class="section-contacto" id="contact">

      <h2 class="heading--secondary">Contacto</h2>
                
        <div class="contacto">
            <div class="contact__details">
                          <ul class="info__list">
                            <li class="info__item">Martes a domingo - 18 a 23 hs</li>
                            <li class="info__item">*</li>
                            <li class="info__item">Delivery & Take Away</li>
                            <li class="info__item">113 8757 088 / 2085 8771</li>  
                            <li class="info__item">*</li>
                            <li class="info__item">Castiglioni 843, Rincon del Milberg, Tigre</li>
                          </ul>
            
            </div>

        <?php if (isset($_SESSION['result'])): ?>

        <div class="show__message">
          <span class="mail_message"><?=$_SESSION['result']?></span>
        </div>

        <?php unset($_SESSION['result']);?>
        <?php endif; ?>
         <form action="mail.php" method="POST" class="contacto__form">


          <input type="text" name="nombre" class="contacto__input" placeholder="Nombre">
          <input type="email" name="email" class="contacto__input" placeholder="Email">
          <textarea type="text" name="mensaje" class="contacto__input" placeholder="Mensaje"></textarea>

        <input name="submit" type="submit" value="Enviar" class="btn btn--form">
    
         </form>

      </div>

  </section>
  <footer class="footer">
    <div class="footer__logo">
      <h1 class="heading--primary">TAMASHI</h1>
    </div>
    <div class="footer__mid">

        <div class="footer__socials">
         <a href="https://www.instagram.com/tamashiresto/" target="blank" class="footer__link"> <i class="footer__icons fab fa-instagram fa-2x"></i></a>

          <a href="https://api.whatsapp.com/send?phone=541138757088&text=%C2%A1hola%20quiero%20hacer%20un%20pedido" target="blank" class="footer__link">
            <i class="footer__icons fab fa-whatsapp fa-2x"></i>
          </a>
         <a href="https://www.facebook.com/Tamashiresto" target="blank" class="footer__link"> <i class="footer__icons fab fa-facebook-square fa-2x"></i></a>

        </div>
      
        <ul class="footer__list">
          <li class="footer__item"><a href="#inicio" class="footer__link">Inicio</a></li>
          <li class="footer__item"><a href="#nosotros" class="footer__link">Nosotros</a></li>
          <li class="footer__item"><a href="#menu" class="footer__link">Menu</a></li>
          <li class="footer__item"><a href="#contact" class="footer__link">Contacto</a></li>
      </ul>
    </div>

  <div class="footer__emfes">
    <a href="https://emfesmarketing.com/" class="footer__emfes--link">Built by &copy; emfes marketing</a> 
  </div>
  </footer>

</body>
</html>