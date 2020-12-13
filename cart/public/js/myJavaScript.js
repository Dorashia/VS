function updateTotalAmount() {
    var sum = 0;
    var element = document.getElementById("{{$cart->productID}}");
    if(element.checked == true) {
        sum += Number(element.value);
    }

    document.getElementById('amount').value = sum.toFixed(2);
}