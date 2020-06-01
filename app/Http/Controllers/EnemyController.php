<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enemy;

class EnemyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cont = 1;
        $enemies = Enemy::paginate(10);

        return view('admin.enemies.index', [
            'enemies' => $enemies,
            'cont' => $cont
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enemies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->saveEnemy($request, null);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enemy = Enemy::find($id);

        return view('admin.enemies.edit', ['enemy' => $enemy]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->saveEnemy($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enemy = Enemy::find($id);

        $filepath = public_path() . '/img/enemies/' . $enemy->img_path;
        \File::delete($filepath);

        $enemy->delete();

        return redirect()->route('enemy.index');
    }

    public function saveEnemy(Request $request, $id){

        if ($id) {
            $enemy = Enemy::find($id);
        }else{
            $enemy = new Enemy();
        }

        $enemy->name = $request->input('name');
        $enemy->hp = $request->input('hp');
        $enemy->atq = $request->input('atq');
        $enemy->def = $request->input('def');
        $enemy->coins = $request->input('coins');
        $enemy->xp = $request->input('xp');

        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $name = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path() . '/img/enemies', $name);

            $enemy->img_path = $name;
        }


        $enemy->save();

        return redirect()->route('enemy.index');

    }
}
