<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Swal_test extends CI_Controller
{
    public function index()
    {
        $this->load->view('swaltest_v');
    }

    //OK, sure. The following is bad MVC but we're only doing a demo here - right?
    public function delete($id, $hash)
    {
        var_dump($id, $hash);
        ?>
        <a href='/swal_test'>Back</a>
        <?php
    }
} 