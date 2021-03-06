<!DOCTYPE html>
<html lang="en">
<!--===========  Head Tag ================-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Find the best jobs at your fingertips. 
        Search for your future star employee with a simple swipe right. Download & Register on Workruit today.">
    <title>Workruit - Mobile Job Search | Talent Search | Recruitment</title>
    <link rel='canonical' href=“https://www.workruit.com” />

    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.png' />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/aos.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!-- <link rel="stylesheet" type="text/css" href="css/main3.css" /> -->

    <link rel="stylesheet" href="">
    <style>
        /*.noticed-1{
			margin-right: -68px;
		}*/
        .loading-container {
            position: fixed;
            width: 100%;
            height: 100%;
            background: #fff;
            opacity: 1;
            top: 0;
            left: 0;
            z-index: 100000000;
        }

        .loading-container img {
            width: 55px;
            position: absolute;
            left: 50%;
            top: 50%;
        }

        .the-canvas {
            width: 100%;
            display: flex;
            margin: 0 auto;
            /* margin-top: 10px; */
            min-height: 100%;
            /* position: absolute; */
            z-index: 2;
            top: 70px;
            min-height: 100vh;
        }

        #slideshow {
            margin: 10px auto;
            position: relative;
            height: 360px;
        }

        /* @media only screen and (max-width: 768px) and (min-width: 305px) {
			.middle_img {
				margin-left: 40px !important;
			}
			.first_middle_img {
				margin-left: 30px !important;
			}
		}
		@media only screen and (max-width: 1000px) and (min-width: 768px) {
			.middle_img {
				margin-left: 57px !important;
			}
			.first_middle_img {
				margin-left: 30px !important;
			}
		} */
        @media only screen and (max-width: 812px) and (min-width: 305px) {
            .first_middle_img {
                margin-top: 58px !important;
                /* 			margin-left: 35px;
 */
            }
        }

        @media only screen and (max-width: 768px) and (min-width: 360px) {
            .middle_img {
                margin-left: 29px;
            }

            .first_middle_img {
                margin-left: 15px;
            }

            /*	.noticed-1-top-left{
				margin-right: 5px;
			}*/
            .leftside-please {
                margin-left: 31px;
            }

            .noticed-2 {
                margin-left: 23%;
            }
        }

        @media only screen and (max-width: 1024px) and (min-width: 768px) {
            .middle_img {
                margin-left: 71px;
            }

            .first_middle_img {
                margin-top: 58px !important;
                margin-left: 56px;
            }

            .noticed-1-top-left {
                margin-right: 3px;
            }

            .noticed-2 {
                margin-left: 26%;
            }

            .first_middle_img {
                margin-left: 50px;
            }

            /*
			.noticed-2{
				margin-left:68px !important;
				}*/
            .leftside-please {
                margin-left: 44px;
            }
        }

        @media only screen and (max-width: 1200px) and (min-width: 1024px) {
            .middle_img {
                margin-left: 78px;
            }

            .first_middle_img {
                margin-top: 58px !important;
                margin-left: 21%;
            }

            .noticed-1-top-left {
                margin-right: 24px;
            }

            .leftside-please {
                margin-left: -3px;
            }
        }

        @media only screen and (max-width: 1400px) and (min-width: 1200px) {
            .middle_img {
                margin-left: 100px;
            }

            .first_middle_img {
                margin-top: 58px !important;
                margin-left: 35px;
                margin-right: -68px;
            }

            .noticed-1-top-left {
                margin-right: 6px;
            }
        }

        .processor-loading-container {
            height: 100vh !important;
            display: flex;
            justify-content: center !important;
            align-items: center !important;
            align-content: center !important;
            text-align: center !important;
            background: #fff !important;
            position: fixed !important;
            width: 100% !important;
            z-index: 999999999999 !important;
            top: 0 !important;
            bottom: 0 !important;
        }

        .processor-loading-container .loading_supporter {
            position: relative !important;
            width: 100% !important;
        }

        .processor-loading-container p {
            margin: 0 !important;
            position: absolute !important;
            width: 100% !important;
            text-align: center !important;
            font-size: 14px !important;
            font-weight: 400 !important;
            font-family: sans-serif !important
        }

        /*   	@media only screen and (max-width: 992px){
			.noticed-1-top-left{
				margin-right: -3px;
			}
			
			.first_middle_img {
				margin-left: 50px;
			}
			.noticed-2{
				margin-left:68px !important;
				}
			.leftside-please{
				margin-left:37px;
			}
		}*/


        /* @media only screen and (max-width : 3000px) and (min-width : 1200px	 ){
			.noticed-1-top-left{
				margin-right: 26px;
			}
			.noticed-2{
				margin-left:110px;

			}
			.leftside-please{
				margin-left:94px;
				
			}
			.first_middle_img {
				margin-top: 58px !important;
				margin-left: 88px;
			}
		} */
    </style>
    <!-- Hotjar Tracking Code for www.workruit.com -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1782822,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65074645-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-65074645-1');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94088165-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94088165-5');
    </script>
    <!-- Chatra {literal} -->
    <script>
        var shareParameter = window.location.href.split(location.origin + "/")[1];
        if (!shareParameter) {
            (function (d, w, c) {
                w.ChatraID = 'aeF8KSek7P9EJiSLt';
                var s = d.createElement('script');
                w[c] = w[c] || function () {
                    (w[c].q = w[c].q || []).push(arguments);
                };
                s.async = true;
                s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') +
                    '//call.chatra.io/chatra.js';
                if (d.head) d.head.appendChild(s);
            })(document, window, 'Chatra');
            //chatra custom set up 
            window.ChatraSetup = {
                colors: {
                    buttonText: '#ffffff',
                    /* chat button text color */
                    buttonBg: '#337ab7' /* chat button background color */
                }
            }
        };
    </script>
    <!-- /Chatra {/literal} -->

</head>

