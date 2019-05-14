<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
  	public function form_evaluation(Request $request){
		//return $request->all();
		$data['nama'] = $request->nama;
		$data['noic'] = $request->noic;
		$data['jawatan']=$request->jawatan;
		$data['kursus']=$request->kursus;
		$data['tempoh']=$request->tempoh;
		$data['penganjur']=$request->penganjur;
		
		$data['a1'] = $request->a1;
		$data['a2'] = $request->a2;
		$data['a3'] = $request->a3;
		$data['a4'] = $request->a4;
		$data['a5'] = $request->a5;
		$data['a6'] = $request->a6;
		$data['a7'] = $request->a7;
		$data['a8'] = $request->a8;
		$data['a9'] = $request->a9;
		$data['a10'] = $request->a10;
		$data['a11'] = $request->a11;
		$data['a12'] = $request->a12;
		$data['a13'] = $request->a13;
		$data['a14'] = $request->a14;
		$data['a15'] = $request->a15;
		$data['a16'] = $request->a16;
		$data['a17'] = $request->a17;
		$data['a18'] = $request->a18;
		$data['a19'] = $request->a19;
		$data['a20'] = $request->a20;
		
		$pdf = PDF::loadView('borang-penilaian-pdf',$data);
		return $pdf->stream('document.pdf');
		
	}
}
