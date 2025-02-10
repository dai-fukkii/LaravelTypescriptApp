<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $A = collect([
            ['id' => 1, 'pA' => 'aa', 'pB' => 'a', 'name' => 'na'],
            ['id' => 1, 'pA' => 'aa', 'pB' => 'aa', 'name' => 'naa'],
            ['id' => 1, 'pA' => 'aa', 'pB' => 'aaa', 'name' => 'naaa'],
            ['id' => 2, 'pA' => 'b', 'pB' => 'b', 'name' => 'nb'],
            ['id' => 2, 'pA' => 'b', 'pB' => 'bb', 'name' => 'nbb'],
            ['id' => 2, 'pA' => 'b', 'pB' => 'bbb', 'name' => 'nbbb'],
            ['id' => 3, 'pA' => 'cc', 'pB' => 'c', 'name' => 'nc'],
            ['id' => 3, 'pA' => 'cc', 'pB' => 'cc', 'name' => 'ncc'],
            ['id' => 3, 'pA' => 'cc', 'pB' => 'ccc', 'name' => 'nccc'],

        ]);

        $f = $A->groupBy('id')->map(function ($items) {
            // pA == pB の要素を抽出
            $elem = $items->first(function ($item){
                if($item['pB']===$item['pA']){
                    return $item;
                }
            });
        
            // choices に pB のリストを格納
            $choicespB = $items->pluck('pB')->toArray();
            $choicesname = $items->pluck('name')->toArray();
        
            // 結果を1つの配列にまとめる
            return [$elem['id'], $elem['pA'], $elem['name'], $choicespB, $choicesname];
        });

        dd($f);


        return view('welcome');
    }
}
