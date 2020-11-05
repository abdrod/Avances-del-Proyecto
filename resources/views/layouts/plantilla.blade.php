<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


     <title>{{ config('app.name', 'Laravel') }}</title>
     <!--

    Template 2106 Soft Landing

     http://www.tooplate.com/view/2106-soft-landing

    -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a >Welcome  you all to my Sistema Abdias Rodríguez </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="#home" class="smoothScroll">Vinateria "Bonita"</a></li>
                         <li><a href="#feature" class="smoothScroll">Acceder al Sistema</a></li>
                         <li><a href="#about" class="smoothScroll">Vendedores</a></li>
                         <li><a href="#pricing" class="smoothScroll">Nuestros Precios</a></li>
                         <li><a href="#contact" class="smoothScroll">Contactenos</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Escribanos - <span>VinateriaBonita@gmail.com</span></a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- FEATURE -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                              <h3>Ventas</h3>
                              <h1>Gran  Variedad de Productos!</h1>
                              <h2>Vinateria "Bonita"</h2><br><br>
                              <form action="" method="get" class="online-form">
                                   <input type="email" name="email" class="form-control" placeholder="Ingrese su Correo" required>
                                   <button type="submit" class="form-control">Iniciar</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section id="feature" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Acceso al Sistema de Ventas</h1>
                         </div>
                         @yield('content')
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Promos</a></li>

                              <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Vinos y Licores</a></li>

                              <li><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Cigarros</a></li>
                         </ul>

                         <div class="tab-content">
                              <div class="tab-pane active" id="tab01" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Grandes Ofertas</h2>
                                        <p>Grandes ofertas en nuestros Productos.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Gran Calidad</h2>
                                        <p>Calidad inigualable en Nuestros Vinos.</p>
                                   </div>
                              </div>


                              <div class="tab-pane" id="tab02" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Venta de Vodkas</h2>
                                        <p>Tenemos vodka de la mejor calidad a buen precio.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Bebidas Alcoholicas</h2>
                                        <p>Venta de  varias Marcas de Cerveza.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Tenemos Botanas</h2>
                                        <p>Botanas  A Buenos  Precios.</p>
                                   </div>
                              </div>

                              <div class="tab-pane" id="tab03" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Venta de Paquetes de Cigarro</h2>
                                        <p>En la compra de un paquete de cigarros de cualquier marca te regalamos una Caguama Corona.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Mallboro</h2>
                                        <p>3x2 en la compra de cigarros Mallboro.</p>
                                   </div>
                              </div>
                         </div>

                    </div>

                    <div class="col-md-6 col-sm-6">
                         <div class="feature-image">
                              <img src="{{asset('images/feature-mockup.jpg')}}" class="img-responsive" alt="Thin Laptop">                             
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="section-title">
                              <h1>Vendedores</h1>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="{{asset('images/team-image1.jpg')}}" class="img-responsive" alt="Andrew Orange">
                              <div class="team-info team-thumb-up">
                                   <h2>Josue roble</h2>
                                   <small>Vendedor</small>
                                   <p>Profesional en su are de ventas listopara atenderle.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <div class="team-info team-thumb-down">
                                   <h2>Maria Perez</h2>
                                   <small>Vendedora</small>
                                   <p>Lista para Atenderle.</p>
                              </div>
                              <img src="{{asset('images/team-image2.jpg')}}" class="img-responsive" alt="Catherine Soft">
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="{{asset('images/team-image3.jpg')}}" class="img-responsive" alt="Jack Wilson">
                              <div class="team-info team-thumb-up">
                                   <h2>Jose Rocha</h2>
                                   <small>Administrador</small>
                                   <p>Conoce cada Area del Negocio</p>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-image"></div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-info">
                              
                              <div class="section-title">
                                   <h1>Opiniones de Nuestros Clientes</h1>
                              </div>

                              <div class="owl-carousel owl-theme">
                                   <div class="item">
                                        <h3>Siempre acudo al negocio por mis productos ya que tienen aparte del buen servicio buenos precios.</h3>
                                        <div class="testimonial-item">
                                             <img src="{{asset('images/tst-image1.jpg')}}" class="img-responsive" alt="Michael">
                                             <h4>Juan Martinez</h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h3>Son muy atentos.</h3>
                                        <div class="testimonial-item">
                                             <img src="{{asset('images/tst-image2.jpg')}}" class="img-responsive" alt="Sofia">
                                             <h4>Sofia Luna</h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h3>Los recomiendo Mucho.</h3>
                                        <div class="testimonial-item">
                                             <img src="{{asset('images/tst-image3.jpg')}}" class="img-responsive" alt="Monica">
                                             <h4>Monica</h4>
                                        </div>
                                   </div>
                              </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- PRICING -->
     <section id="pricing" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Ofertas del Mes</h1>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="pricing-thumb">
                             <div class="pricing-title">
                                  <h2>Noviembre</h2>
                             </div>
                             <div class="pricing-info">
                                   <p>20% de descuento en vinos</p>
                                  
                             </div>
                             <div class="pricing-bottom">
                                   <span class="pricing-dollar"></span>
                                   <a href="#" class="section-btn pricing-btn">Obtener Ahora</a>
                             </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="pricing-thumb">
                             <div class="pricing-title">
                                  <h2>Diciembre</h2>
                             </div>
                             <div class="pricing-info">
                                   <p>20% de descuento en compras de mas de $1500,pesos</p>
                                   
                             </div>
                             <div class="pricing-bottom">
                                   <span class="pricing-dollar"></span>
                                   <a href="#" class="section-btn pricing-btn">Obtener Ahora</a>
                             </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="pricing-thumb">
                             <div class="pricing-title">
                                  <h2>Ofertas 3x2</h2>
                             </div>
                             <div class="pricing-info">
                                   <p>$ 100  pesos de reem bolso en compras de mas de $900 pesos</p>
                                  
                             </div>
                             <div class="pricing-bottom">
                                   <span class="pricing-dollar"></span>
                                   <a href="#" class="section-btn pricing-btn">Register now</a>
                             </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>   


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h1>Contactenos</h1>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <input type="text" class="form-control" placeholder="Full name" name="name" required>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="email" class="form-control" placeholder="Email address" name="email" required>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="8" placeholder="Your message" name="message" required></textarea>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>       


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>By Abdias Rodríguez</p>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="{{asset('js/jquery.js')}}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
     <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
     <script src="{{asset('js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('js/smoothscroll.js')}}"></script>
     <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>