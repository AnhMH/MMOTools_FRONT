<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.8
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

/*
 * Configure paths required to find CakePHP + general filepath constants
 */
require __DIR__ . '/paths.php';

/*
 * Bootstrap CakePHP.
 *
 * Does the various bits of setup that CakePHP needs to do.
 * This includes:
 *
 * - Registering the CakePHP autoloader.
 * - Setting the default application paths.
 */
require CORE_PATH . 'config' . DS . 'bootstrap.php';

use Cake\Cache\Cache;
use Cake\Console\ConsoleErrorHandler;
use Cake\Core\App;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;
use Cake\Core\Plugin;
use Cake\Database\Type;
use Cake\Datasource\ConnectionManager;
use Cake\Error\ErrorHandler;
use Cake\Http\ServerRequest;
use Cake\Log\Log;
use Cake\Mailer\Email;
use Cake\Utility\Inflector;
use Cake\Utility\Security;

/**
 * Uncomment block of code below if you want to use `.env` file during development.
 * You should copy `config/.env.default to `config/.env` and set/modify the
 * variables as required.
 */
if (!env('APP_NAME') && file_exists(CONFIG . '.env')) {
    $dotenv = new \josegonzalez\Dotenv\Loader([CONFIG . '.env']);
    $dotenv->parse()
        ->putenv()
        ->toEnv()
        ->toServer();
}

/*
 * Read configuration file and inject configuration into various
 * CakePHP classes.
 *
 * By default there is only one configuration file. It is often a good
 * idea to create multiple configuration files, and separate the configuration
 * that changes from configuration that does not. This makes deployment simpler.
 */
try {
    Configure::config('default', new PhpConfig());
    Configure::load('app', 'default', false);
    
    // Load for each environment.
    $env = getenv('FUEL_ENV');
    if (!$env) {
        $env = 'development';
    }

    if ($env == 'production') {
        Configure::load('production/app', 'default', true);
    } else {
        Configure::load('development/app', 'default', true);
    }
} catch (\Exception $e) {
    exit($e->getMessage() . "\n");
}

/*
 * Load an environment local configuration file.
 * You can use a file like app_local.php to provide local overrides to your
 * shared configuration.
 */
//Configure::load('app_local', 'default');

/*
 * When debug = true the metadata cache should only last
 * for a short time.
 */
if (Configure::read('debug')) {
    Configure::write('Cache._cake_model_.duration', '+2 minutes');
    Configure::write('Cache._cake_core_.duration', '+2 minutes');
    // disable router cache during development
    Configure::write('Cache._cake_routes_.duration', '+2 seconds');
}

/*
 * Set the default server timezone. Using UTC makes time calculations / conversions easier.
 * Check http://php.net/manual/en/timezones.php for list of valid timezone strings.
 */
date_default_timezone_set(Configure::read('App.defaultTimezone'));

/*
 * Configure the mbstring extension to use the correct encoding.
 */
mb_internal_encoding(Configure::read('App.encoding'));

/*
 * Set the default locale. This controls how dates, number and currency is
 * formatted and sets the default language to use for translations.
 */
ini_set('intl.default_locale', Configure::read('App.defaultLocale'));

/*
 * Register application error and exception handlers.
 */
$isCli = PHP_SAPI === 'cli';
if ($isCli) {
    (new ConsoleErrorHandler(Configure::read('Error')))->register();
} else {
    (new ErrorHandler(Configure::read('Error')))->register();
}

/*
 * Include the CLI bootstrap overrides.
 */
if ($isCli) {
    require __DIR__ . '/bootstrap_cli.php';
}

/*
 * Set the full base URL.
 * This URL is used as the base of all absolute links.
 *
 * If you define fullBaseUrl in your config file you can remove this.
 */
if (!Configure::read('App.fullBaseUrl')) {
    $s = null;
    if (env('HTTPS')) {
        $s = 's';
    }

    $httpHost = env('HTTP_HOST');
    if (isset($httpHost)) {
        Configure::write('App.fullBaseUrl', 'http' . $s . '://' . $httpHost);
    }
    unset($httpHost, $s);
}

