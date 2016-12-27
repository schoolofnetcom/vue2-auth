<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class TimesController extends Controller
{
    public function index()
    {
        $url = url('/');
        return [
            [
                "id" => 1,
                "nome" => "Palmeiras",
                "escudo" => "$url/assets/palmeiras_60x60.png"
            ],
            [
                "id" => 2,
                "nome" => "Flamengo",
                "escudo" => "$url/assets/flamengo_60x60.png"
            ],
            [
                "id" => 3,
                "nome" => "Atlético-MG",
                "escudo" => "$url/assets/atletico_mg_60x60.png"
            ],
            [
                "id" => 4,
                "nome" => "Santos",
                "escudo" => "$url/assets/santos_60x60.png"
            ],
            [
                "id" => 5,
                "nome" => "Botafogo",
                "escudo" => "$url/assets/botafogo_60x60.png"
            ],
            [
                "id" => 6,
                "nome" => "Atlético-PR",
                "escudo" => "$url/assets/atletico-pr_60x60.png"
            ],
            [
                "id" => 7,
                "nome" => "Corinthians",
                "escudo" => "$url/assets/corinthians_60x60.png"
            ],
            [
                "id" => 8,
                "nome" => "Grêmio",
                "escudo" => "$url/assets/gremio_60x60.png"
            ],
            [
                "id" => 9,
                "nome" => "Fluminense",
                "escudo" => "$url/assets/fluminense_60x60.png"
            ],
            [
                "id" => 10,
                "nome" => "Ponte Preta",
                "escudo" => "$url/assets/ponte_preta_60x60.png"
            ],
            [
                "id" => 11,
                "nome" => "Chapecoense",
                "escudo" => "$url/assets/chapecoense_60x60.png"
            ],
            [
                "id" => 12,
                "nome" => "São Paulo",
                "escudo" => "$url/assets/sao_paulo_60x60.png"
            ],
            [
                "id" => 13,
                "nome" => "Cruzeiro",
                "escudo" => "$url/assets/cruzeiro_60x60.png"
            ],
            [
                "id" => 14,
                "nome" => "Sport",
                "escudo" => "$url/assets/sport_60x60.png"
            ],
            [
                "id" => 15,
                "nome" => "Coritiba",
                "escudo" => "$url/assets/coritiba_60x60.png"
            ],
            [
                "id" => 16,
                "nome" => "Internacional",
                "escudo" => "$url/assets/internacional_60x60.png"
            ],
            [
                "id" => 17,
                "nome" => "Vitória",
                "escudo" => "$url/assets/vitoria_60x60.png"
            ],
            [
                "id" => 18,
                "nome" => "Figueirense",
                "escudo" => "$url/assets/figueirense_60x60.png"
            ],
            [
                "id" => 19,
                "nome" => "Santa Cruz",
                "escudo" => "$url/assets/santa_cruz_60x60.png"
            ],
            [
                "id" => 20,
                "nome" => "América-MG",
                "escudo" => "$url/assets/america_mg_60x60.png"
            ]
        ];
    }
}
