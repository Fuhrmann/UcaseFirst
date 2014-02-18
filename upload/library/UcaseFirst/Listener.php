<?php
class UcaseFirst_Listener
{
    public static function templatePostRenderAdjustTitleCase($templateName, &$content, array &$containerData, XenForo_Template_Abstract $template)
    {
        $content = $template->create('ucasefirst_option_template_adjustTitleCase', $template->getParams())->__toString();
    }

    public static function extendDataWriterDiscussion($class, array &$extend)
    {
        $extend[] = 'UcaseFirst_Extend_DataWriter_Discussion';
    }
}
