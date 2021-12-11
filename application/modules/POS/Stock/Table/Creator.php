<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    POS_Stock_Table_Creator
 * @copyright  Copyright (c) 2017 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Creator.php Wednesday 20th of December 2017 03:23PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class POS_Stock_Table_Creator extends POS_Stock_Table_Abstract
{
	
    /**
     * 
     * 
     * @var string 
     */
	protected static $_objectTitle = 'Add product to stock'; 

    /**
     * Performs the whole widget running process
     * 
     */
	public function init()
    {    
		try
		{ 
            //  Code that runs the widget goes here...
            if( ! $data = Application_Article_Abstract::loadPostData( $_REQUEST['article_url'] ) )
            {
				$this->setViewContent(  '' . self::__( '<div class="badnews">Invalid product selected</div>' ) . '', true  ); 
            }
            
            $this->createForm( 'Save...', 'Add new stock for ' . $data['article_title'] );

			$this->setViewContent( $this->getForm()->view() );

			if( ! $values = $this->getForm()->getValues() ){ return false; }

            if( intval( $values['stock_added'] ) < 1 )
            {
				$this->setViewContent(  '' . self::__( '<div class="badnews">Invalid stock information entered</div>' ) . '', true  ); 
            }

            $values['username'] = strtolower( Ayoola_Application::getUserInfo( 'username' ) );
            $values['article_url'] = $data['article_url'];
            $values['article_title'] = $data['article_title'];
            $values['stock_before'] = intval( $data['no_of_items_in_stock'] );
            $values['stock_after'] = intval( $values['stock_added'] ) + intval( $data['no_of_items_in_stock'] );
            $values['stock_history_total'] = @intval( $data['stock_history_total'] ) ? : intval( $data['no_of_items_in_stock'] );
            $values['stock_history_total'] = intval( $values['stock_added'] ) + intval( $data['stock_history_total'] );

            
            $data['no_of_items_in_stock'] = intval( $values['stock_after'] );
            $data['stock_history_total'] = intval( $values['stock_history_total'] );
            $data['callback'] = 'POS_Stock';

            $message = 'Stock added successfully. Total stock for "' . $data['article_title'] . '"  now ' . $values['stock_after'] . '.';
		
			//	Notify Admin
			$mailInfo = array();
			$mailInfo['subject'] = 'Products have been added to stock';
			$mailInfo['body'] = '' . $message . '. Stock information: "' . self::arrayToString( $values ) . '". 
			
			';
			try
			{
				@Ayoola_Application_Notification::mail( $mailInfo );
			}
			catch( Ayoola_Exception $e ){ null; }
			if( $this->insertDb( $values ) )
			{ 
                //  save information of new stock in product data
                Application_Article_Abstract::saveArticle( $data );

				$this->setViewContent(  '' . self::__( '<div class="goodnews">' . $message . '</div>' ) . '', true  ); 
			}
            


            // end of widget process
          
		}  
		catch( Exception $e )
        { 
            //  Alert! Clear the all other content and display whats below.
            $this->setViewContent( self::__( '<p class="badnews">' . $e->getMessage() . '</p>' ) ); 
            $this->setViewContent( self::__( '<p class="badnews">Theres an error in the code</p>' ) ); 
            return false; 
        }
	}
	// END OF CLASS
}
