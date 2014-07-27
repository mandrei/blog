<?php
/**
 * User: andrei
 * Date: 2/9/14
 * Time: 4:59 PM
 */
namespace CoreApp\Website\Repositories;

use \App;

class JournalPostCategory {

    public $database;


    public function __construct()
    {

        $this->database = App::make('WebsiteJournalPostCategoryDatabase');

    }//__construct


    public function insert_journal_post_id_category_id($journal_id,$category_id)
    {

        if( $this->database->insert_journal_post_id_category_id($journal_id,$category_id) == true ) return true;

        return false;

    }//insert_journal_post_id_category_id


    public function get_category_id_by_journal_id($journal_id)
    {

        $category_id = $this->database->get_category_id_by_journal_id($journal_id);

        if(count($category_id) > 0) return $category_id;

        return false;

    }//get_category_id_by_journal_id


    public function update_journal_post_id_category_id($journal_id,$category_id)
    {

        if($this->database->update_journal_post_id_category_id($journal_id,$category_id) == true) return true;

        return false;

    }//update_journal_post_id_category_id
    

    public function delete($id)
    {

        if($this->database->delete($id) == true) return true;

        return false;
        
    }//delete


}//end JournalPostCategory