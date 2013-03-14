<?php
class UcaseFirst_Extend_DataWriter_Discussion extends XFCP_UcaseFirst_Extend_DataWriter_Discussion
{
	public function _verifyTitle(&$title)
	{
		$response = parent::_verifyTitle($title);

		if ($response == true && !empty($title))
		{
			$title = strtoupper($title[0]) . substr($title,1);
		}

		return true;
	}
}