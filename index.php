<?php
$title = "echan - Web Portofolio";
include('header.php')
?>
<!--==================== MAIN ====================-->
<main class="main">
   <!--==================== HOME ====================-->
   <section class="home section" id="home">
      <div class="home__container container grid">
         <div class="home__content">
            <div class="home__data">
               <h3 class="home__subtitle">
                  Hello, <span>I'm</span>
               </h3>

               <h1 class="home__title">M. Eric Chaniago</h1>

               <h3 class="home__education">Student of UIN SUSKA Riau</h3>

               <p class="home__description">
                  I'm a student of UIN SUSKA Riau. My major is Information System, Faculty of Sains & Technology.
               </p>

               <a href="#contact" class="button">Let's Talk</a>
            </div>

            <div class="home__social">
               <a href="https://github.com/echaan" class="home__social-link" target="_blank">
                  <i class="ri-github-fill"></i>
               </a>

               <a href="https://www.linkedin.com/in/m-eric-chaniago-994684232" class="home__social-link" target="_blank">
                  <i class="ri-linkedin-fill"></i>
               </a>

               <a href="https://web.facebook.com/m.eric.chaniago.1" class="home__social-link" target="_blank">
                  <i class="ri-facebook-fill"></i>
               </a>
            </div>
         </div>

         <div class="home__image">
            <svg class=home__blob viewBox="0 0 550 591" xmlns="http://www.w3.org/2000/svg">
               <mask id="maskBlob" mask-type="alpha">
                  <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
      170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
      447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
      587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
      438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z" />
               </mask>
               <g mask="url(#maskBlob)">
                  <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
      170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
      447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
      587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
      438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z" />

                  <rect x="37" width="476" height="630" fill="url(#pattern0)" />
               </g>

               <rect x="37" width="476" height="300" fill="url(#pattern1)" />

               <defs>
                  <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                     <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00108108 0.0404062 0)" />
                  </pattern>

                  <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                     <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00226984 0.0404062 0)" />
                  </pattern>

                  <!-- Insert your profile (recommended size: 640 x 940) -->
                  <image class="home__img" id="imageBlob" width="640" height="925" href="assets/img/profile.png" />
               </defs>
            </svg>
         </div>

      </div>
   </section>

   <!--==================== Profile ====================-->
   <section class="profile section" id="profile">
      <div class="profile__container container grid">
         <div class="profile__data">
            <h3 class="section__subtitle">
               <span>Intro</span>
            </h3>

            <h2 class="section__title">
               My Profile
            </h2>

            <p class="profile__description">
               As a Systems Information student at UIN SUSKA Riau, I am a dedicated and enthusiastic individual with a solid foundation in IT.
            </p>

            <a href="cv.php" class="button">Checkout My CV</a>
         </div>

         <div class="profile__image">
            <svg class="profile__blob" viewBox="0 0 550 592" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                  <image class="profile__img" id="imageBorder" width="640" height="940" href="assets/img/profile.png" />
               </defs>
            </svg>
         </div>
      </div>
   </section>

   <!--==================== Skills ====================-->
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


   <!--==================== Activities ====================-->
   <section class="activities section" id="activities">
      <h3 class="section__subtitle">
         My <span>Activities</span>
      </h3>

      <h2 class="section__title">
         Recent Activities
      </h2>

      <div class="activities__container container grid">
         <article class="activities__card">
            <i class="ri-layout-3-line activities__icon"></i>

            <h2 class="activities__title">Learn Web Dev</h2>

            <p class="acivities__description">
               Currently, I am dedicating a significant amount of time to learning web programming.
            </p>
         </article>

         <article class="activities__card">
            <i class="ri-gamepad-line activities__icon"></i>

            <h2 class="activities__title">Play Games</h2>

            <p class="acivities__description">
               In my free time, I sometimes play games like Winning Eleven and Gundam. I really enjoy offline gaming.
            </p>
         </article>

         <article class="activities__card">
            <i class="ri-book-read-line activities__icon"></i>

            <h2 class="activities__title">Read Novels & Comics</h2>

            <p class="acivities__description">
               I really enjoying read novels and comic, especially novels and comic with fantasy genre.
            </p>
         </article>
      </div>
   </section>

   <!--==================== PROJECTS ====================-->
   <section class="projects section" id="projects">
      <h3 class="section__subtitle">
         My <span>Projects</span>
      </h3>

      <h2 class="section__title">
         Recent Projects
      </h2>

      <div class="projects__container container grid">
         <article class="projects__cards">
            <img src="assets/img/project-img-2.jpg" alt="" class="projects__img">

            <div class="projects__modal">
               <span class="projects__subtitle">Web Application</span>

               <h2 class="projects__title">Survey Kepuasan Penggunaan Laboratorium</h2>

               <a href="#" class="projects__button">
                  View demo <i class="ri-external-link-line"></i>
               </a>
            </div>
         </article>

         <article class="projects__cards">
            <img src="assets/img/project-img-1.jpg" alt="" class="projects__img">

            <div class="projects__modal">
               <span class="projects__subtitle">Web Application</span>

               <h2 class="projects__title">Survey Kepuasan Penggunaan Laboratorium</h2>

               <a href="#" class="projects__button">
                  View demo <i class="ri-external-link-line"></i>
               </a>
            </div>
         </article>

         <article class="projects__cards">
            <img src="assets/img/project-img-2.jpg" alt="" class="projects__img">

            <div class="projects__modal">
               <span class="projects__subtitle">Web Application</span>

               <h2 class="projects__title">Survey Kepuasan Penggunaan Laboratorium</h2>

               <a href="#" class="projects__button">
                  View demo <i class="ri-external-link-line"></i>
               </a>
            </div>
         </article>

         <article class="projects__cards">
            <img src="assets/img/project-img-3.jpg" alt="" class="projects__img">

            <div class="projects__modal">
               <span class="projects__subtitle">Web Application</span>

               <h2 class="projects__title">Survey Kepuasan Penggunaan Laboratorium</h2>

               <a href="#" class="projects__button">
                  View demo <i class="ri-external-link-line"></i>
               </a>
            </div>
         </article>

         <article class="projects__cards">
            <img src="assets/img/project-img-4.jpg" alt="" class="projects__img">

            <div class="projects__modal">
               <span class="projects__subtitle">Web Application</span>

               <h2 class="projects__title">Survey Kepuasan Penggunaan Laboratorium</h2>

               <a href="#" class="projects__button">
                  View demo <i class="ri-external-link-line"></i>
               </a>
            </div>
         </article>

         <article class="projects__cards">
            <img src="assets/img/project-img-5.jpg" alt="" class="projects__img">

            <div class="projects__modal">
               <span class="projects__subtitle">Web Application</span>

               <h2 class="projects__title">Survey Kepuasan Penggunaan Laboratorium</h2>

               <a href="#" class="projects__button">
                  View demo <i class="ri-external-link-line"></i>
               </a>
            </div>
         </article>
      </div>
   </section>

   <!--==================== CONTACT ====================-->
   <section class="contact section" id="contact">
      <h3 class="section__subtitle">
         Get In <span>Touch</span>
      </h3>

      <h2 class="section__title">
         Contact Me
      </h2>

      <div class="contact__container container grid">
         <form action="" class="contact__form" id="contact-form" method="post">
            <div class="contact__group">
               <input type="text" class="contact__input" name="user_name" required placeholder="Enter your name">
               <input type="email" class="contact__input" name="user_email" required placeholder="Enter your email">
            </div>

            <textarea name="user_mail" required class="contact__input" placeholder="Enter your message"></textarea>

            <p class="contact__message" id="contact-message"></p>

            <button type="submit" class="button contact__button" name="contact-submit">
               Send Message
            </button>
         </form>
      </div>
   </section>
</main>
<?php include('footer.php') ?>