<?php
/**
 * User: andrei
 * Date: 2/8/14
 * Time: 8:01 PM
 */
namespace CoreApp\Website\Repositories;

use \App;

class WebsiteJournal {

    public $database;


    public function __construct()
    {

        $this->database = App::make('WebsiteJournalDatabase');

    }//__construct


    public function insert_journal_get_id($meta_description,$meta_keywords,$post_url,$title,$post,$journal_image_extension,$journal_header_image_extension,$featured)
    {

        $journal_id = $this->database->insert_journal_get_id($meta_description,$meta_keywords,$post_url,$title,$post,$journal_image_extension,$journal_header_image_extension,$featured);

        if( is_int($journal_id) ) return $journal_id;

        return false;

    }//insert_journal_get_id

    public function check_id_exists($journal_id)
    {

        if(count($this->database->check_id_exists($journal_id)) > 0) return true;

        return false;

    }//check_id_exists

    public function get_post_by_journal_id($journal_id)
    {

        $journal_post = $this->database->get_post_by_journal_id($journal_id);

        if(count($journal_post) > 0 ) return $journal_post;

        return false;

    }//get_post_by_journal_id


    public function update_journal($journal_id,$meta_description,$meta_keywords,$post_url,$title,$post,$journal_image_extension,$journal_header_image_extension,$featured)
    {

        if($this->database->update_journal($journal_id,$meta_description,$meta_keywords,$post_url,$title,$post,$journal_image_extension,$journal_header_image_extension,$featured) == true ) return true;

        return false;

    }//update_journal


    public function get_all_posts_paginated($per_page)
    {

        $paginated = $this->database->get_all_posts_paginated($per_page);

        if($paginated != '' ) return $paginated;

        return false;

    }//get_all_posts_paginated


    public function get_single_journal_by_id($journal_id)
    {

        $single_journal = $this->database->get_single_journal_by_id($journal_id);

        if($single_journal != '') return $single_journal;

        return false;

    }//get_single_journal_by_id


    public function get_last_5_posts()
    {
        $posts = $this->database->get_last_5_posts();

        if($posts != '' && count($posts) <= 5) return $posts;

        return false;
        
    }//get_last_3_posts

    public function get_posts_by_category_id($category_id,$per_page)
    {

        $paginated = $this->database->get_posts_by_category_id($category_id,$per_page);

        if($paginated != '' ) return $paginated;

        return false;

    }//get_posts_by_category_id

    public function get_posts_by_tag_id($tag_id,$per_page)
    {

        $paginated = $this->database->get_posts_by_tag_id($tag_id,$per_page);

        if($paginated != '' ) return $paginated;

        return false;

    }//get_posts_by_tag_id

    public function get_posts_by_date($month,$year,$per_page)
    {

        $paginated = $this->database->get_posts_by_date($month,$year,$per_page);

        if($paginated != '' ) return $paginated;

        return false;

    }//get_posts_by_date


    public function journal_search($search,$per_page)
    {

        $search_paginated = $this->database->journal_search($search,$per_page);

        if($search_paginated != '' ) return $search_paginated;

        return false;

    }//journal_search

    public function delete($id)
    {

        if($this->database->delete($id) == true) return true;

        return false;
        
    }//delete

    public function count_posts_by_category_id($cat)
    {
        $count = $this->database->count_posts_by_category_id($cat);

        return $count;

    }//count_posts_by_category_id


    public function distinct_journal_dates()
    {

       return $this->database->distinct_journal_dates();

    }//distinct_journal_dates


}//end WebsiteJournal