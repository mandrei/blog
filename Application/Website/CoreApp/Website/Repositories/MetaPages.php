<?php
/**
 * User: andrei
 * Date: 2/21/14
 * Time: 11:42 PM
 */
namespace CoreApp\Website\Repositories;

use \App;

class MetaPages {

    public $database;


    public function __construct()
    {

        $this->database = App::make('WebsiteMetaPagesDatabase');

    }//__construct


    public function all()
    {

        $all_meta_pages = $this->database->all();

        if( $all_meta_pages != '') return $all_meta_pages;

        return false;

    }//all


    public function update_meta($page_id,$meta_description,$meta_keywords)
    {

        
        if($this->database->update_meta($page_id,$meta_description,$meta_keywords)) return true;

        return false;

    }//update_meta



    public function get_meta_by_id($page_id)
    {

        $meta = $this->database->get_meta_by_id($page_id);

        if( $meta != '' ) return $meta;

        return false;

    }//get_meta_by_id



}//end BlogPostCategory