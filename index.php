<html>
<head>
<meta charset="UTF-8">
<title>MonoFútbol Stats</title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
<style type="text/css">
body {
    font-family: "sans-serif";
    margin: 0px;
}
a {
    font-weight: 900;
    color: inherit;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
header {
    font-size: 5em;
    color: #FFF;
    background-color: #0E92F7;
    text-align: center;
}
nav {
    background-color: #0E92F7;
    padding: 0.33em;
    text-align: center;
}
nav input {
    border: 2px solid #000;
    border-radius: 4px;
    width: 33%;
    font-size: 1.2em;
}
#seek {
    width: 11%;
    margin-left: 0.5em;
    background-color: #DDD;
}
#intro {
    background-color: #DDD;
    padding: 1em;
    border-bottom: 1px dotted #000;
}
#menu {
    border-bottom: 1px solid #aaa;
    font-size: 1.35em;
}
#menu a {
    margin: 0em 0.5em 0em 0.5em;
    color: #0E92F7;
}
#table {
    padding: 0.75em;
    border-bottom: 1px solid #000;
}
table {
    margin: auto;
    width: 80%;
    border-collapse: collapse;
}
th {
    background-color: #0E92F7;
    color: #FFF;
    text-align: center;
    padding: 0.5em;
    border-bottom: 1px solid #000;
}
td {
    font-size: 1.1em;
    padding: 0.5em;
    text-align: center;
}
tr {
    border-bottom: 1px solid #000;
}
.yellow {
    color: #CC0;
    font-weight: 900;
}
.red {
    color: red;
    font-weight: 900;
}
.grey {
    color: #aaa;
    font-weight: 900;
}
footer {
    text-align: center;
    padding: 0.5em;
    color: #FFF;
    background-color: #0E92F7;
}
#dato {
    text-align: right;
    border-bottom: 1px solid #000;
    padding: 1em;
}
.data {
        background-color: #0E92F7;
        color: #FFF;
        padding: 0.3em;
        border-radius: 3px;
}
</style>
</head>
<body>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$("#search").on("keyup", function() {
    var value = $(this).val();

    $("table tr").each(function(index) {
        if (index !== 0) {

            $row = $(this);

            var id = $row.find("td:first").text();

            if (id.indexOf(value) !== 0) {
                $row.hide();
            }
            else {
                $row.show();
            }
        }
    });
});
});//]]> 

</script>
<header>MonoFútbol Stats</header>
<section id="intro">
    <article id="menu"><strong>Menú:</strong> <a href="/foros/">Foros</a> <a href="search.php">Búsqueda avanzada</a> <a href="data.php">Análisis de datos</a> <a href="contact.php">Contacto</a></article>
    <p>Como uno de los pocos obsesionados que han logrado el extremo  de transformar un plataformas sencillo y divertido como el Ape Escape en un dignísimo juego arcade de fútbol, estirando todo lo posible un minijuego con un solo modo, el torneo, presento las estadísticas de sus 302 jugadores en una sencilla tabla SQL. Aunque no figure en el minijuego original, he calculado la puntuación general para cada mono a partir de la suma total de sus características, que son ocho, de tal modo que el peor mono puede tener 8 puntos y el mejor de todos, 72. A continuación, presentamos el código de colores, basado en el juego, y una orientación de la calidad general:</p>
    <ul>
        <li><span class="grey">[8 - 40)</span>: Malos y mediocres</li>
        <li><span class="yellow">(41 - 55)</span>: Buenos y muy buenos</li>
        <li><span class="red">(56 - 72]</span>: Excepcionales</li>
    </ul>
</section>
<nav><input type="text" id="search" /></nav>
<div id="dato"><strong>Datos:</strong> <a href="monkeys.csv" class="data">&#x21E9; CSV</a> <a href="monkeys.sql" class="data">&#x21E9; SQL</a></div>
<section id="table">
<?php include("consults.php"); ?>
</section>
<footer>Copyleft 2016, Media Inc Industries <br/> <a href="https://github.com/McManusson/Monkeys"><img src="github.png"/></a></footer>
</body>
</html>