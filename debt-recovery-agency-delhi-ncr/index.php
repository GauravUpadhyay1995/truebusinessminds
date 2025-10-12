<?php include '../includes/header.php'; ?>
<!-- https://codepen.io/krulexdev/pen/NPKNoRX -->

<link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/" />



<!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
</script>


<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="../assets/vendor/fonts/iconify-icons.css" />

<!-- Core CSS -->
<!-- build:css assets/vendor/css/theme.css  -->


<link rel="stylesheet" href="../assets/vendor/libs/pickr/pickr-themes.css" />


<link rel="stylesheet" href="../assets/css/demo.css" />


<link rel="stylesheet" href="../assets/vendor/css/pages/front-page.css" />

<!-- Vendors CSS -->

<!-- endbuild -->

<link rel="stylesheet" href="../assets/vendor/libs/nouislider/nouislider.css" />
<link rel="stylesheet" href="../assets/vendor/libs/swiper/swiper.css" />

<!-- Page CSS -->

<link rel="stylesheet" href="../assets/vendor/css/pages/front-page-landing.css" />

<!-- Helpers -->
<script src="../assets/vendor/js/helpers.js"></script>
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

<script src="../assets/js/front-config.js"></script>



<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<script src="../assets/vendor/js/dropdown-hover.js"></script>
<script src="../assets/vendor/js/mega-dropdown.js"></script><!-- Navbar: Start -->
<style>
    /*===== GOOGLE FONTS =====*/

    @import url("https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap");

    /*===== VARIABLES CSS =====*/

    :root {

        --header-height: 3rem;

        --font-semi: 600;

        /*===== Color =====*/

        --hue-color: 148;

        --first-color: #355efc;

        --second-color: hsl(224, 56%, 12%);

        --body-font: "Poppins", sans-serif;

        --big-font-size: 2rem;

        --h2-font-size: 1.25rem;

        --normal-font-size: .938rem;

        --smaller-font-size: .75rem;

        --mb-2: 1rem;

        --mb-4: 2rem;

        --mb-5: 2.5rem;

        --mb-6: 3rem;

        --z-back: -10;

        --z-fixed: 100;

    }

    @media screen and (min-width: 968px) {

        :root {

            --big-font-size: 3.5rem;

            --h2-font-size: 2rem;

            --normal-font-size: 1rem;

            --smaller-font-size: .875rem;

        }

    }

    /*===== BASE =====*/

    *,
    ::before,
    ::after {

        box-sizing: border-box;

    }

    html {

        scroll-behavior: smooth;

    }

    body {

        margin: var(--header-height) 0 0 0;

        font-family: var(--body-font);

        font-size: var(--normal-font-size);

        color: var(--second-color);

    }

    h1,
    h2,
    p {

        margin: 0;

    }

    ul {

        margin: 0;

        padding: 0;

        list-style: none;

    }

    a {

        text-decoration: none;

    }

    img {

        max-width: 100%;

        height: auto;

        display: block;

    }

    /*===== CLASS CSS ===== */

    .section-title {

        position: relative;

        font-size: var(--h2-font-size);

        color: var(--first-color);

        margin-top: var(--mb-2);

        margin-bottom: var(--mb-4);

        text-align: center;

    }

    .section-title::after {

        position: absolute;

        content: "";

        width: 64px;

        height: 0.18rem;

        left: 0;

        right: 0;

        margin: auto;

        top: 2rem;

        background-color: var(--first-color);

    }

    .section {

        padding-top: 3rem;

        padding-bottom: 2rem;

    }

    /*===== LAYOUT =====*/

    .bd-grid {

        max-width: 1024px;

        display: grid;

        margin-left: var(--mb-2);

        margin-right: var(--mb-2);

    }

    .l-header {

        width: 100%;

        position: fixed;

        top: 0;

        left: 0;

        z-index: var(--z-fixed);

        background-color: #fff;

        box-shadow: 0 1px 4px rgba(146, 161, 176, 0.15);

    }

    /*===== NAV =====*/


    @media screen and (max-width: 767px) {

        .nav__menu {

            position: fixed;

            top: var(--header-height);

            right: -100%;

            width: 80%;

            height: 100%;

            padding: 2rem;

            background-color: var(--second-color);

            transition: 0.5s;

        }

    }

    .nav__item {

        margin-bottom: var(--mb-4);

    }

    .nav__link {

        position: relative;

        color: #fff;

    }

    .nav__link:hover {

        position: relative;

    }

    .nav__link:hover::after {

        position: absolute;

        content: "";

        width: 100%;

        height: 0.18rem;

        left: 0;

        top: 2rem;

        background-color: var(--first-color);

    }

    .nav__logo {

        color: var(--second-color);

    }

    .nav__toggle {

        color: var(--second-color);

        font-size: 1.5rem;

        cursor: pointer;

    }

    /*Active menu*/

    .active-link::after {

        position: absolute;

        content: "";

        width: 100%;

        height: 0.18rem;

        left: 0;

        top: 2rem;

        background-color: var(--first-color);

    }

    /*=== Show menu ===*/

    .show {

        right: 0;

    }

    /*===== HOME =====*/

    .home {

        position: relative;

        row-gap: 5rem;

        padding: 4rem 0 5rem;

    }

    .home__data {

        align-self: center;

    }

    .home__title {

        font-size: var(--big-font-size);

        margin-bottom: var(--mb-5);

    }

    .home__title-color {

        color: var(--first-color);

    }

    .home__social {

        display: flex;

        flex-direction: column;

    }

    .home__social-icon {

        width: max-content;

        margin-bottom: var(--mb-2);

        font-size: 1.5rem;

        color: var(--second-color);

    }

    .home__social-icon:hover {

        color: var(--first-color);

    }

    .home__img {

        position: absolute;

        right: 0;

        bottom: 0;

        width: 260px;

    }

    .home__blob {

        fill: var(--first-color);

    }

    .home__blob-img {

        width: 360px;

    }

    /*BUTTONS*/

    .button {

        display: inline-block;

        background-color: var(--first-color);

        color: #222;

        padding: 0.75rem 2.5rem;

        font-weight: var(--font-semi);

        border-radius: 0.5rem;

        transition: 0.3s;

    }

    .button:hover {

        box-shadow: 0px 10px 36px rgba(0, 0, 0, 0.15);

    }

    /* ===== ABOUT =====*/

    .about__container {

        row-gap: 2rem;

        text-align: center;

    }

    .about__subtitle {

        margin-bottom: var(--mb-2);

    }

    .about__img {

        justify-self: center;

    }

    .about__img img {

        width: 200px;

        border-radius: 0.5rem;

    }

    /* ===== SKILLS =====*/

    .skills__container {

        row-gap: 2rem;

        text-align: center;

    }

    .skills__subtitle {

        margin-bottom: var(--mb-2);

    }

    .skills__text {

        margin-bottom: var(--mb-4);

    }

    .skills__data {

        display: flex;

        justify-content: space-between;

        align-items: center;

        position: relative;

        font-weight: var(--font-semi);

        padding: 0.5rem 1rem;

        margin-bottom: var(--mb-4);

        border-radius: 0.5rem;

        box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);

    }

    .skills__icon {

        font-size: 2rem;

        margin-right: var(--mb-2);

        color: var(--first-color);

    }

    .skills__names {

        display: flex;

        align-items: center;

    }

    .skills__bar {

        position: absolute;

        left: 0;

        bottom: 0;

        background-color: var(--first-color);

        height: 0.25rem;

        border-radius: 0.5rem;

        z-index: var(--z-back);

    }

    .skills__communication {

        width: 90%;

    }

    .skills__design {

        width: 80%;

    }

    .skills__content {

        width: 75%;

    }

    .skills__adaptability {

        width: 90%;

    }

    .skills__img {

        border-radius: 0.5rem;

    }

    /* ===== HIGHLIGHTS =====*/

    .showcase__container {

        row-gap: 2rem;

    }

    .showcase__img {

        box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);

        border-radius: 0.5rem;

        overflow: hidden;

    }

    .showcase__img img {

        transition: 1s;

    }

    .showcase__img img:hover {

        transform: scale(1.1);

    }





    /* ===== MEDIA QUERIES=====*/

    @media screen and (max-width: 320px) {

        .home {

            row-gap: 2rem;

        }

        .home__img {

            width: 200px;

        }

    }

    @media screen and (min-width: 576px) {

        .home {

            padding: 4rem 0 2rem;

        }

        .home__social {

            padding-top: 0;

            padding-bottom: 2.5rem;

            flex-direction: row;

            align-self: flex-end;

        }

        .home__social-icon {

            margin-bottom: 0;

            margin-right: var(--mb-4);

        }

        .home__img {

            width: 300px;

            bottom: 25%;

        }

        .about__container {

            grid-template-columns: repeat(2, 1fr);

            align-items: center;

            text-align: initial;

        }

        .skills__container {

            grid-template-columns: 0.7fr;

            justify-content: center;

            column-gap: 1rem;

        }

        .showcase__container {

            grid-template-columns: repeat(2, 1fr);

            column-gap: 2rem;

            padding-top: 2rem;

        }


    }

    @media screen and (min-width: 768px) {

        body {

            margin: 0;

        }

        .section {

            padding-top: 4rem;

            padding-bottom: 3rem;

        }

        .section-title {

            margin-bottom: var(--mb-6);

        }

        .section-title::after {

            width: 80px;

            top: 3rem;

        }






        .home {

            padding: 8rem 0 2rem;

        }

        .home__img {

            width: 400px;

            bottom: 10%;

        }

        .about__container {

            padding-top: 2rem;

        }

        .about__img img {

            width: 300px;

        }

        .skills__container {

            grid-template-columns: repeat(2, 1fr);

            column-gap: 2rem;

            align-items: center;

            text-align: initial;

        }

        .showcase__container {

            grid-template-columns: repeat(3, 1fr);

            column-gap: 2rem;

        }

    }

    @media screen and (min-width: 992px) {

        .bd-grid {

            margin-left: auto;

            margin-right: auto;

        }

        .home {

            padding: 10rem 0 2rem;

        }

        .home__img {

            width: 450px;

        }

    }
