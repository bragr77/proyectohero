<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Item;
use App\Enemy;

class AdminController extends Controller
{
    public function index(){

        $herocounter    = Hero::count();
        $itemcounter    = Item::count();
        $enemycounter   = Enemy::count();

        $report = [

            ['name' => "Heroes", 'counter' => $herocounter, 'route' => 'heroes.index', 'class'=>"btn-outline-primary"],
            ['name' => "Items", 'counter' => $itemcounter, 'route' => 'item.index', 'class'=>"btn-outline-success"],
            ['name' => "Enemigos", 'counter' => $enemycounter, 'route' => 'enemy.index', 'class'=>"btn-outline-danger"],

        ];

        return view('admin.index', ['report' => $report]);
    }
}
