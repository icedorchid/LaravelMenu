
<style type="text/css">
  * {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  .main-header ul {
    list-style: none;
    padding: 0;
    margin: 0; 
  }
  .main-header {
    margin: auto;
    width: 75%;
    min-height: 90px;
    padding: 1em 2em;
    border: 2px solid #2675a9;
    border-top: none;
    border-radius: 0 0 5px 5px;
    background: #2980b9;
    font-family: cursive;
  }
  .main-header:after {
    content: " ";
    display: table;
    clear: both;
  }

  .main-nav,
  .drop-nav {
    background: #2c3e50;
  }
  .main-nav {
    float: right;
    border-radius: 4px;
    margin-top: 8px;
    border: solid 1px #1e2a36;
  }
    .main-nav > li {
      float: left;
      border-left: solid 1px #1e2a36;
    }
    .main-nav li:first-child {
      border-left: none;
    }
    .main-nav a {
      color: #fff;
      display: block;
      padding: 10px 30px;
      text-decoration: none;
    }
  .dropdown,
  .flyout {
    position: relative;
  }
  .dropdown:after {
    content: "\25BC";
    font-size: .5em;
    display: block;
    position: absolute;
    top: 38%;
    right: 12%;
  }
  .drop-nav,
  .flyout-nav {
    position: absolute;
    display: none;
  }
  .drop-nav li {
    border-bottom: 1px solid rgba(255,255,255,.2);
  }
  .dropdown:hover > .drop-nav,
  .flyout:hover > .flyout-nav {
    display: block;
  }
  .flyout-nav {
    left: 100%;
    top: 0;
  }
  .flyout:hover a,
  .flyout-nav {
    background: #395066;
  }  

</style>


<header class="main-header">
    <ul class="main-nav">
        
        @if( !empty($menus) && count($menus) )
            @foreach($menus as $menu)
                @php
                $child = \SatouchMenu::menu_has_child($menu->id);
                @endphp

                @if( !empty($child) && count($child) )
                    <li class="dropdown">
                        <a href="#">{{ $menu->menu_name }}</a>
                    {!! \SatouchMenu::menu_child_lists($menu->id, 'drop-nav') !!}
                @else
                    <li>
                        <a href="{!! \URL::to( \SatouchMenu::get_path_by_route_id($menu->route_id) ) !!}">{{ $menu->menu_name }}</a>
                    </li>
                @endif
            @endforeach
        @else
            <li><a href="#">Home</a></li>
        @endif
    </ul>
</header>