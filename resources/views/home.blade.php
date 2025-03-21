<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr">
  <head>
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
    <meta name="google-site-verification" content="2r8a3_tscqqtMcPIa8qVNulTLpizXpW3x86vTdNoQxM" />
    <link rel="stylesheet" href="nicepage.css" media="screen"/>
    <link rel="stylesheet" href="Home.css" media="screen"/>
    <script type="text/javascript" src="jquery.js" defer=""></script>
    <script type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="animate.min.css"/>
    <style>
      .slider {
        width: 100%;
        position: relative;
        overflow: hidden;
      }

      .slides {
        display: flex;
      }

      .slide {
        flex-shrink: 0;
        width: 100%;
        position: relative;
      }

      .slide img {
        width: 100%;
        height: auto;
      }
      
      .navigation {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
      }

      
    </style>

  </head>
  <body class="u-body u-xl-mode">

    
    <!-- slider modal  -->
    <!-- Button trigger modal -->
    @if($available==1)
  <div class="alert alert-warning fixed-top" role="alert" style="margin-bottom:0px;">
    <div class="row">
      <div class="col-4 text-right">
        <span><img width="50px" src="/images/1378644.png" alt="Promotions" title="Promotion"></span>
      </div>
      <div class="col-8 d-flex align-items-center">
          Des nouveaux promotions disponible &nbsp <a href="#" class="alert-link"  data-toggle="modal" data-target="#exampleModalCenter" class="alert-link"> Clicker ici</a>
      </div>
    </div>
  </div>
      <script>
  document.addEventListener("DOMContentLoaded", function () {
    // Access the modal element
    var modal = document.getElementById('exampleModalCenter');

    // Ensure proper display and add required classes for Bootstrap modal
    modal.classList.add('show');
    modal.style.display = 'block';
    
    modal.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
    modal.setAttribute('aria-hidden', 'false');

    // Add the 'modal-open' class to the body to prevent background scrolling
    document.body.classList.add('modal-open');
    
    // Close the modal when the user clicks on the backdrop or close button
    modal.addEventListener('click', function (event) {
      if (event.target === modal || event.target.classList.contains('close')) {
        modal.classList.remove('show');
        modal.style.display = 'none';
        document.body.classList.remove('modal-open');
      }
    });
  });
