<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    POS_Stock_Reducer
 * @copyright  Copyright (c) 2021 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Reducer.php Saturday 11th of December 2021 03:14PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Table
 */


class POS_Stock_Reducer extends PageCarton_Table
{

    /**
     * The table version (SVN COMPATIBLE)
     *
     * @param string
     */
    protected $_tableVersion = '0.0';  

    /**
     * Table data types and declaration
     * array( 'fieldname' => 'DATATYPE' )
     *
     * @param array
     */
	protected $_dataTypes = array (
  'article_url' => 'INPUTTEXT',
  'article_title' => 'INPUTTEXT',
  'stock_removed' => 'INT',
  'stock_before' => 'INT',
  'stock_after' => 'INT',
  'reason' => 'JSON',
);


	// END OF CLASS
}
