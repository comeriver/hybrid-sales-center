<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    POS_Stock_Table
 * @copyright  Copyright (c) 2021 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Table.php Saturday 11th of December 2021 02:14PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Table
 */


class POS_Stock_Table extends PageCarton_Table
{

    /**
     * The table version (SVN COMPATIBLE)
     *
     * @param string
     */
    protected $_tableVersion = '0.2';  

    /**
     * Table data types and declaration
     * array( 'fieldname' => 'DATATYPE' )
     *
     * @param array
     */
	protected $_dataTypes = array (
  'article_title' => 'INPUTTEXT',
  'article_url' => 'INPUTTEXT',
  'username' => 'INPUTTEXT',
  'stock_added' => 'INT',
  'stock_before' => 'INT',
  'stock_after' => 'INT',
  'stock_history_total' => 'INT',
);


	// END OF CLASS
}
