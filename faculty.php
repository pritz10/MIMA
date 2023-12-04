<?php
$title = "Faculty";
require_once 'include/header.php'; ?>

      <div class="inner_page-banner">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li style="color:blanchedalmond">
                  <a href="index">Home</a>
                  <span>/</span>
               </li>
               <li style="color:blanchedalmond">Faculty</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--about-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         

  

      <div class="album py-5 bg-light">
      <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact Us</h3>

        <div class="container">

          <div class="row">

          <?php

$sql="SELECT * FROM staff where Category= 'Mim' ORDER BY Knox;";

$result = mysqli_query($connect,$sql); // fetch data from database

  if(mysqli_num_rows($result) > 0)  

  {  

      while($data = mysqli_fetch_array($result))  

      {                

  ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo $data['ImageUrl']; ?>" alt="Card image cap">
                <div class="card-body">
                <h4 class="mt-3" style="font-family: 'Times New Roman', Times, serif;"><?php echo $data['Name']; ?></h4>
                <h5 class="mt-3" style="font-family: 'Times New Roman', Times, serif;"><?php echo $data['Designation']; ?></h5>
                
                  <p class="card-text" style="font-family: 'Times New Roman', Times, serif;"><?php echo $data['Email']; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
 
                      <a href="<?php echo $data['Flink']; ?>" class="btn btn-sm btn-outline-secondary" style="
    background: royalblue;
    color: white;"><span class="fab fa-facebook-f"></span></a>
                      <a href="<?php echo $data['Ilink']; ?>" class="btn btn-sm btn-outline-secondary" style="
    background: red;
    color: white;"><span class="fab fa-youtube"></span></a>
                    </div>
                    <small class="text-muted"> <strong> <a href="tel:<?php echo $data['Phone']; ?>"><?php echo $data['Phone']; ?></a></strong> </small>

                   </div>
                </div>
              </div>
            </div>
            
             
             
         
            <?php

}}

  else

  {

    echo" No data";

  }?>

            
          
          </div>
        </div>
      </div>

    </main>

      </section>
      <?php require_once 'include/footer.php';?>