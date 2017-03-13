function updateMenu() {
    var itemCount = 0;
    var cart = JSON.parse(localStorage.getItem("cart"));
    for (key in cart) {
        itemCount += cart[key];
    }
    $(".cartQuantity").html(itemCount || 0);
}

updateMenu();
