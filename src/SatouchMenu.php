<?php
namespace Satouch\LaravelMenu;

use DB;
use Auth;

class SatouchMenu
{
    # Menu generator
    use SatouchMenuGeneratorTrait;

    public static $menuAttr = [];

    # get html lists
    public static function generate($attr = [])
    {
        self::$menuAttr = $attr;

        return self::drawMenuLists(self::$menuAttr);
    }

    # get menu child lists
    public static function menu_has_child($menu_id)
    {
        return self::has_child($menu_id);
    }

    # get menu child lists
    public static function menu_child_lists($menu_id, $class)
    {
        return self::child_lists($menu_id, $class);
    }

    # get route path by route ID
    public static function get_path_by_route_id($route_id)
    {
        $router_path = self::get_route_path($route_id);   
        return ( !empty($router_path) && count($router_path) ) ? $router_path[0]->router_path : '/';
    }

}