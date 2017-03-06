@if( !empty($child_menus) && count($child_menus) )
    <ul class="{{ $class }}">
        @foreach($child_menus as $c_menu)
            @php
            $child = \SatouchMenu::menu_has_child($c_menu->id);
            @endphp

            @if( !empty($child) && count($child) )
                <li class="flyout">
                    <a href="{!! \URL::to( \SatouchMenu::get_path_by_route_id($c_menu->route_id) ) !!}">{{ $c_menu->menu_name }}</a>
                {!! \SatouchMenu::menu_child_lists($c_menu->id, 'flyout-nav') !!} 
            @else
                <li>
                    <a href="{!! \URL::to( \SatouchMenu::get_path_by_route_id($c_menu->route_id) ) !!}">{{ $c_menu->menu_name }}</a>
                {!! \SatouchMenu::menu_child_lists($c_menu->id, 'flyout-nav') !!} 
            @endif            
        @endforeach
    </ul>
@else
    </li>
@endif