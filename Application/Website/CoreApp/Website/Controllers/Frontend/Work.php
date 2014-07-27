<?php
/**
 * User: andrei
 * Date: 1/27/14
 * Time: 11:13 PM
 */
namespace CoreApp\Website\Controllers\Frontend;

use \View,\App;

class Work extends \Controller {


    public function index()
    {

    	//Get meta
		$meta_pages_model = App::make('WebsiteMetaPagesModel');

		$meta = $meta_pages_model->get_meta_by_id(2)[0];

		$data = array(

    					'meta_description'	=> $meta->meta_description,
    					'meta_keywords'		=> $meta->meta_keywords,
                        'meta_title'        => $meta->page_name,
                        'current_page'      => 'work'

    				 );

        return View::make('CoreApp/Website/Views/Frontend/work',$data);

    }//index

}//end Home