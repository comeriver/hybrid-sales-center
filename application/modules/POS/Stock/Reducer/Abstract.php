<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    POS_Stock_Reducer_Abstract
 * @copyright  Copyright (c) 2021 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Abstract.php Saturday 11th of December 2021 03:14PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */


class POS_Stock_Reducer_Abstract extends PageCarton_Widget
{
	
    /**
     * Identifier for the column to edit
     * 
     * @var array
     */
	protected $_identifierKeys = array( 'reducer_id' );
 	
    /**
     * The column name of the primary key
     *
     * @var string
     */
	protected $_idColumn = 'reducer_id';
	
    /**
     * Identifier for the column to edit
     * 
     * @var string
     */
	protected $_tableClass = 'POS_Stock_Reducer';
	
    /**
     * Access level for player. Defaults to everyone
     *
     * @var boolean
     */
	protected static $_accessLevel = array( 99, 98 );


    /**
     * creates the form for creating and editing page
     * 
     * param string The Value of the Submit Button
     * param string Value of the Legend
     * param array Default Values
     */
	public function createForm( $submitValue = null, $legend = null, Array $values = null )  
    {
		//	Form to create a new page
        $form = new Ayoola_Form( array( 'name' => $this->getObjectName(), 'data-not-playable' => true ) );
		$form->submitValue = $submitValue ;
//		$form->oneFieldSetAtATime = true;

		$fieldset = new Ayoola_Form_Element;
	//	$fieldset->placeholderInPlaceOfLabel = false;       
        $fieldset->addElement( array( 'name' => 'article_url', 'type' => 'InputText', 'value' => @$values['article_url'] ) );         $fieldset->addElement( array( 'name' => 'article_title', 'type' => 'InputText', 'value' => @$values['article_title'] ) );         $fieldset->addElement( array( 'name' => 'amount', 'type' => 'InputText', 'value' => @$values['amount'] ) );         $fieldset->addElement( array( 'name' => 'stock_before', 'type' => 'InputText', 'value' => @$values['stock_before'] ) );         $fieldset->addElement( array( 'name' => 'stock_after', 'type' => 'InputText', 'value' => @$values['stock_after'] ) );         $fieldset->addElement( array( 'name' => 'order_number', 'type' => 'InputText', 'value' => @$values['order_number'] ) ); 

		$fieldset->addLegend( $legend );
		$form->addFieldset( $fieldset );   
		$this->setForm( $form );
    } 

	// END OF CLASS
}
