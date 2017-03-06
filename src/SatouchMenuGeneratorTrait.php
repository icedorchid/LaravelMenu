<?php
namespace Satouch\LaravelMenu;

use DB;
use Auth;

trait SatouchMenuGeneratorTrait
{
    public static function drawMenuLists($attr)
    {
        $menus = DB::table('menus')
                    ->where('parent' ,'=', 0)
                    ->orderby('order', 'ASC')
                    ->get() ?: [];
        return view('satouchmenu::menu-parent', compact('menus'));
    }

    public static function has_child($menu_id)
    {
        return DB::table('menus')
                ->where('parent', $menu_id)
                ->orderby('order', 'ASC')
                ->get() ?: [];
    }

    public static function child_lists($menu_id, $class)
    {
        $child_menus =  DB::table('menus')
                        ->where('parent', $menu_id)
                        ->orderby('order', 'ASC')
                        ->get() ?: [];
        return view('satouchmenu::menu-child', compact('child_menus', 'class'));
    }

    public static function get_route_path($route_id)
    {
        return DB::table('menus')
                ->join('routes', 'routes.id', '=', 'menus.route_id')
                ->where('menus.route_id', $route_id)
                ->get() ?: [];
    }

}