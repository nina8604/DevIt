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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'devit' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '1Rg-46B=Dm v-F4$gD0F~(Y,M=5Q1vq*97WwuA^UbLq+apb#IJ7Ad sj[kS5P%>b');
define('SECURE_AUTH_KEY',  'WsL7.FN+ZQjF)~{@p4^m6,TbO$.|qzz+=^*Qk{+Pq3CZ*t 1.Rj~w|ggMr_;1$H1');
define('LOGGED_IN_KEY',    'KxAg~r(0b3INKt071x.:11Ft4Jb/l!{K$yw~n2YG7+n0+2+qt$l~-]P1-h{fwx]G');
define('NONCE_KEY',        'LLC^Uk]Wy3w<hHr[ xVxUbsS=tbl)N?[c3f8sHbuUHP<PtcV(XikLj83>o3KDf;y');
define('AUTH_SALT',        '(7KWfoL/HJRTEe>=Sna9|=VVk6UxI)WfffkrnPE+.~pw&JKNl-MUPJ?3|$%8I.S?');
define('SECURE_AUTH_SALT', ',+|ZX,V04 -HrD]%tLAXARKgb#*0MN29t`=K*t5%n!A80=<<N3#2}`P#Z?db@7Z-');
define('LOGGED_IN_SALT',   '{EkCj(`$>mRqD3fL{)0gop0h$fUP`u|Fz1A-kt&,Y$+qe`k&WuG91UPI8}<U<3Xc');
define('NONCE_SALT',       'y0<33V^=h3Q6c]+n@X7Mni{g<Lb^~#-zTV 0n.toz-npW=j?_BO)Fa%N[@h4~3Y*');

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
