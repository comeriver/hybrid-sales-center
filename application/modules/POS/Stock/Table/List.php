<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    POS_Stock_Table_List
 * @copyright  Copyright (c) 2017 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: List.php Wednesday 20th of December 2017 03:21PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class POS_Stock_Table_List extends POS_Stock_Table_Abstract
{
 	
    /**
     * 
     * 
     * @var string 
     */
	  protected static $_objectTitle = 'Stock Addition History';   

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
		$list->listTitle = self::getObjectTitle();
		$list->hideCheckbox = true;
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
                    'product' => array( 'field' => 'article_title', 'value' =>  '%FIELD%', 'filter' =>  '' ),                    
                    'added' => array( 'field' => 'stock_added', 'value' =>  '%FIELD%', 'filter' =>  'Ayoola_Filter_Int' ),                     
                    'before' => array( 'field' => 'stock_before', 'value' =>  '%FIELD%', 'filter' =>  'Ayoola_Filter_Int' ),                     
                    'after' => array( 'field' => 'stock_after', 'value' =>  '%FIELD%', 'filter' =>  'Ayoola_Filter_Int' ), 
                    'historic' => array( 'field' => 'stock_history_total', 'value' =>  '%FIELD%', 'filter' =>  'Ayoola_Filter_Int' ), 
                    'time' => array( 'field' => 'creation_time', 'value' =>  '%FIELD%', 'filter' =>  'Ayoola_Filter_Time' ), 
                    'by' => array( 'field' => 'username', 'value' =>  '%FIELD%', 'filter' =>  '' ),                     

                    //'%FIELD% <a style="font-size:smaller;"  href="javascript:" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/POS_Stock_Table_Editor/?' . $this->getIdColumn() . '=%KEY%\', \'' . $this->getObjectName() . '\' );"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>', 
                    //'%FIELD% <a style="font-size:smaller;" href="javascript:" onClick="ayoola.spotLight.showLinkInIFrame( \'' . Ayoola_Application::getUrlPrefix() . '/tools/classplayer/get/object_name/POS_Stock_Table_Delete/?' . $this->getIdColumn() . '=%KEY%\', \'' . $this->getObjectName() . '\' );"><i class="fa fa-trash" aria-hidden="true"></i></a>', 
				)
		);
		return $list;
    } 
	// END OF CLASS
}
