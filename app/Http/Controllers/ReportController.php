<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\Enrollment;
use Auth;
use PDF;
use App;

class ReportController extends Controller
{
    public function report1($pid) {
        $payment = Payment::find($pid);

        $payment = Payment::with('enrollment.student')->find($pid); // Eager load enrollment and student

    // যদি payment পাওয়া না যায়
    if (!$payment) {
        return "Payment not found.";
    }



        $pdf = App::make('dompdf.wrapper');

        $print = "<div style='margin:20px; padding:20px;'>";
        $print .= "<h1 align='center'>Payment Receipt</h1>";
        $print .= "<p>Receipt No: <b>" . $pid . "</b></p>";
        $print .= "<p>Paid Date: <b>" . $payment->paid_date . "</b></p>";
        $print .= "<p>Enrollment No: <b>" . $payment->enrollment->student->enrollment_no . "</b></p>";
        $print .= "<p>Student Name: <b>" . $payment->enrollment->student->name . "</b></p>";
        $print .= "<hr>";
        $print .= "<table style='width: 100%;'>";
        $print .= "<tr>";
        $print .= "<td>Description</td>";
        $print .= "<td>Amount</td>";
        $print .= "</tr>";
        $print .= "<tr>";
        $print .= "<td><h3>" . $payment->enrollment->batch->name . "</h3></td>";
        $print .= "<td><h3>" . $payment->amount . "</h3></td>";
        $print .= "</tr>";
        $print .= "</table>";
        $print .= "<hr>";
        $print .= "<span>Printed By: <b>" . Auth::user()->name . "</b></span>";
        $print .= "<span>Printed Date: <b>" . date('Y-m-d') . "</b></span>";
        $print .= "</div>";

        $pdf->loadHTML($print);
        return $pdf->stream();
    }


}
