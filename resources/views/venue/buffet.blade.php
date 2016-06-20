<?php $val=$details->combos?>
<div class="row" style="margin-top: 20px;">
    <div class="col-sm-12">
        <table style="border: 1px solid black" class="text-muted">
            <tr>
                @foreach($val as $items)
                        <th style="padding: 10px 10px;background-color: #00bbff"><b>{{ $items->combo }} (Rs {{$items->budget}}/person)</b></th>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;background-color: whitesmoke"><b>Veg starter:</b>
                        @if($items->veg_starter_avail=='Yes')
                            @if($items->veg_starter_num=='0')
                                Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->veg_starter_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;"><b>Non Veg starter:</b>
                        @if($items->non_veg_starter_avail=='Yes')
                            @if($items->non_veg_starter_num=='0')
                                Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->non_veg_starter_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;background-color: whitesmoke"><b>Veg Main Course:</b>
                        @if($items->veg_main_course_avail=='Yes')
                            @if($items->veg_main_course_num=='0')
                                Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->veg_main_course_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;"><b>Non Veg Main Course:</b>
                        @if($items->non_veg_main_course_avail=='Yes')
                            @if($items->non_veg_main_course_num=='0')
                                Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->non_veg_main_course_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;background-color: whitesmoke"><b>Bread:</b>
                        @if($items->bread_avail=='Yes')
                            @if($items->bread_num=='0')
                                Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->bread_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;"><b>Salad:</b>
                        @if($items->salad_avail=='Yes')
                            @if($items->salad_num=='0')
                                Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->salad_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;background-color: whitesmoke"><b>Rice:</b>
                        @if($items->rice_avail=='Yes')
                            @if($items->rice_num=='0')
                                Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->rice_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;"><b>Dessert:</b>
                        @if($items->dessert_avail=='Yes')
                            @if($items->dessert_num=='0')
                                Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->dessert_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;background-color: whitesmoke"><b>Soft Drinks:</b>
                        @if($items->soft_drinks_avail=='Yes')
                            @if($items->soft_drinks_num=='0')
                                Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->soft_drinks_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($val as $items)
                    <td style="padding: 10px 10px;"><b>Hard drinks:</b>
                        @if($items->hard_drinks_avail=='Yes')
                            @if($items->hard_drinks_num=='0')
                                Almost Almost all will be served in the given above list
                            @else
                                Any <b>{{$items->hard_drinks_num}}</b> from the above given list
                            @endif
                        @else
                            Not available
                        @endif
                    </td>
                @endforeach
            </tr>
        </table>
    </div>
</div>