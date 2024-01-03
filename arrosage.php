<?php
/**
 * Créer une fonction arroser() qui prend le tableau qui suit en paramètre et arrose
 * chaque plante de 20cl et fait donc augmenter leur niveau d'eau d'autant.
 *
 * Puis hors de la fonction afficher les plantes par ordre alphabétique
 * et leur nouveau niveau d'eau
 */

$plants = [
    ['name'=> 'Ficus', "waterLevel" => 54 ],
    ['name'=> 'Cactus', "waterLevel" => 18 ],
    ['name'=> 'Monstera', "waterLevel" => 37 ],
    ['name'=> 'Plante-paon', "waterLevel" => 23 ],
    ['name'=> 'Aglaonème', "waterLevel" => 68 ],
    ['name'=> 'Echeveria', "waterLevel" => 41 ],
    ['name'=> 'Hortensia', "waterLevel" => 7 ],
];

// 1 - La méthode
function arroser(array $plants): array
{
   for ($i=0; $i < count($plants); $i++) {
       $plants[$i]['waterLevel'] += 20;
   }

   return $plants;
}

// 2 - Son utilisation
$wateredPlants = arroser($plants);

// 3 - Tri du tableau
array_multisort(array_column($wateredPlants, 'name'), SORT_ASC, $wateredPlants);

// 4 - Displaying the plants
foreach($wateredPlants as $wateredPlant) {
    echo $wateredPlant['name'] . ' - eau : ' . $wateredPlant['waterLevel'] . PHP_EOL;
}
