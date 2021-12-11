<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    POS_Stock_Reducer_List
 * @copyright  Copyright (c) 2017 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: List.php Wednesday 20th of December 2017 03:21PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class POS_Stock_Reducer_List extends POS_Stock_Reducer_Abstract
{
 	
    /**
     * 
     * 
     * @var string 
     */
	  protected static $_objectTitle = 'Stock Reduction History';   

    /**
     * Performs the creation process
     *
     * @param void
     * @return void
     */	
    public function init()
    {
      $this->setViewContent( $this->getList() );		
    } 
	
    /**
     * Paginate the list with Ayoola_Paginator
     * @see Ayoola_Paginator
     */
    protected function createList()
    {
		require_once 'Ayoola/Paginator.php';
		$list = new Ayoola_Paginator();
		$list->pageName = $this->getObjectName();
        $list->hideCheckbox = true;

		$list->listTitle = self::getObjectTitle();
		$list->setData( $this->getDbData() );
		$list->setListOptions( 
								array( 
                                    'Creator' => ' ',    
									) 
							);
		$list->setKey( $this->getIdColumn() );
		$list->setNoRecordMessage( 'No data added to this table yet.' );
		
		$list->createList
		(
			array(
                    //'article_url' => array( 'field' => 'article_url', 'value' =>  '%FIELD%', 'filter' =>  '' ),                     
                    'article_title' => array( 'field' => 'article_title', 'value' =>  '%FIELD%', 'filter' =>  '' ),                     
                    'amount' => array( 'field' => 'stock_removed', 'value' =>  '%FIELD%', 'filter' =>  '' ),                     
                    'before' => array( 'field' => 'stock_before', 'value' =>  '%FIELD%', 'filter' =>  '' ),                     
                    'after' => array( 'field' => 'stock_after', 'value' =>  '%FIELD%', 'filter' =>  '' ),                     
                    'reason' => array( 'field' => 'reason', 'value' =>  '%FIELD%', 'filter' =>  '' ), 
                    'Time' => array( 'field' => 'creation_time', 'value' =>  '%FIELD%', 'filter' =>  'Ayoola_Filter_Time' ), 
                    //'%FIELD% <a style="font-size:smaller;"  href="javascript:" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/POS_Stock_Reducer_Editor/?' . $this->getIdColumn() . '=%KEY%\', \'' . $this->getObjectName() . '\' );"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>', 
                    //'%FIELD% <a style="font-size:smaller;" href="javascript:" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/POS_Stock_Reducer_Delete/?' . $this->getIdColumn() . '=%KEY%\', \'' . $this->getObjectName() . '\' );"><i class="fa fa-trash" aria-hidden="true"></i></a>', 
				)
		);
		return $list;
    } 
	// END OF CLASS
}
