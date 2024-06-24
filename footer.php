 <!-- ***** Footer Start ***** -->
 <footer>
  <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="first-item">
               <div class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
               </div>
            <ul>
              <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
              <li><a href="mailto:hexashop@company.com">hexashop@company.com</a></li>
              <li><a href="tel:010-020-0340">010-020-0340</a></li>
            </ul>
          </div>
        </div>


        <div class="col-lg-3">
          <h4>Shopping &amp; Categories</h4>
          <ul>
            <li><a href="#">Men’s Shopping</a></li>
            <li><a href="#">Women’s Shopping</a></li>
            <li><a href="#">Kid's Shopping</a></li>
          </ul>
        </div>

        <div class="col-lg-3">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Homepage</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h4>Help &amp; Information</h4>
          <ul>
            <li><a href="#">Help</a></li>
            <li><a href="#">FAQ's</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Tracking ID</a></li>
          </ul>
        </div>

                
                       <div class="col-lg-12">
                          <div class="under-footer">
                              <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                              
                              <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
                              <ul>
                                  <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
                              </ul>
                          </div>
                      </div>

    </div>
  </div>
<?php wp_footer(); ?>
</footer>
    

    <script> 

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>