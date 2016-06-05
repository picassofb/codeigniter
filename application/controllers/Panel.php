<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->template_home('panel/index');
        } else {
            redirect('auth/login', 'refresh');
        }
    }

    public function Proveedor()
    {
        $crud = new grocery_CRUD();

        //$crud->set_theme('twitter-bootstrap');
        $crud->set_table('proveedor');
        $crud->set_subject('Proveedores');
        $crud->required_fields('ruc_ci');
        $crud->field_type('ruc_ci','integer');
        $crud->set_rules('ruc_ci','Cedula','numeric');
        $crud->columns('ruc_ci','apellidos','nombres','direccion','estado');

        $output = $crud->render();

        //$this->_example_output($output);
        $this->load->template('panel/proveedor',$output);

    }

    public function Empleado()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('empleado');
        $crud->set_subject('Empleados');
        $crud->required_fields('cedula','nombres','apellidos');
        $crud->field_type('cedula','integer');
        $crud->set_rules('cedula','Cedula','numeric');
        $crud->columns('cedula','apellidos','nombres','estado','foto','direccion');
        $crud->set_field_upload('foto','assets/uploads/files');

        $crud->field_type('fecha_ingreso','hidden');

        $output = $crud->render();

        //$this->_example_output($output);
        $this->load->template('panel/empleado',$output);

    }
}
