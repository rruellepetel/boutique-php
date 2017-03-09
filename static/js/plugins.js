$(document).ready(function() {

    $("#tab-container").easytabs({
        uiTabs: true
    });
    for (var i = 0; i < 5; i++) {
        var product = catalog[Math.floor(Math.random() * catalog.length - 1)];
        console.log(catalog[0]);
        var slide = $("<div class='slide'></div>");
        var content = $("<div class='content'></div>");
        var title = $("<h2>" + product.name + "</h2>");
        var desc = $("<p>" + product.description + "</p>");
        var imgContainer = $("<div class='image'></div>");
        var img = $("<img src=" + product.thumb + ">");
        content.append(title, desc);
        imgContainer.append(img);
        slide.append(content, imgContainer);
        $('#immersive_slider').prepend(slide);

    }

    $("#immersive_slider").immersive_slider({
        animation: "bounce", // As usual, you can change the animation to these: slide (default), bounce, fade, slideUp, and bounceUp
        slideSelector: ".slide", // This option will let you assign custom selector for each slides in case .slide is already taken
        container: ".slider-container", // This option lets you define the container of which the background will appear. Make sure the slider is inside this container as well.
        cssBlur: true, // Experimental: In case you don't want to keep adding new data-blurred attributes, trigger this to true and it will generate the blur image on the fly (more info below).
        pagination: true, // Toggle this to false if you don't want a pagination
        loop: true, // Toggle to false if you don't want the slider to loop. Default is true.
        autoStart: 5000 // Define the number of milliseconds before it navigates automatically. Change this to 0 or false to disable autoStart. The default value is 5000.
    });


});
