<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SpyClass School ERP – A secure, scalable one-stop solution for digitalizing school operations. It Simplify administration, enhance communication & streamline management.</title>
   <meta name="description" content="SpyClass School ERP – The one-stop solution for digitalizing school operations with   Secure, scalable, and easy to use for administrators, teachers, students, and parents">
   <meta name="keywords" content="Indias top ERP Solution,Best Erp solution provider in Pune,Best Erp solution provider in India,Cloud-Based ERP Solutions,Private school erp management software in pune maharashtra,Best school erp management software in pune maharashtra,SpyClass School App ,SpyClass Parent App ,SpyClass cost-effective School ERP software">
   <meta name="author" content="Zeplinix Technologies">
   <meta name="robots" content="index, follow">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/public/fassets/imgs/logos/favicon.png" />
   <!-- Vendor CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/public/fassets/css/animate.min.css?v=2.0" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>/public/fassets/css/slick.css?v=2.0" />
   <!-- Template CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/public/fassets/css/tailwind-built.css?v=2.0" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>/public/fassets/css/custom.css?v=2.0" />
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

   <script type="text/javascript">
      var site_url = '<?php echo base_url(); ?>';
   </script>
   <style>
      body {
         user-select: none;
         -webkit-user-select: none;
      }
   </style>


</head>

