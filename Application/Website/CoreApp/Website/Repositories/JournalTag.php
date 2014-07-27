<?php
/**
 * User: andrei
 * Date: 3/24/14
 * Time: 8:01 PM
 */
namespace CoreApp\Website\Repositories;

use \App;

class JournalTag {

    public $database;


    public function __construct()
    {

        $this->database = App::make('WebsiteJournalTagDatabase');

    }//__construct


    public function insert_journal_tag_get_id($meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image_extension)
    {

        $Tag = $this->database->insert_journal_tag_get_id($meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image_extension);

        if( is_int($Tag) ) return $Tag;

        return false;

    }//insert_journal_tag_get_id

    public function check_id_exists($tag_id)
    {

        if(count($this->database->check_id_exists($tag_id)) > 0) return true;

        return false;

    }//check_id_exists

    public function get_tag_by_id($tag_id)
    {

        $tag = $this->database->get_tag_by_id($tag_id);

        if(count($tag) > 0 ) return $tag;

        return false;

    }//get_tag_by_id


    public function update_tag($tag_id,$meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image)
    {

        if($this->database->update_tag($tag_id,$meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image) == true ) return true;

        return false;

    }//update_tag


    public function get_all_tags_paginated($per_page)
    {

        $paginated = $this->database->get_all_tags_paginated($per_page);

        if($paginated != '' ) return $paginated;

        return false;

    }//get_all_tags_paginated
    

    public function all()
    {
        $all = $this->database->all();

        if($all != '') return $all;

        return false;

    }//all


    public function delete($id)
    {

        if($this->database->delete($id) == true) return true;

        return false;
        
    }//delete


}//end JournalTag