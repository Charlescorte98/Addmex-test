<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Esta página es de Addmex" />

    <link
      type="text/css"
      rel="stylesheet"
      href="src/css/style.css"
    />

    <link
      type="text/css"
      rel="stylesheet"
      href="src/css/owl.carousel.min.css"
    />

    <link
      type="text/css"
      rel="stylesheet"
      href="src/css/owl.theme.default.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400;1,500&display=swap"
      rel="stylesheet"
    />

    <title>addmex</title>
  </head>
  <body>
    <!-- ============ HEADER ============ -->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">Addmex</a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link"
                ><i class="fas fa-home nav__icon" id="nav-icon"></i>Inicio</a
              >
            </li>

            <li class="nav__item">
              <a href="#about" class="nav__link"
                ><i class="fas fa-users nav__icon" id="nav-icon"></i>Somos</a
              >
            </li>

            <li class="nav__item">
              <a href="#services" class="nav__link"
                ><i class="fas fa-wrench nav__icon" id="nav-icon"></i
                >Servicios</a
              >
            </li>

            <li class="nav__item">
              <a href="#how" class="nav__link"
                ><i class="fas fa-question nav__icon" id="nav-icon"></i>¿Cómo
                trabajamos?</a
              >
            </li>

            <li class="nav__item">
              <a href="#experience" class="nav__link"
                ><i class="fas fa-image nav__icon" id="nav-icon"></i
                >Experiencia</a
              >
            </li>

            <li class="nav__item">
              <a href="#contact" class="nav__link"
                ><i class="fas fa-mobile-alt nav__icon" id="nav-icon"></i
                >Contácto</a
              >
            </li>
          </ul>
          <i class="fas fa-times nav__close" id="nav-close"></i>
        </div>
        <div class="nav__btns">
          <!-- ===== Dark Night Buttom ===== -->
          <i class="far fa-moon change-theme" id="theme-button"></i>

          <div class="nav__toggle" id="nav-toggle">
            <i class="fas fa-bars"></i>
          </div>
        </div>
      </nav>
    </header>

    <main class="main">
        <section class="home section" id="home">
          <div class="home__container container grid">
            <div class="home__content grid">
              <div class="home__social">
                <a
                  href="https://api.whatsapp.com/send?phone=5215582135793"
                  target="_blank"
                  class="home__social-icon"
                  ><i class="fab fa-whatsapp"></i>
                </a>
                <a
                  href="https://www.facebook.com/Addmexventas"
                  target="_blank"
                  class="home__social-icon"
                  ><i class="fab fa-facebook"></i>
                </a>
                <a
                  href="https://www.instagram.com/1.addmex/"
                  target="_blank"
                  class="home__social-icon"
                  ><i class="fab fa-instagram"></i>
                </a>
              </div>
      
              <div class="home__img">
                <svg
                  class="home__blob"
                  viewBox="0 0 200 187"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <mask id="mask0" mask-type="alpha">
                    <path
                      d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                          130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                          97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                          0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                    />
                  </mask>
                  <g mask="url(#mask0)">
                    <path
                      d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                          165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                          129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                          -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                    />
                    <image
                      class="home__blob-img"
                      x="16"
                      y="40"
                      xlink:href="src/img/addmex.png"
                    />
                  </g>
                </svg>
              </div>
              <div class="home__data">
                <h1 class="home__title">Hola, somos Addmex</h1>
                <h3 class="home__subtitle">Vendiendo tu ingenio</h3>
                <p class="home__description">
                  Addmex busca ser una empresa líder que logré conectar a las empresas que no cuenten con departamento comercial interno, y que deseen incrementar negocios concretados, conectando y cerrando oportunidades reales para nuestros clientes.
                </p>
      
                <a href="#contact" class="button button--flex"
                  >Contáctanos<i class="far fa-paper-plane button__icon"></i
                ></a>
              </div>
            </div>
            <div class="home__scroll">
              <a href="#about" class="home__scroll-button button--flex">
                <i class="fas fa-mouse home__scroll-mouse"></i>
                <span class="home__scroll-name">Scrollea abajo</span>
                <i class="fas fa-arrow-down home__scroll-arrow"></i>
              </a>
            </div>
          </div>
        </section>
      
        <!-- ============ SOMOS ============ -->
      
        <section class="about section" id="about">
          <h2 class="section__title">Somos</h2>
          <span class="section__subtitle">¿Qué es Addmex?</span>
          <div class="about__container container grid">
            <img
              class="about__img"
              src="src/img/addmex-about.jpg"
              alt="Addmex About"
            />
            <div class="about__data">
              <p class="about__description">
                Tenemos 15 años de experiencia probada con una metología eficiente,
                lo cuál nos ha dejado una cartera de clientes con necesidades
                cambiantes y a la escucha de propuestas que les representen mejoras importantes.
                 
              </p>
              <p class="about__description">El mercado se ha vuelto agresivo al momento de ofertar productos, 
                llevando soluciones a donde no se necesitan,
                y las personas en busca de una solución específica caen en ofertas efímeras
                que no satisfacen su necesidad principal.</p>
              <p class="about__description second">Por ello nace Addmex,
                enfocados a ser el vínculo adecuado para que el mercado en busca de
                soluciones a sus demandas, encuentre proveedores confiables que satisfagan las
                necesidades de las personas sin entrar en una guerra de ofertas.</p>
              <div class="about__info">
                <div>
                  <span class="about__info-title">12+</span>
                  <span class="about__info-name"
                    >Partners <br />
                    Integrados</span
                  >
                  </div>
                  <div>
                  <span class="about__info-title">08+</span>
                  <span class="about__info-name"
                    >Años <br />
                    Experiencia</span
                  >
              </div>
              <div>
                  <span class="about__info-title">112+</span>
                  <span class="about__info-name"
                    >Clientes <br />
                    Satisfechos</span
                  >
              </div>
                </div>
              </div>
              
            </div>
            <div class="about__buttons">
              <a
                download=""
                href="src/pdf/addmexplan.pdf"
                class="button button--flex"
              >
                Descargar CV <i class="fas fa-download button__icon especial"></i
              ></a>
            </div>
          </div>
        </section>
      
      
      
      <!-- ============ SERVICIOS ============ -->
      
      <section class="services section" id="services">
        <h2 class="section__title">Servicios</h2>
        <span class="section__subtitle">¿Qué ofrecemos?</span>
      
        <div class="services__container container grid">
      <!-- ============ SERVICIO 1 ============ -->
      <div class="services__content">
        <div>
          <i class="fas fa-th services__icon"></i>
          <h3 class="services__title">Addmex Funnel</h3>
        </div>
      <span class="button button--flex button--small button--link services__button">
        Ver más
        <i class="fas fa-chevron-right button__icon"></i>
      </span>
      
      <div class="services__modal">
        <div class="services__modal-content">
          <h4 class="services__modal-title">
            Addmex funnel
          </h4>
          <i class="fas fa-times services__modal-close"></i>
          
          <ul class="services__modal-services grid">
            <li class="services__modal-service">
              <i class="fas fa-search-plus services__modal-icon"></i>
              <p>Es un esquema de estudio y filtro de prospectos calificados, mediante el cuál entregamos un listado de prospectos que han pasado por un proceso adecuado dónde detectamos la necesidad del producto o servicio ofertado, así como intención de compra real.</p>
            </li>
          </ul>
        </div>
      </div>
      </div>
      
      
      
      
      <!-- ============ SERVICIO 2 ============ -->
      <div class="services__content">
        <div>
          <i class="fas fa-th services__icon"></i>
          <h3 class="services__title">Addmex Increase</h3>
        </div>
      <span class="button button--flex button--small button--link services__button">
        Ver más
        <i class="fas fa-chevron-right button__icon"></i>
      </span>
      
      <div class="services__modal">
        <div class="services__modal-content">
          <h4 class="services__modal-title">
            Addmex Increase
          </h4>
          <i class="fas fa-times services__modal-close"></i>
          
          <ul class="services__modal-services grid">
            <li class="services__modal-service">
              <i class="fas fa-search-plus services__modal-icon"></i>
              <p>Es el servicio dónde la responsablidad del proceso de venta recae completamente en nosotros. De ésta manera la ejecución de prospección, cierre, seguimiento entre otras áreas es nuestra responsabilidad, liberando al cliente de tener que aprender y actualizarse en éstas áreas, además del tiempo que tiene que invertir. </p>
            </li>
          </ul>
        </div>
      </div>
      </div>
      
      
      
      
      <!-- ============ SERVICIO 3 ============ -->
      <div class="services__content">
        <div>
          <i class="fas fa-th services__icon"></i>
          <h3 class="services__title">Addmex Attract</h3>
        </div>
      <span class="button button--flex button--small button--link services__button">
        Ver más
        <i class="fas fa-chevron-right button__icon"></i>
      </span>
      
      <div class="services__modal">
        <div class="services__modal-content">
          <h4 class="services__modal-title">
            Addmex Attract 
          </h4>
          <i class="fas fa-times services__modal-close"></i>
          
          <ul class="services__modal-services grid">
            <li class="services__modal-service">
              <i class="fas fa-search-plus services__modal-icon"></i>
              <p>Es el servicio dónde nuestra experiencia y recursos se ponen de forma continua al servicio de las empresas. Un equipo especialista está dedicado exclusivamente a la generación de prospectos y cierres de venta para la empresa, de tal manera que el enfoque de esfuerzos están dirijidos 100% a un objetivo, pero con todas las herramientas y material interno de Addmex lo cuál catapulta sus ventas de manera más consistente que si tuviera un departamento comercial interno.</p>
            </li>
          </ul>
        </div>
      </div>
      </div>
      
      
      
        </div>
      </section>
      
      
      <!-- ============ ¿CÓMO TRABAJAMOS? ============ -->
      <section class="how section" id="how">
          <h2 class="section__title how__title-principal">¿Cómo trabajamos?</h2>
      
          <div class="how__container container grid">
            <div>
              <div class="how__content how__open">
                <div class="how__header">
                  <i class="fab fa-sellsy how__icon"></i>
      
                  <div>
                    <h1 class="how__title">Addmex Funnel</h1>
                    
                  </div>
                    <i class="fas fa-angle-down how__arrow"></i>
                  </div>
                  <!-- ========================== HOW 1 =============================== -->
      
                  <div class="how__list grid">
                    <div class="how__data">
                      <div class="how__title">
                        <h3 class="how__name">¿Buscas clientes?</h3>
                        <p class="how__description">Lo llevamos a cabo en 2 fases, cada una de 1 mes. En la primera nos encargamos de capacitarnos acerca de la oferta del cliente. Durante esta fase se genera una base de datos, de la cuál filtramos a los prospectos más calificados y que sean un candidato viable a ser un comprador potencial. En la segunda fase hacemos contacto con estos prospectos y detectamos oportunidades en intencion de compra de una solución, ofertada por nuestro cliente.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
      
             <div>
                <div class="how__content how__close">
                  <div class="how__header">
                    <i class="fas fa-toolbox how__icon"></i>
        
                    <div>
                      <h1 class="how__title">Addmex Increase</h1>
                      
                    </div>
                      <i class="fas fa-angle-down how__arrow"></i>
                    </div>
                    <!-- ========================== HOW 2 =============================== -->
        
                    <div class="how__list grid">
                      <div class="how__data">
                        <div class="how__title">
                          <h3 class="how__name">¿Quieres cerrar ventas?</h3>
                          <p class="how__description">Lo llevamos a cabo en 3 fases, cada una de 1 mes. En la primera nos encargamos de capacitarnos acerca de la oferta del cliente. Durante esta fase se genera una base de datos, de la cuál filtramos a los prospectos más calificados y que sean un candidato viable a ser un comprador potencial. En la segunda fase hacemos contacto con estos prospectos y detectamos oportunidades en intencion de compra de una solución, ofertada por nuestro cliente. La tercera fase consiste en generar citas y realizar ofertas para proceder al cierre de venta, haciendo entrega de ordenes de compra para nuestros clientes.</p>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
      
              <div>
                  <div class="how__content how__close">
                    <div class="how__header">
                      <i class="fas fa-user-friends how__icon"></i>
          
                      <div>
                        <h1 class="how__title">Addmex Attract </h1>
                        
                      </div>
                        <i class="fas fa-angle-down how__arrow"></i>
                      </div>
                      <!-- ========================== HOW 3 =============================== -->
          
                      <div class="how__list grid">
                        <div class="how__data">
                          <div class="how__title">
                            <h3 class="how__name">¿Quieres crecer?</h3>
                            <p class="how__description">Es el servicio personalizado y a la medida para empresas que necesiten o deseen un departamento comercial potente que se encuentre atendiendo de manera directa y exclusiva su crecimiento.</p>
                          </div>
                        </div>
                      </div>
                  </div>
               </div>
      
          </div>
      </section>
      
      
      <!-- ============ EXPERIENCIA ============ -->
      <section class="experience section" id="experience">
        <h2 class="section__title">Experiencia</h2>
        <span class="section__subtitle">Los integrantes más recientes</span>
        <div class="experience__container container">
      
          <div class="owl-carousel owl-theme">
       
        
          <!-- ============ EXPERIENCIA 1============ -->
          <div class="experiencie__content grid item">
            <img src="src/img/cdesing.jpg" alt="Cdesing" class="experience__img">
      
            <div class="experience__data">
              <h3 class="experiencie__title">CDesing</h3>
              <p class="experience__description">CDesing es una empresa enfocada al diseño de páginas WEB, aplicaciones y más, 
                que nos buscó como departamento de ventas externo para adquirir clientes potenciales y crecer con ayuda de la 
                implementación de nuestras estrategias Addmex Attract. 
              </p>
            </div>
          </div>
        
        
        
        <!-- ============ EXPERIENCIA 2============ -->
        <div class="experiencie__content grid item">
          <img src="src/img/caeli.jpg" alt="Caeli&Imperium" class="experience__img">
      
          <div class="experience__data">
            <h3 class="experiencie__title">Caeli & Imperium</h3>
            <p class="experience__description">Caeli & Imperium en busca de crecimiento y clientes nos contactó, pues
              para ellos pagar sueldos de vendedores representaba un gasto importante en su empresa, por lo que tomó 
              conveniente nuestra intervención. 
            </p>
          </div>
        </div>
        
      
      
      <!-- ============ EXPERIENCIA 3============ -->
      <div class="experiencie__content grid item">
        <img src="src/img/red.jpg" alt="IMPROCE" class="experience__img">
      
        <div class="experience__data">
          <h3 class="experiencie__title">IMPROCE</h3>
          <p class="experience__description">IMPROCE una empresa especializada en mantenimiento informático de software y hardware,
            comenzó a formar parte de nuestros partners teniendo la oportunidad de colaborar con la mayor cantidad de integrantes,
            adquiriendo clientes seguros. 
          </p>
        </div>
      </div>
      
      
      <!-- ============ EXPERIENCIA 4============ -->
      <div class="experiencie__content grid item">
        <img src="src/img/dalper.jpg" alt="Dalper" class="experience__img">
      
        <div class="experience__data">
          <h3 class="experiencie__title">Dalper Consultores Asociados S.C.</h3>
          <p class="experience__description">Dalper una empresa de un grupo de contadores públicos certificados especialista en impuestos se convirtió en un reto, porque 
            ya tenían un crecimiento considerable pero se encontraban en un estancamiento, dónde no existía crecimiento ni decrecimiento, Addmex Attract se enfocó al 100% 
            en abrir su mercado que se encontraba segmentado a un solo público.
          </p>
        </div>
      </div>
      
      </div>
      
      </div>
      </section>
      
      <!-- ====================== PARTNERS ====================== -->
      
      <section class="partner section">
        <div class="partner__bg">
          <div class="partner__container container grid">
            <div class="partner__data">
              <h2 class="partner__title">¿Te gustaría se parte de nuestros partners?</h2>
              <p class="partner__description">Contáctanos y platicanos tus necesidades, en Addmex
                estamos seguros que podemos contribuir y armar una estrategia perfecta para ti.
              </p>
              <a href="#contact" class="button button--flex button--white">Contáctanos <i class="fas fa-chevron-circle-right partner__icon button__icon"></i></a>
            </div>
      
            <img src="src/img/addmex.png" alt="addmex" class="partner__img">
          </div>
        </div>
      
      </section>
      
      
      <!-- ====================== CONTACTO ====================== -->
      
      <section class="contact section" id="contact">
      
        <h2 class="section__title">Contáctanos</h2>
        <span class="section__subtitle">Get in touch</span>
      
        <div class="contact__container container grid">
          <div>
      
            <div class="contact__information">
              <i class="fas fa-mobile-alt contact__icon"></i>
              <div>
                <h3 class="contact__title">Llámanos</h3>
                <span class="contact__subtitle">55-8213-5793</span>
              </div>
            </div>
      
            <div class="contact__information">
              <i class="far fa-envelope contact__icon"></i>
            <div>
                <h3 class="contact__title">Correo</h3>
                <span class="contact__subtitle">info@addmex.com.mx</span>
              </div>
            </div>
      
            <div class="contact__information">
              <i class="fab fa-whatsapp contact__icon"></i>
            <div>
                <h3 class="contact__title">Whatsapp</h3>
                <span class="contact__subtitle">55-8213-5793</span>
              </div>
            </div>
          </div>

          <?php
        if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>
      
          <form action="src/PHP/correo.php" method="post" action="" class="contact__form grid">
            <div class="contact__inputs grid">
      
              <div class="contact__content">
                <label for="" class="contact__label">
                  Nombre
                </label>
                <input onkeypress="return /[a-z]/i.test(event.key)" id="name" type="text" class="contact__input" name="name">
              </div>
      
              <div class="contact__content">
                <label for="" class="contact__label">
                  Correo
                </label>
                <input id="email" type="email" class="contact__input" name="email">
              </div>
      
              <div class="contact__content">
                <label for="" class="contact__label">
                  Celular
                </label>
                <input id="celular" type="number" class="contact__input" name="celular">
              </div>
      
              <div class="contact__content">
                <label for="" class="contact__label">
                  Mensaje
                </label>
                <textarea id="msg" cols="0" rows="7" class="contact__input" name="msg"></textarea>
              </div>
      
              <div>
                <a  class="button button--flex">
                <input type="submit" name= "enviar" onclick="return validar1();"> 
                  <i class="fas fa-paper-plane button__icon"></i>
                </a>
                
              </div>
      
            </div>
          </form>

          <?php
        } else{
        ?>
        <form action="src/PHP/correo.php" method="post" action="" class="contact__form grid">
          <div class="contact__inputs grid">
    
            <div class="contact__content">
              <label for="" class="contact__label">
                Nombre
              </label>
              <input onkeypress="return /[a-z]/i.test(event.key)" id="name" type="text" class="contact__input" name="name">
            </div>
    
            <div class="contact__content">
              <label for="" class="contact__label">
                Correo
              </label>
              <input id="email" type="email" class="contact__input" name="email">
            </div>
    
            <div class="contact__content">
              <label for="" class="contact__label">
                Celular
              </label>
              <input id="celular" type="number" class="contact__input" name="celular">
            </div>
    
            <div class="contact__content">
              <label for="" class="contact__label">
                Mensaje
              </label>
              <textarea id="msg" cols="0" rows="7" class="contact__input" name="msg"></textarea>
            </div>
    
            <div>
              <a  class="button button--flex">
              <input type="submit" name= "enviar" onclick="return validar1();"> 
                <i class="fas fa-paper-plane button__icon"></i>
              </a>
              
            </div>
    
          </div>
        </form>


        <?php } ?>

          
          
        </div>
      </section>
      
      </main>

    <footer class="footer">
      <div class="footer__bg">
        <div class="footer__container container grid">
          <div>
            <h1 class="footer__title">addmex</h1>
            <span class="footer__subtitle">Vendiendo tu ingenio</span>
          </div>

          <ul class="footer__links">
            <li>
              <a href="#services" class="footer__link">Servicios</a>
            </li>
            <li>
              <a href="#experience" class="footer__link">Experinecia</a>
            </li>
            <li>
              <a href="#contact" class="footer__link">Contacto</a>
            </li>
          </ul>

          <div class="footer__socials">
            <a
              href="https://api.whatsapp.com/send?phone=5215582135793"
              target="_blank"
              class="footer__social"
              ><i class="fab fa-whatsapp"></i>
            </a>
            <a
              href="https://www.facebook.com/Addmexventas"
              target="_blank"
              class="footer__social"
              ><i class="fab fa-facebook"></i>
            </a>
            <a
              href="https://www.instagram.com/1.addmex/"
              target="_blank"
              class="footer__social"
              ><i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>

        <p class="footer__copy">
          &#169; addmex 2021. Todos los derechos reservados.
        </p>
      </div>
    </footer>

    <a href="#home" class="scrollup" id="scroll-up"
      ><i class="fas fa-arrow-up scrollup__icon"></i
    ></a>

    <script src="src/js/jquery-3.4.1.min.js"></script>
    <script src="src/js/owl.carousel.min.js"></script>
    <script src="src/js/main.js"></script>
    <script
      src="https://kit.fontawesome.com/d21febef4d.js"
      crossorigin="anonymous"
    ></script>
    <script src="src/js/validar-1.js"></script>
  </body>
</html>
