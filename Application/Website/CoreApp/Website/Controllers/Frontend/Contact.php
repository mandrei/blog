<?php

namespace CoreApp\Website\Controllers\Frontend;

use \View,\Input,\Redirect,App;

class Contact extends \Controller {


    public function index()
    {

         //Get meta
        $meta_pages_model = App::make('WebsiteMetaPagesModel');

        $meta = $meta_pages_model->get_meta_by_id(5)[0];

        $data = array(

                        'meta_description'  => $meta->meta_description,
                        'meta_keywords'     => $meta->meta_keywords,
                        'meta_title'        => $meta->page_name,
                        'current_page'      => 'contact'

                     );

        return View::make('CoreApp/Website/Views/Frontend/contact',$data);

    }//index

    public function process_contact()
    {

    	$inputs = array(
    						'name'  	    => Input::get('name'),
							'email' 	    => Input::get('email'),
							'subject'       => Input::get('subject'),
							'message'	    => Input::get('message')
    		);


    	/*
         * Validate
         */
        $validator = new \CoreApp\Website\Validations\Contact(array(
        															'name'           => $inputs['name'],
        															'email'          => $inputs['email'],
        															'subject'        => $inputs['subject'], 
        															'message'        => $inputs['message']

        															),

													 	'contact');
        

        /*
         * Check if the validation passes
         */
        if( ! $validator->passes() )
        {
     
            return Redirect::to('contact')->withErrors($validator->errors())->withInput();

        }//if validation didn't pass


      /*
       * Send email
       *
       */
        $template   = array('Templates/Email/Contact/contact_html_template', 'Templates/Email/Contact/contact_plain_template');

        $data       = array(

            'html_message'  => trans(
                'contact.html_message_contact',
                array('name'=> $inputs['name'],'subject' => $inputs['subject'],'message' => $inputs['message'],'email' => $inputs['email']),
                'en'
            ),
            'plain_message' => trans(
                'contact.plain_message_contact',
                array('name'=> $inputs['name'],'subject' => $inputs['subject'],'message' => $inputs['message'],'email' => $inputs['email'] ) ,
                'en' )
        );

        $subject = $inputs['subject'];

        $to      = 'hello@webrising.co';

        // $to = 'muresanandrei.web@gmail.com';

        $headers = "From: Webrising contact ";
        $headers .= " MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


        //Send mail
        mail($to, $subject, 'You have received the folowing message:<br />'.$inputs['message']."<br /><br />Email: ".$inputs['email'],$headers);
                          
        // \SystemTools\MailHelper::send($template, $data, $subject, $to);


		return  Redirect::to('contact')->with('success',true);


    }//process_contact

}//end Contact