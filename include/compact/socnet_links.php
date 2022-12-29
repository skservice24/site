<?php
$APPLICATION->IncludeComponent(
	"rsmm:megamart.socnet.links", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"FACEBOOK" => "#",
		"VKONTAKTE" => "#",
		"TWITTER" => "#",
		"GOOGLE" => "#",
		"INSTAGRAM" => "#"
	),
	false,
	array(
		"HIDE_ICONS" => "N"
	)
);
?>