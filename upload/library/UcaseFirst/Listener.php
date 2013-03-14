<?php
class UcaseFirst_Listener
{
	public static function templatePostRender($templateName, &$content, array &$containerData, XenForo_Template_Abstract $template)
	{
		if ($templateName == 'option_template_adjustTitleCase')
		{
			$content = $template->create('ucasefirst_option_template_adjustTitleCase', $template->getParams())->__toString();
		}
	}
	
	public static function extend($class, array &$extend)
	{
		if ($class == 'XenForo_DataWriter_Discussion_Thread')
		{
			$extend[] = 'UcaseFirst_Extend_DataWriter_Discussion';			
		}
	}
}