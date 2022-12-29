<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск по сайту");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"main", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "bootstrap",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "20",
		"RESTART" => "Y",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "Y",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "Y",
		"arrFILTER" => array(
		),
		"arrWHERE" => array(
		),
		"COMPONENT_TEMPLATE" => "main",
		"CATALOG_IBLOCK_TYPE" => "catalog",
		"CATALOG_IBLOCK_ID" => "17",
		"CATALOG_IS_USE_CART" => "Y",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "RETAIL",
			2 => "WHOLE",
			3 => "EXTPRICE",
		),
		"CATALOG_ADD_PICT_PROP" => "MORE_PHOTO",
		"CATALOG_LABEL_PROP" => array(
		),
		"PRODUCT_DISPLAY_MODE" => "Y",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_MAX_QUANTITY" => "M",
		"SHOW_OLD_PRICE" => "Y",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"SHOW_ARTNUMBER" => "Y",
		"CATALOG_PRODUCT_BLOCKS_ORDER" => "preview,props,sku",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"CATALOG_ENLARGE_PRODUCT" => "STRICT",
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
		"OFFER_TREE_DROPDOWN_PROPS" => array(
		),
		"FILL_ITEM_ALL_PRICES" => "N",
		"PRICE_VAT_INCLUDE" => "N",
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"CATALOG_ADD_TO_BASKET_ACTION" => "ADD",
		"LIST_USE_VOTE_RATING" => "Y",
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",
		"SHOW_RATING" => "N",
		"USE_ENHANCED_ECOMMERCE" => "Y",
		"LIST_DISPLAY_PREVIEW_TEXT" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_TEMPLATE" => "catalog",
		"USE_FAVORITE" => "Y",
		"FAVORITE_COUNT_PROP" => "FAVORITE_COUNT",
		"MESS_SHOW_MAX_QUANTITY" => "Наличие",
		"RELATIVE_QUANTITY_FACTOR" => "5",
		"CATALOG_MESS_RELATIVE_QUANTITY_MANY" => "много",
		"CATALOG_MESS_RELATIVE_QUANTITY_FEW" => "мало",
		"ARTNUMBER_PROP" => "ARTNUMBER",
		"DATA_LAYER_NAME" => "dataLayer",
		"CATALOG_BRAND_PROPERTY" => "BRAND_REF",
		"CATALOG_TEMPLATE_VIEW" => "popup"
		
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>