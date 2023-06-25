<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Movie extends CI_Controller
{

    public function index()
    {
        $this->load->view('movie_search');
    }

    public function search()
    {
        $searchValue = $this->input->post('searchValue');
        $url = 'https://www.omdbapi.com/?i=tt3896198&apikey=606f3743&s=' . $searchValue;

        $response = file_get_contents($url);
        $movies = json_decode($response)->Search;

        $data['movies'] = $movies;
        $this->load->view('movie_search', $data);
    }
}