</script>
  @endif
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"'>
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          
          <div class="slider">
            <div class="slides">
              @foreach($promotions as $promotion)
              <div class="slide"><img src="/public{{ $promotion->imagePath }}"></div>
              @endforeach
            </div>
            <div class="navigation">
              
              <button class="prev" style="width:30px;height:30px;margin-right:10px;">
              <span aria-hidden="true">
                <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                          c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
              </span>
              <span class="sr-only">Previous</span>
              </button>
              <button class="next" style="width:30px;height:30px;margin-left:10px;">
                <span aria-hidden="true">
                  <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                            c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
                <span class="sr-only">Next</span>
              </button>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <!-- end slider modal -->
  
    <section class="u-carousel u-slide u-block-f949-1" id="carousel_c84f" data-interval="5000" data-u-ride="carousel">
      
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-1" src="" data-image-width="1280" data-image-height="849">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-border-3 u-border-grey-25 u-line u-line-horizontal u-line-1"></div>
            <div class="u-border-3 u-border-grey-25 u-line u-line-horizontal u-line-2"></div>
            <div class="u-border-3 u-border-grey-25 u-line u-line-horizontal u-line-3"></div>
            <img class="u-image u-image-contain u-image-default u-image-1" src="images/Logo-HM-PNG.png" alt="" data-image-width="2700" data-image-height="1874">
            <h1 class="u-align-left u-text u-text-body-alt-color u-text-1"> Voyager en toute confiance&nbsp;avec votre agence préférée HM Tours &amp; Travels !</h1>
            <h3 class="u-align-left u-text u-text-body-alt-color u-text-default u-text-2"> Nous aimons voyager et vous ?</h3>
            <h3 class="u-align-left u-text u-text-body-alt-color u-text-default u-text-3"> Quelle sera votre prochaine destination ?</h3>
            <a href="{{ url('/reservation') }}" class="u-align-center-xs u-border-3 u-border-custom-color-5 u-border-hover-white u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-5 u-radius-6 u-text-custom-color-5 u-text-hover-white u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-direction="" target="_blank">Demander une rÉservation</a>
            
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-text-grey-30 u-block-f949-3" href="#carousel_c84f" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-text-grey-30 u-block-f949-4" href="#carousel_c84f" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_4dc2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-custom-color-6 u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
            <div class="u-expanded-width u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-custom-item u-file-icon u-icon u-text-palette-1-base u-icon-1"><img src="images/201426-b1963ac9.png" alt=""></span>
                    <h5 class="u-text u-text-1">
                      <a class="info-box-link kt-blocks-info-box-link-wrap kt-blocks-info-box-media-align-top kt-info-halign-center u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-3 u-btn-1">Hôtels de choix</a>
                      <a class="info-box-link kt-blocks-info-box-link-wrap kt-blocks-info-box-media-align-top kt-info-halign-center u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2">
                        <br>
                      </a>
                    </h5>
                  </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-2">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-custom-item u-file-icon u-icon u-text-palette-2-base u-icon-2"><img src="images/159832-38e44db8.png" alt=""></span>
                    <h5 class="u-text u-text-2">
                      <a class="info-box-link kt-blocks-info-box-link-wrap kt-blocks-info-box-media-align-top kt-info-halign-center u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-3 u-btn-3">Réservation rapide</a>
                      <a class="info-box-link kt-blocks-info-box-link-wrap kt-blocks-info-box-media-align-top kt-info-halign-center u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4">
                        <br>
                      </a>
                    </h5>
                  </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-3">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-custom-item u-file-icon u-icon u-text-palette-3-base u-icon-3"><img src="images/74742-a4eca0f5.png" alt=""></span>
                    <h5 class="u-text u-text-3">
                      <a class="info-box-link kt-blocks-info-box-link-wrap kt-blocks-info-box-media-align-top kt-info-halign-center u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-3 u-btn-5">Tarif accessible</a>
                      <a class="info-box-link kt-blocks-info-box-link-wrap kt-blocks-info-box-media-align-top kt-info-halign-center u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-6">
                        <br>
                      </a>
                    </h5>
                  </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-4">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><span class="u-custom-item u-file-icon u-icon u-text-palette-4-base u-icon-4"><img src="images/158225-55d52ff7.png" alt=""></span>
                    <h5 class="u-text u-text-4">
                      <a class="info-box-link kt-blocks-info-box-link-wrap kt-blocks-info-box-media-align-top kt-info-halign-center u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-3 u-btn-7">Toute les destinations</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1 d-flex align-items-center"><br><br><br>
              <video loop="true" autoplay="autoplay" controls="controls" id="vid" muted style="position:relative;width:100%;padding:20px;">
                <source type="video/mp4" src="canva.mp4"></source>
              </video>
                <!-- <div class="u-container-layout u-container-layout-6">
                  <div class="u-align-center u-video u-video-1">
                    <div class="">
                      <iframe style="" class="" src="/video.mp4" data-autoplay="1" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-7">
                  <h2 class="u-text u-text-custom-color-6 u-text-default u-text-5"> Qui sommes-nous…</h2>
                  <div class="u-border-3 u-border-custom-color-5 u-line u-line-horizontal u-line-1"></div>
                  <p class="u-align-justify u-text u-text-6">
                    <span style="font-weight: 700;"> HM Tours &amp; Travels </span>est heureuse d’aider les voyageurs dans le choix de leur future destination et de répondre à leurs questions.
                  </p>
                  <p class="u-align-justify u-text u-text-7"> Ensemble, nous mettons à disposition un service unique <span style="font-weight: 700;">partez en toute tranquillité d’esprit et laissez l’équipe de ​HM Tours &amp; Travels vous guider.</span>
                  </p>
                  <p class="u-align-justify u-text u-text-8">
                    <span style="font-weight: 700;"> Des voyages de plus en plus personnalisés,</span> adaptés à chaque instant, renforcés p​ar une gamme de services destinés à faciliter votre voyage. Une façon de répondre constamment à vos attentes.
                  </p>
                  <a href="{{ url('/reservation') }}" class="u-align-center u-border-3 u-border-custom-color-5 u-border-hover-white u-btn u-button-style u-hover-custom-color-5 u-text-custom-color-5 u-text-hover-white u-white u-btn-8" data-animation-name="" data-animation-duration="0" data-animation-direction="" target="_blank">Demander une rÉservation</a>
                  <div class="u-border-3 u-border-custom-color-6 u-shape u-shape-left u-shape-top u-shape-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-3" id="carousel_24a7">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-custom-color-6 u-expanded-width u-group u-radius-5 u-shape-round u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-align-center u-text u-text-1"> Pour quand partez-vous ?</h2>
            <h2 class="u-align-center u-text u-text-2"> On vous recontacte sous 24h pour échanger sur votre voyage&nbsp;:</h2>
            <a href="{{ url('/reservation') }}" class="u-align-center u-border-3 u-border-custom-color-5 u-border-hover-white u-btn u-button-style u-hover-custom-color-5 u-text-custom-color-5 u-text-hover-white u-white u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-direction="" target="_blank">Demander une rÉservation</a>
            <h4 class="u-align-center u-text u-text-3"> C’est gratuit et sans engagement !</h4>
            <h4 class="u-align-center u-text u-text-4"> Vous avez une question, ou vous cherchez des renseignements sur les tarifs de voyage, n’hésitez-pas à remplir le formulaire avec vos coordonnées et on vous retourne l’appel au plus tôt.</h4>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-8c89">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-text u-text-custom-color-6 u-text-default u-text-1"> Nos forfaits </h1>
                  <div class="u-border-3 u-border-custom-color-5 u-line u-line-horizontal u-line-1"></div>
                  <p class="u-align-justify u-text u-text-default u-text-2"> Nous&nbsp;offrons plusieurs forfaits qui couvre le Canada et d’autres destinations :</p>
                  <ul class="u-align-left u-custom-list u-spacing-25 u-text u-text-3">
                    <li style="padding-left: 19px;">
                      <div class="u-list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" id="svg-25f7" style="font-size: 2em; margin: -2em;"><path d="m256 512c-141.4 0-256-114.6-256-256s114.6-256 256-256 256 114.6 256 256c-.1 141.3-114.7 255.9-256 256zm0-468.7c-117.5.1-212.6 95.4-212.6 212.8s95.3 212.6 212.8 212.6c117.4-.1 212.6-95.3 212.6-212.7-.1-117.4-95.4-212.6-212.8-212.7z" fill="#293c7d"></path><path d="m224.2 336.4c-5.8-.1-11.3-2.5-15.3-6.7l-54.5-56.7c-7.9-9-6.9-22.7 2.1-30.6 8.4-7.3 21-7.1 29.1.5l38.6 41 103.9-102.6c8.1-8.8 21.8-9.5 30.6-1.4s9.5 21.8 1.4 30.6c-.5.6-1 1.1-1.6 1.6l-119.3 118.1c-4 3.9-9.4 6.1-15 6.2z" fill="#4899d2"></path></svg>
                      </div> SÉJOURS AU CANADA
                    </li>
                    <li style="padding-left: 19px;">
                      <div class="u-list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" id="svg-25f7" style="font-size: 2em; margin: -2em;"><path d="m256 512c-141.4 0-256-114.6-256-256s114.6-256 256-256 256 114.6 256 256c-.1 141.3-114.7 255.9-256 256zm0-468.7c-117.5.1-212.6 95.4-212.6 212.8s95.3 212.6 212.8 212.6c117.4-.1 212.6-95.3 212.6-212.7-.1-117.4-95.4-212.6-212.8-212.7z" fill="#293c7d"></path><path d="m224.2 336.4c-5.8-.1-11.3-2.5-15.3-6.7l-54.5-56.7c-7.9-9-6.9-22.7 2.1-30.6 8.4-7.3 21-7.1 29.1.5l38.6 41 103.9-102.6c8.1-8.8 21.8-9.5 30.6-1.4s9.5 21.8 1.4 30.6c-.5.6-1 1.1-1.6 1.6l-119.3 118.1c-4 3.9-9.4 6.1-15 6.2z" fill="#4899d2"></path></svg>
                      </div>
                      <span style="font-weight: 700;"></span>
                      <a href="" target="_blank" rel="noreferrer noopener" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"></a> FORFAITS SUD<br>
                    </li>
                    <li style="padding-left: 19px;">
                      <div class="u-list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" id="svg-25f7" style="font-size: 2em; margin: -2em;"><path d="m256 512c-141.4 0-256-114.6-256-256s114.6-256 256-256 256 114.6 256 256c-.1 141.3-114.7 255.9-256 256zm0-468.7c-117.5.1-212.6 95.4-212.6 212.8s95.3 212.6 212.8 212.6c117.4-.1 212.6-95.3 212.6-212.7-.1-117.4-95.4-212.6-212.8-212.7z" fill="#293c7d"></path><path d="m224.2 336.4c-5.8-.1-11.3-2.5-15.3-6.7l-54.5-56.7c-7.9-9-6.9-22.7 2.1-30.6 8.4-7.3 21-7.1 29.1.5l38.6 41 103.9-102.6c8.1-8.8 21.8-9.5 30.6-1.4s9.5 21.8 1.4 30.6c-.5.6-1 1.1-1.6 1.6l-119.3 118.1c-4 3.9-9.4 6.1-15 6.2z" fill="#4899d2"></path></svg>
                      </div>CITY TOUT-INCLUS<br>
                    </li>
                    <li style="padding-left: 19px;">
                      <div class="u-list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" id="svg-25f7" style="font-size: 2em; margin: -2em;"><path d="m256 512c-141.4 0-256-114.6-256-256s114.6-256 256-256 256 114.6 256 256c-.1 141.3-114.7 255.9-256 256zm0-468.7c-117.5.1-212.6 95.4-212.6 212.8s95.3 212.6 212.8 212.6c117.4-.1 212.6-95.3 212.6-212.7-.1-117.4-95.4-212.6-212.8-212.7z" fill="#293c7d"></path><path d="m224.2 336.4c-5.8-.1-11.3-2.5-15.3-6.7l-54.5-56.7c-7.9-9-6.9-22.7 2.1-30.6 8.4-7.3 21-7.1 29.1.5l38.6 41 103.9-102.6c8.1-8.8 21.8-9.5 30.6-1.4s9.5 21.8 1.4 30.6c-.5.6-1 1.1-1.6 1.6l-119.3 118.1c-4 3.9-9.4 6.1-15 6.2z" fill="#4899d2"></path></svg>
                      </div>FORFAITS GROUPE<br>
                    </li>
                    <li style="padding-left: 19px;">
                      <div class="u-list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" id="svg-25f7" style="font-size: 2em; margin: -2em;"><path d="m256 512c-141.4 0-256-114.6-256-256s114.6-256 256-256 256 114.6 256 256c-.1 141.3-114.7 255.9-256 256zm0-468.7c-117.5.1-212.6 95.4-212.6 212.8s95.3 212.6 212.8 212.6c117.4-.1 212.6-95.3 212.6-212.7-.1-117.4-95.4-212.6-212.8-212.7z" fill="#293c7d"></path><path d="m224.2 336.4c-5.8-.1-11.3-2.5-15.3-6.7l-54.5-56.7c-7.9-9-6.9-22.7 2.1-30.6 8.4-7.3 21-7.1 29.1.5l38.6 41 103.9-102.6c8.1-8.8 21.8-9.5 30.6-1.4s9.5 21.8 1.4 30.6c-.5.6-1 1.1-1.6 1.6l-119.3 118.1c-4 3.9-9.4 6.1-15 6.2z" fill="#4899d2"></path></svg>
                      </div>BILLETERIE TOUTES LES DESTINATIONS<br>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-none u-gallery-1">
                    <div class="u-gallery-inner u-gallery-inner-1">
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1080">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/hamburg-g6700a98c1_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-1">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1440">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/senior-g4ac283ec1_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-2">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1200">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/bay-g20fa940da_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-3">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1440">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/camera-ga9321843b_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-4">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1282">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/train-g997457d30_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-5">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1129">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/mosque-g5705563ea_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-6">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1350">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/temple-g166eb6201_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-7">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1271">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/japan-g203ded952_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-8">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1280">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/architecture-g3f02240b7_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-9">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1280">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/skyscrapers-g1b0153dfa_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-10">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1280">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/houses-geb5917a59_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-11">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1282">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/palace-g9bb966c40_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-12">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1282">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/channel-gf9083b2e4_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-13">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1280">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/houses-gd1934943f_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-14">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1282">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/bora-bora-g9a3cf50f2_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-15">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-effect-hover-zoom u-gallery-item" data-image-width="1920" data-image-height="1357">
                        <div class="u-back-slide">
                          <img class="u-back-image u-expanded" src="images/arches-national-park-gc583ac2c3_1920.jpeg">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-16">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-5" id="sec-617a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-custom-color-6 u-text-default u-text-1">contacter nous</h2>
        <div class="u-opacity u-opacity-25 u-shape u-shape-svg u-text-custom-color-3 u-shape-1">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8471"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-8471"><path d="M14.5,7.3c0,4-3.3,7.3-7.3,7.3S0,11.2,0,7.3S3.3,0,7.3,0S14.5,3.3,14.5,7.3z M7.3,24.2c-4,0-7.3,3.3-7.3,7.3
	s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S11.2,24.2,7.3,24.2z M31.5,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S35.5,0,31.5,0
	z M55.8,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3S63,11.2,63,7.3S59.7,0,55.8,0z M80,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3
	s7.3-3.3,7.3-7.3S84,0,80,0z M104.2,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3S108.2,0,104.2,0z M128.5,0
	c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3S132.5,0,128.5,0z M152.7,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3
	c4,0,7.3-3.3,7.3-7.3S156.7,0,152.7,0z M31.5,24.2c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S35.5,24.2,31.5,24.2z
	 M55.8,24.2c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S59.7,24.2,55.8,24.2z M80,24.2c-4,0-7.3,3.3-7.3,7.3
	s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S84,24.2,80,24.2z M104.2,24.2c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3
	S108.2,24.2,104.2,24.2z M128.5,24.2c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3S132.5,24.2,128.5,24.2z M7.3,48.5
	c-4,0-7.3,3.3-7.3,7.3S3.3,63,7.3,63s7.3-3.3,7.3-7.3S11.2,48.5,7.3,48.5z M31.5,48.5c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3
	s7.3-3.3,7.3-7.3S35.5,48.5,31.5,48.5z M55.8,48.5c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S59.7,48.5,55.8,48.5z
	 M80,48.5c-4,0-7.3,3.3-7.3,7.3S76,63,80,63s7.3-3.3,7.3-7.3S84,48.5,80,48.5z M104.2,48.5c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3
	c4,0,7.3-3.3,7.3-7.3S108.2,48.5,104.2,48.5z M7.3,72.7C3.3,72.7,0,76,0,80s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S11.2,72.7,7.3,72.7z
	 M31.5,72.7c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S35.5,72.7,31.5,72.7z M55.8,72.7c-4,0-7.3,3.3-7.3,7.3
	s3.3,7.3,7.3,7.3S63,84,63,80S59.7,72.7,55.8,72.7z M80,72.7c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S84,72.7,80,72.7
	z M7.3,97c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3C14.5,100.3,11.2,97,7.3,97z M31.5,97c-4,0-7.3,3.3-7.3,7.3
	c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3C38.8,100.3,35.5,97,31.5,97z M55.8,97c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3
	s7.3-3.3,7.3-7.3C63,100.3,59.7,97,55.8,97z M7.3,121.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3
	C14.5,124.5,11.2,121.2,7.3,121.2z M31.5,121.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3
	C38.8,124.5,35.5,121.2,31.5,121.2z M7.3,145.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3
	C14.5,148.8,11.2,145.5,7.3,145.5z"></path></svg>
        </div>
        <div class="u-flip-horizontal u-opacity u-opacity-25 u-shape u-shape-svg u-text-custom-color-3 u-shape-2">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c43e"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-c43e"><path d="M14.5,7.3c0,4-3.3,7.3-7.3,7.3S0,11.2,0,7.3S3.3,0,7.3,0S14.5,3.3,14.5,7.3z M7.3,24.2c-4,0-7.3,3.3-7.3,7.3
	s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S11.2,24.2,7.3,24.2z M31.5,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S35.5,0,31.5,0
	z M55.8,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3S63,11.2,63,7.3S59.7,0,55.8,0z M80,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3
	s7.3-3.3,7.3-7.3S84,0,80,0z M104.2,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3S108.2,0,104.2,0z M128.5,0
	c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3S132.5,0,128.5,0z M152.7,0c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3
	c4,0,7.3-3.3,7.3-7.3S156.7,0,152.7,0z M31.5,24.2c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S35.5,24.2,31.5,24.2z
	 M55.8,24.2c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S59.7,24.2,55.8,24.2z M80,24.2c-4,0-7.3,3.3-7.3,7.3
	s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S84,24.2,80,24.2z M104.2,24.2c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3
	S108.2,24.2,104.2,24.2z M128.5,24.2c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3S132.5,24.2,128.5,24.2z M7.3,48.5
	c-4,0-7.3,3.3-7.3,7.3S3.3,63,7.3,63s7.3-3.3,7.3-7.3S11.2,48.5,7.3,48.5z M31.5,48.5c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3
	s7.3-3.3,7.3-7.3S35.5,48.5,31.5,48.5z M55.8,48.5c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S59.7,48.5,55.8,48.5z
	 M80,48.5c-4,0-7.3,3.3-7.3,7.3S76,63,80,63s7.3-3.3,7.3-7.3S84,48.5,80,48.5z M104.2,48.5c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3
	c4,0,7.3-3.3,7.3-7.3S108.2,48.5,104.2,48.5z M7.3,72.7C3.3,72.7,0,76,0,80s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S11.2,72.7,7.3,72.7z
	 M31.5,72.7c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S35.5,72.7,31.5,72.7z M55.8,72.7c-4,0-7.3,3.3-7.3,7.3
	s3.3,7.3,7.3,7.3S63,84,63,80S59.7,72.7,55.8,72.7z M80,72.7c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S84,72.7,80,72.7
	z M7.3,97c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3C14.5,100.3,11.2,97,7.3,97z M31.5,97c-4,0-7.3,3.3-7.3,7.3
	c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3C38.8,100.3,35.5,97,31.5,97z M55.8,97c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3
	s7.3-3.3,7.3-7.3C63,100.3,59.7,97,55.8,97z M7.3,121.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3
	C14.5,124.5,11.2,121.2,7.3,121.2z M31.5,121.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3
	C38.8,124.5,35.5,121.2,31.5,121.2z M7.3,145.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3
	C14.5,148.8,11.2,145.5,7.3,145.5z"></path></svg>
        </div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-align-center u-image u-image-contain u-image-default u-image-1" src="images/326174759_956156689125164_989060443788586885_n.jpg" alt="" data-image-width="1024" data-image-height="711">
                  <p class="u-text u-text-2"><span class="u-file-icon u-icon u-icon-1"><img src="images/1865269.png" alt=""></span> &nbsp; 3411 Rue Jean-Talon E, Montréal, QC H2A 1W7
                  </p>
                  <p class="u-text u-text-3"><span class="u-file-icon u-icon u-icon-2"><img src="images/542638.png" alt=""></span>&nbsp; info@hmtours.ca
                  </p>
                  <p class="u-text u-text-4"><span class="u-file-icon u-icon u-icon-3"><img src="images/3652191.png" alt=""></span>&nbsp; ​Lundi – Vendredi&nbsp;( 9h00 – 18h00&nbsp;)<br><span class="u-file-icon u-icon u-icon-3"><img src="images/3652191.png" alt=""></span>&nbsp;&nbsp; 
                        ​Samedi&nbsp;( 10h00 – 16h00&nbsp;)<br><span class="u-file-icon u-icon u-icon-3"><img src="images/3652191.png" alt=""></span>&nbsp;
                        Dimanche&nbsp;(  Fermé&nbsp;)
                  </p>
                  <p class="u-text u-text-5"><span class="u-file-icon u-icon u-icon-4"><img src="images/126509.png" alt=""></span>&nbsp; (514) 376-2777
                  </p>
                  <div class="u-social-icons u-spacing-20 u-social-icons-1">
                    <a class="u-social-url" target="_blank" href=""><span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-5"><img src="images/2504903.png" alt=""></span>
                    </a>
                    <a class="u-social-url" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-twitter u-icon-6"><img src="images/2504947.png" alt=""></span>
                    </a>
                    <a class="u-social-url" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-7"><img src="images/1409946.png" alt=""></span>
                    </a>
                  </div>
                  <div class="u-form u-form-1">
                    <form action="/" method="post" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 15px;">
                      <div class="u-form-email u-form-group u-label-none">
                        @csrf
                        <label for="email-ef64" class="u-label">Email</label><br>
                      <div class="form-group">
                          @if(Session::has('abonnerSuccess'))
                          <div class="alert-success text-center">
                            vous êtes maintenant un abonner !!!
                          </div>
                          @endif
                      </div>
                        <input type="email" placeholder="Email" id="email-ef64" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                      </div>
                      <button class="u-btn u-btn-submit u-button-style" name="subscribe">Abonnez vous !</button>
                      <div class="u-form-send-message u-form-send-success">#FormSendSuccess</div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <div class="u-border-2 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-5-light-2 u-expanded-width u-form u-form-2">
                    <form action="/" method="post" style="padding: 24px;" name="form">
                      @csrf
                      <div class="u-form-group u-form-name u-label-top">
                        <label for="name-3b9a" class="u-label u-text-custom-color-3">Nom Complet</label>
                        <input type="text" placeholder="Entrer votre nom" id="name-3b9a" name="name" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2" required="">
                      </div>
                      <div class="u-form-email u-form-group u-label-top">
                        <label for="email-3b9a" class="u-label u-text-custom-color-3">Email</label>
                        <input type="email" placeholder="Entrer un email valide" id="email-3b9a" name="email" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3" required="">
                      </div>
                      <div class="u-form-group u-form-message u-label-top">
                        <label for="message-3b9a" class="u-label u-text-custom-color-3">Message</label>
                        <textarea placeholder="Entrer votre message ici" rows="4" cols="50" id="message-3b9a" name="message" class="u-border-2 u-border-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-4" required=""></textarea>
                      </div><br>
                      <div class="form-group">
                          @if(Session::has('sendSuccess'))
                          <div class="alert-success text-center">
                              votre message est envoyer avec succés
                          </div>
                          @endif
                      </div>
                      <div class="u-align-left u-form-group u-form-submit u-label-top">
                        <a href="#" class="u-border-2 u-border-grey-dark-1 u-border-no-left u-border-no-right u-border-no-top u-btn u-btn-rectangle u-btn-submit u-button-style u-none u-btn-2">envoyer</a>
                        <input type="submit" value="submit" name="sendMessage" class="u-form-control-hidden">
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-light-2 u-typography-custom-page-typography-12--Map u-section-6" id="carousel_8b35">
      <div class="u-expanded u-grey-light-2 u-map">
        <div class="embed-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.481797918713!2d-73.5990500847703!3d45.560749035017295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91eb574e6d4e3%3A0xb6832140a93f8fbc!2s3411%20Rue%20Jean-Talon%20E%2C%20Montr%C3%A9al%2C%20QC%20H2A%201W7!5e0!3m2!1sen!2sca!4v1676244918424!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-custom-color-6 u-footer u-footer" id="sec-2cbd">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-small-text u-text u-text-variant u-text-1"> Copyright © HM tours INC. All rights reserved. Developed by <span style="font-weight: 700;">Mahdios</span></p>
      </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
      var currentSlide = 0;
      var slides = document.querySelectorAll('.slide');
      var prevButton = document.querySelector('.prev');
      var nextButton = document.querySelector('.next');
      var slideTimer;

      function showSlide(n) {
        slides[currentSlide].style.display = 'none';
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].style.display = 'block';
      }

      prevButton.addEventListener('click', function() {
        showSlide(currentSlide - 1);
        resetTimer();
      });

      nextButton.addEventListener('click', function() {
        showSlide(currentSlide + 1);
        resetTimer();
      });

      function startTimer() {
        slideTimer = setInterval(function() {
          showSlide(currentSlide + 1);
        }, 5000); // change slide every 5 seconds
      }

      function resetTimer() {
        clearInterval(slideTimer);
        startTimer();
      }

      startTimer();
    </script>

    </body>
</html>