Cache::setConfig(Configure::consume('Cache'));
ConnectionManager::setConfig(Configure::consume('Datasources'));
Email::setConfigTransport(Configure::consume('EmailTransport'));
Email::setConfig(Configure::consume('Email'));
Log::setConfig(Configure::consume('Log'));
Security::setSalt(Configure::consume('Security.salt'));

/*
 * The default crypto extension in 3.0 is OpenSSL.
 * If you are migrating from 2.x uncomment this code to
 * use a more compatible Mcrypt based implementation
 */
//Security::engine(new \Cake\Utility\Crypto\Mcrypt());

/*
 * Setup detectors for mobile and tablet.
 */
ServerRequest::addDetector('mobile', function ($request) {
    $detector = new \Detection\MobileDetect();

    return $detector->isMobile();
});
ServerRequest::addDetector('tablet', function ($request) {
    $detector = new \Detection\MobileDetect();

    return $detector->isTablet();
});

/*
 * Enable immutable time objects in the ORM.
 *
 * You can enable default locale format parsing by adding calls
 * to `useLocaleParser()`. This enables the automatic conversion of
 * locale specific date formats. For details see
 * @link https://book.cakephp.org/3.0/en/core-libraries/internationalization-and-localization.html#parsing-localized-datetime-data
 */
Type::build('time')
    ->useImmutable();
Type::build('date')
    ->useImmutable();
Type::build('datetime')
    ->useImmutable();
Type::build('timestamp')
    ->useImmutable();

/*
 * Custom Inflector rules, can be set to correctly pluralize or singularize
 * table, model, controller names or whatever other string is passed to the
 * inflection functions.
 */
//Inflector::rules('plural', ['/^(inflect)or$/i' => '\1ables']);
//Inflector::rules('irregular', ['red' => 'redlings']);
//Inflector::rules('uninflected', ['dontinflectme']);
//Inflector::rules('transliteration', ['/å/' => 'aa']);

/*
 * Custom
 */
include_once ('apiurl.php');

