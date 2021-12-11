<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Workplace_Workspace_List
 * @copyright  Copyright (c) 2017 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: List.php Wednesday 20th of December 2017 03:21PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class POS_Stock extends POS
{
 	
    /**
     * 
     * 
     * @var string 
     */
	protected static $_objectTitle = 'POS Stock Manager';   

    /**
     * Performs the creation process
     *
     * @param void
     * @return void
     */	
    public static function callback( & $cartItemData )
    {
        switch( strtolower( $cartItemData['order_status'] ) )
        { 
            case 'payment successful':
            case '99':
            case '100':
                if( empty( $cartItemData['stock_counted'] ) && $cartItemData['article_url'] && $cartItemData['no_of_items_in_stock'] && $cartItemData['multiple'] )
                {
                    self::reduceStock( $cartItemData['article_url'], $cartItemData['multiple'], array( 'Bought', 'Via e-channel', $cartItemData['full_order_info']['order_id'] ) );
                    $cartItemData['stock_counted'] = true;
                }
            break;   
        }
        //var_export( $cartItemData['stock_counted'] );
    }

    /**
     * Performs the creation process
     *
     * @param void
     * @return void
     */	
    public static function reduceStock( $postId, $stock, $reason )
    {
        $data = Application_Article_Abstract::loadPostData( $postId );

        $values['username'] = strtolower( Ayoola_Application::getUserInfo( 'username' ) );
        $values['article_url'] = $data['article_url'];
        $values['article_title'] = $data['article_title'];
        $values['stock_before'] = intval( $data['no_of_items_in_stock'] );
        $values['stock_after'] =  intval( $data['no_of_items_in_stock'] ) - intval( $stock );
        $values['stock_removed'] =  $stock;
        $values['reason'] =  (array) $reason;

        
        $data['no_of_items_in_stock'] = intval( $values['stock_after'] );

        if( intval( $values['stock_after'] ) < 1 )
        {
			//	Notify Admin
			$mailInfo = array();
			$mailInfo['subject'] = $data['article_title'] . ' is Out of Stock';
			$mailInfo['body'] = 'Stock has depleted for item "' . $data['article_title'] . '". It is time to add it back to stock if you still want to continue to sell it.';
			try
			{
				@Ayoola_Application_Notification::mail( $mailInfo );
			}
			catch( Ayoola_Exception $e ){ null; }
        }

        POS_Stock_Reducer::getInstance()->insert( $values );
        Application_Article_Abstract::saveArticle( $data );
    }

    /**
     * Performs the creation process
     *
     * @param void
     * @return void
     */	
    public function init()
    {
        $products = Application_Article_Table::getInstance()->select( null, array( 'true_post_type' => 'product' ) );

        $listToUse = array();
        foreach( $products as $each )
        {
            $listToUse[] = Application_Article_Abstract::loadPostData( $each['article_url'] );
        }

        $list = new Ayoola_Paginator();
		$list->pageName = $this->getObjectName();
		$list->listTitle = self::getObjectTitle();
		$list->setData( $listToUse );
		$list->setListOptions( 
								array( 
							            'Creator' => '<a rel="spotlight;" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/Application_Article_Publisher/\', \'page_refresh\' );" title="">Add a new product</a>',    
							            '<a rel="spotlight;" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/POS_Stock_Table_List/\', \'\' );" title="">Stock Addition History</a>',    
							            '<a rel="spotlight;" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/POS_Stock_Reducer_List/\', \'\' );" title="">Stock Reduction History</a>',    
									) 
							);
		$list->setKey( 'article_url' );
		$list->setNoRecordMessage( 'No products added yet. Add a new product first' );
		
		$list->createList
		(
			array(
                    array( 'field' => 'document_url', 'value' =>  '<img style="border-radius:50%;" src="' . Ayoola_Application::getUrlPrefix() . '%FIELD%?width=60&height=60">', 'filter' =>  '' ),                     
                    'product' => array( 'field' => 'article_title', 'value' =>  '%FIELD%', 'filter' =>  '' ),                     
                    'stock' => array( 'field' => 'no_of_items_in_stock', 'value' =>  '<a style="font-size:smaller;"  href="javascript:" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/POS_Stock_Table_Creator/?article_url=%KEY%\', \'' . $this->getObjectName() . '\' );"><i class="fa fa-plus" aria-hidden="true"></i></a> %FIELD%', 'filter' =>  'Ayoola_Filter_Int' ),                     
                    'barcode' => array( 'field' => 'barcode_number', 'value' =>  '%FIELD%', 'filter' =>  '' ),                     
                    '%FIELD% <a style="font-size:smaller;"  href="javascript:" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/Application_Article_Editor/?article_url=%KEY%\', \'' . $this->getObjectName() . '\' );"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>', 
                    '%FIELD% <a style="font-size:smaller;" href="javascript:" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/Application_Article_Delete/?article_url=%KEY%\', \'' . $this->getObjectName() . '\' );"><i class="fa fa-trash" aria-hidden="true"></i></a>', 
				)
		);
        $this->setViewContent( $list );

    } 

	// END OF CLASS
}
