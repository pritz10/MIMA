<?php require_once 'Header.php';?>

<?php

    if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'upload')

    {

    $filename = $_FILES['myfile']['name'];

    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $name = htmlentities($name);

    $designation = mysqli_real_escape_string($connect, $_POST['designation']);
    $designation = ($designation);

    $email =  mysqli_real_escape_string($connect,$_POST['email']);
    $email = htmlentities($email);

    $phone =  mysqli_real_escape_string($connect,$_POST['phone']);
    $phone = htmlentities($phone);

    $category =  mysqli_real_escape_string($connect,$_POST['category']);
    $category = htmlentities($category);

    $rank =  mysqli_real_escape_string($connect,$_POST['rank']);
    $rank = htmlentities($rank);

    $created_date = date("d-F-Y");
    $created_date = htmlentities($created_date);

    // destination of the file on the server

    $destination = '../files/Images/staff' . $filename;



    // get the file extension

    $extension = pathinfo($filename, PATHINFO_EXTENSION);



    // the physical file on a temporary uploads directory on the server

    $file = $_FILES['myfile']['tmp_name'];

    $size = $_FILES['myfile']['size'];



    if (!in_array($extension, ['jpg','png','jpeg','gif','JPG','PNG','JPEG'])) {

        echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">

        <strong>File extension ishould be JPG or PNG or the image is too big to handle.</strong>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>';

     } elseif ($_FILES['myfile']['size'] > 70000000) { // file shouldn't be larger than 20Megabyte

        echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">

        <strong>File too large! Compress the image and try again.</strong>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>';

     } else {

        // move the uploaded (temporary) file to the specified destination

        if (move_uploaded_file($file, $destination)) {

            $sql = "INSERT INTO staff (Name, Designation, Phone, Email,ImageUrl, Knox, Category,Date) VALUES ('$name','$designation','$phone','$email','./files/Images/staff$filename','$rank','$category','$created_date')";

            if (mysqli_query($connect, $sql)) {

                 echo'<div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">

                <strong>Successfully Uploaded.</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>

              </div>';       

             }

             else {

 

                 echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">

                <strong>Something went wrong, Please try again later</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>

              </div>';

             

            }

        } else {

             echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">

            <strong>Something went wrong, Please try again later</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

              <span aria-hidden="true">&times;</span>

            </button>

          </div>';

         }

    }

     

}

if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'update')

{

    $name = mysqli_real_escape_string($connect, $_POST['update_name']);
    $name = htmlentities($name);


    $rank =mysqli_real_escape_string($connect, $_POST['update_rank']);
    $rank = htmlentities($knox );


    $uid =mysqli_real_escape_string($connect, $_POST['id']);

    $category = mysqli_real_escape_string($connect,$_POST['category']);
    $category = htmlentities($category );


    $designation = mysqli_real_escape_string($connect,$_POST['update_designation']);
 


    $email =mysqli_real_escape_string($connect, $_POST['update_email']);
    $email = htmlentities($email );


    $phone =mysqli_real_escape_string($connect, $_POST['update_phone']);
    $phone = htmlentities($phone );


    $created_date = date("d-F-Y ");

    $sql = "UPDATE staff set Name='$name', Designation='$designation', Phone='$phone', Email='$email', Category='$category', Knox='$rank', Date='$created_date' where id='$uid'";

    if (mysqli_query($connect, $sql)) {

        if(mysqli_affected_rows($connect) >0 ){

 

        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">

        <i class="fas fa-save text-success"></i><strong> Successfully Updated.</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>

              </div>';

      }

        else {

            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">

            <strong>Something went wrong, Please try again later</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

              <span aria-hidden="true">&times;</span>

            </button>

          </div>';

         }

 

    }

    else {



        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">

        

        <strong>SERVER BUSY</strong>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>';

     }

     

} 

if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'delete')

{

     

    $uid = mysqli_real_escape_string($connect,$_POST['id']);   

    $sql = "DELETE FROM staff where Id='$uid'";

    if (mysqli_query($connect, $sql)) {

        if(mysqli_affected_rows($connect) >0 ){

        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">

        <i class="fas fa-trash text-danger"></i>    <strong>Successfully Deleted.</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>

              </div>';

        }

        else {

            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">

            <i class="fas fa-info text-danger"></i>  <strong>Something went wrong, Please try again later</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

              <span aria-hidden="true">&times;</span>

            </button>

          </div>';

         }

     }

    else {

        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">

        <i class="fas fa-info text-danger"></i>  <strong>SERVER BUSY</strong>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>';

     }

     

} 

?>



  <!-- Begin Page Content -->

  <div class="container-fluid">



<!-- Page Heading -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h1 class="h3 mb-0 text-gray-800">Staff List</h1>

</div>

<div class="row">