Configure::write('Config.CookieExpires', 60*60);
Configure::write('default_avatar', 'avatar_default.png');
Configure::write('Config.PageSize', 8);
Configure::write('Config.searchPageSize', array(
    8 => 'Hiển thị 8 sản phẩm',
    16 => 'Hiển thị 16 sản phẩm',
    32 => 'Hiển thị 32 sản phẩm',
));
Configure::write('Config.searchStatus', array(
    0 => __('LABEL_ACTIVE'),
    1 => __('LABEL_INACTIVE'),
));
Configure::write('Config.orderStatus', array(
    0 => 'Khởi tạo',
    1 => 'Hoàn thành',
));
Configure::write('Config.cartSessionKey', 'ChoTreo.Com.CartSessionKey');
Configure::write('Config.sortBy', array(
    0 => 'Sắp xếp mặc định',
    'sell_price-asc' => 'Giá thấp đến cao',
    'sell_price-desc' => 'Giá cao đến thấp',
    'is_feature-desc' => 'Phổ biến',
    'is_hot-desc' => 'Bán chạy',
    'is_new-desc' => 'Mới nhất',
));
Configure::write('Config.couponMerchants', array(
    "shopee" => "shopee",
    "fptshop" => "fptshop",
    "yes24vn" => "yes24vn",
    "cellphones" => "cellphones",
    "shopvnexpress" => "shopvnexpress",
    "adayroi" => "adayroi",
    "aeon.myharavan.com" => "aeon.myharavan.com",
    "shinhanbank" => "shinhanbank",
    "vntrip" => "vntrip",
    "aliexpress-alibaba" => "aliexpress-alibaba",
    "citibank" => "citibank",
    "tikivn" => "tikivn",
    "mytourvn" => "mytourvn",
    "lottevn" => "lottevn",
    "fahasa" => "fahasa",
    "sendovn" => "sendovn",
    "nguyenkimvn" => "nguyenkimvn",
    "vinabook" => "vinabook",
    "leflair" => "leflair",
    "klookvn" => "klookvn",
    "fadovn" => "fadovn",
    "hostinger" => "hostinger",
    "coupletx.myharavan.com" => "coupletx.myharavan.com",
    "bookin" => "bookin",
    "gotadi" => "gotadi",
    "viviane" => "viviane",
    "careerbuilder" => "careerbuilder",
    "fpt" => "fpt",
    "kyna" => "kyna",
    "tugo" => "tugo",
    "california" => "california",
    "atadi" => "atadi",
    "zcom" => "zcom",
    "vtcacademy" => "vtcacademy",
    "sacombank" => "sacombank",
    "divui" => "divui",
    "redcat" => "redcat",
    "ferosh" => "ferosh",
    "vietravel" => "vietravel",
    "cliptv" => "cliptv",
    "alapro" => "alapro",
    "ucancook" => "ucancook",
    "lanuong" => "lanuong",
    "agodamobile" => "agodamobile",
    "eropi" => "eropi",
    "queenie" => "queenie",
    "dichungtaxi" => "dichungtaxi",
    "vinaphone" => "vinaphone",
    "lychee" => "lychee",
    "central_th" => "central_th",
    "konvy" => "konvy",
    "blanjaindo" => "blanjaindo",
    "tokopediaindo" => "tokopediaindo",
    "vuabia" => "vuabia",
    "benthanhtourist" => "benthanhtourist",
    "fiditour" => "fiditour",
    "dunlopsport" => "dunlopsport",
    "bookingcom" => "bookingcom",
    "manulife" => "manulife",
    "bestprice" => "bestprice",
    "laneige" => "laneige",
    "shopeedesktop" => "shopeedesktop",
    "airbnb" => "airbnb",
    "blibli" => "blibli",
    "unica" => "unica",
    "dhcshop.myharavan.com" => "dhcshop.myharavan.com",
    "hotels" => "hotels",
    "naturequeen" => "naturequeen",
    "zaloraindo" => "zaloraindo",
    "muradvietnam" => "muradvietnam",
    "zaloramy" => "zaloramy",
    "zalorasg" => "zalorasg",
    "godaddy" => "godaddy",
    "mia" => "mia",
    "karofi" => "karofi",
    "accesstrade-ref" => "accesstrade-ref",
    "ifitness" => "ifitness",
    "labra.myharavan.com" => "labra.myharavan.com",
    "f88" => "f88",
    "looksi" => "looksi",
    "juno-1.myharavan.com" => "juno-1.myharavan.com",
    "shopat24" => "shopat24",
    "drwild" => "drwild",
    "namecheap" => "namecheap",
    "sephora" => "sephora",
    "vaytieudungcitibank" => "vaytieudungcitibank",
    "godaddy12month" => "godaddy12month",
    "microsoft" => "microsoft",
    "olala" => "olala",
    "lala" => "lala",
    "coedo.myharavan.com" => "coedo.myharavan.com",
    "ebaohiem" => "ebaohiem",
    "shopeeth" => "shopeeth",
    "gojicream" => "gojicream",
    "nutribaby" => "nutribaby",
    "baoviet" => "baoviet",
    "biotrivn" => "biotrivn",
    "smokeout" => "smokeout",
    "maxilash" => "maxilash",
    "titangel" => "titangel",
    "dentaseal" => "dentaseal",
    "bustelle" => "bustelle",
    "mitsubishi" => "mitsubishi",
    "edupia" => "edupia",
    "nhatbanskincare" => "nhatbanskincare",
    "zeroplus" => "zeroplus",
    "palclair" => "palclair",
    "vitayes" => "vitayes",
    "goutaz" => "goutaz",
    "tinhhaubienob" => "tinhhaubienob",
    "tagovn" => "tagovn",
    "xskin" => "xskin"
));

if ($env == 'production') {
    define('VERSION_DATE', date('YmdHis'));
    include_once ('production/bootstrap.php');
} else {
    define('VERSION_DATE', date('YmdHis'));
    include_once ('development/bootstrap.php');
}

define('DEFAULT_SITE_TITLE', 'ChoTreo Admin');
if (!defined('USE_SUB_DIRECTORY')) {
    define('USE_SUB_DIRECTORY', '');
}
