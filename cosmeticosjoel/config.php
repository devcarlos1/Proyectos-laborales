<?php
$config = array();
$config['name'] = "cosmeticosjoel"; //Nombre del directorio donde se aloja la plantilla
$config['full_name'] = "cosmeticosjoel"; //Nombre completo que aparecerá en la lista
$config['author'] = "Carlos Ciccone";
$config['version'] = 0.1;
$config['is_hidden_from_install_screen'] = true;
$config['standalone_module_skins'] = true;
$config['type_web'] = "funnels";
$config['type_group'] = "Landing";
$config['content'] = array();
$config['content'][] = array(
'title' => "Home",
'content_type' => "page",
'layout_file' => "index.php",
'is_home' => 1,
'type_group' => "Landing"
);
