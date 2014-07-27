<?php
/**
 * User: andrei
 * Date: 2/4/14
 * Time: 11:04 PM
 */
namespace CoreApp\Website\Controllers\Frontend;

use \View,\App;

class Company extends \Controller {


    public function index()
    {

    	 //Get meta
        $meta_pages_model = App::make('WebsiteMetaPagesModel');

        $meta = $meta_pages_model->get_meta_by_id(4)[0];

        $data = array(

                        'meta_description'  => $meta->meta_description,
                        'meta_keywords'     => $meta->meta_keywords,
                        'meta_title'        => $meta->page_name,
                        'current_page'      => 'company'

                     );

        return View::make('CoreApp/Website/Views/Frontend/company',$data);

    }//index

}//end Home