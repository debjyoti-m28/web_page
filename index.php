<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- 
            <____(0  v  0)____>
            Website Design and Developed by Debjyoti Mondal
            Email address : mdebjyoti28@gmail.com

            
            Linkdin : https://www.linkedin.com/in/debjyoti-mondal-0122411b6/

            Phone number: +91 8250376442
            <____(0  v  0)____>
        -->


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="creator" content="Debjeet Das" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Open Studios</title>

        <link rel="shortcut icon" href="./assets/favicon.png">
        <!-- stylesheets -->
        <link href="./css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel=" stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Advent+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">


        <!--FontAwesome-->
        <script src="https://kit.fontawesome.com/76c40a5f57.js" crossorigin="anonymous"></script>
        <link href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css" rel=" stylesheet">

        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- local js file -->
        <script src="./js/fetch_theF_data.js"></script>

        <!-- Razorpay -->
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    </head>

    <body>
        <div class="container">
            <div class="ptmModal flex_center">
                <div>Payment Successful</div><i class="fal fa-check-circle"></i>
            </div>

            <div class="Form_container flex_center">
                <form class="scriptForm main_form" method="POST" action="script_form.php" form_name="script_form">
                    <div class="FormCloseBtn flex_center">
                        <i class="fal fa-times"></i>
                    </div>

                    <!-- <h3>Script Form</h3> -->
                    <div class="input_block">
                        <div class="input_text"><label for="topic">Topic<span style="color: #ff0000; margin-left: 5px;">*</span></label></div>
                        <div class="input_field"><input type="text" id="topic" name="topic" required></div>
                    </div>
                    <div class="input_block">
                        <div class="input_text"><label for="talking points">Talking points</label></div>
                        <div class="input_field"><input type="text" id="talking points" name="talking_points"></div>
                    </div>
                    <div class="input_block">
                        <div class="input_text"><label for="name">Name<span style="color: #ff0000; margin-left: 5px;">*</span></label></div>
                        <div class="input_field"><input type="text" id="name" name="name" required></div>
                    </div>
                    <div class="input_block">
                        <div class="input_text"><label for="email">Email<span style="color: #ff0000; margin-left: 5px;">*</span></label></div>
                        <div class="input_field"><input type="email" id="email" name="email" required></div>
                    </div>
                    <div class="input_block">
                        <div class="input_text"><label for="p_number">Phone Number<span style="color: #ff0000; margin-left: 5px;">*</span></label></div>
                        <div class="input_field"><input type="number" id="p_number" name="p_number" required></div>
                    </div>
                    <a href="Sample Script for Open Studio Patron.pdf" download="download" style="text-decoration: none; color: inherit;">
                        <div class="download_script flex_center" style="margin:35px auto">
                            <div class="icn flex_center"><i class="fal fa-file-alt"></i></div>
                            <div class="text flex_center" style="width: calc(100% - 50px);">Download sample script</div>
                        </div>
                    </a>
                    <div style="margin: 0 auto; text-align: center;"><button class="scriptForm_btn">Submit</button></div>
                </form>

                <form class="shootForm main_form" method="POST" action="shoot_form.php" form_name="edit_form">
                    <div class="FormCloseBtn flex_center">
                        <i class="fal fa-times"></i>
                    </div>

                    <!-- <h3>Shoot Form</h3> -->
                    <div class="input_block">
                        <div class="input_text">
                            <label for="edit_brief">
                                Edit brief<span style="color: #ff0000; margin-left: 5px;">*</span>
                                <p style="color: #8a8a8a; font-size: 11px; font-style: italic; font-weight: 100;">Any specific instruction for the video editor?</p>
                            </label>
                        </div>
                        <div class="input_field"><input type="text" id="edit_brief" name="edit_brief" required></div>
                    </div>
                    <div class="input_block">
                        <div class="input_text"><label for="video_link">
                                Video link<span style="color: #ff0000; margin-left: 5px;">*</span>
                                <p style="color: #8a8a8a; font-size: 11px; font-style: italic; font-weight: 100;">Please upload a video under 10 mins on google drive and paste the link here</p>
                            </label></div>
                        <div class="input_field"><input type="text" id="video_link" name="video_link" required></div>
                    </div>
                    <div class="input_block">
                        <div class="input_text"><label for="email">Email<span style="color: #ff0000; margin-left: 5px;">*</span></label></div>
                        <div class="input_field"><input type="email" id="email" name="email" required></div>
                    </div>
                    <div class="input_block" style="margin-bottom:10px;">
                        <div class="input_text" style="margin-bottom:0px;">Sample Video</div>
                    </div>
                    <iframe style="width: 100%; height: 200px;" src="https://www.youtube.com/embed/ssEnpxDS18A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <div style="margin: 0 auto; text-align: center;"><button class="scriptForm_btn" style="bottom: -17px;">Submit</button></div>
                </form>

                <form class="editForm main_form" method="POST" action="edit&publish_form.php" form_name="shoot_form">
                    <div class="FormCloseBtn flex_center">
                        <i class="fal fa-times"></i>
                    </div>

                    <p style="font-weight:600">Please drop your email id and contact number for further details</p>
                    <div class="input_block">
                        <div class="input_text"><label for="name">Name<span style="color: #ff0000; margin-left: 5px;">*</span></label></div>
                        <div class="input_field"><input type="text" id="name" name="name" required></div>
                    </div>
                    <div class="input_block">
                        <div class="input_text"><label for="email">Email<span style="color: #ff0000; margin-left: 5px;">*</span></label></div>
                        <div class="input_field"><input type="email" id="email" name="email" required></div>
                    </div>
                    <div class="input_block">
                        <div class="input_text"><label for="p_number">Phone Number<span style="color: #ff0000; margin-left: 5px;">*</span></label></div>
                        <div class="input_field"><input type="number" id="p_number" name="p_number" required></div>
                    </div>
                    <p style="font-weight:600">Presently we are operational out of Mumbai and Pune only</p>


                    <div style="margin: 0 auto; text-align: center;"><button class="scriptForm_btn">Submit</button></div>
                </form>
            </div>

            <div class="navBar">

                <div class="navBar_desktop flex_center">

                    <div class="navBar_desktop_menu">
                        <div class="navBar_desktop_logo flex_center">
                            Open Studios
                        </div>
                    </div>
                    <div class="navBar_desktop_menu" style="width: calc(100% - 200px);">
                        <div class="navBar_desktop_menuSet  flex_center">
                            <a>Home</a>
                            <a href="#howItWorks">How it works</a>
                            <a href="#about">About</a>
                            <a href="#contact">Contact</a>
                        </div>
                    </div>

                    <div class="navBar_desktop_menu flex_center" style="justify-content: flex-end; padding-right: 35px;">
                        <div class="navBar_desktop_BookIcon flex_center" style="height: 35px;">
                            <a href="#giveItaTry" style="text-decoration: none; color: inherit;"><span style="margin-right: 10px; font-family: 'Viga', sans-serif; font-weight: 100;">Try It</span></a>
                            <!-- <img src="cart.png" class="nav_D_form"> -->
                        </div>
                    </div>

                </div>

                <div class="navBar_mobile flex_center">
                    <div class="navBar_mobile_M flex_center">
                        <div class="navBar_mobile_Icon flex_center"><i class="fal fa-bars"></i></div>
                    </div>
                    <div class="navBar_mobile_M flex_center" style="width: calc(100% - 100px);">
                        <div class="navBar_mobile_Logo">Open Studios</div>
                    </div>
                    <div class="navBar_mobile_M flex_center" style="cursor: pointer;">
                        <!-- <img src="cart.png" class="nav_M_form"> -->
                        <a href="#giveItaTry" style="text-decoration: none;"><span style="color: #018fff; font-family: 'Viga', sans-serif; font-weight: 100;">Try It</span></a>
                    </div>
                </div>

                <div class="navBar_mobile_Dropdown">
                    <a class="navBar_mobile_Dropdown_Menu">Home</a>
                    <a class="navBar_mobile_Dropdown_Menu" href="#howItWorks">How it works</a>
                    <a class="navBar_mobile_Dropdown_Menu" href="#about">About</a>
                    <a class="navBar_mobile_Dropdown_Menu" href="#contact">Contact</a>
                </div>

            </div>

            <div class="sec1" id="home">
                <div class="sub_sec1 flex_center" style="flex-direction: column; align-items: flex-start;">
                    <h1>Open Studios</h1>
                    <p class="sub_title">Medical videos in one <button style="font-weight: 600; pointer-events: none;">CLICK</button></p>
                    <p style="margin: 20px 0;"> <span style="margin-right: 20px;"><i class="fal fa-map-marker-alt"></span></i>Mumbai, India</p>
                </div>
                <div class="sub_sec2 flex_center"><img src="./assets/sec1_img.png"></div>
            </div>

            <div class="sec2">
                <div class="sub_sec1"><img src="./assets/sec2_img.png"></div>
                <div class="sub_sec2 flex_center" style="flex-direction: column;">
                    <p>So you always wanted to make <span style="color:#0178FF;">awesome videos for your patients</span> or for your pratice</p>
                    <p style="margin-top: 20px;">But don't want the hassle of scripting, editing and shooting?</p>
                    <!-- <a href="#giveItaTry">
                        <div><button class="form_button">TRY IT</button></div>
                    </a> -->
                </div>
            </div>

            <div class="sec3">
                <div class="sub_sec1 flex_center" style="flex-direction: column; align-items: flex-start;">
                    <h3 style="font-size: 25px; margin-bottom: 20px;">Speaking about <span style="color:#0178FF;">your branch</span> and <span style="color:#0178FF;">work: </span></h3>
                    <ul class="listing" style="font-size: 20px;">
                        <li><i class="fal fa-hand-point-right" style="color:#0178FF;"></i> <span>Increase trustworthiness by 65% among patients</span></li>
                        <li><i class="fal fa-hand-point-right" style="color:#0178FF;"></i> <span>Builds confidence among peers</span></li>
                        <li><i class="fal fa-hand-point-right" style="color:#0178FF;"></i> <span>Brings more relavent patients to your clinic</span></li>
                        <li><i class="fal fa-hand-point-right" style="color:#0178FF;"></i> <span>Can become a platform for you as through leader</span></li>
                        <li><i class="fal fa-hand-point-right" style="color:#0178FF;"></i> <span>Can become a source of income</span></li>
                    </ul>
                </div>
                <div class="sub_sec2 flex_center"><img src="./assets/sec3_img.png"></div>
            </div>

            <div class="sec4">
                <div class="sub_sec1"><img src="./assets/sec4_img.png"></div>
                <div class="sub_sec2 flex_center" style="flex-direction: column;">
                    <p>At <span style="color:#0178FF;">Open Studio</span> we have simplifed this process to few clicks.</p>
                    <p style="margin-top: 20px;">With the help of <span style="color:#0178FF;">our talented team of doctors, writers and video editors</span> we ensure that you focus on building <span style="color:#0178FF;">your image</span> and leave the rest to us.</p>
                </div>
            </div>

            <div class="sec5" id="howItWorks">
                <h2>How it works</h2>
                <div class="step_cardWrapper">
                    <div class="step_card">
                        <div class="card_title_con">
                            <div class="card_title">
                                Step<br><span>01</span>
                            </div>
                        </div>
                        <div class="card_img"><img src="./assets/step1.png"></div>
                        <div class="r_arrow"><img src="./assets/right-arrow.png"></div>
                    </div>

                    <div class="step_card">
                        <div class="card_title_con">
                            <div class="card_title">
                                Step<br><span>02</span>
                            </div>
                        </div>
                        <div class="card_img"><img src="./assets/step2.png"></div>
                        <div class="r_arrow"><img src="./assets/right-arrow.png"></div>
                    </div>

                    <div class="step_card">
                        <div class="card_title_con">
                            <div class="card_title">
                                Step<br><span>03</span>
                            </div>
                        </div>
                        <div class="card_img"><img src="./assets/step3.png"></div>
                    </div>
                </div>
                <div class="sec5_text">
                    <p>Once we get your order we'll get <span style="color:#0178FF; font-weight: 600;">back to you in 48 hrs</span> with a script, edited video or our shooting team. </p>
                </div>
            </div>

            <div class="sec6" id="giveItaTry">
                <h2>Give it a try</h2>

                <div class="productCard_Wrapper flex_center">

                    <div class="productCard" formName="scriptForm">
                        <h3>Write me a Script</h3>
                        <p>A ready to read well-researched personalised script made to order just for you</p>
                        <ul>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Personalised for you</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Written by medical professionals</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Audience friendly language</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Free of cost revisions</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Ready to Shoot</li>
                        </ul>
                        <div class="priceTag"><i class="fal fa-rupee-sign"></i> 699</div>
                        <div class="prod_cardBtn">Try it!</div>
                    </div>

                    <div class="productCard" formName="shootForm">
                        <h3>Edit my video</h3>
                        <p>We know the pain of editing really well. Let us polish and shine it for you as you click smiling selfies..!</p>
                        <ul style="margin-top: 20px;">
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Professionaly edited video</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Customised for you</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Call to action integration</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Revise as you wish</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Ready to publish</li>
                        </ul>
                        <div class="priceTag"><i class="fal fa-rupee-sign"></i> 999</div>
                        <div class="prod_cardBtn">Try it!</div>
                    </div>

                    <div class="productCard" formName="editForm">
                        <h3>Let's Shoot</h3>
                        <p>Let us know your day and time and we will drop by with our crew..!!</p>
                        <ul style="margin-top: 40px;">
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Professional videographer</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Professional equipment</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Schedule and location you decide</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Raw footage deliverd to you</li>
                            <li><i class="fal fa-video" style="color: #0178FF;"></i> Ready to edit and upload</li>
                        </ul>
                        <div class="priceTag"><i class="fal fa-rupee-sign"></i> 4,999</div>
                        <div class="prod_cardBtn" formName="Edit">Try it!</div>
                    </div>
                </div>

            </div>

            <div class="sec7" id="about">
                <h2>About</h2>
                <p>Behind the scenes we're a team of young doctors, video editors and cinematographers with a passion for creating videos that make a difference</p>

                <div class="team_card_con">
                    <div class="team_card">
                        <div class="team_card_img" style="background: url('./assets/Vishal_Tomar.jpg') right; background-size: cover;">
                        </div>
                        <div class="team_card_text">
                            <h3>Dr. Vishal Tomar</h3>
                            <h4>Doctor, YouTuber</h4>
                            <p>
                                I'm a doctor who loves making videos and educating people about his work. I run a YouTube channel called Open Consult which has helped me reach out to patients,
                                peers and students across the globe. In my journey I came accross many other doctors who whished to do the same but found behind the scenes proces very distracting
                                and challenging. So I thought let's streamline this for everyone...?
                            </p>
                        </div>
                    </div>
                    <!-- <div class="team_card">
                        <div class="team_card_img" style="background: url('photographer.jpg'); background-size: cover;">
                        </div>
                        <div class="team_card_text">
                            <h3>Viraj Pawar</h3>
                            <h4>Cinematographer</h4>
                            <p>
                                I'm a cinematographer and editor with a passion for making videos that make a difference. I have worked with doctors and realised that there is a strong need for educating
                                the mass about health so that we all can live a better quality of life. I am the brain behind the videography and editing half of this team and can't wait to see what is in store for us.
                            </p>
                        </div>
                    </div> -->

                </div>
            </div>

            <div class="sec8">
                <h2>Reviews</h2>

                <div class="slider_con">
                    <div class="slider_wrap owl-carousel">
                        <div class="slider_card">
                            <div class="slider_card_img"><img src="./assets/rev_doc1.jpg"></div>
                            <div class="slider_card_star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <div class="slider_card_text">
                                <h3>Dr. John Malick</h3>
                                <p> "I never thought making video could be so easily..." </p>
                            </div>
                        </div>
                        <div class="slider_card">
                            <div class="slider_card_img"><img src="./assets/rev_doc2.jpg"></div>
                            <div class="slider_card_star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                            <div class="slider_card_text">
                                <h3>Dr. Hadley Mullins</h3>
                                <p> "I can focus on my work and share my ideas thanks to guy..." </p>
                            </div>
                        </div>
                        <div class="slider_card">
                            <div class="slider_card_img"><img src="./assets/rev_doc3.jpg"></div>
                            <div class="slider_card_star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <div class="slider_card_text">
                                <h3>Dr. Clarissa Frazier</h3>
                                <p> "I never thought I would be able to figure out what to do. Open..." </p>
                            </div>
                        </div>
                        <div class="slider_card">
                            <div class="slider_card_img"><img src="./assets/rev_doc4.jpg"></div>
                            <div class="slider_card_star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <div class="slider_card_text">
                                <h3>Dr. Edric Higgins</h3>
                                <p> "I can focus on my work and share my ideas thanks to guy..." </p>
                            </div>
                        </div>
                        <div class="slider_card">
                            <div class="slider_card_img"><img src="./assets/rev_doc5.jpg"></div>
                            <div class="slider_card_star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                            <div class="slider_card_text">
                                <h3>Dr. Wanda Presley</h3>
                                <p> "I never thought making video could be so easily..." </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec9">
                <h2>Catch Us On</h2>
                <div class="social_media flex_center" style="justify-content: space-evenly;">
                    <a href="https://www.youtube.com/c/OpenConsult_DrTomar">
                        <div class="social_icon flex_center"><i class="fab fa-youtube" style="color:#FF0000"></i> YouTube</div>
                    </a>
                    <a href="https://www.instagram.com/openconsult/">
                        <div class="social_icon flex_center"><i class="fab fa-instagram" style="color: #C03A86;"></i> Instagram</div>
                    </a>
                    <a href="https://www.linkedin.com/in/dr-vishal-tomar-~-consultant-general-and-laparoscopic-surgeon-youtube/">
                        <div class="social_icon flex_center"><i class="fab fa-linkedin" style="color: #0077B5;"></i> Linkedin</div>
                    </a>
                </div>

            </div>

            <div class="sec10" id="contact">
                <h2>Contact</h2>

                <p>We're based out of Mumbai and Pune. Our vision is to make video production a simple affordable, easy thing rather than a "production hassle wild elephant nightmare" that we think it is at the moment, for most people. </p>
                <div class="sec10_content">
                    <p>
                        Questions or Comments<br>
                        Let us know more about your project. We can customize our services into a package that fits your specific needs. Tell us more about your ideas, and we'll get back to you soon with some answers.
                    </p>
                    <a href="https://api.whatsapp.com/send/?phone=918999718313&text&app_absent=0" target="blank">
                        <div class="whap_btn flex_center"><i class="fab fa-whatsapp" style="color:#00ff66"></i> Message us on Whatsapp</div>
                    </a>
                </div>


                <form class="dropAmail" method="POST" action="mailCollector.php">
                    <div class="dropAmail_block flex_center">
                        <div class="dropAmail_container flex_center">
                            <div class="dropAmail_block_Text flex_center">Drop your mail</div>
                            <div class="dropAmail_block_Input flex_center"><input type="email" name="email" placeholder="email address" required></div>
                        </div>
                        <div class="dropAmail_block_btn flex_center"><button type="submit">Send <i class="fal fa-paper-plane" style="margin-left: 10px;"></i></button></div>
                    </div>
                </form>

            </div>

            <div class="footerCon">

                <div class="footer1">Contact us at support@openstudios.in</div>
                <div class="footer2">
                    <span class="footerContact_desk">Contact us at support@openstudios.in</span>
                    &#169; 2021 All rights reserved | Open Studios
                    <a href="https://twitter.com/DebjeetDas3">
                        <div class="dg_name">
                            Designed and Developed By<br>
                            <em style="position: absolute; bottom: 5px; right: 0px; color:#313131;font-size: 2em; font-weight: 100; font-family: 'Sacramento', cursive;">Debjeet Das</em>
                        </div>
                    </a>
                </div>
            </div>

        </div>


        <script>
            $(document).ready(function () {



                // Form Modal ***************
                var forms = document.querySelectorAll('.main_form');

                function closeForm() {
                    $("html, body").removeClass("noscroll");
                    $(".Form_container").css("display", "none");
                    $(".main_form").css("display", "none");
                }

                $(".productCard").click(function () {
                    var form_N = $(this).attr("formName");

                    $("html, body").addClass("noscroll");
                    $(".Form_container").css("display", "flex");

                    for (const fm of forms) {
                        if (fm.classList.contains(form_N)) {
                            $(fm).css({
                                'display': 'block'
                            });
                        }
                    };

                });

                $(".FormCloseBtn").click(function () {
                    closeForm();
                });
                $(".Form_container").on("click", (e) => {
                    if (e.target.classList.contains("Form_container")) {
                        closeForm();
                    }
                });
                // Form Modal ***************


                $(".navBar_mobile_Icon").hover(function () {
                    // $(".navBar_mobile_Icon>i").toggleClass("fa-times");
                    $(".navBar_mobile_Dropdown").slideToggle()
                });

                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();

                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                });

                $(".slider_wrap").owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2500, //2000ms = 2s;
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },

                        1024: {
                            items: 3
                        },

                        1366: {
                            items: 3
                        }

                    }
                });
            });

        </script>
    </body>

</html>
