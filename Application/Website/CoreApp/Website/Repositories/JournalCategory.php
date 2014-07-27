<?php
/**
 * User: andrei
 * Date: 2/9/14
 * Time: 12:50 AM
 */
namespace CoreApp\Website\Repositories;

use \App;

class JournalCategory {

    public $database;


    public function __construct()
    {

        $this->database = App::make('WebsiteJournalCategoryDatabase');

    }//__construct


    public function all()
    {

        $categories = $this->database->all();

        if( count($categories) > 0 ) return $categories;

        return false;

    }//all

    public function check_id_exists($blog_id)
    {

        if(count($this->database->check_id_exists($blog_id)) > 0) return true;

        return false;

    }//check_id_exists

    public function category_name_by_id($category_id)
    {
        $name = $this->database->category_name_by_id($category_id);

        if($name != '') return $name;

        return false;

    }//category_name_by_id

    public function insert_journal_category_get_id($meta_description,$meta_keywords,$category_url,$category,$journal_category_header_image)
    {

        $Category = $this->database->insert_journal_category_get_id($meta_description,$meta_keywords,$category_url,$category,$journal_category_header_image);

        if( is_int($Category) ) return $Category ;

        return false;

    }//insert_journal_category_get_id

    public function update_category($category_id,$meta_description,$meta_keywords,$category_url,$category,$journal_category_header_image)
    {

        if($this->database->update_category($category_id,$meta_description,$meta_keywords,$category_url,$category,$journal_category_header_image) == true) return true;

        return false;

    }//update_category


    public function get_category_by_id($category_id)
    {

        $category = $this->database->get_category_by_id($category_id);

        if(count($category) > 0 ) return $category;

        return false;

    }//get_category_by_id


    public function get_all_categories_paginated($per_page)
    {

        $paginated = $this->database->get_all_categories_paginated($per_page);

        if(count($paginated) > 0 ) return $paginated;

        return false;

    }//get_all_categories_paginated


    public function delete($id)
    {

        if($this->database->delete($id) == true) return true;

        return false;
        
    }//delete

}//end JournalCategory