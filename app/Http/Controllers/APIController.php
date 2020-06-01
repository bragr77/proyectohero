<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hero;
use App\Enemy;
use App\Item;

use App\Http\Controllers\BSController;

class APIController extends Controller
{
    public function index(){

        $res =[
            "status"    => "Ok",
            "message"   => "La API funcional correctamente!"
        ];

        return response()->json($res, 200);
    }

    public function getAllHeroes(){

        $heroes = Hero::all();

        $res =[
            "status"    => "Ok",
            "message"   => "Lista de Heroes",
            "data"      => $heroes
        ];

        return response()->json($res, 200);
    }

    public function getHeroe($id){

        $hero = Hero::find($id);

        if (isset($hero)) {

            $res =[
                "status"    => "Ok",
                "message"   => "Obtener Heroe " . $hero->name,
                "data"      => $hero
            ];

        } else {

            $res =[
                "status"    => "Error",
                "message"   => "No se encontro el heroe",
                "data"      => $hero
            ];

        }

        return response()->json($res, 200);
    }

    public function getAllEnemies(){

        $enemies = Enemy::all();

        $res =[
            "status"    => "Ok",
            "message"   => "Lista de Enemigos",
            "data"      => $enemies
        ];

        return response()->json($res, 200);
    }

    public function getEnemy($id){

        $enemy = Enemy::find($id);

        if (isset($enemy)) {

            $res =[
                "status"    => "Ok",
                "message"   => "Obtener Enemigo " . $enemy->name,
                "data"      => $enemy
            ];

        } else {

            $res =[
                "status"    => "Error",
                "message"   => "No se encontro el Enemigo",
                "data"      => $enemy
            ];

        }

        return response()->json($res, 200);
    }

    public function getAllitems(){

        $items = Item::all();

        $res =[
            "status"    => "Ok",
            "message"   => "Lista de Items",
            "data"      => $items
        ];

        return response()->json($res, 200);
    }

    public function getItem($id){

        $item = Item::find($id);

        if (isset($item)) {

            $res =[
                "status"    => "Ok",
                "message"   => "Obtener Item " . $item->name,
                "data"      => $item
            ];

        } else {

            $res =[
                "status"    => "Error",
                "message"   => "No se encontro el Item",
                "data"      => $item
            ];

        }

        return response()->json($res, 200);
    }

    public function runManualBS($heroId, $enemyId){

        $bs = BSController::runAutoBattle($heroId, $enemyId);

        $res =[
            "status"    => "Ok",
            "message"   => "Sistema de Batalla entre " . $bs["heroName"] . " y " . $bs["enemyName"],
            "data"      => $bs
        ];

        return response()->json($res, 200);
    }

}
