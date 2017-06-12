/**
 * Created by Rafael Peixoto on 12.06.2017.
 */
$('#bread').on('change', function () {
    var val = $('#bread').find("option:selected").val();

    switch(val)
    {
        case "fr":
            /*end others animations*/
            endAnimation('#breadTopPt');
            endAnimation('#breadTopShadowPt');
            endAnimation('#traitsPt');
            endAnimation('#flavor');
            endAnimation('#breadBotPt');
            endAnimation('#breadBotShadowPt');

            endAnimation('#breadTopCereals');
            endAnimation('#breadTopShadowCereals');
            endAnimation('#cerealsTop');
            endAnimation('#breadBotCereals');
            endAnimation('#breadBotShadowCereals');
            /*start animation*/
            startAnimation('#breadTop');
            startAnimation('#breadTopShadow');
            startAnimation('#traits');

            startAnimation('#breadBot');
            startAnimation('#breadBotShadow');


            break;
        case "pt":
            /*end others animations*/
            endAnimation('#breadTop');
            endAnimation('#breadTopShadow');
            endAnimation('#traits');
            endAnimation('#breadBot');
            endAnimation('#breadBotShadow');

            endAnimation('#breadTopCereals');
            endAnimation('#breadTopShadowCereals');
            endAnimation('#cerealsTop');
            endAnimation('#breadBotCereals');
            endAnimation('#breadBotShadowCereals');
            /*start animation*/
            startAnimation('#breadTopPt');
            startAnimation('#breadTopShadowPt');
            startAnimation('#traitsPt');
            startAnimation('#flavor');

            startAnimation('#breadBotPt');
            startAnimation('#breadBotShadowPt');
            break;
        case "cr":
            /*end others animations*/
            endAnimation('#breadTop');
            endAnimation('#breadTopShadow');
            endAnimation('#traits');
            endAnimation('#breadBot');
            endAnimation('#breadBotShadow');

            endAnimation('#breadTopPt');
            endAnimation('#breadTopShadowPt');
            endAnimation('#traitsPt');
            endAnimation('#flavor');
            endAnimation('#breadBotPt');
            endAnimation('#breadBotShadowPt');
            /*start animation*/
            startAnimation('#breadTopCereals');
            startAnimation('#breadTopShadowCereals');
            startAnimation('#cerealsTop');
            startAnimation('#breadBotCereals');
            startAnimation('#breadBotShadowCereals');
            break;
    }





});

$('#first').on('change', function () {
    var val = $('#first').find("option:selected").val();

    switch(val)
    {
        case "lt":
            /*end others animations*/
            endAnimation('#saladCh');
            endAnimation('#saladShadowCh');

            /*start animation*/
            startAnimation('#salad');
            startAnimation('#saladShadow');


            break;
        case "ch":
            /*end others animations*/
            endAnimation('#salad');
            endAnimation('#saladShadow');

            /*start animation*/
            startAnimation('#saladCh');
            startAnimation('#saladShadowCh');
            break;
    }


});

$('#second').on('change', function () {
    var val = $('#second').find("option:selected").val();

    switch(val)
    {
        case "ha":
            /*end others animations*/
            endAnimation('#salami1');
            endAnimation('#salami2');
            endAnimation('#salami3');
            endAnimation('#morta1');
            endAnimation('#morta2');
            endAnimation('#morta3');

            /*start animation*/
            startAnimation('#ham1');
            startAnimation('#ham2');
            startAnimation('#ham3');


            break;
        case "sa":
            /*end others animations*/
            endAnimation('#morta1');
            endAnimation('#morta2');
            endAnimation('#morta3');
            endAnimation('#ham1');
            endAnimation('#ham2');
            endAnimation('#ham3');

            /*start animation*/
            startAnimation('#salami1');
            startAnimation('#salami2');
            startAnimation('#salami3');
            break;
        case "mo":
            /*end others animations*/
            endAnimation('#ham1');
            endAnimation('#ham2');
            endAnimation('#ham3');
            endAnimation('#salami1');
            endAnimation('#salami2');
            endAnimation('#salami3');

            /*start animation*/
            startAnimation('#morta1');
            startAnimation('#morta2');
            startAnimation('#morta3');
            break;
    }


});

