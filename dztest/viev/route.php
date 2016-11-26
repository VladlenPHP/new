<?
	switch ($route) {
		case NULL:
			include_once 'viev/main.tpl';
			break;
		case 'about':
			include_once 'viev/about.tpl';
			break;
		case 'contacts':
			include_once 'viev/contacts.tpl';
			break;
		case 'catalog':
			include_once 'viev/catalog.tpl';
			break;
		case 'product':
			include_once 'viev/product.tpl';
			break;
		default:
			include_once 'viev/404.tpl';
			break;
	}
?>