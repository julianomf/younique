<?php
/**
 * WordPress core upgrade functionality.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * @since 2.7.0
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
// 2.0
'backend/import-b2.php',
'backend/import-blogger.php',
'backend/import-greymatter.php',
'backend/import-livejournal.php',
'backend/import-mt.php',
'backend/import-rss.php',
'backend/import-textpattern.php',
'backend/quicktags.js',
'wp-images/fade-butt.png',
'wp-images/get-firefox.png',
'wp-images/header-shadow.png',
'wp-images/smilies',
'wp-images/wp-small.png',
'wp-images/wpminilogo.png',
'wp.php',
// 2.0.8
'ldcms-includes/js/tinymce/plugins/inlinepopups/readme.txt',
// 2.1
'backend/edit-form-ajax-cat.php',
'backend/execute-pings.php',
'backend/inline-uploading.php',
'backend/link-categories.php',
'backend/list-manipulation.js',
'backend/list-manipulation.php',
'ldcms-includes/comment-functions.php',
'ldcms-includes/feed-functions.php',
'ldcms-includes/functions-compat.php',
'ldcms-includes/functions-formatting.php',
'ldcms-includes/functions-post.php',
'ldcms-includes/js/dbx-key.js',
'ldcms-includes/js/tinymce/plugins/autosave/langs/cs.js',
'ldcms-includes/js/tinymce/plugins/autosave/langs/sv.js',
'ldcms-includes/links.php',
'ldcms-includes/pluggable-functions.php',
'ldcms-includes/template-functions-author.php',
'ldcms-includes/template-functions-category.php',
'ldcms-includes/template-functions-general.php',
'ldcms-includes/template-functions-links.php',
'ldcms-includes/template-functions-post.php',
'ldcms-includes/wp-l10n.php',
// 2.2
'backend/cat-js.php',
'backend/import/b2.php',
'ldcms-includes/js/autosave-js.php',
'ldcms-includes/js/list-manipulation-js.php',
'ldcms-includes/js/wp-ajax-js.php',
// 2.3
'backend/admin-db.php',
'backend/cat.js',
'backend/categories.js',
'backend/custom-fields.js',
'backend/dbx-admin-key.js',
'backend/edit-comments.js',
'backend/install-rtl.css',
'backend/install.css',
'backend/upgrade-schema.php',
'backend/upload-functions.php',
'backend/upload-rtl.css',
'backend/upload.css',
'backend/upload.js',
'backend/users.js',
'backend/widgets-rtl.css',
'backend/widgets.css',
'backend/xfn.js',
'ldcms-includes/js/tinymce/license.html',
// 2.5
'backend/css/upload.css',
'backend/images/box-bg-left.gif',
'backend/images/box-bg-right.gif',
'backend/images/box-bg.gif',
'backend/images/box-butt-left.gif',
'backend/images/box-butt-right.gif',
'backend/images/box-butt.gif',
'backend/images/box-head-left.gif',
'backend/images/box-head-right.gif',
'backend/images/box-head.gif',
'backend/images/heading-bg.gif',
'backend/images/login-bkg-bottom.gif',
'backend/images/login-bkg-tile.gif',
'backend/images/notice.gif',
'backend/images/toggle.gif',
'backend/includes/upload.php',
'backend/js/dbx-admin-key.js',
'backend/js/link-cat.js',
'backend/profile-update.php',
'backend/templates.php',
'ldcms-includes/images/wlw/WpComments.png',
'ldcms-includes/images/wlw/WpIcon.png',
'ldcms-includes/images/wlw/WpWatermark.png',
'ldcms-includes/js/dbx.js',
'ldcms-includes/js/fat.js',
'ldcms-includes/js/list-manipulation.js',
'ldcms-includes/js/tinymce/langs/en.js',
'ldcms-includes/js/tinymce/plugins/autosave/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/autosave/langs',
'ldcms-includes/js/tinymce/plugins/directionality/images',
'ldcms-includes/js/tinymce/plugins/directionality/langs',
'ldcms-includes/js/tinymce/plugins/inlinepopups/css',
'ldcms-includes/js/tinymce/plugins/inlinepopups/images',
'ldcms-includes/js/tinymce/plugins/inlinepopups/jscripts',
'ldcms-includes/js/tinymce/plugins/paste/images',
'ldcms-includes/js/tinymce/plugins/paste/jscripts',
'ldcms-includes/js/tinymce/plugins/paste/langs',
'ldcms-includes/js/tinymce/plugins/spellchecker/classes/HttpClient.class.php',
'ldcms-includes/js/tinymce/plugins/spellchecker/classes/TinyGoogleSpell.class.php',
'ldcms-includes/js/tinymce/plugins/spellchecker/classes/TinyPspell.class.php',
'ldcms-includes/js/tinymce/plugins/spellchecker/classes/TinyPspellShell.class.php',
'ldcms-includes/js/tinymce/plugins/spellchecker/css/spellchecker.css',
'ldcms-includes/js/tinymce/plugins/spellchecker/images',
'ldcms-includes/js/tinymce/plugins/spellchecker/langs',
'ldcms-includes/js/tinymce/plugins/spellchecker/tinyspell.php',
'ldcms-includes/js/tinymce/plugins/wordpress/images',
'ldcms-includes/js/tinymce/plugins/wordpress/langs',
'ldcms-includes/js/tinymce/plugins/wordpress/wordpress.css',
'ldcms-includes/js/tinymce/plugins/wphelp',
'ldcms-includes/js/tinymce/themes/advanced/css',
'ldcms-includes/js/tinymce/themes/advanced/images',
'ldcms-includes/js/tinymce/themes/advanced/jscripts',
'ldcms-includes/js/tinymce/themes/advanced/langs',
// 2.5.1
'ldcms-includes/js/tinymce/tiny_mce_gzip.php',
// 2.6
'backend/bookmarklet.php',
'ldcms-includes/js/jquery/jquery.dimensions.min.js',
'ldcms-includes/js/tinymce/plugins/wordpress/popups.css',
'ldcms-includes/js/wp-ajax.js',
// 2.7
'backend/css/press-this-ie-rtl.css',
'backend/css/press-this-ie.css',
'backend/css/upload-rtl.css',
'backend/edit-form.php',
'backend/images/comment-pill.gif',
'backend/images/comment-stalk-classic.gif',
'backend/images/comment-stalk-fresh.gif',
'backend/images/comment-stalk-rtl.gif',
'backend/images/del.png',
'backend/images/gear.png',
'backend/images/media-button-gallery.gif',
'backend/images/media-buttons.gif',
'backend/images/postbox-bg.gif',
'backend/images/tab.png',
'backend/images/tail.gif',
'backend/js/forms.js',
'backend/js/upload.js',
'backend/link-import.php',
'ldcms-includes/images/audio.png',
'ldcms-includes/images/css.png',
'ldcms-includes/images/default.png',
'ldcms-includes/images/doc.png',
'ldcms-includes/images/exe.png',
'ldcms-includes/images/html.png',
'ldcms-includes/images/js.png',
'ldcms-includes/images/pdf.png',
'ldcms-includes/images/swf.png',
'ldcms-includes/images/tar.png',
'ldcms-includes/images/text.png',
'ldcms-includes/images/video.png',
'ldcms-includes/images/zip.png',
'ldcms-includes/js/tinymce/tiny_mce_config.php',
'ldcms-includes/js/tinymce/tiny_mce_ext.js',
// 2.8
'backend/js/users.js',
'ldcms-includes/js/swfupload/plugins/swfupload.documentready.js',
'ldcms-includes/js/swfupload/plugins/swfupload.graceful_degradation.js',
'ldcms-includes/js/swfupload/swfupload_f9.swf',
'ldcms-includes/js/tinymce/plugins/autosave',
'ldcms-includes/js/tinymce/plugins/paste/css',
'ldcms-includes/js/tinymce/utils/mclayer.js',
'ldcms-includes/js/tinymce/wordpress.css',
// 2.8.5
'backend/import/btt.php',
'backend/import/jkw.php',
// 2.9
'backend/js/page.dev.js',
'backend/js/page.js',
'backend/js/set-post-thumbnail-handler.dev.js',
'backend/js/set-post-thumbnail-handler.js',
'backend/js/slug.dev.js',
'backend/js/slug.js',
'ldcms-includes/gettext.php',
'ldcms-includes/js/tinymce/plugins/wordpress/js',
'ldcms-includes/streams.php',
// MU
'README.txt',
'htaccess.dist',
'index-install.php',
'backend/css/mu-rtl.css',
'backend/css/mu.css',
'backend/images/site-admin.png',
'backend/includes/mu.php',
'backend/wpmu-admin.php',
'backend/wpmu-blogs.php',
'backend/wpmu-edit.php',
'backend/wpmu-options.php',
'backend/wpmu-themes.php',
'backend/wpmu-upgrade-site.php',
'backend/wpmu-users.php',
'ldcms-includes/images/wordpress-mu.png',
'ldcms-includes/wpmu-default-filters.php',
'ldcms-includes/wpmu-functions.php',
'wpmu-settings.php',
// 3.0
'backend/categories.php',
'backend/edit-category-form.php',
'backend/edit-page-form.php',
'backend/edit-pages.php',
'backend/images/admin-header-footer.png',
'backend/images/browse-happy.gif',
'backend/images/ico-add.png',
'backend/images/ico-close.png',
'backend/images/ico-edit.png',
'backend/images/ico-viewpage.png',
'backend/images/fav-top.png',
'backend/images/screen-options-left.gif',
'backend/images/wp-logo-vs.gif',
'backend/images/wp-logo.gif',
'backend/import',
'backend/js/wp-gears.dev.js',
'backend/js/wp-gears.js',
'backend/options-misc.php',
'backend/page-new.php',
'backend/page.php',
'backend/rtl.css',
'backend/rtl.dev.css',
'backend/update-links.php',
'backend/backend.css',
'backend/backend.dev.css',
'ldcms-includes/js/codepress',
'ldcms-includes/js/codepress/engines/khtml.js',
'ldcms-includes/js/codepress/engines/older.js',
'ldcms-includes/js/jquery/autocomplete.dev.js',
'ldcms-includes/js/jquery/autocomplete.js',
'ldcms-includes/js/jquery/interface.js',
'ldcms-includes/js/scriptaculous/prototype.js',
'ldcms-includes/js/tinymce/wp-tinymce.js',
// 3.1
'backend/edit-attachment-rows.php',
'backend/edit-link-categories.php',
'backend/edit-link-category-form.php',
'backend/edit-post-rows.php',
'backend/images/button-grad-active-vs.png',
'backend/images/button-grad-vs.png',
'backend/images/fav-arrow-vs-rtl.gif',
'backend/images/fav-arrow-vs.gif',
'backend/images/fav-top-vs.gif',
'backend/images/list-vs.png',
'backend/images/screen-options-right-up.gif',
'backend/images/screen-options-right.gif',
'backend/images/visit-site-button-grad-vs.gif',
'backend/images/visit-site-button-grad.gif',
'backend/link-category.php',
'backend/sidebar.php',
'ldcms-includes/classes.php',
'ldcms-includes/js/tinymce/blank.htm',
'ldcms-includes/js/tinymce/plugins/media/css/content.css',
'ldcms-includes/js/tinymce/plugins/media/img',
'ldcms-includes/js/tinymce/plugins/safari',
// 3.2
'backend/images/logo-login.gif',
'backend/images/star.gif',
'backend/js/list-table.dev.js',
'backend/js/list-table.js',
'ldcms-includes/default-embeds.php',
'ldcms-includes/js/tinymce/plugins/wordpress/img/help.gif',
'ldcms-includes/js/tinymce/plugins/wordpress/img/more.gif',
'ldcms-includes/js/tinymce/plugins/wordpress/img/toolbars.gif',
'ldcms-includes/js/tinymce/themes/advanced/img/fm.gif',
'ldcms-includes/js/tinymce/themes/advanced/img/sflogo.png',
// 3.3
'backend/css/colors-classic-rtl.css',
'backend/css/colors-classic-rtl.dev.css',
'backend/css/colors-fresh-rtl.css',
'backend/css/colors-fresh-rtl.dev.css',
'backend/css/dashboard-rtl.dev.css',
'backend/css/dashboard.dev.css',
'backend/css/global-rtl.css',
'backend/css/global-rtl.dev.css',
'backend/css/global.css',
'backend/css/global.dev.css',
'backend/css/install-rtl.dev.css',
'backend/css/login-rtl.dev.css',
'backend/css/login.dev.css',
'backend/css/ms.css',
'backend/css/ms.dev.css',
'backend/css/nav-menu-rtl.css',
'backend/css/nav-menu-rtl.dev.css',
'backend/css/nav-menu.css',
'backend/css/nav-menu.dev.css',
'backend/css/plugin-install-rtl.css',
'backend/css/plugin-install-rtl.dev.css',
'backend/css/plugin-install.css',
'backend/css/plugin-install.dev.css',
'backend/css/press-this-rtl.dev.css',
'backend/css/press-this.dev.css',
'backend/css/theme-editor-rtl.css',
'backend/css/theme-editor-rtl.dev.css',
'backend/css/theme-editor.css',
'backend/css/theme-editor.dev.css',
'backend/css/theme-install-rtl.css',
'backend/css/theme-install-rtl.dev.css',
'backend/css/theme-install.css',
'backend/css/theme-install.dev.css',
'backend/css/widgets-rtl.dev.css',
'backend/css/widgets.dev.css',
'backend/includes/internal-linking.php',
'ldcms-includes/images/admin-bar-sprite-rtl.png',
'ldcms-includes/js/jquery/ui.button.js',
'ldcms-includes/js/jquery/ui.core.js',
'ldcms-includes/js/jquery/ui.dialog.js',
'ldcms-includes/js/jquery/ui.draggable.js',
'ldcms-includes/js/jquery/ui.droppable.js',
'ldcms-includes/js/jquery/ui.mouse.js',
'ldcms-includes/js/jquery/ui.position.js',
'ldcms-includes/js/jquery/ui.resizable.js',
'ldcms-includes/js/jquery/ui.selectable.js',
'ldcms-includes/js/jquery/ui.sortable.js',
'ldcms-includes/js/jquery/ui.tabs.js',
'ldcms-includes/js/jquery/ui.widget.js',
'ldcms-includes/js/l10n.dev.js',
'ldcms-includes/js/l10n.js',
'ldcms-includes/js/tinymce/plugins/wplink/css',
'ldcms-includes/js/tinymce/plugins/wplink/img',
'ldcms-includes/js/tinymce/plugins/wplink/js',
'ldcms-includes/js/tinymce/themes/advanced/img/wpicons.png',
'ldcms-includes/js/tinymce/themes/advanced/skins/wp_theme/img/butt2.png',
'ldcms-includes/js/tinymce/themes/advanced/skins/wp_theme/img/button_bg.png',
'ldcms-includes/js/tinymce/themes/advanced/skins/wp_theme/img/down_arrow.gif',
'ldcms-includes/js/tinymce/themes/advanced/skins/wp_theme/img/fade-butt.png',
'ldcms-includes/js/tinymce/themes/advanced/skins/wp_theme/img/separator.gif',
// Don't delete, yet: 'wp-rss.php',
// Don't delete, yet: 'wp-rdf.php',
// Don't delete, yet: 'wp-rss2.php',
// Don't delete, yet: 'wp-commentsrss2.php',
// Don't delete, yet: 'wp-atom.php',
// Don't delete, yet: 'wp-feed.php',
// 3.4
'backend/images/gray-star.png',
'backend/images/logo-login.png',
'backend/images/star.png',
'backend/index-extra.php',
'backend/network/index-extra.php',
'backend/user/index-extra.php',
'backend/images/screenshots/admin-flyouts.png',
'backend/images/screenshots/coediting.png',
'backend/images/screenshots/drag-and-drop.png',
'backend/images/screenshots/help-screen.png',
'backend/images/screenshots/media-icon.png',
'backend/images/screenshots/new-feature-pointer.png',
'backend/images/screenshots/welcome-screen.png',
'ldcms-includes/css/editor-buttons.css',
'ldcms-includes/css/editor-buttons.dev.css',
'ldcms-includes/js/tinymce/plugins/paste/blank.htm',
'ldcms-includes/js/tinymce/plugins/wordpress/css',
'ldcms-includes/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
'ldcms-includes/js/tinymce/plugins/wordpress/img/embedded.png',
'ldcms-includes/js/tinymce/plugins/wordpress/img/more_bug.gif',
'ldcms-includes/js/tinymce/plugins/wordpress/img/page_bug.gif',
'ldcms-includes/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
'ldcms-includes/js/tinymce/plugins/wpeditimage/css/editimage-rtl.css',
'ldcms-includes/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
'ldcms-includes/js/tinymce/plugins/wpfullscreen/editor_plugin.dev.js',
'ldcms-includes/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
'ldcms-includes/js/tinymce/plugins/wpgallery/img/gallery.png',
'ldcms-includes/js/tinymce/plugins/wplink/editor_plugin.dev.js',
// Don't delete, yet: 'wp-pass.php',
// Don't delete, yet: 'wp-register.php',
// 3.5
'backend/gears-manifest.php',
'backend/includes/manifest.php',
'backend/images/archive-link.png',
'backend/images/blue-grad.png',
'backend/images/button-grad-active.png',
'backend/images/button-grad.png',
'backend/images/ed-bg-vs.gif',
'backend/images/ed-bg.gif',
'backend/images/fade-butt.png',
'backend/images/fav-arrow-rtl.gif',
'backend/images/fav-arrow.gif',
'backend/images/fav-vs.png',
'backend/images/fav.png',
'backend/images/gray-grad.png',
'backend/images/loading-publish.gif',
'backend/images/logo-ghost.png',
'backend/images/logo.gif',
'backend/images/menu-arrow-frame-rtl.png',
'backend/images/menu-arrow-frame.png',
'backend/images/menu-arrows.gif',
'backend/images/menu-bits-rtl-vs.gif',
'backend/images/menu-bits-rtl.gif',
'backend/images/menu-bits-vs.gif',
'backend/images/menu-bits.gif',
'backend/images/menu-dark-rtl-vs.gif',
'backend/images/menu-dark-rtl.gif',
'backend/images/menu-dark-vs.gif',
'backend/images/menu-dark.gif',
'backend/images/required.gif',
'backend/images/screen-options-toggle-vs.gif',
'backend/images/screen-options-toggle.gif',
'backend/images/toggle-arrow-rtl.gif',
'backend/images/toggle-arrow.gif',
'backend/images/upload-classic.png',
'backend/images/upload-fresh.png',
'backend/images/white-grad-active.png',
'backend/images/white-grad.png',
'backend/images/widgets-arrow-vs.gif',
'backend/images/widgets-arrow.gif',
'backend/images/wpspin_dark.gif',
'ldcms-includes/images/upload.png',
'ldcms-includes/js/prototype.js',
'ldcms-includes/js/scriptaculous',
'backend/css/backend-rtl.dev.css',
'backend/css/backend.dev.css',
'backend/css/media-rtl.dev.css',
'backend/css/media.dev.css',
'backend/css/colors-classic.dev.css',
'backend/css/customize-controls-rtl.dev.css',
'backend/css/customize-controls.dev.css',
'backend/css/ie-rtl.dev.css',
'backend/css/ie.dev.css',
'backend/css/install.dev.css',
'backend/css/colors-fresh.dev.css',
'ldcms-includes/js/customize-base.dev.js',
'ldcms-includes/js/json2.dev.js',
'ldcms-includes/js/comment-reply.dev.js',
'ldcms-includes/js/customize-preview.dev.js',
'ldcms-includes/js/wplink.dev.js',
'ldcms-includes/js/tw-sack.dev.js',
'ldcms-includes/js/wp-list-revisions.dev.js',
'ldcms-includes/js/autosave.dev.js',
'ldcms-includes/js/admin-bar.dev.js',
'ldcms-includes/js/quicktags.dev.js',
'ldcms-includes/js/wp-ajax-response.dev.js',
'ldcms-includes/js/wp-pointer.dev.js',
'ldcms-includes/js/hoverIntent.dev.js',
'ldcms-includes/js/colorpicker.dev.js',
'ldcms-includes/js/wp-lists.dev.js',
'ldcms-includes/js/customize-loader.dev.js',
'ldcms-includes/js/jquery/jquery.table-hotkeys.dev.js',
'ldcms-includes/js/jquery/jquery.color.dev.js',
'ldcms-includes/js/jquery/jquery.color.js',
'ldcms-includes/js/jquery/jquery.hotkeys.dev.js',
'ldcms-includes/js/jquery/jquery.form.dev.js',
'ldcms-includes/js/jquery/suggest.dev.js',
'backend/js/xfn.dev.js',
'backend/js/set-post-thumbnail.dev.js',
'backend/js/comment.dev.js',
'backend/js/theme.dev.js',
'backend/js/cat.dev.js',
'backend/js/password-strength-meter.dev.js',
'backend/js/user-profile.dev.js',
'backend/js/theme-preview.dev.js',
'backend/js/post.dev.js',
'backend/js/media-upload.dev.js',
'backend/js/word-count.dev.js',
'backend/js/plugin-install.dev.js',
'backend/js/edit-comments.dev.js',
'backend/js/media-gallery.dev.js',
'backend/js/custom-fields.dev.js',
'backend/js/custom-background.dev.js',
'backend/js/common.dev.js',
'backend/js/inline-edit-tax.dev.js',
'backend/js/gallery.dev.js',
'backend/js/utils.dev.js',
'backend/js/widgets.dev.js',
'backend/js/wp-fullscreen.dev.js',
'backend/js/nav-menu.dev.js',
'backend/js/dashboard.dev.js',
'backend/js/link.dev.js',
'backend/js/user-suggest.dev.js',
'backend/js/postbox.dev.js',
'backend/js/tags.dev.js',
'backend/js/image-edit.dev.js',
'backend/js/media.dev.js',
'backend/js/customize-controls.dev.js',
'backend/js/inline-edit-post.dev.js',
'backend/js/categories.dev.js',
'backend/js/editor.dev.js',
'ldcms-includes/js/tinymce/plugins/wpeditimage/js/editimage.dev.js',
'ldcms-includes/js/tinymce/plugins/wpdialogs/js/popup.dev.js',
'ldcms-includes/js/tinymce/plugins/wpdialogs/js/wpdialog.dev.js',
'ldcms-includes/js/plupload/handlers.dev.js',
'ldcms-includes/js/plupload/wp-plupload.dev.js',
'ldcms-includes/js/swfupload/handlers.dev.js',
'ldcms-includes/js/jcrop/jquery.Jcrop.dev.js',
'ldcms-includes/js/jcrop/jquery.Jcrop.js',
'ldcms-includes/js/jcrop/jquery.Jcrop.css',
'ldcms-includes/js/imgareaselect/jquery.imgareaselect.dev.js',
'ldcms-includes/css/wp-pointer.dev.css',
'ldcms-includes/css/editor.dev.css',
'ldcms-includes/css/jquery-ui-dialog.dev.css',
'ldcms-includes/css/admin-bar-rtl.dev.css',
'ldcms-includes/css/admin-bar.dev.css',
'ldcms-includes/js/jquery/ui/jquery.effects.clip.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.scale.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.blind.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.core.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.shake.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.fade.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.explode.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.slide.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.drop.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.highlight.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.bounce.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.pulsate.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.transfer.min.js',
'ldcms-includes/js/jquery/ui/jquery.effects.fold.min.js',
'backend/images/screenshots/captions-1.png',
'backend/images/screenshots/captions-2.png',
'backend/images/screenshots/flex-header-1.png',
'backend/images/screenshots/flex-header-2.png',
'backend/images/screenshots/flex-header-3.png',
'backend/images/screenshots/flex-header-media-library.png',
'backend/images/screenshots/theme-customizer.png',
'backend/images/screenshots/twitter-embed-1.png',
'backend/images/screenshots/twitter-embed-2.png',
'backend/js/utils.js',
'backend/options-privacy.php',
'wp-app.php',
'ldcms-includes/class-wp-atom-server.php',
'ldcms-includes/js/tinymce/themes/advanced/skins/wp_theme/ui.css',
// 3.5.2
'ldcms-includes/js/swfupload/swfupload-all.js',
// 3.6
'backend/js/revisions-js.php',
'backend/images/screenshots',
'backend/js/categories.js',
'backend/js/categories.min.js',
'backend/js/custom-fields.js',
'backend/js/custom-fields.min.js',
// 3.7
'backend/js/cat.js',
'backend/js/cat.min.js',
'ldcms-includes/js/tinymce/plugins/wpeditimage/js/editimage.min.js',
// 3.8
'ldcms-includes/js/tinymce/themes/advanced/skins/wp_theme/img/page_bug.gif',
'ldcms-includes/js/tinymce/themes/advanced/skins/wp_theme/img/more_bug.gif',
'ldcms-includes/js/thickbox/tb-close-2x.png',
'ldcms-includes/js/thickbox/tb-close.png',
'ldcms-includes/images/wpmini-blue-2x.png',
'ldcms-includes/images/wpmini-blue.png',
'backend/css/colors-fresh.css',
'backend/css/colors-classic.css',
'backend/css/colors-fresh.min.css',
'backend/css/colors-classic.min.css',
'backend/js/about.min.js',
'backend/js/about.js',
'backend/images/arrows-dark-vs-2x.png',
'backend/images/wp-logo-vs.png',
'backend/images/arrows-dark-vs.png',
'backend/images/wp-logo.png',
'backend/images/arrows-pr.png',
'backend/images/arrows-dark.png',
'backend/images/press-this.png',
'backend/images/press-this-2x.png',
'backend/images/arrows-vs-2x.png',
'backend/images/welcome-icons.png',
'backend/images/wp-logo-2x.png',
'backend/images/stars-rtl-2x.png',
'backend/images/arrows-dark-2x.png',
'backend/images/arrows-pr-2x.png',
'backend/images/menu-shadow-rtl.png',
'backend/images/arrows-vs.png',
'backend/images/about-search-2x.png',
'backend/images/bubble_bg-rtl-2x.gif',
'backend/images/wp-badge-2x.png',
'backend/images/wordpress-logo-2x.png',
'backend/images/bubble_bg-rtl.gif',
'backend/images/wp-badge.png',
'backend/images/menu-shadow.png',
'backend/images/about-globe-2x.png',
'backend/images/welcome-icons-2x.png',
'backend/images/stars-rtl.png',
'backend/images/wp-logo-vs-2x.png',
'backend/images/about-updates-2x.png',
// 3.9
'backend/css/colors.css',
'backend/css/colors.min.css',
'backend/css/colors-rtl.css',
'backend/css/colors-rtl.min.css',
// Following files added back in 4.5 see #36083
// 'backend/css/media-rtl.min.css',
// 'backend/css/media.min.css',
// 'backend/css/farbtastic-rtl.min.css',
'backend/images/lock-2x.png',
'backend/images/lock.png',
'backend/js/theme-preview.js',
'backend/js/theme-install.min.js',
'backend/js/theme-install.js',
'backend/js/theme-preview.min.js',
'ldcms-includes/js/plupload/plupload.html4.js',
'ldcms-includes/js/plupload/plupload.html5.js',
'ldcms-includes/js/plupload/changelog.txt',
'ldcms-includes/js/plupload/plupload.silverlight.js',
'ldcms-includes/js/plupload/plupload.flash.js',
// Added back in 4.9 [41328], see #41755
// 'ldcms-includes/js/plupload/plupload.js',
'ldcms-includes/js/tinymce/plugins/spellchecker',
'ldcms-includes/js/tinymce/plugins/inlinepopups',
'ldcms-includes/js/tinymce/plugins/media/js',
'ldcms-includes/js/tinymce/plugins/media/css',
'ldcms-includes/js/tinymce/plugins/wordpress/img',
'ldcms-includes/js/tinymce/plugins/wpdialogs/js',
'ldcms-includes/js/tinymce/plugins/wpeditimage/img',
'ldcms-includes/js/tinymce/plugins/wpeditimage/js',
'ldcms-includes/js/tinymce/plugins/wpeditimage/css',
'ldcms-includes/js/tinymce/plugins/wpgallery/img',
'ldcms-includes/js/tinymce/plugins/wpfullscreen/css',
'ldcms-includes/js/tinymce/plugins/paste/js',
'ldcms-includes/js/tinymce/themes/advanced',
'ldcms-includes/js/tinymce/tiny_mce.js',
'ldcms-includes/js/tinymce/mark_loaded_src.js',
'ldcms-includes/js/tinymce/wp-tinymce-schema.js',
'ldcms-includes/js/tinymce/plugins/media/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/media/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/media/media.htm',
'ldcms-includes/js/tinymce/plugins/wpview/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/wpview/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/directionality/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/directionality/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/wordpress/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/wordpress/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/wpdialogs/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/wpdialogs/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/wpeditimage/editimage.html',
'ldcms-includes/js/tinymce/plugins/wpeditimage/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/wpeditimage/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/fullscreen/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/fullscreen/fullscreen.htm',
'ldcms-includes/js/tinymce/plugins/fullscreen/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/wplink/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/wplink/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/wpgallery/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/wpgallery/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/tabfocus/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/tabfocus/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/wpfullscreen/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/wpfullscreen/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/paste/editor_plugin.js',
'ldcms-includes/js/tinymce/plugins/paste/pasteword.htm',
'ldcms-includes/js/tinymce/plugins/paste/editor_plugin_src.js',
'ldcms-includes/js/tinymce/plugins/paste/pastetext.htm',
'ldcms-includes/js/tinymce/langs/wp-langs.php',
// 4.1
'ldcms-includes/js/jquery/ui/jquery.ui.accordion.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.autocomplete.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.button.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.core.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.datepicker.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.dialog.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.draggable.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.droppable.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-blind.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-bounce.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-clip.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-drop.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-explode.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-fade.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-fold.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-highlight.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-pulsate.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-scale.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-shake.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-slide.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect-transfer.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.effect.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.menu.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.mouse.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.position.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.progressbar.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.resizable.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.selectable.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.slider.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.sortable.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.spinner.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.tabs.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.tooltip.min.js',
'ldcms-includes/js/jquery/ui/jquery.ui.widget.min.js',
'ldcms-includes/js/tinymce/skins/wordpress/images/dashicon-no-alt.png',
// 4.3
'backend/js/wp-fullscreen.js',
'backend/js/wp-fullscreen.min.js',
'ldcms-includes/js/tinymce/wp-mce-help.php',
'ldcms-includes/js/tinymce/plugins/wpfullscreen',
// 4.5
'ldcms-includes/theme-compat/comments-popup.php',
// 4.6
'backend/includes/class-wp-automatic-upgrader.php', // Wrong file name, see #37628.
// 4.8
'ldcms-includes/js/tinymce/plugins/wpembed',
'ldcms-includes/js/tinymce/plugins/media/moxieplayer.swf',
'ldcms-includes/js/tinymce/skins/lightgray/fonts/readme.md',
'ldcms-includes/js/tinymce/skins/lightgray/fonts/tinymce-small.json',
'ldcms-includes/js/tinymce/skins/lightgray/fonts/tinymce.json',
'ldcms-includes/js/tinymce/skins/lightgray/skin.ie7.min.css',
// 4.9
'backend/css/press-this-editor-rtl.css',
'backend/css/press-this-editor-rtl.min.css',
'backend/css/press-this-editor.css',
'backend/css/press-this-editor.min.css',
'backend/css/press-this-rtl.css',
'backend/css/press-this-rtl.min.css',
'backend/css/press-this.css',
'backend/css/press-this.min.css',
'backend/includes/class-wp-press-this.php',
'backend/js/bookmarklet.js',
'backend/js/bookmarklet.min.js',
'backend/js/press-this.js',
'backend/js/press-this.min.js',
'ldcms-includes/js/mediaelement/background.png',
'ldcms-includes/js/mediaelement/bigplay.png',
'ldcms-includes/js/mediaelement/bigplay.svg',
'ldcms-includes/js/mediaelement/controls.png',
'ldcms-includes/js/mediaelement/controls.svg',
'ldcms-includes/js/mediaelement/flashmediaelement.swf',
'ldcms-includes/js/mediaelement/froogaloop.min.js',
'ldcms-includes/js/mediaelement/jumpforward.png',
'ldcms-includes/js/mediaelement/loading.gif',
'ldcms-includes/js/mediaelement/silverlightmediaelement.xap',
'ldcms-includes/js/mediaelement/skipback.png',
'ldcms-includes/js/plupload/plupload.flash.swf',
'ldcms-includes/js/plupload/plupload.full.min.js',
'ldcms-includes/js/plupload/plupload.silverlight.xap',
'ldcms-includes/js/swfupload/plugins',
'ldcms-includes/js/swfupload/swfupload.swf',
	// 4.9.2
	'ldcms-includes/js/mediaelement/lang',
	'ldcms-includes/js/mediaelement/lang/ca.js',
	'ldcms-includes/js/mediaelement/lang/cs.js',
	'ldcms-includes/js/mediaelement/lang/de.js',
	'ldcms-includes/js/mediaelement/lang/es.js',
	'ldcms-includes/js/mediaelement/lang/fa.js',
	'ldcms-includes/js/mediaelement/lang/fr.js',
	'ldcms-includes/js/mediaelement/lang/hr.js',
	'ldcms-includes/js/mediaelement/lang/hu.js',
	'ldcms-includes/js/mediaelement/lang/it.js',
	'ldcms-includes/js/mediaelement/lang/ja.js',
	'ldcms-includes/js/mediaelement/lang/ko.js',
	'ldcms-includes/js/mediaelement/lang/nl.js',
	'ldcms-includes/js/mediaelement/lang/pl.js',
	'ldcms-includes/js/mediaelement/lang/pt.js',
	'ldcms-includes/js/mediaelement/lang/ro.js',
	'ldcms-includes/js/mediaelement/lang/ru.js',
	'ldcms-includes/js/mediaelement/lang/sk.js',
	'ldcms-includes/js/mediaelement/lang/sv.js',
	'ldcms-includes/js/mediaelement/lang/uk.js',
	'ldcms-includes/js/mediaelement/lang/zh-cn.js',
	'ldcms-includes/js/mediaelement/lang/zh.js',
	'ldcms-includes/js/mediaelement/mediaelement-flash-audio-ogg.swf',
	'ldcms-includes/js/mediaelement/mediaelement-flash-audio.swf',
	'ldcms-includes/js/mediaelement/mediaelement-flash-video-hls.swf',
	'ldcms-includes/js/mediaelement/mediaelement-flash-video-mdash.swf',
	'ldcms-includes/js/mediaelement/mediaelement-flash-video.swf',
	'ldcms-includes/js/mediaelement/renderers/dailymotion.js',
	'ldcms-includes/js/mediaelement/renderers/dailymotion.min.js',
	'ldcms-includes/js/mediaelement/renderers/facebook.js',
	'ldcms-includes/js/mediaelement/renderers/facebook.min.js',
	'ldcms-includes/js/mediaelement/renderers/soundcloud.js',
	'ldcms-includes/js/mediaelement/renderers/soundcloud.min.js',
	'ldcms-includes/js/mediaelement/renderers/twitch.js',
	'ldcms-includes/js/mediaelement/renderers/twitch.min.js',
);

/**
 * Stores new files in ldcms-conteudo to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the WordPress Upgrade. These items will not be
 * re-installed in future upgrades, this behaviour is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to ldcms-conteudo) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @since 4.7.0 New themes were not automatically installed for 4.4-4.6 on
 *              upgrade. New themes are now installed again. To disable new
 *              themes from being installed on upgrade, explicitly define
 *              CORE_UPGRADE_SKIP_NEW_BUNDLED as false.
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
	'plugins/akismet/'        => '2.0',
	'themes/twentyten/'       => '3.0',
	'themes/twentyeleven/'    => '3.2',
	'themes/twentytwelve/'    => '3.5',
	'themes/twentythirteen/'  => '3.6',
	'themes/twentyfourteen/'  => '3.8',
	'themes/twentyfifteen/'   => '4.1',
	'themes/twentysixteen/'   => '4.4',
	'themes/twentyseventeen/' => '4.7',
);

/**
 * Upgrades the core of WordPress.
 *
 * This will create a .maintenance file at the base of the WordPress directory
 * to ensure that people can not access the web site, when the files are being
 * copied to their locations.
 *
 * The files in the `$_old_files` list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the `$_new_bundled_files` list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current WordPress base.
 *   3. Copy new WordPress directory over old WordPress files.
 *   4. Upgrade WordPress to new version.
 *     4.1. Copy all files/folders other than ldcms-conteudo
 *     4.2. Copy any language files to WP_LANG_DIR (which may differ from WP_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new WordPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new WordPress over the old fails, then the worse is that
 * the new WordPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @global WP_Filesystem_Base $wp_filesystem
 * @global array              $_old_files
 * @global array              $_new_bundled_files
 * @global wpdb               $wpdb
 * @global string             $wp_version
 * @global string             $required_php_version
 * @global string             $required_mysql_version
 *
 * @param string $from New release unzipped path.
 * @param string $to   Path to old WordPress installation.
 * @return WP_Error|null WP_Error on failure, null on success.
 */
