<div class="sb2-1" style="background-color: white">
    <!--== USER INFO ==-->
    <div class="sb2-12">
        <ul>
            <li><img src="{{asset('admin/images/placeholder.jpg')}}" alt="">
            </li>
            <li>
                <h5>{{\Illuminate\Support\Facades\Auth::guard('admin')->user()->name}} <span> Santa Ana, CA</span></h5>
            </li>
            <li></li>
        </ul>
    </div>
    <!--== LEFT MENU ==-->
    <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a href="" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar-o" aria-hidden="true"> </i>Event</a>
                <div class="collapsible-body ">
                    <ul>
                        <li><a href="">All listing</a>
                        </li>
                        <li><a href="">Add New listing</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-tags" aria-hidden="true"></i> Category</a>
                <div class="collapsible-body ">
                    <ul>
                        <li><a href="">All listing</a>
                        </li>
                        <li><a href="">Add New listing</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
