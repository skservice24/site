<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("hide_inner_sidebar", "Y");
$APPLICATION->SetPageProperty("hide_section", "Y");
$APPLICATION->SetTitle("Статьи");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"main_news",
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "TAGS",
			3 => "PREVIEW_TEXT",
			4 => "DETAIL_TEXT",
			5 => "DETAIL_PICTURE",
			6 => "DATE_ACTIVE_FROM",
			7 => "ACTIVE_FROM",
			8 => "DATE_ACTIVE_TO",
			9 => "ACTIVE_TO",
			10 => "IBLOCK_ID",
			11 => "IBLOCK_CODE",
			12 => "IBLOCK_NAME",
			13 => "CREATED_BY",
			14 => "TIMESTAMP_X",
			15 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "STICKER",
			1 => "BIND_CATALOG",
			2 => "INTERESTING_NEWS",
			3 => "INTERESTING_ARTICLE",
			4 => "INTERESTING_SALE",
			5 => "BIND_SERVICE",
			6 => "BIND_STAFF",
			7 => "BIND_STAFF2",
			8 => "GALLERY",
			9 => "DOCUMENTS",
			10 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILE_404" => "/404.php",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#ARTICLES_ARTICLES_IBLOCK_ID#",
		"IBLOCK_TYPE" => "articles",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "bootstrap",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "100",
		"SEF_FOLDER" => "/articles/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "Y",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y",
		"COMPONENT_TEMPLATE" => "main_news",
		"SLOGAN_CODE" => "SLOGAN",
		"RS_LAZY_IMAGES_USE" => "Y",
		"ADD_CONTAINER" => "N",
		"NEWS_VIEW_MODE" => "TILE",
		"GRID_RESPONSIVE_SETTINGS" => "{\"xxs\":{\"items\":\"1\"},\"sm\":{\"items\":\"2\"},\"lg\":{\"items\":\"3\"}}",
		"STICKER_CODE" => "STICKER",
		"STICKER_IBLOCK" => "Y",
		"SHOW_SUBSCRIBE_BLOCK_LIST" => "Y",
		"NEWS_DETAIL_PROP_BANNER" => "BANNER",
		"SOCIAL_SERVICES" => array(
			0 => "gplus",
			1 => "viber",
			2 => "vkontakte",
			3 => "whatsapp",
			4 => "",
		),
		"SOCIAL_COUNTER" => "N",
		"SOCIAL_COPY" => "first",
		"SOCIAL_LIMIT" => "",
		"SOCIAL_SIZE" => "m",
		"NEWS_DETAIL_SHOW_PRODUCTS" => "Y",
		"NEWS_DETAIL_PRODUCTS_PATH" => "/include/templates/news/catalog_items.php",
		"NEWS_DETAIL_SHOW_SUBSCRIBE" => "Y",
		"ADD_SECTION" => "N",
		"IBLOCK_VIEW_MODE" => "VIEW_ELEMENTS",
		"SECTIONS_TEMPLATE" => ".default",
		"RS_FILE_PROP_GALLERY_VIEW" => "photogallery",
		"RS_FILE_PROP_DOCUMENTS_VIEW" => "line",
		"RS_BIND_PROP_BINDED_ELEMENTS_INCLUDE_FILE" => "/include/templates/news/catalog_items.php",
		"RS_BIND_PROP_INTERESTING_ARTICLES_INCLUDE_FILE" => "/include/templates/news/news_items.php",
		"NUM_NEWS" => "20",
		"NUM_DAYS" => "30",
		"YANDEX" => "N",
		"ARCHIVE_URL" => "archive/#ARCHIVE_PATH#/",
		"USE_ARCHIVE" => "Y",
		"RS_TEMPLATE" => "from_widget",
		"RS_TEMPLATE_FROM_WIDGET" => defined("RS_MM_ARTICLES_TEMPLATE")?RS_MM_ARTICLES_TEMPLATE:"",
		"USE_COMMENTS" => "Y",
		"COMMENTS_BLOG_CODE" => "comments",
		"COMMENTS_USE_CONSENT" => "Y",
		"COMMENTS_CONSENT_ID" => "1",
		"RS_BIND_PROP_INTERESTING_NEWS_INCLUDE_FILE" => "/include/templates/articles/news_items.php",
		"RS_BIND_PROP_BIND_SECURITY_INCLUDE_FILE" => "/include/templates/articles/people_items.php",
		"RS_BIND_PROP_BIND_STAFF_INCLUDE_FILE" => "/include/templates/articles/staff_items.php",
		"RS_BIND_PROP_INTERESTING_ARTICLE_INCLUDE_FILE" => "/include/templates/articles/articles_items.php",
		"RS_BIND_PROP_BIND_CATALOG_INCLUDE_FILE" => "/include/templates/articles/catalog_items.php",
		"RS_BIND_PROP_BIND_SERVICE_INCLUDE_FILE" => "/include/templates/articles/services_items.php",
		"RS_BIND_PROP_INTERESTING_SALE_INCLUDE_FILE" => "/include/templates/articles/sale_items.php",
		"RS_BIND_PROP_BIND_STAFF2_INCLUDE_FILE" => "/include/templates/articles/staff_items.php",
		"PUBLISHER_TYPE" => "organization",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
			"rss" => "rss/",
			"rss_section" => "#SECTION_ID#/rss/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>