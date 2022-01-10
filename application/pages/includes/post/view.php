<?php
/**
* PageCarton Page Generator
*
* LICENSE
*
* @category PageCarton
* @package /post/view
* @generated Ayoola_Page_Editor_Layout
* @copyright  Copyright (c) PageCarton. (http://www.PageCarton.com)
* @license    http://www.PageCarton.com/license.txt
* @version $Id: view.php	Monday 10th of January 2022 12:09:52 PM	ayoola.falola@yahoo.com $ 
*/
//	Page Include Content

							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_5f9be6ccbb65ef7f547bc302f58e849f = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div><br></div><div><br></div>',
  'preserved_content' => '',
  'url_prefix' => '',
  'pagewidget_id' => '0-1611791946-9',
  'includes' => 
  array (
  ),
  'content' => '<div><br></div><div><br></div>',
) );

							}
							else
							{
								
$_5f9be6ccbb65ef7f547bc302f58e849f = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_3a61f077bfdb4a77f7b59607e251822d = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div class="xcontainer">

<h1 class="pc_give_space_top_bottom">{{{article_title}}}</h1>

<p>{{{article_description}}}</p>
<br>
</div>
<img src="{{{document_url}}}" alt="Image" style="width:100%">
<br>
<br>',
  'preserved_content' => '<div class="xcontainer">

<h1 class="pc_give_space_top_bottom">{{{article_title}}}</h1>

<p>{{{article_description}}}</p>
<br>
</div>
',
  'url_prefix' => '',
  'widget_options' => 
  array (
    0 => 'preserve_content',
    1 => 'embed_widgets',
    2 => 'wrappers',
    3 => 'parameters',
  ),
  'pagewidget_id' => '1575534199-0-167',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '<p class=\'pc_give_space_top_bottom\'></p>',
  ),
  'wrapper_name' => 'well',
  'content_to_clear[0]' => '<p class=\'pc_give_space_top_bottom\'></p>',
  'includes' => 
  array (
  ),
  'content' => '<div class="xcontainer">

<h1 class="pc_give_space_top_bottom">{{{article_title}}}</h1>

