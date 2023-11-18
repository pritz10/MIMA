<?php require_once 'Header.php';?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'upload')
    {
    $filename = $_FILES['myfile']['name'];
    
     // destination of the file on the server
    $destination = '../files/Images/Media/media'. $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpg','png','jpeg','gif','JPG','JPEG','PNG'])) {
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
            $sql = "INSERT INTO mediagallery (ImageUrl) VALUES ('./files/Images/Media/media$filename')";
            if (mysqli_query($connect, $sql)) {
                if(mysqli_affected_rows($connect) >0 ){
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
 
 
?>

  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Upload Media Cover</h1>
</div>
<div class="row">
<!-- Area Chart -->
    <div class="col-xl-7 col-lg-6">
    <div class="card shadow mb-4">
   <!-- Card Header - Accordion -->
    <a href="#messagedata" class="d-block card-header py-3" data-toggle="collapse"
     role="button" aria-expanded="true" aria-controls="as">
 <h6 class="m-0 font-weight-bold text-white">Upload Media Cover</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show " id="messagedata">
                                    <div class="card-body">
                                    <form method="post" action="media" enctype="multipart/form-data" style="padding:10px;">                                        
                                    <div class="form-group">
                                                <label for="h">Select Image</label>
                                                <input class="form-control" name="myfile" id="formFileLg"required onchange="readURL(this);" type="file">
                                    </div>
                                    <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-primary" id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
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
                
                <img id="blah" src="pr.png" class="img-fluid" alt="Image will appear here" />
                <script>
                    function readURL(input) 
                    {
                       

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
                        <i class="fas fa-circle text-primary"></i> Please check Image
                    </span>
                    
                </div>
            </div>
                                </div>
                            </div>
       
    </div>
</div>

<div class="card shadow mb-4">
    
    <a href="#dataprevious" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="dataprevious">
                                    <h6 class="m-0 font-weight-bold text-white">Previous Media</h6>
                                </a>
                                <div class="collapse" id="dataprevious">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        

                       

                    </tr>
                </thead>
                
               <tbody>
               <?php  
               
                    $sql = "SELECT * FROM mediagallery";  
                    $result = mysqli_query($connect, $sql);  

                    while($row = mysqli_fetch_assoc($result))  
                    {  ?>
                        <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><img  src=".<?php echo $row['ImageUrl']; ?>" class="img-thumbnail" alt="Image will appear here" /></td>
                        </tr>
                         
                        
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
 