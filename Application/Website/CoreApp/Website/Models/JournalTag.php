<?php
/**
 * User: andrei
 * Date: 3/24/14
 * Time: 3:13 PM
 */
namespace CoreApp\Website\Models;

use \App;

class JournalTag {


    public $repository = '';


    public function __construct()
    {

        $this->repository = App::make('WebsiteJournalTagRepository');

    }//__construct



    public function insert_journal_tag_get_id($meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image_extension)
    {

        return $this->repository->insert_journal_tag_get_id($meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image_extension);

    }//insert_journal_tag_get_id


    public function check_id_exists($tag_id)
    {

        return $this->repository->check_id_exists($tag_id);

    }//check_id_exists


    public function get_tag_by_id($tag_id)
    {

        return $this->repository->get_tag_by_id($tag_id);

    }//get_tag_by_id


    public function update_tag($tag_id,$meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image)
    {

        return $this->repository->update_tag($tag_id,$meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image);

    }//update_tag


    public function get_all_tags_paginated($per_page)
    {

        return $this->repository->get_all_tags_paginated($per_page);

    }//get_all_tags_paginated
    

    public function all()
    {
        return $this->repository->all();

    }//all

    
    public function delete($id)
    {

        return $this->repository->delete($id);

    }//delete journal tag



}//JournalTag