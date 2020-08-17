@extends('adminlte::master')
@section('adminlte_css')
    <link rel="icon" href="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/css/main.css">
    <link rel="stylesheet" href="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/css/back.css">
    <link rel="stylesheet" href="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/css/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
@endsection
@section('body')
<header>
    <nav id="navbar">
      <div class="nav-wrapper">
        <div class="logo">
          <h1>
            <a href="/"> <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/logo.png" alt="">
            </a>
          </h1>
        </div>
        <ul id="menu">
          <li class="active"><a href="#nosotros">Nosotros</a></li>
          <li><a href="#ofrecer">¿Qué ofrecemos?</a></li>
          <li><a href="#productos">Productos</a></li>
          <li><a href="#beneficio">Beneficios</a></li>
          <li><a href="#contacto">Contáctanos</a></li>
        </ul>

      </div>
    </nav>
    <div class="menuIcon">
      <span class="icon icon-bars"></span>
      <span class="icon icon-bars overlay"></span>
    </div>
    <div class="overlay-menu">
      <ul id="menu">
        <li class="active"><a href="#nosotros">Nosotros</a></li>
        <li><a href="#ofrecer">¿Qué ofrecemos?</a></li>
        <li><a href="#productos">Productos</a></li>
        <li><a href="#beneficio">Beneficios</a></li>
        <li><a href="#contacto">Contáctanos</a></li>
      </ul>
    </div>
  </header>



