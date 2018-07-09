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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_bmf2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'NBvv-&h9Nm)U66cY:Fyb]ct}yGEN:bkq5or=6g4JLq>GOB3{p2luVQpMf7KpY39M');
define('SECURE_AUTH_KEY',  'VAdL*G)0FTCB4>e=k&Z0nwL#;m`V_nu`XWoaM)AE:* G/+w-/Y>|1-NX,Evjl}54');
define('LOGGED_IN_KEY',    'e9fO=h_V:m*i~*CV/6k6D#G;-p;hki~]owoqO;asJ$!mX#VlAX9&V)hU-VK1Jy:w');
define('NONCE_KEY',        'X-ZDq*sXP7E|)vzy]JMM0giE9R0UraMm~uX8ze$bj>+z*^UC,EJ|_wNXza41UVo9');
define('AUTH_SALT',        'w43.$q~}k>YlAsZEu[v-*-sOV[f%rL/2m<3vQ9JM1$9Yd$/krWV)A/aPxIgTkvcf');
define('SECURE_AUTH_SALT', 'Ztj3p/xS?7VXs4qY>L*15ZT1+S^[>&xX6-(Wh!36El^:~/ZG<H~V^akTx.4=lri.');
define('LOGGED_IN_SALT',   't;CiI^`m[[}(MK`3U3SJYF]{M^=n.FJ4NX?3-J&Wz_qvqgWN@|+&tC&!fuW(_,j3');
define('NONCE_SALT',       'NmX~7-8=l+qda k]lZ.q|HhHIPin}2h{BM_ #29Gz:g_(kZRDq;]?^{8IdVft6B9');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpp2_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
define('FS_METHOD', 'direct');
/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