function update_core($from, $to) {
	global $wp_filesystem, $_old_files, $_new_bundled_files, $wpdb;

	@set_time_limit( 300 );

	/**
	 * Filters feedback messages displayed during the core update process.
	 *
	 * The filter is first evaluated after the zip file for the latest version
	 * has been downloaded and unzipped. It is evaluated five more times during
	 * the process:
	 *
	 * 1. Before WordPress begins the core upgrade process.
	 * 2. Before Maintenance Mode is enabled.
	 * 3. Before WordPress begins copying over the necessary files.
	 * 4. Before Maintenance Mode is disabled.
	 * 5. Before the database is upgraded.
	 *
	 * @since 2.5.0
	 *
	 * @param string $feedback The core update feedback messages.
	 */
	apply_filters( 'update_feedback', __( 'Verifying the unpacked files&#8230;' ) );

	// Sanity check the unzipped distribution.
	$distro = '';
	$roots = array( '/wordpress/', '/wordpress-mu/' );
	foreach ( $roots as $root ) {
		if ( $wp_filesystem->exists( $from . $root . 'readme.html' ) && $wp_filesystem->exists( $from . $root . 'ldcms-includes/version.php' ) ) {
			$distro = $root;
			break;
		}
	}
	if ( ! $distro ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'insane_distro', __('The update could not be unpacked') );
	}


	/*
	 * Import $wp_version, $required_php_version, and $required_mysql_version from the new version.
	 * DO NOT globalise any variables imported from `version-current.php` in this function.
	 *
	 * BC Note: $wp_filesystem->wp_content_dir() returned unslashed pre-2.8
	 */
	$versions_file = trailingslashit( $wp_filesystem->wp_content_dir() ) . 'upgrade/version-current.php';
	if ( ! $wp_filesystem->copy( $from . $distro . 'ldcms-includes/version.php', $versions_file ) ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'ldcms-includes/version.php' );
	}

	$wp_filesystem->chmod( $versions_file, FS_CHMOD_FILE );
	require( WP_CONTENT_DIR . '/upgrade/version-current.php' );
	$wp_filesystem->delete( $versions_file );

	$php_version    = phpversion();
	$mysql_version  = $wpdb->db_version();
	$old_wp_version = $GLOBALS['wp_version']; // The version of WordPress we're updating from
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' )  ); // a dash in the version indicates a Development release
	$php_compat     = version_compare( $php_version, $required_php_version, '>=' );
	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
		$mysql_compat = true;
	else
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );

	if ( !$mysql_compat || !$php_compat )
		$wp_filesystem->delete($from, true);

	if ( !$mysql_compat && !$php_compat )
		return new WP_Error( 'php_mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.'), $wp_version, $required_php_version, $required_mysql_version, $php_version, $mysql_version ) );
	elseif ( !$php_compat )
		return new WP_Error( 'php_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher. You are running version %3$s.'), $wp_version, $required_php_version, $php_version ) );
	elseif ( !$mysql_compat )
		return new WP_Error( 'mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.'), $wp_version, $required_mysql_version, $mysql_version ) );

	/** This filter is documented in backend/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Preparing to install the latest version&#8230;' ) );

	// Don't copy ldcms-conteudo, we'll deal with that below
	// We also copy version.php last so failed updates report their old version
	$skip = array( 'ldcms-conteudo', 'ldcms-includes/version.php' );
	$check_is_writable = array();

	// Check to see which files don't really need updating - only available for 3.7 and higher
	if ( function_exists( 'get_core_checksums' ) ) {
		// Find the local version of the working directory
		$working_dir_local = WP_CONTENT_DIR . '/upgrade/' . basename( $from ) . $distro;

		$checksums = get_core_checksums( $wp_version, isset( $wp_local_package ) ? $wp_local_package : 'en_US' );
		if ( is_array( $checksums ) && isset( $checksums[ $wp_version ] ) )
			$checksums = $checksums[ $wp_version ]; // Compat code for 3.7-beta2
		if ( is_array( $checksums ) ) {
			foreach ( $checksums as $file => $checksum ) {
				if ( 'ldcms-conteudo' == substr( $file, 0, 10 ) )
					continue;
				if ( ! file_exists( ABSPATH . $file ) )
					continue;
				if ( ! file_exists( $working_dir_local . $file ) )
					continue;
				if ( '.' === dirname( $file ) && in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ) ) )
					continue;
				if ( md5_file( ABSPATH . $file ) === $checksum )
					$skip[] = $file;
				else
					$check_is_writable[ $file ] = ABSPATH . $file;
			}
		}
	}

	// If we're using the direct method, we can predict write failures that are due to permissions.
	if ( $check_is_writable && 'direct' === $wp_filesystem->method ) {
		$files_writable = array_filter( $check_is_writable, array( $wp_filesystem, 'is_writable' ) );
		if ( $files_writable !== $check_is_writable ) {
			$files_not_writable = array_diff_key( $check_is_writable, $files_writable );
			foreach ( $files_not_writable as $relative_file_not_writable => $file_not_writable ) {
				// If the writable check failed, chmod file to 0644 and try again, same as copy_dir().
				$wp_filesystem->chmod( $file_not_writable, FS_CHMOD_FILE );
				if ( $wp_filesystem->is_writable( $file_not_writable ) )
					unset( $files_not_writable[ $relative_file_not_writable ] );
			}

			// Store package-relative paths (the key) of non-writable files in the WP_Error object.
			$error_data = version_compare( $old_wp_version, '3.7-beta2', '>' ) ? array_keys( $files_not_writable ) : '';

			if ( $files_not_writable )
				return new WP_Error( 'files_not_writable', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), implode( ', ', $error_data ) );
		}
	}

	/** This filter is documented in backend/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Enabling Maintenance mode&#8230;' ) );
	// Create maintenance file to signal that we are upgrading
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file = $to . '.maintenance';
	$wp_filesystem->delete($maintenance_file);
	$wp_filesystem->put_contents($maintenance_file, $maintenance_string, FS_CHMOD_FILE);

	/** This filter is documented in backend/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Copying the required files&#8230;' ) );
	// Copy new versions of WP files into place.
	$result = _copy_dir( $from . $distro, $to, $skip );
	if ( is_wp_error( $result ) )
		$result = new WP_Error( $result->get_error_code(), $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );

	// Since we know the core files have copied over, we can now copy the version file
	if ( ! is_wp_error( $result ) ) {
		if ( ! $wp_filesystem->copy( $from . $distro . 'ldcms-includes/version.php', $to . 'ldcms-includes/version.php', true /* overwrite */ ) ) {
			$wp_filesystem->delete( $from, true );
			$result = new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'ldcms-includes/version.php' );
		}
		$wp_filesystem->chmod( $to . 'ldcms-includes/version.php', FS_CHMOD_FILE );
	}

	// Check to make sure everything copied correctly, ignoring the contents of ldcms-conteudo
	$skip = array( 'ldcms-conteudo' );
	$failed = array();
	if ( isset( $checksums ) && is_array( $checksums ) ) {
		foreach ( $checksums as $file => $checksum ) {
			if ( 'ldcms-conteudo' == substr( $file, 0, 10 ) )
				continue;
			if ( ! file_exists( $working_dir_local . $file ) )
				continue;
			if ( '.' === dirname( $file ) && in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ) ) ) {
				$skip[] = $file;
				continue;
			}
			if ( file_exists( ABSPATH . $file ) && md5_file( ABSPATH . $file ) == $checksum )
				$skip[] = $file;
			else
				$failed[] = $file;
		}
	}

	// Some files didn't copy properly
	if ( ! empty( $failed ) ) {
		$total_size = 0;
		foreach ( $failed as $file ) {
			if ( file_exists( $working_dir_local . $file ) )
				$total_size += filesize( $working_dir_local . $file );
		}

		// If we don't have enough free space, it isn't worth trying again.
		// Unlikely to be hit due to the check in unzip_file().
		$available_space = @disk_free_space( ABSPATH );
		if ( $available_space && $total_size >= $available_space ) {
			$result = new WP_Error( 'disk_full', __( 'There is not enough free disk space to complete the update.' ) );
		} else {
			$result = _copy_dir( $from . $distro, $to, $skip );
			if ( is_wp_error( $result ) )
				$result = new WP_Error( $result->get_error_code() . '_retry', $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );
		}
	}

	// Custom Content Directory needs updating now.
	// Copy Languages
	if ( !is_wp_error($result) && $wp_filesystem->is_dir($from . $distro . 'ldcms-conteudo/languages') ) {
		if ( WP_LANG_DIR != ABSPATH . WPINC . '/languages' || @is_dir(WP_LANG_DIR) )
			$lang_dir = WP_LANG_DIR;
		else
			$lang_dir = WP_CONTENT_DIR . '/languages';

		if ( !@is_dir($lang_dir) && 0 === strpos($lang_dir, ABSPATH) ) { // Check the language directory exists first
			$wp_filesystem->mkdir($to . str_replace(ABSPATH, '', $lang_dir), FS_CHMOD_DIR); // If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			clearstatcache(); // for FTP, Need to clear the stat cache
		}

		if ( @is_dir($lang_dir) ) {
			$wp_lang_dir = $wp_filesystem->find_folder($lang_dir);
			if ( $wp_lang_dir ) {
				$result = copy_dir($from . $distro . 'ldcms-conteudo/languages/', $wp_lang_dir);
				if ( is_wp_error( $result ) )
					$result = new WP_Error( $result->get_error_code() . '_languages', $result->get_error_message(), substr( $result->get_error_data(), strlen( $wp_lang_dir ) ) );
			}
		}
	}

	/** This filter is documented in backend/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Disabling Maintenance mode&#8230;' ) );
	// Remove maintenance file, we're done with potential site-breaking changes
	$wp_filesystem->delete( $maintenance_file );

	// 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users, preventing installation of Twenty Twelve.
	if ( '3.5' == $old_wp_version ) {
		if ( is_dir( WP_CONTENT_DIR . '/themes/twentytwelve' ) && ! file_exists( WP_CONTENT_DIR . '/themes/twentytwelve/style.css' )  ) {
			$wp_filesystem->delete( $wp_filesystem->wp_themes_dir() . 'twentytwelve/' );
		}
	}

	// Copy New bundled plugins & themes
	// This gives us the ability to install new plugins & themes bundled with future versions of WordPress whilst avoiding the re-install upon upgrade issue.
	// $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated
	if ( !is_wp_error($result) && ( ! defined('CORE_UPGRADE_SKIP_NEW_BUNDLED') || ! CORE_UPGRADE_SKIP_NEW_BUNDLED ) ) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running
			if ( $development_build || version_compare( $introduced_version, $old_wp_version, '>' ) ) {
				$directory = ('/' == $file[ strlen($file)-1 ]);
				list($type, $filename) = explode('/', $file, 2);

				// Check to see if the bundled items exist before attempting to copy them
				if ( ! $wp_filesystem->exists( $from . $distro . 'ldcms-conteudo/' . $file ) )
					continue;

				if ( 'plugins' == $type )
					$dest = $wp_filesystem->wp_plugins_dir();
				elseif ( 'themes' == $type )
					$dest = trailingslashit($wp_filesystem->wp_themes_dir()); // Back-compat, ::wp_themes_dir() did not return trailingslash'd pre-3.2
				else
					continue;

				if ( ! $directory ) {
					if ( ! $development_build && $wp_filesystem->exists( $dest . $filename ) )
						continue;

					if ( ! $wp_filesystem->copy($from . $distro . 'ldcms-conteudo/' . $file, $dest . $filename, FS_CHMOD_FILE) )
						$result = new WP_Error( "copy_failed_for_new_bundled_$type", __( 'Could not copy file.' ), $dest . $filename );
				} else {
					if ( ! $development_build && $wp_filesystem->is_dir( $dest . $filename ) )
						continue;

					$wp_filesystem->mkdir($dest . $filename, FS_CHMOD_DIR);
					$_result = copy_dir( $from . $distro . 'ldcms-conteudo/' . $file, $dest . $filename);

					// If a error occurs partway through this final step, keep the error flowing through, but keep process going.
					if ( is_wp_error( $_result ) ) {
						if ( ! is_wp_error( $result ) )
							$result = new WP_Error;
						$result->add( $_result->get_error_code() . "_$type", $_result->get_error_message(), substr( $_result->get_error_data(), strlen( $dest ) ) );
					}
				}
			}
		} //end foreach
	}

	// Handle $result error from the above blocks
	if ( is_wp_error($result) ) {
		$wp_filesystem->delete($from, true);
		return $result;
	}

	// Remove old files
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;
		if ( !$wp_filesystem->exists($old_file) )
			continue;

		// If the file isn't deleted, try writing an empty string to the file instead.
		if ( ! $wp_filesystem->delete( $old_file, true ) && $wp_filesystem->is_file( $old_file ) ) {
			$wp_filesystem->put_contents( $old_file, '' );
		}
	}

	// Remove any Genericons example.html's from the filesystem
	_upgrade_422_remove_genericons();

	// Remove the REST API plugin if its version is Beta 4 or lower
	_upgrade_440_force_deactivate_incompatible_plugins();

	// Upgrade DB with separate request
	/** This filter is documented in backend/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Upgrading database&#8230;' ) );
	$db_upgrade_url = admin_url('upgrade.php?step=upgrade_db');
	wp_remote_post($db_upgrade_url, array('timeout' => 60));

	// Clear the cache to prevent an update_option() from saving a stale db_version to the cache
	wp_cache_flush();
	// (Not all cache back ends listen to 'flush')
	wp_cache_delete( 'alloptions', 'options' );

	// Remove working directory
	$wp_filesystem->delete($from, true);

	// Force refresh of update information
	if ( function_exists('delete_site_transient') )
		delete_site_transient('update_core');
	else
		delete_option('update_core');

	/**
	 * Fires after WordPress core has been successfully updated.
	 *
	 * @since 3.3.0
	 *
	 * @param string $wp_version The current WordPress version.
	 */
	do_action( '_core_updated_successfully', $wp_version );

	// Clear the option that blocks auto updates after failures, now that we've been successful.
	if ( function_exists( 'delete_site_option' ) )
		delete_site_option( 'auto_core_update_failed' );

	return $wp_version;
}