<body>
    <div class="loading-container">
        <img src="images/oval.svg" alt="oval" style="width:55px">
    </div>
    <div class='processor-loading-container d-none'>
        <div class='loading_supporter'>
            <svg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg' stroke='#3ebb64'>
                <g fill='none' fill-rule='evenodd'>
                    <g transform='translate(1 1)' stroke-width='2'>
                        <circle stroke-opacity='.5' cx='18' cy='18' r='18' />
                        <path d='M36 18c0-9.94-8.06-18-18-18'>
                            <animateTransform attributeName='transform' type='rotate' from='0 18 18' to='360 18 18'
                                dur='1s' repeatCount='indefinite' />
                        </path>
                    </g>
                </g>
            </svg>
            <p>Please wait while we load your resume.</p>
        </div>
    </div>
    <div class="mainView">
        <div id="load-header"></div>

        <div class="container-fluid layout-hero layout-hero__blue-green-employer">
            <div class="container layout-hero_content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row feature-1 mt-5" id="topBlock">
                            <div class="col ">
                                <img src="images/e-screen-1-mobile@2x.png" class="mobile-screenshot"
                                    alt="e-screen-1-mobile@2x">
                                <h1 data-aos="fade-up" data-aos-offset="0" class="font-700">Find the right talent<br />
                                    with a swipe
                                    right</h1>
                                <h2 data-aos="fade-up" data-aos-delay="200" class="font-22px font-normal  title-text p-0"  data-aos-offset="0">Post unlimited jobs, chat
                                    and hire the right talent for your company</h2>
                                <div class="button button__main" data-aos="fade-up" data-aos-delay="400"
                                    data-aos-offset="0">
                                    <span>Get the app</span>
                                    <a target="_blank" href="https://itunes.apple.com/in/app/workruit/id1189752813?mt=8"
                                        class="apple">
                                        <svg width="30px" height="30px" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="-3.5 -3.5 55 55" enable-background="new -3.5 -3.5 55 55"
                                            xml:space="preserve">
                                            <g>
                                                <g id="svg_1">
                                                    <path fill="#FFFFFF"
                                                        d="M36.8,24.9c0.1,7.1,6.2,9.4,6.3,9.5c-0.1,0.2-1,3.4-3.2,6.7c-1.9,2.8-4,5.7-7.2,5.7c-3.1,0.1-4.1-1.9-7.7-1.9
                                                                    c-3.6,0-4.7,1.8-7.7,1.9c-3.1,0.1-5.4-3.1-7.4-5.9c-4-5.8-7.1-16.4-3-23.6c2-3.6,5.7-5.8,9.7-5.9c3-0.1,5.9,2,7.7,2
                                                                    c1.8,0,5.3-2.5,9-2.1c1.5,0.1,5.8,0.6,8.6,4.6C41.6,16.1,36.7,18.9,36.8,24.9 M30.9,7.5c1.6-2,2.7-4.7,2.4-7.5
                                                                    c-2.4,0.1-5.2,1.6-6.9,3.5c-1.5,1.8-2.8,4.6-2.5,7.2C26.6,11,29.2,9.4,30.9,7.5">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.workruit&hl=en"
                                        class="android">
                                        <img src="./images/svg/android.svg" alt="android">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-none">
                            <div class="row feature-2">
                                <div class="col">
                                    <img src="images/e-screen-2-mobile@2x.png" class="mobile-screenshot"
                                        alt="e-screen-2-mobile@2x">
                                    <h2 data-aos="fade-up">Profiles That Matter </h2>
                                    <p data-aos="fade-up">Workruit understands that you are busy building your company
                                        and
                                        is
                                        here to help you save time in finding the right talent. The app only shows you
                                        those
                                        profiles that are relevant to your requirement. </p>
                                </div>
                            </div>
                            <div class="row feature-3 feature-right" data-aos="fade-up">
                                <div class="col">
                                    <img src="images/e-screen-3-mobile@2x.png" class="mobile-screenshot"
                                        alt="e-screen-3-mobile@2x">
                                    <h2 data-aos="fade-up">Game, Set, Match </h2>
                                    <p data-aos="fade-up">Workruit helps you match with qualified professionals,
                                        instantly.
                                        It’s
                                        about time we said goodbye to ignored e-mails, zero-response applications, and
                                        cold-callings. Match with a candidate that is perfect for your company at your
                                        fingertips. </p>
                                </div>
                            </div>
                            <div class="row feature-4" data-aos="fade-up">
                                <div class="col">
                                    <img src="images/e-screen-4-mobile@2x.png" class="mobile-screenshot"
                                        alt="e-screen-4-mobile@2x">
                                    <h2 data-aos="fade-up">Get In Touch </h2>
                                    <p data-aos="fade-up">Workruit makes it possible for you to connect with possible
                                        candidates
                                        with its in-app messenger. This is a great place to exchange information that
                                        goes
                                        beyond resumes, and job requirements. Getting and staying in touch with a
                                        possible
                                        candidate has never been this simple.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="device__browser">
                            <div class="browser-slides">
                                <img id="browser-in-1" class="active" src="images/browser-in-1@2x.jpg"
                                    alt="browser-in-1@2x">
                                <!-- <img id="browser-in-2" src="images/browser-in-2@2x.jpg" alt="browser-in-2@2x">
                                <img id="browser-in-3" src="images/browser-in-3@2x.jpg" alt="browser-in-3@2x">
                                <img id="browser-in-4" src="images/browser-in-4@2x.jpg" alt="browser-in-4@2x"> -->
                            </div>

                            <img class="browser" src="images/browser.svg" alt="browser">
                        </div>
                        <div class="device__phone">
                            <div class="phone-slides">
                                <figure id="phone-in-1" class="active">
                                    <video class="main-video" id="video" poster="images/video-poster-employer.png"
                                        autoplay muted loop autobuffer>
                                        <source src="images/employer-anim-present.mp4">
                                    </video>
                                </figure>
                                <!-- <img id="phone-in-2" src="images/e-phone-in-2@2x.jpg" alt="e-phone-in-2@2x">
                                <img id="phone-in-3" src="images/e-phone-in-3@2x.jpg" alt="e-phone-in-3@2x">
                                <img id="phone-in-4" src="images/e-phone-in-4@2x.jpg" alt="e-phone-in-4@2x"> -->
                            </div>
                            <img class="phone" src="images/phone@2x.png" alt="phone@2x">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col center">
                    <h2 class="h1 font-32px font-700" data-aos="fade-up">Companies hiring on Workruit</h2>
                    <!-- <p class="kfeatures-p" data-aos="fade-up">It’s the recruitment platform of the future!</p> -->
                </div>
            </div>
            <div class="row customers" data-aos="fade-up">
                <div class="col-sm-2 col-4"><img src="images/clients/Quikr.png" alt="customer-1"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/Gmr.png" alt="customer-2"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/PurpleDot.png" alt="customer-3"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/2mee.png" alt="customer-4"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/AppBrowser.png" alt="customer-5"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/Cipla.png" alt="customer-6"></div>
            </div>
            <br>
            <div class="row customers" data-aos="fade-up" style="margin-top: -60px !important;">
                <div class="col-sm-2 col-4"><img src="images/clients/Darwinbox.png" alt="customer-7"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/Leanspoon.png" alt="customer-8"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/Uber.png" alt="customer-9"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/Swiggy.png" alt="customer-10"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/Deloitte.png" alt="customer-11"></div>
                <div class="col-sm-2 col-4"><img src="images/clients/Paytm.png" alt="customer-12"></div>
            </div>
        </div>

        <div class="Side_navigation_pics container" style="margin-top: 50px" data-aos="fade-up">

            <div class="row">
                <div class=" side_Nav col-md-5">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                            role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="heading font-700 font-22px">
                                Find the right talent

                            </div>
                            <div class="content mt-2 font-18px">
                                Workruit understands that you are busy building your company and is here to help you
                                save
                                time in finding the right talent. Our AI-based recruitment engine ensures you get only
                                relevant applicants tailored for your job requirements. All you have to do is swipe
                                right to
                                match.

                            </div>
                            <hr>

                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <div class="heading font-700 font-22px swip_chat_hire">
                                Swipe, Chat, Hire
                            </div>
                            <div class="content mt-2 font-18px">
                                Workruit helps you match with top job seekers instantly. Post a job, swipe right on the
                                applicant profiles, get matched, chat instantly and schedule interviews right away.
                                Experience the new-age recruitment cycle right at your fingertips.
                            </div>
                            <hr>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                            role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <div class="heading head_content font-700 font-22px">
                                Connect with Applicants

                            </div>
                            <div class="content mt-2 font-18px">
                                Workruit lets you connect with matched applicants through its in-app chat messenger. Get
                                to
                                know more about the applicant’s profile that goes beyond the resume. Connecting with
                                suitable and top talent has never been this simple.

                            </div>

                        </a>
                        <!-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> -->
                    </div>
                </div>
                <div class="images_side col-md-7">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">

                            <div class="col-md-6">
                                <div class="device__browser">
                                    <div class="browser-slides">
                                        <img id="browser-in-2" class="active" src="images/browser-in-1@2x.jpg"
                                            alt="browser-in-2@2x">
                                    </div>

                                    <img class="browser" src="images/browser.svg" alt="browser">
                                </div>
                                <div class="device__phone">
                                    <div class="phone-slides">
                                        <img id="phone-in-2" class="active" src="images/e-phone-in-2@2x.jpg"
                                            alt="e-phone-in-2@2x">
                                    </div>
                                    <img class="phone" src="images/phone@2x.png" alt="phone@2x">
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="col-md-6">
                                <div class="device__browser">
                                    <div class="browser-slides">
                                        <img id="browser-in-3" class="active" src="images/browser-in-3@2x.jpg"
                                            alt="browser-in-3@2x">
                                    </div>

                                    <img class="browser" src="images/browser.svg" alt="browser">
                                </div>
                                <div class="device__phone">
                                    <div class="phone-slides">
                                        <img id="phone-in-3" class="active" src="images/e-phone-in-3@2x.jpg"
                                            alt="e-phone-in-3@2x">
                                    </div>
                                    <img class="phone" src="images/phone@2x.png" alt="phone@2x">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="col-md-6">
                                <div class="device__browser">
                                    <div class="browser-slides">
                                        <img id="browser-in-4" class="active" src="images/browser-in-4@2x.jpg"
                                            alt="browser-in-4@2x">
                                    </div>

                                    <img class="browser" src="images/browser.svg" alt="browser">
                                </div>
                                <div class="device__phone">
                                    <div class="phone-slides">
                                        <img id="phone-in-4" class="active" src="images/e-phone-in-4@2x.jpg"
                                            alt="e-phone-in-4@2x">

                                    </div>
                                    <img class="phone" src="images/phone@2x.png" alt="phone@2x">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">09876543456789</div> -->
                    </div>
                </div>
            </div>

        </div>


        <div class="container kfeatures">
            <div class="row">
                <div class="col center">
                    <h2 class="h1 font-32px font-700" data-aos="fade-up">Key Features</h2>
                    <!-- <p class="kfeatures-p" data-aos="fade-up">It’s the recruitment platform of the future!</p> -->
                </div>
            </div>
            <div class="row kfeatures-row-1">
                <div class="col-sm-4 kfeatures-block">
                    <div class="" data-aos="fade-up"><img src="images/e-icon-simple-interface.svg"
                            alt="e-icon-simple-interface"></div>
                    <h3 class="h2 font-22px font-700" data-aos="fade-up">Swipe right to hire
                    </h3>
                    <p data-aos="fade-up" class="font-18px">Swipe right to like an applicant’s profile, left otherwise.
                    </p>
                </div>
                <div class="col-sm-4 kfeatures-block">
                    <div class="" data-aos="fade-up" data-aos-delay="200"><img
                            src="images/e-icon-two-level-matching.svg" alt="e-icon-two-level-matching">
                    </div>
                    <h3 class="h2 font-22px font-700" data-aos="fade-up" data-aos-delay="200">Two-Level Matching
                    </h3>
                    <p data-aos="fade-up" data-aos-delay="200" class="font-18px">Get matches based on applicant's
                        profile, as well as their
                        interest in joining your company.
                    </p>
                </div>
                <div class="col-sm-4 kfeatures-block">
                    <div class="" data-aos="fade-up" data-aos-delay="400"><img src="images/e-icon-in-app-messenger.svg"
                            alt="e-icon-in-app-messenger">
                    </div>
                    <h3 class="h2 font-22px font-700" data-aos="fade-up" data-aos-delay="400">In-App Messenger</h3>
                    <p data-aos="fade-up" data-aos-delay="400" class="font-18px">Instantly chat with the matched
                        applicants and get to know
                        more about their experience.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 kfeatures-block">
                    <div class="" data-aos="fade-up"><img src="images/e-icon-free-jobs-to-post.svg"
                            alt="e-icon-free-jobs-to-post"></div>
                    <h3 class="h2 font-22px font-700" data-aos="fade-up">Post free jobs</h3>
                    <p data-aos="fade-up" class="font-18px">Post any number of jobs for free of cost. Sign up today and
                        start hiring.</p>
                </div>
                <div class="col-sm-4 kfeatures-block">
                    <div class="" data-aos="fade-up" data-aos-delay="200"><img
                            src="images/e-icon-high-quality-results.svg" alt="e-icon-high-quality-results">
                    </div>
                    <h3 class="h2 font-22px font-700" data-aos="fade-up" data-aos-delay="200">Hire on-the-go</h3>
                    <p data-aos="fade-up" data-aos-delay="200" class="font-18px">Hire top talent curated by our AI
                        engine using our mobile app
                        or web dashboard.
                    </p>
                </div>
                <div class="col-sm-4 kfeatures-block">
                    <div class="" data-aos="fade-up" data-aos-delay="400">
                        <img width="64" height="62" src="images/e-icon-desktop-dashboard.svg"
                            alt="e-icon-desktop-dashboard">
                    </div>
                    <h3 class="h2 font-22px font-700" data-aos="fade-up" data-aos-delay="400">Schedule interviews
                    </h3>
                    <p data-aos="fade-up" data-aos-delay="400" class="font-18px">Schedule interviews on the app and
                        track the entire
                        recruitment process, all in one place</p>
                </div>
            </div>
        </div>

        <div class="Side_hover container mt-2 " id="Side_hover_desktop" data-aos="fade-up">

            <div class="row">
                <div class="side_Nav col-3">
                    <h1 class="side_hover_heading ">ROLES</h1>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link  active" id="v-pills-messages-tab" data-toggle="pill"
                            href="#v-hover-softwaredevelopment" role="tab" aria-controls="v-hover-softwaredevelopment"
                            aria-selected="false">
                            <div class="heading">
                                Software Development
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                            href="#v-hover-MobileDevelopment" role="tab" aria-controls="v-hover-MobileDevelopment"
                            aria-selected="false">
                            <div class="heading">
                                Mobile Development
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-hover-business" role="tab"
                            aria-controls="v-hover-business" aria-selected="true">
                            <div class="heading">
                                Business
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-hover-design"
                            role="tab" aria-controls="v-hover-design" aria-selected="false">
                            <div class="heading">
                                Design
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-hover-dataanalysis"
                            role="tab" aria-controls="v-hover-engineering" aria-selected="false">
                            <div class="heading">
                                Data Analysis
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-hover-finance"
                            role="tab" aria-controls="v-hover-finance" aria-selected="false">
                            <div class="heading">
                                Finance
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-hover-Marketing"
                            role="tab" aria-controls="v-hover-Marketing" aria-selected="false">
                            <div class="heading">
                                Marketing
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-hover-hr" role="tab"
                            aria-controls="v-hover-hr" aria-selected="false">
                            <div class="heading">
                                HR and Recruiting
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-hover-operations"
                            role="tab" aria-controls="v-hover-operations" aria-selected="false">
                            <div class="heading">
                                Operations
                            </div>
                        </a>

                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-hover-sales"
                            role="tab" aria-controls="v-hover-sales" aria-selected="false">
                            <div class="heading">
                                Sales
                            </div>
                        </a>


                        <!-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> -->
                    </div>
                </div>
                <div class=" job_functions_vertical_line">
                    <div class="line"></div>
                </div>
                <div class="col-7">
                    <h1 class="side_hover_heading">SPECIALITIES</h1>
                    <div class="tab-content" id="v-hover-tabContent">
                        <div class="tab-pane fade " id="v-hover-business" role="tabpanel"
                            aria-labelledby="v-hover-home-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Business Analyst</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Business Development</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">CEO </p>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Project Manager</p>
                                    </div>
                                    <div class=" col-sm-4">
                                        <p class="hover_names">General Business</p>
                                    </div>
                                    <div class=" col-sm-4">
                                        <p class="hover_names">Venture Capital</p>
                                    </div>

                                </div>


                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Product Manager</p>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-hover-design" role="tabpanel"
                            aria-labelledby="v-hover-profile-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Architect</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">CPO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Creative Director </p>
                                    </div>
                                </div>

                                <div class="row m-t-5 ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Fashion Designer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Game Designer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Interior Designer</p>
                                    </div>

                                </div>

                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">UI/UX Designer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Visual Designer</p>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-hover-operations" role="tabpanel"
                            aria-labelledby="v-hover-profile-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">COO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Administrative</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Business Operations</p>
                                    </div>

                                </div>

                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Customer Service</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Procurement</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Project Manager</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-hover-sales" role="tabpanel"
                            aria-labelledby="v-hover-sales-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Client Servicing</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Key Account Management</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Sales </p>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-hover-MobileDevelopment" role="tabpanel"
                            aria-labelledby="v-hover-MobileDevelopment-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Android Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Cross Platform Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">iOS Developer </p>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="v-hover-softwaredevelopment" role="tabpanel"
                            aria-labelledby="v-hover-softwaredevelopment-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Chief Information Officer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Back-end Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Blockchain Developer </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">CTO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Database Administrator</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">DevOps</p>
                                    </div>

                                </div>

                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Full Stack Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">IoT Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">IT Consultant</p>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">IT Security</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Machine Learning Engineer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Mean Stack Developer</p>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Network Engineer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">QA Engineer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Software Engineer</p>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Technical Architect</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Technical Lead</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Web Developer</p>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-hover-Marketing" role="tabpanel"
                            aria-labelledby="v-hover-Marketing-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">CMO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Advertising</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Community Manager </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Content Writer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Copywriter</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Digital Marketing</p>
                                    </div>

                                </div>

                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Growth Hacker</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Marketing</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Public Relations</p>
                                    </div>
                                </div>
                                <div class="row m-t-5 ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">SEO/SEM Analyst</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Social Media Manager</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade " id="v-hover-hr" role="tabpanel" aria-labelledby="v-hover-hr-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">CHRO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Human Resources</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Payroll </p>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Recruiter</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Talent Acquisition</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade " id="v-hover-finance" role="tabpanel"
                            aria-labelledby="v-hover-finance-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">CFO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Chartered Accountant</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Finance/Accounting </p>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Financial Analyst</p>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade " id="v-hover-dataanalysis" role="tabpanel"
                            aria-labelledby="v-hover-engineering-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Data Scientist</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Data Analytics</p>
                                    </div>
                                    <!-- <div class="col-sm-4">
                                    <p class="hover_names">Hardware Engineer </p>
                                </div> -->
                                </div>
                                <!-- <div class="row m-t-5">
                                <div class="col-sm-4">
                                    <p class="hover_names">Mechanical Engineer</p>
                                </div>

                            </div> -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="container Side_hover_mobile Side_hover_mobile_new mb-5 pb-5 " id="Side_hover_mobile"
            data-aos="fade-up">

            <div id="accordion">
                <!--==== business ====-->
                <div class="card">
                    <div class="card-header" id="business">
                        <a class="mobile_dropdown" data-toggle="collapse" aria-expanded="true" href="#v-hover-business"
                            role="tab" aria-controls="v-hover-business" aria-selected="true">
                            <div class="heading_mobile">
                                Business
                            </div>
                        </a>
                    </div>

                    <div id="v-hover-business" class="collapse " aria-labelledby="business" data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="hover_names hover_names_dropdown">Business Analyst</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="hover_names hover_names_dropdown">Business Development</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="hover_names hover_names_dropdown">CEO </p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <p class="hover_names hover_names_dropdown">General Business</p>
                                    </div>
                                    <div class=" col-md-4">
                                        <p class="hover_names hover_names_dropdown">Venture Capital</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--==== design ====-->

                <div class="card">
                    <div class="card-header" id="design">
                        <a class="mobile_dropdown" id="v-pills-profile-tab" data-toggle="collapse"
                            href="#v-hover-design" role="tab" aria-controls="v-hover-design" aria-selected="false"
                            aria-expanded="true">
                            <div class="heading_mobile">
                                Design
                            </div>
                        </a>
                    </div>
                    <div id="v-hover-design" class="collapse" aria-labelledby="design" data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="hover_names">Architect</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="hover_names">CPO</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="hover_names">Creative Director </p>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-md-4">
                                        <p class="hover_names">Fashion Designer</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="hover_names">Game Designer</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="hover_names">Interior Designer</p>
                                    </div>

                                </div>

                                <div class="row ">
                                    <div class="col-md-4">
                                        <p class="hover_names">UI/UX Designer</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="hover_names">Visual Designer</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!--==== Engineering ====-->

                <div class="card">
                    <div class="card-header" id="engineering">
                        <a class="mobile_dropdown" data-toggle="collapse" href="#v-hover-engineering" role="tab"
                            aria-controls="v-hover-engineering" aria-selected="false" aria-expanded="true">
                            <div class="heading_mobile">
                                Engineering
                            </div>
                        </a>
                    </div>
                    <div id="v-hover-engineering" class="collapse" aria-labelledby="engineering"
                        data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Civil Engineer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Electrical Engineer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Hardware Engineer </p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Mechanical Engineer</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--==== finance=====-->

                <div class="card">
                    <div class="card-header" id="finance">
                        <a class="mobile_dropdown" id="v-pills-profile-tab" data-toggle="collapse"
                            href="#v-hover-finance" role="tab" aria-controls="v-hover-finance" aria-selected="false"
                            aria-expanded="true">
                            <div class="heading_mobile">
                                Finance
                            </div>
                        </a>
                    </div>
                    <div id="v-hover-finance" class="collapse" aria-labelledby="finance" data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">CFO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Chartered Accountant</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Finance/Accounting </p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Financial Analyst</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--==== Marketing ====-->

                <div class="card">
                    <div class="card-header" id="Marketing">
                        <a class="mobile_dropdown" id="v-pills-profile-tab" data-toggle="collapse"
                            href="#v-hover-Marketing" role="tab" aria-controls="v-hover-Marketing" aria-selected="false"
                            aria-expanded="true">
                            <div class="heading_mobile">
                                Marketing
                            </div>
                        </a>

                    </div>
                    <div id="v-hover-Marketing" class="collapse" aria-labelledby="Marketing" data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">CMO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Advertising</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Community Manager </p>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Content Writer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Copywriter</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Digital Marketing</p>
                                    </div>

                                </div>

                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Growth Hacker</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Marketing</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Public Relations</p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">SEO/SEM Analyst</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Social Media Manager</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--==== HR and Recruiting=====-->

                <div class="card">
                    <div class="card-header" id="hr">
                        <a class="mobile_dropdown" data-toggle="collapse" href="#v-hover-hr" role="tab"
                            aria-controls="v-hover-hr" aria-selected="false" aria-expanded="true">
                            <div class="heading_mobile">
                                HR and Recruiting
                            </div>
                        </a>
                    </div>
                    <div id="v-hover-hr" class="collapse" aria-labelledby="hr" data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">CHRO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Human Resources</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Payroll </p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Recruiter</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Talent Acquisition</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--==== Operations =====-->

                <div class="card">
                    <div class="card-header" id="operations">
                        <a class="mobile_dropdown" data-toggle="collapse" href="#v-hover-operations" role="tab"
                            aria-controls="v-hover-operations" aria-selected="false" aria-expanded="true">
                            <div class="heading_mobile">
                                Operations
                            </div>
                        </a>
                    </div>
                    <div id="v-hover-operations" class="collapse" aria-labelledby="operations" data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">COO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Administrative</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Business Operations</p>
                                    </div>

                                </div>

                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Customer Service</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Procurement</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Project Manager</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--==== Software Development =====-->

                <div class="card">
                    <div class="card-header" id="softwaredevelopment">
                        <a class="mobile_dropdown" id="v-pills-profile-tab" data-toggle="collapse"
                            href="#v-hover-softwaredevelopment" role="tab" aria-controls="v-hover-softwaredevelopment"
                            aria-selected="false" aria-expanded="true">
                            <div class="heading_mobile">
                                Software Development
                            </div>
                        </a>
                    </div>
                    <div id="v-hover-softwaredevelopment" class="collapse" aria-labelledby="softwaredevelopment"
                        data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Chief Information Officer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Back-end Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Blockchain Developer </p>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">CTO</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Database Administrator</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">DevOps</p>
                                    </div>

                                </div>

                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Full Stack Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">IoT Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">IT Consultant</p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">IT Security</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Machine Learning Engineer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Mean Stack Developer</p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Network Engineer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">QA Engineer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Software Engineer</p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Technical Architect</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Technical Lead</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Web Developer</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==== sales ====-->


                <div class="card">
                    <div class="card-header" id="sales">
                        <a class="mobile_dropdown" id="v-pills-profile-tab" data-toggle="collapse" href="#v-hover-sales"
                            role="tab" aria-controls="v-hover-sales" aria-selected="false" aria-expanded="true">
                            <div class="heading_mobile">
                                Sales
                            </div>
                        </a>
                    </div>
                    <div id="v-hover-sales" class="collapse" aria-labelledby="sales" data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Client Servicing</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Key Account Management</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Sales </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!--==== MobileDevelopment =====-->

                <div class="card">
                    <div class="card-header" id="MobileDevelopment">
                        <a class="mobile_dropdown" id="v-pills-profile-tab" data-toggle="collapse"
                            href="#v-hover-MobileDevelopment" role="tab" aria-controls="v-hover-MobileDevelopment"
                            aria-selected="false" aria-expanded="true">
                            <div class="heading_mobile">
                                Mobile Development
                            </div>
                        </a>
                    </div>
                    <div id="v-hover-MobileDevelopment" class="collapse" aria-labelledby="MobileDevelopment"
                        data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="hover_names">Android Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">Cross Platform Developer</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="hover_names">iOS Developer </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid quote quote__e mt-5" data-aos="fade">
            <div class="container quote-container">
                <div class="row">
                    <div class="quote-symbol"></div>
                    <div class="col">
                        <h2 class="h1 font-32px font-700" data-aos="fade-up">Our users love their success</h2>
                    </div>
                </div>

                <div class="row pt_4pr" data-aos="fade-up">
                    <div class="col-sm-6">
                        <div class="card emp_card">
                            <div class="card-body">
                                <h2 class="quote-text font-18px color-black font-normal">Workruit has made the
                                    recruitment process easy for employers. Excellent platform for
                                    recruiters to hire the best-suited candidate for the work profile. I am
                                    impressed with Workruit’s features which has made talent search so easy.
                                </h2>
                            </div>
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-center">
                                    <p class="customer-name font-18px font-700 color-black">Yamini</p><span
                                        class="color-black mt_5 mobile_mt_5pr">,&nbsp;</span>
                                    <p class="customer-name font-18px font-700 color-black">HR</p>
                                </div>
                                <div class="designation">
                                    <p class="customer-name font-18px font-700 color-black m-0 mb-3">
                                        StoryTech</p>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mobile_mt_10px emp_card">
                            <div class="card-body">
                                <h2 class="quote-text font-18px color-black font-normal">Workruit is the only online
                                    hiring platform with such an easy recruitment process. An easy
                                    on-boarding process for the recruiters, Workruit has made me believe
                                    that technology has redefined the recruitment services by making it just
                                    a task of fingertips.
                                </h2>
                            </div>
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-center">
                                    <p class="customer-name font-18px font-700 color-black">Vani Suresh</p>
                                    <span class="color-black mt_5 mobile_mt_5pr">,&nbsp;</span>
                                    <p class="customer-name font-18px font-700 color-black"> Business
                                        Development</p>
                                </div>
                                <div class="designation">
                                    <p class="customer-name font-18px font-700 color-black m-0 mb-3">
                                        StoryTech</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div id="carouselExampleControls" class="carousel slide pt_4pr d-none" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-aos="fade-up">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="quote-text font-18px color-black">Workruit has made the
                                                recruitment process easy for employers. Excellent platform for
                                                recruiters to hire the best-suited candidate for the work profile. I am
                                                impressed with Workruit’s features which has made talent search so easy.
                                            </h2>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="d-flex justify-content-center">
                                                <p class="customer-name font-18px font-700 color-black">Yamini</p><span
                                                    class="color-black mt_5 mobile_mt_5pr">,&nbsp;</span>
                                                <p class="customer-name font-18px font-700 color-black">HR</p>
                                            </div>
                                            <div class="designation">
                                                <p class="customer-name font-18px font-700 color-black m-0 mb-3">
                                                    StoryTech</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card mobile_mt_10px">
                                        <div class="card-body">
                                            <h2 class="quote-text font-18px color-black">Workruit is the only online
                                                hiring platform with such an easy recruitment process. An easy
                                                on-boarding process for the recruiters, Workruit has made me believe
                                                that technology has redefined the recruitment services by making it just
                                                a task of fingertips.
                                            </h2>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="d-flex justify-content-center">
                                                <p class="customer-name font-18px font-700 color-black">Vani Suresh</p>
                                                <span class="color-black mt_5 mobile_mt_5pr">,&nbsp;</span>
                                                <p class="customer-name font-18px font-700 color-black"> Business
                                                    Development</p>
                                            </div>
                                            <div class="designation">
                                                <p class="customer-name font-18px font-700 color-black m-0 mb-3">
                                                    StoryTech</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item d-none">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="quote-text font-18px color-black">Workruit has made
                                                the recruitment
                                                process easy
                                                for employers. Excellent platform
                                                for recruiters to hire the best-suited candidate for the work profile. I
                                                am
                                                impressed with Workruit’s features which has made talent search so easy.
                                            </p>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="d-flex justify-content-center">
                                                <p class="customer-name font-18px font-700 color-black">Yamini</p><span
                                                    class="color-black mt_5 mobile_mt_5pr">,&nbsp;</span>
                                                <p class="customer-name font-18px font-700 color-black">StoryTech</p>
                                            </div>
                                            <div class="designation">
                                                <p class="customer-name font-18px font-700 color-black m-0 mb-3">HR</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card mobile_mt_10px">
                                        <div class="card-body">
                                            <p class="quote-text font-18px color-black">With so many job
                                                portals available
                                                online, I
                                                found Workruit as the only online
                                                hiring platform with such an easy recruitment process. With an easy
                                                on-boarding
                                                process for the recruiters and providing personal assistance to
                                                employers,
                                                Workruit has made me believe.
                                            </p>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="d-flex justify-content-center">
                                                <p class="customer-name font-18px font-700 color-black">Vani Suresh</p>
                                                <span class="color-black mt_5 mobile_mt_5pr">,&nbsp;</span>
                                                <p class="customer-name font-18px font-700 color-black">StoryTech</p>
                                            </div>
                                            <div class="designation">
                                                <p class="customer-name font-18px font-700 color-black m-0 mb-3">
                                                    Business
                                                    Development
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev pt_4pr d-none" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next pt_4pr d-none" href="#carouselExampleControls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>







        <div class="container noticed" data-aos="fade-up">
            <div class="row center">
                <div class="col">
                    <h2 class="h1 font-32px font-700" data-aos="fade-up">... And we are getting noticed</h2>
                </div>
            </div><br /><br />

            <div class="row" style="margin-left: 60px;">
                <div class="col-sm-3" data-aos="fade-up">
                    <a target="_blank"
                        href="https://www.ozy.com/the-new-and-the-next/how-dating-apps-are-changing-the-way-we-find-jobs/96146/">
                        <img style="width:70%;margin-left: -13px;" src="images/ozy.png" alt="ozy"></a>
                </div>
                <div class="col-sm-3" data-aos="fade-up">
                    <a target="_blank"
                        href="https://www.edexlive.com/campus/2019/dec/23/hyderabad-based-workruit-has-made-searching-for-jobs-as-easy-as-it-can-be-9601.html">
                        <img style="width:70%;margin-left: -13px;" src="images/IndianExpress.png"
                            alt="IndianExpress"></a>
                </div>

                <div class="col-sm-3" data-aos="fade-up">
                    <a target="_blank" href="http://startuphyderabad.com/workruit-finding-jobs-go/">
                        <img style="width:70%;margin-left: -13px;" src="images/StartupHyd.png" alt="StartupHyd"></a>
                </div>
                <div class="col-sm-3" data-aos="fade-up">
                    <a target="_blank"
                        href="https://www.peoplematters.in/article/techhr-startup/meet-some-of-the-newest-hr-tech-startups-in-the-techhr-startup-program-18436?utm_source=peoplematters&utm_medium=interstitial&utm_campaign=learnings-of-the-day">
                        <img style="width:70%;margin-left: -17px;margin-bottom: -15px;" src="images/peoplematters.png"
                            alt="peoplematters"></a>
                </div>

            </div><br>
            <div class="row" style="margin-left: 60px;">

                <div class="col-sm-3" data-aos="fade-up">
                    <a target="_blank"
                        href="https://yourstory.com/2019/03/tinder-for-jobs-workruit-axzhmxl?utm_source=WhatsApp&utm_medium=Messages">
                        <img style="width:60%;" src="images/yourstory.png" alt="yourstory"></a>
                </div>
                <div class="col-sm-3" data-aos="fade-up" data-aos-delay="200">
                    <a target="_blank"
                        href="https://www.thehansindia.com/posts/index/Andhra-Pradesh/2019-03-06/New-app-for-jobs-launched/508379"><img
                            style="width:60%;" src="images/HansIndia.png" alt="HansIndia"></a>
                </div>
                <div class="col-sm-3" data-aos="fade-up" data-aos-delay="200">
                    <a target="_blank"
                        href="https://www.deccanchronicle.com/nation/current-affairs/070319/vijayawada-workruit-app-to-help-jobless-find-employment-launche.html"><img
                            style="width:60%;" src="images/DC.png" alt="DC"></a>
                </div>
                <div class="col-sm-3" data-aos="fade-up" data-aos-delay="200">
                    <a target="_blank"
                        href="http://bwdisrupt.businessworld.in/article/We-re-Looking-To-Expand-Our-Operations-Outside-Of-India-By-mid-2020-Workruit-s-Manikanth-Challa/20-01-2020-182365/">
                        <img style="width:60%;" src="images/BW-logo.png" alt="BW-logo"></a>
                </div>
            </div>
            <br />


        </div>

        <!-- <div class="container-fluid section-cta" data-aos="fade">
            <div class="container center">
                <div class="row">
                    <div class="col">
                        <h2 class="h1 font-32px" data-aos="fade-up">Hire top talent instantly with a Swipe.</h2>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col font-18px">
                        <p>Looking to hire? Let Workruit help you find the right applicant using our advanced AI-based
                            talent search engine.
                        </p>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col">
                        <div class="button button__cta center">
                            <a target="_blank" href="schedule_demo.html">
                                <span class="demo">
                                    Request a demo now
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="modal fade" id="contactform" role="dialog" aria-labelledby="contactform" aria-hidden="true"
        data-aos="fade-up">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactformTitle">Contact Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="">
                        <div class="row">
                            <div class="col">
                                <div class="col-sm-auto">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="name"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="email"
                                            placeholder="Enter Your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="PhoneNumber">Phone Number</label>
                                        <input type="text" class="form-control" id="PhoneNumber"
                                            aria-describedby="PhoneNumber" placeholder="Enter Your Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div> -->

        <div id="load-footer"></div>
    </div>
    <div class="resume-pdf-view">
        <style>
            #resume-error-view,
            #resume-error-view iframe {
                min-height: 100vh;
            }
        </style>
        <div id="resume-error-view" class="d-none text-center">
            <iframe src="includes/pdf-error.html" frameborder="0" class="w-100 pdf-error"></iframe>
        </div>
        <div id="resume-un-available-error-view" class="d-none text-left">
            <!-- <iframe src="" frameborder="0" class="w-100 pdf-error"></iframe> -->
        </div>
        <iframe frameborder="0" id="pdfViewer" class="the-canvas mb-5 d-none"></iframe>
        <div id="pdfPreview" class="d-none"></div>
    </div>
    </div>
    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.10.100/pdf.min.js"></script>
    <script type="text/javascript" src="js/editor-preview.js"></script>
    <script src="js/main.js"></script>



    <!-- turn on other screenshots on scroll-->
    <script type="text/javascript">
        $("#Side_hover_mobile a").each(function () {
            $(this).addClass('collapsed')
        });
        $('#load-header').load('./includes/r-header.html');
        $('#load-footer').load('./includes/footer.html');

        // $('.carousel').carousel({
        //     interval: 3000
        // })
        $('.carousel').carousel('pause')

        var botOfTheF1 = $(".feature-1").offset().top + $(".feature-1").outerHeight(true);
        var botOfTheF2 = $(".feature-1").offset().top + $(".feature-1").outerHeight(true);
        var botOfTheF3 = $(".feature-1").offset().top + $(".feature-1").outerHeight(true);
        var botOfTheF4 = $(".feature-1").offset().top + $(".feature-1").outerHeight(true);

        var topOfTheF1 = $(".feature-1").offset().top;
        var topOfTheF2 = $(".feature-1").offset().top;
        var topOfTheF3 = $(".feature-1").offset().top;
        var topOfTheF4 = $(".feature-1").offset().top;

        //if topOfTheF4 — stuck browser and phone, but it lags
        //
        //1521
        // if ($(window).width() > 1024) {
        //     $(window).scroll(function () {
        //         if ($(window).scrollTop() > (topOfTheF4 - 5)) {
        //             $(".device__browser").addClass("stucked");
        //             $(".device__phone").addClass("stucked");
        //         } else {
        //             $(".device__browser").removeClass("stucked");
        //             $(".device__phone").removeClass("stucked");
        //         }

        //     });
        // } else if ($(window).width() > 768) {
        //     $(window).scroll(function () {
        //         if ($(window).scrollTop() > (topOfTheF4 - 5)) {
        //             $(".device__browser").addClass("stucked");
        //             $(".device__phone").addClass("stucked");
        //         } else {
        //             $(".device__browser").removeClass("stucked");
        //             $(".device__phone").removeClass("stucked");
        //         }

        //     });
        // } else {
        //     $(window).scroll(function () {
        //         if ($(window).scrollTop() > (topOfTheF4 - 5)) {
        //             $(".device__browser").addClass("stucked");
        //             $(".device__phone").addClass("stucked");
        //         } else {
        //             $(".device__browser").removeClass("stucked");
        //             $(".device__phone").removeClass("stucked");
        //         }

        //     });
        // }

        // $(window).scroll(function () {
        //     if (($(window).scrollTop() > (botOfTheF1 - 5)) && ($(window).scrollTop() < (topOfTheF3 - 5))) {
        //         //	$("#browser-in-2").addClass("active");
        //         //	$("#browser-in-2").removeClass("past");
        //         //	if you want to add 4 browser screenshots instead of 3 screenshots just check out previous version of code via git
        //         //	$("#browser-in-1").removeClass("active");
        //         // //	$("#browser-in-1").addClass("past");
        //         // $("#browser-in-3").removeClass("active");
        //         // $("#browser-in-3").removeClass("past");
        //         // $("#browser-in-4").removeClass("active");
        //         // $("#browser-in-4").removeClass("past");

        //         // $("#phone-in-2").addClass("active");
        //         // $("#phone-in-2").removeClass("past");
        //         $("#phone-in-1").removeClass("active");
        //         $("#phone-in-1").addClass("past");
        //         // $("#phone-in-3").removeClass("active");
        //         // $("#phone-in-3").removeClass("past");
        //         // $("#phone-in-4").removeClass("active");
        //         // $("#phone-in-4").removeClass("past");
        //     } else if (($(window).scrollTop() > (botOfTheF2 - 5)) && ($(window).scrollTop() < (topOfTheF4 -
        //             5))) {
        //         // $("#browser-in-3").addClass("active");
        //         // $("#browser-in-3").removeClass("past");
        //         $("#browser-in-1").removeClass("active");
        //         $("#browser-in-1").addClass("past");
        //         //	$("#browser-in-1").removeClass("past");
        //         //	$("#browser-in-2").removeClass("active");
        //         //	$("#browser-in-2").addClass("past");
        //         // $("#browser-in-4").removeClass("active");
        //         // $("#browser-in-4").removeClass("past");

        //         // $("#phone-in-3").addClass("active");
        //         // $("#phone-in-3").removeClass("past");
        //         $("#phone-in-1").removeClass("active");
        //         $("#phone-in-1").removeClass("past");
        //         // $("#phone-in-2").removeClass("active");
        //         // $("#phone-in-2").addClass("past");
        //         // $("#phone-in-4").removeClass("active");
        //         // $("#phone-in-4").removeClass("past");
        //     } else if ($(window).scrollTop() > (botOfTheF3 - 5)) {
        //         // $("#browser-in-4").addClass("active");
        //         // $("#browser-in-4").removeClass("past");
        //         $("#browser-in-1").removeClass("active");
        //         $("#browser-in-1").removeClass("past");
        //         //	$("#browser-in-2").removeClass("active");
        //         // $("#browser-in-3").removeClass("active");
        //         // $("#browser-in-3").addClass("past");

        //         // $("#phone-in-4").addClass("active");
        //         // $("#phone-in-4").removeClass("past");
        //         $("#phone-in-1").removeClass("active");
        //         $("#phone-in-1").removeClass("past");
        //         // $("#phone-in-2").removeClass("active");
        //         //$("#phone-in-2").removeClass("past");
        //         // $("#phone-in-3").removeClass("active");
        //         // $("#phone-in-3").addClass("past");
        //     } else {
        //         $("#browser-in-1").addClass("active");
        //         $("#browser-in-1").removeClass("past");
        //         //	$("#browser-in-2").removeClass("active");
        //         //	$("#browser-in-2").removeClass("past");
        //         // $("#browser-in-3").removeClass("active");
        //         // $("#browser-in-3").removeClass("past");
        //         // $("#browser-in-4").removeClass("active");
        //         // $("#browser-in-4").removeClass("past");

        //         $("#phone-in-1").addClass("active");
        //         $("#phone-in-1").removeClass("past");
        //         // $("#phone-in-2").removeClass("active");
        //         // $("#phone-in-2").removeClass("past");
        //         // $("#phone-in-3").removeClass("active");
        //         // $("#phone-in-3").removeClass("past");
        //         // $("#phone-in-4").removeClass("active");
        //         // $("#phone-in-4").removeClass("past");
        //     }
        // });
    </script>

    <script>
        AOS.init({
            offset: 100,
            duration: 800,
            //easing: 'ease-in',
            //delay: 100,
        });
    </script>

    <script>
        // autoplay vide on anroid devices
        var video = document.getElementById('video');
        video.addEventListener('click', function () {
            video.play();
        }, false);

        // $("#slideshow > div:gt(0)").hide();

        // setInterval(function () {
        //     $('#slideshow > div:first')
        //         .fadeOut(3000)
        //         .hide()
        //         .next()
        //         .fadeIn(3000)
        //         .show()
        //         .end()
        //         .appendTo('#slideshow');
        // }, 6000);
    </script>

</body>

</html>
