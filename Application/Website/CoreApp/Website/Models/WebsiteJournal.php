<?php
/**
 * User: andrei
 * Date: 2/8/14
 * Time: 8:01 PM
 */
namespace CoreApp\Website\Models;

use \App;

class WebsiteJournal {


    public $repository = '';


    public function __construct()
    {

        $this->repository = App::make('WebsiteJournalRepository');

    }//__construct



    public function insert_journal_get_id($meta_description,$meta_keywords,$post_url,$title,$post,$journal_image_extension,$journal_header_image_extension,$featured)
    {

        return $this->repository->insert_journal_get_id($meta_description,$meta_keywords,$post_url,$title,$post,$journal_image_extension,$journal_header_image_extension,$featured);

    }//all


    public function check_id_exists($journal_id)
    {

        return $this->repository->check_id_exists($journal_id);

    }//check_id_exists


    public function get_post_by_journal_id($journal_id)
    {

        return $this->repository->get_post_by_journal_id($journal_id);

    }//get_post_by_journal_id


    public function update_journal($journal_id,$meta_description,$meta_keywords,$post_url,$title,$post,$journal_image_extension,$journal_header_image_extension,$featured)
    {

        return $this->repository->update_journal($journal_id,$meta_description,$meta_keywords,$post_url,$title,$post,$journal_image_extension,$journal_header_image_extension,$featured);

    }//update_journal


    public function get_all_posts_paginated($per_page)
    {

        return $this->repository->get_all_posts_paginated($per_page);

    }//get_all_posts_paginated

    public function get_single_journal_by_id($journal_id)
    {

        return $this->repository->get_single_journal_by_id($journal_id);

    }//get_single_journal_by_id

    public function get_last_5_posts()
    {
        return $this->repository->get_last_5_posts();
        
    }//get_last_3_posts

    public function get_posts_by_category_id($category_id,$per_page)
    {

        return $this->repository->get_posts_by_category_id($category_id,$per_page);

    }//get_posts_by_category_id
    

    public function get_posts_by_tag_id($tag_id,$per_page)
    {

        return $this->repository->get_posts_by_tag_id($tag_id,$per_page);

    }//get_posts_by_tag_id



    public function get_posts_by_date($month,$year,$per_page)
    {

        return $this->repository->get_posts_by_date($month,$year,$per_page);

    }//get_posts_by_date

    public function journal_search($search,$per_page)
    {

        return $this->repository->journal_search($search,$per_page);

    }//journal_search

    public function delete($id)
    {

        return $this->repository->delete($id);

    }//delete journal

    public function count_posts_by_category_id($cat)
    {

        return $this->repository->count_posts_by_category_id($cat);

    }//count_posts_by_category_id

    public function distinct_journal_dates()
    {

        return $this->repository->distinct_journal_dates();

    }//distinct_journal_dates



}//WebsiteJournal