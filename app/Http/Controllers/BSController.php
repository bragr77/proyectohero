<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hero;
use App\Enemy;

class BSController extends Controller
{
    public function index(){

        $hero   = Hero::find(1)->first();
        $enemy  = Enemy::find(2)->first();

        $events = [];

        while ($hero->hp > 0 && $enemy->hp > 0) {

            $luck = random_int(0, 100);

            if ($luck >= 50) {

                $hp = $enemy->def - $hero->atq;

                if ($hp < 0) {
                    $enemy->hp -= $hp * -1;
                }

                dd($enemy->hp);
            }else{

            }

        }

        return view('admin.bs.index');
    }
}
