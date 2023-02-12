<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Crypt;
class PDFController extends Controller
{
    public function generatepdf(){
       
       /* $data =[
            'title' => 'Welcome To Pdf Page',
            'date' => date('m/d/y')
        ];
        <h1>{{ $title }}</h1>
<p>date :- {{ $date }}</p>
    <p>welcome to generatepdf</p>
        */

        $pdf = PDF::loadView('index',);
        return $pdf->Download('First.pdf');
    }
}
