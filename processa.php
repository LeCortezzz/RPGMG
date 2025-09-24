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
        "Elfo"=> ["Elfo Musica 1","Elfo Musica 2", "Elfo Musica 3"],
        "Humano"=> ["Humano Musica 1","Humano Musica 2", "Humano Musica 3"],
        "Goblin"=> ["Goblin Musica 1","Goblin Musica 2", "Goblin Musica 3"],
        
        "Barbaro"=> ["Barbaro Musica 1","Barbaro Musica 2","Barbaro Musica 3"],
        "Mago"=> ["Mago Musica 1","Mago Musica 2","Mago Musica 3"],
        "Guerreiro"=> ["Guerreiro Musica 1","Guerreiro Musica 2","Guerreiro Musica 3"],
        
        "Bom"=> ["Bom Musica 1","Bom Musica 2","Bom Musica 3"],
        "Neutro"=> ["Neutro Musica 1","Neutro Musica 2","Neutro Musica 3"],
        "Mau"=> ["Mau Musica 1","Mau Musica 2","Mau Musica 3"],
    ];

    echo "<h2>Músicas Sugeridas:</h2>";
    echo "<ul>";

    if (isset($musics[$race])) {
        foreach ($musics[$race] as $musicdrop) {
            echo "<li>$musicdrop</li>";

        }
    }
    if (isset($musics[$alignment])) {
        foreach ($musics[$alignment] as $musicdrop) {
            echo "<li>$musicdrop</li>";

        }
    }
    if (isset($musics[$class])) {
        foreach ($musics[$class] as $musicdrop) {
            echo "<li>$musicdrop</li>";

        }
    }
}
?>