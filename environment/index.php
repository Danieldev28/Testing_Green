<?php include "process.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charisma | Registration</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/overridebootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   
    <!--Meta Tags-->
    <meta name="title" content="Greenpark Homes | Greenpark Group">
    <meta name="description" content="homes. Greenpark homes has a large selection of homes to choose from. We cater to different lifestyles and growing families. We build to meet your needs.">
    <meta name="keywords" content="greenpark, condos, condominium,new home,apartments,flats,real estate,mls,houses for sale,homes for sale,for sale by owner,for sale by developer,mls listings,foreclosure,condos for sale,home for sale,real estate agent,buying a house">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="2 days">
    <meta name="author" content="Daniel Smith">
</head>

<body>
    <header>
        <!--LOGO SECTION-->
        <div class="container anim0" id="headder-section">
            <nav class="navbar navbar-light justify-content-center">
                   <a class="navbar-brand" href="./">
                    <img src="assets/images/Charisma-on-the-Park.png" class="charisma-logo" alt="Charisma on the Park Logo">
                    </a>
            </nav>
        </div>

        <!--HERO SECTION-->
        
        <div class="container-fluid" id="hero-section">
            <div class="row align-items-center">
                <div class="col-1-half">
                    <p class="rotate text-uppercase sideline-lt hide-sm anim2">Charisma</p>
                </div>
                <div class="col-22-half">
                    <div class="jumbotron d-flex align-items-center anim1">
                        <div class="container text-center">
                            <h1 class="display-4 anim1">life on the park.</h1>
                            <a class="btn btn-primary btn-lg reg-btn anim1" href="#registration-form-section" role="button">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-1-half">
                    <p class="rotate text-uppercase sideline-rt hide-sm anim2">On the park</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!--ARTICLE SECTION-->
        <article id="article-section">
            <div class="container-fluid " >
                <div class="row align-items-center no-gutters ">
                    <div class="col-lg-5 offset-sm-1 col-sm-10 ">
                        <div class="phase-2-article ">
                            <h1 class="anim3">the way <br> to live.</h1>
                            <h2 class="anim3">PHASE 2 - CONDOS AT VAUGHAN MILLS</h2>
                            <p class="anim3">Alluring, refined and perfectly positioned – Charisma On the Park presents condo living that redefines what a true new home experience is all about. Located at Jane and Rutherford, at the centre of all Vaughan has to offer,
                                Charisma literally puts you on the doorstep of shops, restaurants and entertainment. The comforts of home have never been so complete – outdoor pool, bocce courts, party rooms, a theatre and so much more. Experience life
                                on the park at Charisma. Register today to receive the latest updates.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-0 col-sm-10 offset-sm-1 no-gutter anim3 ">
                        <img src="assets/images/rendering.jpg" class="img-fluid " alt="Rendering of Charisma Development"></img>
                        <div class="overlay ctr">
                            <p class="overlay-txt">Coming <br> Spring 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!--REGISTRATION FORM SECTION-->
        <div class="container registration-anime3" id="registration-form-section">
                <div class="registration" >
                <div class="row">
                    <div class="col-4 offset-4 text-center registration-title">
                        <h2>Register</h2>
                    </div>
                </div>
                               <form id="registration-form" name="registration-form" action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="POST">
                    <div class="form-group row ">
                        <div class="col-sm-12 col-md-5 offset-md-1 form-padding">
                            <input class="form-control form-box" type="text" maxlength="30" name="fname" id="mail-fname" placeholder="*FirstName" value="<?php if(isset($fname) && $success == ''){echo $fname;}?>" required><?php if(isset($err_fname)) {echo $err_fname;} ?>
                            <span class="error_form" id="fname_error_message"></span>
                        </div>
                        
                        <div class="col-sm-12 col-md-5 form-padding">
                            <input class="form-control form-box" type="text" maxlength="30"  name="lname" id="mail-lname" placeholder="*LastName" value="<?php if(isset($lname) && $success == ''){echo $lname;}?>"  required><?php if(isset($err_lname)) {echo $err_lname;} ?>
                            <span class="error_form" id="lname_error_message"></span>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-12 col-md-5 offset-md-1 form-padding">
                            <input class="form-control form-box"  type="email" maxlength="30"  name="email" id="mail-email" placeholder="*Email Address" value="<?php if(isset($email) && $success == ''){echo $email;}?>" required><?php if(isset($err_email)) {echo $err_email;} ?>
                        <span class="error_form" id="email_error_message"></span>
                        </div>
                        <div class="col-sm-12 col-md-5 form-padding">
                            <input class="form-control form-box" type="tel" maxlength="30" name="phone" id="mail-phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="*Phone Number" value="<?php if(isset($phone) && $success == ''){echo $phone;}?>"   required><?php if(isset($err_phone)) {echo $err_phone;} ?>
                        <span class="error_form" id="phone_error_message"></span>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-12 col-md-5 offset-md-1 form-padding">
                            <input class="form-control form-box"  type="text" maxlength="50"  name="city" id="mail-city" placeholder="*City" value="<?php if(isset($city) && $success == ''){echo $city;}?>" required><?php if(isset($err_city)) {echo $err_city;} ?>
                        <span class="error_form" id="city_error_message"></span>
                        </div>
                        <div class="col-sm-12 col-md-5 form-padding">
                           <input class="form-control form-box" type="text" maxlength="30" name="pcode" id="mail-pcode" pattern="[A-Za-z]{1}[0-9]{1}[A-Za-z]{1}[0-9]{1}[A-Za-z]{1}[0-9]{1}" placeholder="*Postal Code" value="<?php if(isset($pcode) && $success == ''){echo $pcode;}?>" required><?php if(isset($err_pcode)) {echo $err_pcode;} ?>
                        <span class="error_form" id="pcode_error_message"></span>
                        </div>
                    </div>

                    <!--I AM INTERESTED IN SECTION-->
                    <div class="row">
                        <div class="col-sm-12 col-md-10 offset-md-1 text-left">
                            <h3>I am interested in...</h3>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-12 col-md-3 offset-md-1 form-padding">
                            <label for="size">*Unit Size</label>
                        </div>
                        <div class="col-sm-12 col-md-5 form-padding">
                            <select class="form-control form-box" name="size" id="size"? required>
                            <option class="" value ="" disabled selected hidden>Unit Size</option>
                            <option class="" value="1000"<?php if ((isset($size)) && ($size === '1000') && $success == ''){echo "selected"; }  ?>>1000 SQ FEET</option>
                            <option class="" value="2000"<?php if ((isset($size)) && ($size === '2000') && $success == ''){echo "selected"; }  ?>>2000 SQ FEET</option>
                            <option class="" value="3000"<?php if ((isset($size)) && ($size === '3000') && $success == ''){echo "selected"; }  ?>>3000 SQ FEET</option>
                            </select> <span class="error_form" id="size_error_message"></span>
                        </div>
                    </div>

                    <!--Where have you seen us?-->
                    <div class="form-group row ">
                        <div class="col-sm-12 col-md-3 offset-md-1 form-padding">
                            <label for="heard">*How did you hear about us?</label>
                        </div>
                        <div class="col-sm-12 col-md-5 form-padding">
                            <select class="form-control form-box" name="heard" id="heard" required>
                            <option value ="" disabled selected hidden>How did you hear about us?</option>
                            <option value="google" <?php if ((isset($heard)) && ($heard === 'google') && $success == ''){echo "selected"; }  ?>>Google</option>
                            <option value="friend" <?php if ((isset($heard)) && ($heard === 'friend') && $success == ''){echo "selected"; }  ?>>Friend</option>
                            <option value="realtor" <?php if ((isset($heard)) && ($heard === 'realtor') && $success == ''){echo "selected"; }  ?>>Realtor</option>
                        </select> <span class="error_form" id="heard_error_message"></span>
                        </div>
                    </div>
                    
                    

                    <!--What is you price range?-->
                    <div class="form-group row ">
                        <div class="col-sm-12 col-md-3 offset-md-1 form-padding">
                            <label for="price">*Price Range</label>
                        </div>
                        <div class="col-sm-12 col-md-5 form-padding">
                           <select class="form-control form-box" name="price" id="price" required>
                            <option value ="" disabled selected hidden>Price Range</option>
                            <option value="10000" <?php if ((isset($price)) && ($price === '10000') && $success == ''){echo "selected"; }  ?>>$10,000</option>
                            <option value="20000" <?php if ((isset($price)) && ($price === '20000') && $success == ''){echo "selected"; }  ?>>$20,000</option>
                            <option value="30000" <?php if ((isset($price)) && ($price === '30000') && $success == ''){echo "selected"; }  ?>>$30,000</option>
                        </select> <span class="error_form" id="price_error_message"></span>
                        </div>
                    </div>
                    
                    <!--Do you work in this profession-->
                    <div class="form-group row ">
                        <div class="col-sm-12 col-md-3 offset-md-1 form-padding">
                            <label for="inlineRadioOptions">*Are you a Broker?</label>
                        </div>
                        <div class="col-sm-12 col-md-5 form-padding">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form-control" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="YES" <?php if((isset($inlineRadioOptions)) && ($inlineRadioOptions === 'YES') && $success == '') {echo "checked"; }
                                   ?>required>
                            <label class="form-check-label" for="inlineRadio1">YES</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form-control" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="NO" <?php if((isset($inlineRadioOptions)) && ($inlineRadioOptions === 'NO') && $success == '') {echo "checked"; }
                                   ?> required>
                            <label class="form-check-label" for="inlineRadio2">NO</label>
                            </div> <span class="error_form" id="radio_options_error_message"></span>
                        </div>
                    </div>
                    
                    <div class="form-group row ">
                        <div class="col-sm-2 col-md-1 offset-md-1 form-padding">
                            <div class="form-check">
                                <input class="form-check-input position-static form-control" type="radio" name="blankRadio" id="blankRadio" value="option" aria-label="..." required>
                            </div>
                              
                        </div>
                        <div class="col-sm-10 col-md-9 form-padding">
                             <label class="form-check-label" for="blankRadio">
                                    *In accordance with Canadian Anti-Spam Legislation, I give my consent to receive electronic communications 
                                    from Greenpark Group regarding: upcoming communities, current communities, leasing opportunities, announcements, invitations,
                                    events, promotions and all other related electronic communications.
                            </label>
                        </div>
                    </div>
                     <div class="form-group row"> 
                     <div class="col-sm-12 col-md-1 offset-md-1 form-padding">
                         <button class="btn btn-primary btn-lg submit-btn" type="submit" value="submit" name="action" id="mail-submit">Submit</button>
                     </div>
                     </div>
                </form>
            </div>
        </div>
    </main>

    <div class="container">
        <footer id="sticky-footer" class="py-4 footer">
            <div class="container">
                <div class="row txt-footer">
                    <div class="col-sm-12 col-md-5 offset-md-1 ">
                        <img src="assets/images/Greenpark-Group.png" class="align-middle footer-logo" alt="Image of Greenpark Group Logo in celebration of 50 years"></img>
                    </div>
                    <div class="col-sm-12 col-md-5 v-separator social">
                        <!--Instagram-->
                        <a class="btn-lg  btn-social" type="button" role="button" href="https://www.instagram.com/greenparkgroup/?hl=en"><i class="fab fa-instagram"></i></a>
                        <!--Facebook-->
                        <a class="btn-lg  btn-social " type="button" role="button" href="https://www.facebook.com/GreenparkGroup.ca/"><i class="fab fa-facebook-f"></i></a>
                        <!--Twitter-->
                        <a class="btn-lg  btn-social " type="button" role="button" href="https://twitter.com/Greenpark_Group?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
                        <!--Google +-->
                        <a class="btn-lg  btn-social " type="button" role="button" href="link"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-8 offset-md-2 ">
                        <p class="txt-copy">
                            &copy; 2017 Greenpark Holdings Ltd. Greenpark is a registered trademark of Greenpark Holdings Ltd. All Rights Reserved. Prices and specifications subject to change without notice. E. & O.E. Brokers protected. <a href="https://www.greenparkgroup.ca/privacy-policy/">Privacy Policy</a> / <a href="https://www.greenparkgroup.ca/accessibility/">Accessibility</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!--JavaScript-->
    <script type="text/javascript" src="assets/js/script.js"></script>
    
     <!-- GSAP Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/ScrollTrigger.min.js"></script>
    <script src="assets/js/main.js"></script>
    
    
</body>

</html>
