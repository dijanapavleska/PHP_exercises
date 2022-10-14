<?php

//{"fact":"Unlike dogs, cats do not have a sweet tooth. Scientists believe this is due to a mutation in a key taste receptor.","length":114}
//{"fact":"When a cat chases its prey, it keeps its head level. Dogs and humans bob their heads up and down.","length":97}
//{"fact":"Every year, nearly four million cats are eaten in Asia.","length":55}

//gets represented as an array
$cat_facts = [
    //gets represented as an object in json
    [
        "fact" => "Every year, nearly four million cats are eaten in Asia.",
        "length" => 55,
    ],
    //gets represented as an object in json
    [
        "fact" => "When a cat chases its prey, it keeps its head level. Dogs and humans bob their heads up and down.",
        "length" => 97,
    ],

];
//returns the first associative array, which will be represented as an object in JSON
echo json_encode($cat_facts[0]);
