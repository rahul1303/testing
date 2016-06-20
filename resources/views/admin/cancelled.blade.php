@extends('admin')

@section('content')
    <div class="row product-hide">
        <div class="product-table inner" style="margin-left:20px;margin-top:85px;" >
            <table class='table table-hover product-table-data lazy' id='ajax-filter'>
                <thead><tr>
                    <th>booking_id</th>
                    <th>Total bill</th>
                    <th>Final bill</th>
                    <th>Bill paid in advance</th>
                    <th>Money to customer</th>
                    <th>Cancellation charges</th>
                    <th>Money to Manager</th>
                    <th>Total profit after tdr</th>
                    <th>Coupon percent</th>
                    <th>Coupon Amount</th>
                    <th>tdr percent</th>
                    <th>tdr amount</th>
                    <th>Vendor percent</th>
                    <th>Vendor amount</th>
                </tr></thead>
                <tr>
                    <td>TOTAL</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @foreach($bill as $val)
                    <tbody>
                    <tr>
                        <td>{{ $val->booking_id }}</td>
                        <td>{{ $val->total_cost }}</td>
                        <td>{{ $val->final_cost }}</td>
                        <td>{{ $val->advance_payment }}</td>
                        <td>{{ $val->advance_payment/2 }}</td>
                        <td>{{ $val->advance_payment/2 }}</td>
                        <td>{{ ($val->total_cost-$val->vendor_amount)*$val->cancellation_percent/100 }}</td>
                        <td>{{ $val->advance_payment/2-($val->total_cost-$val->vendor_amount)*$val->cancellation_percent/100-$val->tdr_amount }}</td>
                        <td>{{ $val->coupon_percent }}</td>
                        <td>{{ $val->coupon_amount }}</td>
                        <td>{{ $val->tdr_percent }}</td>
                        <td>{{ $val->tdr_amount }}</td>
                        <td>{{ $val->vendor_percent }}</td>
                        <td>{{ $val->vendor_amount }}</td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

    </div>

@endsection