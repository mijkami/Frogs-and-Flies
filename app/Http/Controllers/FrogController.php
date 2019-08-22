<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FrogController extends Controller
{
// Choix de la taille de la grille pour la matrice à générer
// $rowGrid = nombre de lignes à afficher
// $colGrid = nombre de colonnes à afficher

    public function generate($rowGrid, $colGrid)
    {
        // création d'1 array $rowArray avec une quantité d'éléments "$rowGrid",
        // ayant chacun une valeur de 1 à "$colGrid"
        $rowArray = array();
        for ($i = 0; $i < $rowGrid; $i++) {
            $rowArray[] = range(1, $colGrid);
        }
        // Initialisation de la matrice qui contiendra
        // le nest d'arrays (10 lignes x 10 colonnes pour chaque ligne)
        $matrix =  array();

        // Population de tous les éléments de la matrice
        // avec l'information "is-info" correspondant à la couleur bleue dans le CSS Bulma
        foreach (range(1, $rowGrid) as $row) {
            foreach (range(1, $colGrid) as $col) {
                $matrix[$row][$col] = "is-info";
            }
        }
        // Injection test d'un élément vert dans la matrice avec des coordonnées précises
        $matrix[8][5] = "is-success";

        return $matrix;
    }



    public function index()
    {
        // Choix de la taille de la grille pour la matrice à générer
        // $rowGrid = nombre de lignes à afficher
        // $colGrid = nombre de colonnes à afficher
        $rowGrid = 10;
        $colGrid = 10;


        $board = $this->generate($rowGrid, $colGrid);

        return view('pages.index', compact('rowGrid', 'colGrid', 'board'));

    }
}
