<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Insumo;
use App\Models\Producto;
use App\Models\ProductoInsumo;


class ProductoInsumoController extends Controller
{
  public function index(){
      $categorias = Categoria::all();
      $insumos = Insumo::all();
      return view("productoinsumo.index", compact("categorias", "insumos"));
  }
}
