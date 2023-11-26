<?php
$title = "Contact Us";
require_once 'include/header.php'; ?>

      <div class="inner_page-banner">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li style="color:blanchedalmond">
                  <a href="index.php">Home</a>
                  <span>/</span>
               </li>
               <li style="color:blanchedalmond">Contact Us</li>
            </ul>
         </div>
      </div>      
      
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact Us</h3>
            <div class="agile-info-para">
               <div class=" contact-wls-detail">
                  <div class="contact-form pb-lg-3 pb-2">
                     <form>
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Name">
                           </div>
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="email" class="form-control" placeholder="Email">
                           </div>
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Phone">
                           </div>
                        </div>
                        <div class="form-group contact-forms">
                           <textarea class="form-control" placeholder="Meassage" ></textarea>
                        </div>
                        <button type="button" class="btn sent-butnn btn-lg ">Send</button>
                     </form>
                  </div>
                  <div class="row contactright my-lg-4 my-3">
                     <div class="col-lg-4 col-md-4 footer_grid_left text-center">
                        <div class="contact_footer_grid_left text-center mb-3">
                           <h5> Address</h5>
                        </div>
                        <p>Melbourne st,south Brisbane, <br>QLD 4101,Aurstralia.</p>
                     </div>
                     <div class="col-lg-4 col-md-4 footer_grid_left text-center">
                        <div class="contact_footer_grid_left text-center mb-3">
                           <h5>Phone</h5>
                        </div>
                        <p>+(000) 123 4565 32 <br>+(010) 123 4565 354</p>
                     </div>
                     <div class="col-lg-4 col-md-4 footer_grid_left text-center">
                        <div class="contact_footer_grid_left text-center mb-3">
                           <h5>Email</h5>
                        </div>
                        <p><a href="mailto:info@example.com">info@example1.com</a> 
                           <br><a href="mailto:info@example.com">info@example2.com</a>
                        </p>
                     </div>
                  </div>
                  <div class="address_mail_footer_grids pt-lg-4 pt-3">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//contact  -->
      <?php require_once 'include/footer.php';?>