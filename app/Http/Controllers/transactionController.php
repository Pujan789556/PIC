<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class transactionController extends BaseController
{
   public function create(Request $req)
   {
   		 $heading_2 = DB::table('heading_2')->pluck('heading_name', 'id');
         return view('transaction')->with('heading_2', $heading_2);;
   		
   }

   public function submit(Request $req)
   {
      $heading_2 = $req->input('ac_heading');
      $party_name = $req->input('party_name');
      $share = $req->input('share');
      $sector = $req->input('sector');
      $sub_sector = $req->input('sub_sector');
      $group = $req->input('group');
      $purchase_cost = $req->input('purchase_cost');
      $comission_brokerage = $req->input('comission_brokerage');
      $capital_gain_tax = $req->input('capital_gain_tax');
      $total_payment = $req->input('total_payment');
      $voucher_cat = $req->input('voucher_cat');
      $payment_method = $req->input('payment_method');
      $date = $req->input('date');
      
      DB::table('transaction_table')->insert([
    ['voucher_type' => $voucher_cat,
      'amount' => $total_payment,
      'ac_group' => 1,
      'ac_subgroup' => 1,
      'ac_head1' => 1,
      'ac_head2' => $heading_2,
      'opening_dr' => 0,
      'opening_cr' => 0,
      'current_dr' => 0,
      'current_cr' => 0,
      'balance_dr' => 0,
      'balance_cr' => 0,
      'entered_by' => 'xxx',
      'approved_by' => 'aaa'

    ]
    
]);
      echo "Success";
   }
}
?>