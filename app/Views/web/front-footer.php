<section id="contact-us" class="bg-white py-16">
   <div class="bg-[#F9FAFB] mx-auto max-w-7xl px-6 lg:px-12 py-14 rounded-3xl shadow-xl border border-gray-200 transition-all duration-300">
      <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 items-start">

         <!-- Left Column -->
         <div class="space-y-5">
            <p class="text-sm font-semibold text-[#7F56D9] tracking-wide uppercase">Contact Us</p>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 leading-tight">Let’s connect</h1>
            <p class="text-lg text-gray-600">
               We’d love to hear from you. Whether you have a question or just want to say hi — fill out the form and we’ll get back to you.
            </p>
         </div>

         <!-- Right Column: Form -->
         <div>
            <form id="contactFormFinal" method="POST" action="<?php echo getenv('SUPERADMIN_BASE_URL') . 'lead/submit'; ?>" novalidate class="space-y-4 sm:space-y-5">

               <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                  <div>
                     <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">First name</label>
                     <input type="text" name="firstname" id="firstname" placeholder="John"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-900 placeholder-gray-400 shadow-sm focus:ring-2 focus:ring-[#7F56D9] focus:border-[#7F56D9] transition">
                     <p id="firstname-error" class="text-xs text-red-600 mt-1 h-4"></p>
                  </div>

                  <div>
                     <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">Last name</label>
                     <input type="text" name="lastname" id="lastname" placeholder="Doe"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-900 placeholder-gray-400 shadow-sm focus:ring-2 focus:ring-[#7F56D9] focus:border-[#7F56D9] transition">
                     <p id="lastname-error" class="text-xs text-red-600 mt-1 h-4"></p>
                  </div>
               </div>

               <div>
                  <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                  <input type="email" name="email" id="email" placeholder="you@company.com"
                     class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-900 placeholder-gray-400 shadow-sm focus:ring-2 focus:ring-[#7F56D9] focus:border-[#7F56D9] transition">
                  <p id="email-error" class="text-xs text-red-600 mt-1 h-4"></p>
               </div>

               <div>
                  <label for="contact_number" class="block text-sm font-medium text-gray-700 mb-1">Phone number</label>
                  <input type="tel" name="contact_number" id="contact_number" placeholder="9876543210"
                     class="w-full rounded-lg border border-gray-300 px-4 py-2.5 pl-4 text-sm text-gray-900 placeholder-gray-400 shadow-sm focus:ring-2 focus:ring-[#7F56D9] focus:border-[#7F56D9] transition">
                  <p id="contact_number-error" class="text-xs text-red-600 mt-1 h-4"></p>
               </div>

               <div>
                  <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                  <textarea name="comment" id="comment" rows="4" placeholder="Your message..."
                     class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-900 placeholder-gray-400 shadow-sm focus:ring-2 focus:ring-[#7F56D9] focus:border-[#7F56D9] transition"></textarea>
                  <p id="comment-error" class="text-xs text-red-600 mt-1 h-4"></p>
               </div>

               <div class="flex items-start gap-2 sm:gap-3">
                  <input type="checkbox" id="agreement" name="agreement"
                     class="mt-1 h-4 w-4 rounded text-[#7F56D9] border-gray-300 focus:ring-[#7F56D9]">
                  <label for="agreement" class="text-sm text-gray-700 leading-snug">I agree to the <a href="#" class="text-[#7F56D9] font-medium underline">privacy policy</a>.</label>
               </div>
               <p id="agreement-error" class="text-xs text-red-600 h-4"></p>

               <div>
                  <button type="submit" id="submit-button"
                     class="w-full rounded-lg bg-[#7F56D9] px-6 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-[#6B47C9] transition-all duration-200">
                     Send message
                  </button>
               </div>

            </form>

         </div>

      </div>
   </div>
</section>


<script>
   document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('contactFormFinal');
      if (!form) return;

      const submitButton = document.getElementById('submit-button');

      // Define all fields for validation
      const fields = {
         firstname: {
            el: document.getElementById('firstname'),
            errorEl: document.getElementById('firstname-error'),
            validate: (val) => val.trim() !== '',
            msg: 'Please enter your first name.'
         },
         lastname: {
            el: document.getElementById('lastname'),
            errorEl: document.getElementById('lastname-error'),
            validate: (val) => val.trim() !== '',
            msg: 'Please enter your last name.'
         },

         contact_number: {
            el: document.getElementById('contact_number'),
            errorEl: document.getElementById('contact_number-error'),
            validate: (val) => /^\d{10}$/.test(val),
            msg: 'Please enter a valid 10-digit number.'
         },
         comment: {
            el: document.getElementById('comment'),
            errorEl: document.getElementById('comment-error'),
            validate: (val) => val.trim() !== '',
            msg: 'Please enter your message.'
         },
         agreement: {
            el: document.getElementById('agreement'),
            errorEl: document.getElementById('agreement-error'),
            validate: (el) => el.checked,
            msg: 'You must agree to the privacy policy.'
         }
      };

      const showError = (field) => {
         if (field.errorEl) field.errorEl.textContent = field.msg;
         if (field.el) {
            field.el.classList.add('ring-red-500');
            field.el.classList.remove('ring-gray-300', 'focus:ring-purple-600');
         }
      };

      const hideError = (field) => {
         if (field.errorEl) field.errorEl.textContent = '';
         if (field.el) {
            field.el.classList.remove('ring-red-500');
            field.el.classList.add('ring-gray-300', 'focus:ring-purple-600');
         }
      };

      const validateField = (fieldName) => {
         const field = fields[fieldName];
         const value = field.el.type === 'checkbox' ? field.el : field.el.value;

         if (!field.validate(value)) {
            showError(field);
            return false;
         }
         hideError(field);
         return true;
      };

      // Add real-time validation feedback on input
      for (const fieldName in fields) {
         if (fields[fieldName].el) {
            const eventType = fields[fieldName].el.type === 'checkbox' ? 'change' : 'input';
            fields[fieldName].el.addEventListener(eventType, () => validateField(fieldName));
         }
      }

      form.addEventListener('submit', function(event) {
         event.preventDefault();

         let isFormValid = true;
         for (const fieldName in fields) {
            if (!validateField(fieldName)) {
               isFormValid = false;
            }
         }

         if (!isFormValid) {
            console.log('Client-side validation failed.');
            return;
         }

         // Form is valid — proceed with sending
         submitButton.disabled = true;
         submitButton.textContent = 'Sending...';

         const formData = new FormData(form);

         fetch(form.action, {
               method: 'POST',
               body: formData,
            })
            .then(response => response.json().then(data => ({
               status: response.status,
               body: data
            })))
            .then(({
               status,
               body
            }) => {
               if (status === 200 && body.status) {
                  Swal.fire({
                     icon: 'success',
                     title: 'Thank you!',
                     text: 'Your message has been sent successfully.',
                     confirmButtonColor: '#7F56D9'
                  });

                  form.reset(); // Clear the form

                  // Reset all validation states
                  for (const fieldName in fields) {
                     hideError(fields[fieldName]);
                  }

               } else if (body.errors) {
                  // Show server-side validation errors
                  for (const key in body.errors) {
                     if (fields[key]) {
                        // Override client message with server message
                        fields[key].msg = body.errors[key];
                        showError(fields[key]);
                     }
                  }
               } else {
                  // Generic error for other issues
                  Swal.fire({
                     icon: 'error',
                     title: 'Submission Failed',
                     text: body.message || 'Something went wrong. Please try again.',
                     confirmButtonColor: '#7F56D9'
                  });
               }
            })
            .catch(error => {
               console.error('Submission failed:', error);
               Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Could not connect to the server. Please check your connection and try again.',
                  confirmButtonColor: '#7F56D9'
               });
            })
            .finally(() => {
               submitButton.disabled = false;
               submitButton.textContent = 'Send Message';
            });
      });
   });
