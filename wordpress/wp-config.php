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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         'sOR1B%w[yiaz s_}|>JGtOB,mP{i H36Gz#Fs%7IZpt${PNxJwZ$Ze`>hhI.PWI9' );
define( 'SECURE_AUTH_KEY',  'G0,HKt7LwO= PamEB<$=D6( >_EGEl)J^;kK.iw15u8Xysupb!4y2d.-m21Jhcj=' );
define( 'LOGGED_IN_KEY',    'Z<6VP=HI!#y@`fMrkP(#8E8Iuzo@Q/XOeC[.Az] !:UB(Oz5psn/DoONH1-8`BFg' );
define( 'NONCE_KEY',        'o:,ek%7G*<^#>^s7_k~V6-z_Z$<0fX#d@/VP:h*?u?Sfk.H%xi13`hp*5M//XH8e' );
define( 'AUTH_SALT',        '1d_3CV}g=[^v?F#TYhxYs8>|s^l [+HZ [J&Lj?H{@[*T+T$FVJ kiAyFJ:IiciL' );
define( 'SECURE_AUTH_SALT', 'd/4%@R(YV<Dq92(8tZ!^HBMPz_,NZ;:itU}hD^/n|o3~%*/]uNo(qR2]W}sCOk;f' );
define( 'LOGGED_IN_SALT',   '9hoa(=Z<p1x/f3XugU[_|cB:FqNQd8r#z]JP2WJh6#~}OBfW<&T<1+dwFGvyiLtQ' );
define( 'NONCE_SALT',       '<LHT1#(|H}qE6QNgeNxk<.$])d?<=NHhE.9jyVIzobi}+=w:9Yb5{Y:%ES(s@~RQ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
