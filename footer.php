<footer class="footer py-5">
       <div class="container text-center">
           <?php if(is_active_sidebar("footer-area-1")) {
                    dynamic_sidebar("footer-area-1");
            } ?>
           <div class="row px-4 py-sm-0">
              <?php if(is_active_sidebar("footer-area-2")) {
                    dynamic_sidebar("footer-area-2");
                } ?>
               <ul class="social-list list-inline mb-0 col">
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
           </div>

       </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
