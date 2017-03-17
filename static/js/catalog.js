var catalog = [];
$(document).ready(function(){
    $.get('https://codi-e-commerce.herokuapp.com/', function(data) {
        for (var i=0; i<data.length; i++) {
            catalog.push(data[i]);
        }
    }, 'json');
});
