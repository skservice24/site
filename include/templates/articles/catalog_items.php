<?php
global $arCatalogItemsFilter;
$arCatalogItemsFilter = array(
    'ID' => $arParams['FILTER']
);
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"catalog", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_CONTAINER" => "N",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/cart/",
		"BLOCK_NAME_IS_LINK" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "N",
		"COMPONENT_TEMPLATE" => "catalog",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"CUSTOM_FILTER" => "",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_FIELD2" => "sort",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "arCatalogItemsFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_CART_PROPERTIES" => array(
		),
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
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "????????????",
		"PAGE_ELEMENT_COUNT" => "4",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "RETAIL",
			2 => "WHOLE",
			3 => "EXTPRICE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"RCM_PROD_ID" => "",
		"RCM_TYPE" => "personal",
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
		"SHOW_FROM_SECTION" => "N",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"USE_ENHANCED_ECOMMERCE" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_OWL" => "N",
		"GRID_RESPONSIVE_SETTINGS" => "{\"xxs\":{\"items\":\"2\"},\"md\":{\"items\":\"3\"},\"lg\":{\"items\":\"4\"}}",
		"PRODUCT_BLOCKS_ORDER" => "sku,preview,props",
		"DATA_LAYER_NAME" => "dataLayer",
		"BRAND_PROPERTY" => "-",
		"USE_VOTE_RATING" => "Y",
		"VOTE_DISPLAY_AS_RATING" => "rating",
		"SHOW_MAX_QUANTITY" => "M",
		"MESS_SHOW_MAX_QUANTITY" => "",
		"RELATIVE_QUANTITY_FACTOR" => "5",
		"MESS_RELATIVE_QUANTITY_MANY" => "??????????",
		"MESS_RELATIVE_QUANTITY_FEW" => "????????",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
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
		),
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"COMPARE_PATH" => "/catalog/compare/",
		"USE_FAVORITE" => "Y",
		"FAVORITE_COUNT_PROP" => "FAVORITE_COUNT",
		"LABEL_PROP" => array(
			0 => "DOWNPRICE_CATALOG_ITEM",
			1 => "NEW_CATALOG_ITEM",
			2 => "HIT_CATALOG_ITEM",
			3 => "SALELEADER",
		),
		"LABEL_PROP_MOBILE" => array(
		),
		"OFFER_TREE_DROPDOWN_PROPS" => array(
			0 => "MEMORY_CARD",
			1 => "SMARTWATCH_STRAP",
		),
		"USE_GIFTS" => "Y",
		"TEMPLATE_VIEW" => "popup",
		"PRODUCT_PREVIEW" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"SHOW_RATING" => "N",
		"FILTER_PROPS" => array(
		),
		"PROPERTY_CODE_MOBILE" => array(
		),
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false}]",
		"ENLARGE_PRODUCT" => "STRICT",
		"MESS_BTN_BUY" => "????????????",
		"MESS_BTN_ADD_TO_BASKET" => "?? ??????????????",
		"MESS_BTN_SUBSCRIBE" => "??????????????????????",
		"MESS_BTN_DETAIL" => "??????????????????",
		"MESS_NOT_AVAILABLE" => "?????? ?? ??????????????",
		"FILL_ITEM_ALL_PRICES" => "N",
		"MESS_BTN_COMPARE" => "????????????????",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"LAZY_LOAD" => "N",
		"LOAD_ON_SCROLL" => "N",
		"SHOW_ARTNUMBER" => "N",
		"RS_LAZY_IMAGES_USE" => "FROM_MODULE",
		"BACKGROUND_COLOR" => "-",
        "RS_LIST_SECTION" => "l_section",
		"RS_LIST_SECTION_ADD_CONTAINER" => "N",
		"RS_LIST_SECTION_SHOW_TITLE" => "Y",
		"RS_LIST_SECTION_TITLE" => $arParams['BLOCK_NAME'],
		"RS_LIST_SECTION_SHOW_BUTTON" => "N",
		"RS_LIST_SECTION_BUTTON_NAME" => "???????????????????? ??????",
		"RS_LIST_SECTION_BUTTON_LINK" => "/catalog/",
		"SITE_LOCATION_ID" => defined("SITE_LOCATION_ID")?SITE_LOCATION_ID:"",
	),
	false
);?>