</style>
<style>
    .myspan {
        width: 100%;
        float: left;
        color: #355efc;
        -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
        clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
        transform: translateY(-50px);
        opacity: 0;
        animation-name: titleAnimation;
        animation-timing-function: ease;
        animation-duration: 3s;
        animation-iteration-count: infinite;
    }

    .myspan {
        animation-delay: 0.6s;
    }

    h1 span:first-child {
        animation-delay: 0.7s;
    }

    h1 span:last-child {
        color: #ffe221;
        animation-delay: 0.5s;
    }


    @keyframes titleAnimation {
        0% {
            transform: translateY(-50px);
            opacity: 0;
            -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
            clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
        }

        20% {
            transform: translateY(0);
            opacity: 1;
            -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
            clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
        }

        80% {
            transform: translateY(0);
            opacity: 1;
            -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
            clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
        }

        100% {
            transform: translateY(50px);
            opacity: 0;
            -webkit-clip-path: polygon(100% 0, 100% -0%, 0 100%, 0 100%);
            clip-path: polygon(100% 0, 100% -0%, 0 100%, 0 100%);
        }
    }
</style>


<!--===== HEADER =====-->


<main class="l-main">

    <!--===== HOME =====-->

    <section class="home bd-grid" id="home">

        <div class="home__data">

            <h1 class="home__title"><br>
                <span class="myspan">This is TBM's</span>
                <span class="myspan"> Money Recovery</span>
                <span class="myspan">in Delhi NCR</span>
            </h1>



        </div>

        <div class="home__social">

            <a href="https://www.linkedin.com/in/tbm" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>

            <a href="https://www.instagram.com/" class="home__social-icon"><i class='bx bxl-instagram'></i></a>

            <a href="" class="home__social-icon"><i class='bx bxl-behance'></i></a>

        </div>

        <div class="home__img">
            <svg class="collection-recovery__blob" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                <!-- Central Safe/Vault -->
                <circle cx="250" cy="250" r="40" fill="#f0b142" stroke="#e68a00" stroke-width="5"></circle>

                <!-- Arrows Representing Collection -->
                <path d="M250 60 L270 110 L250 100 L230 110 Z" fill="#3cb371"></path>
                <path d="M60 250 L110 270 L100 250 L110 230 Z" fill="#3cb371"></path>

                <!-- Arrows Representing Recovery -->
                <path d="M250 440 L230 390 L250 400 L270 390 Z" fill="#dc3545"></path>
                <path d="M440 250 L390 230 L400 250 L390 270 Z" fill="#dc3545"></path>

                <!-- Circular Money Flow -->
                <path d="M250 100 C300 150, 350 200, 400 250 C350 300, 300 350, 250 400 C200 350, 150 300, 100 250 C150 200, 200 150, 250 100"
                    fill="none" stroke="#007bff" stroke-width="5"></path>

                <!-- Money Icons -->
                <text x="220" y="80" font-size="20" fill="#3cb371">💰</text>
                <text x="80" y="230" font-size="20" fill="#3cb371">💰</text>
                <text x="380" y="230" font-size="20" fill="#dc3545">💵</text>
                <text x="220" y="430" font-size="20" fill="#dc3545">💵</text>
            </svg>



        </div>

    </section>

    <!--===== ABOUT =====-->

    <section class="about section " id="about">

        <!--<h2 class="section-title">About</h2>-->

        <div class="about__container bd-grid">

            <div class="about__img">

                <img src="assets/img/about.jpg" alt="">

            </div>



            <div>

                <h2 class="about__subtitle">Your Trusted Money Recovery Agency</h2>

                <p class="about__text">At TBM, we specialize in helping individuals and businesses recover lost or unpaid funds. Whether you've been a victim of fraud, unpaid invoices, or unauthorized transactions, our expert team is here to assist you in retrieving what is rightfully yours..</p>
                <p class="about__text">

                    At TBM, we are committed to ensuring that your financial rights are protected and that you receive the money you rightfully deserve.</p>

            </div>

        </div>

    </section>

    <!--===== SKILLS =====-->

    <section class="skills section" id="skills">

        <h2 class="section-title">Skills</h2>

        <div class="skills__container bd-grid">

            <div>

                <h2 class="skills__subtitle">What drive us the most?</h2>

                <p class="skills__text">A passion for creativity and meaningful impact, supported by key skills in digital communication, design, and marketing.</p>

                <div class="skills__data">

                    <div class="skills__names">

                        <i class='bx bx-chat skills__icon'></i>

                        <span class="skills__name">Investigation & Strategy</span>

                    </div>

                    <div class="skills__bar skills__communication">

                    </div>

                    <div>

                        <span class="skills__percentage">100%</span>

                    </div>

                </div>

                <div class="skills__data">

                    <div class="skills__names">

                        <i class='bx bx-palette skills__icon'></i>

                        <span class="skills__name">Fast & Efficient</span>

                    </div>

                    <div class="skills__bar skills__design">



                    </div>

                    <div>

                        <span class="skills__percentage">100%</span>

                    </div>

                </div>

                <div class="skills__data">

                    <div class="skills__names">

                        <i class='bx bx-news skills__icon'></i>

                        <span class="skills__name">Confidential & Secure</span>

                    </div>

                    <div class="skills__bar skills__content editing">



                    </div>

                    <div>

                        <span class="skills__percentage">100%</span>

                    </div>

                </div>

                <div class="skills__data">

                    <div class="skills__names">

                        <i class='bx bx-refresh skills__icon'></i>

                        <span class="skills__name">Experienced Professionals</span>

                    </div>

                    <div class="skills__bar skills__adaptability">



                    </div>

                    <div>

                        <span class="skills__percentage">90%</span>

                    </div>

                </div>

            </div>



            <div>

                <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 250 Q200 100, 300 250 T400 250" fill="none" stroke="url(#grad2)" stroke-width="12" stroke-linecap="round"></path>
                    <defs>
                        <linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#52d663;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <circle cx="100" cy="250" r="10" fill="#ffcc00"></circle>
                    <circle cx="400" cy="250" r="10" fill="#dc3545"></circle>
                </svg>


            </div>

        </div>

    </section>

    



</main>


<!--===== SCROLL REVEAL =====-->

<script src="https://unpkg.com/scrollreveal"></script>

<!--===== MAIN JS =====-->


</body>

</html>
<?php include '../includes/footer.php'; ?>
<script>
    /*===== MENU SHOW =====*/

    const showMenu = (toggleId, navId) => {

        const toggle = document.getElementById(toggleId),

            nav = document.getElementById(navId)

        if (toggle && nav) {

            toggle.addEventListener('click', () => {

                nav.classList.toggle('show')

            })

        }

    }

    showMenu('nav-toggle', 'nav-menu')

    /*==================== REMOVE MENU MOBILE ====================*/

    const navLink = document.querySelectorAll('.nav__link')

    function linkAction() {

        const navMenu = document.getElementById('nav-menu')

        navMenu.classList.remove('show')

    }

    navLink.forEach(n => n.addEventListener('click', linkAction))

    /*==================== SCROLL SECTIONS ACTIVE LINK ====================*/

    const sections = document.querySelectorAll('section[id]')

    const scrollActive = () => {

        const scrollDown = window.scrollY

        sections.forEach(current => {

            const sectionHeight = current.offsetHeight,

                sectionTop = current.offsetTop - 58,

                sectionId = current.getAttribute('id'),

                sectionsClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')



            if (scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight) {

                sectionsClass.classList.add('active-link')

            } else {

                sectionsClass.classList.remove('active-link')

            }

        })

    }

    window.addEventListener('scroll', scrollActive)

    /*===== SCROLL REVEAL ANIMATION =====*/

    const sr = ScrollReveal({

        origin: 'top',

        distance: '60px',

        duration: 2000,

        delay: 200,

    });

    sr.reveal('.home__data, .about__img, .skills__subtitle, .skills__text', {});

    sr.reveal('.home__img, .about__subtitle, .about__text, .skills__img', {
        delay: 400
    });

    sr.reveal('.home__social-icon', {
        interval: 200
    });

    sr.reveal('.skills__data, .showcase__img, .contact__input', {
        interval: 200
    });
</script>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="../lib/wow/wow.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>


<!-- Template Javascript -->
<script src="./js/main.js"></script>