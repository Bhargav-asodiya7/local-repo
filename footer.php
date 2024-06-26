 <!-- Footer Section Start -->
 <footer class="footer-wrap">
   <div class="footer-top">
     <img src="assets/img/footer-shape-1.png" alt="Image" class="footer-shape-one moveHorizontal" />
     <img src="assets/img/sun-2.png" alt="Image" class="footer-shape-two rotate" />
     <img src="assets/image/bird-1.png" alt="Image" class="footer-shape-three flyLeft" />
     <div class="container">
       <div class="row pt-100 pb-75">
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 pe-xl-5">
           <div class="footer-widget">
             <a href="#" class="footer-logo">
               <img src="assets/image/logo-white.svg" alt="Image" />
             </a>
             <p class="comp-desc">
               Let's unite in action to dismantle barriers and ensure equality flourishes in every corner of society, empowering all to thrive.
             </p>
           </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ps-xl-5 ps-lg-4 ps-md-5">
           <div class="footer-widget">
             <h3 class="footer-widget-title">Explore</h3>
             <ul class="footer-menu list-style">
               <li>
                 <a href="#"> Research & Reports </a>
               </li>
               <li>
                 <a href="quiz.php"> Quiz </a>
               </li>
               <li>
                 <a href="faq.php"> FAQ </a>
               </li>
               <li>
                 <a href="contact-us.php"> Contact Us </a>
               </li>
             </ul>
           </div>
         </div>
         <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
           <div class="footer-widget">
             <h3 class="footer-widget-title">Other Pages</h3>
             <ul class="footer-menu list-style">
               <li>
                 <a href="violence.php">Gender-based Violence</a>
               </li>
               <li>
                 <a href="child-marriage.php">Child Marriage </a>
               </li>
               <li>
                 <a href="equality-sports.php"> In Sports</a>
               </li>
               <li>
                 <a href="access-to-education.php">Access to Education</a>
               </li>
               <li>
                 <a href="mens-role.php">Men's Role </a>
               </li>
             </ul>
           </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ps-md-5">
           <div class="footer-widget">
             <h3 class="footer-widget-title">Official Info</h3>
             <ul class="contact-info list-style">
               <li>
                 <i class="flaticon-pin"></i>
                 <h6>Location</h6>
                 <p>Silver Oak University</p>
               </li>
               <li>
                 <i class="flaticon-mail"></i>
                 <h6>Email</h6>
                 <a href="#"><span class="">info@lorem.com</span></a>
               </li>
               <li>
                 <i class="flaticon-phone-call"></i>
                 <h6>Phone</h6>
                 <a href="#">+91 9662442160</a>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="footer-bottom">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-lg-8 col-md-6 col-sm-7">
           <p class="copyright-text">
             <i class="ri-copyright-line"></i>Lorem, ipsum.
             <a href="https://hibotheme.com/">LOREN</a>
           </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-5">
           <ul class="social-profile style1 list-style">
             <li>
               <a href="https://facebook.com/">
                 <i class="ri-facebook-fill"></i>
               </a>
             </li>
             <li>
               <a href="https://twitter.com/">
                 <i class="ri-twitter-fill"></i>
               </a>
             </li>
             <li>
               <a href="https://instagram.com/">
                 <i class="ri-instagram-line"></i>
               </a>
             </li>
             <li>
               <a href="https://linkedin.com/">
                 <i class="ri-linkedin-fill"></i>
               </a>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </footer>
 <!-- Footer Section End -->
 </div>
 <!-- Page Wrapper End -->

 <!-- Back-to-top button Start -->
 <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
 <!-- Back-to-top button End -->


 <!-- quiz -->

 <script>
   const quizData = [{
       question: 'What is the name of the campaign launched by the Government of India in 2015 to promote the welfare of girls and women?',
       a: 'Beti Bachao, Beti Padhao',
       b: 'Save Our Sisters',
       c: 'Women Empowerment Drive',
       d: 'Girls Rising Initiative',
       correct: 'a'
     },
     {
       question: 'What does CSS stand for?',
       a: 'Central Style Sheets',
       b: 'Cascading Style Sheets',
       c: 'Cascading Simple Sheets',
       d: 'Cars SUVs Sailboats',
       correct: 'b'
     },
     {
       question: 'What does HTML stand for?',
       a: 'Hypertext Markup Language',
       b: 'Hypertext Markdown Language',
       c: 'Hyperloop Machine Language',
       d: 'Helicopters Terminals Motorboats Lamborginis',
       correct: 'a'
     },
     {
       question: 'What year was JavaScript launched?',
       a: '1996',
       b: '1995',
       c: '1994',
       d: 'none of the above',
       correct: 'b'
     }
   ]
   const quiz = document.querySelector('#quiz')
   const answerEls = document.querySelectorAll('.answer')
   const questionEl = document.querySelector('#question')
   const submitBtn = document.querySelector('#submit')

   const a_text = document.getElementById('a_text')
   const b_text = document.getElementById('b_text')
   const c_text = document.getElementById('c_text')
   const d_text = document.getElementById('d_text')

   let currentQuiz = 0
   let score = 0

   loadQuiz()

   function loadQuiz() {
     deselectAnswers()
     const currentQuizData = quizData[currentQuiz]

     questionEl.innerText = currentQuizData.question
     a_text.innerText = currentQuizData.a
     b_text.innerText = currentQuizData.b
     c_text.innerText = currentQuizData.c
     d_text.innerText = currentQuizData.d
   }

   function deselectAnswers() {
     answerEls.forEach(answer => (answer.checked = false))
   }

   function getSelected() {
     let answer

     answerEls.forEach(answerEl => {
       if (answerEl.checked) {
         answer = answerEl.id
       }
     })

     return answer
   }

   function showResults() {
     quiz.innerHTML = `
    <h2>You answered correctly at ${score}/${quizData.length} questions</h2>

    <button class="btn style1 w-100 d-block" onclick="location.reload()">Reload</button>
  `;
   }


   submitBtn.addEventListener('click', () => {
     const answer = getSelected()
     if (answer) {
       if (answer === quizData[currentQuiz].correct) score++
     }

     currentQuiz++
     if (currentQuiz < quizData.length) {
       loadQuiz()
     } else {
       showResults()
     }
   })
 </script>

 <!-- quiz -->


 <!-- Link of JS files -->
 <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
 <script src="assets/js/jquery.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/form-validator.min.js"></script>
 <script src="assets/js/contact-form-script.js"></script>
 <script src="assets/js/aos.js"></script>
 <script src="assets/js/owl.carousel.min.js"></script>
 <script src="assets/js/owl-thumb.min.js"></script>
 <script src="assets/js/odometer.js"></script>
 <script src="assets/js/circle-progressbar.min.js"></script>
 <script src="assets/js/fancybox.js"></script>
 <script src="assets/js/jquery.appear.js"></script>
 <script src="assets/js/tweenmax.min.js"></script>
 <script src="assets/js/main.js"></script>
 </body>

 </html>