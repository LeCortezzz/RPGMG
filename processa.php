<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $race = $_POST["race"];
    $class = $_POST["class"];
    $alignment = $_POST["alignment"];


    $raceGenres =[
        "Elfo" => ["celtic","new-age","harp"],
        "Humano" => ["soft-rock","progressive-rock","gregorian"],
        "Goblin" => ["punk-rock","folk-punk","goblin-core"]
    ];
    $classGenres =[
        "Barbaro" => ["metal","power-metal","doom"],
        "Mago" => ["david-bowie","alternative","indie-rock"],
        "Arqueiro" => ["ambient","rhythmic","celtic"]
    ];
    $alignmentGenres =[
        "Bom" => ["hope","fast-paced","happy"],
        "Neutro" => ["calm","passive","neutral"],
        "Mau" => ["dark","evil","obscure"]
    ];
    $genresVideos =[
        "celtic" => ["QRg_8NNPTD8","zNnzufK0nVE","zOvsyamoEDg"],
        "new-age" => ["Jl8iYAo90pE","QllvHZW33dE","LTrk4X9ACtw"],
        "harp" => ["vVTPbLhlbfI","BcElotwrZ8o","oPmKRtWta4E"],
        "soft-rock" => ["ufQUxoidxkM","UrIiLvg58SY","dTDuq0rBplg"],
        "progressive-rock" => ["IyUXTl_PQJ0","UgL-Pvuklcc","MjwttGizNEs"],
        "gregorian" => ["sQNJs89E6x8","c38tWxPeCNM","o81A31hlgEA"],
        "punk-rock" => ["JevbK84LxT4","vvWEKhGU6X4","hmxdNIyE4qI"],
        "folk-punk" => ["4hHVdicce7w","mr5pyAGrnE","ogzlmuH7nuY"],
        "goblin-core" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"],
        "metal" => ["E0ozmU9cJDg","cEyiM9adE","5abamRO41fE"],
        "power-metal" => ["0jgrCKhxE1s","zAaXhF9Fc-k","oOuSyKsZQ"],
        "doom" => ["Z-71-i1akB0","AX9pqyjYZBM","N-gbPDh-G1Y"],
        "david-bowie" => ["t365MuktYQs","kszLwBaC4Sw","iYYRH4apXDo"],
        "alternative" => ["3mbBbFH9fAg","D0meVJwBUl0","EkG42gUyhMs"],
        "indie-rock" => ["2SUwOgmvzK4","eCqdiwxMy4k","GL2UDFOg5f4"],
        "ambient" => ["FEawZWIY1d4","ddZKwg63bRg","fTiyi0q37io"],
        "rhythmic" => ["0cebiJV8tbs","ISCdNerKsi8","EzugmxtSqlo"],
        "hope" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"],
        "fast-paced" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"],
        "happy" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"],
        "calm" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"],
        "passive" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"],
        "neutral" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"],
        "dark" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"],
        "evil" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"],
        "obscure" => ["dQw4w9WgXcQ","dQw4w9WgXcQ","dQw4w9WgXcQ"]
    ];

    $selectedGenres = array_merge(
        $raceGenres[$race],
        $classGenres[$class],
        $alignmentGenres[$alignment],    
    );

    $selectedVideos = [];
    foreach ($selectedGenres as $genre){
        if(isset($genresVideos[$genre])){
            $selectedVideos[] = $genresVideos[$genre][array_rand($genresVideos[$genre])];
            

        }

    }
    $selectedVideos = array_slice($selectedVideos, 0, 3);
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
                <?php if (!empty($selectedVideos)): ?>
            <div class="videos-container">
            <?php foreach ($selectedVideos as $videoId): ?>
                <iframe width="auto" height="auto"
                        src="https://www.youtube.com/embed/<?= $videoId ?>" 
                        frameborder="0" allowfullscreen></iframe>
            <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Nenhum vídeo encontrado para os gêneros selecionados.</p>
        <?php endif; ?>
        </div>
    </body>
    </html>
