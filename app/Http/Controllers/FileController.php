<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Cedula;
use Illuminate\Support\Facades\Storage;
use DB;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('file.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$request->validate([
            'file' => 'required'
        ]);
        $files = $request->file('file')->store('public/files');
        $url = Storage::url($files);

        

        File::create([
            'url' => $url
        ]);

        //(`CEDULA`, `CODELEC`, `FECHACADUC`, `JUNTA`, `NOMBRE`, `PAPELLIDO`, `SAPELLIDO`) 
        return redirect()->route('files.index')
        ->with('success','File upload successfully');*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $archivo = fopen(storage_path("app/public/files/AL.txt"), "r") 
        or die("proeblemas al abrir");
    //dd($archivo);
        while(!feof($archivo)){
            $content = fgets($archivo);
            $carray = explode(",", $content);
            //dd($carray);
            list($CEDULA, $CODELEC, $FECHACADUC,
                 $JUNTA, $NOMBRE, $PAPELLIDO, $SAPELLIDO
                )= $carray;

                $file = new Cedula();

                $file->CEDULA = $CEDULA;
                $file->CODELEC = $CODELEC;
                $file->FECHACADUC = $FECHACADUC;
                $file->JUNTA = $JUNTA;
                $file->NOMBRE = $NOMBRE;
                $file->PAPELLIDO = $PAPELLIDO;
                $file->SAPELLIDO = $SAPELLIDO;

                $file->save();
    
               
                
        }
        fclose($archivo);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
