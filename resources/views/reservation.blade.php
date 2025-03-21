<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Reservation.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-carousel u-slide u-block-be7c-1" id="carousel_c84f" data-interval="5000" data-u-ride="carousel">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-be7c-2">
        <li data-u-target="#carousel_c84f" class="u-active u-grey-30" data-u-slide-to="0"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-1" src="" data-image-width="1280" data-image-height="849">
          <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-contain u-image-default u-image-1" src="images/Logo-HM-PNG.png" alt="" data-image-width="2700" data-image-height="1874">
            <div class="u-container-style u-grey-10 u-group u-opacity u-opacity-75 u-radius-5 u-shape-round u-group-1">
              <div class="u-container-layout u-container-layout-1">
                <h1 class="u-text u-text-custom-color-6 u-text-default u-text-1"> Réservation de vols</h1>
                <div class="u-align-center u-form u-radius-50 u-white u-form-1">
                    <div class="form-group">
                        @if(Session::has('sendSuccess'))
                        <div class="alert-success text-center">
                          votre message est envoyer avec succés
                        </div>
                        @endif
                    </div>
                  <form action="/reservation" method ="post" name="form" style="padding: 30px;">
                    @csrf
                    <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-1">
                      <label for="name-6f7c" class="u-label u-text-grey-30">Prénom *</label>
                      <input type="text" placeholder="Entrer votre Prénom " id="name-6f7c" name="prenom" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div><br>
                    <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
                      <label for="name-6f7c" class="u-label u-text-grey-30">Nom *</label>
                      <input type="text" placeholder="Entrer votre Nom" id="name-6f7c" name="nom" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div><br>
                    <div class="u-form-group u-form-partition-factor-2 u-label-top">
                      <label for="email-7dcd" class="u-label u-text-grey-30 u-label-3">Ville de départ *</label>
                      <input type="text" placeholder="Ville de départ" id="email-7dcd" name="vdepart" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div><br>
                    <div class="u-form-group u-form-name u-form-partition-factor-2 u-label-top">
                      <label for="name-7dcd" class="u-label u-text-grey-30 u-label-4">Ville de déstination *</label>
                      <input type="text" placeholder="Ville de déstination" id="name-7dcd" name="vdestination" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div><br>
                    <div class="u-form-date u-form-group u-form-group-5">
                      <label for="date-c0ec" class="u-label u-text-grey-30">Date de départ *</label>
                      <input type="text" readonly="readonly" placeholder="MM/DD/YYYY" id="date-c0ec" name="dated" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" data-date-format="mm/dd/yyyy">
                    </div><br>
                    <div class="u-form-date u-form-group u-form-group-6">
                      <label for="date-d49b" class="u-label u-text-grey-30">Date de retour *</label>
                      <input type="text" readonly="readonly" placeholder="MM/DD/YYYY" id="date-d49b" name="dater" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" data-date-format="mm/dd/yyyy">
                    </div><br>
                    <div class="u-form-group u-form-select u-form-group-7">
                      <label for="select-24b9" class="u-label u-text-grey-30">Nombre d'adultes +12ans</label>
                      <div class="u-form-select-wrapper">
                        <select id="select-24b9" name="select1" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                          <option data-calc="1" value="1">1</option>
                          <option data-calc="2" value="2">2</option>
                          <option data-calc="3" value="3">3</option>
                          <option data-calc="4" value="4">4</option>
                          <option data-calc="5" value="5">5</option>
                          <option data-calc="6" value="6">6</option>
                          <option data-calc="7" value="7">7</option>
                        </select>
                        <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                      </div>
                    </div><br>
                    <div class="u-form-group u-form-select u-form-group-8">
                      <label for="select-b29a" class="u-label u-text-grey-30">Nombre d'enfants -12ans</label>
                      <div class="u-form-select-wrapper">
                        <select id="select-b29a" name="select2" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                          <option data-calc="0" value="0">0</option>
                          <option data-calc="1" value="1">1</option>
                          <option data-calc="2" value="2">2</option>
                          <option data-calc="3" value="3">3</option>
                          <option data-calc="4" value="4">4</option>
                          <option data-calc="5" value="5">5</option>
                          <option data-calc="6" value="6">6</option>
                          <option data-calc="7" value="7">7</option>
                        </select>
                        <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                      </div>
                    </div><br>
                    <div class="u-form-group u-form-select u-form-group-9">
                      <label for="select-3e65" class="u-label u-text-grey-30">Nombre de bébés de 0-23 mois</label>
                      <div class="u-form-select-wrapper">
                        <select id="select-3e65" name="select3" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                          <option data-calc="0" value="0">0</option>
                          <option data-calc="1" value="1">1</option>
                          <option data-calc="2" value="2">2</option>
                          <option data-calc="3" value="3">3</option>
                        </select>
                        <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                      </div>
                    </div><br>
                    <div class="u-form-group u-form-radiobutton u-label-top u-form-group-10">
                      <label class="u-label u-text-grey-30 u-label-10">Date flexible *</label>
                      <div class="u-form-radio-button-wrapper">
                        <div class="u-input-row">
                          <input id="field-3012" type="radio" name="isflexible" value="oui" data-calc="1" required="required">
                          <label class="u-label u-text-grey-30 u-label-11" for="field-3012">oui</label>
                        </div>
                        <div class="u-input-row">
                          <input id="field-9b3f" type="radio" name="isflexible" value="non" data-calc="0" required="required">
                          <label class="u-label u-text-grey-30 u-label-12" for="field-9b3f">non</label>
                        </div>
                      </div>
                    </div><br>
                    <div class="u-form-group u-form-partition-factor-2 u-form-phone u-label-top u-form-group-11">
                      <label for="phone-907f" class="u-label u-text-grey-30 u-label-13">Phone</label>
                      <input type="tel" placeholder="Entrez votre téléphone (par exemple +14380000000)" id="phone-907f" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div><br>
                    <div class="u-form-email u-form-group u-form-partition-factor-2 u-label-top u-form-group-12">
                      <label for="address-8381" class="u-label u-text-grey-30 u-label-14">Email</label>
                      <input type="email" placeholder="Entrer votre Email" id="address-8381" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div><br>
                    <div class="u-border-1 u-border-grey-40 u-form-group u-form-line u-label-top u-line u-line-horizontal u-line-1"></div>
                    <div class="u-form-group u-form-message u-label-top">
                      <label for="message-7dcd" class="u-label u-text-grey-30 u-label-15">Entrer plus de précisions ici * ajouter les noms et prénoms de chaque passager</label>
                      <textarea placeholder="Ecrire ici" rows="4" cols="50" id="message-7dcd" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
                    </div><br>
                    <div class="u-align-center u-form-group u-form-submit u-label-top">
                      <input type="close" value="Fermer" class="btn btn-danger" onclick="window.close()">
                      <input type="submit" value="Envoyer ma demande" class="btn btn-success" name="sendMessage">
                    </div><br>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-text-grey-30 u-block-be7c-3" href="#carousel_c84f" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-text-grey-30 u-block-be7c-4" href="#carousel_c84f" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-custom-color-6 u-footer u-footer" id="sec-2cbd"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-small-text u-text u-text-variant u-text-1"> Copyright © HM tours INC. All rights reserved. Developed by <span style="font-weight: 700;">Mahdios</span>
        </p>
      </div></footer>
    
  
</body></html>