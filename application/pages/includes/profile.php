<?php
/**
* PageCarton Page Generator
*
* LICENSE
*
* @category PageCarton
* @package /profile
* @generated Ayoola_Page_Editor_Layout
* @copyright  Copyright (c) PageCarton. (http://www.PageCarton.com)
* @license    http://www.PageCarton.com/license.txt
* @version $Id: profile.php	Monday 10th of January 2022 12:09:46 PM	ayoola.falola@yahoo.com $ 
*/
//	Page Include Content

							if( Ayoola_Loader::loadClass( 'Ayoola_Object_Embed' ) )
							{
								
$_431b6faf03e7d3d23e6b6bfb6fd6caf8 = new Ayoola_Object_Embed( array (
  'editable' => 'Application_Profile_View',
  'pagewidget_id' => '1575534210-0-8',
  'advanced_parameter_value' => 
  array (
    0 => '',
  ),
  'insert_id' => '1566242672-0-23',
  '' => '',
) );

							}
							else
							{
								
$_431b6faf03e7d3d23e6b6bfb6fd6caf8 = null;

							}
							
							if( Ayoola_Page::hasPriviledge( array (
  0 => '98',
  1 => '99',
), array( 'strict' => true ) ) )
							{
								if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
								{
									
$_3cea21321409544253ce5fb2c3d89220 = new Ayoola_Page_Editor_Text( array (
  'editable' => '

<p style="text-align: center;">
<a class="btn btn-default" href="/widgets/Application_Profile_Editor/?profile_url={{{profile_url}}}">Edit Profile</a>
<a class="btn btn-danger" href="/widgets/Application_Profile_Delete/?profile_url={{{profile_url}}}">Delete Profile</a>

</p>',
  'preserved_content' => '
<p style="text-align: center;">
<a class="btn btn-default" href="/widgets/Application_Profile_Editor/?profile_url={{{profile_url}}}">Edit Profile</a>
<a class="btn btn-danger" href="/widgets/Application_Profile_Delete/?profile_url={{{profile_url}}}">Delete Profile</a>

</p>',
  'url_prefix' => '',
  'pagewidget_id' => '1575534210-0-9',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Profile_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '',
  ),
  'object_access_level' => 
  array (
    0 => '98',
    1 => '99',
  ),
  'wrapper_name' => 'well',
  'insert_id' => '1566242672-0-24',
  '' => '',
  'includes' => 
  array (
  ),
  'content' => '

<p style="text-align: center;">
<a class="btn btn-default" href="/widgets/Application_Profile_Editor/?profile_url={{{profile_url}}}">Edit Profile</a>
<a class="btn btn-danger" href="/widgets/Application_Profile_Delete/?profile_url={{{profile_url}}}">Delete Profile</a>

</p>',
) );

								}
								else
								{
									
$_3cea21321409544253ce5fb2c3d89220 = null;

								}
							}    
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_1341db184ef104be4ab606a9943892dc = new Ayoola_Page_Editor_Text( array (
  'editable' => '<br>',
  'preserved_content' => '<br>',
  'url_prefix' => '',
  'pagewidget_id' => '1575534210-0-10',
  'advanced_parameter_value' => 
  array (
    0 => '',
  ),
  'insert_id' => '1566242673-0-25',
  '' => '',
  'includes' => 
  array (
  ),
  'content' => '<br>',
) );

							}
							else
							{
								
$_1341db184ef104be4ab606a9943892dc = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_ef2b5b5f170fae1108a97c8e6f721a55 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<a style="margin-right:1em;" onclick="ayoola.spotLight.showLinkInIFrame( \'/tools/classplayer/get/name/Application_Message_ShowAll/?to={{{profile_url}}}\' );" href="javascript:"> <i class="fa fa-envelope" style="margin-right: 1em;"></i> Message</a>
',
  'preserved_content' => '<a style="margin-right:1em;" onclick="ayoola.spotLight.showLinkInIFrame( \'/tools/classplayer/get/name/Application_Message_ShowAll/?to={{{profile_url}}}\' );" href="javascript:"> <i class="fa fa-envelope" style="margin-right: 1em;"></i> Message</a>
',
  'url_prefix' => '',
  'pagewidget_id' => '1575534210-0-11',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Global',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '',
  ),
  'wrapper_name' => 'white-well',
  'insert_id' => '1566242673-0-26',
  '' => '',
  'includes' => 
  array (
  ),
  'content' => '<a style="margin-right:1em;" onclick="ayoola.spotLight.showLinkInIFrame( \'/tools/classplayer/get/name/Application_Message_ShowAll/?to={{{profile_url}}}\' );" href="javascript:"> <i class="fa fa-envelope" style="margin-right: 1em;"></i> Message</a>
',
) );

							}
							else
							{
								
$_ef2b5b5f170fae1108a97c8e6f721a55 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_f34c23b8adba45aa3de5f9cd4d81173a = new Ayoola_Page_Editor_Text( array (
  'editable' => '<a style="margin-right:1em;" onclick="ayoola.spotLight.showLinkInIFrame( \'{{{share_url}}}\' );" href="javascript:"> <i class="fa fa-share-alt" style="margin-right: 1em;"></i> Share ({{{share_count}}})</a>
',
  'preserved_content' => '<a style="margin-right:1em;" onclick="ayoola.spotLight.showLinkInIFrame( \'{{{share_url}}}\' );" href="javascript:"> <i class="fa fa-share-alt" style="margin-right: 1em;"></i> Share ({{{share_count}}})</a>
',
  'url_prefix' => '',
  'pagewidget_id' => '1575534210-0-12',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Share',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '',
  ),
  'wrapper_name' => 'well',
  'insert_id' => '1566242673-0-27',
  '' => '',
  'includes' => 
  array (
  ),
  'content' => '<a style="margin-right:1em;" onclick="ayoola.spotLight.showLinkInIFrame( \'{{{share_url}}}\' );" href="javascript:"> <i class="fa fa-share-alt" style="margin-right: 1em;"></i> Share ({{{share_count}}})</a>
',
) );

							}
							else
							{
								
$_f34c23b8adba45aa3de5f9cd4d81173a = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_6cfb9fae480a73763849da5705f1f759 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<br>',
  'preserved_content' => '<br>',
  'url_prefix' => '',
  'pagewidget_id' => '1575534211-0-13',
  'advanced_parameter_value' => 
  array (
    0 => '',
  ),
  'insert_id' => '1566242673-0-28',
  '' => '',
  'includes' => 
  array (
  ),
  'content' => '<br>',
) );

							}
							else
							{
								
$_6cfb9fae480a73763849da5705f1f759 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Application_Article_ShowAll' ) )
							{
								
$_33ccc61f70714963cc67fd46ee01a803 = new Application_Article_ShowAll( array (
  'option' => '5',
  'category_name' => '',
  'article_types' => '',
  'template_name' => '',
  'pagewidget_id' => '1575534211-0-14',
  'advanced_parameter_value' => 
  array (
    0 => '1',
    1 => '1',
    2 => '1',
    3 => '<span class="pc_posts_option_items" style="text-decoration:line-through;" ></span>',
    4 => 'container',
  ),
  'insert_id' => '1566242673-0-29',
  'show_profile_posts' => '1',
  'add_a_new_post' => '1',
  'pagination' => '1',
  'content_to_clear' => '<span class="pc_posts_option_items" style="text-decoration:line-through;" ></span>',
  'object_class' => 'container',
) );

							}
							else
							{
								
$_33ccc61f70714963cc67fd46ee01a803 = null;

							}
							