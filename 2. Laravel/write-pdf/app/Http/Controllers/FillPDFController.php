<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;

use Illuminate\Http\Request;

class FillPDFController extends Controller
{
    public function process(Request $request)
    {
        // download sample file.
        Storage::disk('public')->put('test.pdf', file_get_contents('http://www.africau.edu/images/default/sample.pdf'));

        $outputFile = Storage::disk('public')->path('output.pdf');
        // fill data
        $this->fillPDF(Storage::disk('public')->path('test.pdf'), $outputFile);
        //output to browser
        return response()->file($outputFile);
    }


    public function fillPDF($file, $outputFile)
    {
        $fpdi = new FPDI;
        // merger operations
        $count = $fpdi->setSourceFile($file);
        for ($i=1; $i<=$count; $i++) {
            $template   = $fpdi->importPage($i);
            $size       = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);
            $left = 10;
            $top = 10;
            $text = "arjunphp.com";
            $fpdi->SetFont("helvetica", "", 15);
            $fpdi->SetTextColor(153,0,153);
            $fpdi->Text($left,$top,$text);
        }
        return $fpdi->Output($outputFile, 'F');
    }

    
}
