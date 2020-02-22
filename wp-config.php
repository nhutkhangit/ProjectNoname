<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'projectnoname' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<UR*M4WU;Z5Ab&45;9H51_[r0)MJ,pvNRh7lAiJpl3%Vn:=rU.ud>G`9xh2IJ}4N' );
define( 'SECURE_AUTH_KEY',  'Q,=:8=t DVH_1!o%Lz1QwRMnAs<E(;rSX_FIUdB-uEF{FNBh4_UHpe-mdDEA3Edh' );
define( 'LOGGED_IN_KEY',    'nn&gbl~dQr3WP/R`[Mo_Y!0RN}{_PIXV|knBQ,dPMu<zW96pUJI&0Y9_CD[)4Nk(' );
define( 'NONCE_KEY',        '=OA%whX$9HDL[EF:vHXVH6<k>w6rG?C_waz.pd_}hi&Gc93$cup,4HR-BuUKluo=' );
define( 'AUTH_SALT',        'iv[*},=E#2/+iJi5Uw)ik>EXl1`uXem1fg2hDi|ezQAM3Chuc|oJKi;x;reyN=gF' );
define( 'SECURE_AUTH_SALT', 'c6?~2tFCRWk78H<EOb{C6|x;^3pk!`&X`Ve&%;B{n `X=*T-KT`@=z`>EWnz}Szz' );
define( 'LOGGED_IN_SALT',   '3]Yuy}9@8qT D;!Z9Z7R};kv4q,Ssh0v<99?41}yF[FgSUYsa9vr1?4W$p>-]k4$' );
define( 'NONCE_SALT',       '|e9gTKJb5,oPSthXOWkNVG7H.CIlcih6^4O8Oc&8m%^-7KGwC{?o,LG=OD}Qr^#B' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
