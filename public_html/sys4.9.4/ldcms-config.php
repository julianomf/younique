<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação sys4.9.4/ldcms-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "sys4.9.4/ldcms-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_sys4.9.4/ldcms-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'prodyounique');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'prodyounique');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'O6TchuSU');

/** Nome do host do MySQL */
define('DB_HOST', '186.202.152.152');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.{&rI|ENc%j0[BB)};Kl5O4I^qH +5tw p~QOas<qKWnMjX<:fJtnr%mz37kUq(d');
define('SECURE_AUTH_KEY',  '=~/(m6p)A29OAL@b*zvSjMP/o@mRibOE23eo@Bt0uJPHjg;sRY6X+o. @~f33S)>');
define('LOGGED_IN_KEY',    't<bV,jg?9 T}(Hh+9Bzeb{q2^A=;7hd`MABG*RhGSM;-?o[;fv^#$T m8ua(K,=p');
define('NONCE_KEY',        'CB|K_[*6=zyarf!:$~]Z0O.%q:i:Je^HUcQC%AKD_8`=MHJNUDW6k+[*~92]P7u-');
define('AUTH_SALT',        'B..ScTR?yti|!Do<=Q2uRc>&DTgmRuNf;TVhm,1infP(P/O#| j~I<tU75S|kF5z');
define('SECURE_AUTH_SALT', '^^)NrkR:XP>:Uw[.c>JpOCu?LROFKQX<,YT-zZDqnu6OV5xGOk5bU)S.3yf6gQBD');
define('LOGGED_IN_SALT',   'kgdS/I-hdAGaTQK24!::;#f(>^&~VSz.}zHpZYuYI.#O7;<nDR2eV)!Iy/Qd8l|$');
define('NONCE_SALT',       'T3XIxub<oHyAU0Py>gEgX=TAza%QJE?PZ:HZlnleVY 7g<(y7s];DL)/j|R?!^!O');

/**#@-*/

//Colocando a pasta padrão para subir imagens.
define('UPLOADS', 'arquivos');

//Desabilitando o EDITOR
define('DISALLOW_FILE_EDIT', true);

// limita a quantidade de revisões de texto para 3
define('WP_POST_REVISIONS',3);

// salva o texto a cada 3 minutos
define('AUTOSAVE_INTERVAL', 160); // in seconds, don't go nuts

// remove da lixeira após 7 dias
define('EMPTY_TRASH_DAYS', 7); // disable trash

// define o endereço do site para aprimorar performance
define('WP_HOME', 'http://youniqueimobiliaria.com.br'); // no trailing slash
define('WP_SITEURL', 'http://youniqueimobiliaria.com.br');  // no trailing slash

// aumenta a memória destinada ao sistema
define('WP_MEMORY_LIMIT', '128M');

//Define o dominio como cookie
define("COOKIE_DOMAIN", "youniqueimobiliaria.com.br");

//Desabilita o update automático.
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'l3773r4_';

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

// forces the filesystem method: "direct", "ssh", "ftpext", or "ftpsockets"
define('FS_METHOD', 'direct');
// absolute path to root installation directory
define('FTP_BASE', '/var/www/cms/dev.youniqueimobiliaria.com.br/');
// absolute path to "ldcms-conteudo" directory
define('FTP_CONTENT_DIR', '/var/www/cms/dev.youniqueimobiliaria.com.br/ldcms-conteudo/');
// absolute path to "wp-plugins" directory
define('FTP_PLUGIN_DIR ', '/var/www/cms/dev.youniqueimobiliaria.com.br/ldcms-conteudo/plugins/');
// either your FTP or SSH username
define('FTP_USER', 'juliog');
// password for FTP_USER username
define('FTP_PASS', '');

// hostname:port combo for your SSH/FTP server
define('FTP_HOST', '192.168.0.53:22');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
