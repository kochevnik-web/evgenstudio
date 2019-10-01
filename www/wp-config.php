<?php
/**
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'vagrant' );
define( 'DB_USER', 'vagrant' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'e~uFWh<(NZxngfS.YTDm%U|Mf{gZg.e,sP6u-!epbYrzR%Kc#99$Z|x}_b),pjX@' );
define( 'SECURE_AUTH_KEY',  '9Hm:?RpTgO@F+4>dLACG6#-h?}NRvD#+WjfjGt3Iir2`z+KBI~U)U7JoT6&h@y/S' );
define( 'LOGGED_IN_KEY',    'E|k->.+5qzsIZ(/BhSscu(N0cb_t*L:,r O`&(7Jn}myu+wIN6B,(+>2qfy&|DM`' );
define( 'NONCE_KEY',        '+CTSnt(1e5BgJiEJ>`OX_2{6wd<xf&x{IC+N^.(7s>Kf`kU6%DR2;<0wAB16,IX!' );
define( 'AUTH_SALT',        'y^s_fwUuEcLlMv8]Y-nenJwfiHQLc;U-pm3PcU?I0~39Fu#RpOUg /=Ux36:zS8X' );
define( 'SECURE_AUTH_SALT', 'H.df={?~-ja]1%.{%!,$*COe>hW9S&Yg%_H(U.eF-8&D9#?1C>d|F:.r+8w2DxJ%' );
define( 'LOGGED_IN_SALT',   '-lIs]la?R*ZIm<uz[L?EN%}Sg,qLPr7|J}fgGqZ>u?+[DzK]IiS=$8]F-Y%KsLlX' );
define( 'NONCE_SALT',       '.>qAv5A_Vk,t2WfJW@cP5#v1H6]OAKU;A<!M@ItXI;<c)_V 9iV?r`!u=o|x_7h!' );

$table_prefix = 'wp_';

/**
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
