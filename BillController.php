<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(Request $request)
    {
        $title = "Current Bill";
        $full_name = "Elaiza Masilungan";
        $customer_type = "Regular";
        $consumption = 150;

        if($customer_type == "Lifeline")
        {
            $rate = 5.00;
            $fixed_charge = 0;
            $percentage = 0.2;
        }
        else if($customer_type == "Regular")
        {
            $rate = 9.50;
            $fixed_charge = 50;
            $percentage = 0;
        }
        else if($customer_type == "commercial")
        {
            $rate = 12.00;
            $fixed_charge = 200;
            $pecentage = 0.05;
            
        }
        else
        {
            echo("Invalid costumer type");
        }
        $base_bill = $consumption * $rate;
        $discount = $percentage * $base_bill;
        $total_bill = $base_bill + $fixed_charge - $discount;
        return view('bill', compact('title', 'full_name', 'customer_type', 'consumption', 'base_bill', 'total_bill', 'discount', 'fixed_charge'));

    }
}

