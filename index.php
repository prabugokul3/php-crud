  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/38fda32e13.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </head>

  <body>

    <div class="container">
      <div class="header">
        <h2>Create Account</h2>
      </div>

      <form class="form" name='contactForm' method="post" action="insert.php" onsubmit="return validate()" enctype="multipart/form-data">
        <div class="form-control">
          <label for="product">Product:</label>
          <input list="products" name="product" id="product">
          <datalist id="products">
            <option value="City">
            <option value="Verna">
            <option value="Swift">
          </datalist>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span class="error" id="productErr"></span>
        </div>
        <div class="form-control">
          <label for="seller">Seller:</label>
          <input list="sellers" name="seller" id="seller">
          <datalist id="sellers">
            <option value="Honda">
            <option value="Hyundai">
            <option value="Maruti">
          </datalist>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span class="error" id="sellerErr"></span>
        </div>
        <div class="form-control">
          <label for="text">Price:</label>
          <input type="number" name="price" id="price" onchange="gstcal()">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span class="error" id="priceErr"></span>
        </div>
        <div class="form-control">
          <label for="text">Quantity:</label>
          <input type="number" name="quantity" id="quantity" onchange="gstcal()">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span class="error" id="quantityErr"></span>
        </div>
        <div class="form-control">
          <label for="text">GST:</label>
          <input type="number" name="gst" id="gst" onchange="gstcal()">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span class="error" id="gstErr"></span>
        </div>
        <div class="form-control">
          <label for="text">Total:</label>
          <input type="number" name="tot_price" id="tot_price" value="tot_price" readonly>
        </div>

        <div class="form-control">
          <label>Email:</label>
          <input type="text" placeholder="email" id="email" name="email">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span class="error" id="emailErr"></span>
        </div>
        <div class="form-control">
          <label>Address:</label>
          <input type="text" placeholder="address" class="address" id="address" name="address">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span class="error" id="addressErr"></span>
        </div>
        <div class="form-control">
          <label>Mobile number:</label>
          <input type="tel" placeholder="mobile number" class="mobilenumber" id="mobilenumber" name="mobilenumber">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <span class="error" id="mobilenumberErr"></span>
        </div>

        <div class="form-control">
          <label>Select Image:</label>
          <input type="file" name="uploadfile" id="image" value="" />
          <span class="error" id="imageErr"></span>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
      </form>
    </div>
    <!-- <script src="validation.js"></script> -->
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

    <script>
      function gstcal() {
        let gst = document.getElementById("gst").value;
        let price = document.getElementById("price").value;
        let qty = document.getElementById("quantity").value;
        const obj = price * qty;
        const tot_price = (obj * gst / 100) + obj
        document.getElementById("tot_price").value = tot_price;
      }

      // Defining a function to display error message
      function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
      }

      // Defining a function to validate form 
      function validate() {
        // // Retrieving the values of form elements 
        // let name = document.contactForm.product.value;
        // let email = document.contactForm.email.value;
        // let mobile = document.contactForm.mobile.value;
        // let gender = document.contactForm.gender.value;
        // let address = document.contactForm.address.value;
        // let image = document.contactForm.uploadfile.value;
        // let hobbies = [];
        // let checkboxes = document.getElementsByName("hobbies[]");
        // for (var i = 0; i < checkboxes.length; i++) {
        //   if (checkboxes[i].checked) {
        //     // Populate hobbies array with selected values
        //     hobbies.push(checkboxes[i].value);
        //   }
        // }

        // // Defining error variables with a default value
        // let nameErr = emailErr = mobileErr = genderErr = imageErr = addressErr = true;

        // // Validate name
        // if (name == "") {
        //   printError("nameErr", "Please enter your name");
        // } else {
        //   var regex = /^[a-zA-Z\s]+$/;
        //   if (regex.test(name) === false) {
        //     printError("nameErr", "Please enter a valid name");
        //   } else {
        //     printError("nameErr", "");
        //     nameErr = false;
        //   }
        // }

        // // Validate email address
        // if (email == "") {
        //   printError("emailErr", "Please enter your email address");
        // } else {
        //   // Regular expression for basic email validation
        //   var regex = /^\S+@\S+\.\S+$/;
        //   if (regex.test(email) === false) {
        //     printError("emailErr", "Please enter a valid email address");
        //   } else {
        //     printError("emailErr", "");

        //     emailErr = false;
        //   }
        // }

        // // Validate mobile number
        // if (mobile == "") {
        //   printError("mobileErr", "Please enter your mobile number");
        // } else {
        //   var regex = /^[1-9]\d{9}$/;
        //   if (regex.test(mobile) === false) {
        //     printError("mobileErr", "Please enter a valid 10 digit mobile number");
        //   } else {
        //     printError("mobileErr", "");
        //     mobileErr = false;
        //   }
        // }

        // // Validate gender
        // if (gender == "") {
        //   printError("genderErr", "Please select your gender");
        // } else {
        //   printError("genderErr", "");
        //   genderErr = false;
        // }

        // if (image == "") {
        //   printError("imageErr", "Please select your image");
        // } else {
        //   printError("imageErr", "");
        //   imageErr = false;
        // }

        // if (address == "") {
        //   printError("addressErr", "Please enter your address");
        // } else {
        //   printError("addressErr", "");
        //   addressErr = false;
        // }

        // // Prevent the form from being submitted if there are any errors
        // if ((nameErr || emailErr || mobileErr || genderErr || imageErr) == true) {
        //   return false;
        // } else {
        //   // Creating a string from input data for preview
        //   var dataPreview = "You've entered the following details: \n" +
        //     "Full Name: " + name + "\n" +
        //     "Email Address: " + email + "\n" +
        //     "Mobile Number: " + mobile + "\n" +
        //     "Gender: " + gender + "\n";

        //   if (hobbies.length) {
        //     dataPreview += "Hobbies: " + hobbies.join(", ");
        //   }
        //   // Display input data in a dialog box before submitting the form
        // }

        let product = document.contactForm.product.value;
        let seller = document.contactForm.seller.value;
        let price = document.contactForm.price.value;
        let quantity = document.contactForm.quantity.value;
        let gst = document.contactForm.gst.value;
        let email = document.contactForm.email.value;
        let address = document.contactForm.address.value;
        let mobilenumber = document.contactForm.mobilenumber.value;
        let image = document.contactForm.image.value;



        let productErr = sellerErr = priceErr = quantityErr = gstErr = emailErr = addressErr = mobilenumberErr = imageErr = true;
        if (product == "") {
          printError("productErr", "Please choose  product");
        } else {
          printError("productErr", "");
          productErr = false;
        }

        if (seller == "") {
          printError("sellerErr", "Please choose seller");
        } else {
          printError("sellerErr", "");
          sellerErr = false;
        }

        if (price == "") {
          printError("priceErr", "Please enter price");
        } else {
          printError("priceErr", "");
          priceErr = false;
        }

        if (quantity == "") {
          printError("quantityErr", "Please enter quantity");
        } else {
          printError("quantityErr", "");
          quantityErr = false;
        }

        if (gst == "") {
          printError("gstErr", "Please enter price");
        } else {
          printError("gstErr", "");
          gstErr = false;
        }

        if (email == "") {
          printError("emailErr", "Please enter your email address");
        } else {
          // Regular expression for basic email validation
          var regex = /^\S+@\S+\.\S+$/;
          if (regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
          } else {
            printError("emailErr", "");

            emailErr = false;
          }
        }

        if (address == "") {
          printError("addressErr", "Please enter address");
        } else {
          printError("addressErr", "");
          addressErr = false;
        }

        if (mobilenumber == "") {
          printError("mobilenumberErr", "Please enter your mobile number");
        } else {
          var regex = /^[1-9]\d{9}$/;
          if (regex.test(mobilenumber) === false) {
            printError("mobilenumberErr", "Please enter a valid 10 digit mobile number");
          } else {
            printError("mobilenumberErr", "");
            mobilenumberErr = false;
          }
        }

        if (image == "") {
          printError("imageErr", "Please select image");
        } else {
          printError("imageErr", "");
          imageErr = false;
        }



        if ((productErr || sellerErr || priceErr || gstErr || emailErr || addressErr || mobilenumberErr || imageErr) == true) {
          return false;
        } else {
          // Creating a string from input data for preview
          var dataPreview = "You've entered the following details: \n" +
            "product: " + product + "\n";

        }
        // Display input data in a dialog box before submitting the form


      };
    </script>

  </body>

  </html>