<body class="bg-white text-body font-body">
   <div class="main">
      <!--Header-->
      <header class="bg-white sticky top-0 shadow-md z-50">
         <div
            class="container mx-auto max-w-[1440px] h-[82px] flex justify-between items-center px-4 sm:px-6 lg:px-8">
            <!-- Logo -->
            <a class="text-3xl font-semibold leading-none transition-all duration-300 transform hover:scale-105 hover:rotate-3" href="<?php echo base_url(); ?>">
               <img class="h-auto max-w-full transition-all duration-300 transform hover:scale-110 hover:rotate-6"
                  src="<?php echo base_url(); ?>/public/fassets/imgs/logos/SpyClass.png"
                  alt="SpyClass Logo"
                  style="width: 175px; transition: all 0.3s ease;" />
            </a>

            <!-- Desktop Navigation -->
            <?php $currentPage = service('uri')->getSegment(1); ?>
            <div class="hidden lg:flex space-x-2 xl:space-x-4">
               <a class="font-semibold py-2 px-4 rounded-lg <?= ($currentPage == '') ? 'text-purple-700 font-bold  bg-purple-100' : 'text-gray-700 hover:bg-gray-100'; ?>" href="<?php echo base_url(); ?>">Home</a>
               <a class="font-semibold py-2 px-4 rounded-lg <?= ($currentPage == 'about-us') ? 'text-purple-700 font-bold  bg-purple-100' : 'text-gray-700 hover:bg-gray-100'; ?>" href="<?php echo base_url('about-us'); ?>">About Us</a>
               <a class="font-semibold py-2 px-4 rounded-lg bg-purple-700 text-white cursor-pointer" onclick="openModal('contactModal')">Contact Us</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
               <button
                  class="navbar-burger flex items-center py-2 px-3 text-purple-700 border border-purple-700 rounded-md">
                  <svg class="fill-current h-5 w-5" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <title>Mobile menu</title>
                     <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                  </svg>
               </button>
            </div>
         </div>
      </header>
      <!--Mobile menu-->
      <div class="hidden navbar-menu relative z-50 transition duration-300">
         <div class="navbar-backdrop fixed inset-0 bg-blueGray-800 opacity-25"></div>
         <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto transition duration-300">
            <div class="flex items-center mb-8">
               <a class="mr-auto text-3xl font-semibold leading-none" href="<?php echo base_url(); ?>">
                  <img class="h-10-0" src="<?php echo base_url(); ?>/public/fassets/imgs/logos/SpyClass.svg" style="width: 250px !important" alt="spy class logo" />
               </a>
               <button class="navbar-close">
                  <svg class="h-6 w-6 text-blueGray-400 cursor-pointer hover:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
               </button>
            </div>
            <div class="flex flex-col space-y-3">
               <a class="font-semibold py-2 px-4 rounded-full <?= ($currentPage == '') ? 'bg-purple-700 text-white' : 'text-gray-700 hover:bg-gray-100'; ?>" href="<?php echo base_url(); ?>">Home</a>
               <a class="font-semibold py-2 px-4 rounded-full <?= ($currentPage == 'about-us') ? 'text-purple-700 font-bold  bg-purple-100' : 'text-gray-700 hover:bg-gray-100'; ?>" href="<?php echo base_url('about-us'); ?>">About Us</a>
               <a class="font-semibold py-2 px-4 rounded-lg bg-purple-700 text-white cursor-pointer" onclick="openModal('contactModal')">Contact Us</a>
            </div>
            <div class="mt-auto flex space-x-3">
               <a href="#"><img src="<?php echo base_url(); ?>/public/fassets/imgs/icons/facebook-blue.svg" alt="Facebook" /></a>
               <a href="#"><img src="<?php echo base_url(); ?>/public/fassets/imgs/icons/twitter-blue.svg" alt="Twitter" /></a>
               <a href="#"><img src="<?php echo base_url(); ?>/public/fassets/imgs/icons/instagram-blue.svg" alt="Instagram" /></a>
            </div>
         </nav>
      </div>

      <!-- contact us model -->

      <!-- Contact Us Modal -->
      <div id="contactModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 opacity-0 scale-95 transition-all duration-300 ease-out">
         <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
            <div class="flex justify-between items-center border-b pb-2 mb-4">
               <h3 class="text-lg font-semibold text-purple-700">Contact Us</h3>
               <button onclick="closeModal('contactModal')" class="text-2xl font-bold text-gray-800 hover:text-purple-700 transition-transform duration-200 transform hover:scale-110">
                  &times;
               </button>
            </div>
            <form id="contactForm" class="space-y-4">
               <input type="text" name="name" placeholder="Your Name" required class="w-full border rounded px-3 py-2">
               <input type="text" name="school_name" placeholder="Institute Name" required class="w-full border rounded px-3 py-2">
               <input type="email" name="email" placeholder="Email Address" required class="w-full border rounded px-3 py-2">
               <input type="text" name="mobile" placeholder="Mobile" required class="w-full border rounded px-3 py-2">
               <textarea name="message" rows="3" placeholder="Your message" required class="w-full border rounded px-3 py-2"></textarea>
               <button type="submit" class="w-full bg-purple-700 text-white py-2 rounded hover:bg-purple-800">Send Message</button>
            </form>
         </div>
      </div>

      <!-- Pricing Modal -->
      <div id="pricingModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 opacity-0 scale-95 transition-all duration-300 ease-out">
         <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
            <div class="flex justify-between items-center border-b pb-2 mb-4">
               <h3 class="text-lg font-semibold text-purple-700">Get Pricing</h3>
               <button onclick="closeModal('pricingModal')" class="text-gray-400 hover:text-purple-700">&times;</button>
            </div>
            <p class="text-sm text-gray-500 mb-4 text-center">Get the best plan for your school’s needs.</p>
            <form id="pricingForm" class="space-y-4">
               <input type="text" id="schoolName" placeholder="School Name" required class="w-full border rounded px-3 py-2">
               <input type="email" id="email" placeholder="Your Email" required class="w-full border rounded px-3 py-2">
               <input type="tel" id="contactNumber" placeholder="Contact Number" required class="w-full border rounded px-3 py-2">
               <select id="subscriptionPlan" class="w-full border rounded px-3 py-2">
                  <option value="basic">Basic</option>
                  <option value="standard">Standard</option>
                  <option value="premium">Premium</option>
               </select>
               <button type="submit" class="w-full bg-purple-700 text-white py-2 rounded hover:bg-purple-800">Get Pricing Details</button>
            </form>
         </div>
      </div>

      <!--Hero-->