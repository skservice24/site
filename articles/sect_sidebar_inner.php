<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"list_vertical",
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_CONTAINER" => "N",
		"ADD_SECTION" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BLOCK_NAME_IS_LINK" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"GRID_RESPONSIVE_SETTINGS" => "{\"xxs\":{\"items\":\"1\"}}",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#ARTICLES_ARTICLES_IBLOCK_ID#",
		"IBLOCK_TYPE" => "articles",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "bootstrap",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PARENT_TITLE" => "Последние новости",
		"PREVIEW_TRUNCATE_LEN" => "90",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "STICKER",
			2 => "SLOGAN",
			3 => "",
		),
		"RS_LAZY_IMAGES_USE" => "FROM_MODULE",
		"RS_LIST_SECTION" => "l_section",
		"RS_LIST_SECTION_ADD_CONTAINER" => "Y",
		"RS_LIST_SECTION_BUTTON_LINK" => "",
		"RS_LIST_SECTION_BUTTON_NAME" => "",
		"RS_LIST_SECTION_SHOW_BUTTON" => "N",
		"RS_LIST_SECTION_SHOW_TITLE" => "Y",
		"RS_LIST_SECTION_TITLE" => "Статьи",
		"RS_TEMPLATE" => "from_widget",
		"RS_TEMPLATE_FROM_WIDGET" => "tile",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_PARENT_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "list_vertical"
	),
	false
);?>
<?php if (IsModuleInstalled('sender')): ?>
<?$APPLICATION->IncludeComponent(
	"bitrix:sender.subscribe",
	"vertical",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CONFIRMATION" => "Y",
		"HIDE_MAILINGS" => "N",
		"SET_TITLE" => "N",
		"SHOW_HIDDEN" => "Y",
		"USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "4",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_PERSONALIZATION" => "Y"
	)
);?>
<? endif; ?>