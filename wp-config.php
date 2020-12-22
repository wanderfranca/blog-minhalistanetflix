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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'mylistanf' );
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
define( 'AUTH_KEY',         '*G)iH{HA<YlBOs-}pbKE@:Q7H19TcBBsx( 8 TUGE$Gw7_gwrA~^F,-2mX[@M{8o' );
define( 'SECURE_AUTH_KEY',  '=vv=.g<7e!4^A!+`(ou29{H[b(jdl<LKYdU5`^Vu5NeZAw>`)r.8/@OTm:4s.JrG' );
define( 'LOGGED_IN_KEY',    ' ]T1fXjO:jIV@eK/CR5BbXlnqxl*vIzx&G;TX5Xxj {b8h*e(ksP8h$@xjf+);ip' );
define( 'NONCE_KEY',        'vtlqu|uXtNVJYKtaBg80B/Et`^iYF5sJMwtPnPep|PzNOOV=pHZE.:@3}Or`zr6_' );
define( 'AUTH_SALT',        'F.2Q.1lxw cj5&nh<!} P&Fo#~7`!*+`?F7Er19nirTx^f`_h}+5VdHZdWANy;[b' );
define( 'SECURE_AUTH_SALT', '<Q>K,g=28XF1~Y/QmMCY0V!bc?%e[nUhBS+gHM] o<3Q&MS[R(m<[8Bs`/BfSq-f' );
define( 'LOGGED_IN_SALT',   'W*7qa&|;:@%Jf7:3ud|HHy[]ueT^D5:,j^ANGsxFLM]Izt9J7@0Dy0*-6Ksv&4jO' );
define( 'NONCE_SALT',       'Bw{[0jD[/N>^cu1OEP:iDE1WY`hi&<uEn0I7By5<(OtOam[{O6_e[@KDHv(a0FU%' );
/**#@-*/
/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'blog_';
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
/* Isto é tudo, pode parar de editar! :) */
/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
