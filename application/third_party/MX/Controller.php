<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 9999736098';
        $this->comp['phonehtml'] = 'tel:+919999736098';
        $this->comp['phone1'] = '+91 9999062299';
        $this->comp['phonehtml1'] = 'tel:+919999062299';
        $this->comp['supportmail'] = 'info@allianzpackers.in';
        $this->comp['replyToMail'] = 'info@allianzpackers.in';
        $this->comp['mail'] = 'info@allianzpackers.in';    
        $this->comp['mailhtml'] = "mailto:info@allianzpackers.in";
        $this->comp['company3'] = "Allianz Packers and Movers Pvt. Ltd.";
        $this->comp['companydomain'] = 'allianzpackers.in';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";   
        $this->comp['linkedinhtml'] = "";
        $this->comp['whatsapphtml'] = "https://wa.me/919999736098";

        $this->comp['address'] = "Plot No- 44A, B Block, Rangpur, MAHIPALPUR, NEW DELHI 110037, INDIA";
        $this->comp['address1'] = "Plot No- 44A, B Block, Rangpur,";
        $this->comp['address2'] = "MAHIPALPUR, NEW DELHI 110037, INDIA";
        $this->comp['addressRegion'] = "New Delhi";
        $this->comp['postalCode'] = "110037";
        $this->comp['companystate'] = "Delhi";
        $this->comp['themeColor'] = "#c61a1a";

        $this->comp['experience'] = "25+";
        $this->comp['startYear'] = "2001";

        $this->comp['happyClients'] = "75,000+";
        $this->comp['yearsExperience'] = "25+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "18+";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
