<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    private function loadReviews() {
        $this->load->database();
        $query = $this->db->order_by('r_id', 'asc')->get('reviews');
        $reviews = [];
        foreach ($query->result() as $row) {
            $reviews[] = [
                "id" => $row->r_id,
                "name" => $row->name,
                "city" => $row->r_title, // We map r_title (db) to city (view)
                "rating" => (int) $row->stars,
                "review" => $row->r_desc,
                "status" => ($row->status == 1) ? "show" : "hide",
                "created_at" => $row->posted_date
            ];
        }
        return $reviews;
    }

    function index()
    {
        $reviews = $this->loadReviews();
        
        // Filter by star rating if requested
        $star_filter = $this->input->get('star');
        if ($star_filter) {
            $reviews = array_filter($reviews, function($r) use ($star_filter) {
                return ($r['rating'] ?? 5) == $star_filter;
            });
        }

        // Show only 'show' status
        $data['reviews'] = array_filter($reviews, function($r) {
            return ($r['status'] ?? 'show') === 'show';
        });
        
        $data['title'] = "Customer Reviews & Ratings | " . $this->comp['company3'];
        $data['description'] = "Detailed feedback and ratings from our satisfied clients. Read real reviews about our relocation services at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->load->database();
            
            $data = [
                'b_id' => 0,
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email') ? $this->input->post('email') : '',
                'r_title' => $this->input->post('city') ? $this->input->post('city') : '',
                'r_desc' => $this->input->post('review') ? $this->input->post('review') : '',
                'r_img' => '',
                'stars' => (int) $this->input->post('rating'),
                'views' => 0,
                'status' => 0, // 0 = Hide (Pending approval)
                'posted_date' => date('Y-m-d H:i:s')
            ];
            
            $this->db->insert('reviews', $data);
            
            $this->session->set_flashdata('success', 'Thank you! Your review has been submitted for approval.');
            redirect('reviews');
        }
    }
}