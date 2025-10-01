<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $race = $_POST["race"];
    $class = $_POST["class"];
    $alignment = $_POST["alignment"];


    $raceGenres =[
        "Elfo" = ["celtic","new-age","harp"]
        "Humano" = ["soft-rock","progressive-rock","gregorian"]
        "Goblin" = ["punk-rock","folk-punk","goblin-core"]
    ];
    $classGenres =[
        "Bárbaro" = ["metal","power-metal","doom"]
        "Mago" = ["david-bowie","alternative","indie-rock"]
        "Arqueiro" = ["ambient","rhythmic","celtic"]
    ];
    $alignmentGenres =[
        "Bom" = ["hope","fast-paced","happy"]
        "Neutral" = ["calm","passive","neutral"]
        "Evil" = ["dark","evil","obscure"]
    ];
    $genresVideos = [
        "celtic" = ["link1","link2","link3"]
        "new-age" = ["link1","link2","link3"]
        "harp" = ["link1","link2","link3"]
        "soft-rock" = ["link1","link2","link3"]
        "progressive-rock" = ["link1","link2","link3"]
        "gregorian" = ["link1","link2","link3"]
        "punk-rock" = ["link1","link2","link3"]
        "folk-punk" = ["link1","link2","link3"]
        "goblin-core" = ["link1","link2","link3"]
        "metal" = ["link1","link2","link3"]
        "power-metal" = ["link1","link2","link3"]
        "doom" = ["link1","link2","link3"]
        "david-bowie" = ["link1","link2","link3"]
        "alternative" = ["link1","link2","link3"]
        "indie-rock" = ["link1","link2","link3"]
        "ambient" = ["link1","link2","link3"]
        "rhythmic" = ["link1","link2","link3"]
        "hope" = ["link1","link2","link3"]
        "fast-paced" = ["link1","link2","link3"]
        "happy" = ["link1","link2","link3"]
        "calm" = ["link1","link2","link3"]
        "passive" = ["link1","link2","link3"]
        "neutral" = ["link1","link2","link3"]
        "dark" = ["link1","link2","link3"]
        "evil" = ["link1","link2","link3"]
        "obscure" = ["link1","link2","link3"]
    ]

} 
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
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
                        <?php $key = array_rand($musics[$race]); ?>
                            <li><?= $musics[$race][$key] ?></li>
                    <?php endif; ?>
                    <?php if (isset($musics[$class])): ?>
                        <?php $key = array_rand($musics[$class]); ?>
                            <li><?= $musics[$class][$key] ?></li>
                    <?php endif; ?>
                    <?php if (isset($musics[$alignment])): ?>
                        <?php $key = array_rand($musics[$alignment]); ?>
                            <li><?= $musics[$alignment][$key] ?></li>
                    <?php endif; ?>
                    
                </ul>
        </div>
    </body>
    </html>
