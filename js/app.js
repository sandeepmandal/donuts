var updateOrder = function() {
	const TAXRATE = 0.2;
	const DONUTPRICE = 0.5;
	var numCakeDonuts = parseDonuts(document.getElementById("cakedonuts").value);
	var numGlazedDonuts = parseDonuts(document.getElementById("glazeddonuts").value);
	if(isNaN(numCakeDonuts))
		numCakeDonuts = 0;
	if(isNaN(numGlazedDonuts))
		numGlazedDonuts = 0;
	var subTotal = parseInt((numCakeDonuts + numGlazedDonuts) * DONUTPRICE);
	var tax = parseInt(subTotal * TAXRATE); 
	var total = parseInt(subTotal + tax);
	document.getElementById("subtotal").value = "$" + subTotal.toFixed(2);
	document.getElementById("tax").value = "$" + tax.toFixed(2);
	document.getElementById("total").value = "$" + total.toFixed(2);

}

function placeOrder(form) {
        if (document.getElementById("name").value == "")
          sweetAlert("I'm sorry","Provide a username","success");
        else if (document.getElementById("pickup").value == "" ||
          isNaN(document.getElementById("pickup").value))
          sweetAlert("I'm sorry","Provide a time","success");
        else
          // Submit the order to the server
          form.submit();
      }

function parseDonuts(donutString) {
	numDonuts = parseInt(donutString);
	if(donutString.indexOf("dozens") != -1)
		numDonuts *= 12;
	return numDonuts;
}





