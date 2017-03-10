$(document).ready(function() {
    var order = GET_PARAM('order');
    if (order == null) {
        order = "asc";
    }
    var min = GET_PARAM('min');
    var max = GET_PARAM('max')
    console.log(order);
    var options = {
        valueNames: [
            'name',
            'description',
            'price',
            { attr: 'src', name: 'thumb' },
            { attr: 'href', name: 'link' }
        ],
        item: "<li><a class='link'><img class='img-responsive thumb'><h2 class='name'></h2><span class='price'></span><p class='description'></p></a></li>",
        page: 5,
        pagination: true
    };
    var catalogList = new List('catalog', options);
    for (var i=0; i< catalog.length; i++) {
        product = catalog[i];
        catalogList.add({
            name: product.name,
            description: product.description,
            price: product.price + " €",
            thumb: product.thumb,
            link: 'produit.html?index='+i
        })
    }

    if (order == "asc") {
        catalogList.sort('price', {order: "asc"});
    }
    if (order == "desc") {
        catalogList.sort('price', {order: "desc"});
    }

    if (min != null && max != null) {
        $("input[name='min']").val(min);
        $("input[name='max']").val(max);
        catalogList.filter(function(item){
            var price = item.values().price.replace(" €", "");
            if (price >= min && price <= max) {
                return true;
            } else {
                return false;
            }
        })
    }

    $(document).on("input", "input[type='range']", function() {
        $(this).prev().children('span').html($(this).val());
    })
    $("input[name='min']").prev().children('span').html($("input[name='min']").val());
    $("input[name='max']").prev().children('span').html($("input[name='max']").val());

});
