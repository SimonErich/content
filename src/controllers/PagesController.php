<?php


namespace Duko\Content\Controllers;
          

use Duko\Content\Models\Page;

use App\Http\Controllers\Controller;
use View, Input, Event, Redirect, Session, Config, Response, Mail, Date;



class PagesController extends Controller
 {
        
        

         // define some stuff
           protected $page;


        /**
         * Instantiate a new UserController
         */
           public function __construct(Page $page)
            {  

                // define stuff
                 $this->page = $page;


            } // END construct something





     /* ###################################################### *\
     |  ######################################################  |
     |  #############  CLASSIC USER METHODS  #################  |
     |  ######################################################  |
     \* ###################################################### */

       

          /* ############################### *\
          |  ########## REGISTER ###########  |
          \* ############################### */


             /**
              * Displays the signup form
              */
             
              public function view($page_slug)
              {

                  // find the page with this content
                   $page = Page::where('_id', '=', $page_slug)
                               ->orWhere('slug', 'LIKE', $page_slug)
                               ->first();

                  
                  // if no theme for this page -> use default
                   $theme = (isset($page['theme'])) ? $page['theme'] : 'default';

                  // show the content
                   return View::make('content::pages.view')->with(array('page' => $page,
                                                                        'theme' => $theme));
              
              } // END function signupForm






 } // END class
