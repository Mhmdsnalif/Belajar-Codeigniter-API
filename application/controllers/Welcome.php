<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		
	}

	public function search()
    {
        $searchValue = $this->input->post('searchValue');
        $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=195ab1c1&s='.$searchValue;

        $response = file_get_contents($url);
        $movies = json_decode($response)->Search;

        $data['movies'] = $movies;
        $this->load->view('movie_list', $data);
    }
	
	
}