</script>


<footer class="bg-[#141A24] text-white text-sm font-[DM_Sans]">
   <div class="max-w-[1599px] mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 border-b border-white/10">

      <!-- About -->
      <div class="max-w-md">
         <h4 class="text-lg font-semibold mb-4">About SpyClass</h4>
         <p class="text-slate-300 leading-relaxed">
            SpyClass offers innovative tools for school management, enhancing productivity for educators, students, and administrators.
         </p>
         <!-- Optional social icons -->

         <div class="flex space-x-4 mt-6 text-[#8849AE]">
            <a href="#" aria-label="Twitter" class="hover:text-white"><i class="fab fa-twitter text-xl"></i></a>
            <a href="#" aria-label="Facebook" class="hover:text-white"><i class="fab fa-facebook-f text-xl"></i></a>
            <a href="#" aria-label="Instagram" class="hover:text-white"><i class="fab fa-instagram text-xl"></i></a>
            <a href="#" aria-label="GitHub" class="hover:text-white"><i class="fab fa-github text-xl"></i></a>
         </div>

      </div>

      <!-- Company -->
      <div>
         <h4 class="text-lg font-bold mb-4">Company</h4>
         <ul class="space-y-3 text-slate-300">
            <li><a href="<?= base_url(); ?>" class="hover:text-white transition">Home</a></li>
            <li><a href="<?= base_url('about-us'); ?>" class="hover:text-white transition">About</a></li>
            <li><a href="#contact-us" class="hover:text-white transition cursor-pointer">Contact</a></li>
         </ul>
      </div>

      <!-- Help -->
      <div>
         <h4 class="text-lg font-bold mb-4">Help</h4>
         <ul class="space-y-3 text-slate-300">
            <li><a href="<?= base_url('faq'); ?>" class="hover:text-white transition">FAQs</a></li>
            <li><a href="<?= base_url('terms-and-conditions'); ?>" class="hover:text-white transition">Terms & Conditions</a></li>
            <li><a href="<?= base_url('privacy-policy'); ?>" class="hover:text-white transition">Privacy Policy</a></li>
         </ul>
      </div>
   </div>

   <!-- Contact Info -->
   <div class="max-w-[1440px] mx-auto px-6 py-5 flex flex-col md:flex-row justify-between items-center gap-4">
      <div class="flex flex-wrap justify-center md:justify-start items-center gap-4 text-slate-300">
         <a href="tel:+919270085057" class="flex items-center gap-2 hover:text-white">
            <i class="fas fa-phone text-xl"></i> <span>+91 9270085057</span>
         </a>
         <span class="hidden sm:inline">|</span>
         <a href="tel:+919021348235" class="flex items-center gap-2 hover:text-white">
            <span>+91 9021348235</span>
         </a>
      </div>
      <div>
         <a href="mailto:sales@spyclass.co.in" class="flex items-center gap-2 hover:text-white text-slate-300">
            <i class="fas fa-envelope text-xl"></i> <span>sales@spyclass.co.in</span>
         </a>
      </div>
   </div>

   <!-- Footer Bottom -->
   <div class="bg-[#1D2636] py-4 mt-2">
      <div class="text-center text-slate-400 text-sm px-4">
         © 2024-2025, All Rights Reserved | Designed by
         <a href="https://zeplinix.com/" target="_blank" class="underline hover:text-white">Zeplinix Technologies Pvt Ltd</a>
      </div>
   </div>
