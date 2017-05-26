<?php
include_once 'cabecalho.php';
?>

<script src="../javaScript/jquery-3.2.0.min.js"></script>
<title>Mapa</title>
<div id="conteudo">
    <h1 class="t1">Países de Lingua Oficial Inglesa</h1>
    <hr id="hr-top"></hr>
    <div class="expressoes">
        <div class="map">
            <div id="googleMap">


            </div>
        </div>
        <li id="links-list">


        </li>
    </div>
</div>

<script type="text/javascript">

    function initMap() {

        var mapa = new google.maps.Map(document.getElementById("googleMap"), {
            zoom: 2,
            center: new google.maps.LatLng(53.65914, 0.072050),
            mapTypeId: google.maps.MapTypeId.TERRAIN

        });

        var list = $("#links-list");

        //array dos locais
        var locations = [

            //arrays
            ['Antigua e Barbuda', 17.077699, 61.799254],
            ['Bahamas', 24.6920214, -77.9837465],
            ['Bardados', 13.196007, -59.527360],
            ['Belize', 17.186688, -88.476342],
            ['Canadá', 57.917214, -101.289944],
            ['Dominica', 15.416643, -61.359992],
            ['Granada', 37.178136, -3.584140],
            ['Guiana', 4.857935, -58.884923],
            ['Ilhas Cook', -21.237042, -159.768060],
            ['Irlanda', 53.413299, -8.235308],
            ['Jamaica', 18.111526, -77.290987],
            ['Nigeria', 9.082670, 8.686604],
            ['São Cristovão e Nevis', 17.358465, -62.767894],
            ['São Vicente e Granadinas', 13.251806, -61.188239],
            ['Trinidad e Tobago', 10.691458, -61.189760],
            ['Austrália', -25.274080, 133.778920],
            ['Estados Unidos', 37.090493, -95.702593],
            ['Nova Zelandia', -40.900276, 174.912062],
            ['Reino Unido', 55.377836, -3.428078],

        ];

        var janelaInfo = new google.maps.InfoWindow();


        for (i = 0; i < locations.length; i++) { //marcacão de todos os locais


            var a_id = "location-" + i;
            var li = "<li><a class=\"link\" id=\"" + a_id + "\" href=\"#\">" + locations[i][0] + "</a></li>";
            list.append(li);

            var marker = new google.maps.Marker({
                title: locations[i][0],
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: mapa
            });

            var fn = function (_marker, _i) {
                return function () {

                    //pop up
                    janelaInfo.setContent(locations[_i][0]);
                    janelaInfo.open(mapa, _marker);

                    //zoom para o marcador
                    mapa.setZoom(6);
                    mapa.setCenter(_marker.getPosition());

                }
            };

            google.maps.event.addListener(marker, 'click', fn(marker, i));


            $('#' + a_id).on("click", (function (_marker) {
                return function (evt) {
                    evt.preventDefault();
                    google.maps.event.trigger(_marker, 'click');
                }
            })(marker));

        }

    }


</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY6ppukokIs5G3EhB43AvVo--MPW5dwsI&callback=initMap"
        type="text/javascript"></script>


<?php
include_once 'rodape.php';
?>
