/**
 * Created by Rafael Peixoto on 13.06.2017.
 */
$(document).ready(function() {
    startAnimation('#fresh');
    startAnimation('#sandwich');
    startAnimation('#herbs');


});

function startAnimation (targetElementClass) {
    var targetElement = $(targetElementClass)
    targetElement.css('animation', "draw 1.5s forwards 1 linear");

}
