<?php
include_once 'connect.php';
$result = mysqli_query($conn, "SELECT * FROM MyGuests ORDER BY id DESC");

?>
<!DOCTYPE html>
<html>

<head>
    <title> Retrive data</title>

    <link rel="stylesheet" href="app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/38fda32e13.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>

<body>
    <!-- <div class="container-fluid"> -->
        <div class="nav">
            <span>Administration</span>
            <ul>
                <li><i class="fa-solid fa-user"></i> Admin</li>
                <li><a href="index.php">Log out</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-2 sys">
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

            <!-- <div class="container-fluid"> -->
            <div class="col-md-10">

                <table class="table table-bordered table-striped">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    } ?>

                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Product</th>
                            <th>Seller</th>
                            <th>Price </th>
                            <th>Quantity</th>
                            <th>GST</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Mobile Number</th>
                            <th>Images</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>

                                <td><?php echo $row["product"]; ?></td>
                                <td><?php echo $row["seller"]; ?></td>
                                <td>₹<?php echo $row["price"]; ?></td>
                                <td><?php echo $row["quantity"]; ?></td>
                                <td><?php echo $row["gst"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["mobilenumber"]; ?></td>
                                <td><?php echo '<img src="image/' . ($row['filename']) . '" height="60px" width="60px">' ?></td>

                                <!-- <img src="image/'.($row['filename'] ).'" height="60px" width="60px" -->
                                <td><a href="update.php?id=<?php echo $row["id"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a></td>
                                <td><a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return  confirm('Are you sure want to delete this record?')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg></i></a></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>