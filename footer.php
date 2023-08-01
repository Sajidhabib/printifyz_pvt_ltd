<div class="container-fluid bg-img text-secondary bg-dark" style="margin-top: 90px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 col-md-4 col-sm-12">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Contact Us</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">WhatsApp</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg btn-primary rounded-circle me-2" href="#"><i class="bi bi-whatsapp fw-bold"></i></a>
                                <a class="btn btn-lg btn-primary rounded-circle me-2" href="#"><i class="bi bi-facebook fw-bold"></i></a>
                                <a class="btn btn-lg btn-primary rounded-circle me-2" href="#"><i class="bi bi-twitter fw-bold"></i></a>
                                <a class="btn btn-lg btn-primary rounded-circle me-2" href="#"><i class="bi bi-instagram fw-bold"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Company</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>FAQs</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Privacy Policy</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Return Exchange</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>How to place an Order</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Newsletter</h4>
                            <p>For Deals and Offer Please Subscribe</p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-primary">Subscribe</button>
                                </div>
                            <p class="my-4">Payment Methods</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">All Rights Reserved. &copy; <?php date_default_timezone_set("Asia/karachi"); echo date("Y"); ?> <a class="text-white border-bottom" href="index.php">Printifyz</a>. Designed By: <a class="text-white border-bottom" href="#"><b>ImRan Ali MenGal </b></a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
        <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
        <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
        <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
        <!-- <script src="lib/easing/easing.min.js"></script> -->
        <!-- <script src="lib/waypoints/waypoints.min.js"></script> -->
        <!-- <script src="lib/counterup/counterup.min.js"></script> -->
        <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->

    <!-- Template Javascript -->
        <script>

            /*----- closeOpenHeader -----*/
                /*function closeOpenHeader(){
                   var data =  document.getElementById("navbarCollapse");
                    data.className='navbar-collapse collapsing';
                console.log(data);
                }*/
            /*----- End -----*/


            /*----- Sidebar Start -----*/
                sidebar();
                var w = 1300;
                function sidebar(){
                    w = window.innerWidth;
                    var sidebar = document.getElementById("sidebar");
                    var showhideicon = document.getElementById("showhideicon");
                    var cardDiv = document.getElementById("cardDiv");
                    if(w <= 1257){
                        sidebar.style.display="none";
                        showhideicon.style.display="block";
                        cardDiv.className="col-lg-12";
                    }else{
                        sidebar.style.display="block";
                        showhideicon.style.display="none";
                        sidebar.style.cssText='display:block;z-index:1;';
                        cardDiv.className="col-lg-9";
                    }
                }

                window.addEventListener('resize', function(event) {
                    sidebar();
                    // screenSideBarMaintinous();                
                }, true);
            /*----- Sidebar End -----*/
            
            /*----- Sidebar Show -----*/
                function showsidebar(){
                    var sidebar = document.getElementById("sidebar");
                    var cardDiv = document.getElementById("cardDiv");
                    var showhideicon = document.getElementById("showhideicon");
                    var closeicon = document.getElementById("closeicon");
                    
                    sidebar.style.display='block';
                    closeicon.style.display='block';
                    sidebar.style.width='100%';
                    cardDiv.style.display="none";
                    showhideicon.style.display="none";
                }
            /*----- Sidebar End -----*/

            /*----- Sidebar Close -----*/
                function closesidebar(){
                    var sidebar = document.getElementById("sidebar");
                    var showhideicon = document.getElementById("showhideicon");
                    var cardDiv = document.getElementById("cardDiv");
                    var closeicon = document.getElementById("closeicon");
                    
                    showhideicon.style.display="block";
                    sidebar.style.display='none';
                    cardDiv.style.display="block";   
                    closeicon.style.display='none';
                }
            /*----- Sidebar End -----*/

            /*----- Start Card Styles -----*/
                function cardFormat(value){
                    if( w <= 1257 ){
                        console.log(value);
                        // closesidebar();
                        
                    }else{
                        alert('working');
                        // alert("Else Working");
                    }         
                }

            /*----- Card Styles End -----*/
            
            /*----- Languages Start -----*/
                function cardLanguage(value){
                   
                    if( w <= 1257 ){
                        closesidebar();
                        alert(value);
                        
                    }else{
                        alert(value);
                    }         
                }

            /*----- Languages End -----*/



        </script>     
</body>
</html>
<a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>