<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'WPCACHEHOME', '/home/citylink/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'citylink_wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'citylink_basic');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Hs.5t;=t^*34');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|;9foA;o`Jf&-=,yI9Dr1)GAaK5C#P/4Y+8TW#rCN3i_RzQ5`;]+Vb|vy%4@vmRM');
define('SECURE_AUTH_KEY',  'swUou=wiK$__l8X`lMWt?q]wlR:b^|^ev@~Cylb.*>}*zgRMF:h|+x,||Lz~cC?S');
define('LOGGED_IN_KEY',    ',RK5#<Psx&-ua:h)TxoD$MOU%W=Bj<9>?+B3h_Us:zVF>q.0Z<p|,|$ixd-v9qFD');
define('NONCE_KEY',        'I>)xXRS]xKKZ{o1vP1Vpq6u/R&?2v3icXSim8k._>8|2fu+A.}wmPF*mF)]q+J/(');
define('AUTH_SALT',        'm|LIZaJKq2ied4t~VZm!C)s|-GPzD5-zNhYwR*+.[&Gw+8XL]cf+fmug+e>Ns9c:');
define('SECURE_AUTH_SALT', '(|%4,q,Ko;86{}|>50ZKc~rZd/?8-QbA`FM+^Sk,-^dznk0cb{2]ib$Ap4jiR<');
define('LOGGED_IN_SALT',   'i7O--]Ru|pPNK_{,^-g-k?rMVyi2!Z}30WT.Bzw:5{BqD8Ly|~ %zoYOaz;52}u@');
define('NONCE_SALT',       'JH`5|3gQI3&GOI]}?5iEFN2WgF xgv0Z*kZz,yk5%ps|-1,SovXA2(=(n[)LGU(7');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'cl_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_POST_REVISIONS', 5 );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);