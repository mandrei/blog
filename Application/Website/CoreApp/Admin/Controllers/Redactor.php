<?php
/**
 * User: andrei
 * Date: 2/8/14
 * Time: 10:10 PM
 */
namespace CoreApp\Admin\Controllers;

use \Input;

class Redactor extends \CoreApp\Admin\BaseControllers\Admin {



    public function image_upload()
    {



        $file = Input::file('file');

        $validator = new \CoreApp\Admin\Validations\Admin(array('file' => $file), 'redactor');

        if (!$validator->passes())
        {

            return false;


        }//!Validated
        else
        {


            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $type = $_FILES['file']['tmp_name'];
            $tmp_name = $_FILES['file']['tmp_name'];


            move_uploaded_file($tmp_name, \Request::root().'/cms/journal_photos/'.$name);

            echo json_encode(array('filelink' => $name));


            // if(Input::file('file',\Request::root() .'/cms/photos/',  $file->getClientOriginalName()))
            // {

            //     return \Response::json(array('filelink' => \Request::root(). '/cms/photos/'.$file['name']));

            // }//if uploaded the image


            // return false;

        }//Validated


    }//POST image_upload



    /*
     * Used to display images for selection
     */
    public function images()
    {


        /*
         * We read all files from user_files
         *
         * We don't use glob() because it can't handle many files (from PHP docs)
         *
         */

        // create a handler for the directory
        if( $handler = opendir( public_path() . '/cms/photos' ) )
        {


            $content = array();

            // open directory and walk through the files
            while ($file = readdir($handler))
            {


                /*
                 * We check for file extension
                 *
                 * Only .jpg, .png, .jpeg, .gif, .bmp are accepted
                 */
                $extensions = array('jpg', 'png', 'jpeg', 'gif', 'bmp');


                $extension = explode('.', $file);

                $extension = end( $extension );

                // if file isn't this directory or its parent, add it to the results
                if (in_array($extension, $extensions))
                {
                    $content[] = array(
                        'thumb'  => Request::root() .'/cms/photos/'. $file,
                        'image'  => Request::root() .'/cms/photos/'. $file,
                        'title'  => $file,
                        'folder' => 'Images'
                    );

                }//if it's a file

            }//while we read the dir

            // tidy up: close the handler
            closedir($handler);


            /*
             * Return the content
             */
            return Response::json( $content );


        }//if we could open the directory and read the files


        /*
         * If there were problems
         *
         * The string from message is not arranged because we want it to display like this in alert()
         */
        return Response::json( array(
            'error'   => 1,
            'message' => __('common.ajax_fail')
        ) );




    }//GET images


}//end class