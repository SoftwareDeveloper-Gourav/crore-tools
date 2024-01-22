<!DOCTYPE html>

<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="TechWave">
    <meta name="author" content="Frenify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Home - TechWave</title>


    <script>
        if (!localStorage.frenify_skin) {
            localStorage.frenify_skin = 'dark';
        }
        if (!localStorage.frenify_panel) {
            localStorage.frenify_panel = '';
        }
        document.documentElement.setAttribute("data-techwave-skin", localStorage.frenify_skin);
        if (localStorage.frenify_panel !== '') {
            document.documentElement.classList.add(localStorage.frenify_panel);
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com/') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com/') }}" crossorigin>
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- !Google Fonts -->

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ url('website/css/plugins8a54.css?ver=1.0.0') }}" />
    <link type="text/css" rel="stylesheet" href="{{ url('website/css/style8a54.css?ver=1.0.0') }}" />

</head>

<body>


    <!-- Moving Submenu -->
    <div class="techwave_fn_fixedsub">
        <ul></ul>
    </div>
    <!-- !Moving Submenu -->

    <!-- Preloader -->
    <div class="techwave_fn_preloader enabled">
        <svg>
            <circle class="first_circle" cx="50%" cy="50%" r="110"></circle>
            <circle class="second_circle" cx="50%" cy="50%" r="110"></circle>
        </svg>
    </div>
    <!-- !Preloader -->


    <!-- MAIN WRAPPER -->
    <div class="techwave_fn_wrapper">
        <div class="techwave_fn_wrap">


            <!-- Searchbar -->
            <div class="techwave_fn_searchbar">
                <div class="search__bar">
                    <input class="search__input" type="text" placeholder="Search here...">
                    <img src="{{ url('website/svg/search.website/svg') }}" alt=""
                        class="fn__svg/svg search__icon">
                    <a class="search__closer" href="#"><img src="{{ url('website/svg/close.website/svg') }}"
                            alt="" class="fn__svg/svg"></a>
                </div>
                <div class="search__results">
                    <!-- Results will come here (via ajax after the integration you made after purchase as it doesn't work in HTML) -->
                    <div class="results__title">Results</div>
                    <div class="results__list">
                        <ul>
                            <li><a href="#">Artificial Intelligence</a></li>
                            <li><a href="#">Learn about the impact of AI on the financial industry</a></li>
                            <li><a href="#">Delve into the realm of AI-driven manufacturing</a></li>
                            <li><a href="#">Understand the ethical implications surrounding AI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- !Searchbar -->

            <!-- HEADER -->
            <header class="techwave_fn_header">

                <!-- Header left: token information -->
                <div class="header__left">
                    <div class="fn__token_info">
                        <span class="token_summary">
                            <span class="count">120</span>
                            <span class="text">Tokens<br>Remain</span>
                        </span>
                        <a href="pricing.html" class="token_upgrade techwave_fn_button"><span>Upgrade</span></a>
                        <div class="token__popup">
                            Resets in <span>19 hours.</span><br>
                            Daily limit is <span>200 tokens</span>
                        </div>
                    </div>
                </div>
                <!-- /Header left: token information -->


                <!-- Header right: navigation bar -->
                <div class="header__right">
                    <div class="fn__nav_bar">

                        <!-- Search (bar item) -->
                        <div class="bar__item bar__item_search">
                            <a href="#" class="item_opener fn__tooltip" title="Search">
                                <img src="{{ url('website/svg/search.website/svg') }}" alt=""
                                    class="fn__svg/svg">
                            </a>
                            <div class="item_popup" data-position="right">
                                <input type="text" placeholder="Search">
                            </div>
                        </div>
                        <!-- !Search (bar item) -->

                        <!-- Notification (bar item) -->
                        <div class="bar__item bar__item_notification has_notification">
                            <a href="#" class="item_opener fn__tooltip" title="Notifications">
                                <img src="{{ url('website/svg/bell.website/svg') }}" alt="" class="fn__svg/svg">
                            </a>
                            <div class="item_popup" data-position="right">
                                <div class="ntfc_header">
                                    <h2 class="ntfc_title">Notifications</h2>
                                    <a href="notifications.html">View All</a>
                                </div>
                                <div class="ntfc_list">
                                    <ul>
                                        <li>
                                            <p><a href="notification-single.html">Version 4.1.2 has been launched</a>
                                            </p>
                                            <span>34 Min Ago</span>
                                        </li>
                                        <li>
                                            <p><a href="notification-single.html">Video Generation has been released</a>
                                            </p>
                                            <span>12 Apr</span>
                                        </li>
                                        <li>
                                            <p><a href="notification-single.html">Terms has been updated</a></p>
                                            <span>12 Apr</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- !Notification (bar item) -->

                        <!-- Full Screen (bar item) -->
                        <div class="bar__item bar__item_fullscreen">
                            <a href="#" class="item_opener fn__tooltip" title="Full Screen">
                                <img src="{{ url('website/svg/fullscreen.website/svg') }}" alt=""
                                    class="fn__svg/svg f_screen">
                                <img src="{{ url('website/svg/smallscreen.website/svg') }}" alt=""
                                    class="fn__svg/svg s_screen">
                            </a>
                        </div>
                        <!-- !Full Screen (bar item) -->

                        <!-- Language (bar item) -->
                        <div class="bar__item bar__item_language">
                            <a href="#" class="item_opener fn__tooltip" title="Language">
                                <img src="{{ url('website/svg/language.website/svg') }}" alt=""
                                    class="fn__svg/svg">
                            </a>
                            <div class="item_popup" data-position="right">
                                <ul>
                                    <li>
                                        <span class="active">English</span>
                                    </li>
                                    <li>
                                        <a href="#">Spanish</a>
                                    </li>
                                    <li>
                                        <a href="#">French</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- !Language (bar item) -->

                        <!-- Site Skin (bar item) -->
                        <div class="bar__item bar__item_skin">
                            <a href="#" class="item_opener fn__tooltip" title="Dark/Light">
                                <img src="{{ url('website/svg/sun.website/svg') }}" alt=""
                                    class="fn__svg/svg light_mode">
                                <img src="{{ url('website/svg/moon.website/svg') }}" alt=""
                                    class="fn__svg/svg dark_mode">
                            </a>
                        </div>
                        <!-- !Site Skin (bar item) -->

                        <!-- User (bar item) -->
                        <div class="bar__item bar__item_user">
                            <a href="#" class="user_opener fn__tooltip" title="User Profile">
                                <img src="{{ url('website/img/user/user.jpg') }}" alt="">
                            </a>
                            <div class="item_popup" data-position="right">
                                <div class="user_profile">
                                    <div class="user_img">
                                        <img src="{{ url('website/img/user/user.jpg') }}" alt="">
                                    </div>
                                    <div class="user_info">
                                        <h2 class="user_name">Caden Smith<span>Free</span></h2>
                                        <p><a href="mailto:cadmail@gmail.com" class="user_email">cadmail@gmail.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="user_nav">
                                    <ul>
                                        <li>
                                            <a href="user-profile.html">
                                                <span class="icon"><img
                                                        src="{{ url('website/svg/person.website/svg') }}"
                                                        alt="" class="fn__svg/svg"></span>
                                                <span class="text">Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-settings.html">
                                                <span class="icon"><img src="website/svg/setting.website/svg"
                                                        alt="" class="fn__svg/svg"></span>
                                                <span class="text">Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-billing.html">
                                                <span class="icon"><img
                                                        src="{{ url('website/svg/billing.website/svg') }}"
                                                        alt="" class="fn__svg/svg"></span>
                                                <span class="text">Billing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sign-in.html">
                                                <span class="icon"><img
                                                        src="{{ url('website/svg/logout.website/svg') }}"
                                                        alt="" class="fn__svg/svg"></span>
                                                <span class="text">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- !User (bar item) -->


                    </div>
                </div>
                <!-- !Header right: navigation bar -->

            </header>
            <!-- !HEADER -->


            <!-- LEFT PANEL -->
            <div class="techwave_fn_leftpanel">

                <div class="mobile_extra_closer"></div>

                <!-- logo (left panel) -->
                <div class="leftpanel_logo">
                    <a href="index-2.html" class="fn_logo">
                        <span class="full_logo">
                            <img src="{{ url('website/img/logo-desktop-full.png') }}" alt=""
                                class="desktop_logo">
                            <img src="{{ url('website/img/logo-retina-full.png') }}" alt=""
                                class="retina_logo">
                        </span>
                        <span class="short_logo">
                            <img src="{{ url('website/img/logo-desktop-mini.png') }}" alt=""
                                class="desktop_logo">
                            <img src="{{ url('website/img/logo-retina-mini.png') }}" alt=""
                                class="retina_logo">
                        </span>
                    </a>
                    <a href="#" class="fn__closer fn__icon_button desktop_closer">
                        <img src="{{ url('website/svg/arrow.website/svg') }}" alt="" class="fn__svg/svg">
                    </a>
                    <a href="#" class="fn__closer fn__icon_button mobile_closer">
                        <img src="{{ url('website/svg/arrow.website/svg') }}" alt="" class="fn__svg/svg">
                    </a>
                </div>
                <!-- !logo (left panel) -->

                <!-- content (left panel) -->
                <div class="leftpanel_content">

                    <!-- #1 navigation group -->
                    <div class="nav_group">
                        <h2 class="group__title">Start Here</h2>
                        <ul class="group__list">


                            <li>
                                <a href="index.html" class="fn__tooltip active menu__item" data-position="right"
                                    title="Home">
                                    <span class="icon"><img src="{{ url('website/svg/home.svg') }}" alt=""
                                            class="fn__svg"></span>
                                    <span class="text">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="community-feed.html" class="fn__tooltip menu__item" data-position="right"
                                    title="Community Feed">
                                    <span class="icon"><img src="{{ url('website/svg/community.website/svg') }}"
                                            alt="" class="fn__svg/svg"></span>
                                    <span class="text">Community Feed</span>
                                </a>
                            </li>
                            <li>
                                <a href="personal-feed.html" class="fn__tooltip menu__item" data-position="right"
                                    title="Personal Feed">
                                    <span class="icon"><img src="{{ url('website/svg/person.website/svg') }}"
                                            alt="" class="fn__svg/svg"></span>
                                    <span class="text">Personal Feed<span class="count">48</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="models.html" class="fn__tooltip menu__item" data-position="right"
                                    title="Finetuned Models">
                                    <span class="icon"><img src="{{ url('website/svg/cube.website/svg') }}"
                                            alt="" class="fn__svg/svg"></span>
                                    <span class="text">Finetuned Models</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- !#1 navigation group -->

                    <!-- #2 navigation group -->
                    <div class="nav_group">
                        <h2 class="group__title">User Tools</h2>
                        <ul class="group__list">
                            <li>
                                <a href="image-generation.html" class="fn__tooltip menu__item" data-position="right"
                                    title="Image Generation">
                                    <span class="icon"><img src="{{ url('website/svg/image.svg') }}"
                                            alt="" class="fn__svg/svg"></span>
                                    <span class="text">Image Generation</span>
                                </a>
                            </li>
                            <li>
                                <a href="ai-chat-bot.html" class="fn__tooltip menu__item" data-position="right"
                                    title="AI Chat Bot">
                                    <span class="icon"><img src="{{ url('website/svg/chat.website/svg') }}"
                                            alt="" class="fn__svg/svg"></span>
                                    <span class="text">AI Chat Bot</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- !#2 navigation group -->

                    <!-- #3 navigation group -->
                    <div class="nav_group">
                        <h2 class="group__title">Support</h2>
                        <ul class="group__list">
                            <li>
                                <a href="pricing.html" class="fn__tooltip menu__item" data-position="right"
                                    title="Pricing">
                                    <span class="icon"><img src="{{ url('website/svg/dollar.website/svg') }}"
                                            alt="" class="fn__svg/svg"></span>
                                    <span class="text">Pricing</span>
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="video-generation.html" class="fn__tooltip menu__item" title="FAQ &amp; Help"
                                    data-position="right">
                                    <span class="icon"><img src="{{ url('website/svg/question.website/svg') }}"
                                            alt="" class="fn__svg/svg"></span>
                                    <span class="text">FAQ &amp; Help</span>
                                    <span class="trigger"><img src="{{ url('website/svg/arrow.website/svg') }}"
                                            alt="" class="fn__svg/svg"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="documentation.html"><span class="text">Documentation</span></a>
                                    </li>
                                    <li>
                                        <a href="faq.html"><span class="text">FAQ</span></a>
                                    </li>
                                    <li>
                                        <a href="changelog.html"><span class="text">Changelog<span
                                                    class="fn__sup">(4.1.2)</span></span></a>
                                    </li>
                                    <li>
                                        <a href="contact.html"><span class="text">Contact Us</span></a>
                                    </li>
                                    <li>
                                        <a href="index-3.html"><span class="text">Home #2</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="sign-in.html" class="fn__tooltip menu__item" data-position="right"
                                    title="Log Out">
                                    <span class="icon"><img src="{{ url('website/svg/logout.website/svg') }}"
                                            alt="" class="fn__svg/svg"></span>
                                    <span class="text">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- !#3 navigation group -->


                </div>
                <!-- !content (left panel) -->

            </div>
            <!-- !LEFT PANEL -->


            <!-- CONTENT -->
            <div class="techwave_fn_content">

                <!-- PAGE (all pages go inside this div) -->
                <div class="techwave_fn_page">

                    <!-- Home Page -->
                    <div class="techwave_fn_home">
                        <div class="section_home">
                            <div class="section_left">

                                <!-- Title Shortcode -->
                                <div class="techwave_fn_title_holder">
                                    <h1 class="title">Unleash Your Creativity with AI</h1>
                                    <p class="desc">Generate your ideas into stunning visuals</p>
                                </div>
                                <!-- !Title Shortcode -->

                                <!-- Interactive List Shortcode -->
                                <div class="techwave_fn_interactive_list">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <a href="image-generation.html">
                                                    <span class="icon">
                                                        <img src="{{ url('website/svg/image.website/svg') }}"
                                                            alt="" class="fn__svg/svg">
                                                    </span>
                                                    <h2 class="title">Image Generation</h2>
                                                    <p class="desc">This field of AI combines deep learning
                                                        algorithms
                                                        and generative models to create new images that resemble
                                                        real-world photographs or exhibit creative and imaginative
                                                        qualities.</p>
                                                    <span class="arrow"><img
                                                            src="{{ url('website/svg/arrow.website/svg') }}"
                                                            alt="" class="fn__svg/svg"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <a href="ai-chat-bot.html">
                                                    <span class="icon">
                                                        <img src="{{ url('website/svg/chat.website/svg') }}"
                                                            alt="" class="fn__svg/svg">
                                                    </span>
                                                    <h2 class="title">AI Chat Bot</h2>
                                                    <p class="desc">An AI chatbot, short for artificial intelligence
                                                        chatbot, is a computer program designed to simulate human-like
                                                        conversations and provide automated responses to user queries or
                                                        prompts. </p>
                                                    <span class="arrow"><img src="website/svg/arrow.website/svg"
                                                            alt="" class="fn__svg/svg"></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- !Interactive List Shortcode -->

                            </div>
                            <div class="section_right">
                                <div class="company_info">
                                    <img src="{{ url('img/logo-desktop-full.png') }}" alt="">
                                    <p class="fn__animated_text">The official server of TECH-AI, a text-to-image AI
                                        where your imagination is the only limit. We’re building market-leading features
                                        that will give you greater control over your generations.</p>
                                    <hr>
                                    <div class="fn__members">
                                        <div class="active item">
                                            <span class="circle"></span>
                                            <span class="text">1,154,694 Online</span>
                                        </div>
                                        <div class="item">
                                            <span class="circle"></span>
                                            <span class="text">77,345,912 Members</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- !Home Page -->

                </div>
                <!-- !PAGE (all pages go inside this div) -->


                <!-- FOOTER (inside the content) -->
                <footer class="techwave_fn_footer">
                    <div class="techwave_fn_footer_content">
                        <div class="copyright">
                            <p>2023© Frenify Team</p>
                        </div>
                        <div class="menu_items">
                            <ul>
                                <li><a href="terms.html">Terms of Service</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
                <!-- !FOOTER (inside the content) -->

            </div>
            <!-- !CONTENT -->


        </div>
    </div>
    <!-- !MAIN WRAPPER -->



    <!-- Scripts -->
    <script type="text/javascript" src="{{ url('website/js/jquery8a54.js?ver=1.0.0') }}"></script>
    <script type="text/javascript" src="{{ url('website/js/plugins8a54.js?ver=1.0.0') }}"></script>
    <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
    <script type="text/javascript" src="{{ url('website/js/init8a54.js?ver=1.0.0') }}"></script>
    <!-- !Scripts -->

</body>

</html>
