
{{--<div class="offcanvas-lg offcanvas-start p-0" tabindex="-1" id="sidebarMenu" aria-labelledby="offcanvasResponsiveLabel">--}}
{{--    <div class="offcanvas-header">--}}
{{--        <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">dashboard</h5>--}}
{{--        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>--}}
{{--    </div>--}}
{{--    <div class="offcanvas-body">--}}
{{--        @foreach(getSideMenu() AS $main => $subData)--}}
{{--            <div class="accordion p-3" id="{{$main}}AccordionMain">--}}
{{--                <div class="accordion-item border-0">--}}
{{--                    <h2 class="accordion-header" id="{{$main}}AccordionHeader">--}}
{{--                        <a href="#" class="accordion-button {{ $current_main !== $main ? 'collapsed' : '' }} nav-links-hover p-1" type="button" data-bs-toggle="collapse"--}}
{{--                           data-bs-target="#{{$main}}AccordionBody" aria-expanded="false" aria-controls="{{$main}}AccordionBody">--}}
{{--                            <h4><i class="bi bi-person-lines-fill"></i> &nbsp; {{ $main }}</h4>--}}
{{--                        </a>--}}
{{--                    </h2>--}}
{{--                    <div id="{{$main}}AccordionBody" class="accordion-collapse collapse {{ $current_main == $main ? 'show' : '' }}"--}}
{{--                         aria-labelledby="{{$main}}AccordionHeader" data-bs-parent="#{{$main}}AccordionMain">--}}
{{--                        @foreach($subData AS $sub => $pages)--}}
{{--                            <div class="accordion" id="{{$sub}}AccordionMain">--}}
{{--                                <div class="accordion-item border-0">--}}
{{--                                    <h2 class="accordion-header p-2" id="{{$sub}}AccordionHeader">--}}
{{--                                        <a href="#" class="accordion-button {{ $current_sub !== $sub ? 'collapsed' : '' }} p-1" type="button" data-bs-toggle="collapse"--}}
{{--                                           data-bs-target="#{{$sub}}AccordionBody" aria-expanded="false" aria-controls="{{$sub}}AccordionBody">--}}
{{--                                            <h5>{{ $sub }}</h5>--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div id="{{$sub}}AccordionBody" class="accordion-collapse collapse {{ $current_sub == $sub ? 'show' : '' }}"--}}
{{--                                         aria-labelledby="{{$sub}}AccordionHeader" data-bs-parent="#{{$sub}}AccordionMain">--}}
{{--                                        <div class="accordion-body p-0">--}}
{{--                                            <ul class="list-group">--}}
{{--                                                @foreach($pages AS $page)--}}
{{--                                                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0">--}}
{{--                                                        <a href="{{ `admin.{$main}.{$sub}.{$page}` }}" class="ms-2 me-auto--}}
{{--                                                            {{ $current_page == $page ? 'active' : '' }}">{{ $page }}--}}
{{--                                                        </a>--}}
{{--                                                        <span class="badge bg-primary rounded-pill">14</span>--}}
{{--                                                    </li>--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}



<div>
    @foreach(getSideMenu() AS $main => $subData)
        <div>
            <h4>{{ __('pages.'."$main") }}</h4>
            @foreach($subData AS $sub => $pages)
            <h5>{{  __('pages.'."$main.$sub") }}</h5>
            <ul>
                @foreach($pages AS $page)
                    <li><a href="{{ route("admin.$main.$sub.$page") }}" class="ms-2 me-auto" style="color:{{ $current_page == $page ? 'red' : '' }};">
                        {{ __('pages.'."$main.$sub.$page") }}
                    </a></li>
                @endforeach
            </ul>
            @endforeach
        </div>
    @endforeach

</div>





