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