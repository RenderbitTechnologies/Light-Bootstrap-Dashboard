<?php

if (! function_exists('is_child_active')) {
    function is_child_active($children)
    {
        foreach ($children as $child) {
            if($child->isActive || $child->active) {
                return true;
            } else if($child->hasChildren() && is_child_active($child->children())) {
                return true;
            }
        }
        return false;
    }
}

if (! function_exists('lbd_home_url')) {
    function lbd_home_url()
    {
        if (config('lbd.home_url')) {
            return config('lbd.home_url');
        }
        if (app('router')->has('lbd.dashboard')) {
            return route('lbd.dashboard');
        }
        return url('/');
    }
}

if (! function_exists('lbd_sidebar_button_color')) {
    function lbd_sidebar_button_color($sidebarColor = null)
    {
        $colors = [
            'black' => 'default',
            'azure' => 'info',
            'blue' => 'primary',
            'purple' => 'primary',
            'green' => 'success',
            'orange' => 'warning',
            'red' => 'danger',
        ];

        $sidebarColor = $sidebarColor ?: config('lbd.sidebar_color');

        return isset($colors[$sidebarColor]) ? $colors[$sidebarColor] : 'default';
    }
}