/**
 * Copies a directory from one location to another via the WordPress Filesystem Abstraction.
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * This is a temporary function for the 3.1 -> 3.2 upgrade, as well as for those upgrading to
 * 3.7+
 *
 * @ignore
 * @since 3.2.0
 * @since 3.7.0 Updated not to use a regular expression for the skip list
 * @see copy_dir()
 *
 * @global WP_Filesystem_Base $wp_filesystem
 *
 * @param string $from     source directory
 * @param string $to       destination directory
 * @param array $skip_list a list of files/folders to skip copying
 * @return mixed WP_Error on failure, True on success.
 */
function _copy_dir($from, $to, $skip_list = array() ) {
	global $wp_filesystem;

	$dirlist = $wp_filesystem->dirlist($from);

	$from = trailingslashit($from);
	$to = trailingslashit($to);

	foreach ( (array) $dirlist as $filename => $fileinfo ) {
		if ( in_array( $filename, $skip_list ) )
			continue;

		if ( 'f' == $fileinfo['type'] ) {
			if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) ) {
				// If copy failed, chmod file to 0644 and try again.
				$wp_filesystem->chmod( $to . $filename, FS_CHMOD_FILE );
				if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) )
					return new WP_Error( 'copy_failed__copy_dir', __( 'Could not copy file.' ), $to . $filename );
			}
		} elseif ( 'd' == $fileinfo['type'] ) {
			if ( !$wp_filesystem->is_dir($to . $filename) ) {
				if ( !$wp_filesystem->mkdir($to . $filename, FS_CHMOD_DIR) )
					return new WP_Error( 'mkdir_failed__copy_dir', __( 'Could not create directory.' ), $to . $filename );
			}

			/*
			 * Generate the $sub_skip_list for the subdirectory as a sub-set
			 * of the existing $skip_list.
			 */
			$sub_skip_list = array();
			foreach ( $skip_list as $skip_item ) {
				if ( 0 === strpos( $skip_item, $filename . '/' ) )
					$sub_skip_list[] = preg_replace( '!^' . preg_quote( $filename, '!' ) . '/!i', '', $skip_item );
			}

			$result = _copy_dir($from . $filename, $to . $filename, $sub_skip_list);
			if ( is_wp_error($result) )
				return $result;
		}
	}
	return true;
}

