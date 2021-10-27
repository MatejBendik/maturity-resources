<?php 

include "../content/header.php";

?>


    <div class="main_img">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="main_text_box"></div>
                        <div class="main_text_box_border">Príprava Na Maturitné <strong>Skúšky</strong></div>
                        
                        <div class="wrapper">
                            <a href="#"><span>Prejdi ></span></a>
                        </div>
                        <div class="main_line"></div>
                    </div>
                    
                </div>
                
            </div>
        </div>       
        <img id="main_image" class="img-fluid" src="../../src/img/main_img.jpg" alt="">
    </div>
    <div class="info_box"> TÁTO STRÁNKA MÁ SLÚŽIŤ VŠETKÝM ŽIAKOM K PRÍPRAVE NA <br> MATURITNÉ SKÚŠKY Z ROZLIČNÝCH PREDMETOV</div>



 
<section>
    <div class="container reveal">
        <h2>vyber si predmet</h2>
        <div class="cards">
            <div class="text-card">
                <a href=""> <img class="threeimg" style="height: 350px;width: 400px;" src="../../src/img/ANJLOGO.jpg" alt="anglickyJazyk"></a>
            </div>

            <div class="text-card">
                <a href=""> <img class="threeimg" style="height: 350px;width: 400px;" src="../../src/img/SJLLOGO.jpg" alt="slovenskyJazyk"></a>
            </div>

            <div class="text-card">
                <a href=""> <img class="threeimg" style="height: 350px;width: 400px;" src="../../src/img/TWSLOGO.jpg" alt="tvorbaWwwStranok"></a>
            </div>
        </div>


        <div class="cards" style="margin-top:50px;">
            <div class="text-card">
                <a href=""> <img class="threeimg" style="height: 350px;width: 400px;" src="../../src/img/PRGLOGO.jpg" alt="programovanie"></a>
            
            </div>

            <div class="text-card">
                <a href=""> <img class="threeimg" style="height: 350px;width: 400px;" src="../../src/img/IDSLOGO.jpg" alt="slovenskyJazyk"></a>
            </div>
            <div class="text-card">
                <a href=""> <img class="threeimg" style="height: 350px;width: 400px;" src="../../src/img/SSTLOGO.jpg" alt="tvorbaWwwStranok"></a>            
            </div>
        </div>
    </div>
</section>
    


<footer>
    
</footer>
<div class="bottom-line"></div>







    <script type="text/javascript">
    window.addEventListener('scroll', reveal);

    function reveal(){
      var reveals = document.querySelectorAll('.reveal');

      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
          reveals[i].classList.add('active');
        }
        else{
          reveals[i].classList.remove('active');
        }
      }
    }
    </script>


    


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>