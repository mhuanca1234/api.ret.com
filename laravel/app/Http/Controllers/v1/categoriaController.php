<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
 
class categoriaController extends Controller
{
   
    public function getAll()
    {
 
      $response = new \stdClass();

      $categoria = Categoria::all();

      $response->success=true;
      $response->data=$categoria;


     
      return response()->json($response,200);
    }

    public function getItem($id)
    {

        $response = new \stdClass();
        $categoria = Categoria::find($id);
        $response->data = $categoria;
        $response->success=true;
        return response()->json($response,200);
    }



    public function store(Request $Request)
    {
   
        $response = new \stdClass();
     
        
        $categoria = new categoria();
       
        $categoria->codigo=$Request->codigo;
        $categoria->nombre=$Request->nombre;
      
        $categoria->save();

   
        $response->data = $categoria;
        $response->success=true;
        
      return response()->json($response,200);
    }


    public function update(Request $Request,$id)
    {
        $response = new \stdClass();

        $categoria = Categoria::find($id);
        $categoria->codigo=$Request->codigo;
        $categoria->nombre=$Request->nombre;
        $categoria->save();

        $response->data = $categoria;
        $response->success=true;

        return response()->json($response,200);

    }

    public function patchUpdate(Request $Request,$id)
    {
        $response = new \stdClass();
        $categoria = Categoria::find($id);

        if($Request->codigo!=null)
        {
           $categoria->codigo=$Request->codigo; 
        }

        if($Request->nombre!=null)
        {
           $categoria->nombre=$Request->nombre; 
        }

        $categoria->save();

        $response->data = $categoria;
        $response->success=true;
        return response()->json($response,200);
    }


    public function delete($id)
    {
       $response = new \stdClass();
       $categoria = Categoria::find($id);
       $response->success=true;

        return response()->json($response,200);


        
    }
}