/**
 * Redirect to the About WordPress page after a successful upgrade.
 *
 * This function is only needed when the existing installation is older than 3.4.0.
 *
 * @since 3.3.0
 *
 * @global string $wp_version
 * @global string $pagenow
 * @global string $action
 *
 * @param string $new_version
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $wp_version, $pagenow, $action;

	if ( version_compare( $wp_version, '3.4-RC1', '>=' ) )
		return;

	// Ensure we only run this on the update-core.php page. The Core_Upgrader may be used in other contexts.
	if ( 'update-core.php' != $pagenow )
		return;

 	if ( 'do-core-upgrade' != $action && 'do-core-reinstall' != $action )
 		return;

	// Load the updated default text localization domain for new strings.
	load_default_textdomain();

	// See do_core_upgrade()
	show_message( __('WordPress updated successfully') );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message( '<span class="hide-if-no-js">' . sprintf( __( 'Welcome to WordPress %1$s. You will be redirected to the About WordPress screen. If not, click <a href="%2$s">here</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	show_message( '<span class="hide-if-js">' . sprintf( __( 'Welcome to WordPress %1$s. <a href="%2$s">Learn more</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit.
	include(ABSPATH . 'backend/admin-footer.php');
	exit();
}

/**
 * Cleans up Genericons example files.
 *
 * @since 4.2.2
 *
 * @global array              $wp_theme_directories
 * @global WP_Filesystem_Base $wp_filesystem
 */
