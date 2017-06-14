/**
 * Created by Rafael Peixoto on 12.06.2017.
 */
var data = null;
var total = null;
$(document).ready(function() {
    loadJSON("data/dbSandwicherie.json");

    $('#bread').on('change', function ()
    {
        var idPain = $('#bread').find("option:selected").val();
        calculatePriceBread(idPain);
    });

    $('#legumes').on('change' , function () {


        $('input:checkbox').each(function()
        {
            if ($(this).is(':checked'))
            {
                var idLegume = $(this).attr('value');
                addLegumes(idLegume);
                switch('hello')
                {
                    case "salad":
                        /*start animation*/
                        startAnimation('#salad');
                        startAnimation('#saladShadow');


                        break;
                    case "chene":
                        /*start animation*/
                        startAnimation('#saladCh');
                        startAnimation('#saladShadowCh');
                        break
                    case "ham":
                        /*start animation*/
                        startAnimation('#ham1');
                        startAnimation('#ham2');
                        startAnimation('#ham3');
                        break;
                    case "salami":
                        /*start animation*/
                        startAnimation('#salami1');
                        startAnimation('#salami2');
                        startAnimation('#salami3');
                        break;
                    case "morta":
                        /*start animation*/
                        startAnimation('#morta1');
                        startAnimation('#morta2');
                        startAnimation('#morta3');
                        break;
                    case "bacon":
                        /*start animation*/
                        startAnimation('#bacon1');
                        startAnimation('#bacon2');
                        break;
                    case "salmon":
                        /*start animation*/
                        startAnimation('#saumon1');
                        startAnimation('#saumon2');
                        startAnimation('#saumon3');
                        break;
                    case "cheddar":
                        /*start animation*/
                        startAnimation('#cheddar1');
                        startAnimation('#cheddar2');
                        break;
                    case "edam":
                        /*start animation*/
                        startAnimation('#cheese1');
                        startAnimation('#cheese2');
                        break;
                    case "mozza":
                        /*start animation*/
                        startAnimation('#mozza2');
                        startAnimation('#mozza1');
                        break;
                    case "brie":
                        /*start animation*/
                        startAnimation('#brie1');
                        startAnimation('#brie2');
                        startAnimation('#brie3');
                        break;
                    case "raclette":
                        /*start animation*/
                        startAnimation('#raclette1');
                        startAnimation('#raclette2');
                        startAnimation('#raclette3');
                        break;
                    case "pickle":
                        /*start animation*/
                        startAnimation('#pickle1');
                        startAnimation('#pickle2');
                        startAnimation('#pickle3');
                        break;
                    case "egg":
                        /*start animation*/
                        startAnimation('#egg1');
                        startAnimation('#egg2');
                        startAnimation('#egg3');
                        break;
                    case "ognon":
                        /*start animation*/
                        startAnimation('#ognon1');
                        startAnimation('#ognon2');
                        startAnimation('#ognon3');
                        break;
                    case "salad2":
                        /*start animation*/
                        startAnimation('#saladTop');
                        startAnimation('#saladTopShadow');
                        break;
                    case "chene2":
                        /*start animation*/
                        startAnimation('#saladTopCh');
                        startAnimation('#saladTopShadowCh');
                        break
                }


            } else {
                var idLegume2 = $(this).attr('value');
                removeLegumes(idLegume2);
                switch('hello')
                {
                    case "salad":
                        /*start animation*/
                        endAnimation('#salad');
                        endAnimation('#saladShadow');
                        break;
                    case "chene":
                        /*start animation*/
                        endAnimation('#saladCh');
                        endAnimation('#saladShadowCh');
                        break;
                    case "ham":
                        /*start animation*/
                        endAnimation('#ham1');
                        endAnimation('#ham2');
                        endAnimation('#ham3');
                        break;
                    case "salami":
                        /*start animation*/
                        endAnimation('#salami1');
                        endAnimation('#salami2');
                        endAnimation('#salami3');
                        break;
                    case "morta":
                        /*start animation*/
                        endAnimation('#morta1');
                        endAnimation('#morta2');
                        endAnimation('#morta3');
                        break;
                    case "bacon":
                        /*start animation*/
                        endAnimation('#bacon1');
                        endAnimation('#bacon2');
                        break;
                    case "salmon":
                        /*start animation*/
                        endAnimation('#saumon1');
                        endAnimation('#saumon2');
                        endAnimation('#saumon3');
                        break;
                    case "cheddar":
                        /*start animation*/
                        endAnimation('#cheddar1');
                        endAnimation('#cheddar2');
                        break;
                    case "edam":
                        /*start animation*/
                        endAnimation('#cheese1');
                        endAnimation('#cheese2');
                        break;
                    case "mozza":
                        /*start animation*/
                        endAnimation('#mozza2');
                        endAnimation('#mozza1');
                        break;
                    case "brie":
                        /*start animation*/
                        endAnimation('#brie1');
                        endAnimation('#brie2');
                        endAnimation('#brie3');
                        break;
                    case "raclette":
                        /*start animation*/
                        endAnimation('#raclette1');
                        endAnimation('#raclette2');
                        endAnimation('#raclette3');
                        break;
                    case "pickle":
                        /*start animation*/
                        endAnimation('#pickle1');
                        endAnimation('#pickle2');
                        endAnimation('#pickle3');
                        break;
                    case "egg":
                        /*start animation*/
                        endAnimation('#egg1');
                        endAnimation('#egg2');
                        endAnimation('#egg3');
                        break;
                    case "ognon":
                        /*start animation*/
                        endAnimation('#ognon1');
                        endAnimation('#ognon2');
                        endAnimation('#ognon3');
                        break;
                    case "salad2":
                        /*start animation*/
                        endAnimation('#saladTop');
                        endAnimation('#saladTopShadow');
                        break;
                    case "chene2":
                        /*start animation*/
                        endAnimation('#saladTopCh');
                        endAnimation('#saladTopShadowCh');
                        break
                }
            }


        });


    });

});

