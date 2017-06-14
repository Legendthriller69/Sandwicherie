/**
 * Created by flavien on 14.06.17.
 *
 *
 <script>
 $(document).ready(function() {
            loadJSONIngredient();
        });
 </script>
 */

function loadJSONIngredient() {
    $.get("/Sandwicherie/data/dbSandwicherie.json", function (data) {

        var res = '<tr><td><img src="img/bread.svg" class="legume"></td><td></td></tr>';

        for (var i = 0; i < data.pains.length; i++){
            res += '<tr><td>' + data.pains[i].nom + '</td><td>' + formatPrice(data.pains[i].prix) + '</td></tr>';
        }

        res += ' <tr><td><img src="img/salad.svg" class="legume"></td><td></td></tr>';

        for (var i = 0; i < data.legumes.length; i++){
            res += '<tr><td>' + data.legumes[i].nom + '</td><td>' + formatPrice(data.legumes[i].prix) + '</td></tr>';
        }

        res += ' <tr><td><img src="img/meat.svg" class="legume"></td><td></td></tr>';

        for (var i = 0; i < data.viandes.length; i++){
            res += '<tr><td>' + data.viandes[i].nom + '</td><td>' + formatPrice(data.viandes[i].prix) + '</td></tr>';
        }
        $("#tableIngredient").html(res);



        res = '<tr><td><img src="img/fish.svg" class="legume"></td><td></td></tr>';

        for (var i = 0; i < data.poissons.length; i++){
            res += '<tr><td>' + data.poissons[i].nom + '</td><td>' + formatPrice(data.poissons[i].prix) + '</td></tr>';
        }

        res += '<tr><td><img src="img/cheese.svg" class="legume"></td><td></td></tr>';

        for (var i = 0; i < data.fromages.length; i++){
            res += '<tr><td>' + data.fromages[i].nom + '</td><td>' + formatPrice(data.fromages[i].prix) + '</td></tr>';
        }

        res += '<tr><td><img src="img/plus.svg" class="legume"></td><td></td></tr>'

        for (var i = 0; i < data.supplements.length; i++){
            res += '<tr><td>' + data.supplements[i].nom + '</td><td>' + formatPrice(data.supplements[i].prix) + '</td></tr>';
        }
        $("#tableIngredient2").html(res);



        res = '<tr><td><img src="img/sauce.svg" class="legume"></td><td></td></tr>';

        for (var i = 0; i < data.sauces.length; i++){
            res += '<tr><td>' + data.sauces[i].nom + '</td><td>' + formatPrice(data.sauces[i].prix) + '</td></tr>';
        }
        $("#tableIngredient3").html(res);
    })
}
function formatPrice(prix) {
    prix = prix + '';
    if (prix.indexOf('.') != -1){
        prix += "0";
        return prix.replace('.', ',');
    }
    return prix + '.-';
}