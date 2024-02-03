<?php

    require("template/header.php");
?>

<header class="page-header-ui page-header-ui-dark bg-gradient-primary-to-secondary">
   <div class="page-header-ui-content pt-10">
      <div class="container px-5 text-center">
         <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
               <h1 class="page-header-ui-title mb-3">Contact us</h1>
               <p class="page-header-ui-text">Have questions? We're here to help!</p>
            </div>
         </div>
      </div>
   </div>
   <div class="svg-border-rounded text-white">
      <!-- Rounded SVG Border-->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
         <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
      </svg>
   </div>
</header>

<section class="bg-white py-10">
    <div class="container px-5">

        <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <h2>Can't find the answer you need?</h2>
                                    <p class="lead mb-5">Contact us and we'll get back to you as soon as possible with a solution to whatever issues you're having with GIGA Packages.</p>
                                </div>
                            </div>

        <div class="row gx-5 align-items-center mb-10">
        <div class="col-lg-4 text-center mb-5 mb-lg-0">
            <div class="section-preheading">Message Us</div>
            <a href="#!">Start a chat!</a>
        </div>
        <div class="col-lg-4 text-center mb-5 mb-lg-0">
            <div class="section-preheading">Call Anytime</div>
            <a href="#!">+91 8989782263</a>
        </div>
        <div class="col-lg-4 text-center">
            <div class="section-preheading">Email Us</div>
            <a href="#!">gigapackes@gmail.com</a>
        </div>
        </div>

        <form>
        <div class="row gx-5 mb-4">
            <div class="col-md-6">
                <label class="text-dark mb-2" for="inputName">Full name</label>
                <input class="form-control py-4" id="inputName" type="text" placeholder="Full name" fdprocessedid="4m5rsx">
            </div>
            <div class="col-md-6">
                <label class="text-dark mb-2" for="inputEmail">Email</label>
                <input class="form-control py-4" id="inputEmail" type="email" placeholder="name@example.com" fdprocessedid="ai1pnb">
            </div>
        </div>
        <div class="mb-4">
            <label class="text-dark mb-2" for="inputMessage">Message</label>
            <textarea class="form-control py-3" id="inputMessage" type="text" placeholder="Enter your message..." rows="4"></textarea>
        </div>
        <div class="text-center"><button class="btn btn-primary mt-4" type="submit" fdprocessedid="uyjcxr">Submit Request</button></div>
        </form>
    </div>
    <div class="svg-border-rounded text-light">
      <!-- Rounded SVG Border-->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
         <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
      </svg>
   </div>
</section>

<?php
    require("template/footer.php");
?>