function startAnimation (targetElementClass) {
    var targetElement = $(targetElementClass);
    targetElement.css('animation', "draw 1.5s forwards 1 linear");

}

function endAnimation (targetElementClass) {
    var targetElement = $(targetElementClass);
    targetElement.css('animation','');
    targetElement.off();

}
function calculatePriceBread(id)
{

    var newEntry = "<tr  class='price-element price-element-bread-"+id+"'><td>+ "+data.pains[id].nom + "</td><td>"+data.pains[id].prix+".-</td></tr>";
    total += data.pains[id].prix;

    switch(id)
    {
        case '0':
            /*end others animations*/

            endAnimation('#breadTopPt');
            endAnimation('#breadTopShadowPt');
            endAnimation('#traitsPt');
            endAnimation('#flavor');
            endAnimation('#breadBotPt');
            endAnimation('#breadBotShadowPt');
            $('.price-element-bread-1').remove();
            if(total - data.pains[1].prix >= 0 )
                total -= data.pains[1].prix;

            endAnimation('#breadTopCereals');
            endAnimation('#breadTopShadowCereals');
            endAnimation('#cerealsTop');
            endAnimation('#breadBotCereals');
            endAnimation('#breadBotShadowCereals');
            $('.price-element-bread-2').remove();
            if(total - data.pains[2].prix >= 0 )
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
            if(total - data.pains[0].prix >= 0 )
                total -= data.pains[0].prix;

            endAnimation('#breadTopPt');
            endAnimation('#breadTopShadowPt');
            endAnimation('#traitsPt');
            endAnimation('#flavor');
            endAnimation('#breadBotPt');
            endAnimation('#breadBotShadowPt');
            $('.price-element-bread-2').remove();
            if(total - data.pains[2].prix >= 0 )
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
            if(total - data.pains[0].prix >= 0 )
                total -= data.pains[0].prix;

            endAnimation('#breadTopCereals');
            endAnimation('#breadTopShadowCereals');
            endAnimation('#cerealsTop');
            endAnimation('#breadBotCereals');
            endAnimation('#breadBotShadowCereals');
            $('.price-element-bread-1').remove();
            if(total - data.pains[1].prix >= 0 )
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

function addLegumes(id)
{
    var newEntry = "<tr  class='price-element price-element-legumes-"+id+"'><td>+ "+data.legumes[id].nom + "</td><td>"+data.legumes[id].prix+".-</td></tr>";
    total += data.legumes[id].prix;
    $('#calcul').append(newEntry);
    $('#total').html(total);

    switch(id)
    {
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
function removeLegumes(id)
{
    switch(id)
    {
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
function loadJSON(file) {
    $.get(file, function (json) {
        data = json;
    })

}

