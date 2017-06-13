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

$('#checkboxes').on('change' , function () {


    $('input:checkbox').each(function()
    {
        if ($(this).is(':checked'))
        {
            var id = $(this).attr('id');

            switch(id)
            {
                case "salad":
                    /*start animation*/
                    startAnimation('#salad');
                    startAnimation('#saladShadow');
                    calculatePrice(id);


                    break;
                case "chene":
                    /*start animation*/
                    startAnimation('#saladCh');
                    startAnimation('#saladShadowCh');
                    break;
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
                case "tomato":
                    /*start animation*/
                    startAnimation('#tomato1');
                    startAnimation('#tomato2');
                    startAnimation('#tomato3');
                    break;
                case "chene2":
                    /*start animation*/
                    startAnimation('#saladTopCh');
                    startAnimation('#saladTopShadowCh');
                    break;
            }

        } else {
            var id = $(this).attr('id');

            switch(id)
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
                case "tomatos":
                    /*start animation*/
                    endAnimation('#tomato1');
                    endAnimation('#tomato2');
                    endAnimation('#tomato3');
                    break;
                case "chene2":
                    /*start animation*/
                    endAnimation('#saladTopCh');
                    endAnimation('#saladTopShadowCh');
                    break;
            }
        }


    });


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

function calculatePrice(targetId)
{

    alert();
    var data = null;
    readTextFile("./data/dbSandwicherie.json", function(text){
        data = JSON.parse(text);
    });
    alert(targetId);


    switch(targetId)
    {
        case "salad":
            alert(data.ingredients[0].nom[0]);
            break;
        case "chene":
            break;
        case "ham":
            break;
        case "salami":
            break;
        case "morta":
            break;
        case "bacon":
            break;
        case "salmon":
            break;
        case "cheddar":
            break;
        case "edam":
            break;
        case "mozza":
            break;
        case "brie":
            break;
        case "raclette":
            break;
        case "pickle":
            break;
        case "egg":
            break;
        case "ognon":
            break;
        case "salad2":
            break;
        case "tomato":
            break;
        case "chene2":
            break;
    }

}

function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}

