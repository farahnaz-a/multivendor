
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon May 31 2021 22:17:14 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="606be0fc4091becb2e828b5d" data-wf-site="606be0fc4091bed60a828b5b">
<head>
  <meta charset="utf-8">
  <title>Adwareton</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  
  <link href="{{ asset('frontend_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('frontend_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('frontend_assets/css/adwareton.webflow.css') }}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Droid Serif:400,400italic,700,700italic","Inconsolata:400,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('frontend_assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('frontend_assets/images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body>
  <div class="hero-section">
    <div class="wrapper">
      <div class="account-wrap">
        @guest
        <a href="{{ route('login') }}" class="sign-in-button gap w-button">Log in</a>
        <a href="{{ route('register') }}" class="sign-in-button w-button">Create New Account</a>
        @endguest
        @auth
        <a href="{{ route('dashboard') }}" class="sign-in-button gap w-button">Dashboard</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="sign-in-button  w-button">Logout</a>
        </form>
        @endauth
      </div>
      <h1 class="title">Bijscholing Medische Trainingen en Cursussen</h1>
      <div data-delay="2000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider w-slider">
        <div class="mask w-slider-mask">
          <div class="slide w-slide">
            <div class="div-put">
              <div class="blue">
                <div class="video-wrap">
                  <div style="padding-top:56.17021276595745%" class="slide-video w-video w-embed"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FrDYdeq3JW_E%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DrDYdeq3JW_E&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FrDYdeq3JW_E%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" title="YouTube embed" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="true"></iframe></div>
                  <h3>In dit lidmaatschap krijg je een pakket op mat !</h3>
                  <a href="#" class="button top-margin w-inline-block">
                    <div class="button-wrap">
                      <div>Direct verder met bestellen</div>
                    </div>
                  </a>
                </div>
                <div class="plan-wrap">
                  <div class="left-block">
                    <div class="plan-name">Basis</div>
                    <div class="price-text">max. <span class="price">$10</span> p/mo</div>
                    <div class="plan-name top-space">plus</div>
                    <div class="price-text">max. <span class="price">$20</span> p/mo</div>
                  </div>
                  <div class="right-block">
                    <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adsem vitae risus tristique posuere.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="div-put">
              <div class="blue">
                <div class="video-wrap">
                  <div style="padding-top:56.17021276595745%" class="slide-video w-video w-embed"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FrDYdeq3JW_E%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DrDYdeq3JW_E&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FrDYdeq3JW_E%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" title="YouTube embed" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="true"></iframe></div>
                  <h3>In dit lidmaatschap krijg je een pakket op mat !</h3>
                  <a href="#" class="button top-margin w-inline-block">
                    <div class="button-wrap">
                      <div>Direct verder met bestellen</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="div-put">
              <div class="blue">
                <div>
                  <div style="padding-top:56.17021276595745%" class="slide-video w-video w-embed"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FrDYdeq3JW_E%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DrDYdeq3JW_E&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FrDYdeq3JW_E%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" title="YouTube embed" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="true"></iframe></div>
                  <h3>In dit lidmaatschap leer je hoe je als jelfstandige</h3>
                </div>
                <div class="information-wrap"><img src="{{ asset('frontend_assets/images/information.svg') }}" loading="lazy" alt="" class="information-image">
                  <div>Deze video aflevering is Gratis te bekijken</div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="div-put">
              <div class="blue">
                <div>
                  <div style="padding-top:56.17021276595745%" class="slide-video w-video w-embed"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FrDYdeq3JW_E%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DrDYdeq3JW_E&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FrDYdeq3JW_E%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" title="YouTube embed" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="true"></iframe></div>
                  <h3>In dit lidmaatschap leer je hoe je als jelfstandige</h3>
                </div>
                <div class="information-wrap"><img src="images/information.svg" loading="lazy" alt="" class="information-image">
                  <div>Deze video aflevering is Gratis te bekijken</div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="div-put">
              <div class="blue">
                <div class="video-wrap">
                  <div style="padding-top:56.17021276595745%" class="slide-video w-video w-embed"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FrDYdeq3JW_E%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DrDYdeq3JW_E&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FrDYdeq3JW_E%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" title="YouTube embed" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="true"></iframe></div>
                  <h3>In dit lidmaatschap krijg je een pakket op mat !</h3>
                  <a href="#" class="button top-margin w-inline-block">
                    <div class="button-wrap">
                      <div>Direct verder met bestellen</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="left-arrow w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="right-arrow w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="slide-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper">
      <h1 class="title">Book een Mentor of Book een Intekgesprek voor een Medisch behandeling</h1>
      <div data-delay="2000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider w-slider">
        <div class="booking-mask-dr w-slider-mask">
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR2.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{  asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR3.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR4.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="booking-block">
              <div class="booking-wrap">
                <div class="flex">
                    
                  <div class="left-block"><img src="{{ asset('frontend_assets/images/DTR1.jpg') }}" loading="lazy" alt="" class="image"></div>
                  <div class="right-block">
                    <div>Mandy van Leeuwen Verloskundige</div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/check-mark.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <div class="information-wrap"><img src="{{ asset('frontend_assets/images/empty.svg') }}" loading="lazy" alt="" class="information-image">
                      <div>Book een Mentor ter voorbereiding van tentamens.</div>
                    </div>
                    <a href="#" class="button top-margin w-inline-block">
                      <div class="booking-button">
                        <div>Bestel</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="left-arrow w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="right-arrow w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="slide-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper">
      <h1 class="title">Apotheek &amp; Huidverzorgings producten</h1>
      <div class="w-layout-grid pharmacy-grid">
          
        <div id="w-node-_4bf80b5b-c606-6ec9-1843-c31bd77ef141-2e828b5d" class="grid-block"><img src="{{ asset('frontend_assets/images/PL2.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
        <div id="w-node-_34a62009-c4b8-b083-9720-3374a5fda029-2e828b5d" class="grid-block"><img src="{{ asset('frontend_assets/images/PL1.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
        
        <div id="w-node-_6484b882-5379-8428-e7d0-5c47159a46fc-2e828b5d" class="grid-block"><img src="{{ asset('frontend_assets/images/PL3.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
        <div id="w-node-_7820ac26-6b16-19e7-97ca-9a56ae52bebf-2e828b5d" class="grid-block"><img src="{{ asset('frontend_assets/images/PL1.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
        <div id="w-node-_69949ffb-8eea-7db8-1e6b-a03ea707d1ee-2e828b5d" class="grid-block"><img src="{{ asset('frontend_assets/images/PL2.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
        <div class="grid-block"><img src="{{ asset('frontend_assets/images/PL3.jpg') }}" loading="lazy" alt="" class="medicine">
          <a href="#" class="button green w-inline-block">
            <div class="cart-button-wrap"><img src="{{ asset('frontend_assets/images/shopping-cart-1.svg') }}" loading="lazy" alt="" class="cart">
              <div>In winkelwagen</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="section bottom-gap">
    <div class="wrapper">
      <h4 class="footer-title">Advertenties</h4>
      <div class="w-layout-grid footer-grid">
        <div class="grid-item">
          <div class="image-block"><img src="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }}" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 1439px) 34vw, 409.5px" srcset="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-500.jpeg') }} 500w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-800.jpeg') }} 800w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1080.jpeg') }} 1080w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1600.jpeg') }} 1600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2000.jpeg') }} 2000w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2600.jpeg') }} 2600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }} 3037w" alt=""></div>
          <div class="footer-detail-wrapper">
            <div class="footer-heading">Wij zoeken een loborant.</div>
            <div class="footer-details-block">
              <div class="call-text">Call to action.</div>
              <p class="call-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
            </div>
            <div class="form-block w-form">
              <form id="email-form" name="email-form" data-name="Email Form" class="form"><select id="Message-Page" name="Message-Page" data-name="Message Page" class="input-block w-select">
                  <option value="">Message Page</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="name" class="text-field">Your Name :</label><input type="text" class="input-block w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name"><label for="email" class="text-field">Email Address:</label><input type="email" class="input-block w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="email" required=""><label class="text-field">Geef hier uw beschikbaarheid aan</label>
                <div class="timeframe-image-block"><img src="{{ asset('frontend_assets/images/calendar.svg') }}" loading="lazy" alt="" class="form-image"><img src="{{ asset('frontend_assets/images/watch.svg') }}" loading="lazy" alt="" class="form-image"></div><select id="File-Upload" name="File-Upload" data-name="File Upload" class="input-block w-select">
                  <option value="">File Upload CV</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="Description" class="text-field">Description</label><textarea placeholder="Schriif een korte motivatiebrief" maxlength="5000" id="Description" name="Description" data-name="Description" class="textarea w-input"></textarea><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-item">
            
          <div class="image-block"><img src="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }}" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 1439px) 34vw, 409.5px" srcset="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-500.jpeg') }} 500w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-800.jpeg') }} 800w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1080.jpeg') }} 1080w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1600.jpeg') }} 1600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2000.jpeg') }} 2000w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2600.jpeg') }} 2600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }} 3037w" alt=""></div>
          <div class="footer-detail-wrapper">
            <div class="footer-heading">Wij zoeken een loborant.</div>
            <div class="footer-details-block">
              <div class="call-text">Call to action.</div>
              <p class="call-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
            </div>
            <div class="form-block w-form">
              <form id="email-form" name="email-form" data-name="Email Form" class="form"><select id="Message-Page-3" name="Message-Page-3" data-name="Message Page 3" class="input-block w-select">
                  <option value="">Message Page</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="name-3" class="text-field">Your Name :</label><input type="text" class="input-block w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" id="name-3"><label for="email-3" class="text-field">Email Address:</label><input type="email" class="input-block w-input" maxlength="256" name="email-3" data-name="Email 3" placeholder="" id="email-3" required=""><label class="text-field">Geef hier uw beschikbaarheid aan</label>
                <div class="timeframe-image-block"><img src="{{ asset('frontend_assets/images/calendar.svg') }}" loading="lazy" alt="" class="form-image"><img src="{{ asset('frontend_assets/images/watch.svg') }}" loading="lazy" alt="" class="form-image"></div><select id="File-Upload-3" name="File-Upload-3" data-name="File Upload 3" class="input-block w-select">
                  <option value="">File Upload CV</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="Description-3" class="text-field">Description</label><textarea placeholder="Schriif een korte motivatiebrief" maxlength="5000" id="Description-3" name="Description-3" data-name="Description 3" class="textarea w-input"></textarea><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-item">
          <div class="image-block"><img src="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }}" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 1439px) 34vw, 409.5px" srcset="{{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-500.jpeg') }} 500w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-800.jpeg') }} 800w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1080.jpeg') }} 1080w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-1600.jpeg') }} 1600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2000.jpeg') }} 2000w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope-p-2600.jpeg') }} 2600w, {{ asset('frontend_assets/images/front-view-female-researcher-laboratory-with-microscope.jpg') }} 3037w" alt=""></div>
          <div class="footer-detail-wrapper">
            <div class="footer-heading">Wij zoeken een loborant.</div>
            <div class="footer-details-block">
              <div class="call-text">Call to action.</div>
              <p class="call-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
            </div>
            <div class="form-block w-form">
              <form id="email-form" name="email-form" data-name="Email Form" class="form"><select id="Message-Page-2" name="Message-Page-2" data-name="Message Page 2" class="input-block w-select">
                  <option value="">Message Page</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="name-2" class="text-field">Your Name :</label><input type="text" class="input-block w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="" id="name-2"><label for="email-2" class="text-field">Email Address:</label><input type="email" class="input-block w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="" id="email-2" required=""><label class="text-field">Geef hier uw beschikbaarheid aan</label>
                <div class="timeframe-image-block"><img src="{{ asset('frontend_assets/images/calendar.svg') }}" loading="lazy" alt="" class="form-image"><img src="{{ asset('frontend_assets/images/watch.svg') }}" loading="lazy" alt="" class="form-image"></div><select id="File-Upload-2" name="File-Upload-2" data-name="File Upload 2" class="input-block w-select">
                  <option value="">File Upload CV</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select><label for="Description-2" class="text-field">Description</label><textarea placeholder="Schriif een korte motivatiebrief" maxlength="5000" id="Description-2" name="Description-2" data-name="Description 2" class="textarea w-input"></textarea><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="pop-up-nav">
    <div class="navbar">
      <div class="navwrapper">
        <div data-w-id="869f715c-9209-0b63-210e-1896e262a1fa" class="navlinkwrapper">
          <a data-w-id="869f715c-9209-0b63-210e-1896e262a1fb" href="index.html" aria-current="page" class="nav-link w-inline-block w--current">
            <div class="nav-wrap">
              <div class="round-wrap"><img src="{{ asset('frontend_assets/images/brain.svg') }}" loading="lazy" alt="" class="round-image"></div>
              <div class="nav-block">
                <div class="navlink">Home</div>
                <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              </div><img src="{{ asset('frontend_assets/images/settings-1.svg') }}" loading="lazy" alt="" class="right-side-logo">
            </div>
          </a>
          <a data-w-id="869f715c-9209-0b63-210e-1896e262a205" href="medic.html" class="nav-link _2 w-inline-block">
            <div class="nav-wrap _2">
              <div class="round-wrap"><img src="{{ asset('frontend_assets/images/brain.svg') }}" loading="lazy" alt="" class="round-image"></div>
              <div class="nav-block">
                <div class="navlink">Medic</div>
                <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              </div><img src="{{ asset('frontend_assets/images/settings-1.svg') }}" loading="lazy" alt="" class="right-side-logo">
            </div>
          </a>
          <a data-w-id="869f715c-9209-0b63-210e-1896e262a20f" href="courses.html" class="nav-link _3 w-inline-block">
            <div class="nav-wrap _3">
              <div class="round-wrap"><img src="{{ asset('frontend_assets/images/brain.svg') }}" loading="lazy" alt="" class="round-image"></div>
              <div class="nav-block">
                <div class="navlink">Courses</div>
                <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              </div><img src="{{ asset('frontend_assets/images/settings-1.svg') }}" loading="lazy" alt="" class="right-side-logo">
            </div>
          </a>
          <a data-w-id="869f715c-9209-0b63-210e-1896e262a219" href="about-us.html" class="nav-link _4 w-inline-block">
            <div class="nav-wrap _4">
              <div class="round-wrap"><img src="{{ asset('frontend_assets/images/brain.svg') }}" loading="lazy" alt="" class="round-image"></div>
              <div class="nav-block">
                <div class="navlink">About</div>
                <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              </div><img src="{{ asset('frontend_assets/images/settings-1.svg') }}" loading="lazy" alt="" class="right-side-logo">
            </div>
          </a>
          <a data-w-id="869f715c-9209-0b63-210e-1896e262a223" href="contact.html" class="nav-link w-inline-block">
            <div class="nav-wrap _5">
              <div class="round-wrap"><img src="{{ asset('frontend_assets/images/brain.svg') }}" loading="lazy" alt="" class="round-image"></div>
              <div class="nav-block">
                <div class="navlink">Contact</div>
                <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              </div><img src="{{ asset('frontend_assets/images/settings-1.svg') }}" loading="lazy" alt="" class="right-side-logo">
            </div>
          </a>
        </div>
        <div data-w-id="869f715c-9209-0b63-210e-1896e262a22d" class="navbutton"><img src="{{ asset('frontend_assets/images/list.svg') }}" alt="" class="menuicon"></div>
      </div>
      <div class="menu-text">Menu </div>
    </div>
  </footer>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=606be0fc4091bed60a828b5b" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('frontend_assets/js/webflow.js') }}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>
$(document).ready(function() {
  $('.div-put').last().append($('.blue').clone());
})
</script>
  <script>
$(document).ready(function() {
  $('.booking-block').last().append($('.booking-wrap').clone());
})
</script>
</body>
</html>