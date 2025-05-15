<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class percobaan extends Controller
{
    public function april (request $request){
$request->validate(['a'=>'numeric','b'=>'numeric|not_in:0','c'=>'numeric']);

        // $a = $request->input('a');
        // $b = $request->input('b');
        
        // $a= (int) $a;
        // $b= (int) $b;
        $hasil = $request->a % $request->b + $request->c ;


return view ('penjumlahan', ['hasil'=>$hasil, 'a'=>$request->a, 'b'=>$request->b, 'c'=>$request->c]);
    }
}
