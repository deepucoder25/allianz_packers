<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        $data['title'] = "Our Packing & Moving Services | " . $this->comp['company3'];
        $data['description'] = "Explore our premium relocation and logistics services. From home relocation to office shifting, warehousing, vehicle transport, and more.";
        $data['module'] = "services";
        $data['view_file'] = "services";
        echo Modules::run('template/layout2', $data);
    }

    function homeRelocation()
    {
        $data['title'] = "Best Home Shifting & Household Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting and relocation services from " . $this->comp['company3'] . ". Smooth door-to-door household moving at affordable rates.";
        $data['module'] = "services";
        $data['view_file'] = "home_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Professional Office Relocation & Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services by " . $this->comp['company3'] . ". Minimize downtime with our experienced office relocation experts.";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services by " . $this->comp['company3'] . ". On-time and damage-free vehicle delivery across India.";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function transportation()
    {
        $data['title'] = "Reliable Goods Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted cargo transport and goods carrier services from " . $this->comp['company3'] . ". Safe, secure, and timely delivery of commercial and domestic cargo.";
        $data['module'] = "services";
        $data['view_file'] = "transportation";
        echo Modules::run('template/layout2', $data);
    }

    function door_to_door()
    {
        $data['title'] = "Seamless Door to Door Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get secure door-to-door moving and packaging services from " . $this->comp['company3'] . ". Complete packing, loading, transport, and unloading at your doorstep.";
        $data['module'] = "services";
        $data['view_file'] = "door_to_door";
        echo Modules::run('template/layout2', $data);
    }

    function warehouse()
    {
        $data['title'] = "Secure Warehousing & Storage Services | " . $this->comp['company3'];
        $data['description'] = "Safe and spacious household & commercial storage services from " . $this->comp['company3'] . ". Clean, fire-safe, and 24/7 monitored warehouses.";
        $data['module'] = "services";
        $data['view_file'] = "warehousing";
        echo Modules::run('template/layout2', $data);
    }

    function parcel()
    {
        $data['title'] = "Fast Parcel & Courier Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Reliable and cheap parcel moving services from " . $this->comp['company3'] . ". Safe packing and quick delivery of small and large parcels.";
        $data['module'] = "services";
        $data['view_file'] = "parcel_services";
        echo Modules::run('template/layout2', $data);
    }

    function insurance()
    {
        $data['title'] = "Transit Insurance Services | " . $this->comp['company3'];
        $data['description'] = "Secure your shifting with reliable transit insurance from " . $this->comp['company3'] . ". We ensure complete financial safety for your goods against transit damages.";
        $data['module'] = "services";
        $data['view_file'] = "insurance";
        echo Modules::run('template/layout2', $data);
    }
}
