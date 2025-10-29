<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function cambioestadoemployee(Request $request)
	{
		$employees = Employee::find($request->id);
		$employees->estado=$request->estado;
		$employees->save();
	}
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        // $ciudad->delete(); sin id, se le pasa el objeto completo
        try {
            //Con ID
            $model = Employee::find($request->id);
            $model->delete();
            return redirect()->route('employeee.index')->with('successMsg', 'El registro se eliminó exitosamente');
        } catch (QueryException $e) {
            // Capturar y manejar violaciones de restricción de clave foránea
            Log::error('Error al eliminar el ciudad: ' . $e->getMessage());
            return redirect()->route('employeee.index')->withErrors('El registro que desea eliminar tiene información relacionada. Comuníquese con el Administrador');
        } catch (Exception $e) {
            // Capturar y manejar cualquier otra excepción
            Log::error('Error inesperado al eliminar el ciudad: ' . $e->getMessage());
            return redirect()->route('employeee.index')->withErrors('Ocurrió un error inesperado al eliminar el registro. Comuníquese con el Administrador');
        }
    }
}
