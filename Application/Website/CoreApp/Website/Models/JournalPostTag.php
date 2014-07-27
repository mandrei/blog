<?php
/**
 * User: andrei
 * Date: 3/24/14
 * Time: 3:13 PM
 */
namespace CoreApp\Website\Models;

use \App;

class JournalPostTag {


    public $repository = '';


    public function __construct()
    {

        $this->repository = App::make('WebsiteJournalPostTagRepository');

    }//__construct



    public function insert_journal_post_tags($tags)
    {

        return $this->repository->insert_journal_post_tags($tags);

    }//insert_journal_post_tags


   

    public function get_tags_by_journal_id($journal_id)
    {

        return $this->repository->get_tags_by_journal_id($journal_id);

    }//get_tag_by_id

    public function delete_tags_by_journal_id($journal_id)
    {
        return $this->repository->delete_tags_by_journal_id($journal_id);

    }//delete_tags_by_journal_id


    public function update_tags($journal_id,$tags)
    {

        return $this->repository->update_tags($journal_id,$tags);

    }//update_tags

    
}//JournalPostTag