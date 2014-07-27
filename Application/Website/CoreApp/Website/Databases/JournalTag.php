<?php
/**
 * User: andrei
 * Date: 3/24/14
 * Time: 3:06 PM
 */
namespace CoreApp\Website\Databases;

use \DB;

class JournalTag {

    public $table = 'journal_tags';

    public function insert_journal_tag_get_id($meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image_extension)
    {

        return DB::table($this->table)
                 ->insertGetId(array(

                                  'meta_description'                    => $meta_description,
                                  'meta_keywords'                       => $meta_keywords,
                                  'tag_url'                             => $tag_url,
                                  'name'                                => $tag,
                                  'journal_tag_header_image_extension'  => $journal_tag_header_image_extension
            ));


    }//insert_journal_tag_get_id

    public function check_id_exists($tag_id)
    {

        return DB::table($this->table)
                 ->where('id','=',$tag_id)
                 ->take(1)
                 ->pluck('id');

    }//check_id_exists

    public function get_tag_by_id($tag_id)
    {

        return DB::table($this->table)
                 ->where('id','=',$tag_id)
                 ->get();

    }//get_tag_by_id

    public function update_tag($tag_id,$meta_description,$meta_keywords,$tag_url,$tag,$journal_tag_header_image)
    {

        return DB::table($this->table)
                 ->where('id','=',$tag_id)
                 ->update(array(


                                    'meta_description'                          => $meta_description,
                                    'meta_keywords'                             => $meta_keywords,
                                    'tag_url'                                   => $tag_url,
                                    'name'                                      => $tag,
                                    'journal_tag_header_image_extension'        => $journal_tag_header_image
            ));

    }//update_tag

    public function get_all_tags_paginated($per_page)
    {

       $query = DB::table($this->table)
                  ->remember(120)
                  ->select(array(       "{$this->table}.id as tag_id",
                                        "{$this->table}.name as tag"

                  ));

         return $query->paginate($per_page);

    }//get_all_posts_paginated

    public function all()
    {

        return DB::table($this->table)
                 ->get();

    }//all

    public function delete($id)
    {

        return DB::table($this->table)
                 ->where('id','=',$id)
                 ->delete();

    }//delete


}//end JournalTag