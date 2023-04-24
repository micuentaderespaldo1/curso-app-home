<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  

class CrudController extends Controller
{
    public function index(){
        $datos = DB::table("productos")->get();
        /*$datos = [
            "id_producto"=>"1",
            "nombre_producto"=>"Disco",
            "categoria"=>"Auto",
            "p_venta"=>"3.00"
        ];*/
        return View("welcome")->with("datos",$datos);

    }
    public function create(Request $request){
      /* $sql=DB::insert("insert into productos (id_producto, nombre_producto, categoria, p_venta) values (?,?,?,?)",[
        $request->txtid_producto,
        $request->nombre_producto,
        $request->txtcategoria,
        $request->txtp_venta
        ]);
        if($sql==true){
            return $request;
        }else{
            return false;
        }*/
        return $request;
    }
}
