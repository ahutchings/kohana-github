<?php defined('SYSPATH') or die('No direct script access.');

class Github extends phpGitHubApi
{
    public static function factory($debug = FALSE)
    {
        return new Github($debug);
    }
    
    public static function instance($debug = FALSE)
    {
        static $instance;
        
        // Create the instance if it does not exist
        empty($instance) AND $instance = new Github($debug);
        
        return $instance;
    }
}