</footer>


<!-- Preloader Section -->
<div id="preloader-active">
   <div class="preloader flex justify-center items-center">
      <div class="logo text-center jump">
         <img src="<?php echo base_url(); ?>/public/fassets/imgs/logos/SpyClass.png" alt="SpyClass Logo" class="mx-auto" />
         <h3 class="text-lg font-semibold">
            <b>S-</b>Secure <b>P-</b>Productive <b>Y-</b>YouthCentric
         </h3>
      </div>
   </div>
</div>


<style>
   #preloader-active {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(255, 255, 255, 0.9);
      z-index: 9999;
      overflow: hidden;
   }

   .preloader {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;
   }

   .logo {
      text-align: center;
      animation: jump 1s infinite;
   }

   .logo img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
   }

   .logo h3 {
      font-size: 1.2rem;
      line-height: 1.4;
      margin: 0;
   }

   @keyframes jump {
      0% {
         transform: translateY(0);
      }

      50% {
         transform: translateY(-10px);
      }

      100% {
         transform: translateY(0);
      }
   }
</style>


<!-- Vendor JS Scripts -->
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/waypoints.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/counterup.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/slick.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/wow.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/scrollup.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/smooth.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/textType.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/vendor/mobile-menu.js"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/main.js?v=2.0"></script>
<script src="<?php echo base_url(); ?>/public/fassets/js/custom.js?v=2.0"></script>

<!-- Prevent Right-Click & Developer Tools -->
<?php if (ENVIRONMENT === 'production'): ?>
   <script>
      document.addEventListener('contextmenu', function(e) {
         e.preventDefault();
      });

      document.addEventListener('copy', function(e) {
         e.preventDefault();
      });

      document.addEventListener('cut', function(e) {
         e.preventDefault();
      });

      document.addEventListener('keydown', function(e) {
         if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C')) || (e.ctrlKey && e.key === 'U')) {
            e.preventDefault();
         }
      });
   </script>

<?php endif; ?>
<script>
   function openModal(id) {
      const modal = document.getElementById(id);
      modal.classList.remove('hidden');
      setTimeout(() => {
         modal.classList.add('flex');
         modal.classList.remove('opacity-0', 'scale-95');
         modal.classList.add('opacity-100', 'scale-100');
      }, 10);
   }

   function closeModal(id) {
      const modal = document.getElementById(id);
      modal.classList.remove('opacity-100', 'scale-100');
      modal.classList.add('opacity-0', 'scale-95');
      setTimeout(() => {
         modal.classList.remove('flex');
         modal.classList.add('hidden');
      }, 200);
   }
</script>

<script type="text/javascript">
   window.addEventListener('load', function() {
      var Tawk_API = Tawk_API || {},
         Tawk_LoadStart = new Date();
      var s1 = document.createElement("script");
      s1.src = 'https://embed.tawk.to/685e94d26a55a6191184b734/1iuonalr8';
      s1.async = true;
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      document.body.appendChild(s1);
   });
</script>

<script>
   document.addEventListener('DOMContentLoaded', function() {
      var s1 = document.createElement("script");
      s1.src = "https://cdn.jsdelivr.net/npm/sweetalert2@11";
      s1.defer = true;
      document.body.appendChild(s1);
   });
</script>

<script>
   window.addEventListener("load", function() {
      const preloader = document.getElementById('preloader-active');
      if (preloader) {
         preloader.style.display = 'none';
      }
   });
</script>

</body>

</html>