<?php
/**
 * Created by PhpStorm.
 * User: Ed
 * Date: 20/12/2015
 * Time: 21:03
 */

class MY_Loader extends CI_Loader {

    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content  = $this->view('templates/header', $vars, $return);
            $content  = $this->view('templates/navigation', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer', $vars, $return);

            return $content;
        else:
            $this->view('templates/header', $vars);
            $this->view('templates/navigation', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/footer', $vars);
        endif;
    }

    public function template_home($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content  = $this->view('templates/header_home', $vars, $return);
            $content  = $this->view('templates/navigation', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer_home', $vars, $return);

            return $content;
        else:
            $this->view('templates/header_home', $vars);
            $this->view('templates/navigation', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/footer_home', $vars);
        endif;
    }
}
