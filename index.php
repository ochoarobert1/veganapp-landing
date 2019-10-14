<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vegan Guide APP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style type="text/css">
        /* OVERRIDES */
        .container {
            max-width: 1380px;
        }

        @-webkit-keyframes AnimationName {
            0% {
                background-position: 7% 0%
            }

            50% {
                background-position: 94% 100%
            }

            100% {
                background-position: 7% 0%
            }
        }

        @-moz-keyframes AnimationName {
            0% {
                background-position: 7% 0%
            }

            50% {
                background-position: 94% 100%
            }

            100% {
                background-position: 7% 0%
            }
        }

        @keyframes AnimationName {
            0% {
                background-position: 7% 0%
            }

            50% {
                background-position: 94% 100%
            }

            100% {
                background-position: 7% 0%
            }
        }

        body {
            font-family: 'Catamaran', sans-serif;
        }

        .main-hero-container {
            position: relative;
            min-height: 100vh;
            background: rgb(141, 49, 111);
            background: linear-gradient(125deg, rgba(141, 49, 111, 1) 0%, rgba(237, 54, 111, 1) 100%);
            background-size: 400% 400%;
            color: white;
            -webkit-animation: AnimationName 15s ease infinite;
            -moz-animation: AnimationName 15s ease infinite;
            animation: AnimationName 15s ease infinite;
        }

        .social-buttons {
            position: absolute;
            top: 30px;
            right: 45px;
            font-size: 2rem;
        }

        .social-buttons a {
            color: white;
            margin: 0 .8rem;
            transition: all .3s ease-in-out;
        }

        .social-buttons a:hover {
            color: darkblue;
        }

        .mobile-social-buttons {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .mobile-social-buttons a {
            color: white;
            margin: 0 .8rem;
            transition: all .3s ease-in-out;
        }

        .mobile-social-buttons a:hover {
            color: darkblue;
        }

        .row-hero {
            min-height: 100vh;
        }

        .main-hero-content {
            text-align: center;
        }

        .corporate h5 {
            font-size: 1rem;
            font-weight: 300;
        }

        .corporate {
            text-align: center;
        }

        h1 {
            font-size: 1.9rem;
            line-height: 2rem;
            margin: .5rem;
            font-weight: 100;
        }

        h1 strong {
            font-weight: 600;
        }

        h3 {
            font-size: 2.2rem;
            margin: 1.5rem;
            font-weight: 100;
            text-align: center;
        }

        h2 {
            font-size: 1.8rem;
            text-transform: uppercase;
            font-weight: 300;
            letter-spacing: 1px;
            margin: 0;
            padding: .5rem;
            background: black;
        }

        .main-hero-description {
            margin-top: 1rem;
            font-size: 1.2rem;
            line-height: 1.5rem;
            font-weight: 100;
        }

        .main-hero-description a {
            color: #ffa737;
            font-weight: 400;
            text-shadow: 0 0 16px #8e316f;
            text-decoration: none;
            transition: all .3s ease-in-out;
            margin-bottom: 0.5rem;
            font-size: 1.9rem;
            display: block;
            margin-top: 2rem;
            text-transform: uppercase;
        }

        .main-hero-description a:hover {
            color: #ff3371;
            text-decoration: none;
        }

        .main-hero-description strong {
            font-weight: 700;
        }

        .main-hero-buttons {
            text-align: center;
            font-size: 1.1rem;
            padding: .5rem;
            padding-top: 1rem;
        }

        .main-hero-buttons img {
            display: inline-block;
            max-width: 130px;
            border-radius: 10px;
        }

        .powered {
            margin-top: -2rem;
            font-size: .8rem;
            line-height: 2rem;
            text-align: center;
            justify-content: center;
        }

        .powered img {
            max-width: 210px;
            padding-left: 10px;
        }

        .powered-mobile {
            margin-top: 2rem;
        }

        .text-together {
            line-height: 1.2rem;
            font-size: 1.3rem;
        }

        .img-invert {
            transform: rotate(180deg);
        }

        .img-logo {
            margin: 1.2rem auto;
            margin-top: 0;
        }

        .custom-modal .modal-title span {
            display: block;
            font-size: 2rem;
            color: white;
        }

        .custom-modal .modal-title span:last-child {
            font-size: 1.2rem;
            font-weight: 300;
        }

        .custom-modal .modal-content {
            background: rgb(141, 49, 111);
            background: linear-gradient(125deg, rgba(141, 49, 111, 1) 0%, rgba(237, 54, 111, 1) 100%);
        }

        .custom-modal .modal-header {
            border-bottom: 2px solid #ec366f;
        }

        .custom-contact-form {
            color: white;
        }

        .close {
            color: white;
            opacity: .8;
        }

        .custom-contact-form button {
            display: block;
            width: 100%;
            margin: 1.5rem 0;
            margin-bottom: .5rem;
            background: #8e316f;
            color: white;
            font-size: 1.4rem;
            padding: 0.6rem;
            border: 2px solid #ec356f;
            font-weight: 400;
            letter-spacing: 1px;
            transition: all .3s ease-in-out;
        }

        .custom-contact-form button:hover {
            background: transparent;
        }

        .custom-contact-form label {
            font-size: 1.3rem;
            font-weight: 300;
        }

        .form-check-label {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .custom-contact-form .form-control {
            margin-bottom: 1.5rem;
            background: #8e316f;
            border: 0;
            color: white;
            border-radius: 0;
        }

        .form-control::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white;
            opacity: 1;
            /* Firefox */
        }

        .form-control:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: white;
        }

        .form-control::-ms-input-placeholder {
            /* Microsoft Edge */
            color: white;
        }

        /* MEDIAQUERIES */

        @media (max-width: 1390px) {
            .img-phone {
                max-width: 430px;
                margin: 0 auto;
                display: block;
            }

            .img-logo {
                max-width: 360px;
            }

            h1 {
                font-size: 1.5rem;
                line-height: 2rem;
                margin: .5rem;
                font-weight: 100;
            }

            h3 {
                font-size: 1.9rem;
            }
        }

        @media (max-width: 1170px) {
            .img-logo {
                max-width: 325px;
            }

            .main-hero-buttons img {
                max-width: 110px;
            }

            h3 {
                font-size: 1.5rem;
                margin: 1.2rem;
            }
        }

        @media (max-width: 991px) {
            .main-hero-image {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .main-hero-content {
                padding: 1rem;
            }

            .corporate h5 {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            h2 {
                font-size: 1.4rem;
            }

            .mobile-social-buttons {
                font-size: 1.6rem;
                margin-bottom: 0.5rem;
            }

            .main-hero-description {
                margin-top: .5rem;
                font-size: 1.4rem;
                line-height: 1.9rem;
            }

            .text-together {
                line-height: 1.1rem;
                font-size: 1.1rem;
            }

            .powered img {
                max-width: 155px;
                padding-left: 10px;
            }

            .main-hero-buttons span {
                display: block;
                margin-top: .5rem;
            }

            .powered-mobile {
                line-height: 0.2rem;
                margin-top: 0;
                justify-content: center;
                flex-flow: column;
            }

            .custom-modal .modal-title span:last-child {
                font-size: 1rem;
            }


        }

        @media (max-width: 414px) {
            .img-logo {
                max-width: 265px;
            }

            .main-hero-description {
                margin-top: .5rem;
                font-size: 1.2rem;
                line-height: 1.7rem;
            }

            h3 {
                font-size: 1.8rem;
                margin: 0.9rem;
            }

            h1 {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 375px) {
            .main-hero-content {
                padding: 1rem;
            }

            h3 {
                font-size: 1.4rem;
                margin: 0.7rem;
            }

            .text-together {
                line-height: 1.5rem;
                font-size: 1.1rem;
            }

            h2 {
                font-size: 1.2rem;
            }

            .main-hero-buttons {
                font-size: 1rem;
                padding-top: 0;
            }
        }

    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="row align-items-center no-gutters">
            <div class="main-hero-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="social-buttons d-xl-block d-lg-block d-md-block d-sm-none d-none">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                </div>
                <div class="container">
                    <div class="row row-hero justify-content-between align-items-center">
                        <div class="main-hero-content col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="mobile-social-buttons d-xl-none d-lg-none d-md-none d-sm-block d-block">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                            </div>
                            <h1>The Ultimate <strong>Vegan</strong> Guide App</h1>
                            <img src="img/logo.png" alt="Vegan Guide APP" class="img-fluid" />
                            <div class="main-hero-description">
                                <div class="text-together">
                                    <p>OVER <strong>60</strong> CATEGORIES</p>
                                    <p><strong>200</strong> COMPANIES AND <strong>5000</strong> VEGAN PRODUCTS</p>
                                    <p>ALL IN ONE APP</p>
                                </div>
                                <div class="d-xl-none d-lg-none d-md-none d-sm-block d-block">
                                    <img src="img/mockup.png" alt="Vegan Guide" class="img-fluid" />
                                </div>
                                <img src="img/line.png" alt="" class="img-fluid" />
                                <h2>Official Launch <strong>Fall 2019</strong></h2>
                                <img src="img/line.png" alt="" class="img-fluid img-invert" />
                                <p><a href="" data-toggle="modal" data-target="#exampleModalCenter">Click here</a></p>
                                <p>To pre-register and be invited to our exclusive beta testing</p>
                            </div>
                            <div class="main-hero-buttons">
                                <p>Soon to be available on <span><img src="img/google.jpg" alt=""> <img src="img/apple.jpg" alt=""></span></p>
                            </div>

                            <div class="powered powered-mobile row align-items-center d-xl-none d-lg-none d-md-flex d-sm-flex d-flex">
                                <p>Powered by</p>
                                <img src="img/logo-usa.png" alt="Usa Vegan Magazine" />
                            </div>
                        </div>
                        <div class="main-hero-image col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <img src="img/mockup.png" alt="Vegan Guide" class="img-fluid img-phone" />
                            <div class="powered row align-items-center">
                                <p>Powered by</p>
                                <img src="img/logo-usa.png" alt="Usa Vegan Magazine" />
                            </div>
                        </div>
                        <div class="corporate col-12">
                            <h5>Vegan Guide App LLC 2019 - All rights reserved.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade custom-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        <span>Pre-Register Now!</span>
                        <span>Fill in the form below to get early access and be invited to our exclusive beta testing</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="subscribe_form" class="row">
                        <div class="custom-contact-form col-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" />
                        </div>
                        <div class="custom-contact-form col-12">
                            <input type="text" name="city" class="form-control" placeholder="City" />
                        </div>
                        <div class="custom-contact-form col-12">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" />
                        </div>
                        <div class="custom-contact-form col-12">
                            <label for="">Select your phone:</label>
                            <div class="form-check">
                                <input class="form-check-input" name="phone" type="radio" value="android" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Android
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="phone" type="radio" value="ios" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    iOS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="phone" type="radio" value="other" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                    Other
                                </label>
                            </div>
                        </div>
                        <div class="custom-contact-form col-12">
                            <button type="submit">Sign me up!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
