<?
		switch ($route) {
		case NULL:
			include 'view/main.tpl';
			break;
		case 'about':
			include 'view/about.tpl';
			break;
		case 'contacts':
			include 'view/contacts.tpl';
			break;
		case 'product':
			include 'view/product.tpl';
			break;
		case 'catalog':
			include 'view/catalog.tpl';
			break;
		case 'basket':
			include 'view/basket.tpl';
			break;
		default:
			include 'view/404.tpl';
			break;
		}
	?>