<?php
/**
 * User: andrei
 * Date: 4/14/14
 * Time: 7:14 PM
 */
namespace CoreApp\Website\Controllers\Admin;

use \View, \App,\Input,\DB,\Image;

class JournalCategory extends \BaseControllers\Webrising {


    public function create()
    {


        $data = array(
            'page_title'  => trans('common.journal'),
            'breadcrumbs' => array(
                'admin/home'               => trans('common.dashboard'),
                'admin/journal/categories' => trans('common.journal_categories'),
                '!'                        => trans('common.create')
            ),
            
        );



        return View::make('CoreApp/Website/Views/Backend/JournalCategory/create',$data);

    }//create


    public function process_create()
    {

        $inputs = array(
                        'meta_description'              => Input::get('meta_description'),
                        'meta_keywords'                 => Input::get('meta_keywords'),
                        'category_url'                  => Input::get('category_url'),
                        'category_name'                 => Input::get('category_name'),
                        'journal_category_header_image' => Input::file('journal_category_header_image'),

        );


        /*
        * Validate customer
        */
        $validator = new \CoreApp\Website\Validations\Journal(array(
                                                                    'meta_description'              => $inputs['meta_description'],
                                                                    'meta_keywords'                 => $inputs['meta_keywords'],
                                                                    'category_url'                  => $inputs['category_url'],
                                                                    'category_name'                 => $inputs['category_name'],
                                                                    'journal_category_header_image' => $inputs['journal_category_header_image']),


             'journal_category_create');

        /*
         * Check if the validation passes
         */
        if( ! $validator->passes() )
        {

            return \Redirect::to('admin/journal/category/create')->withErrors($validator->errors())->withInput();

        }//if validation didn't pass


        //journal category model
        $journal_category_model = App::make('WebsiteJournalCategoryModel');



        //Try to make the transaction
        try{

            DB::transaction(function() use($journal_category_model,$inputs)
            {

                //Header journal category image extension
                $journal_category_header_image_extension = $inputs['journal_category_header_image']->getClientOriginalExtension();
                
                //Insert Journal Category
                $journal_category_id = $journal_category_model->insert_journal_category_get_id($inputs['meta_description'],$inputs['meta_keywords'],$inputs['category_url'],$inputs['category_name'],$journal_category_header_image_extension);

                 //Add header journal category image
                Input::file('journal_category_header_image')->move('cms/journal_category_header/'.$journal_category_id,'/'.$journal_category_header_image_extension);

                Image::make('cms/journal_category_header/'.$journal_category_id.'/'.$journal_category_header_image_extension)->resize(1920, 650,false)->save('cms/journal_category_header/'.$journal_category_id.'/journal_header.'.$journal_category_header_image_extension);

                unlink('cms/journal_category_header/'.$journal_category_id.'/'.$journal_category_header_image_extension);

            });//End transaction

        }//Try to make the transaction

            //Catch exception
        catch(\Exception $err){


            return \Redirect::to('admin/journal/category/create')->with('db_errors', true)->withInput();

        }//Catch exception


        //Flush cache
        \Cache::flush();

        /*
         * If we got here everything went good
         */
        return \Redirect::to('admin/journal/categories');

    }//process create



    public function update($category_id)
    {

        //Journal tag model
        $journal_category_model = App::make('WebsiteJournalCategoryModel');

        //Check if id exists
        if($journal_category_model->check_id_exists($category_id) == false) return App::abort('404');
    
        $category = $journal_category_model->get_category_by_id($category_id)[0];

        $data = array(
            'page_title'  => trans('common.journal'),
            'breadcrumbs' => array(
                'admin/home'                                     => trans('common.dashboard'),
                'admin/journal/categories'                       => trans('common.journal_categories'),
                'admin/journal/category/'.$category_id.'/update' => $category->name,
                '!'                                              => trans('common.update')
            ),

                'category_id'        => $category_id,
                'category'           => $category
            
        );


        return View::make('CoreApp/Website/Views/Backend/JournalCategory/update',$data);

    }//update


