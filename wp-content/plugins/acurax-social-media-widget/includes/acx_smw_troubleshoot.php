<?php
acx_smw_hook_function('acx_smw_exprt_hook_option_exprt_quick');
acx_smw_hook_function('acx_smw_exprt_hook_option_form_head');
$page = "";
if(ISSET($_GET['page']))
{
	$page = sanitize_text_field(trim($_GET['page']));
}
if($page == "Acurax-Social-Widget-Expert-Support")
{
acx_smw_quick_form();
}
acx_smw_hook_function('acx_smw_exprt_hook_option_fields');
acx_smw_hook_function('acx_smw_exprt_hook_option_sidebar'); 
?>