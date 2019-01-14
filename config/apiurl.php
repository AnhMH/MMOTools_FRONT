<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'chotreolethuy');

Configure::write('API.url_settings_getfrontdata', 'settings/getfrontdata');
Configure::write('API.url_settings_gethomedata', 'settings/gethomedata');

Configure::write('API.url_products_getdetailforfront', 'products/getdetailforfront');
Configure::write('API.url_products_list', 'products/list');
Configure::write('API.url_products_detail', 'products/detail');

Configure::write('API.url_coupons_list', 'coupons/list');
Configure::write('API.url_coupons_getdetailforfront', 'coupons/getdetailforfront');

Configure::write('API.url_cates_getdetailforfront', 'cates/getdetailforfront');

Configure::write('API.url_contact_addupdate', 'contact/addupdate');

Configure::write('API.url_customers_login', 'customers/login');
Configure::write('API.url_customers_addupdate', 'customers/addupdate');

Configure::write('API.url_orders_addupdate', 'orders/addupdate');

Configure::write('API.url_admins_getdetailforfront', 'admins/getdetailforfront');