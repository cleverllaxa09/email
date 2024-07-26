<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\MailExample;
use PDF;
use Mail;
class PDFController extends Controller
{
    //
    public function generatePDF(){
        $data["email"] = "your@gmail.com";
        $data["title"] = "From ItSolutionStuff.com";
        $data["body"] = "This is Demo";

        $pdf = PDF::loadView('emails.myTestMail', $data);
        $data["pdf"] = $pdf;

        Mail::to($data["email"])->send(new MailExample($data));

        dd('Mail sent successfully');
    }
    public function index(){
        $data["email"] = "josephvincentcayabyablaxa@gmail.com";
        $data["title"] = "From ItSolutionStuff.com";
        $data["body"] = "This is Demo";

        $pdf = PDF::loadView('emails.myTestMail', $data);
        $data["pdf"] = $pdf;

        Mail::to($data["email"])->send(new MailExample($data));

        dd('Mail sent successfully');
    }
}
