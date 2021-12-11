<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    POS_Checkout_Table
 * @copyright  Copyright (c) 2021 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Table.php Saturday 11th of December 2021 03:15AM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Table
 */


class POS_Checkout_Table extends PageCarton_Table
{

    /**
     * The table version (SVN COMPATIBLE)
     *
     * @param string
     */
    protected $_tableVersion = '0.1';  

    /**
     * Table data types and declaration
     * array( 'fieldname' => 'DATATYPE' )
     *
     * @param array
     */
	protected $_dataTypes = array (
  'order_number' => 'INPUTTEXT',
  'user_id' => 'INPUTTEXT',
  'amount' => 'INPUTTEXT',
  'day' => 'INPUTTEXT',
  'month' => 'INPUTTEXT',
  'year' => 'INPUTTEXT',
  'week' => 'INPUTTEXT',
  'checkoutoption' => 'INPUTTEXT',
  'checkout_info' => 'JSON',
);


	// END OF CLASS
}
