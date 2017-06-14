/**
 * Created by Rafael Peixoto on 12.06.2017.
 */
var data = null;
var total = null;
$(document).ready(function () {
    loadJSON("/Sandwicherie/data/dbSandwicherie.json");
    console.log(data);

    $('#bread').on('change', function () {
        var id = $('#bread').find("option:selected").val();
        calculatePriceBread(id);
    });

    $('.checkbox-legume').on('change', function ()
    {
        var id = $(this).attr('value');
        if ($(this).is(':checked'))
        {
            addLegume(id);
        }
        else
        {
            removeLegume(id);
        }
    });

    $('.checkbox-viande').on('change', function ()
    {
        var id = $(this).attr('value');
        if ($(this).is(':checked'))
        {
            addViande(id);
        }
        else
        {
            removeViande(id);
        }
    });


});

function startAnimation(targetElementClass) {
    var targetElement = $(targetElementClass);
    targetElement.css('animation', "draw 1.5s forwards 1 linear");

}

function endAnimation(targetElementClass) {
    var targetElement = $(targetElementClass);
    targetElement.css('animation', '');
    targetElement.off();

}
function calculatePriceBread(id) {

    var newEntry = "<tr  class='price-element price-element-bread-" + id + "'><td>+ " + data.pains[id].nom + "</td><td>" + data.pains[id].prix + ".-</td></tr>";
    total += data.pains[id].prix;

    switch (id) {
        case '0':
            /*end others animations*/

            endAnimation('#breadTopPt');
            endAnimation('#breadTopShadowPt');
            endAnimation('#traitsPt');
            endAnimation('#flavor');
            endAnimation('#breadBotPt');
            endAnimation('#breadBotShadowPt');
            $('.price-element-bread-1').remove();
            if (total - data.pains[1].prix >= 0)
                total -= data.pains[1].prix;

            endAnimation('#breadTopCereals');
            endAnimation('#breadTopShadowCereals');
            endAnimation('#cerealsTop');
            endAnimation('#breadBotCereals');
            endAnimation('#breadBotShadowCereals');
            $('.price-element-bread-2').remove();
            if (total - data.pains[2].prix >= 0)
                total -= data.pains[2].prix;

            /*start animation*/

            startAnimation('#breadTop');
            startAnimation('#breadTopShadow');
            startAnimation('#traits');

            startAnimation('#breadBot');
            startAnimation('#breadBotShadow');

            $('#calcul').append(newEntry);
            $('#total').html(total);
            break;
        case '1':
            /*end others animations*/
            endAnimation('#breadTop');
            endAnimation('#breadTopShadow');
            endAnimation('#traits');
            endAnimation('#breadBot');
            endAnimation('#breadBotShadow');
            $('.price-element-bread-0').remove();
            if (total - data.pains[0].prix >= 0)
                total -= data.pains[0].prix;

            endAnimation('#breadTopPt');
            endAnimation('#breadTopShadowPt');
            endAnimation('#traitsPt');
            endAnimation('#flavor');
            endAnimation('#breadBotPt');
            endAnimation('#breadBotShadowPt');
            $('.price-element-bread-2').remove();
            if (total - data.pains[2].prix >= 0)
                total -= data.pains[2].prix;
            /*start animation*/
            startAnimation('#breadTopCereals');
            startAnimation('#breadTopShadowCereals');
            startAnimation('#cerealsTop');
            startAnimation('#breadBotCereals');
            startAnimation('#breadBotShadowCereals');
            $('#calcul').append(newEntry);
            $('#total').html(total);
            break;
        case '2':
            /*end others animations*/
            endAnimation('#breadTop');
            endAnimation('#breadTopShadow');
            endAnimation('#traits');
            endAnimation('#breadBot');
            endAnimation('#breadBotShadow');
            $('.price-element-bread-0').remove();
            if (total - data.pains[0].prix >= 0)
                total -= data.pains[0].prix;

            endAnimation('#breadTopCereals');
            endAnimation('#breadTopShadowCereals');
            endAnimation('#cerealsTop');
            endAnimation('#breadBotCereals');
            endAnimation('#breadBotShadowCereals');
            $('.price-element-bread-1').remove();
            if (total - data.pains[1].prix >= 0)
                total -= data.pains[1].prix;

            /*start animation*/
            startAnimation('#breadTopPt');
            startAnimation('#breadTopShadowPt');
            startAnimation('#traitsPt');
            startAnimation('#flavor');

            startAnimation('#breadBotPt');
            startAnimation('#breadBotShadowPt');
            $('#calcul').append(newEntry);
            $('#total').html(total);
            break;
    }
}