<!-- Area Chart -->

    <div class="col-xl-7 col-lg-6">

    <div class="card shadow mb-4">

   <!-- Card Header - Accordion -->

    <a href="#messagedata" class="d-block card-header py-3" data-toggle="collapse"

     role="button" aria-expanded="true" aria-controls="as">

 <h6 class="m-0 font-weight-bold text-white">New Staff</h6>

                                </a>

                                <!-- Card Content - Collapse -->

                                <div class="collapse show " id="messagedata">

                                    <div class="card-body">

                                    <form method="post" action="Staff" enctype="multipart/form-data" style="padding:10px;">                                        

  <div class="form-row">

    <div class="form-group col-md-6">

      <label for="inputEmail4">Name</label>

      <input type="text" name="name"   class="form-control" required onchange="readURL(this);" id="name">

    </div>

    <div class="form-group col-md-6">

      <label for="inputPassword4">Designation</label>

      <input type="text" name="designation" class="form-control" required onchange="readURL(this);" id="designation">

    </div>

  </div>

  <div class="form-row">

    <div class="form-group col-md-6">

      <label for="inputEmail4">Brief Description</label>
      <textarea class="form-control" name="email" onkeyup="lettersOnly(this)" required onchange="readURL(this);" id="email" rows="3" ></textarea>

 
    </div>

    <div class="form-group col-md-6">

      <label for="inputPassword4">Phone</label>

      <input type="text" name="phone"   class="form-control" placeholder="0987654321"   onchange="readURL(this);" id="phone">

    </div>

  </div>
  <div class="form-row">

<div class="form-group col-md-6">

  <label for="inputEmail4">Facebok Link</label>
  <textarea class="form-control" name="flink" onkeyup="lettersOnly(this)" required onchange="readURL(this);" id="email"  ></textarea>


</div>

<div class="form-group col-md-6">

<label for="inputEmail4">Instagram Link</label>
  <textarea class="form-control" name="ilink" onkeyup="lettersOnly(this)" required onchange="readURL(this);" id="email"  ></textarea>

</div>

</div>
  

  <div class="form-row">

    <div class="form-group col-md-6">

      <label for="inputCity">Photo</label>

      

      <input class="form-control" name="myfile" id="formFileLg" required onchange="readURL(this);" type="file">

    </div>

    <div class="form-group col-md-4">

      <label for="inputState">Category</label>

      <select id="inputState" name="category" required class="form-control">

 
                                      
      <option>Mim</option>
         

      </select>

    </div>

    <div class="form-group col-md-2">

      <label for="inputZip">Sequence</label>

      <input type="text" name="rank" onkeyup="lettersOnly(this)" class="form-control" required id="inputZip">

    </div>

  </div>



  <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-warning" id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>

</form>

    </div>

    </div>

    </div>

                             

        

    </div>



     <div class="col-xl-5 col-lg-6">

          <!-- Card Header - Accordion -->

          <div class="card shadow mb-4">

          <a href="#messagedata" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="as">

                                    <h6 class="m-0 font-weight-bold text-white">Live Preview</h6>

                                </a>

                                <!-- Card Content - Collapse -->

                                <div class="collapse show" id="messagedata">

                                     <!-- Card Body -->

            <div class="card-body">

                <h5 id="db"></h5>

                <p id="dab"></p>

                <p id="as"></p>

                <p id="asfs"></p>

                

                <img id="blah" src="user.png" class="img-fluid" alt="Image will appear here" />

                <script>

                    function readURL(input) 

                    {

                        add = $('input#name').val();

                        add2 = $('input#designation').val();

                        add3 = $('input#email').val();

                        add4 = $('input#phone').val();

                        $('h5#db').empty().html(add).show();

                        $('p#dab').empty().html(add2).show();

                        $('p#as').empty().html(add3).show();

                        $('p#asfs').empty().html(add4).show();



                        if (input.files && input.files[0]) {

                            var reader = new FileReader();

                            reader.onload = function (e) {

                                $('#blah')

                                    .attr('src', e.target.result)

                                    

                            };



                            reader.readAsDataURL(input.files[0]);

                                                }



                    }

                 </script>

                <div class="mt-4 text-center small">

                    <span class="mr-2">

                        <i class="fas fa-circle text-primary"></i> Please check the spellings and Image

                    </span>

                    

                </div>

            </div>

                                </div>

                            </div>

       

    </div>

</div>



