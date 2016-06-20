@extends('admin')

@section('content')
    <div class="row product-hide">
        <div class="product-table inner" style="margin-left:20px;margin-top:85px;" >
            <table class='table table-hover product-table-data lazy' id='ajax-filter'>
                <thead><tr>
                    <th>booking_id</th>
                    <th>Total bill</th>
                    <th>Final bill</th>
                    <th>After deal</th>
                    <th>Bill paid in advance</th>
                    <th>Coupon percent</th>
                    <th>Coupon Amount</th>
                    <th>tdr percent</th>
                    <th>tdr amount</th>
                    <th>Vendor percent</th>
                    <th>Vendor amount</th>
                    <th>Total profit after tdr</th>
                    <th>Money to Manager</th>
                    <th>Advance</th>
                    <th>Remaining</th>
                    <th>Account No</th>
                    <th>If money given to manager</th>
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
                        <td>{{ $val->total_cost-$val->vendor_amount }}</td>
                        <td>{{ $val->advance_payment }}</td>
                        <td>{{ $val->coupon_percent }}</td>
                        <td>{{ $val->coupon_amount }}</td>
                        <td>{{ $val->tdr_percent }}</td>
                        <td>{{ $val->tdr_amount }}</td>
                        <td>{{ $val->vendor_percent }}</td>
                        <td>{{ $val->vendor_amount }}</td>
                        <td>{{ $val->our_profit }}</td>
                        <td>{{ $val->manager_return }}</td>
                        <td>{{ ($val->total_cost-$val->vendor_amount)*$val->cancellation_percent/100 }}</td>
                        <td>{{ $val->manager_return-($val->total_cost-$val->vendor_amount)*$val->cancellation_percent/100 }}</td>
                        <td>{{ $val->account }}</td>
                        <td>
                            @if($val->if_money=='No')
                                <span class=" text-danger" style="padding: 3px 10px;">
                                    <select class="has-error" id="manager">
                                        <option value="No.{{ $val->booking_id }}" selected>No</option>
                                        <option value="Yes.{{ $val->booking_id }}" >Yes</option>
                                    </select>
                                </span>
                            @else
                                <span class="" style="background-color:lightgreen;padding: 3px 10px;">Yes</span>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

    </div>
    <div class="container" style="position: fixed;bottom: 0px;left: 10px;">
        <?php        echo str_replace('/?', '?', $bill->render()) ?></div>
    </div>
    <script>
        $(document).ready(function(){
            $('input[type=text],select').change(function(){
               var v=$(this).val().split(".");
                var r = confirm("Are your sure?");
                var id=v[1];
                var yes=v[0];
                if (r == true) {
                    $.get('{{asset('admin/ajax-invoice?id=')}}'+id+'&y='+yes,function(){
                        alert('Booking id='+id +' is changed to '+yes );
                    });
                }
            });
        });
    </script>

@endsection