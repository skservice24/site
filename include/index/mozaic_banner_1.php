<? /* if(\Bitrix\Main\ModuleManager::isModuleInstalled("advertising")): ?>
<?$APPLICATION->IncludeComponent(
	"bitrix:advertising.banner",
	".default",
	Array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"NOINDEX" => "N",
		"QUANTITY" => "1",
		"TYPE" => "RS_INDEX_FULL"
	)
);?>
<? else: */ ?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"adv_banners", 
	array(
		"COMPONENT_TEMPLATE" => "adv_banners",
		"IBLOCK_TYPE" => "banners",
		"IBLOCK_ID" => "41",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "LINK_TARGET",
			1 => "LINK",
			2 => "LINK_TITLE",
			3 => "BACKGROUND",
			4 => "",
		),
		"CHECK_DATES" => "Y",
		"RS_TEMPLATE" => "mozaic_left",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "banner-na-glavnoy-1",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"GRID_RESPONSIVE_SETTINGS" => "{\"xxs\":{\"items\":\"1\"},\"md\":{\"items\":\"3\"}}",
		"ADD_CONTAINER" => "Y",
		"RS_SIDEBANNERS_IBLOCK_TYPE" => "banners",
		"RS_SIDEBANNERS_IBLOCK_ID" => "42"
	),
	false
);?>
<? // endif; ?>