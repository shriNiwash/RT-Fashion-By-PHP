  // initialize Khalti checkout
  var config = {
    // replace with your Khalti merchant ID
    "publicKey": "test_public_key_c61f0ce06edb414195e8a1579ea4c303",
    "productIdentity": "1234567890",
    "productName": "Test Product",
    "productUrl": "https://example.com/test-product",
    "eventHandler": {
        onSuccess(payload) {
            alert("payment success");
            console.log(payload);
            

            // handle payment success
        },
        onError(error) {
            console.log("the errro has been given" + error);
            // handle payment error
        },
        onClose() {
            console.log("Checkout closed.");
            // handle checkout close
        }
    }
};
var checkout = new KhaltiCheckout(config);

// handle payment button click
var payButton = document.getElementById("pay-button");
payButton.addEventListener("click", function () {
    var amount = parseInt(payButton.getAttribute("data-amount"));
    checkout.show({ amount: `${amount}` });
});



