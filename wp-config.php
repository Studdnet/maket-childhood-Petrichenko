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
 * * Настройки базы данных
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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '159753' );

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
define( 'AUTH_KEY',         'XGdb<oFxiUoi0dsSRfM_s.HLEl2xZ|B[t0<afroe|g^{!A>0lB_aE/:#*JSK{D9J' );
define( 'SECURE_AUTH_KEY',  '!0.B5RQy6ft/bvcJ!k/9t.1O&uFbPxv|?eyxO=`5cF0QxB+x8slYPiCWOYh3^vIl' );
define( 'LOGGED_IN_KEY',    'W;;cA8:G,j1ORz_&}m4q%~dyhf)z]/At-=M<19L@C6?XJ/jwR0O[Kmi<R/}|2*Dr' );
define( 'NONCE_KEY',        'O#NVa9=Vs|j{_4aA2Lnk#@8*n|.oErcpa2ZX{`:*#L%jW0BlXn>zrtqfgRlwLKlz' );
define( 'AUTH_SALT',        '(.jLiA~Y)L-;Y6_Fvtu<QVb&mk%=H|!]~(L)ZjxJRJgO0F!{p&AvohK}k8c8M|&~' );
define( 'SECURE_AUTH_SALT', '~IV>cQS^Wx-(L6=n`.%>B*@2K?Q{j[7NU_@6|g3k&>*e$aNf8*M~kK0If,3AvwmJ' );
define( 'LOGGED_IN_SALT',   'E^|g%=/40-#crPYOn@M2yj>QL3.={g$f;nMhl<h7w~vyOdz l&:[$}G=}8f.t-FW' );
define( 'NONCE_SALT',       'G8<iXR7:(njG4(K@Vy~(!,XV@F7S8NTIajx&xg:9^5zyH/Q|p=d`m5}U*8;Zy):9' );

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
