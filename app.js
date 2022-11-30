const product = document.getElementById("product");
const seller = document.getElementById("seller");
const email = document.getElementById("email");
const price = document.getElementById("price");
const quantity = document.getElementById("quantity");
const gst = document.getElementById("gst");
const address = document.getElementById("address");
const mobilenumber = document.getElementById("mobilenumber");

function checkInput() {

    const productValue = product.value.trim();
    const sellerValue = seller.value.trim();
    const priceValue = price.value.trim();
    const quantityValue = quantity.value.trim();
    const gstValue = quantity.value.trim();
    const emailValue = email.value.trim();
    const addressValue = address.value.trim();
    const mobilenumberValue = mobilenumber.value.trim();

    if (productValue == '') {

        setError(product, 'Choose Product');

    } else {
        setSuccess(product);
    }

    if (sellerValue == '') {
        setError(seller, 'Choose Seller');
    } else {
        setSuccess(seller);
    }

    if (priceValue == '') {
        setError(price, 'Price Cannot be Blank');
    } else {
        setSuccess(price);
    }

    if (quantityValue == '') {
        setError(quantity, 'Quantity Cannot be Blank');
    } else {
        setSuccess(quantity);
    }

    if (gstValue == '') {
        setError(gst, 'GST Cannot be Blank');
    } else {
        setSuccess(gst);
    }

    if (emailValue == '') {
        setError(email, 'Email Cannot be Blank');
    } else if (emailValue.indexOf('@') <= 0) {
        setError(email, 'Invalid email');
    }
    else {
        setSuccess(email);
    }

    if (addressValue == '') {
        setError(address, 'Address Cannot be Blank');
        return false;

    } else {
        setSuccess(address);
    }

    if (mobilenumberValue == "") {
        setError(mobilenumber, "MobileNumber Cannot be Blank");
        return false;
    }
    else {
        setSuccess(mobilenumber);
    }
    return true;

    function setError(input, message) {
        const formControl = input.parentElement;
        const small = formControl.querySelector('small');
        formControl.className = 'form-control error';
        small.innerText = message;
    }
    function setSuccess(input, message) {
        const formControl = input.parentElement;
        const small = formControl.querySelector('small');
        formControl.className = 'form-control success';
        small.innerText = message;
    }
}

function submit(){
    if(checkInput()==true){
        return false;
    }else{
        return true;
    }
}