    public function process_update($category_id)
    {


        //Journal category model
        $journal_category_model = App::make('WebsiteJournalCategoryModel');

        //Check if id exists
        if($journal_category_model->check_id_exists($category_id) == false) return App::abort('404');

        $inputs = array(
                        'meta_description'              => Input::get('meta_description'),
                        'meta_keywords'                 => Input::get('meta_keywords'),
                        'category_url'                  => Input::get('category_url'),
                        'category_name'                 => Input::get('category_name'),
                        'journal_category_header_image' => Input::file('journal_category_header_image')

        );


        /*
        * Validate customer
        */
        $validator = new \CoreApp\Website\Validations\Journal(array(
                                                                    'meta_description'               => $inputs['meta_description'],
                                                                    'meta_keywords'                  => $inputs['meta_keywords'],
                                                                    'category_url'                   => $inputs['category_url'],
                                                                    'category_name'                  => $inputs['category_name'],
                                                                    'journal_category_header_image'  => $inputs['journal_category_header_image']),
                                                                    'journal_category_update');

        /*
         * Check if the validation passes
         */
        if( ! $validator->passes() )
        {

            return \Redirect::to('admin/journal/category/'.$category_id.'/update')->withErrors($validator->errors())->withInput();

        }//if validation didn't pass



        //Try to make the transaction
        try{

            DB::transaction(function() use($category_id,$journal_category_model,$inputs)
            {

                //GET journal category image extension from database
                $journal_category = $journal_category_model->get_category_by_id($category_id)[0];

                //If  Journal category header image isset
                if(isset($inputs['journal_category_header_image'])) $journal_category_header_image_extension = $inputs['journal_category_header_image']->getClientOriginalExtension();
                
                //Get Journal category header image extension for update from input if new picture is selected else same extension remains
                if( Input::file('journal_category_header_image') )
                {
                    $journal_cat_head_image_extension = $inputs['journal_category_header_image']->getClientOriginalExtension();

                }//if new picture is selected
                else
                {

                    $journal_cat_head_image_extension = $journal_category->journal_category_header_image_extension;

                }//else same picture extension remains


                //Update Journal Category
                $journal_category_model->update_category($category_id,$inputs['meta_description'],$inputs['meta_keywords'],$inputs['category_url'],$inputs['category_name'],$journal_cat_head_image_extension);


                //If new journal category header image is added
                if( Input::file('journal_category_header_image') )
                {
                    /*
                     * Delete image
                     */
                    if(is_dir('cms/journal_category_header/'.$category_id))
                    {


                         if(is_file('cms/journal_category_header/'.$category_id.'/journal_header/'.$journal_category->journal_category_header_image_extension)) {
                            unlink('cms/journal_category_header/'.$category_id.'/journal_header/'.$journal_category->journal_category_header_image_extension);
                        }

                        
                    }//if has journal category header picture


                     //Add category header journal image
                    Input::file('journal_category_header_image')->move('cms/journal_category_header/'.$category_id,'/'.$journal_category_header_image_extension);

                    Image::make('cms/journal_category_header/'.$category_id.'/'.$journal_category_header_image_extension)->resize(1920, 650,false)->save('cms/journal_category_header/'.$category_id.'/journal_header.'.$journal_category_header_image_extension);

                    unlink('cms/journal_category_header/'.$category_id.'/'.$journal_category_header_image_extension);

                }//if new journal category header image was added

            });//End transaction

        }//Try to make the transaction

            //Catch exception
        catch(\Exception $err){


            return \Redirect::to('admin/journal/category/'.$category_id.'/update')->with('db_errors', true)->withInput();

        }//Catch exception


        //Flush cache
        \Cache::flush();

        /*
         * If we got here everything went good
         */
        return \Redirect::to('admin/journal/category/'.$category_id.'/update')->with('success',true);

    }//process update


    public function all()
    {


        //GET WebsitejournalCategoryModel
        $journal_category_model = App::make('WebsiteJournalCategoryModel');


        $categories = $journal_category_model->get_all_categories_paginated(100);


        $data = array(
            'page_title'  => trans('common.journal_categories'),
            'breadcrumbs' => array(
                'admin/home'        => trans('common.dashboard'),
                '!'                 => trans('common.journal_categories'),

            ),
                'categories'             => $categories,
                'paginate_links'         => $categories->links()
        );


        return View::make('CoreApp/Website/Views/Backend/JournalCategory/all',$data);

    }//all


    function delete($id)
    {


        $return_data = array('error' => 1, 'message' => 'Category could not be deleted please try again');


        //Get Journal Category Model
        $model_category = App::make('WebsiteJournalCategoryModel');


        if( $model_category->delete($id))
        {

            $return_data['error'] = 0;
            $return_data['message'] = 'Category has been deleted succesfully';


            //Flush cache
            \Cache::flush();

        }//if the category was deleted


        /*
         * If we got this far, everything is ok
         */
        return \Response::json( $return_data );

    }//delete

}//end JournalTag