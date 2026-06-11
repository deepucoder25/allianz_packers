<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $data['title'] = "All India Service " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is best packers and movers service provider.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "All India Service " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is best packers and movers service provider.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $data = array(
            "state" => $state,
            "title" => $this->comp['company3'] . " in $state",
            "description" => $this->comp['company3'] . " in $state",
            "keywords" => "$state " . $this->comp['company3'] . " in $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    { 
        $seo = array(
            // "Siliguri" => array(
            //     "title" => "",
            //     "desc" => ""
            // ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        //edit by Arshad 15-11-2024
        return array(
            'title' => "Best Packers and Movers in $city, $state | " . $this->comp['company3'],
            "desc" => "Hire top-rated packers and movers in $city, $state. " . $this->comp['company3'] . " offers reliable household shifting and vehicle transport services at affordable rates."
        );
    }
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink=strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            'img' => base_url('assets') . "/images/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Movers Packers $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city",
            "Removal companies in $city, Moving services in $city, Cheap movers in $city, Local movers in $city, Local moving companies in $city",
            "$city best moving companies, House movers $city, Packers movers $city, Moving services near $city, House removals $city, Cheap moving companies in $city",
            "Professional movers in $city, House movers near $city, Cheap movers $city, Best packers and movers in $city, Affordable movers $city, International movers from $city, International moving companies in $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }

    private function get_city_state($city_name)
    {
        $locations = [
            "Delhi" => "delhi",
            "Noida" => "uttar-pradesh",
            "Gurgaon" => "haryana",
            "Ghaziabad" => "uttar-pradesh",
            "Chandigarh" => "chandigarh",
            "Jaipur" => "rajasthan",
            "Dehradun" => "uttarakhand",
            "Mohali" => "punjab",
            "Ambala" => "haryana",
            "Faridabad" => "haryana",
            "Kolkata" => "west-bengal",
            "Lucknow" => "uttar-pradesh",
            "Patna" => "bihar",
            "Kanpur" => "uttar-pradesh",
            "Jammu" => "jammu-and-kashmir",
            "Indore" => "madhya-pradesh",
            "Bhubaneswar" => "odisha",
            "Jabalpur" => "madhya-pradesh",
            "Hubli" => "karnataka",
            "Meerut" => "uttar-pradesh",
            "Mumbai" => "maharashtra",
            "Pune" => "maharashtra",
            "Navi Mumbai" => "maharashtra",
            "Ahmedabad" => "gujarat",
            "Nagpur" => "maharashtra",
            "Bhopal" => "madhya-pradesh",
            "Surat" => "gujarat",
            "Jhansi" => "uttar-pradesh",
            "Ranchi" => "jharkhand",
            "Goa" => "goa",
            "Chennai" => "tamil-nadu",
            "Bangalore" => "karnataka",
            "Hyderabad" => "telangana",
            "Coimbatore" => "tamil-nadu",
            "Visakhapatnam" => "andhra-pradesh",
            "Madurai" => "tamil-nadu",
            "Mysore" => "karnataka",
            "Tirupur" => "tamil-nadu",
            "Kerala" => "kerala"
        ];
        
        return $locations[$city_name] ?? 'india';
    }

    function city_to_city($from_slug = '', $to_slug = '')
    {
        if (empty($from_slug) || empty($to_slug)) {
            redirect("error?Invalid+Request");
        }
        
        $this->load->helper('text');
        
        $from_city = ucwords(str_replace("-", " ", $from_slug));
        $to_city = ucwords(str_replace("-", " ", $to_slug));
        
        $st = $this->get_city_state($from_city);
        $cities = array();
        if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
            include "./application/modules/packers_movers/views/data/$st.php";
        }
        if (empty($cities)) {
            $cities = array(
                array('nm' => 'Delhi'),
                array('nm' => 'Mumbai'),
                array('nm' => 'Bangalore'),
                array('nm' => 'Pune'),
                array('nm' => 'Hyderabad'),
                array('nm' => 'Chennai'),
                array('nm' => 'Kolkata'),
                array('nm' => 'Ahmedabad'),
                array('nm' => 'Jaipur'),
                array('nm' => 'Noida'),
            );
        }
        
        $data = array(
            "from_city" => $from_city,
            "to_city" => $to_city,
            "from_slug" => $from_slug,
            "to_slug" => $to_slug,
            "city" => $from_city,
            "state" => ucwords(str_replace("-", " ", $st)),
            "st" => $st,
            "cities" => $cities,
            "title" => "Best Packers and Movers From $from_city to $to_city | " . $this->comp['company3'],
            "description" => "Hire top-rated packers and movers from $from_city to $to_city. " . $this->comp['company3'] . " offers secure, reliable, and affordable intercity household shifting and vehicle carrier services.",
            "keywords" => "packers and movers from $from_city to $to_city, intercity shifting from $from_city to $to_city, movers packers $from_city to $to_city, household relocation $from_city to $to_city",
            "module" => "packers_movers",
            "view_file" => "from_to_service",
        );
        
        echo Modules::run('template/layout2', $data);
    }
}