<section class="banner_home">
    <div class="owl-carousel owl-theme owl-banner_principal" >
      <div class="item" style="background-image: url('https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/banner1.jpg')">
        <div class="tapar"></div>
        <div class="container">
          <h2> <span> #1</span> Plataforma Innovadora de Soluciones Tecnológicas</h2>
        </div>
      </div>
      <div class="item" style="background-image: url('https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/banner3.jpg')">
        <div class="tapar"></div>
        <div class="container">
          <h2> <span> #2</span> Mejor Core Financiero para la Banca Digital</h2>
        </div>
      </div>
      <div class="item" style="background-image: url('https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/banner2.jpg')">
        <div class="tapar"></div>
        <div class="container">
          <h2> <span> #3</span> Flexibilidad y Portabilidad de Herramientas 4GL</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="dots_p owl-dots">
        <button role="button" class="owl-dot">
          <div class="loader desaparecer">
            <div></div>
            <h3>Plataforma <br>innovadora <span>#1</span> </h3>
            <div class="line"></div>
            <div class="subline inc"></div>
          </div>
          <div class="dot_home aparecer"></div>
        </button>
        <button role="button" class="owl-dot"> 
          <div class="loader desaparecer">
            <h3>Mejor Core  <br>Financiero <span>#2</span> </h3>
            <div class="line"></div>
            <div class="subline inc"></div>
          </div>
          <div class="dot_home aparecer"></div>
        </button>
        <button role="button" class="owl-dot"> 
          <div class="loader desaparecer">
            <h3>Flexibilidad y <br> Portabilidad <span>#3</span> </h3>
            <div class="line"></div>
            <div class="subline inc"></div>
          </div>
          <div class="dot_home aparecer"></div>
        </button>
      </div>
    </div>
  </section>
  <section class="quienes_somos" id="nosotros">
    <div class="container">
      <div class="quienes">
                  
        <div class="mitad">
         <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/logo_color.png" class="logo_color aparecer">
          <h2>Quiénes somos</h2>
          <p>Universal Software House Perú es una empresa fundada por socios peruanos y operamos en alianza con Universal Software House, propietaria del sistema Core Banking PARADISE. </p>
          <p>Nuestro objetivo es brindar soluciones tecnológicas innovadoras para empresas del rubro financiero en Perú y América Latina.</p>
          <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/logo_color.png" class="logo_color desaparecer" >
        </div>
        <div class="mitad">
          <h3>Visión</h3>
          <p>Nuestra visión es llegar a ser una empresa de tecnología que genere valor a nuestros clientes y socios de negocio, convirtiéndonos en un referente tecnológico en el Sistema Financiero, basados en la innovación y siempre buscando la excelencia en la experiencia de cliente..</p>
          <h3>Misión</h3>
          <p>Proveer soluciones de tecnologías innovadoras, flexibles, robustas y confiables para el mercado financiero en Perú y Latino América.</p>
        </div>
      </div>
      <div class="video" style="background-image: url(https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/video.jpg);">
        <!-- <a href="#" class="open_modal"> <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/play.png" alt="" class="play"></a> -->
      </div>
    </div>
  </section>
  <section class="soluciones" id="ofrecer" style="background-image: url('https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/freelance.jpg')">
    <div class="tapar"></div>
    <div class="container">
      <h2>Las Mejores Soluciones Tecnológicas</h2>
    </div>
      <div class="owl-carousel owl-theme owl-soluciones">
        <div class="item">
          <div class="titulo">
            <h3> <span>#1</span> Core Banking “Reloaded”</h3>
          </div>
          <div class="info">
            <p>La empresa nace heredando los clientes de SIAF que representa uno de los core banking más completos y robustos, el equipo de Universal Software House toma la base de este Core y lo reformula con una herramienta de 4GL que permite brindar los mejor de ambos mundos, un sistema completo, robusto pero con la flexibilidad y agilidad de las herramientas modernas, por esa razón lo llamamos SIAF “reloaded”.</p>
          </div>
        </div>

        <div class="item">
          <div class="titulo">
            <h3> <span>#2</span>Definición de Productos Wizard Amigable</h3>
          </div>
          <div class="info">
            <p>Esta característica única en PARADISE permite rápidamente generar nuevos productos, dejando de lado los productos rígidos de difícil adaptación a nuevos cambios donde la intervención de TI es importante, con PARADISE los usuarios definen sus productos fácil y rápidamente.</p>
          </div>
        </div>

        <div class="item">
          <div class="titulo">
            <h3> <span>#3</span>Gestor de Cobranzas Automático </h3>
          </div>
          <div class="info">
            <p>Gestor automático las 24 horas alerta a las acreditaciones en las cuentas del cliente para cobrar toda deuda que mantenga el cliente con la institución sea desde una cuota de crédito a una simple comisión.</p>
          </div>
        </div>

        <div class="item">
          <div class="titulo">
            <h3> <span>#4</span> Flexible y Paramétrico 4GL</h3>
          </div>
          <div class="info">
            <p>En la construcción de PARADISE se usó LANSA, una herramienta 4GL que permite tener una independencia de bases de datos, independencia de plataformas, etc. haciéndolo  portable a cualquier institución financiera.</p>
          </div>
        </div>

        <div class="item">
          <div class="titulo">
            <h3> <span>#5</span> Core Financiero para la Banca Digital</h3>
          </div>
          <div class="info">
            <p>PARADISE tiene en su concepción una Arquitectura de microservicios orientada a la Banca Digital, un diseño totalmente paramétrico que lo hace muy flexible.</p>
          </div>
        </div>
      </div>

  </section>
  <section class="productos" id="productos">
    <div class="">
      <div class="lansa">
        <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/paradise.png" alt="">
      </div>
      <div class="paradise">
        <h3>Paradise Financial Suite</h3>
        <p>Es una herramienta de Core Banking que integra una gama de productos bancarios y microfinancieros con características únicas, desarrollado por nuestra empresa en una plataforma Word Class de cuarta generación.</p>
      </div>
      <div class="modulos">
        <ul class="accordion">
          <li class="accordion__item">
            <a class="accordion__title" href="javascript:void(0)">Modulos financieros <i class="fas fa-chevron-up"></i> <i class="fas fa-chevron-down"></i></a>
            <div class="accordion__content">
              <ul>
                <li>Módulo de Clientes</li>
                <li>Cuentas Personales
                  <!-- <ul>
                    <li>Cuentas Corrientes</li>
                    <li>Cuentas de Ahorros</li>
                    <li>Depósitos a Plazo Fijo</li>
                    <li>Tarjetas de débito</li>
                  </ul> -->
                </li>
                <li>Líneas de Crédito </li>
                <li>Garantía</li>
                <li>Créditos 
                  <!-- <ul>
                    <li>Préstamos</li>
                    <li>Tarjetas de Crédito</li>
                    <li>Factoring</li>
                    <li>Leasing</li>
                    <li>Fianzas</li>
                  </ul> -->
                </li>
                <li>Mesa de Dinero</li>
                <li>Comercio Exterior</li>
                <li>Contabilidad </li>
                <li>Cajas</li>
                <li>Valores</li>
                <li>Fideicomiso</li>
                <li>Impuestos</li>
                <li>Canales</li>
                <!-- <li>
                  <ul>
                    <li>Atm’s</li>
                    <li>IVR’s</li>
                    <li>Wireless device</li>
                    <li>Dispositivos móvil</li>
                    <li>Web</li>
                    <li>Web services</li>
                    <li>Manejo de Mensajeria</li>
                    <li>ISO8583</li>
                  </ul>
                </li> -->
              </ul>
            </div>
          </li>
          <li class="accordion__item">
            <a class="accordion__title" href="javascript:void(0)">Funcionalidad <i class="fas fa-chevron-up"></i> <i class="fas fa-chevron-down"></i></a>
            <div class="accordion__content">
              <ul>
                <li>Multiempresa</li>
                <li>Multimoneda</li>
                <li>Multilenguaje</li>
                <li>Paramétrico</li>
                <li>Autorizaciones Centralizadas</li>
                <li>Control de Acceso a Canales</li>
                <li>Operación OFF-LINE</li>
                <li>Seguridad en todos los Niveles</li>
                <li>Manejo de Imágenes</li>
                <li>Ayuda en Línea</li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <div class="lansa blanco">
        <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/financial.png" alt="">
      </div>
      <div class="financial">
        <h3>Financial Suitecoop By Paradise</h3>
        <p>Es la solución de PARADISE para el mercado Cooperativo que integra una gama de productos financieros con las características propias de las COOPAC, brindándole además a sus socios los canales de acceso digital como Web y Smartphone.</p>
        <p>FINANCIAL SUITECOOP cuenta con la gama completa de la solución para el mercado financiero además de los siguientes módulos únicos del sistema cooperativo:</p>
        <ul>
          <li>Gestión de socios</li>
          <li>Cuenta de aportes</li>
        </ul>
        <p>FINANCIAL SUITECOOP es el único producto financiero en el mercado latinoamericano desarrollado en su totalidad sobre una herramienta de 4GL, LANSA.</p>
      </div>
      <div class="img_financial" style="background-image: url(https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/financial.jpg);">
        <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/financial2.jpg" alt="">
      </div>
    </div>
  </section>
  <section class="beneficios" id="beneficio">
    <div class="container">
      <div class="info">
        <h2>Beneficios Técnicos</h2>
        <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/lansa.png" alt="">
