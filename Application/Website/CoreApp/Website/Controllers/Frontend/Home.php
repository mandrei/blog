<?php
/**
 * User: andrei
 * Date: 1/25/14
 * Time: 12:47 AM
 */
namespace CoreApp\Website\Controllers\Frontend;

use \View,\App;

class Home extends \Controller {


    public function index()
    {

		//Get meta
		$meta_pages_model = App::make('WebsiteMetaPagesModel');

		$meta = $meta_pages_model->get_meta_by_id(1)[0];

    	$data = array(

    					'meta_description'	=> $meta->meta_description,
    					'meta_keywords'		=> $meta->meta_keywords,
                        'meta_title'        => $meta->page_name,
                        'current_page'      => 'home'

    				 );

        return View::make('CoreApp/Website/Views/Frontend/home',$data);

    }//index

}//end Home