<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $race = $_POST["race"];
    $class = $_POST["class"];
    $alignment = $_POST["alignment"];


    $musics = [
        "Elfo"=> ["Elfo Musica 1","Elfo Musica 2", "Elfo Musica 3"],
        "Humano"=> ["Humano Musica 1","Humano Musica 2", "Humano Musica 3"],
        "Goblin"=> ["Goblin Musica 1","Goblin Musica 2", "Goblin Musica 3"],
        
        "Barbaro"=> ["Barbaro Musica 1","Barbaro Musica 2","Barbaro Musica 3"],
        "Mago"=> ["Mago Musica 1","Mago Musica 2","Mago Musica 3"],
        "Arqueiro"=> ["Arqueiro Musica 1","Arqueiro Musica 2","Arqueiro Musica 3"],
        
        "Bom"=> ["Bom Musica 1","Bom Musica 2","Bom Musica 3"],
        "Neutro"=> ["Neutro Musica 1","Neutro Musica 2","Neutro Musica 3"],
        "Mau"=> ["Mau Musica 1","Mau Musica 2","Mau Musica 3"],
    ];
} 
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Result</title>
    </head>
    <body>
        <div class="containerIndex">
            <h1>Você escolheu:</h1>
                <ul>
                    <li>Raça: <?= $race ?></li>
                    <li>Classe: <?= $class ?></li>
                    <li>Alinhamento: <?= $alignment ?></li>
                </ul>
            <h2>Músicas Sugeridas:</h2>
                <ul>
                    <?php if (isset($musics[$race])): ?>
                        <?php foreach ($musics[$race] as $musicdrop): ?>
                            <li><?= $musicdrop ?></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (isset($musics[$class])): ?>
                        <?php foreach ($musics[$class] as $musicdrop): ?>
                            <li><?= $musicdrop ?></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (isset($musics[$alignment])): ?>
                        <?php foreach ($musics[$alignment] as $musicdrop): ?>
                            <li><?= $musicdrop ?></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

        </div>
    </body>
    </html>
