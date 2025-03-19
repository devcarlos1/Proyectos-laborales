<?php

$config = array();
$config['name'] = "registro";
$config['full_name'] = "Registro";
$config['author'] = "";
$config['version'] = 0.1;
$config['is_hidden_from_install_screen'] = true;
$config['standalone_module_skins'] = true;
$config['type_group'] = "Landing";
$config['type_web'] = "funnels";

$config['content'] = array();
$config['content'][] = array(
    'title' => "Registro",
    'content_type' => "page",
    'layout_file' => "index.php",
    'is_home' => 1,
    'type_group' => "Landing"
);
