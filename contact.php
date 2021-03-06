<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Contact Us - JEWELS Outreach and Networking</title>
        <link rel="canonical" href="https://www.jewelsoutreach.com"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="JEWELS Outreach and Networking is a non-profit Faith-based organization teaming with our community to feed and empower those in need."  />
        <meta name="author" content="Rhonda Cozart" /> 
        <meta property="og:site_name" content="JEWELS Outreach and Networking"/>
        <meta property="og:title" content="JEWELS Outreach and Networking"/>
        <meta property="og:url" content="https://www.jewelsoutreach.com"/>
        <meta property="og:type" content="website"/>

        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-WSQN4XZM4L"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-WSQN4XZM4L');
        </script>


        
        <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" /> -->
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/jewels.css" rel="stylesheet" />


    </head>


    <!-- <body id="page-top">-->
        <!-- Navigation-->
               <?php 
            include 'includes/nav.php';
        ?> 
         <!-- Masthead-->
        <header class="masthead2">
            <div class="container">
                <!-- <div class="masthead-subheading">JEWELS Outreach and Networking</div> -->
                <div class="masthead-heading text-uppercase">Contact Us </div>
                
            </div>
        </header>


<!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
<!--End mc_embed_signup-->
                <div class="text-center">
                    <h3 class="section-subheading text-muted">In need of prayer, want to help or have general questions? Reach out below or call us at (919) 438-0374.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row  mb-5">
                        <select class="form-control form-control-lg" id="subject" type="dropdown" name="subject" required="required" data-validation-required-message="Please Select a Subject">
                            <option value="" disabled selected>Select a Subject</option>
                            <option value="prayer">Prayer Request</option>
                            <option value="donate">Donate Items</option>
                            <option value="volunteer">Become a Volunteer</option>
                            <option value="sponsor">Become a Sponsor</option>
                            <option value="question">Questions or Comments</option>
                        </select>
                    </div>
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone "  data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>  
 <!-- Footer-->

    <?php 
            include 'includes/footer.php';
        ?>
        

        <!-- Bootstrap core JS-->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      
      
       
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        
    
        <!-- Third party plugin JS-->
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
               
        <script src="assets/js/scripts.js"></script>

        
        
   

    </body>
</html>

