<?php

    // Check if User Coming From A Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Assign Variables
        $BusinessName = filter_var($_POST['BusinessName'], FILTER_SANITIZE_STRING);
        $BusinessAddress = filter_var($_POST['BusinessAddress'], FILTER_SANITIZE_STRING);
        $BusinessCategory = filter_var($_POST['BusinessCategory'], FILTER_SANITIZE_STRING);
        $FirstandLastName = filter_var($_POST['FirstandLastName'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $tel  = filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);

        // Creating Array of Errors
        $formErrors = array();
        if (strlen($BusinessName) <= 3) {
            $formErrors[] = 'Business Name Must Be Larger Than <strong>3</strong> Characters';
        }
        
        // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
        
        // $headers = 'From: ' . $email . '\r\n';
        $headers = 'From: advva@rs018.webhostbox.net' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $myEmail = 'info@advva.com';
        $subject = 'Contact Form';
        $message = "<html><body>";
        $message .= "<div>Business Name: </div>" . strip_tags($_POST['BusinessName']) ."</br>";
        $message .= "<div>Business Address: </div>" . strip_tags($_POST['BusinessAddress']) ."</br>";
        $message .= "<div>Business Category: </div>" . strip_tags($_POST['BusinessCategory']) ."</br>";
        $message .= "<div>First and Last Name: </div>" . strip_tags($_POST['FirstandLastName']) ."</br>";
        $message .= "<div>Email: </div>" . strip_tags($_POST['email']) ."</br>";
        $message .= "<div>Phone Number: </div>" . strip_tags($_POST['tel']) ."</br>";
        $message .= "</body></html>";
        
        if (empty($formErrors)) {
            
            mail($myEmail, $subject, $message, $headers);
            
            $BusinessName = '';
            $BusinessAddress = '';
            $BusinessCategory = '';
            $FirstandLastName = '';
            $email = '';
            $tel = '';
            
            $success = '<div class="alert alert-success alert-dismissible" role="alert">
                          
                          We Have Recieved Your Message
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Advva Business Deals">
    <meta name="robots" content="max-image-preview:large">
    <meta itemprop="name" content="Advva Business Deals">
    <meta itemprop="url" content="">

    <title>Advva Business Deals</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    
</head>
<body>

        <header>
          <nav class="navbar navbar-expand-md fixed-top mt-md-5">
            <div class="container">
              <div class="col align-self-center text-start">
                <img src="/img/Advva Deals Logo.svg" height="60px" alt="Advva Deals Logo">
              </div>
              <div class="col text-end d-none d-md-inline">
                <ul class="nav justify-content-end align-items-center">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#"><h6>About Us</h6></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><h6>How It Works</h6></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><h6>FAQ</h6></a>
                    </li>
                    <li class="nav-item ms-5">
                        <button>Get App</button>
                    </li>
                </ul>
              </div>
              <div class="col align-self-center text-end d-md-none">
                <button class="navbar-toggle" id="toggle" type="button">
                  <svg viewBox="0 0 100 100" width="50">
                    <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                    <path class="line middle"d="m 30,50 h 40" />
                    <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                  </svg>
                </button>
                <div class="navbar-new" id="toggle-nav">
                  <ul id="navlinks">
                    <li><a data-text="1" href="#">About Us</a></li>
                    <li><a data-text="2" href="#">How It Works</a></li>
                    <li><a data-text="3" href="#">FAQ</a></li>
                    <li class="text-start mt-4"><button data-text="4">Get App</button></li>
                  </ul>
                </div>
                <div id="bg-circle"></div>
              </div>
            </div>
          </nav> 
        </header>
        
        
        <main class="position-relative overflow-hidden">
          <!-- Go to top circle-->
          <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
          </div>
          <!-- First Section -->
          <div class="overflow-hidden firstSection d-flex align-items-center">
            <div class="container mt-n-5">
                <div class="row">
                    <div class="col-md-5 col-12 order-md-0 order-1 text-center text-md-start mt-md-0 mt-5 pt-md-0 pt-5">
                        <h1 class="mt-4">Grow your business by advertising in Advva Deal Mobile APP.</h1>
                        <p class="my-4 px-4 px-md-0 pe-md-5">While paper discounts mostly end up in the garbage can, digital coupons are a successful means of growing social media.</p>
                    </div>
                    <div class="col-md-7 col-12 order-md-1 order-0 d-flex align-items-center justify-content-center">
                        <img class="image3 mt-n-2 position-absolute" src="/img/firstSection.png" alt="Advva Business Deals" width="700px">
                    </div>
                </div>
            </div>
          </div>
          <!-- Form Section -->
            <div class="section container pb-5 pb-md-0">
                <div class="row justify-content-center justify-content-md-between">
                    <div class="col-md-5 col-12 form-margin order-md-0 order-1 px-4 px-md-0">
                        <img class="image1" src="/img/FormSectionImg.png" alt="Form Section Image" width="448px">
                        <h4 class="mt-3 mb-4 text-center text-md-start">Physical coupons are much more expensive to incorporate into your marketing strategy.</h4>
                        <h5 class="text-center text-md-start">Physical coupons incur printing, insertion, and distribution costs, whilst digital coupons can be sent by text, email, and automatically generated communications.</h5>
                    </div>
                    <div class="col-md-5 col-11 form-margin form-margin-mb bg-light form-shadow p-4 p-md-5 order-md-1 order-0">
                        <p class="fw-bold mb-4 pb-2">Reach New Customers. Build Loyalty. Become a True Destination. With $0 Upfront Costs! Get Started Today.</p>
                        <form id="formtwo" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <?php if (! empty($formErrors)) { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                            <?php
                                foreach($formErrors as $error) {
                                    echo $error . '<br/>';
                                }
                            ?>
                        </div>
                        <?php } ?>
                        <?php if (isset($success)) { echo $success; } ?>
                        <div>
                            <div>
                                <input id="BusinessName" name="BusinessName" type="name" class="form-control my-3 p-3" placeholder="Business Name" value="<?php if (isset($BusinessName)) { echo $BusinessName; } ?>">
                                <input id="BusinessAddress" name="BusinessAddress" type="address" class="form-control my-3 p-3" placeholder="Business Address" value="<?php if (isset($BusinessAddress)) { echo $BusinessAddress; } ?>">
                                <input id="BusinessCategory" name="BusinessCategory" type="text" class="form-control my-3 p-3" placeholder="Business Category" value="<?php if (isset($BusinessCategory)) { echo $BusinessCategory; } ?>">
                                <input id="FirstandLastName" name="FirstandLastName" type="text" class="form-control my-3 p-3" placeholder="First and Last Name" value="<?php if (isset($FirstandLastName)) { echo $FirstandLastName; } ?>">
                                <input id="email" name="email" type="email" class="form-control my-3 p-3" placeholder="Email Address" value="<?php if (isset($email)) { echo $email; } ?>">
                                <input id="tel" name="tel" type="tel" class="form-control my-3 p-3" placeholder="Phone Number" value="<?php if (isset($tel)) { echo $tel; } ?>">
                                <p class="fs2 my-4">By clicking 'Sign up', I confirm that I agree to the Groupon Merchant Terms of Use , and have read the Privacy Statement .</p>
                                <button type="submit" class="signupButton mw-100 w-100 p-3 fw-bold">Sign Up</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
          <!-- Our Clients Section -->
          <div class="section fourthSection mt-5 mt-md-0">
            <div class="container">
              <div class="row">
                <div class="col pb-5 mt-n-1">
                  <h1 class="gsap3 text-black text-center">Our Clients</h1>
                </div>
              </div>
              <div class="row mt-md-5 mt-3 pb-5 imgBox2">
                <div class="col-md-3 col-12 text-md-center text-start mt-n-1 pt-md-3 pt-5">
                    <img src="/img/allacidents.svg" alt="Advva Deals Specifications1">
                </div>
                <div class="col-md-3 col-12 text-md-center text-start mt-n-1 pt-md-3 pt-5">
                    <img src="/img/i-e.svg" alt="Advva Deals Specifications2">
                </div>
                <div class="col-md-3 col-12 text-md-center text-start mt-n-1 pt-md-3 pt-5">
                    <img src="/img/lux.svg" alt="Advva Deals Specifications3">
                </div>
                <div class="col-md-3 col-12 text-md-center text-start mt-n-1 pt-md-3 pt-5">
                    <img src="/img/mdb.svg" alt="Advva Deals Specifications3">
                </div>
              </div>
            </div>
          </div>
          <!-- services Section -->
          <div class="section secondSection pt-5">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-md-4 col-12 text-center px-5 mt-5">
                        <img class="image4" src="/img/Person1.png" alt="Advva Business Deals Specifications1">
                        <h4 class="fw-bold colorOne mt-md-5 mt-3 px-3">Reach New Customers Daily</h4>
                        <p class="colorTwo mt-3">We invest millions in marketing campaigns across web and mobile to bring customers to Advva.</p>
                    </div>
                    <div class="col-md-4 col-12 text-center px-5 mt-5">
                        <img class="image5" src="/img/Person2.png" alt="Advva Business Deals Specifications2">
                        <h4 class="fw-bold colorOne mt-md-5 mt-3">Become a True Local Destination</h4>
                        <p class="colorTwo mt-3">People are always looking for their new favorite thing to do. We’ll use our tools to help them find you.</p>
                    </div>
                    <div class="col-md-4 col-12 text-center px-5 mt-5">
                        <img class="image6" src="/img/Person3.png" alt="Advva Business Deals Specifications3">
                        <h4 class="fw-bold colorOne mt-md-5 mt-3">Give Discounts Get a Lot of Customers.</h4>
                        <p class="colorTwo mt-3">Advva is an marketing solution with no upfront cost that helps your business to build brand recognition.</p>
                    </div>
                </div>
            </div>
          </div>
          <!-- FAQ Section -->
          <div class="section container mb-5 mt-4 py-5 overflow-hidden">
            <div class="row my-md-5 mb-5">
              <div class="col-12 col-md-12 align-self-center text-center">
                <h1 class="text-black">FAQs</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item px-md-5">
                    <h2 class="accordion-header py-md-4 py-3" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <h6>Do I have to pay anything to get started?</h6>
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Driver does not pay to become a member, and there is no cost to wrap or unwrap the driver's car!</div>
                    </div>
                  </div>
                  <div class="accordion-item px-md-5">
                    <h2 class="accordion-header py-md-4 py-3" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <h6>How much money will I make each month?</h6>
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">It depends on the size of the campaign. Each campaign has a different payout category. It starts from $300 and goes up to $2000.00 per month.</div>
                    </div>
                  </div>
                  <div class="accordion-item px-md-5">
                    <h2 class="accordion-header py-md-4 py-3" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <h6>Do I choose the campagin myself?</h6>
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        You can choose which area you would like to drive for our campaign. We consider both your selection of the campaign and the business owner's choice.                        </div>
                    </div>
                  </div>
                  <div class="accordion-item px-md-5">
                    <h2 class="accordion-header py-md-4 py-3" id="flush-headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                        <h6>How do I get paid?</h6>
                      </button>
                    </h2>
                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        After selecting you as a driver, you provide your bank account information to us and we pay you by direct deposit.                        
                      </div>
                    </div>
                  </div>
                </div>
                <a class="colorThree fw-bold px-md-5 mx-4 mt-5" href="">Show More</a>
              </div>
            </div>
          </div>
          <!-- Sixth Section -->
          <div class="section sixthSection py-5">
            <div class="container">
              <div class="row justify-content-around">
                <div class="col-md-5 col-11 bg-light form-shadow p-4 p-md-5">
                  <p class="fw-bold mb-4 pb-2">Reach New Customers. Build Loyalty. Become a True Destination. With $0 Upfront Costs! Get Started Today.</p>
                  <form id="formtwo" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                  <?php if (! empty($formErrors)) { ?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true"></span>
                      </button>
                      <?php
                          foreach($formErrors as $error) {
                              echo $error . '<br/>';
                          }
                      ?>
                  </div>
                  <?php } ?>
                  <?php if (isset($success)) { echo $success; } ?>
                  <div>
                      <div>
                          <input id="BusinessName" name="BusinessName" type="name" class="form-control my-3 p-3" placeholder="Business Name" value="<?php if (isset($BusinessName)) { echo $BusinessName; } ?>">
                          <input id="BusinessAddress" name="BusinessAddress" type="address" class="form-control my-3 p-3" placeholder="Business Address" value="<?php if (isset($BusinessAddress)) { echo $BusinessAddress; } ?>">
                          <input id="BusinessCategory" name="BusinessCategory" type="text" class="form-control my-3 p-3" placeholder="Business Category" value="<?php if (isset($BusinessCategory)) { echo $BusinessCategory; } ?>">
                          <input id="FirstandLastName" name="FirstandLastName" type="text" class="form-control my-3 p-3" placeholder="First and Last Name" value="<?php if (isset($FirstandLastName)) { echo $FirstandLastName; } ?>">
                          <input id="email" name="email" type="email" class="form-control my-3 p-3" placeholder="Email Address" value="<?php if (isset($email)) { echo $email; } ?>">
                          <input id="tel" name="tel" type="tel" class="form-control my-3 p-3" placeholder="Phone Number" value="<?php if (isset($tel)) { echo $tel; } ?>">
                          <p class="fs2 my-4">By clicking 'Sign up', I confirm that I agree to the Groupon Merchant Terms of Use , and have read the Privacy Statement .</p>
                          <button type="button" class="signupButton mw-100 w-100 p-3 fw-bold">Sign Up</button>
                      </div>
                  </div>
                  </form>
                </div>
                <div class="col-md-6 text-start mt-md-0 mt-5">
                  <h3 class="px-5 pt-5 mt-5 gsap4">Become a True Local Destination</h3>
                  <h5 class="px-5 pt-4 mb-5">By using Digital Media to sell your product,</br>you save a tree.</h5>
                  <img class="image2 mt-5" src="/img/Mobile3.png" alt="Advva App" width="750px">
                </div>
              </div>
            </div>
          </div>
        </main>
        
        <footer class="section d-flex align-items-center text-md-start text-center">
          <div class="container">
            <div class="row mt-5 pt-md-5 justify-content-between">
              <div class="col-md-2">
                <img src="/img/Advva Deals Logo.svg" alt="Advva Deals Logo" height="60px">
              </div>
              <div class="col-md-2 ">
                <h6 class="fw-normal mb-md-3 pt-5 pt-md-0">
                  FOLLOW US
                </h6>
                <a href="https://www.instagram.com/advvainc/"><img src="/img/insta.svg" alt="advva deals instagram"></a>
                <a href="#"><img src="/img/linkedin.svg" alt="advva deals linkedin"></a>
                <a href="https://www.facebook.com/Advva-103036491994850"><img src="/img/facebook.svg" alt="advva deals facebook"></a>
              </div>
              <div class="col-md-5">
                <div class="row">
                  <div class="col fs2 px-4 px-md-0 pt-md-0 pt-4">Advva, one of the largest advertising companies in California, is wrapping cars now.
                    You can make extra money every month.</div>
                </div>
                <div class="row justify-content-between mt-md-2 pt-4 pt-md-0 px-md-0">
                  <div class="col-md-8 col-12 fs2 fw-bold px-md-0">Advertising & Marketing Agency</div>
                  <div class="col-md-4 col-12 fs2 text-center text-md-end px-md-0">Ⓒ 2022 Advva Inc.</div>
                </div>
              </div>
            </div>
            <div class="row my-md-5 my-3 pb-md-5 pt-md-4 justify-content-between">
              <div class="col-md-5 d-md-block d-grid">
                <a class="fs2 pe-md-2" href="">Tersms of Services</a>
                <a class="fs2 mx-md-5 px-md-4" href="">Privacy Policy</a>
                <a class="fs2 ps-md-1" href="">Cookies Agreement</a>
              </div>
              <div class="col-md-5 mt-md-0 mt-3 text-md-end text-center px-md-0">
                <span class="fs2 text-secondary">Design & Develope By <a class="colorFour" href="#">Viana-Studio</a></span>
              </div>
            </div>
          </div>
        </footer>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>
  
    <script src="/js/main.js"></script>
</body>
</html>
