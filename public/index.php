<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css" />
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <title>Business Card</title>
</head>

<body>
    <!-- HEADER  -->
    <div class="header">
        <div class="header-main">
            <span class="top-left"></span>
            <span class="bottom-right"></span>
            <div class="nav-menu">
                <a href="https://sultanagro.uz" class="logobrand">Mansurjon Turabov</a>
                <ul id="nav-mobile" class="right">
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#contact">Contact Me</a></li>
                    <div class="language">
                        <span>English</span>
                        <i class="arrow-down fa-solid fa-caret-down"></i>
                        <div class="languages">
                            <a href="index.php">English</a>
                            <a href="./indexx.html">Рус</a>
                        </div>
                    </div>
                </ul>
                <div class="toggle-btn"><i class="fa-solid fa-bars"></i></div>
            </div>
            <div class="dropdown_menu">
                <li><a href="#about">About Me</a></li>
                <li><a href="#contact">Contact Me</a></li>
                <div class="language lan">
                    <span>English</span>
                    <i class="arrow-down fa-solid fa-caret-down"></i>
                    <div class="languages droplan">
                        <a href="index.php">English</a>
                        <a href="./indexx.html">Рус</a>
                    </div>
                </div>
            </div>

            <div class="header-about">
                <div class="header-text">
                    <h1>Mansurjon Turabov</h1>
                    <h4>Export Manager at Sultan Agro Impeks.</h4>
                    <p>15+ successful cases where I consulted for import-export agricultural commodities from Uzbekistan to
                        Kazakhstan, Russian Federation, Ukraine, Belarus, Mongolia, Vietnam, UAE, Georgia and Israel.</p>
                    <div class="btn">
                        <!-- Link to open the modal -->
                        <a class="meet-me" href="#ex1" rel="modal:open">Meet me online</a>
                        <a href="#contact-input" class="send-me">Send me request</a>
                    </div>
                    <div class="btn_my_contact">
                        <div class="contact-me">
                            <span></span>
                            <p>Contact me:</p>
                            <div>
                                <a href="https://t.me/sultanagro_uz"><img src="/api/img/icons8-telegram-100.png" alt="Telegram"></a>
                                <a href="https://wa.me/998994690007"><img src="/api/img/icons8-whatsapp-96.png" alt="WhatsApp"></a>
                                <a href="mailto:manager@sultanagro.uz"><img src="/api/img/icons8-mail-100.png" alt="Email"></a>
                            </div>
                        </div>
                        <div class="follow-me">
                            <span></span>
                            <p>Follow me:</p>
                            <div>
                                <a class="anim-4" href="https://uz.linkedin.com/in/mansurjon-turobov-5a732bbb"><img src="./img/icons8-in-100.png" alt="Linkedin"></a>
                                <a class="anim-5" href="https://tenchat.ru/manshuri21"><img src="./img/tch.svg" alt="TenChat"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <img class="header-img" src="./img/brunet.png" alt="">

            </div>
        </div>


    </div>
    <!-- ABOUT  -->
    <div class="about" id="about">
        <div class="about-item">
            <h1 class="reveal">About Me</h1>
            <div class="about-main">
                <div class="about-content reveal">
                    <div>
                        <img src="./img/check.svg" alt="">
                        <h3>$2,4 mln</h3>
                        <span>Closed deals</span>
                    </div>
                    <div>
                        <img src="./img/smile.svg" alt="">
                        <h3>1 300+</h3>
                        <span>Tons exported products</span>
                    </div>
                    <div>
                        <img src="./img/diamond.svg" alt="">
                        <h3>15</h3>
                        <span>Win-win B2B negotiations</span>
                    </div>
                </div>
                <div class="line reveal"></div>
                <div class="about-text reveal">
                    <p>Mansurjon Turabov, exporter of dried fruits, nuts and beans from Uzbekistan. As of May, 2023 - he is
                        running an export company "Sultan Agro Impeks" LLC in Uzbekistan.
                        <br><br> During his session of meetings with foreign importers, he always tries to be helpful and
                        efficient. One of his praised qualities, according to potential customers who have met with him, is
                        that after identifying their requirements for a specific product, he suggests other suppliers who
                        are good at providing it. This allows them to compare quotations and product quality with other
                        exporters of agricultural products in Uzbekistan. When meeting with customers in Uzbekistan, he
                        always tries to suggest good competitors in the field so that they can spend their time more
                        constructively and become acquainted with the product market.
                        <br><br> His customers feel tranquility and professionalism when cooperating with him. They always
                        know what they are ordering as they receive an email of agreed terms, a list of ordered products
                        with specifications, and lead time before getting a proforma invoice. If the consignee orders under
                        delivery term DAP/CIF (Incoterms 2020), customers get tracing of the batch on a daily basis. Yet,
                        they will have a four-hour time frame for control checking at the customer's warehouse after custom
                        clearance.
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- SLIDER  -->
    <div class="slider">
        <i class="offer_slider-prev material-icons">arrow_back</i>
        <i class="offer_slider-next material-icons">arrow_forward</i>

        <div class="offer_slider-wrapper">
            <div class="offer_slider-inner">
                <!-- 1 -->
                <div class="offer_slider">
                    <img src="./img/vector.svg" alt="">
                    <p>My team and I are now building five-star-rated export company. The philosophy of the mission: is to
                        create ever best working ecosystem of supply chain process & best customer service in Uzbekistan.
                        All the products Sultan Agro offers AA, AAA quality with fair prices guaranteed.</p>
                    <img src="./img/Ellipse 5.png" alt="">
                    <h3>Mansurjon Turabov</h3>
                    <span>Export Manager</span>
                </div>

                <!-- 2 -->
                <div class="offer_slider">
                    <img src="./img/vector.svg" alt="">
                    <p>My team and I are now building five-star-rated export company. The philosophy of the mission: is to
                        create ever best working ecosystem of supply chain process & best customer service in Uzbekistan.
                        All the products Sultan Agro offers AA, AAA quality with fair prices guaranteed.</p>
                    <img src="./img/Ellipse 5.png" alt="">
                    <h3>Mansurjon Turabov</h3>
                    <span>Export Manager</span>
                </div>

                <!-- 3 -->
                <div class="offer_slider">
                    <img src="./img/vector.svg" alt="">
                    <p>My team and I are now building five-star-rated export company. The philosophy of the mission: is to
                        create ever best working ecosystem of supply chain process & best customer service in Uzbekistan.
                        All the products Sultan Agro offers AA, AAA quality with fair prices guaranteed.</p>
                    <img src="./img/Ellipse 5.png" alt="">
                    <h3>Mansurjon Turabov</h3>
                    <span>Export Manager</span>
                </div>

                <!-- 4 -->
                <div class="offer_slider">
                    <img src="./img/vector.svg" alt="">
                    <p>My team and I are now building five-star-rated export company. The philosophy of the mission: is to
                        create ever best working ecosystem of supply chain process & best customer service in Uzbekistan.
                        All the products Sultan Agro offers AA, AAA quality with fair prices guaranteed.</p>
                    <img src="./img/Ellipse 5.png" alt="">
                    <h3>Mansurjon Turabov</h3>
                    <span>Export Manager</span>
                </div>
            </div>
        </div>

    </div>
    <!-- CONTACT  -->
    <div class="contact" id="contact">
        <div class="contact-main">
            <h1 class="reveal">Contact Me</h1>
            <div class="contact_wrapper ">
                <div class="contact_wrapper-content reveal">
                    <div>
                        <img src="./img/call.svg" alt="">
                        <span>Phone:</span>
                        <h3>+998 99 469 00 07</h3>

                    </div>
                    <div>
                        <img src="./img/mail.svg" alt="">
                        <span>Email:</span>
                        <h3>manager@sultanagro.uz</h3>

                    </div>
                    <div>
                        <img src="./img/location.svg" alt="">
                        <span>Address:</span>
                        <h3>Tashkent, Uzbekistan</h3>

                    </div>
                </div>
                <div class="line reveal "></div>
                <div class="row reveal" id="contact-input">
                    <form class="row-form" action="send_message.php" method="post" submit="https://g.page/r/CRJanpiN_D7pEB0/review">
                        <div class="contact_input-inner">
                            <input name="first_name" class="contact_input" type="text" placeholder="First name.." required>
                            <input name="last_name" class="contact_input" type="text" placeholder="Last name.." required>
                            <input name="phone_number" class="contact_input" type="tel" placeholder="Phone number.." required>

                            <input name="email" class="contact_input" type="email" placeholder="Email.." required>
                        </div>
                        <textarea required name="message" class="contact_input-textarea" id="msg" maxlength="200" placeholder='Message..'></textarea>
                        <button class="submit-msg" name="submit" value="submit" type="submit">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER  -->
    <div class="footer">
        <div class="footer-main">
            <a href="https://sultanagro.uz" class="logobrand">Mansurjon Turabov</a>
            <div>
                <div class="contact-me">
                    <span></span>
                    <p>Contact me:</p>
                    <div>
                        <a href="https://t.me/sultanagro_uz"><img src="./img/icons8-telegram-100.png" alt="Telegram"></a>
                        <a href="https://wa.me/998994690007"><img src="./img/icons8-whatsapp-96.png" alt="WhatsApp"></a>
                        <a href="mailto:manager@sultanagro.uz"><img src="./img/icons8-mail-100.png" alt="Email"></a>
                    </div>
                </div>
                <div class="follow-me">
                    <span></span>
                    <p>Follow me:</p>
                    <div>
                        <a class="anim-4" href="https://uz.linkedin.com/in/mansurjon-turobov-5a732bbb"><img src="./img/icons8-in-100.png" alt="Linkedin"></a>
                        <a class="anim-5" href="https://tenchat.ru/manshuri21"><img src="./img/tch.svg" alt="TenChat"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->

        <!-- Modal HTML embedded directly into document -->
        <!-- Modal HTML embedded directly into document -->
        <div id="ex1" class="modal">
            <p>
                <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/d/2mr-mgd-2zr/30min" style="min-width:320px;height:700px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->
            </p>
            <a href="#" rel="modal:close">Close</a>
        </div>
        <!-- Modal -->


        <script src="js/main.js">
           
        </script>
</body>

</html>