<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main_1", 
	array(
		"ROOT_MENU_TYPE" => "catalog",
		"MAX_LEVEL" => "4",
		"CHILD_MENU_TYPE" => "catalog_sub",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "main_1",
		"MENU_COLOR" => defined("RS_MM_MENU_THEME")?RS_MM_MENU_THEME:"",
		"HEAD_TYPE" => defined("RS_MM_HEAD_TYPE")?RS_MM_HEAD_TYPE:"",
		"CAN_WIDE" => "Y"
	),
	false
); ?>