<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1234' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BS&z*|MM5NE@[@8ayg.$IQ<I~)UYoI%k?HHk8p28bKJSSwj-9o[)Y{BR^0ycQ!Ql' );
define( 'SECURE_AUTH_KEY',  'f3y R:8oV32{6b9HQub#TZFfJq>fQkyW0TwpaLX`*|3tRySgtBVO6Z7S(oZ4FPhy' );
define( 'LOGGED_IN_KEY',    'YGotz[x+1IM@_&BK|@x-1P*>qgG;9P%=g~uwUDG|0oA;;Gh?3aC6D|`f{ p49Ez]' );
define( 'NONCE_KEY',        '3~TOMuy#LH7J#-U;HFz!%o.O[oG,nys^UzkB #`i,{OfXG7i3@$s_ f!wHGDPasY' );
define( 'AUTH_SALT',        '^c=R*nv|E!>T@08y-zb-d&26kh;Gqf7~OJ&&Io-MCc.>5.LxY&NTw|m<o%ML`o2d' );
define( 'SECURE_AUTH_SALT', 'JI<_Z<T#DbX#X9es(*5X(B2:60A0b=G&<,o?0}*cGS~Xxc`oRj1KhSiM{EmHc2G$' );
define( 'LOGGED_IN_SALT',   '.2V$Q :jD.u_XVE%`2&`Cv+Ze-5weTPVRcMQ(D^<y/9)? ZZ|?u.jC_A2wP!m3}d' );
define( 'NONCE_SALT',       'vYW4VgvY9Z%n>CUMl]=!jju-C0[B2ds]Wj*DBXP59PD?(0}88~tv-P_x+JBp`;K%' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
