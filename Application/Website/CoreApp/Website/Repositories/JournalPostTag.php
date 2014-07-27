<?php
/**
 * User: andrei
 * Date: 3/24/14
 * Time: 8:01 PM
 */
namespace CoreApp\Website\Repositories;

use \App;

class JournalPostTag {

    public $database;


    public function __construct()
    {

        $this->database = App::make('WebsiteJournalPostTagDatabase');

    }//__construct


    public function insert_journal_post_tags($tags)
    {

        $tag = $this->database->insert_journal_post_tags($tags);

        if( $tag == true ) return true;

        return false;

    }//insert_journal_post_tags

   
    public function get_tags_by_journal_id($journal_id)
    {

        $tags = $this->database->get_tags_by_journal_id($journal_id);

        if(count($tags) > 0 ) return $tags;

        return false;

    }//get_tag_by_id

    public function delete_tags_by_journal_id($journal_id)
    {

        if($this->database->delete_tags_by_journal_id($journal_id) == true) return true;

        return false;

    }//delete_tags_by_journal_id


    public function update_tags($journal_id,$tags)
    {

        if($this->database->update_tags($journal_id,$tags) == true ) return true;

        return false;

    }//update_tags



}//end JournalPostTag