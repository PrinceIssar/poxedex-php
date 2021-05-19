<!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link rel="stylesheet" href="style.css">    <title>pokedex php</title></head><body><main>    <h1>Poxedex-PHP</h1>    <?php    $pokemon_name = '';    if (!empty($_GET['name'])){//      $response = file_get_contents(`https://pokeapi.co/api/v2/pokemon/`);        $poki_url = 'https://pokeapi.co/api/v2/pokemon/'.$_GET['name'];        $pokeSpecies_url = 'https://pokeapi.co/api/v2/pokemon-species/'.$_GET["name"];            $poki_json = file_get_contents($poki_url); // this method reads out what is in parameter in this case the url of pokeapi            $pokeSpeciesData = file_get_contents($pokeSpecies_url);            $arr = (json_decode($poki_json, true));// it's going to decode te json file            $pokeSpecies = json_decode( $pokeSpeciesData, true);            $poke_evolve = $pokeSpecies;            echo $arr["name"]."<br>";    }    ?>    <?php    if($poke_evolve['evolves_from_species'] === null){        echo 'This pokemon has no previous form';    }else{        echo 'The previous form of this pokemon is ' . $poke_evolve['evolves_from_species']['name'];    }    ?>    <form action="">        <button type="submit">Run</button>        <input type="text" name="name"/>    </form><div class="flexbox-container">   <div class="flexbox-item flexbox-item-1"> <h3> original </h3><img src="<?php echo $arr["sprites"]["other"]["official-artwork"]["front_default"] ?>" alt="" height="200" width="200"></div>    <div class="flexbox-item flexbox-item-2"> <h3> Evolution </h3><img src="<?php echo $arr["sprites"]["other"]["official-artwork"]["front_default"] ?>" alt="" height="200" width="200"></div></div>    <div class="flexbox-ul">        <ul class= "ul_one">         <p>Move</p>            <li class="moves" id="move_1"><?php echo ucwords($arr['moves'][0]['move']['name']) ?></li>            <li class="moves" id="move_2"><?php echo ucwords($arr['moves'][1]['move']['name']) ?></li>            <li class="moves" id="move_3"><?php echo ucwords($arr['moves'][2]['move']['name']) ?></li>            <li class="moves" id="move_4"><?php echo ucwords($arr['moves'][3]['move']['name']) ?></li>        </ul>        <ul class= "ul_one">          <p>Weight</p>            <li class="ability"><?php echo ucwords($arr['weight']) ?></li>        </ul>        <ul class= "ul_one">            <p>Type</p>            <li class="ability"><?php echo ucwords($arr['types'][0]['type']['name']) ?></li>            <li class="ability"><?php echo ucwords($arr['types'][1]['type']['name']) ?></li>        </ul>        <ul class= "ul_one">            <p>Stats</p>            <li class="ability"><?php echo ucwords($arr['stats'][0]['stat']['name']) ?></li>            <li class="ability"><?php echo ucwords($arr['stats'][1]['stat']['name']) ?></li>            <li class="ability"><?php echo ucwords($arr['stats'][2]['stat']['name']) ?></li>            <li class="ability"><?php echo ucwords($arr['stats'][3]['stat']['name']) ?></li>        </ul>    </div></main></body></html>