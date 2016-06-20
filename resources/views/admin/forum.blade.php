@extends('admin')

@section('content')
    <div class="row product-hide">
        <div class="product-table inner" style="margin-left:20px;margin-top:85px;" >
            <table class='table table-hover product-table-data lazy' id='ajax-filter'>
                <thead><tr>
                    <th>Vendor_id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Timing</th>
                    <th>Show</th>
                </tr></thead>
                @foreach($forum as $val)
                    <tbody>
                    <tr>
                        <td>{{ $val->vendor_id }}</td>
                        <td>{{ $val->name }}</td>
                        <td>{{ $val->email }}</td>
                        <td>{{ $val->message }}</td>
                        <td>{{ $val->created_at }}</td>
                        <td><select>
                                <option value=".{{ $val->vendor_id }}.{{ $val->message }}" selected></option>
                                <option value="No.{{ $val->vendor_id }}.{{ $val->message }}">No</option>
                                <option value="Yes.{{ $val->vendor_id }}.{{ $val->message }}">Yes</option>
                            </select></td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

    </div>
    <script>
        $(document).ready(function(){
            $('input[type=text],select').change(function(){
                var v=$(this).val().split(".");
                var r = confirm("Are your sure?");
                var id=v[1];
                var message=v[2];
                var yes=v[0];
                if (r == true) {
                    $.get('{{asset('admin/ajax-forum?id=')}}'+id+'&y='+yes+'&message='+message,function(){
                        alert('Vendor id='+id +' is changed to '+yes );
                    });
                }
            });
        });
    </script>

@endsection