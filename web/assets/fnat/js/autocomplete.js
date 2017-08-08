$(function() {
    $("input[data-id=especeId]").autocomplete({
        minLength : 3,

        source: function (request, response) {
            var recherche = $("input[data-id=especeId]").val();
            var objData = 'search=' + recherche;
            var url = $(this.element).attr('data-url');
            /*console.log(recherche);
            console.log(objData);
            console.log(url);*/

            $.ajax({
                url: url,
                dataType: "json",
                data : objData,
                type: 'POST',

                success: function (data) {
                    response($.map(data, function (data) {
                        return data;
                    }));
                },

                error: function (jqXHR, textStatus, errorThrown) {
                    /*console.log("jqXHR => ");
                    console.log( jqXHR );
                    console.log(textStatus, errorThrown);*/
                }
            }); // fin de l'ajax
        },//fin de la source

        select: function(event, ui) {

            function noNull(stringToVerif){
                if(stringToVerif === null || stringToVerif === 'undefined'){
                    return  '-';
                }
                return stringToVerif;
            }
            var lbNom = ui.item.lbNom;

            $("input[data-id=especeId]").val(noNull(ui.item.lbNom) + ", " + noNull(ui.item.nomVern) + ", " + noNull(ui.item.nomVernEng) );

            $("#observation_espece").val(ui.item.id);
            return false;
        }

    }).autocomplete("instance")._renderItem = function(ul, item) {
        return $("<li class='each'>")
        /* .append("<div class='acItem'><span class='name'>" +
             item.lbNom + "</span><br><span class='desc'>" +
             item.nomVern + "</span><br><span class='desc'>" +
             item.nomVernEng + "</span></div>")
         .appendTo(ul);*/
            .append('<div class="container-fluid acItem"><div class="col-sm-12">' +
                item.lbNom + '</div><div class="col-sm-12 name">' +
                item.nomVern + '</div><div class="col-sm-12 name">' +
                item.nomVernEng + '</div></div>'
            )
            .appendTo(ul);
    };

});