<p>{{{article_description}}}</p>
<br>
</div>
',
) );

							}
							else
							{
								
$_3a61f077bfdb4a77f7b59607e251822d = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_1e8bd1e6d234c6fc2682d667d2ba9384 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div class="xcontainer">

<h1 class="pc_give_space_top_bottom">{{{article_title}}}</h1>

<p>{{{article_description}}}</p>
<br>
</div>
<img src="{{{document_url}}}" alt="Image" style="width:100%">
<br>
<br>',
  'preserved_content' => '<img src="{{{document_url}}}" alt="Image" style="width:100%">',
  'url_prefix' => '',
  'widget_options' => 
  array (
    0 => 'preserve_content',
    1 => 'embed_widgets',
    2 => 'wrappers',
    3 => 'parameters',
  ),
  'pagewidget_id' => '1575534199-0-167',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '<p class=\'pc_give_space_top_bottom\'></p>',
  ),
  'wrapper_name' => '',
  'content_to_clear[0]' => '<p class=\'pc_give_space_top_bottom\'></p>',
  'includes' => 
  array (
  ),
  'content' => '<img src="{{{document_url}}}" alt="Image" style="width:100%">',
) );

							}
							else
							{
								
$_1e8bd1e6d234c6fc2682d667d2ba9384 = null;

							}
							
							if( Ayoola_Page::hasPriviledge( array (
  0 => '98',
  1 => '99',
), array( 'strict' => true ) ) )
							{
								if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
								{
									
$_09f468859316e6f5cf5fa229c4035263 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
  'preserved_content' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
  'url_prefix' => '',
  'pagewidget_id' => '1575534199-0-169',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => 'Application_Article_View',
    1 => 'pc_give_space_top_bottom',
  ),
  'object_access_level' => 
  array (
    0 => '98',
    1 => '99',
  ),
  'wrapper_name' => 'well',
  'object_class' => 'pc_give_space_top_bottom',
  'includes' => 
  array (
  ),
  'content' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
) );

								}
								else
								{
									
$_09f468859316e6f5cf5fa229c4035263 = null;

								}
							}    
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Object_Embed' ) )
							{
								
$_6fcd9c1619ba5708715b9930263b5399 = new Ayoola_Object_Embed( array (
  'editable' => 'Application_Article_View',
  'pagewidget_id' => '1575534199-0-168',
  'advanced_parameter_value' => 
  array (
    0 => '1',
    1 => '1',
    2 => '1',
    3 => '1',
    4 => '1',
  ),
  'get_views_count' => '1',
  'get_audio_play_count' => '1',
  'get_download_count' => '1',
  'thumbnail' => '1',
  'hide_default_post_view' => '1',
) );

							}
							else
							{
								
$_6fcd9c1619ba5708715b9930263b5399 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Object_Embed' ) )
							{
								
$_bc665ecf897c5dfc2ba52cb5a2e43fb6 = new Ayoola_Object_Embed( array (
  'editable' => 'Application_CommentBox_ShowComments',
  'pagewidget_id' => '0-1611792239-11',
) );

							}
							else
							{
								
$_bc665ecf897c5dfc2ba52cb5a2e43fb6 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_6a6e9195af68d2bc89b66a987cd65894 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<p>&nbsp;</p>

<p>&nbsp;</p>
',
  'preserved_content' => '',
  'url_prefix' => '',
  'pagewidget_id' => '0-1611792467-12',
  'includes' => 
  array (
  ),
  'content' => '<p>&nbsp;</p>

<p>&nbsp;</p>
',
) );

							}
							else
							{
								
$_6a6e9195af68d2bc89b66a987cd65894 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Object_Embed' ) )
							{
								
$_4842352f247d06425e3b93ae0e2e2bff = new Ayoola_Object_Embed( array (
  'editable' => 'Application_CommentBox',
  'widget_options' => 
  array (
    0 => 'parameters',
  ),
  'pagewidget_id' => '0-1611792215-10',
  'advanced_parameter_value' => 
  array (
    0 => 'container',
  ),
  'object_class' => 'container',
) );

							}
							else
							{
								
$_4842352f247d06425e3b93ae0e2e2bff = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Object_Embed' ) )
							{
								
$_388418e22b4ef88145152b88bf50a461 = new Ayoola_Object_Embed( array (
  'editable' => 'Application_Article_ViewPagination',
  'widget_options' => 
  array (
    0 => 'parameters',
  ),
  'pagewidget_id' => '0-1611785396-7',
  'advanced_parameter_value' => 
  array (
    0 => 'container',
  ),
  'object_class' => 'container',
) );

							}
							else
							{
								
$_388418e22b4ef88145152b88bf50a461 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_e8d20b82f6c4eb884a809bee7b84e158 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div><br></div><div><br></div>',
  'preserved_content' => '',
  'url_prefix' => '',
  'pagewidget_id' => '0-1611791946-9',
  'includes' => 
  array (
  ),
  'content' => '<div><br></div><div><br></div>',
) );

							}
							else
							{
								
$_e8d20b82f6c4eb884a809bee7b84e158 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_c1587c588cc88702179a96345f7e5878 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div class="container">
<p>&nbsp;</p>

<h3>Similar {{{post_type}}}<br></h3>

<p>&nbsp;</p>
</div>
',
  'preserved_content' => '<div class="container">
<p>&nbsp;</p>

<h3>Similar {{{post_type}}}<br></h3>

<p>&nbsp;</p>
</div>
',
  'url_prefix' => '',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
    1 => 'wrappers',
    2 => 'parameters',
  ),
  'pagewidget_id' => '1575534199-0-170',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '',
  ),
  'wrapper_name' => 'well',
  '' => '',
  'includes' => 
  array (
  ),
  'content' => '<div class="container">
<p>&nbsp;</p>

<h3>Similar {{{post_type}}}<br></h3>

<p>&nbsp;</p>
</div>
',
) );

							}
							else
							{
								
$_c1587c588cc88702179a96345f7e5878 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Application_Article_ShowAll' ) )
							{
								
$_7b29fbca1b27f9b673425476e9fdeb11 = new Application_Article_ShowAll( array (
  'option' => '6',
  'category_name' => '',
  'article_types' => '',
  'template_name' => 'SearchStyle',
  'widget_options' => 
  array (
    0 => 'wrappers',
    1 => 'parameters',
  ),
  'pagewidget_id' => '1575534199-0-171',
  'advanced_parameter_value' => 
  array (
    0 => '1',
    1 => 'container',
  ),
  'wrapper_name' => 'white-well',
  'post_with_same_true_post_type' => '1',
  'wrapper_inner_class' => 'container',
) );

							}
							else
							{
								
$_7b29fbca1b27f9b673425476e9fdeb11 = null;

							}
							