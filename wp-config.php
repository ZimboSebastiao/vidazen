<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', "vdz" );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', "root" );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', "" );

/** Nome do host do MySQL */
define( 'DB_HOST', "localhost" );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(iGp_`P%9:1mzQy6t$!oxNF@I/w}+&;a2kt`1rM1Wf0~{iYvZR>.IRt:S[hnm<M2' );
define( 'SECURE_AUTH_KEY',  'U|*Z%i2BQ=_D9_-ZGLn[`Tq3a?|(x. cO-k8DR,iqhEFNPc<_H[WskB-;+g)6R+ ' );
define( 'LOGGED_IN_KEY',    'dD|z,Z~B7bDQj;^;SQ6I?y r,53Fu;W{~X3eil:eC[V?g?{mJhO+wz7/~d:95%>O' );
define( 'NONCE_KEY',        '<+JEnE? D1B?9I--0_hu^m5Bd9Fx(pEaTBBOY,/rv2wcPQ,P>9{V=];a#[G~3f(:' );
define( 'AUTH_SALT',        '(oRp-O5i&/<2X}CFe(A!!d(8scCIoZiXVOo*_ W`l$,QrsmA8S(:BiH!sF/,8WP#' );
define( 'SECURE_AUTH_SALT', '(/m)SN]M7Qjs;4j.G6/lW{|yLiWiv9*,E r|p?=wsWK43#]FxD9@~G/~tB]SDJ*M' );
define( 'LOGGED_IN_SALT',   'e%P!6:AubkBPaJgDQYMyQ87D0mCTIJGx-xXiv~du`9Hv3p]r+@LS385Sq6HSlI|:' );
define( 'NONCE_SALT',       'M|E/QNWVw@mm:GQ.T<+Q<,UhIU4>Q)@82K0Oa{c&VE8ts&.%o=+VG$82K7ly{g86' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
define( 'WP_SITEURL', 'http://localhost/vidazen/' );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
