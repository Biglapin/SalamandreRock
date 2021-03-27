<?php 
    include "common/menu.php";
?>

    <body data-spy="scroll" data-target=".navbar" data-offset="160" class="black">
        <header>
            <nav class="navbar navbar-expand-lg black navbar-dark fixed-top">
                <div class="col-lg-1"></div>
                <a class="navbar-brand col-sm-9 col-lg-2" href="#"><h2><span class="yellow">S</span>alamandre <span class="yellow">R</span>ock</h2></a>
                <button
                    type="button"
                    class="navbar-toggler col-sm-1"
                    data-toggle="collapse"
                    data-target="#navbardropdown"
                    aria-controls="navbardropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="2vh" height="2vh" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                </button>
               <div class="col-lg-2"></div> 
                <div class="collapse navbar-collapse" id="navbardropdown"id="navbar-1">
                    <ul class="nav nav-pills navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link shape2" href="#about">Intro</a></li>
                        <li class="nav-item"><a class="nav-link shape2" href="#incomming">A venir</a></li>
                        <li class="nav-item"><a class="nav-link" href="notre_univers.php">Notre univers</a></li>
                        <li class="nav-item"><a class="nav-link" href="#light">En lumière</a></li>
                    </ul>
                </div> 
            </nav> 
        </header>
        
    
        
      
        <div class="space1" id="about"></div>

        <div class="d-block fullContainer">
            <div><h3 class="grey testmargin"><svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vh" fill="currentColor" class="bi bi-soundwave yellow" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"/>
              </svg> Concert 1 <span class="yellow">-</span> 01/01/2021</h3></div>
            <div class="d-flex justify-content-center">
                <a class="black" data-toggle="modal" data-target="#exampleModalLong"><img src="docs\alexandre-debieve-L27cgeEEYT8-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a class="black" data-toggle="modal" data-target="#exampleModalLong"><img src="docs\alexandre-debieve-WbCjF1jzno0-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\alexandre-debieve-XjvpKJ8LMbA-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\juliette-f-mawOOCqXhrY-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\sebastien-chiron-LTyuhgBw1Ok-unsplash.jpg" class="imageL zoom" alt="..."></a>
            </div>

            <div><h3 class="grey testmargin"><svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vh" fill="currentColor" class="bi bi-soundwave yellow" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"/>
              </svg> Concert 2 <span class="yellow">-</span> 02/02/2020</h3></div>
            <div class="d-flex justify-content-center">
                <a><img src="docs\aaron-paul-wnX-fXzB6Cw-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\austin-neill-hgO1wFPXl3I-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\caleb-george-pH88tHG-1yw-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\eduardo-soares-zbs25pTmh3E-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\elizeu-dias-29QO6oX3GlA-unsplash.jpg" class="imageL zoom" alt="..."></a>
            </div>
            <div><h3 class="grey testmargin"><svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vh" fill="currentColor" class="bi bi-soundwave yellow" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"/>
              </svg> Concert 3 <span class="yellow">-</span> 02/02/2019</h3></div>
            <div class="d-flex justify-content-center">
                <a><img src="docs\kristin-snippe-dqhLN2LrP40-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\kyle-wong-rrHtkX1rLP0-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\mason-b-475ymjZxX2M-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\matthew-kalapuch-sqJ4tLBiurw-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\possessed-photography-U3sOwViXhkY-unsplash.jpg" class="imageL zoom" alt="..."></a>
            </div>
            <div><h3 class="grey testmargin"><svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vh" fill="currentColor" class="bi bi-soundwave yellow" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"/>
              </svg> Concert 4 <span class="yellow">-</span> 02/02/2018</h3></div>
            <div class="d-flex justify-content-center">
                <a><img src="docs\rocco-dipoppa-_uDj_lyPVpA-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\rod-long-YLtf9KqA4h0-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\sebastien-chiron-LTyuhgBw1Ok-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\yannis-papanastasopoulos-yWF2LLan-_o-unsplash.jpg" class="imageL zoom" alt="..."></a>
                <a><img src="docs\indextest2.JPG" class="imageL zoom" alt="..."></a>
            </div>
        </div>

        
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-lg modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header black">
                      <h5 class="modal-title" id="exampleModalLongTitle">Concert 1 - 01/01/2021</h5>
                  </div>
                  <div class="modal-body black">
                      <div id="carouselExampleeControls" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner testH">
                              <div class="carousel-item active">
                                  <img class="d-block w-100 h-100" src="docs\alexandre-debieve-L27cgeEEYT8-unsplash.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 h-100" src="docs\alexandre-debieve-WbCjF1jzno0-unsplash.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100 h-100" src="docs\alexandre-debieve-XjvpKJ8LMbA-unsplash.jpg" alt="Third slide">
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleeControls" role="button" data-slide="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5vw" height="5vh" fill="currentColor" class="bi bi-caret-left yellow" viewBox="0 0 16 16">
                                <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                            </svg>

                           <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
                            <span class="sr-only">Previous</span>-->

                          </a>
                          <a class="carousel-control-next" href="#carouselExampleeControls" role="button" data-slide="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5vw" height="5vh" fill="currentColor" class="bi bi-caret-right yellow" viewBox="0 0 16 16">
                                <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>
                            
                            <!-- <
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>  -->
                          </a>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <footer class="white" class="testF" id="">
                  <p>footer footer footer</p>
                  <div class="footerTest">
                      <svg xmlns="http://www.w3.org/2000/svg" width="6vw" height="6vh" fill="currentColor" class="bi bi-music-player yellow" viewBox="0 0 16 16">
                            <path d="M4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3zm1 0v3h6V3H5zm3 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            <path d="M11 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="6vw" height="6vh" fill="currentColor" class="bi bi-facebook yellow" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>
                  </div>
                  <p>© Copyright</p>
                  
        </p>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        </footer>
    </body>
</html>