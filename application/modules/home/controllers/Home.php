<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The requested page was not found at " . $this->comp['company3'] . ".";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = $this->comp['company3'] . ", " . $this->comp['phone'];
        $data['description'] = "Your trusted partner for hassle-free, secure relocations. Efficient home and office moving services with competitive pricing. Contact " . $this->comp['company3'] . " at " . $this->comp['phone'] . ".";

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()
    {
        $current = $this->uri->uri_string();
        // Trim trailing slashes for clean matching
        $current = trim($current, '/');

        if (empty($current)) {
            return;
        }

        // 1. Home page index files redirect
        if ($current == 'index.html' || $current == 'index.php') {
            redirect('', 'location', 301);
        }

        // 2. Static Pages, Services, and States Redirect (handling trailing slash issues)
        $static_redirects = [
            'about-us' => 'about-us',
            'why-choose-us' => 'why-choose-us',
            'contact-us' => 'contact-us',
            'faqs' => 'faqs',
            'testimonials' => 'testimonials',
            'reviews' => 'reviews',
            'privacy-policy' => 'privacy-policy',
            'terms-and-conditions' => 'terms-and-conditions',
            'moving-tips' => 'moving-tips',
            'our-services' => 'our-services',
            'home-relocation' => 'home-relocation',
            'office-shifting' => 'office-shifting',
            'car-transportation' => 'car-transportation',
            'transportation-service' => 'transportation-service',
            'warehouse-services' => 'warehouse-services',
            'parcel-services' => 'parcel-services',
            'insurance' => 'insurance',
            'door-to-door-moving' => 'transportation-service', // Redirect door-to-door to transportation-service as removed

            // States
            'bihar' => 'bihar',
            'delhi' => 'delhi',
            'west-bengal' => 'west-bengal',
            'gujarat' => 'gujarat',
            'punjab' => 'punjab',
            'maharashtra' => 'maharashtra',
            'haryana' => 'haryana',
            'rajasthan' => 'rajasthan',
            'uttar-pradesh' => 'uttar-pradesh',
            'jharkhand' => 'jharkhand',
            'assam' => 'assam',
            'karnataka' => 'karnataka',
            'bangalore' => 'bangalore',
            'tamil-nadu' => 'tamil-nadu',
            'goa' => 'goa',
            'kerala' => 'kerala',
            'telangana' => 'telangana',
            'odisha' => 'odisha',
            'madhya-pradesh' => 'madhya-pradesh',
            'uttarakhand' => 'uttarakhand',
            'andhra-pradesh' => 'andhra-pradesh',
            'jammu-and-kashmir' => 'jammu-and-kashmir'
        ];

        if (isset($static_redirects[$current])) {
            redirect($static_redirects[$current], 'location', 301);
        }

        // 3. Dynamic City Redirects (e.g. packers-and-movers-in-kolkata -> west-bengal/packers-movers-kolkata)
        if (preg_match('/^packers-and-movers-in-([a-z0-9-]+)$/i', $current, $matches)) {
            $city_slug = $matches[1];
            
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
            
            $state_slug = 'india';
            foreach ($locations as $c_name => $s_slug) {
                $check_slug = strtolower(str_replace(' ', '-', $c_name));
                if ($check_slug == strtolower($city_slug)) {
                    $state_slug = $s_slug;
                    $city_slug = $check_slug;
                    break;
                }
            }
            
            redirect($state_slug . "/packers-movers-" . $city_slug, 'location', 301);
        }

        // 4. Dynamic Intercity Redirects (e.g. packers-and-movers-from-goa-to-mumbai/ -> packers-and-movers-from-goa-to-mumbai)
        if (preg_match('/^packers-and-movers-from-([a-z0-9-]+)-to-([a-z0-9-]+)$/i', $current, $matches)) {
            redirect("packers-and-movers-from-" . $matches[1] . "-to-" . $matches[2], 'location', 301);
        }

        // 5. Dynamic City Service Redirects (e.g. home-shifting-in-delhi/ -> home-shifting-in-delhi)
        if (preg_match('/^(home-shifting|office-shifting|car-transport|bike-transport)-in-([a-z0-9-]+)$/i', $current, $matches)) {
            redirect($matches[1] . "-in-" . $matches[2], 'location', 301);
        }

        // 6. Dynamic Old City-to-City Redirects (e.g. packers-and-movers-indore-tiruchirappalli/ -> packers-and-movers-from-indore-to-tiruchirappalli)
        if (strpos($current, 'packers-and-movers-') === 0) {
            $cities_part = substr($current, strlen('packers-and-movers-'));
            
            // Skip standard city page (packers-and-movers-in-...) and new intercity page (packers-and-movers-from-...)
            if (strpos($cities_part, 'in-') !== 0 && strpos($cities_part, 'from-') !== 0) {
                // List of known city slugs to handle multi-word cities correctly first
                $known_cities = [
                    "delhi", "noida", "gurgaon", "ghaziabad", "chandigarh", "jaipur", "dehradun", "mohali",
                    "ambala", "faridabad", "kolkata", "lucknow", "patna", "kanpur", "jammu", "indore",
                    "bhubaneswar", "jabalpur", "hubli", "meerut", "mumbai", "pune", "navi-mumbai",
                    "ahmedabad", "nagpur", "bhopal", "surat", "jhansi", "ranchi", "goa", "chennai",
                    "bangalore", "hyderabad", "coimbatore", "visakhapatnam", "madurai", "mysore",
                    "tirupur", "kerala", "tiruchirappalli", "jalandhar", "moga", "margao", "thanjavur"
                ];
                
                $matched = false;
                foreach ($known_cities as $from_city) {
                    if (strpos($cities_part, $from_city . '-') === 0) {
                        $to_city = substr($cities_part, strlen($from_city . '-'));
                        $to_city = trim($to_city, '-');
                        redirect("packers-and-movers-from-" . $from_city . "-to-" . $to_city, 'location', 301);
                        $matched = true;
                        break;
                    }
                }
                
                // Fallback for single-word cities not explicitly listed in $known_cities
                if (!$matched && preg_match('/^packers-and-movers-([a-z0-9]+)-([a-z0-9-]+)$/i', $current, $matches)) {
                    $from = $matches[1];
                    $to = $matches[2];
                    if (strtolower($from) !== 'in' && strtolower($from) !== 'from') {
                        redirect("packers-and-movers-from-" . $from . "-to-" . $to, 'location', 301);
                    }
                }
            }
        }
    }
}
