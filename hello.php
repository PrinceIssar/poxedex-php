<!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <title>pokedex php</title></head><body><main>    <h1>Poxedex-PHP</h1>    <?php    if (!empty($_GET['location'])){//    $response = file_get_contents(`https://pokeapi.co/api/v2/pokemon/`);        $poki_url = 'https://pokeapi.co/api/v2/pokemon/'.$_GET['location'];        $poki_json =  file_get_contents($poki_url); // this method reads out what is in parameter in this case the url of pokeapi        $arr = (json_decode($poki_json,true));        echo $arr["name"];    }    ?>    <form action="">        <button type="submit">Run</button>        <input type="text" name="location"/>    </form>    <img src="<?php echo $arr["sprites"]["front_default"] ?>" alt=""></main></body></html>