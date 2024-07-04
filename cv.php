<?php
$title = "echan - CV";
include('header.php');
?>
<main class="main">
    <section class="cv section">
        <div class="cv__container container grid">
            <div class="cv__data">
                <h2 class="section__title">
                    M. Eric Chaniago
                </h2>

                <p class="cv__address">
                    Rokan Hulu, Riau, Indonesia
                </p>

                <div class="home__social">
                    <a href="https://wa.me/+6282268690256" class="home__social-link" target="_blank">
                        <i class="ri-whatsapp-fill"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/m-eric-chaniago-994684232" class="home__social-link" target="_blank">
                        <i class="ri-linkedin-fill"></i>
                    </a>

                    <a href="mailto:akkitherythm@gmail.com" class="home__social-link" target="_blank">
                        <i class="ri-mail-line"></i>
                    </a>
                </div>

            </div>

            <div class="cv__image">
                <svg class="cv__blob" viewBox="0 0 550 592" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="maskBorder" mask-type="alpha">
                        <path d="M263 48.1782C270.426 43.891 279.574 43.891 287 48.1782L501.157 
      171.822C508.583 176.109 513.157 184.032 513.157 192.606V439.894C513.157 
      448.468 508.583 456.391 501.157 460.678L287 584.322C279.574 588.609 
      270.426 588.609 263 584.322L48.843 460.678C41.4174 456.391 36.843 448.468 36.843 
      439.894V192.606C36.843 184.032 41.4174 176.109 48.843 171.822L263 48.1782Z" fill="black" />
                    </mask>
                    <g mask="url(#maskBorder)">
                        <rect x="37" width="476" height="630" fill="url(#pattern2)" />

                        <path d="M285 51.6423L499.157 175.286C505.345 178.859 509.157 185.461 509.157 
      192.606V439.894C509.157 447.039 505.345 453.641 499.157 457.214L285 
      580.858C278.812 584.43 271.188 584.43 265 580.858L50.843 457.214C44.655 453.641 
      40.843 447.039 40.843 439.894V192.606C40.843 185.461 44.655 178.859 50.843 
      175.286L265 51.6423C271.188 48.0697 278.812 48.0696 285 51.6423Z" stroke="black" stroke-width="10" />
                    </g>

                    <rect x="37" width="476" height="300" fill="url(#pattern3)" />

                    <defs>
                        <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use href="#imageBorder" transform="matrix(0.00143057 0 0 0.00108108 0.0404062 0)" />
                        </pattern>

                        <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use href="#imageBorder" transform="matrix(0.00143057 0 0 0.00226984 0.0404062 0)" />
                        </pattern>

                        <!-- Insert your profile (recommended size: 640 x 940) -->
                        <image class="cv__img" id="imageBorder" width="640" height="940" href="assets/img/profile.png" />
                    </defs>
                </svg>
            </div>
        </div>
    </section>

    <section class="skills section">
        <h2 class="section__title">
            Skills
        </h2>
        <div class="skills__container container grid owl-carousel owl-theme">
            <article class="skills__card item">
                <img src="assets/img/numpy.png" alt="codeigniter" class="skills__icon2">

                <h2 class="skills__title">Numpy</h2>

                <p class="skills__description">
                    NumPy is a powerful open-source library in Python that is used for numerical and mathematical operations.
                </p>
            </article>

            <article class="skills__card item">
                <img src="assets/img/python.png" alt="codeigniter" class="skills__icon2">

                <h2 class="skills__title">Python</h2>

                <p class="skills__description">
                    Python is a versatile high-level programming language.
                </p>
            </article>

            <article class="skills__card item">
                <img src="assets/img/orange.png" alt="codeigniter" class="skills__icon2">

                <h2 class="skills__title">Orange</h2>

                <p class="skills__description">
                    Orange is a data visualization and analysis software for machine learning and data mining.
                </p>
            </article>

            <article class="skills__card item">
                <img src="assets/img/pandas.png" alt="codeigniter" class="skills__icon2">

                <h2 class="skills__title">Pandas</h2>

                <p class="skills__description">
                    Pandas is a powerful data manipulation and analysis library for Python.
                </p>
            </article>
        </div>
    </section>

</main>
<?php include('footer.php') ?>