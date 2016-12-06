
@extends('layout.default')
@section('content')
        <center>
            <form action="/transaction" method="post" oninput="total_payment.value=parseInt(purchase_cost.value)+parseInt(comission_brokerage.value) + parseInt(capital_gain_tax.value)">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                                             {!! Form::label('ac','A/C : ') !!}
                                             {!! Form::select('ac_heading', $heading_2, null, ['class' => 'form-control']) !!}
                                        </div>
                    Party Name : <input type="text" name="party_name"><br/>
                    Share :      <input type="text" name="share"><br/> 
                    Sector : <input type="text" name="sector"><br/>
                    Sub Sector : <input type="text" name="sub_sector"><br/>
                    Group : <input type="text" name="group"><br/>
                    Purchase Cost : <input type="number" name="purchase_cost" value="0"><br/>
                    Comission and Brokerage : <input type="number" name="comission_brokerage" value="0"><br/>
                    Capital gain tax : <input type="number" name="capital_gain_tax" value="0"><br/>
                    Total Payment : <input name="total_payment" for="purchase_cost comission_brokerage capital_gain_tax" value="0"><br/>
                    Voucher Category : <select name="voucher_cat">
                                        <option value="1">Journal Voucher</option>
                                        <option value="2">Payment Voucher</option>
                                     </select><br/>
                    Payment Mode : <select name="payment_mode">
                                        <option value="1">Cash</option>
                                        <option value="2">Bank</option>
                                        <option value="3">Credit</option>
                                     </select><br/>
                    Date : <input type="date" name="date" id="date"><br/>
                    <input type="submit" name="submit_entry" value="Submit Entry">

            </form>
       </center>
@stop
