$(document).ready(function() {
    var index = GET_PARAM("index");
    var product = catalog[index];
    var title = $("<h1>"+product.name+"</h1>");
    var productImg = $("<img src="+product.thumb+">");
    var miniatures = $("<div class='miniatures'></div>");
    for (var i = 0; i < product.pictures.length; i++) {
        miniatures.append("<img src="+product.pictures[i]+">");
    }
    var desc = $("<p>"+product.description+"</p>");
    var price = $("<span>"+product.price+" €</span>");
    $("main").prepend(title);
    $(".product-img").append(productImg,miniatures);
    $("h2").after(price,desc);
    for (var i = 0; i < 3; i++) {
        var number = Math.floor(Math.random()*(catalog.length -1));
        var href = $("<a href=produit.html?index="+number+"></a>");
        var article = $("<article class='product'></article>");
        var img = $("<img src="+catalog[number].thumb+">");
        var span = $("<span class='product-name'>"+catalog[number].name+"</span>");
        article.append(img,span);
        href.append(article);
        $(".suggested-products").append(href);
    }

    $(".addToCart").click(function() {
        var product = {};

        var cart = localStorage.getItem("cart");
        if (cart == null) {
            cart = {};
        } else {
            cart = JSON.parse(cart);
        }

        cart[index] = (parseInt(cart[index] || 0)+parseInt($("input[type='number']").val()));

        cart = JSON.stringify(cart);
        localStorage.setItem("cart", cart);
        updateMenu();
    });
});
