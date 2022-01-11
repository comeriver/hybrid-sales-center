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

class POS_Print extends POS
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
        if( empty( $_REQUEST['order_number'] ) )
        {
            return $this->setViewContent(  '' . self::__( '<span class="badnews pos-element">Your did not enter any order number in the URL</span>' ) . '', true  );
        }
        Application_Style::addFile( '/layout/pc_layout_possystem/main.css' );

		if( ! $setOrderInfo = Application_Subscription_Checkout_Order::getInstance()->selectOne( null, array( 'order_id' => $_REQUEST['order_number'] ) ) )
		{ 
            return $this->setViewContent(  '' . self::__( '<span class="badnews pos-element">Invalid Order Number Selected</span>' ) . '', true  );
        }

        $content = '
        <p style="text-align:center;">{Organization Name}</p>
        <p style="text-align:center;"> 
            Address: {Street Address}, {City}, {State}, {Country}</br>
            Email: {info@example.com}</br>
            Phone: {+234 800 000 0000}</br>
            ' . Ayoola_Page::getHomePageUrl() . '</br>
        </p>';
        Ayoola_Page_Editor_Text::doTextUpdate( $content );

        //$this->setViewContent( $html );
        $html = '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Order Number: ' . $_REQUEST['order_number'] . '</title>
                <link rel="stylesheet" href="' . Ayoola_Application::getUrlPrefix() . '/layout/pc_layout_possystem/main.css" >
                <style>
                    body {
                        font-size:10px;
                        font-family:Calibri;
                        padding:5px;
                    }
                </style>
            </head>
        <body class="pos-print-page">
            ' . $content . '

            <p style="text-align:center;">Order Number: <br><strong>' . $_REQUEST['order_number'] . '</strong></p>
            ' . Application_Subscription_Cart::viewInLine( array( 'cart' => $setOrderInfo['order'] ) ) . '
            <br>
            <p style="text-align:center;">' . ( Application_Settings_Abstract::getSettings( 'Payments', 'order_confirmation_message' ) ? : "You can keep this print for your records. Your order number is a unique identifier that should be mentioned when referencing this order." ) . '</p>
            <p style="text-align:center;"><hr><br><br></p>
            <script type="text/javascript">
                //window.onload = function() { window.print(); }
            </script>
        </body>
        </html>
      ';

      echo $html;
      exit();

    } 

	// END OF CLASS
}
