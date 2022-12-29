<?php
use Bitrix\Main\Application;
$request = Application::getInstance()->getContext()->getRequest();

if ($request->get('catalog_filter'))
{
	global $arCatalogFilter;
	$arCatalogFilter = array();
	$arCatalogFilter['!'.$request->get('catalog_filter')] = false;
}
?>


<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"catalog", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ARTNUMBER_PROP" => "ARTNUMBER",
		"BACKGROUND_COLOR" => "-",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/cart/",
		"BRAND_PROPERTY" => "BRAND_REF",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_PATH" => "/catalog/compare/",
		"COMPATIBLE_MODE" => "N",
		"COMPONENT_TEMPLATE" => "catalog",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DATA_LAYER_NAME" => "dataLayer",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FAVORITE_COUNT_PROP" => "FAVORITE_COUNT",
		"FILL_ITEM_ALL_PRICES" => "N",
		"FILTER_NAME" => "arCatalogFilter",
		"FILTER_PROPS" => array(
			0 => "DOWNPRICE_CATALOG_ITEM",
			1 => "NEW_CATALOG_ITEM",
			2 => "SALELEADER",
		),
		"GRID_RESPONSIVE_SETTINGS" => "{\"xxs\":{\"items\":\"2\"},\"md\":{\"items\":\"3\"},\"lg\":{\"items\":\"4\"}}",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(
			0 => "DOWNPRICE_CATALOG_ITEM",
			1 => "NEW_CATALOG_ITEM",
			2 => "SALELEADER",
		),
		"LABEL_PROP_MOBILE" => array(
		),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_ERROR_SECTION_EMPTY" => "В данной категории товаров нет",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_RELATIVE_QUANTITY_FEW" => "Мало",
		"MESS_RELATIVE_QUANTITY_MANY" => "Много",
		"MESS_SHOW_MAX_QUANTITY" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_CART_PROPERTIES" => "",
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_STRAP_REF",
			1 => "LENGHT_METIZ",
			2 => "STRAP_SIZE",
			3 => "SMARTWATCH_STRAP",
			4 => "SMARTWATCH_CASE",
			5 => "MEMORY_CARD",
			6 => "SMARTWATCH_SIZE",
			7 => "SIZE_BOOTS",
			8 => "CLOTHES_SIZE",
			9 => "SIZE_PURSE",
			10 => "FASOVKA",
			11 => "COLOR_REF",
			12 => "",
		),
		"OFFERS_SORT_FIELD" => "CATALOG_AVAILABLE",
		"OFFERS_SORT_FIELD2" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "asc",
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
		"OFFER_ARTNUMBER_PROP" => "ARTNUMBER",
		"OFFER_TREE_DROPDOWN_PROPS" => array(
			0 => "MEMORY_CARD",
			1 => "SMARTWATCH_STRAP",
		),
		"OFFER_TREE_PROPS" => array(
			0 => "COLOR_STRAP_REF",
			1 => "SIZE_PURSE",
			2 => "STRAP_SIZE",
			3 => "FASOVKA",
			4 => "LENGHT_METIZ",
			5 => "SMARTWATCH_CASE",
			6 => "MEMORY_CARD",
			7 => "COLOR_REF",
			8 => "SIZE_BOOTS",
			9 => "CLOTHES_SIZE",
			10 => "SMARTWATCH_STRAP",
			11 => "SMARTWATCH_SIZE",
			12 => "WHEEL_W",
			13 => "WHEEL_R",
			14 => "TYPE_R",
			15 => "TYRE_W",
			16 => "TYRE_H",
		),
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "bootstrap",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "10",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "sku,preview,props",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PREVIEW" => "Y",
		"PRODUCT_PROPERTIES" => "",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'10','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE_MOBILE" => array(
		),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"RELATIVE_QUANTITY_FACTOR" => "5",
		"RS_LAZY_IMAGES_USE" => "FROM_MODULE",
		"RS_LIST_SECTION" => "l_section",
		"RS_LIST_SECTION_ADD_CONTAINER" => "Y",
		"RS_LIST_SECTION_BUTTON_LINK" => "",
		"RS_LIST_SECTION_BUTTON_NAME" => "",
		"RS_LIST_SECTION_SHOW_BUTTON" => "N",
		"RS_LIST_SECTION_SHOW_TITLE" => "Y",
		"RS_LIST_SECTION_TITLE" => "Мы рекомендуем",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_ARTNUMBER" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_ERROR_SECTION_EMPTY" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "M",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_RATING" => "N",
		"TEMPLATE_VIEW" => "popup",
		"USE_ENHANCED_ECOMMERCE" => "Y",
		"USE_FAVORITE" => "Y",
		"USE_GIFTS" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_OWL" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_VOTE_RATING" => "Y",
		"VOTE_DISPLAY_AS_RATING" => "rating",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SITE_LOCATION_ID" => defined("SITE_LOCATION_ID")?SITE_LOCATION_ID:"",
		"SHOW_SLIDER" => "Y",
		"USE_OFFER_NAME" => "N",
		"USE_COMPARE_LIST" => "N"
	),
	false
);?>