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
