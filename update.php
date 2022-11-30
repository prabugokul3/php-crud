<?php
include_once 'connect.php';


if (isset($_POST['update'])) {
    $old_image = $_POST['upload_old'];
    // echo "$old_image";
    $new_image = $_FILES['uploadfile']['name'];
    $tempname = $_FILES["uploadfile"]["tmp_name"];

    // echo "$new_image";
    $folder = "./image/" . $new_image;


    if ($new_image != '') {
        $update_filename = $_FILES["uploadfile"]["name"];
    } else {
        $update_filename = $old_image;
        // echo "$update_filename";
    }

    if (move_uploaded_file($tempname, $folder)) {
        echo "<h5> Image uploaded successfully!</h5>";
    } 
    
    mysqli_query($conn, "UPDATE myguests set id='" . $_POST['id'] . "', product='" . $_POST['product'] . "', seller='" . $_POST['seller'] . "', price='" . $_POST['price'] . "' , quantity='" . $_POST['quantity'] . "' , gst='" . $_POST['gst'] . "' , address='" . $_POST['address'] . "' ,email='" . $_POST['email'] . "', mobilenumber='" . $_POST['mobilenumber'] . "', filename='$update_filename'  WHERE id='" . $_POST['id'] . "'");

    $message = "<h5>Record Modified Successfully!</h5>";
}
$result = mysqli_query($conn, "SELECT * FROM MyGuests WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);


?>


<html>

<head>
    <link rel="stylesheet" href="sys.css">
    <script src="https://kit.fontawesome.com/38fda32e13.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />


</head>

<body>
    <!-- <div class="container-fluid"> -->
    <div class=" nav">
        <span>Administration</span>
        <ul>
            <li><i class="fa-solid fa-user"></i> Admin</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-2 sub">
            <div class="wrapper">
                <div class="sidebar">
                    <ul>
                        <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                        <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                        <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>

                    </ul>

                </div>
            </div>
        </div>

        <div class="col-md-10">
            <form name="frmUser" method="post" action="" enctype="multipart/form-data">
                <div><?php if (isset($message)) {
                            echo $message;
                        } ?>
                </div>
                <div class="demo">
                    <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">

                    <label for="product">Product:</label>
                    <input type="datalist" class="form-control" name="product" id="product"  >
                    <datalist id="products" name="product"  value="<?php echo $row['product']; ?>">
                        <option value="City">
                        <option value="Verna">
                        <option value="Swift">
                    </datalist>

                    <br>
                    <label for="seller">Seller:</label>
                    <input list="sellers" class="form-control" name="seller" id="seller">
                    <datalist id="sellers" value="<?php echo $row['seller']; ?>">
                        <option value="Honda">
                        <option value="Hyundai">
                        <option value="Maruti">
                    </datalist>
                    <br>
                    <label for="text">Price:</label>
                    <input type="number" name="price" class="form-control" id="price" value="<?php echo $row['price']; ?>">
                    <br>
                    <label for="text">Quantity:</label>
                    <input type="number" name="quantity" class="form-control" id="quantity" value="<?php echo $row['quantity']; ?>">
                    <br>
                    <label for="text">GST:</label>
                    <input type="number" name="gst" id="gst" class="form-control" value="<?php echo $row['gst']; ?>">
                    <br>
                    <label>Address:</label>
                    <input type="text" id="address" class="form-control" name="address" value="<?php echo $row['address']; ?>">
                    <br>
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>">
                    <br>
                    <label>Mobile number:</label>
                    <input type="tel" class="form-control" id="mobilenumber" name="mobilenumber" value="<?php echo $row['mobilenumber']; ?>">
                    <br>
                    <label>Image:</label>
                    <input class="form-control" type="hidden" id="uploadfile" name="uploadfile" value="<?php echo $row['filename']; ?>"><?php echo '<img src="image/' . ($row['filename']) . '" height="60px" width="60px">' ?><br> <br>

                    <br>
                    <!-- <label>Old Image</label>
                   <input type="hidden" name="old_image"  value="<?php echo $row['filename']; ?>">
                    <button class="btn btn-primary" type="submit" name="update">UPLOAD</button> -->
                    <input type="hidden" class="form-control" name="upload_old" value="<?php echo $row['filename']; ?>">

                    <input type="file" id="uploadfile" name="uploadfile" class="form-control"><br><br>
                    <button class="btn btn-primary" type="submit" name="update">UPLOAD</button>
                    <a href="retrieve.php">Back</a>
                </div>
            </form>


        </div>
    </div>

</body>



</html>