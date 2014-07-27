<?php
/**
 * User: andrei
 * Date: 2/9/14
 * Time: 12:50 AM
 */
namespace CoreApp\Website\Models;

use \App;

class JournalCategory {


    public $repository = '';


    public function __construct()
    {

        $this->repository = App::make('WebsiteJournalCategoryRepository');

    }//__construct



    public function all()
    {

        return $this->repository->all();

    }//all

    public function check_id_exists($category_id)
    {

        return $this->repository->check_id_exists($category_id);

    }//check_id_exists


    public function category_name_by_id($category_id)
    {

        return $this->repository->category_name_by_id($category_id);

    }//category_name_by_id
    

    public function insert_journal_category_get_id($meta_description,$meta_keywords,$category_url,$category,$journal_category_header_image)
    {

        return $this->repository->insert_journal_category_get_id($meta_description,$meta_keywords,$category_url,$category,$journal_category_header_image);

    }//insert_journal_category_get_id


     public function get_category_by_id($category_id)
     {

        return $this->repository->get_category_by_id($category_id);

     }//get_category_by_id
     

    public function update_category($category_id,$meta_description,$meta_keywords,$category_url,$category,$journal_category_header_image)
    {

        return $this->repository->update_category($category_id,$meta_description,$meta_keywords,$category_url,$category,$journal_category_header_image);

    }//update_category
    

    public function get_all_categories_paginated($per_page)
    {

        return $this->repository->get_all_categories_paginated($per_page);

    }//get_all_categories_paginated
    

    public function delete($id)
    {

        return $this->repository->delete($id);

    }//delete

}//JournalCategory