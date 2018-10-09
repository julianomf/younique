<?php
//remove wordpress authentication
remove_filter('authenticate', 'wp_authenticate_username_password', 20);

add_filter('gettext', function($text){

    if(in_array($GLOBALS['pagenow'], array('ldcms-login.php'))){
        if('Nome de usuário ou e-mail:' == $text){
            return 'E-Mail';
        }
    }
    return $text;
}, 20);

add_filter('authenticate', function($user, $email, $password){
 
    //Check for empty fields
        if(empty($email) || empty ($password)){        
            //create new error object and add errors to it.
            $error = new WP_Error();
 
            if(empty($email)){ //No email
                $error->add('empty_username', __('<strong>ERRO</strong>: O Campo e-mail esta vazio.'));
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Invalid Email
                $error->add('invalid_username', __('<strong>ERRO</strong>: E-mail inválido.'));
            }
 
            if(empty($password)){ //No password
                $error->add('empty_password', __('<strong>ERRO</strong>: O Campo senha esta vazio.'));
            }
 
            return $error;
        }
 
        //Check if user exists in WordPress database
        $user = get_user_by('email', $email);
 
        //bad email
        if(!$user){
            $error = new WP_Error();
            $error->add('invalid', __('<strong>ERRO</strong>: O E-mail ou a senha inseridos são inválidos.'));
            return $error;
        }
        else{ //check password
            if(!wp_check_password($password, $user->user_pass, $user->ID)){ //bad password
                $error = new WP_Error();
                $error->add('invalid', __('<strong>ERRO</strong>: O E-mail ou a senha inseridos são inválidos.'));
                return $error;
            }else{
                return $user; //passed
            }
        }
}, 20, 3);

// Remove Really simple discovery link
remove_action('wp_head', 'rsd_link');
// Remove Windows Live Writer link
remove_action('wp_head', 'wlwmanifest_link');
// Remove the version number
remove_action('wp_head', 'wp_generator');

function wpt_remove_version() {  
   return '';  
}  
add_filter('the_generator', 'wpt_remove_version');

//Mudando o footer admin 
function change_footer_admin () {return 'Obrigado por utilizar o <a href="http://letteracms.logicadigital.com.br/">LetteraCMS</a>';}
add_filter('admin_footer_text', 'change_footer_admin', 9999);
function change_footer_version() {return '<a target="_blank" title="Lógica Digital." href="http://www.logicadigital.com.br"><img title="Lógica Digital." alt="Lógica Digital." src="/backend/images/img_assinatura_logica.jpg"></a>';}
add_filter( 'update_footer', 'change_footer_version', 9999);

// ***********************************************************************
// REMOVE O PAINEL DE DESTINO (TARGET) DO CADASTRO DE LINKS
// ***********************************************************************
function remove_link_target() {
  remove_meta_box( 'linktargetdiv' , 'link' , 'normal' );
}
add_action( 'admin_menu' , 'remove_link_target' );

// ***********************************************************************
// REMOVE PAINEL DE CONFIGURAÇÃO DE TRACKBACKS E CAMPOS CUSTOMIZADOS NO
// POST E NA PÁGINA
// ***********************************************************************
function remove_trackbacks() {
  remove_meta_box('trackbacksdiv','post','normal');
}
add_action('admin_menu','remove_trackbacks');

// remove campos customizados
function remove_postcustom() {
  remove_meta_box('postcustom','post','normal');
  remove_meta_box('postcustom','page','normal');
}
add_action('admin_menu','remove_postcustom');

//Habilitando mais botões no tinyMCE
function habilitar_mais_botoes($buttons) {
    $buttons[] = 'hr';
    $buttons[] = 'sub';
    $buttons[] = 'sup';
    $buttons[] = 'fontselect';
    $buttons[] = 'fontsizeselect';
    $buttons[] = 'cleanup';
    $buttons[] = 'cut';
    $buttons[] = 'copy';
    $buttons[] = 'paste';
    return $buttons;
}
add_filter("mce_buttons_3", "habilitar_mais_botoes");

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

add_action( 'admin_menu', 'ldcms_remover_submenu' );
function ldcms_remover_submenu() {
    remove_submenu_page( 'index.php', 'update-core.php' );
}

//Desabilita todas as notificações de plugins, temas e wordpress.
function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

add_filter( 'avatar_defaults', 'newgravatar' );

?>