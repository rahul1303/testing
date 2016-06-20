<div class="row hover-demo">
    <div class="col-md-4" >
        <div class="outer-wrapper">
            <div class="on-hover-content1">
                <div  width="300px" height="300px"> <ol> @foreach($val as $value)

                        <li><b>Combo Name:{{ $value->combo }}</b></li>
                       <ol> <li>Budget: {{ $value->budget }}</li>
                           <li>type: {{ $value->type }}</li>
                           <li>Beverages : <br/>
                           <ol>
                               @if($value->veg_starter_avail=='Yes')
                                   <li>Veg starter:<?php $b=$value->veg_starter; $b=explode(';',$b);
                                       ?><ul>
                                           @foreach($b as $be)
                                               <li>{{ $be }}</li>
                                           @endforeach
                                       @if($value->veg_starter_num>='1')Choose any {{ $value->veg_starter_num }} of them
                                       @else
                                           All will be booked
                                       @endif
                                       </ul>
                                   </li>
                               @endif
                               @if($value->non_veg_starter_avail=='Yes')
                                   <li>Non Veg starter:<?php $b=$value->non_veg_starter; $b=explode(';',$b);
                                       ?><ul>
                                           @foreach($b as $be)
                                               <li>{{ $be }}</li>
                                           @endforeach
                                           @if($value->non_veg_starter_num>='1')Choose any {{ $value->non_veg_starter_num }} of them
                                           @else
                                               All will be booked
                                           @endif
                                       </ul>
                                   </li>
                               @endif
                                   @if($value->veg_main_course_avail=='Yes')
                                       <li>Veg main course:<?php $b=$value->veg_main_course; $b=explode(';',$b);
                                           ?><ul>
                                               @foreach($b as $be)
                                                   <li>{{ $be }}</li>
                                               @endforeach
                                               @if($value->veg_main_course_num>='1')Choose any {{ $value->veg_main_course_num }} of them
                                               @else
                                                   All will be booked
                                               @endif
                                           </ul>
                                       </li>
                                   @endif
                                   @if($value->non_veg_main_course_avail=='Yes')
                                       <li>Non Veg main course:<?php $b=$value->non_veg_main_course; $b=explode(';',$b);
                                           ?><ul>
                                               @foreach($b as $be)
                                                   <li>{{ $be }}</li>
                                               @endforeach
                                               @if($value->non_veg_main_course_num>='1')Choose any {{ $value->non_veg_main_course_num }} of them
                                               @else
                                                   All will be booked
                                               @endif
                                           </ul>
                                       </li>
                                   @endif
                                   @if($value->bread_avail=='Yes')
                                       <li>Bread:<?php $b=$value->bread; $b=explode(';',$b);
                                           ?><ul>
                                               @foreach($b as $be)
                                                   <li>{{ $be }}</li>
                                               @endforeach
                                               @if($value->bread_num>='1')Choose any {{ $value->bread_num }} of them
                                               @else
                                                   All will be booked
                                               @endif
                                           </ul>
                                       </li>
                                   @endif
                                   @if($value->rice_avail=='Yes')
                                       <li>Rice:<?php $b=$value->rice; $b=explode(';',$b);
                                           ?><ul>
                                               @foreach($b as $be)
                                                   <li>{{ $be }}</li>
                                               @endforeach
                                               @if($value->rice_num>='1')Choose any {{ $value->rice_num }} of them
                                               @else
                                                   All will be booked
                                               @endif
                                           </ul>
                                       </li>
                                   @endif
                                   @if($value->salad_avail=='Yes')
                                       <li>Salad:<?php $b=$value->salad; $b=explode(';',$b);
                                           ?><ul>
                                               @foreach($b as $be)
                                                   <li>{{ $be }}</li>
                                               @endforeach
                                               @if($value->salad_num>='1')Choose any {{ $value->salad_num }} of them
                                               @else
                                                   All will be booked
                                               @endif
                                           </ul>
                                       </li>
                                   @endif
                                   @if($value->dessert_avail=='Yes')
                                       <li>Desert:<?php $b=$value->dessert; $b=explode(';',$b);
                                           ?><ul>
                                               @foreach($b as $be)
                                                   <li>{{ $be }}</li>
                                               @endforeach
                                               @if($value->dessert_num>='1')Choose any {{ $value->dessert_num }} of them
                                               @else
                                                   All will be booked
                                               @endif
                                           </ul>
                                       </li>
                                   @endif
                                   @if($value->soft_drinks_avail=='Yes')
                                       <li>Soft drinks:<?php $b=$value->soft_drinks; $b=explode(';',$b);
                                           ?><ul>
                                               @foreach($b as $be)
                                                   <li>{{ $be }}</li>
                                               @endforeach
                                               @if($value->soft_drinks_num>='1')Choose any {{ $value->soft_drinks_num }} of them
                                               @else
                                                   All will be booked
                                               @endif
                                           </ul>
                                       </li>
                                   @endif
                                   @if($value->hard_drinks_avail=='Yes')
                                       <li>Hard drinks:<?php $b=$value->hard_drinks; $b=explode(';',$b);
                                           ?><ul>
                                               @foreach($b as $be)
                                                   <li>{{ $be }}</li>
                                               @endforeach
                                               @if($value->hard_drinks_num>='1')Choose any {{ $value->hard_drinks_num }} of them
                                               @else
                                                   All will be booked
                                               @endif
                                           </ul>
                                       </li>
                                   @endif
                           </ol>
                           </li>
                       </ol>
                        @endforeach
                        </ol>
                </div>
            </div>
        </div>
    </div>
</div>
