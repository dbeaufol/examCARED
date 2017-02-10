<?php
namespace App\Http\Controllers;

use App\Product;
use App\Creator;
use App\Magasin;
use Illuminate\Http\Request;

class MagasinController extends Controller
{
    public function index(Request $request)
    {

      $products = Product::all();
      if($products === NULL)
      {
        $request->session()->flash('status','Aucun produit');
      }
      else
      {
        $request->session()->flash('status','All is Good');
      }
      return view('magasin', ['products' => $products]);
    }
}
