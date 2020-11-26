<?php include 'sendemail.php'; ?>
<?php $page='home' ?>
<?php include 'header.php'; ?>

    
    
    <header class="d-flex justify-content-center align-items-center">
      
    
      <img src="img/Logo.png" alt="" />
    </header>
    <!-- services -->
    <section class="services">
      <div class="container">
        <div class="row ">
          <article class="col-lg-2 col-md-4 col-6">
            <div class="wrapper text-white border text-center">
              <h4 class="text-uppercase">Građansko i privredno pravo</h4>
              <a class="text-white" href="#oblastRada">Saznaj više></a>
            </div>
          </article>
          <article class="col-lg-2 col-md-4 col-6">
            <div class="wrapper text-white border text-center">
              <h4 class="text-uppercase">Upravno pravo</h4>
              <a class="text-white" href="#oblastRada">Saznaj više></a>
            </div>
          </article>
          <article class="col-lg-2 col-md-4 col-6">
            <div class="wrapper text-white border text-center">
              <h4 class="text-uppercase">Upravno pravo</h4>
              <a class="text-white" href="#oblastRada">Saznaj više></a>
            </div>
          </article>
          <article class="col-lg-2 col-md-4 col-6">
            <div class="wrapper text-white border text-center">
              <h4 class="text-uppercase">Nasledno i porodično pravo</h4>
              <a class="text-white" href="#oblastRada">Saznaj više></a>
            </div>
          </article>
          <article class="col-lg-2 col-md-4 col-6">
            <div class="wrapper text-white border text-center">
              <h4 class="text-uppercase">Radno pravo</h4>
              <a class="text-white" href="#oblastRada">Saznaj više></a>
            </div>
          </article>
          <article class="col-lg-2 col-md-4 col-6">
            <div class="wrapper text-white border text-center">
              <h4 class="text-uppercase">Ustavno pravo</h4>
              <a class="text-white" href="#oblastRada">Saznaj više></a>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section class="aboutUs">
      <hgroup class="headers text-center"><h2>Ko smi mi</h2></hgroup>
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-md-6">
            <h3>Istorijat</h3>
            <p>
              Advokatska kancelarija Dobrosavljev postoji već pola veka, jer je akcenat
              našeg poslovanja je uvek bio na efikasnosti i etičnosti. Pravimo spoj između
              tradicionalnog i modernog, uzimajući i od jednog i od drugog ono najbolje, a
              uvek u interesu naših klijenata.
            </p>
            <p>
              Poštujući Kodeks profesionalne etike advokata i advokatsku tarifu,
              prihvatamo izazove iz svih oblasti prava, kako bismo na najefikasniji i
              najbolji način zaštitili interese svojih klijenata.
            </p>
          </div>
          <div class="col-md-6">
            <img src="img/koSMoMi.png" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>

    <!-- CTA FORM -->
    <section class="cta text-center py-5 d-flex flex-wrap align-items-center justify-content-center">
      <form action="" method="post">
        <input class="col-md-4 my-2" name="name" type="text" placeholder="Vaše ime" required />
        <input class="col-md-4 my-2" name="email" type="email" required placeholder="Vaša email adresa" />
        <input class="col-md-4 my-2" name="message" type="text" placeholder="Vaša poruka" />
        <button class="col-md-4 my-2" name="submit" value="send" type="submit">POŠALJITE UPIT</button>
        <div class="col-md-12 text-white"><?php echo $alert; ?></div>
      </form>
    </section>
    <section class="istorija">
      <div class="container">
        <hgroup class="text-center text-white">
          <h2>Pola veka iskustva</h2>
          <p>
            Vestibulum ultrices id ipsum in lacinia. Nunc diam nibh, <br />
            tempus sed nunc et, ultrices facilisis velit. Morbi cursus ipsum a arcu
            ultricies tempor.
          </p>
        </hgroup>
      </div>
    </section>
    <!-- OBLAST RADA -->
    <section class="oblastRada" id="oblastRada">
      <div class="container">
        <hgroup class="headers text-center"><h2>Oblast rada</h2></hgroup>
      <p class="text-center">
        Advokatska kancelarija Dobrosavljev se bavi zastupanjem, pravnim savetovanjem i
        posredovanjem u mirnom rešenju sporova fizičkih i pravnih lica u svim oblastima
        prava, a pretežno u oblastima:
      </p>
      <div class="row justify-content-between">

        <!-- kartica 1 -->
        <article class="col-md-4 col-sm-6">
          <input type="checkbox" id="toggle1" class="toggle">
          <div id="card" class="myCard" >
            <div class="wrapper border text-center">
            <img src="img/gradjansko i privredno pravo-Center.png" alt="" />
            <h4>Građansko i privredno pravo</h4>
            <p>
              Zastupanje stranaka u svim vrstama sudskim postupaka (naknada štete,
              smetanje državine...
            </p>
          </div>
          <div class="wrapper-back border  text-center">
            <img src="img/radno pravo-Centered.png" alt="">
            <h4>Ovde ide neki text</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
          </div>
        </div>  
          <label class="toggle-label btn-blue" for="toggle1">Pročitajte više</label>
        </article>


          <!-- kartica 2 -->
        <article class="col-md-4 col-sm-6">
          <input type="checkbox" id="toggle2" class="toggle">
          <div id="card" class="myCard" >
            <div class="wrapper border text-center">
              <img src="img/upravno pravo-centered.png" alt="" />
              <h4>Upravno pravo</h4>
              <p>
                Zastupanje stranaka u postupcima za vraćanje oduzete imovine i obeštećenje –
                restitucija (Agencija za restituciju)...
              </p>
            </div>
            <div class="wrapper-back border  text-center">
              <img src="img/radno pravo-Centered.png" alt="">
              <h4>Ovde ide neki text</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <label class="toggle-label btn-blue" for="toggle2">Pročitajte više</label>
       </article>

         <!-- kartica 3 -->
        <article class="col-md-4 col-sm-6">
          <input type="checkbox" id="toggle3" class="toggle">
          <div class="myCard" id="card" ">
            <div class="wrapper border text-center">
              <img src="img/nasledno i porodicno pravo-centered.png" alt="" />
              <h4>Građansko i privredno pravo</h4>
              <p>
                Sastavanje testamenta i ugovora o doživotnom izdržavanju Pokretanje i
                vođenje ostavinskog...
              </p>
            </div>
            <div class="wrapper-back border  text-center">
              <img src="img/radno pravo-Centered.png" alt="">
              <h4>Ovde ide neki text</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>          
          <label class="toggle-label btn-blue" for="toggle3">Pročitajte više</label>
        </article>

          <!-- kartica 4 -->
         <article class="col-md-4 col-sm-6">
          <input type="checkbox" id="toggle4" class="toggle">
          <div class="myCard" id="card" >
            <div class="wrapper border text-center">
              <img src="img/krivicno i prekrsajno pravo-centered.png" alt="" />
              <h4>Građansko i privredno pravo</h4>
              <p>
                Sastavanje testamenta i ugovora o doživotnom izdržavanju Pokretanje i
                vođenje ostavinskog...
              </p>
            </div>
            <div class="wrapper-back border  text-center">
              <img src="img/radno pravo-Centered.png" alt="">
              <h4>Ovde ide neki text</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <label class="toggle-label btn-blue" for="toggle4">Pročitajte više</label>
        </article>

          <!-- kartica 5 -->
        <article class="col-md-4 col-sm-6">
          <input type="checkbox" id="toggle5" class="toggle">
          <div class="myCard" id="card" >
            <div class="wrapper border text-center">
            <img src="img/radno pravo-Centered.png" alt="" />
            <h4>Građansko i privredno pravo</h4>
            <p>
              Sastavanje testamenta i ugovora o doživotnom izdržavanju Pokretanje i
              vođenje ostavinskog...
            </p>
          </div>
          <div class="wrapper-back border  text-center">
            <img src="img/radno pravo-Centered.png" alt="">
            <h4>Ovde ide neki text</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <label class="toggle-label btn-blue" for="toggle5">Pročitajte više</label>
        </article>

          <!-- kartica 6 -->
        <article class="col-md-4 col-sm-6">
          <input type="checkbox" id="toggle6" class="toggle">
          <div class="myCard" id="card">
            <div class="wrapper border text-center">
              <img src="img/ustavno pravo-centered.png" alt="" height="100px" />
              <h4>Građansko i privredno pravo</h4>
              <p>
                Sastavanje testamenta i ugovora o doživotnom izdržavanju Pokretanje i
                vođenje ostavinskog...
              </p>
            </div>
            <div class="wrapper-back border  text-center">
              <img src="img/radno pravo-Centered.png" alt="">
              <h4>Ovde ide neki text</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          
          <label class="toggle-label btn-blue" for="toggle6">Pročitajte više</label>
        </article>
      </div>
      </div>     
    </section>

    <!-- ZASTO MI -->
    <section class="zastoMi">
      <hgroup class="headers text-center"><h2 >Zašto mi</h2></hgroup>
      <div class="container">
        
        <div class="row">
          <article class="col-md-6 d-flex justify-content-center align-intems-center">
            <img src="img/zasto mi.png" alt="" class="img-fluid" />
          </article>
          <article class="col-md-6 d-flex flex-column align-items-left">
            <h3>Praksa i stalno usavršavanje</h3>
            <p>
              Uspešno smo zastupali klijente u hiljadama predmeta, ali bez obzira na
              veliku pažnju posvećujemo svakom pojedinom predmetu, svakodnevno se
              usavršavajući, prateći propise i njihove izmene, kao i sudsku praksu.
            </p>
            <a href="">Nam id enim eleifend turpis efficitur vestibulum.</a>
            <a href=""> Donec placerat libero vitae sem placerat pellentesque.</a>

            <a href=""> Vivamus mauris tellus, tristique nec rhoncus</a>
            <button class="btn-blue">Upoznaje naš tim</button>
          </article>
        </div>
      </div>
    </section>

    <!-- BES -->
    <section class="bes">
      <div class="container">
        <div class="row">
          <article class="col-md-6">
            <h3>Besplatna evaluacija slučaja</h3>
            <p>
              Vivamus ante est, tempus eget suscipit sit amet, laoreet a dui. Fusce
              aliquet arcu eget sapien varius fringilla. Suspendisse porttitor efficitur
              facilisis. Quisque a condimentum justo. Donec sed tristique augue. In hac
              habitasse platea dictumst.
            </p>
            <p class="mt-4">
              Etiam commodo mollis felis hendrerit auctor. Mauris eu urna bibendum tortor
              molestie tincidun
            </p>
            <?php echo $alert; ?>
          </article>

          <article class="col-md-6">
            <form action="" class="d-flex flex-column" method="post">
              <input type="text" placeholder="Vaše ime" name="name" />
              <input type="email" placeholder="Vaša email adresa" name="email"/>
              <input type="text" placeholder="Vaš broj telefona" name="phone" />
              <textarea
              name="message"
                id=""
                cols="30"
                rows="10"
                placeholder="Vaša poruka" 
              ></textarea>
              <button type="submit" name="submit" value="Send">Posaljite poruku</button>
            </form>
          </article>
        </div>
      </div>
    </section>
    <!-- COUNTER -->
    <section class="counter d-flex align-items-center justify-content-center">
      <hgroup class="text-white text-center">
        <h4 class="counter-1">4500</h4>
        <p class="text-uppercase">broj predmeta</p>
      </hgroup>
    </section>
    <!-- GOSTOVANJA -->

    <section class="gostovanja">
      <hgroup class="text-center headers"><h2>Gostovanja</h2></hgroup>
      <div class="container">
        <div class="slider">
          <div class="owl-carousel owl-theme">
            <!-- <div class="item"><iframe width="340" height="258" src="https://www.youtube.com/embed/K1x9zwMMAFQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
               <div class="date text-center">
              <h4>20</h4>
              <p>APR</p>
            </div>
            <p class="description" >Advokati za brže sudske postupke
              </p>
              <p>Kanal 9</p>
          </div>
            <!-- <div class="item"><iframe width="340" height="258" src="https://www.youtube.com/embed/K1x9zwMMAFQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              <div class="date text-center">
             <h4>20</h4>
             <p>APR</p>
           </div>
           <p class="description" >Advokati za brže sudske postupke
             </p>
             <p>Kanal 9</p>
            </div>
            <!-- <div class="item"><iframe width="340" height="258" src="https://www.youtube.com/embed/K1x9zwMMAFQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              <div class="date text-center">
             <h4>20</h4>
             <p>APR</p>
           </div>
           <p class="description" >Advokati za brže sudske postupke
             </p>
             <p>Kanal 9</p>
            </div>
            <!-- <div class="item"><iframe width="340" height="258" src="https://www.youtube.com/embed/K1x9zwMMAFQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              <div class="date text-center">
             <h4>20</h4>
             <p>APR</p>
           </div>
           <p class="description" >Advokati za brže sudske postupke
             </p>
             <p>Kanal 9</p>
            </div>
            <!-- <div class="item"><iframe width="340" height="258" src="https://www.youtube.com/embed/K1x9zwMMAFQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              <div class="date text-center">
             <h4>20</h4>
             <p>APR</p>
           </div>
           <p class="description" >Advokati za brže sudske postupke
             </p>
             <p>Kanal 9</p>
          </div>
        </div>
      </div>
        </section>
         
    </section>
<!-- nasi klijenti -->

    <section class="nasiKlijenti">
      <h2 class="text-center">Naši klijenti</h2>
      <div class="container">
        <div class="row flex-wrap">
          <div class="col-md-3 col-6 text-center">
            <img src="img/privredna drustva.png" alt="">
            <p class="lead">Privredna društva</p>
          </div>

          <div class="col-md-3 col-6 text-center">
            <img src="img/javna preduzeca.png" alt="">
            <p class="lead">Javna preduzeća
              i ustanove</p>
          </div>
          <div class="col-md-3 col-6 text-center">
            <img src="img/crkve, verske zajednice i udruzenja.png" height="50px" alt="">
            <p class="lead">Crkve, verske zajednice
              i udruženja
             </p>
          </div>
          <div class="col-md-3 col-6 text-center">
            <img src="img/fizicka lica.png" alt="">
            <p class="lead">Fizička lica</p>
          </div>
        </div>
      </div>
    </section>
    <!-- FOOTER -->
<?php include 'footer.php'?>