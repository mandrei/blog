<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 2/21/14
 * Time: 3:20 PM
 */
namespace CoreApp\Website\Models;

use \App;

class MetaPages {


    public $repository = '';


    public function __construct()
    {

        $this->repository = App::make('WebsiteMetaPagesRepository');

    }//__construct



    public function all()
    {

        return $this->repository->all();

    }//all


    public function update_meta($page_id,$meta_description,$meta_keywords)
    {

        return $this->repository->update_meta($page_id,$meta_description,$meta_keywords);

    }//update_meta


    public function get_meta_by_id($page_id)
    {

        return $this->repository->get_meta_by_id($page_id);

    }//get_meta_by_id




}//WebsiteBlog