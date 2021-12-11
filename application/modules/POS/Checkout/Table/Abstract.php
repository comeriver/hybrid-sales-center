<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    POS_Checkout_Table_Abstract
 * @copyright  Copyright (c) 2021 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Abstract.php Saturday 11th of December 2021 03:15AM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */


class POS_Checkout_Table_Abstract extends PageCarton_Widget
{
	
    /**
     * Identifier for the column to edit
     * 
     * @var array
     */
	protected $_identifierKeys = array( 'table_id' );
 	
    /**
     * The column name of the primary key
     *
     * @var string
     */
	protected $_idColumn = 'table_id';
	
    /**
     * Identifier for the column to edit
     * 
     * @var string
     */
	protected $_tableClass = 'POS_Checkout_Table';
	
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
        $fieldset->addElement( array( 'name' => 'order_number', 'type' => 'InputText', 'value' => @$values['order_number'] ) );         $fieldset->addElement( array( 'name' => 'user_id', 'type' => 'InputText', 'value' => @$values['user_id'] ) );         $fieldset->addElement( array( 'name' => 'amount', 'type' => 'InputText', 'value' => @$values['amount'] ) );         $fieldset->addElement( array( 'name' => 'day', 'type' => 'InputText', 'value' => @$values['day'] ) );         $fieldset->addElement( array( 'name' => 'month', 'type' => 'InputText', 'value' => @$values['month'] ) );         $fieldset->addElement( array( 'name' => 'year', 'type' => 'InputText', 'value' => @$values['year'] ) );         $fieldset->addElement( array( 'name' => 'week', 'type' => 'InputText', 'value' => @$values['week'] ) );         $fieldset->addElement( array( 'name' => 'time', 'type' => 'InputText', 'value' => @$values['time'] ) ); 

		$fieldset->addLegend( $legend );
		$form->addFieldset( $fieldset );   
		$this->setForm( $form );
    } 

	// END OF CLASS
}
