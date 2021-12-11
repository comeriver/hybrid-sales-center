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

class POS_Checkout extends POS
{
 	
    /**
     * 
     * 
     * @var string 
     */
	protected static $_objectTitle = 'POS Checkout';   

    /**
     * Performs the creation process
     *
     * @param void
     * @return void
     */	
    public function init()
    {
        if( empty( $_REQUEST['submit-button'] ) || $_REQUEST['submit-button'] !== 'confirm' )
        {
            if( ! empty( $_REQUEST['add_product'] ) AND $product = Application_Article_Abstract::loadPostData( trim( $_REQUEST['add_product'], '#' ) ) )
            {
                Application_Article_Type_Subscription::subscribe( $product );
            }
            return false;
        }
        elseif( empty( $_REQUEST['checkoutoption'] ) )
        {
            return $this->setViewContent(  '' . self::__( '<div class="badnews pos-element">Please select a checkout method</div>' ) . '', true  );
        }
        elseif( ! $cart = Application_Subscription_Checkout::getStorage()->retrieve() )
        { 
            return $this->setViewContent(  '' . self::__( '<div class="badnews pos-element">Add items to the shopping cart first.</div>' ) . '', true  );
        }

        $cart['checkout_info'] = $_REQUEST;
        Application_Subscription_Checkout::getStorage()->store( $cart );

        $orderNumber = Application_Subscription_Checkout::getOrderNumber( $_REQUEST['checkoutoption'] );

        $html = Application_Subscription_Checkout_Confirmation::viewInLine();

        $html = '<div id="printerDiv" style="display:none"></div>
        <script>
           function printPage()
           {
              var div = document.getElementById("printerDiv");
              div.innerHTML = \'<iframe src="' . Ayoola_Application::getUrlPrefix() . '/widgets/POS_Print?order_number=' . $orderNumber . '" onload="this.contentWindow.print();"></iframe>\';
           }
        </script>';
        $this->setViewContent( $html );
        $this->setViewContent( '<div class="goodnews pos-element">' . self::__( 'Checkout Complete. <a onclick="printPage();" href="javascript:">Print Receipt!</a>' . '</div>' ) );

        //  reduce from stock?
        //  will do it now through call back
        $table = Application_Subscription_Checkout_Order::getInstance();
        if( $orderInfo = $table->selectOne( null, array( 'order_id' => $orderNumber ) ) )
		{ 
            Application_Subscription_Checkout::changeStatus( array( 'order_status' => 100 ) + $orderInfo );
		}

/*         
        foreach( $orderInfo['order']['cart'] as $itemId => $item )
        {
            if( empty( $item['stock_counted'] )  && $item['article_url'] && $item['no_of_items_in_stock'] && $item['multiple'] )
            {
                POS_Stock::reduceStock( $item['article_url'], intval( $item['multiple'] ), array( 'Bought', 'Via POS', $orderNumber ) );
                $orderInfo['order']['cart'][$itemId]['stock_counted'] = true;
            }
        }
        $table->update( $orderInfo, array( 'order_id' => $orderNumber )  );

 */

        POS_Checkout_Table::getInstance()->insert(
            array(
                'order_number' => $orderNumber,
                'user_id' => Ayoola_Application::getUserInfo( 'user_id' ),
                'amount' => $cart['settings']['total'],
                'checkoutoption' => $_REQUEST['checkoutoption'],
                'day' => date( 'j' ),
                'month' => date( 'n' ),
                'year' => date( 'Y' ),
                'week' => date( 'W' ),
                'checkout_info' => $_REQUEST,
            )
        );


    } 

	// END OF CLASS
}