$('#second').on('change', function () {
    var val = $('#second').find("option:selected").val();

    switch(val)
    {
        case "ha":
            /*end others animations*/
            endAnimation('#salami1');
            endAnimation('#salami2');
            endAnimation('#salami3');
            endAnimation('#morta1');
            endAnimation('#morta2');
            endAnimation('#morta3');

            /*start animation*/
            startAnimation('#ham1');
            startAnimation('#ham2');
            startAnimation('#ham3');


            break;
        case "sa":
            /*end others animations*/
            endAnimation('#morta1');
            endAnimation('#morta2');
            endAnimation('#morta3');
            endAnimation('#ham1');
            endAnimation('#ham2');
            endAnimation('#ham3');

            /*start animation*/
            startAnimation('#salami1');
            startAnimation('#salami2');
            startAnimation('#salami3');
            break;
        case "mo":
            /*end others animations*/
            endAnimation('#ham1');
            endAnimation('#ham2');
            endAnimation('#ham3');
            endAnimation('#salami1');
            endAnimation('#salami2');
            endAnimation('#salami3');

            /*start animation*/
            startAnimation('#morta1');
            startAnimation('#morta2');
            startAnimation('#morta3');
            break;
    }


});

$('#third').on('change', function () {
    var val = $('#third').find("option:selected").val();

    switch(val)
    {
        case "ch":
            /*end others animations*/
            endAnimation('#cheese1');
            endAnimation('#cheese2');
            endAnimation('#mozza1');
            endAnimation('#mozza2');
            endAnimation('#brie1');
            endAnimation('#brie2');
            endAnimation('#brie3');
            endAnimation('#raclette1');
            endAnimation('#raclette2');
            endAnimation('#raclette3');

            /*start animation*/
            startAnimation('#cheddar1');
            startAnimation('#cheddar2');



            break;
        case "em":
            /*end others animations*/
            endAnimation('#mozza1');
            endAnimation('#mozza2');
            endAnimation('#brie1');
            endAnimation('#brie2');
            endAnimation('#brie3');
            endAnimation('#raclette1');
            endAnimation('#raclette2');
            endAnimation('#raclette3');
            endAnimation('#cheddar1');
            endAnimation('#cheddar2');

            /*start animation*/
            startAnimation('#cheese1');
            startAnimation('#cheese2');
            break;
        case "mo":
            /*end others animations*/
            endAnimation('#cheese1');
            endAnimation('#cheese2');
            endAnimation('#brie1');
            endAnimation('#brie2');
            endAnimation('#brie3');
            endAnimation('#raclette1');
            endAnimation('#raclette2');
            endAnimation('#raclette3');
            endAnimation('#cheddar1');
            endAnimation('#cheddar2');

            /*start animation*/
            startAnimation('#mozza1');
            startAnimation('#mozza2');
            break;
        case "br":
            /*end others animations*/
            endAnimation('#cheese1');
            endAnimation('#cheese2');
            endAnimation('#mozza1');
            endAnimation('#mozza2');
            endAnimation('#raclette1');
            endAnimation('#raclette2');
            endAnimation('#raclette3');
            endAnimation('#cheddar1');
            endAnimation('#cheddar2');

            /*start animation*/
            startAnimation('#brie1');
            startAnimation('#brie2');
            startAnimation('#brie3');
            break;
        case "ra":
            /*end others animations*/
            endAnimation('#cheese1');
            endAnimation('#cheese2');
            endAnimation('#mozza1');
            endAnimation('#mozza2');
            endAnimation('#brie1');
            endAnimation('#brie2');
            endAnimation('#brie3');
            endAnimation('#cheddar1');
            endAnimation('#cheddar2');

            /*start animation*/
            startAnimation('#raclette1');
            startAnimation('#raclette2');
            startAnimation('#raclette3');
            break;
    }


});

$('#fourth').on('change', function () {
    var val = $('#fourth').find("option:selected").val();

    switch(val)
    {
        case "lt":
            /*end others animations*/
            endAnimation('#saladTopCh');
            endAnimation('#saladTopShadowCh');
            endAnimation('#tomato1');
            endAnimation('#tomato2');
            endAnimation('#tomato3');

            /*start animation*/
            startAnimation('#saladTop');
            startAnimation('#saladTopShadow');


            break;
        case "ch":
            /*end others animations*/
            endAnimation('#saladTop');
            endAnimation('#saladTopShadow');
            endAnimation('#tomato1');
            endAnimation('#tomato2');
            endAnimation('#tomato3');

            /*start animation*/
            startAnimation('#saladTopCh');
            startAnimation('#saladTopShadowCh');
            break;

        case "to":
            /*end others animations*/
            endAnimation('#saladTop');
            endAnimation('#saladTopShadow');
            endAnimation('#saladTopCh');
            endAnimation('#saladTopShadowCh');

            /*start animation*/
            startAnimation('#tomato1');
            startAnimation('#tomato2');
            startAnimation('#tomato3');
            break;
    }


});

function startAnimation (targetElementClass) {
    var targetElement = $(targetElementClass)
    targetElement.css('animation', "draw 1.5s forwards 1 linear");

}

function endAnimation (targetElementClass) {
    var targetElement = $(targetElementClass)
    targetElement.css('animation','');
    targetElement.off();

}