<?php
/**
* PageCarton Page Generator
*
* LICENSE
*
* @category PageCarton
* @package /search
* @generated Ayoola_Page_Editor_Layout
* @copyright  Copyright (c) PageCarton. (http://www.PageCarton.com)
* @license    http://www.PageCarton.com/license.txt
* @version $Id: search.php	Friday 10th of December 2021 06:20:54 PM	ayoola@ayoo.la $ 
*/
//	Page Include Content

							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_f5dace6efe642b9916150aa76d0a25b1 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div class="container">
<p><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span>&nbsp;</p>

<p>You searched for</p>

<h1>{{{q}}}</h1>

<div>&nbsp;</div>

<div>&nbsp;Here are the top results:<span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span></div><div><br></div>
</div>',
  'preserved_content' => '<div class="container">
<p><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span>&nbsp;</p>

<p>You searched for</p>

<h1>{{{q}}}</h1>

<div>&nbsp;</div>

<div>&nbsp;Here are the top results:<span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span><span style="display: none;">&nbsp;</span></div><div><br></div>
</div>',
  'url_prefix' => '',
  'widget_options' => 
  array (
    0 => 'preserve_content',
    1 => 'embed_widgets',
    2 => 'wrappers',
    3 => 'parameters',
  ),
  'pagewidget_id' => '1575534207-0-189',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Global',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '1',
    1 => 'q',
  ),
  'wrapper_name' => 'dark',
  'include_request[0]' => '1',
  'required_template_variables[0]' => 'q',
  'includes' => 
  array (
  ),
  'content' => '<div class="container">
<p><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span>&nbsp;</p>

<p>You searched for</p>

<h1>{{{q}}}</h1>

<div>&nbsp;</div>

<div>&nbsp;Here are the top results:<span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span><span style="display: none;"></span></div><div><br></div>
</div>',
) );

							}
							else
							{
								
$_f5dace6efe642b9916150aa76d0a25b1 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Object_Embed' ) )
							{
								
$_c0929fcf3f8b73a65405efeebef46724 = new Ayoola_Object_Embed( array (
  'editable' => 'Application_SearchBox',
  'pagewidget_id' => '1575534208-0-1',
  'advanced_parameter_value' => 
  array (
    0 => '',
  ),
  '' => '',
) );

							}
							else
							{
								
$_c0929fcf3f8b73a65405efeebef46724 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_34b689e5af9652727ef694fb7945d5e7 = new Ayoola_Page_Editor_Text( array (
  'codes' => '<p><a href="{{{post_link}}}"><img alt="" src="{{{document_url_uri}}}?width=100&amp;height=100" style=" border-radius: 50%; float:right;"></a></p>

<h2><a href="{{{post_link}}}">{{{article_title}}}</a></h2>

<p>{{{article_description}}}</p>

<i>{{{post_type}}}</i>

<div style="clear:both;">&nbsp;</div>

<hr>
<p>&nbsp;</p>
',
  'preserved_content' => '',
  'url_prefix' => '',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
    1 => 'parameters',
  ),
  'pagewidget_id' => '1575534208-0-2',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_ShowAll',
  ),
  'advanced_parameter_value' => 
  array (
    0 => 'keyword',
    1 => 'pc_search_score',
    2 => '1',
    3 => '1',
    4 => '12',
  ),
  'search_mode[0]' => 'keyword',
  'sort_column[0]' => 'pc_search_score',
  'inverse_order[0]' => '1',
  'pagination' => '1',
  'no_of_post_to_show[0]' => '12',
  'includes' => 
  array (
  ),
  'content' => '<p><a href="{{{post_link}}}"><img alt="" src="{{{document_url_uri}}}?width=100&amp;height=100" style=" border-radius: 50%; float:right;"></a></p>

<h2><a href="{{{post_link}}}">{{{article_title}}}</a></h2>

<p>{{{article_description}}}</p>

<i>{{{post_type}}}</i>

<div style="clear:both;">&nbsp;</div>

<hr>
<p>&nbsp;</p>
',
) );

							}
							else
							{
								
$_34b689e5af9652727ef694fb7945d5e7 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_07e373385ff42c51ba0a00ffce9ca4c6 = new Ayoola_Page_Editor_Text( array (
  'codes' => '<h3>Recent Searches</h3>
<ul class="pc_same_height_container">
<!--{{{0}}}
<li><a href="/search?q={{{query}}}">{{{query}}}</a></li>
{{{0}}}-->
</ul>	',
  'preserved_content' => '			
			<h3>Lorem Ipsum dolor</h3>
			<p>Vivamus sit amet dolor sit amet nunc maximus finibus. Donec vel ornare leo, eget gravida orci. Etiam vitae rutrum nisi. Mauris auctor velit et ultricies mollis. Donec in mattis lectus. In hac habitasse platea dictumst. Sed ultricies magna ut ligula fringilla facilisis. Ut sodales erat ut libero rhoncus hendrerit. Vivamus nunc magna, finibus vel velit in, tempus venenatis dolor. Aenean a leo non tellus semper ultricies eget quis enim.</p>
			',
  'url_prefix' => '',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
  ),
  'pagewidget_id' => '1575534208-0-3',
  'markup_template_object_name' => 
  array (
    0 => 'Application_SearchBox_Table',
  ),
  'includes' => 
  array (
  ),
  'content' => '<h3>Recent Searches</h3>
<ul class="pc_same_height_container">
<!--{{{0}}}
<li><a href="/search?q={{{query}}}">{{{query}}}</a></li>
{{{0}}}-->
</ul>	',
) );

							}
							else
							{
								
$_07e373385ff42c51ba0a00ffce9ca4c6 = null;

							}
							