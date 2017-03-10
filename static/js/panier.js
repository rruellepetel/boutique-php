$(document).ready(function(){
    function generateCart() {
        var cart = JSON.parse(localStorage.getItem("cart"));
        $("table").empty();
        if (cart == null || jQuery.isEmptyObject(cart)) {
            $("table").before("<p>Votre panier est vide.</p>");
        }
        else {
            var totalPrice = 0;
            for (key in cart) {
                var product = catalog[key];
                console.log(product);
                var productLine = $("<tr></tr>");
                var productImg = $("<td><img src='"+product.thumb+"'></td>");
                var productName = $("<td>"+product.name+"</td>");
                var productPrice = $("<td>"+product.price+" €</td>");
                var quantity = $("<td><input type='number' value='"+cart[key]+"'></td>");
                var linePrice = $("<td>"+parseInt(product.price) * parseInt(cart[key])+" €</td>");
                var delProduct = $("<td></td>");
                var delBtn = $("<button data-id='"+key+"'>x</button>");
                delBtn.click(function(){
                    var id = $(this).data("id");
                    delete cart[id];
                    cart = JSON.stringify(cart);
                    localStorage.setItem("cart", cart);
                    generateCart();
                })
                delProduct.append(delBtn);
                productLine.append(productImg, productName, productPrice, quantity, linePrice, delProduct);
                $("table").append(productLine);
                totalPrice += parseInt(product.price) * parseInt(cart[key]);
            }
            var subtotalLine = $("<tr></tr>");
            subtotalLine.append("<td colspan='4'>Sous total</td>");
            subtotalLine.append("<td>"+totalPrice+" €</td>");
            var tvaLine = $("<tr></tr>");
            tvaLine.append("<td colspan='4'>TVA</td>");
            tvaLine.append("<td>"+(totalPrice*0.2).toFixed(2)+" €</td>");
            var totalLine = $("<tr></tr>");
            totalLine.append("<td colspan='4'>Total</td>");
            totalLine.append("<td>"+(totalPrice*1.2).toFixed(2)+" €</td>");
            var btnLine = $("<tr><td colspan='4'><button>Mettre à jour</button></td><td><button>Payer</button></td></tr>");
            $("table").append(subtotalLine, tvaLine, totalLine, btnLine);
        }
    }
    generateCart();
});