<div class="card shadow mb-4">

    

    <a href="#dataprevious1" class="d-block card-header py-3" data-toggle="collapse"

                                    role="button" aria-expanded="true" aria-controls="dataprevious1">

                                    <h6 class="m-0 font-weight-bold text-white">Staff List</h6>

                                </a>

                                <div class="collapse" id="dataprevious1">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered" id="staff" width="100%" cellspacing="0">

                <thead>

                    <tr>

                        <th>Id</th>

                        <th>Name</th>

                        <th>Designation</th>

                        <th>Category</th>

                        <th>Date</th>                



                        <th>Action</th>                

                    </tr>

                </thead>

                <tfoot>

            <tr>

            <th>Id</th>

                        <th>Name</th>

                        <th>Designation</th>

                        <th>Category</th>

                        <th>Img</th>  

                        <th>Action</th>                   

                 

                    </tr>

        </tfoot>

               <tbody>

               <?php  

               

                    $sql = "SELECT * FROM staff ORDER BY Id DESC";  

                    $result = mysqli_query($connect, $sql);  



                    while($row = mysqli_fetch_assoc($result))  

                    {  ?>

                        <tr>

                        <td><?php echo $row['Knox']; ?></td>

                         <td><?php echo $row['Name']; ?></td>

                        <td><?php echo $row['Designation']; ?></td>



                         <td><?php echo $row['Category']; ?></td>

                         <td><img id="blah" src=".<?php echo $row['ImageUrl']; ?>" class="img-thumbnail" alt="Image will appear here" /></td>



                         <td><div class="btn-group" role="group" aria-label="Basic">

                         <a class='btn btn-outline-success btn-sm'data-toggle='modal' data-target='#update<?php echo $row['Id']; ?>'><i class='fas fa-pen'></i></a>

                         <a   class='btn btn-outline-danger btn-sm'data-toggle='modal' data-target='#delete<?php echo $row['Id']; ?>'><i class='fas fa-trash'></i></a>



                         </div></td>

                        </tr>





                         

                        <!-- Update Modal-->

                        <div class="modal fade" id="update<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

                            aria-hidden="true">

                            <div class="modal-dialog modal-lg" role="document">

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <h5 class="modal-title text-primary" id="exampleModalLabel">Edit Details</h5>

                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                                            <span aria-hidden="true">×</span>

                                        </button>

                                    </div>

                                    <div class="modal-body">

                                    <form method="post" action="Staff" enctype="multipart/form-data" style="padding:10px;">

                                    <div class="form-row">

                                    <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">

                                      <div class="form-group col-md-6">

                                        <label for="inputEmail4">Name</label>

                                        <input type="text" name="update_name" class="form-control" onkeyup="lettersOnly(this)" value="<?php echo $row['Name']; ?>" id="name">

                                      </div>

                                      <div class="form-group col-md-6">

                                        <label for="inputPassword4">Designation</label>

                                        <input type="text" name="update_designation" class="form-control"  value="<?php echo $row['Designation']; ?>" id="designation">

                                      </div>

                                    </div>

                                    <div class="form-row">

                                      <div class="form-group col-md-4">

                                        <label for="inputEmail4">Brief Description</label>

                                        <input type="email" name="update_email" class="form-control" onkeyup="lettersOnly(this)"  value="<?php echo $row['Email']; ?>" id="email">

                                      </div>

                                      

                                      <div class="form-group col-md-3">

                                        <label for="inputPassword4">Phone</label>

                                        <input type="text" name="update_phone" class="form-control" onkeyup="lettersOnly(this)"  value="<?php echo $row['Phone']; ?>" id="phone">

                                      </div>

                                      <div class="form-group col-md-3">

                                        <label for="inputState">Category</label>

                                        <select id="inputState" name="category" required class="form-control">

                                         
        <option>Mim</option>
  



                                  

                                        </select>

                                      </div>

                                      <div class="form-group col-md-2">

                                        <label for="inputZip">Sequence</label>

                                        <input type="text" name="update_rank" class="form-control" onkeyup="lettersOnly(this)"  value="<?php echo $row['Rank']; ?>">

                                      </div>

                                    </div>

                                        

                                    </div>

                                    <div class="modal-footer">

                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                                         <button type="submit" value="update"  name="submit" class="btn btn-success" id="upload-file"><i class="fa fa-save" aria-hidden="true"></i> Save changes</button>

                                        </div>

                                     </form>

                                </div>

                            </div>

                        </div>

                        <!-- Delete Modal-->

                        <div class="modal fade" id="delete<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="delete"

                                aria-hidden="true">

                                <div class="modal-dialog modal-lg" role="document">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <h5 class="modal-title text-primary" id="delete">Are you sure you want to delete?</h5>

                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                                                <span aria-hidden="true">×</span>

                                            </button>

                                        </div>

                                        <div class="modal-body text-danger">Select "Delete" below if you are ready to delete:<br> 

                                        <strong> <?php echo $row['Name']; ?> <br>

                                        

                                      

                                        <form method="post" action="Staff" enctype="multipart/form-data" style="padding:10px;">

                                         <div class="form-group">

                                             <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">

                                          </div> 

                                    <div class="modal-footer">

                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                                         <button type="submit" value="delete"  name="submit" class="btn btn-danger" id="upload-file"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>

                                    



                                        </div>

                                     </form>

                                         

                                    </div>

                                </div>

                            </div>

                            </div>

                        <?php 

                        }

                        ?>

               </tbody>

            </table>

        </div>

    </div>

</div>

</div>

 

<!-- /.container-fluid -->



</div>

<!-- End of Main Content -->

<?php require_once 'Footer.php'; ?>



