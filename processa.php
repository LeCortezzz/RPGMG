<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $race = $_POST["race"];
    $class = $_POST["class"];
    $alignment = $_POST["alignment"];

    echo"<p>Você escolheu: </p>";
    echo "<ul>";
    echo "<li>Raça: $race</li>";
    echo "<li>Classe: $class</li>";
    echo "<li>Alinhamento: $alignment</li>";
    echo "</ul>";

    $musics = [
        ""=> [""]

    ];
}
?>