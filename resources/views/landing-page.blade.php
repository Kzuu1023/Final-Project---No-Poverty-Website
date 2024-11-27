<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>No Poverty Website</title>
        <link rel="stylesheet" href="css/landing-page.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <nav class="header__nav">
                <div class="header__first-row">
                    <a href="#">
                        <img
                            src="../images/poverty-logo.png"
                            alt="poverty-logo"
                        />

                        <p>Poverty<span>Fighters</span></p>
                    </a>
                </div>

                <div class="header__second-row">
                    <ul class="header__nav-list">
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link"> About Us<i class="fa-solid fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown_menu-item"><a href="/founder">Meet Our Founder</a></li>
                                    <li class="dropdown_menu-item"><a href="/goals.blade.php">Our Goals</a></li>
                                    <li class="dropdown_menu-item"><a href="/transparency">Transparency</a></li>
                                </ul>
                        </li>

                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link"> Our Programs<i class="fa-solid fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown_menu-item"><a href="/healthy-meals">Healthy Meals for Families</a></li>
                                    <li class="dropdown_menu-item"><a href="/school">School for Kids</a></li>
                                    <li class="dropdown_menu-item"><a href="/holiday">Holiday Warmth Drive: Share the Joy</a></li>
                                </ul>
                        </li>

                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link"> Goals </a>
                        </li>
                    </ul>

                    <a href="/donation"
                        ><button class="header__donate-btn">Donate</button></a
                    >
                </div>
            </nav>
        </header>
        <main class="viewport">
            <section class="hero">
                <div class="hero__container">
                    <img src="../images/poverty-hero.jpg" alt="hero-img" />
                    <h1 class="hero__impact-msg">
                        Empowering Lives, Ending Poverty
                    </h1>

                    <div class="hero__text-container">
                        <p>
                            Hunger Free Philippines is a nonprofit organization
                            dedicated to providing meals and essential resources
                            to those living in extreme poverty. Through
                            partnerships and collaborations we aim to
                            drastically reduce hunger and create lasting change
                            for countless individuals across the Philippines.
                        </p>
                    </div>
                </div>
            </section>

            <section class="feature__panel">
                <h2 class="feature__panel-program">Our Program</h2>
                <div class="feature__panel-container">
                    <div class="feature__panel-item">
                        <img
                            src="../images/IMG_31478905789023457890.jpg"
                            alt=""
                        />
                    </div>
                    <div class="feature__panel-item">
                        <h3>Healthy Meals for Families</h3>
                        <p class="feature__panel-text">
                            Good food brings families together! By supporting
                            'Healthy Meals for Families,' you’re helping provide
                            nutritious meals to those who need it most. Let’s
                            build a healthier future, one meal at a time, and
                            make a lasting impact in their lives. Join us in
                            spreading hope and health!
                        </p>
                    </div>
                </div>

                <div class="feature__panel-container">
                    <div class="feature__panel-item">
                        <h3>School for Kids</h3>
                        <p class="feature__panel-text">
                            Education opens doors to a brighter future! By
                            supporting School For Kids, you're giving children
                            the chance to learn, grow, and thrive. Help us
                            provide quality education to those who need it most.
                            Together, we can empower young minds, create
                            lifelong opportunities, and inspire a love for
                            learning. Join us in building a better tomorrow, one
                            student at a time!
                        </p>
                    </div>
                    <div class="feature__panel-item">
                        <img src="../images/school-for-kids.jpg" alt="" />
                    </div>
                </div>

                <div class="feature__panel-container">
                    <div class="feature__panel-item">
                        <img src="../images/christmas-for-kids.jpg" alt="" />
                    </div>
                    <div class="feature__panel-item">
                        <h3>Holiday Warmth Drive: Share the Joy</h3>
                        <p class="feature__panel-text">
                            Good food brings families together! By supporting
                            'Healthy Meals for Families,' you’re helping provide
                            nutritious meals to those who need it most. Let’s
                            build a healthier future, one meal at a time, and
                            make a lasting impact in their lives. Join us in
                            spreading hope and health!
                        </p>
                    </div>
                </div>
            </section>

            <section class="quote__container">
                <div class="quote">
                    <p>
                        "Overcoming poverty is not a gesture of charity, it is
                        an act of justice. It is the protection of a fundamental
                        human right, the right to dignity and a decent life"
                    </p>
                    <span>— Nelson Mandela</span>
                </div>
            </section>

            <section class="cta-subscribe">
                <div class="cta__item">
                    <div class="cta__description">
                        <h3>Stay in the Loop</h3>
                        <p>
                            Subscribe to our newsletter to stay up-to-date on
                            our latest developments and events. You’ll be the
                            first to receive updates straight to your inbox!
                            Sign up now to never miss an important announcement
                            or story again. Thank you for your support!
                        </p>
                    </div>

                    <form action="{{ route('landing-page.store') }}" method="POST">
                    @csrf
                        <div class="first__row">
                            <input
                                type="text"
                                id="firstname"
                                name="firstname"
                                placeholder="First Name"
                            />

                            <input
                                type="text"
                                id="lastname"
                                name="lastname"
                                placeholder="Last Name"
                            />
                        </div>

                        <div class="second__row">
                            <input
                                type="text"
                                id="email"
                                name="email"
                                placeholder="Email"
                            />

                            <button>Subscribe Now</button>

                            @if(session()->has('message'))
                            <div class="alert-success-container" >
                                <div class="alert alert-success" > 
                                        {{ session()->get('message') }}
                                </div>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>

                <img src="../images/encourage-to-join.jpg" alt="" />
            </section>

            <footer class="footer">
                <div class="footer__item">
                    <div class="social__links-container">
                        <h4>LET'S GET SOCIAL</h4>
                        <div class="social__links">
                            <a href="#"
                                ><i class="fa-brands fa-facebook"></i
                            ></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"
                                ><i class="fa-brands fa-instagram"></i
                            ></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>

                        <div class="footer__poverty">
                            <a href="#">
                                <img
                                    src="../images/poverty-logo.png"
                                    alt="poverty-logo"
                                />

                                <p>Poverty<span>Fighters</span></p>
                            </a>
                        </div>
                    </div>

                    <div class="conclusion">
                        <div class="program__container">
                            <div class="program__item">
                                <h4>WHO WE ARE</h4>
                                <div class="program__links">
                                    <ul>
                                        <li>Meet Our Founder</li>
                                        <li>Our Goals</li>
                                        <li>Transparency</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="program__container">
                            <div class="program__item">
                                <h4>WHAT WE DO</h4>
                                <div class="program__links">
                                    <ul>
                                        <li>Healty Meals for Families</li>
                                        <li>School for Kids</li>
                                        <li>
                                            Holiday Warmth Drive: Share the Joy
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="program__container">
                            <div class="program__item">
                                <h4>WAYS YOU CAN HELP</h4>
                                <div class="program__links">
                                    <ul>
                                        <li>Donate Any Amount</li>
                                        <li>Subscribe to stay up-to-date</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>