<!--         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et</p> -->
      </div>
      <div class="beneficio">
        <div class="owl-carousel owl-theme owl-beneficio">
          <div class="item">
            <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/beneficio1.jpg" alt="">
            <div class="info">
              <h3> <span>#1</span>Garantía</h3>
              <div class="hover">
                <p>Universal Software House ofrece total independencia entregando los fuentes del sistema, de esta forma nuestros clientes tiene la garantía para desarrollar sus propios módulos. También pueden usar nuestros servicios de desarrollo.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/beneficio2.jpg" alt="" >
            <div class="info">
              <h3> <span>#2</span>Lansa</h3>
              <div class="hover">
                <p>Mayor gestión del conocimiento en TI, una sola herramienta para desarrollar productos en PC, Smartphone, Web, Web services, e integración automática con los sistemas de oficina (Word, Excel, Email, Pdf).</p>
                <p>La herramienta de desarrollo LANSA, utilizada por 35 de los 100 bancos Top en el mundo. LANSA  es miembro del programa IBM Developer’s Roadmap (Miembro all-star), y miembro del programa Microsoft Midrange Application (Miembro Gold Certified).</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="soluciones_servicios">
    <div class="container">
      <div class="columnas3">
        <h2>Soluciones y Servicios</h2>
        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p> -->
      </div>
      <div class="columnas3">
        <h3>#1 Solución en Renting del Core Banking</h3>
        <p>En las entidades financieras, la decisión del uso de un determinado Core Transaccional es uno de los pasos en el crecimiento de toda institución, que requiere la mayor inversión en temas tecnológicos.</p> <p>Por esta razón y con el objetivo de  mitigar el impacto financiero de estas decisiones, Universal Software House Perú provee la solución de Core Banking como un servicio, es decir la entidad financiera no necesitara invertir en costosos activos para tener una solución World Class, a través de una renta mensual se podrá acceder a cualquiera de nuestra soluciones de Core Transaccional.</p>
      </div>
      <div class="columnas3">
        <h3>#2 Solución como un servicio Core Banking on Demand</h3>
        <p>En adición a la solución en renta de cualquiera de nuestras versiones de Core Transaccional, ofrecemos a nuestros clientes el hosting de la solución en una de las plataformas más robustas del mercado. </p>
      </div>
    </div>
  </section>
  <section class="marcas" style="background-image: url('https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/marcas.jpg')">
    <div class="container">
      <div class="texto">
        <h3> <span>#Aliados</span> Marcas que confían en nosotros</h3>
        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p> -->
      </div>
      <div class="slider">
        <div class="owl-carousel owl-theme owl-marcas">
          <div class="item">
            <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/logo_kuria.png" alt="">
          </div>
          <div class="item">
            <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/logo_bonga.png" alt="">
          </div>
          <div class="item">
            <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/logo_bonga2.png" alt="">
          </div>
          <div class="item">
            <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/logo_bonga3.png" alt="">
          </div>
          <div class="item">
            <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/logo_bonga4.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contacto" id="contacto">
    <div class="container">
      <div class="titulo">
        <h3>Contáctate con nosotros</h3>
        <p>Complete sus datos y uno de nuestros asesores se contactará con usted en breve.</p>
      </div>
      <form class="" action="#" id="form-contactanos" method="post">
        <div class="columnas3">
          <input type="text" name="nombres" id="nombres"  placeholder="Nombres*"  onkeyup="this.value=this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ ]/g,'')">
        </div>
        <div class="columnas3">
          <input type="text" name="apellidos" id="apellidos"  placeholder="Apellidos*"  onkeyup="this.value=this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ ]/g,'')">
        </div>
        <div class="columnas3">
          <input type="text" name="telefono" id="telefono"  placeholder="Telefono*" oninput="this.value = this.value.replace(/[^0-9+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
        </div>
        <div class="columnas3">
          <input type="email" name="email" id="email" placeholder="Correo electrónico*">
        </div>
        <div class="columnas3">
          <input type="text" name="cargo" id="cargo"  placeholder="Cargo*">
        </div>
        <div class="columnas3">
          <input type="text" name="empresa" id="empresa"  placeholder="Empresa*">
        </div>
        <textarea name="mensaje"  id="mensaje" rows="8" cols="80" placeholder="Mensaje"></textarea>
        <div class="terminos">
          <p>Campos Obligatorios*</p>
          <div class="checkbox">
            <input type="checkbox" class="input-assumpte" id="terminos" />
            <label for="terminos"></label>
          </div>
          <span class="checkmark"></span>
          <label for="" class="acepto-terminos"> Acepto los <a href="#" class="modal_terminos"> Términos y condiciones y Políticas de privacidad </a>de tratamientos de mis datos.</label>
        </div>
        <div class="submit">
        <input type="submit" name="" value="Enviar" id="enviarFormContactenos" onclick="registroContactanos('#form-contactanos')">
          <!-- utm -->
          <input type="hidden" name="utm_medium" id="utm_medium" value="">
          <input type="hidden" name="utm_source" id="utm_source" value="">
          <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
          <input type="hidden" name="utm_content" id="utm_content" value="">
          <input type="hidden" name="utm_term" id="utm_term" value="">
          <input type="hidden" id="template_url" value="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria"> 
          <input type="hidden" name="formulario" id="formulario" value="contactenos">
        </div>
      </form>
    </div>
  </section>
  <footer>
    <div class="container">
      <!-- <div class="logo_f">
        <img src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/images/logo.png" alt="">
      </div>
      <div class="menu2">
        <ul>
          <li>Nosotros</li>
          <li>¿Qué ofrecemos?</li>
          <li>Productos</li>
          <li>Beneficios</li>
        </ul>
      </div> -->
      <div class="redes">
        <ul>
          <a href="https://www.facebook.com/ush.per.5" target="_blank"><li><i class="fab fa-facebook-f"></i></li></a>
          <a href="https://www.linkedin.com/company/ushperu/about/" target="_blank"><li><i class="fab fa-linkedin-in"></i></li></a>
          <!-- <a href="" target="_blank"><li><i class="fab fa-twitter"></i></li></a> -->
        </ul>
      </div>
    </div>
  </footer>
  <!-- <div class="modal_video video-popup">
    <div class="container_video">
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/BqkIMdHWnds" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <a href="#" class="close">X</a>
    </div>
  </div> -->

  <div class="modal_video modal_terminos_abrir">
    <div class="container_video">
      <h3> Términos y condiciones </h3>
      <p>La información y datos que nos proporcione voluntariamente a través del sitio web se incluirán en una base de datos que quedará bajo la responsabilidad de USHP, con el objetivo de proporcionarle un servicio personalizado y a la altura de sus necesidades, mejorando el canal de comunicación con el usuario.
	La aceptación de estos Términos y Condiciones, implica que Ud. presta su consentimiento libre, previo, informado, expreso e inequívoco para la inclusión, uso y tratamiento de sus datos personales por USHP. USHP realizará el tratamiento de sus datos personales de acuerdo con lo establecido por la Ley N° 29733 “Ley de Protección de Datos Personales” y su Reglamento, aprobado mediante Decreto Supremo 003-2013/JUS. Se informa que los datos recopilados se utilizarán para contactarse y enviar información mediante cualquier medio y soporte sobre nuestros productos, promociones, el seguimiento de un eventual proceso de inscripción, encuestas de satisfacción, fines administrativos y estadísticos, entre otros similares. USHP garantiza que toda la información proporcionada será guardada bajo estricta confidencialidad y su uso será para el cumplimiento de los fines antes detallados. El usuario, en cualquier circunstancia, podrá revocar la autorización o modificar sus datos escribiendo al correo electrónico <a href="mailto:info@universalsoftwarehouse.com.pe" style="color:#051234">info@universalsoftwarehouse.com.pe</a>.</p>
      <a href="#" class="close">X</a>
    </div>
  </div>

  <div class="modal_video modal_politicas_abrir">
    <div class="container_video">
      <h3>Políticas de privacidad </h3>
      <p>Protección de Datos Personales

