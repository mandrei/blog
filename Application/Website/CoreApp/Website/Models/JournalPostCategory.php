<?php
/**
 * User: andrei
 * Date: 2/9/14
 * Time: 4:59 PM
 */
namespace CoreApp\Website\Models;

use \App;

class JournalPostCategory {


    public $repository = '';


    public function __construct()
    {

        $this->repository = App::make('WebsiteJournalPostCategoryRepository');

    }//__construct



    public function insert_journal_post_id_category_id($journal_id,$category_id)
    {

        return $this->repository->insert_journal_post_id_category_id($journal_id,$category_id);

    }//insert_journal_post_id_category_id


    public function get_category_id_by_journal_id($journal_id)
    {

        return $this->repository->get_category_id_by_journal_id($journal_id);

    }//get_category_id_by_journal_id


    public function update_journal_post_id_category_id($journal_id,$category_id)
    {

        return $this->repository->update_journal_post_id_category_id($journal_id,$category_id);

    }//update_journal_post_id_category_id


    public function delete($id)
    {

        return $this->repository->delete($id);

    }//delete

}//JournalPostCategory