function _upgrade_422_remove_genericons() {
	global $wp_theme_directories, $wp_filesystem;

	// A list of the affected files using the filesystem absolute paths.
	$affected_files = array();

	// Themes
	foreach ( $wp_theme_directories as $directory ) {
		$affected_theme_files = _upgrade_422_find_genericons_files_in_folder( $directory );
		$affected_files       = array_merge( $affected_files, $affected_theme_files );
	}

	// Plugins
	$affected_plugin_files = _upgrade_422_find_genericons_files_in_folder( WP_PLUGIN_DIR );
	$affected_files        = array_merge( $affected_files, $affected_plugin_files );

	foreach ( $affected_files as $file ) {
		$gen_dir = $wp_filesystem->find_folder( trailingslashit( dirname( $file ) ) );
		if ( empty( $gen_dir ) ) {
			continue;
		}

		// The path when the file is accessed via WP_Filesystem may differ in the case of FTP
		$remote_file = $gen_dir . basename( $file );

		if ( ! $wp_filesystem->exists( $remote_file ) ) {
			continue;
		}

		if ( ! $wp_filesystem->delete( $remote_file, false, 'f' ) ) {
			$wp_filesystem->put_contents( $remote_file, '' );
		}
	}
}

/**
 * Recursively find Genericons example files in a given folder.
 *
 * @ignore
 * @since 4.2.2
 *
 * @param string $directory Directory path. Expects trailingslashed.
 * @return array
 */
function _upgrade_422_find_genericons_files_in_folder( $directory ) {
	$directory = trailingslashit( $directory );
	$files     = array();

	if ( file_exists( "{$directory}example.html" ) && false !== strpos( file_get_contents( "{$directory}example.html" ), '<title>Genericons</title>' ) ) {
		$files[] = "{$directory}example.html";
	}

	$dirs = glob( $directory . '*', GLOB_ONLYDIR );
	if ( $dirs ) {
		foreach ( $dirs as $dir ) {
			$files = array_merge( $files, _upgrade_422_find_genericons_files_in_folder( $dir ) );
		}
	}

	return $files;
}

/**
 * @ignore
 * @since 4.4.0
 */
function _upgrade_440_force_deactivate_incompatible_plugins() {
	if ( defined( 'REST_API_VERSION' ) && version_compare( REST_API_VERSION, '2.0-beta4', '<=' ) ) {
		deactivate_plugins( array( 'rest-api/plugin.php' ), true );
	}
}
