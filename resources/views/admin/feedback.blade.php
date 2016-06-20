@extends('admin')

@section('content')
    <div class="row product-hide">
        <div class="product-table inner" style="margin-left:20px;margin-top:85px;" >
            <table class='table table-hover table-responsive  product-table-data lazy' id='ajax-filter'>
                <thead><tr>
                    <th>id</th>
                    <th>Message</th>
                </tr></thead>
                @foreach($feedback as $val)
                    <tbody>
                    <tr>
                        <td>{{ $val->id }}</td>
                        <td>{{ $val->message }}</td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

    </div>
@endsection