function addLegume(id) {
    var newEntry = "<tr  class='price-element price-element-legume-" + id + "'><td>+ " + data.legumes[id].nom + "</td><td>" + data.legumes[id].prix + ".-</td></tr>";
    total += data.legumes[id].prix;
    $('#calcul').append(newEntry);
    $('#total').html(total);

    switch (id) {
        case '0':
            /*start animation*/
            startAnimation('#salad');
            startAnimation('#saladShadow');
            break;
        case '1':
            /*start animation*/
            startAnimation('#saladCh');
            startAnimation('#saladShadowCh');
            break;
        case '2':
            /*start animation*/
            startAnimation('#tomato1');
            startAnimation('#tomato2');
            startAnimation('#tomato3');
            break;
        case '3':
            /*start animation*/
            startAnimation('#ognon1');
            startAnimation('#ognon2');
            startAnimation('#ognon3');
            break;
    }
}
function removeLegume(id) {
    total -= data.legumes[id].prix;
    $('.price-element-legume-'+id).remove();
    $('#total').html(total);
    switch (id) {
        case '0':
            /*start animation*/
            endAnimation('#salad');
            endAnimation('#saladShadow');
            break;
        case '1':
            /*start animation*/
            endAnimation('#saladCh');
            endAnimation('#saladShadowCh');
            break;
        case '2':
            /*start animation*/
            endAnimation('#tomato1');
            endAnimation('#tomato2');
            endAnimation('#tomato3');
            break;
        case '3':
            /*start animation*/
            endAnimation('#ognon1');
            endAnimation('#ognon2');
            endAnimation('#ognon3');
            break;
    }
}
function addViande(id) {
    var newEntry = "<tr  class='price-element price-element-viande-" + id + "'><td>+ " + data.viandes[id].nom + "</td><td>" + data.viandes[id].prix + ".-</td></tr>";
    total += data.viandes[id].prix;
    $('#calcul').append(newEntry);
    $('#total').html(total);

    switch (id) {
        case '0':
            /*start animation*/
            startAnimation('#ham1');
            startAnimation('#ham2');
            startAnimation('#ham3');
            break;
        case '1':
            /*start animation*/
            startAnimation('#salami1');
            startAnimation('#salami2');
            startAnimation('#salami3');
            break;
        case '2':
            /*start animation*/
            startAnimation('#morta1');
            startAnimation('#morta2');
            startAnimation('#morta3');
            break;
        case '3':
            /*start animation*/
            startAnimation('#bacon1');
            startAnimation('#bacon2');
            startAnimation('#bacon3');
            break;
    }
}
function removeViande(id) {
    total -= data.viandes[id].prix;
    $('.price-element-viande-'+id).remove();
    $('#total').html(total);

    switch (id) {
        case '0':
            /*end animation*/
            endAnimation('#ham1');
            endAnimation('#ham2');
            endAnimation('#ham3');
            break;
        case '1':
            /*end animation*/
            endAnimation('#salami1');
            endAnimation('#salami2');
            endAnimation('#salami3');
            break;
        case '2':
            /*end animation*/
            endAnimation('#morta1');
            endAnimation('#morta2');
            endAnimation('#morta3');
            break;
        case '3':
            /*end animation*/
            endAnimation('#lard1');
            endAnimation('#lard2');
            endAnimation('#lard3');
            break;
    }
}
function addFromage(id) {
    var newEntry = "<tr  class='price-element price-element-fromage-" + id + "'><td>+ " + data.fromages[id].nom + "</td><td>" + data.formages[id].prix + ".-</td></tr>";
    total += data.fromages[id].prix;
    $('#calcul').append(newEntry);
    $('#total').html(total);

    switch (id) {
        case '0':
            /*start animation*/
            startAnimation('#cheddar1');
            startAnimation('#cheddar2');
            break;
        case '1':
            /*start animation*/
            startAnimation('#cheese1');
            startAnimation('#cheese2');
            break;
        case '2':
            /*start animation*/
            startAnimation('#mozza1');
            startAnimation('#mozza2');
            startAnimation('#mozza3');
            break;
        case '3':
            /*start animation*/
            startAnimation('#brie1');
            startAnimation('#brie2');
            startAnimation('#brie3');
            break;
        case '4':
            /*start animation*/
            startAnimation('#raclette1');
            startAnimation('#raclette2');
            startAnimation('#raclette3');
            break;
    }
}
function loadJSON(file) {
    $.get(file, function (json) {
        data = json;
    })

}

