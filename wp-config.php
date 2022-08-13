<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'room15_refact' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XGY80nqshrNU>PseVpu#j2NDb:j#.|,MkVz1V5$~$j87Aw@]E,:9tu*1gEggD~j7' );
define( 'SECURE_AUTH_KEY',  'UdM/?W4b8e7Jv5Cf__nwi1tf%n8}Q$`AugJt^GQaH]o[]Eev}Vi@PHiEZXy$7<XC' );
define( 'LOGGED_IN_KEY',    'Fza;:ji7sOIF*5wWRgj&XMkBLL908gN25ec{&I^#@7x9Klwi/E7G]rKD:pVCV:z!' );
define( 'NONCE_KEY',        '.^j*2vU0+[14vqf[:K[]T- sr}=l-+Q<a7>6*hmoGf7xIw&IgCmJs)d%W%%19o6F' );
define( 'AUTH_SALT',        'K%3qQTc`@$+N ?0I7W+E8k5(LKqDXhb<8r1I@c|>V9dR4+9`vZ@lXbwi2s_,w}4f' );
define( 'SECURE_AUTH_SALT', '|n`* ,BgDCXS+6@cu }P)uZU:<!?oYA}y EbC:6(9gaofRA3*Xc( $+D=:BJcNp&' );
define( 'LOGGED_IN_SALT',   'yS&!SV@Y99TkMza:yp24n0v,_V|cKq|=XY)6*[juZ2!H!*e@zGp?Bi;`./fbdcs7' );
define( 'NONCE_SALT',       'bhO,f*mM&&nP)P?s)s$4@5fRTVD O;TNr0& cx$}d^,}YHyWKvPTu^W#!tU]S`>(' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
