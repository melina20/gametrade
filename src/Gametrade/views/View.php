<?php

namespace Gametrade;


class View
{
    protected $view_data = array();
    protected $view_name;

    public function __construct($view_name)
    {
        if (empty($view_name))
            show_error('View name cannot be empty');
            
        $this->view_name = $view_name;
    }

    /**
     * Allows for passing data to the view
     *
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $this->view_data[$key] = $value;
    }

    /**
     * Overload the __get to let us fetch the variable from the view file
     *
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->view_data)) {
            return $this->view_data[$name];
        }
    }

    /**
     * Outputs the buffer to the web browser
     */
    public function output()
    {
        ob_start();
        include('app/'.$this->view_name.'.php');
        $output = ob_get_contents();
        ob_end_clean();
        echo $output;
    }
}