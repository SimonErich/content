<?php



	 /* ###################################################### *\
	 |  ######################################################  |
	 |  #############     CONTENT ACTIONS    #################  |
	 |  ######################################################  |
	 \* ###################################################### */




      /* ############################### *\
      |  ########## REGISTER ###########  |
      \* ############################### */

		 // the signup form
		  Route::get('i/{page_slug}',                 array('as' => 'Dukoapp\Content\Pages_view',
			                                                'uses' => 'Dukoapp\\Content\\Controllers\\PagesController@view'));





	 /* ###################################################### *\
	 |  ######################################################  |
	 |  #############          ADMIN         #################  |
	 |  ######################################################  |
	 \* ###################################################### */


