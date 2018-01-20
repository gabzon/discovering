{{--
Template Name: Homepage
--}}

@extends('layouts.front')

@section('content')
  @while(have_posts()) @php(the_post())
    <header class="masthead text-center text-white d-flex" style="background-image: url('http://localhost/discoveringvenezuela/web/app/themes/discovering/dist/images/jungle.jpg')">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <span class="text-faded i f2">Bienvenidos a Bolivar</span>
          </div>
        </div>
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>El paraiso perdido!</strong>
          </h1>
          <br><br>
          <a class="btn btn-primary btn-xl js-scroll-trigger mb-5" href="{{ get_permalink( get_page_by_title( 'destinos' ) ) }}">Descubre mas</a>
        </div>
        <br>
        <span class="i f6 light-gray">Photo by Jorge Illich-Gejo on Unsplash</span>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading ttu">Informacion</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="{{ get_permalink( get_page_by_title( 'explora' ) ) }}">
              <i class="fas fa-compass fa-4x text-primary mb-3 sr-icons"></i>
              </a>
              <a href="{{ get_permalink( get_page_by_title( 'explora' ) ) }}">
              <h3 class="mb-3">Explora, descubre, aprende</h3>
              </a>
              <p class="text-muted mb-0">Encuentra todo lo que puedas hacer en este lugar magico.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="{{ get_permalink( get_page_by_title( 'transporte' ) ) }}">
                <i class="fa-4x fas fa-building text-primary mb-3 sr-icons"></i>
              </a>
              <a href="{{ get_permalink( get_page_by_title( 'transporte' ) ) }}">
                <h3 class="mb-3">Alojamiento y estadia</h3>
              </a>
              <p class="text-muted mb-0">Necesitas buscar un hotel o posada, aqui lo encontraras!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="{{ get_permalink( get_page_by_title( 'transporte' ) ) }}">
                <i class="fas fa-plane text-primary mb-3 sr-icons fa-4x"></i>
              </a>
              <a href="{{ get_permalink( get_page_by_title( 'transporte' ) ) }}">
                <h3 class="mb-3">Mobilidad & Transporte</h3>
              </a>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="{{ get_permalink( get_page_by_title( 'informacion turistica' ) ) }}">
                <i class="fas fa-info-circle fa-4x text-primary  mb-3 sr-icons"></i>
              </a>
              <a href="{{ get_permalink( get_page_by_title( 'informacion turistica' ) ) }}">
                <h3 class="mb-3">Informacion Turistica</h3>
              </a>
              <p class="text-muted mb-0">Todo lo que necesites saber con respecto al estado bolivar!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading ttu">Lugares populares</h2>
          <hr class="my-4">
        </div>
      </div>
      <br>
      <br>
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="@asset('images/portfolio/fullsize/1.jpg')">
              <img class="img-fluid" src="@asset('images/portfolio/thumbnails/1.jpg')" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Categoria 1
                  </div>
                  <div class="project-name">
                    Project El niño
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="@asset('images/portfolio/thumbnails/2.jpg')" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="@asset('images/portfolio/thumbnails/3.jpg')" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="@asset('images/portfolio/thumbnails/4.jpg')" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="@asset('images/portfolio/thumbnails/5.jpg')" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="@asset('images/portfolio/thumbnails/6.jpg')" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <a class="btn btn-light btn-xl sr-button" href="{{ get_permalink( get_page_by_title( 'explora' ) ) }}">Explorar</a>
      </div>
    </section>

  @endwhile
@endsection