La información y datos que nos proporcione voluntariamente a través del sitio web se incluirán en una base de datos que quedará bajo la responsabilidad de USHP, con el objetivo de proporcionarle un servicio personalizado y a la altura de sus necesidades, mejorando el canal de comunicación con el usuario.
La aceptación de estos Términos y Condiciones, implica que Ud. presta su consentimiento expreso, libre e informado para la inclusión, uso y tratamiento de sus datos personales por USHP. USHP realizará el tratamiento de sus datos personales en un todo de acuerdo con las disposiciones de la Ley 25.326 sobre Protección de los Datos Personales y demás normas vigentes en la materia, adoptando los recaudos técnicos y organizativos necesarios en lo que respecta a la custodia, almacenamiento, conservación y confidencialidad de la información con el fin de evitar su alteración, pérdida, tratamiento o acceso no autorizado. Debido a que ninguna transmisión vía Internet puede garantizar su íntegra seguridad, USHP no puede garantizar que la información transmitida a través del sitio web se encuentra completamente segura, con lo cual Ud. asume este riesgo que declara conocer y aceptar. Sus datos personales podrán ser compartidos con filiales y/o empresas vinculadas o contratadas de USHP., con el fin de poder ofrecerle las prestaciones de este sitio web y cumplir con los presentes Términos y Condiciones, para lo cual Ud. presta su expreso consentimiento y autorización. Los usuarios tienen derecho a acceder a sus datos personales en forma gratuita a intervalos no inferiores a seis (6) meses, salvo que se acredite interés legítimo al efecto conforme lo establecido en el artículo 14, inciso 3 de la Ley 25.326 (Disposición 10/2008, artículo 1°, B.O. 18/09/2008), así como a solicitar que sus datos sean rectificados, actualizados o removidos de las bases de datos de USH. Se le hace saber que la Dirección Nacional de Protección de Datos Personales, órgano de control de la ley 25.326, tiene la atribución de atender las denuncias y reclamos que se interpongan con relación al incumplimiento de las normas sobre protección de datos personales.</p>
      <a href="#" class="close">X</a>
    </div>
  </div>
  @section('adminlte_js')
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/js/owl.carousel.min.js"></script>
    <script src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/js/masonry.min.js"></script>
    <script src='https://cdn.rawgit.com/desandro/masonry/master/dist/masonry.pkgd.min.js'></script>
    <script src='https://cdn.rawgit.com/digistate/resouces/master/multipleFilterMasonry.js'></script>
    <script src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/js/jquery.validate.min.js"></script>
    <script src="https://universalsoftwarehouse.com.pe/wp-content/themes/kuria/js/main.js"></script>   
  @endsection
@endsection
