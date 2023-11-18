<?php require_once 'Header.php';?>

<?php

   if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'upload')

   {	 	
if(hash_equals($csrf, $_POST['pritz']))
        {
        $name1 = mysqli_real_escape_string($connect, $_POST['name1']);

        $name1 = htmlentities($name1);



        $name2 = mysqli_real_escape_string($connect, $_POST['name2']);

        $name2 = htmlentities($name2);



        $name3 = mysqli_real_escape_string($connect, $_POST['name3']);

        $name3 = htmlentities($name3);



        $name4 = mysqli_real_escape_string($connect, $_POST['name4']);

        $name4 = htmlentities($name4);





        $date = date("d-F-Y");



          $sql = "INSERT INTO counter (Name1,Name2,Name3,Name4,Date) VALUES ('$name1','$name2','$name3','$name4','$date')";

          if (mysqli_query($connect, $sql)) {

            if(mysqli_affected_rows($connect) >0 ){

            echo'<div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">

            <strong>Uploaded Successfully</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

              <span aria-hidden="true">&times;</span>

            </button>

          </div>';

            }

            else {

                echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">

            <strong>Please try again</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

              <span aria-hidden="true">&times;</span>

            </button>

          </div>';

              }

          

        } else {

            echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">

            <strong>Server busy</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

              <span aria-hidden="true">&times;</span>

            </button>

          </div>';         }

        mysqli_close($connect);
}
    else{
       
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">

        <strong>TOKEN INVALID </strong>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>';
    }

   }

?>

 

                            <div class="container">

                            <!-- Page Heading -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h1 class="h3 mb-0 text-gray-800">Upload Counters</h1>

</div>

                                <div class="card mb-4">

                                    <div class="card-header text-white">

                                        <i class="fas fa-chart-area mr-1"></i>

                                        </strong> Counter</strong>

                                    </div>

                                    <form method="post" action="Counter" enctype="multipart/form-data" style="padding:10px;">

                                              <div class="form-group">

                                                <label for="exampleFormControlInput1">Number of Species</label>

                                                <input type="text" name="name1" onkeyup="lettersOnly(this)" class="form-control" pattern="[0-9]+" required >

                                            </div>

                                            <div class="form-group">

                                                <label for="exampleFormControlInput1">Number of Staffs</label>

                                                <input type="text" name="name2" onkeyup="lettersOnly(this)" class="form-control" pattern="[0-9]+" required   >

                                            </div>

                                            <div class="form-group">

                                                <label for="exampleFormControlInput1">Number of Flowers</label>

                                                <input type="text" name="name3" onkeyup="lettersOnly(this)"  class="form-control"  pattern="[0-9]+"required   >

                                            </div>

                                            <div class="form-group">

                                                <label for="exampleFormControlInput1">Number of Awards</label>
<input type="hidden" name="pritz" value="<?php echo $csrf; ?>">

                                                <input type="text" name="name4" onkeyup="lettersOnly(this)"  class="form-control" pattern="[0-9]+"required  >

                                            </div>



                                            <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-primary" id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>



 `                                           

                                            </form>



                                 </div>

                                 </div>

                       

<?php require_once 'Footer.php';?>