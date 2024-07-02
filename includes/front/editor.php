<?php 

function pp_editor_styles() {
    // Enqueue the editor style for Gutenberg
    add_theme_support('editor-styles');
    add_editor_style(get_theme_file_uri('/assets/public/index.css'));
};
