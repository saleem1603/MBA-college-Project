
      <!-- Footer Area Start -->
      <footer class="footer" style="background: url(images/bg/footer_bg.png);">
         <div class="container">

          

            <!-- Row Start -->
            <div class="row">
               <div class="col-md-12">
                  <div class="copyright-text text-center">
                     <p>© 2024, JAMAL MOHAMED COLLEGE (Autonomous)
| All rights reserved. <br><a href="https://ilifetech.in/" target="_blank">Designed by ilife technologies</a></br></p>
                  </div>
               </div>
            </div>
            <!-- Row End -->

         </div>
      </footer>
      <!-- Footer Area End -->

      <!-- Back to top -->
		<div class="BackTo">
			<a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
		</div>





      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="js/jquery.js"></script>

      <script src="js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="js/wow.min.js"></script>
    
      <!-- isotop -->
      <script src="js/isotope.pkgd.min.js"></script>

      <!-- Template custom -->
      <script src="js/main.js"></script>
      <script>
    //header nav bar
    // Smooth scroll function 
    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        section.scrollIntoView({ behavior: 'smooth' });
    }

    // Attach click event listeners to navigation links
    document.querySelectorAll('nav a:not([href^="https://docs.google.com/forms"])').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const sectionId = this.getAttribute('href').substring(1);
            scrollToSection(sectionId);
        });
    });
</script>

   </div>
   <!-- Body inner end -->
</body>

</html>