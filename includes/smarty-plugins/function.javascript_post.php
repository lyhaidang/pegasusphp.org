<?php
/*
* Smarty plugin
* -------------------------------------------------------------
* File:     function.javascript_post.php
* Type:     function
* Name:     javascript_post
* Purpose:  
* -------------------------------------------------------------
*/
function smarty_function_javascript_post($params, &$smarty) {
	$strContent = "\n";
	Pegasus::sortJavaScript();
	foreach( Pegasus::getJavaScript(false) as $strJS ) {
		if( $strJS->getPost() ) {
			$strContent .= "\t<script type=\"text/javascript\" src=\"{$strJS->getFilename()}\"></script>\n";
		}
	}
	return $strContent;
}
?>