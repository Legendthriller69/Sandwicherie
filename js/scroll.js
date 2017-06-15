/**
 * Created by Rafael Peixoto on 13.06.2017.
 */
$(document).ready(function () {

    $('.scrollTo').click(function () { // Au clic sur un ï¿½lï¿½ment
        $(this).addClass('active');
        $('.scrollTo').not(this).removeClass('active');
        var section = $(this).attr('href'); // Page cible
        var speed = 700; // Durï¿½e de l'animation (en ms)
        $('html, body').animate({scrollTop: $(section).offset().top}, speed); // Go
        return false;
    });
});