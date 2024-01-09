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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_luna_beleza' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'jj`u+3z$17L*7Bw]=T^*)t /HL+fQ`=AUEv3Q_l_H%%|#MKZ{M>]fm/QmMk{FFD0' );
define( 'SECURE_AUTH_KEY',  'pN#k_=)R|?l%YvL|hM[_1>S)wVmI-X(C1B%*ZhU)nJZ19*F>bNJC>7UUw,]I.2*}' );
define( 'LOGGED_IN_KEY',    '3*sd6tKkjLk9w61sJr;3b55&CsjDmc~erK!_qL}7<yvoa(f?XZ1<KuAO8 ;@0t5h' );
define( 'NONCE_KEY',        'hj>B}sQ(@Y~*qmaJ1.#P?.pl^fbhHG:Rusd]2S(F}TA82yjOFawT6D.D?x/C5~k<' );
define( 'AUTH_SALT',        'M|tHw,acWQsjOI;2N_b5xbE#Ag&?VWDa9XMyXsu|q.Feuz{%D;~%z_{dM]d?%kwD' );
define( 'SECURE_AUTH_SALT', 'qW4fpG&b[mm;t>`^`?nE{rY)T$y )pm#<_` %(ToBH.0 !W**tAz_W)E%,]-WFFx' );
define( 'LOGGED_IN_SALT',   'm{d3l9YNng@Q{C-E/.RDvM13T(|lk|ta}>A2Nt,E9SqL0!5_1NvyW+5~v+7{+%OC' );
define( 'NONCE_SALT',       ']Bf5JM@2i-y!`0T }Uh9%%u{-8J m+o&&n:WKuqO~ Cau~@cjPZPf~M-n@^Y4/~.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
