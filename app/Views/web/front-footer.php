<footer class="bg-[#141A24] text-white">
   <div class="container mx-auto py-8 sm:py-10 lg:py-12 px-4 sm:px-6 lg:px-8 max-w-[1599px] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10 lg:gap-12">
      <!-- About SpyClass Section -->
      <div class="max-w-[396px]">
         <h4 class="font-semibold text-lg leading-6 mb-4 text-white">About SpyClass</h4>
         <p class="text-slate-200 text-sm leading-[22px] mb-4">
            SpyClass offers innovative tools for school management, enhancing productivity for educators, students, and administrators.
         </p>
         <!-- <div class="flex mt-6 space-x-6">
            <a href="#" class="text-[#8849AE] hover:text-white transition duration-300 ease-in-out">
               <i class="fab fa-twitter fa-lg"></i>
            </a>
            <a href="#" class="text-[#8849AE] hover:text-white transition duration-300 ease-in-out">
               <i class="fab fa-facebook-f fa-lg"></i>
            </a>
            <a href="#" class="text-[#8849AE] hover:text-white transition duration-300 ease-in-out">
               <i class="fab fa-instagram fa-lg"></i>
            </a>
            <a href="#" class="text-[#8849AE] hover:text-white transition duration-300 ease-in-out">
               <i class="fab fa-github fa-lg"></i>
            </a>
         </div> -->
      </div>

      <!-- Company Links Section -->
      <div>
         <h4 class="font-bold text-lg leading-6 mb-4 text-white">Company</h4>
         <ul class="space-y-2">
            <li><a href="<?php echo base_url(); ?>" class="text-slate-200 hover:text-white transition duration-300 text-sm">Home</a></li>
            <li><a href="<?php echo base_url('about-us'); ?>" class="text-slate-200 hover:text-white transition duration-300 text-sm">About</a></li>
            <li><a onclick="openModal('contactModal')" class="cursor-pointer text-slate-200 hover:text-white transition duration-300 text-sm">Contact</a></li>
         </ul>
      </div>

      <!-- Help Section -->
      <div>
         <h4 class="font-bold text-lg leading-6 mb-4 text-white">Help</h4>
         <ul class="space-y-2">
            <li><a href="<?php echo base_url('faq'); ?>" class="text-slate-200 hover:text-white transition duration-300 text-sm">FAQ's</a></li>
            <li><a href="<?php echo base_url('terms-and-conditions'); ?>" class="text-slate-200 hover:text-white transition duration-300 text-sm">Terms & Conditions</a></li>
            <li><a href="<?php echo base_url('privacy-policy'); ?>" class="text-slate-200 hover:text-white transition duration-300 text-sm">Privacy Policy</a></li>
         </ul>
      </div>
   </div>

   <div class="bg-[#141A24] mt-4 border-t border-white max-w-[1440px] h-auto mx-auto px-6 pt-3 text-white text-sm">
      <div class="flex flex-col md:flex-row items-center justify-between">

         <div class="flex flex-row flex-wrap justify-center md:justify-start items-center gap-x-4 gap-y-2">
            <a href="tel:+919270085057" class="hover:text-gray-300 transition duration-300 ease-in-out flex items-center gap-1.5 whitespace-nowrap">
               <i class="fas fa-phone text-2xl"></i>
               <span class="font-['DM_Sans'] font-normal text-[15px]">+91 9270085057</span>
            </a>
            <span class="hidden sm:inline text-white text-sm">|</span>
            <a href="tel:+919021348235" class="hover:text-gray-300 transition duration-300 ease-in-out flex items-center gap-1.5 whitespace-nowrap">
               <span class="font-['DM_Sans'] font-normal text-[15px]">+91 9021348235</span>
            </a>
         </div>

         <div class="flex justify-center md:justify-center">
            <a href="mailto:sales@spyclass.co.in" class="hover:text-gray-300 transition duration-300 ease-in-out flex items-center gap-2">
               <i class="fas fa-envelope text-2xl"></i>
               <span class="font-['DM_Sans'] font-normal text-[15px]">sales@spyclass.co.in</span>
            </a>
         </div>
      </div>
   </div>

   <!-- Footer Bottom Section -->
   <div class="bg-[#1D2636] py-4 mt-8">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
         <p class="font-['DM_Sans'] font-normal text-sm sm:text-base leading-normal text-center text-white-600">
            © 2024-2025, All Rights Reserved | Designed by
            <a href="https://zeplinix.com/" target="_blank" class="underline hover:text-gray-300 transition duration-300 ease-in-out">
               Zeplinix Technologies Pvt Ltd
            </a>
         </p>

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
</body>

</html>