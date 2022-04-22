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
define( 'DB_NAME', 'wpress' );

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
define( 'AUTH_KEY',         'x@il2$1SD/HXi,1zV`0&^P%U;Gfe$V`lJ=)!Rq^CiE^pNJT 3sG}cW{>sKbZ#&c/' );
define( 'SECURE_AUTH_KEY',  ']SU<AewlvZJ DS8*MCANSSq_U& C>x=-T9iW?gY+5Rb@OWHNC6M l&,16epTV+Tw' );
define( 'LOGGED_IN_KEY',    '50VaHS-r{hi]S8 j^T&=]pA_>H@:x11[2?va^UYc]a(Opm~GOBGS;W0BRvk[Y[6!' );
define( 'NONCE_KEY',        'xcW;YKJ]leT@eVZOKphQ:876!r1>Z~zs(7sNN,1vmc#^M2}M:1R;y)l2T-65q071' );
define( 'AUTH_SALT',        '56V<jzRU1Ed5hrWRe*T[XWv1UC=mTa:tpZV8qE9<t:@%^>(J/KVWoVU?14lpP#[t' );
define( 'SECURE_AUTH_SALT', 'lh}o6ai&-u3O9c|)* -s6oqR0~!3??`JT*^=l>fy_UorX0;Z,Dj4-U58DS=e?aLb' );
define( 'LOGGED_IN_SALT',   '?pWRc1b%@KCg!K=wfU~]_&!ImrSKM`)=g5{@TIvo,4wHd!t1/pGCw A2356o$$eL' );
define( 'NONCE_SALT',       ']b[=/s=n`w2Nf~CGoSH~le3E/CWSym9AA*N=!9OpQTPPIbKR2V]gY-qN]xx[OWV/' );

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
