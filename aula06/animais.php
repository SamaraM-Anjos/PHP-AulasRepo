<?php
    $animaisClasses = array(
        "MAM" => array("Panthera leo", "Canis lupus", "Homo sapiens"),
        "AVES" => array("Struthio camelus", "Gallus gallus domesticus", "Ara ararauna"),
        "BAC" => array("Escherichia coli", "Staphylococcus aureus", "Lactobacillus acidophilus")
    );
    if(!(empty($_POST["nomeAnimal"]))){
        echo json_encode($animaisClasses[$_POST["nomeAnimal"]]);
    }
?>