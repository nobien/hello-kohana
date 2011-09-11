<?php defined('SYSPATH') or die('No direct script access.');

class Kostache extends Kohana_Kostache {

    /**
     * @var     array    partials for the page
     */
    protected $_partials = array(
        
    );

    /**
     * @var     string    title of the site
     */
    public $title = 'Hello Kohana';

    /**
     * @var     boolean   show the banner space on template
     */
    public $banner_exists = FALSE;

    /**
     * @var     string    description of the page
     */
    public $description = 'Hello Kohana is an example project to learn Kohana and git for the nobien dudes.';

    /**
     * Return the charset for the page
     *
     * @return  string
     */
    public function charset()
    {
        return Kohana::$charset;
    }

    /**
     * Return the language for the page
     *
     * @return  string
     */
    public function language()
    {
        return I18n::$lang;
    }

    /**
     * Return the full year (for copyright notice)
     *
     * @return  string
     */
    public function year()
    {
        return date('Y');
    }

    /**
     * Returns URL::base() in order to link to assets properly
     *
     * @return  string
     */
    public function base_url()
    {
        return URL::base();
    }
    
    /**
     * Returns notices
     *
     * @return  string
     */
    public function notices()
    {
        return Notice::as_array();
    }
}

