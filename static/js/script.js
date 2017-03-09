$(document).ready(function() {
    var catalogElement = $("#catalog");
    var perPage = 5;
    var currentPage = 0;

    function generateCatalog (start = 0) {
        if (catalog.length > perPage) {
            $(".pagination").remove();
            var paginationElement = $("<ul class='pagination'></ul>");
            var firstPage = $("<li><a href='#catalog'><<</a></li>");
            var prevPage = $("<li><a href='#catalog'><</a></li>");
            paginationElement.append(firstPage, prevPage);
            catalogElement.after(paginationElement);
            var i = 1;
            var catalogLength = catalog.length;
            while (catalogLength > 0) {
                var btn = $("<li><a href='#catalog'>"+i+"</a></li>");
                paginationElement.append(btn);
                i++;
                catalogLength -= perPage;
            }
            var lastPage = $("<li><a href='#catalog'>>></a></li>");
            var nextPage = $("<li><a href='#catalog'>></a></li>");
            paginationElement.append(nextPage, lastPage);
        }

        catalogElement.empty();
        var i = start;
        while ( i < catalog.length && i < start+perPage) {
            var item = catalog[i];
            var itemElement = $("<li></li>");
            var itemLinkElement = $("<a href='produit.html?index="+i+"'></a>");
            var itemImgElement = $("<img src='"+item.thumb+"' class='img-responsive'>");
            var itemNameElement = $("<h2>"+item.name+"</h2>");
            var itemPriceElement = $("<span class='catalog-product-price'>"+item.price+"</span>");
            var itemDescElement = $("<p class='catalog-product-desc'>"+item.description+"</p>");
            itemLinkElement.append(itemImgElement, itemNameElement, itemPriceElement, itemDescElement);
            itemElement.append(itemLinkElement);
            catalogElement.append(itemElement);
            i++;
        }
    }

    generateCatalog();

    $(document).on("click", ".pagination li", function() {
        console.log($(this).children().html());
        switch ($(this).children().html()) {
            case "&lt;&lt;":
                currentPage = 0;
                break;
            case "&lt;":
                if (currentPage > 0) {currentPage -= perPage;}
                break;
            case "&gt;":
                if (currentPage < catalog.length - perPage) {currentPage += perPage};
                break;
            case "&gt;&gt;":
                currentPage = (catalog.length/perPage-1)*perPage;
                break;
            default:
                currentPage = (parseInt($(this).children().html())-1)*perPage;
                break;
        }
        generateCatalog(currentPage);
    });
});
