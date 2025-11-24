 <!-- Include all js compiled plugins (below), or include individual files as needed -->

 <script src="../template_user/assets/js/jquery.js"></script>

 <!--modernizr.min.js-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

 <!--bootstrap.min.js-->
 <script src="../template_user/assets/js/bootstrap.min.js"></script>

 <!-- bootsnav js -->
 <script src="../template_user/assets/js/bootsnav.js"></script>

 <!-- jquery.sticky.js -->
 <script src="../template_user/assets/js/jquery.sticky.js"></script>

 <!-- for progress bar start-->

 <!-- progressbar js -->
 <script src="../template_user/assets/js/progressbar.js"></script>

 <!-- appear js -->
 <script src="../template_user/assets/js/jquery.appear.js"></script>

 <!-- for progress bar end -->

 <!--owl.carousel.js-->
 <script src="../template_user/assets/js/owl.carousel.min.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


 <!--Custom JS-->
 <script src="../template_user/assets/js/custom.js"></script>
 <script>
    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll(".navbar-nav li");

        window.addEventListener("scroll", () => {
            let current = "";
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 100) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach(li => {
                li.classList.remove("active");
                const a = li.querySelector("a");
                if (a && a.getAttribute("href") === "#" + current) {
                    li.classList.add("active");
                }
            });
        });

        // Optional: Tambahkan klik event untuk aktif saat diklik
        navLinks.forEach(li => {
            li.addEventListener("click", function () {
                navLinks.forEach(el => el.classList.remove("active"));
                this.classList.add("active");
            });
        });
    });
</script>


 </body>

 </html>