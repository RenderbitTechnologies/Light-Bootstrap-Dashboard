<?php

if (! function_exists('is_child_active')) {
    function is_child_active($children)
    {
        foreach ($children as $child) {
            if($child->isActive) {
                return true;
            } else if($child->hasChildren()) {
                return is_child_active($child->children());
            } else {
                return false;
            }
        }
    }
}