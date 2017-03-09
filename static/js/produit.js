$(document).ready(function() {
    var index = GET_PARAM("index");
    var product = catalog[index];
    var title = $("<h1>"+product.name+"</h1>");
    var productImg = $("<img src="+product.thumb+">");
    var miniatures = $("<div class='miniatures'></div>");
    for (var i = 0; i < product.pictures.length; i++) {
        miniatures.append("<img src="+product.pictures[i]+">");
    }
    var desc = $("<p>"+product.desc+"</p>");
    var price = $("<span>"+product.price+"</span>");

});
