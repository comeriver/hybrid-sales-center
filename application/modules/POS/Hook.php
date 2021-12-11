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

class POS_Hook extends POS
{



    /**
     * Performs funds transfer when user payment is completed
     * 
     * param array Order information
     */
	public static function hook(& $object, & $method, & $data )
    {
        $class = get_class( $object );

        
        switch( strtolower( $class ) )
        { 
            case 'application_article_creator':
            case 'application_article_editor':
                switch( strtolower( $method ) )
                { 
                    case 'setform':
                        if( empty( $data['form'] ) || ! method_exists( $data['form'], 'addFieldset' ) )
                        {
                            return false;
                        }
                        $fieldset = new Ayoola_Form_Element();
                        $fieldset->addElement( array( 'name' => 'barcode_number', 'type' => 'InputText', 'placeholder' => 'e.g. 103747483635547', 'value' => $data['values']['barcode_number'] ) );
                        $data['form']->addFieldset( $fieldset );
                    break;
                }
            break;
        }
        


	}


}
