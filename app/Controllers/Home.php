<?php

namespace App\Controllers;

use App\Models\CommonModel;
use App\Models\UsersModel;
use App\Models\UserRoleModel;
use App\Models\Master_model;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
   public $data = array();
   use ResponseTrait;
   public function __construct()
   {
      $this->data = (new CommonModel())->prepareToasterData();
      $this->data['menu'] = 'navUsers';
   }

   function index()
   {
      $data['pagetitle'] = 'SpyClass | Site currently offline';

      /*return view('web/home', $this->data);*/
      echo view('web/front-header', $data);
      echo view('web/home', $data);
      echo view('web/front-footer', $data);
   }
   public function submitForm()
   {
      if ($this->request->isAJAX()) {
         $name           = $this->request->getPost('name');
         $email          = $this->request->getPost('email');
         $message        = $this->request->getPost('message');
         $school_name    = $this->request->getPost('school_name');
         $mobile         = $this->request->getPost('mobile');


         // Basic validation
         if (empty($name) || empty($email) || empty($message)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'All fields are required']);
         } else {
            $subject = "New inquiry from spyclass web portal";
            $subjectUser = "Thanks for inquiry about spyclass";
            $messageToAdmin = '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Spyclass web portal email</title>
                </head>
                <body style="font-family: Arial, sans-serif; color: #333;line-height:1.5">
                    <p>Hey Admin, </p>
                    <p>We have inquiry from spyclass having follwing details</p>
                    <p>' . $name . ',</p>
                    <p>' . $mobile . ',</p>
                    <p>' . $school_name . '</p>
                    <p>' . $message . '</p>
                    <br>
                    <p>Best regards,</p>
                    <p>
                      ' . $name . '
                    </p>
                </body>
                </html>';

            $messageToUser = '<!DOCTYPE html>
<html>
   <head> <title>Spy Class Email Template</title> </head>
   <body  style="margin: 0;padding: 0;font-family: Arial, sans-serif; background-color: #565656;" >
      <table width="100%" border="0" cellspacing="0" cellpadding="0" 
      style="  background: url(' . base_url() . '/public/images/backgroundgrid.png);
         background-repeat: no-repeat; background-size: contain; background-color: #ffffff; max-width: 600px;
         margin: auto;
         border-radius: 10px;
         box-shadow: #000000;
         "
         >
         <tr>
            <td style="padding-left: 40px; padding-top: 20px; text-align: left">
               <img
                  src="' . base_url() . '/public/images/logo.svg"
                  alt="Spy Class Logo"
                  style="max-width: 150px"
                  />
            </td>
         </tr>
         <tr>
            <td style="text-align: center">
               <img src="' . base_url() . '/public/images/banner.png" alt="Spy Class Logo" width="450px" />
            </td>
         </tr>
         <tr class="">
            <td style="padding-left: 40px; padding-right: 20px; padding-top: 20px; text-align: left;">
               <div style="position: relative; display: flex">
                  <h2 style="color: #333; font-size: 32px; line-height: 40px">
                     Thanks for Your Time
                     <span style="color: #6a1b9a; font-style: italic; font-weight: 200"
                        >' . $name . '! <br />
                     Here’s What’s Next
                     </span>
                  </h2>
                  <img
                     src="' . base_url() . '/public/images/illustrator.svg"
                     alt=""
                     style="padding-top: 50px"
                     />
               </div>
            </td>
         </tr>
         <tr>
            <td style="padding-left: 40px; padding-right: 40px; color: #333">
               <p style="color: #333333">Dear ' . $name . ',</p>
               <p style="color: #64748b">
                  Thank you for taking the time to connect with us today! We truly
                  appreciate the opportunity to discuss how SpyClass ERP can help
                  streamline your school’s operations.
               </p>
            </td>
         </tr>
         <tr>
            <td style="padding-left: 40px; padding-right: 40px">
               <h3>Key Takeaways from Our Meeting/Demo:</h3>
            </td>
         </tr>
         <tr>
            <td>
         <tr>
            <td style="padding-left: 40px; padding-right: 40px">
               <div
                  style="
                  border-radius: 10px;
                  border: 1px solid #cbd5e1;
                  padding-left: 5px;
                  "
                  >
                  <table
                     cellspacing="0"
                     cellpadding="10"
                     style="width: 100%; max-width: 600px"
                     >
                     <!-- Item 2 -->
                     <tr>
                        <td style="vertical-align: top">
                           <table cellspacing="0" cellpadding="0">
                              <tr>
                                 <td>
                                    <img src="' . base_url() . '/public/images/list.svg" alt="" />
                                 </td>
                                 <td style="padding-left: 10px">
                                    <span style="color: #6b7280; font-size: 12px"
                                       >Automated student management will save you hours
                                    of administrative work.</span
                                       >
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                     <!-- Item 3 -->
                     <tr>
                        <td style="vertical-align: top">
                           <table cellspacing="0" cellpadding="0">
                              <tr>
                                 <td>
                                    <img src="' . base_url() . '/public/images/list.svg" alt="" />
                                 </td>
                                 <td style="padding-left: 10px">
                                    <span style="color: #6b7280; font-size: 12px"
                                       >We also covered how easy it is to migrate your
                                    existing data into SpyClass ERP.</span
                                       >
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                     <!-- Item 4 -->
                     <tr>
                        <td style="vertical-align: top">
                           <table cellspacing="0" cellpadding="0">
                              <tr>
                                 <td>
                                    <img src="' . base_url() . '/public/images/list.svg" alt="" />
                                 </td>
                                 <td style="padding-left: 10px">
                                    <span style="color: #6b7280; font-size: 12px"
                                       >We also covered how easy it is to migrate your
                                    existing data into SpyClass ERP.</span
                                       >
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
               </div>
            </td>
         </tr>
         </td>
         </tr>
         <tr>
            <td style="padding-left: 40px; padding-right: 40px">
               <h3>Next Steps:</h3>
            </td>
         </tr>
         <tr>
            <td>
         <tr>
            <td style="padding-left: 40px; padding-right: 40px">
               <div
                  style="
                  border-radius: 10px;
                  border: 1px solid #cbd5e1;
                  padding-left: 5px;
                  "
                  >
                  <table
                     cellspacing="0"
                     cellpadding="10"
                     style="width: 100%; max-width: 600px"
                     >
                     <!-- Item 2 -->
                     <tr>
                        <td style="vertical-align: top">
                           <table cellspacing="0" cellpadding="0">
                              <tr>
                                 <td>
                                    <img src="' . base_url() . '/public/images/list.svg" alt="" />
                                 </td>
                                 <td style="padding-left: 10px">
                                    <span style="color: #6b7280; font-size: 12px"
                                       >Have more questions? Feel free to reach out—we’d
                                    be happy to clarify anything.</span
                                       >
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                     <!-- Item 3 -->
                     <tr>
                        <td style="vertical-align: top">
                           <table cellspacing="0" cellpadding="0">
                              <tr>
                                 <td>
                                    <img src="' . base_url() . '/public/images/list.svg" alt="" />
                                 </td>
                                 <td style="padding-left: 10px">
                                    <span style="color: #6b7280; font-size: 12px"
                                       >Ready to explore further? Start a free trial and
                                    see SpyClass ERP in action!
                                    <a
                                       href=""
                                       style="text-decoration: none; color: #6a1b9a"
                                       >[Insert Free Trial Link]</a
                                       ></span
                                       >
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                     <!-- Item 4 -->
                     <tr>
                        <td style="vertical-align: top">
                           <table cellspacing="0" cellpadding="0">
                              <tr>
                                 <td>
                                    <img src="' . base_url() . '/public/images/list.svg" alt="" />
                                 </td>
                                 <td style="padding-left: 10px">
                                    <span style="color: #6b7280; font-size: 12px"
                                       >Want to move forward? Let’s discuss a tailored
                                    implementation plan for your school.
                                    <a
                                       href=""
                                       style="text-decoration: none; color: #6a1b9a"
                                       >
                                    [Insert Scheduling Link]</a
                                       ></span
                                       >
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
               </div>
            </td>
         </tr>
         </td>
         </tr>
         <tr>
            <td
               style="
               padding-top: 40px;
               padding-left: 40px;
               padding-right: 40px;
               text-align: center;
               "
               >
               <a
                  href="#"
                  style="
                  background-color: #6a1b9a;
                  color: #fff;
                  padding: 10px 150px;
                  text-decoration: none;
                  border-radius: 15px;
                  font-weight: bold;
                  "
                  >Grab the Offer Now ! →</a
                  >
            </td>
         </tr>
         <tr>
            <td
               style="
               padding-left: 40px;
               padding-right: 40px;
               padding-top: 10px;
               text-align: left;
               "
               >
               <p style="margin: 0px; margin-top: 10px; margin-bottom: 2px">
                  <a href="#" style="color: #64748b; text-decoration: none"
                     >Looking forward to helping your institution succeed!
                  </a>
               </p>
            </td>
         </tr>
         <tr style="border-bottom: 1px solid #525252">
            <td
               style="
               padding-left: 40px;
               padding-right: 40px;
               text-align: left;
               border-bottom: #333333/50;
               "
               >
               <p
                  style="
                  margin: 0;
                  color: #333333;
                  border-bottom: 1px solid #cbd5e1;
                  padding-bottom: 20px;
                  "
                  >
                  Best Regards,<br />SpyClass Team
               </p>
            </td>
         </tr>
         <tr
            style="
            background: url(' . base_url() . '/public/images/footergrid.png);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            font-size: 12px;
            "
            >
            <td
               style="
               padding-left: 40px;
               padding-right: 40px;
               text-align: left;
               border-bottom: #333333/50;
               "
               >
               <div
                  style="
                  display: flex;
                  gap: 15px;
                  align-items: start;
                  margin-top: 15px;
                  "
                  >
                  <img src="' . base_url() . '/public/images/location.svg" alt="" />
                  <p style="margin: 0">
                     310, Tower 1, World Trade Center,<br />
                     Kharadi, Pune - 411014 <br />Email - info@zeplinix.com<br />Call : +91 9021348235 / +91 9270085057
                  </p>
               </div>
               <div
                  style="
                  display: flex;
                  gap: 15px;
                  align-items: center;
                  margin-top: 15px;
                  "
                  >
                  <img src="' . base_url() . '/public/images/world.svg" alt="" />
                  <a style="margin: 0; color: #6a1b9a"> www.spyclass.co.in </a>
               </div>
               <div
                  style="
                  display: flex;
                  justify-content: space-between;
                  margin-bottom: 20px;
                  "
                  >
                  <div
                     style="
                     display: flex;
                     gap: 10px;
                     margin-top: 40px;
                     margin-bottom: 20px;
                     "
                     >
                     <img src="' . base_url() . '/public/images/instagram.svg" alt="" />
                     <img src="' . base_url() . '/public/images/facebook.svg" alt="" />
                     <img src="' . base_url() . '/public/images/linkedin.svg" alt="" />
                     <img src="' . base_url() . '/public/images/youtube.svg" alt="" />
                     <img src="' . base_url() . '/public/images/twitter.svg" alt="" />
                  </div>
                  <div><img src="' . base_url() . '/public/images/flower.svg" alt="" /></div>
               </div>
            </td>
         </tr>
          
         <tr>
            <td style="padding-top: 20px"></td>
         </tr>
      </table>
   </body>
</html>';
            $adminEmail = 'support@zeplinix.com';
            /*$bMailStatus = (new Master_model())->fSendMail($invoiceEmailId, $message, $subject, $invoiceFilePath);*/
            $bMailStatus = (new Master_model())->fSendMail($email, $name, $messageToUser, $subjectUser, 'sales@spyclass.co.in', $invoiceFilePath = NULL);
            $bMailStatus = (new Master_model())->fSendMail($adminEmail, $name, $messageToAdmin, $subject, 'sales@spyclass.co.in', $invoiceFilePath = NULL);
            if (!$bMailStatus) {
               return $this->response->setJSON([
                  'status' => 'error',
                  'message' => 'Failed to send the invoice.'
               ]);
            }

            return $this->response->setJSON([
               'status' => 'success',
               'message' => 'inquiry sent successfully.'
            ]);
         }

         // Process form (store in DB, send email, etc.)
         // Example: Save to database (if you have a model)

         /*return $this->response->setJSON(['status' => 'success', 'message' => 'Form submitted successfully']);*/
      }

      return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request']);
   }
   public function offline()
   {
      $data['pagetitle'] = 'SpyClass | Site currently offline';
      echo view('web/offline-view', $data);
   }

   public function aboutus()
   {
      $data = array();
      echo view('web/front-header', $data);
      echo view('web/about-us', $data);
      echo view('web/front-footer', $data);
   }
   public function enquiry()
   {
      $data = array();
      echo view('web/front-header', $data);
      echo view('web/enquiry', $data);
      echo view('web/front-footer', $data);
   }
   public function termsc()
   {
      $data = array();
      echo view('web/front-header', $data);
      echo view('web/termsc', $data);
      echo view('web/front-footer', $data);
   }
   public function refund()
   {
      $data = array();
      echo view('web/front-header', $data);
      echo view('web/refund', $data);
      echo view('web/front-footer', $data);
   }
   public function privacypolicy()
   {
      $data = array();
      echo view('web/front-header', $data);
      echo view('web/privacypolicy', $data);
      echo view('web/front-footer', $data);
   }


   public function pages($slug)
   {

      $data = array();
      $data['pagedata'] = $this->master_model->getRecords('tbl_front_page', array('page_slug' => $slug, 'front_status' => '1', 'is_static' => '0'));
      echo view('web/front-header', $data);
      echo view('web/dynamic-pages', $data);
      echo view('web/front-footer', $data);
   }
   public function privacy()
   {
      $data = array();
      echo view('web/front-header', $data);
      echo view('web/privacy', $data);
      echo view('web/front-footer', $data);
   }

/*************  ✨ Windsurf Command ⭐  *************/
   /**
    * Renders the FAQ page by loading the necessary views.
    *
    * This method sets up the data array and loads the front header,
    * FAQ content, and front footer views to display the Frequently
    * Asked Questions section of the website.
    */

/*******  2ac26489-5c5a-49bb-978c-146853cb38d7  *******/
   public function faq()
   {
      $data = array();
      echo view('web/front-header', $data);
      echo view('web/faq', $data);
      echo view('web/front-footer', $data);
   }
}
