<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class PdfController extends Controller
{
    public function __construct() { 
        $this->middleware('auth'); 
    }
    
    public function imprimirpersonas(Request $request){
        $personas = DB::table('personas as per')
        ->select('per.nombre','per.tipo_doc','per.numero_doc','per.correo','per.telefono')
        ->get();
        $pdf = \PDF::loadView('Pdf.personasPDF',['personas' => $personas ]);
        $pdf->setPaper('carta', 'A4');
        return $pdf->download('Listado de Personas.pdf');
    }

    public function imprimirRegistroP($id_persona, $documento){
        $personas = DB::table('personas as per')
        ->select('per.nombre','per.tipo_doc','per.numero_doc','per.correo','per.telefono')
        ->where('id_persona', '=', $id_persona)
        ->get();
        //dd($personas);
        $pdf = \PDF::loadView('Pdf.personaPDF',['personas' => $personas ]);
        $pdf->setPaper('carta', 'A4');
        return $pdf->download('ID_'.$documento.'.pdf');
        
    }



}

?>

