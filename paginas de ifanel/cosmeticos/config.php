<?php
 
$config = array();
$config['name'] = "cosmeticos"; //Nombre del directorio donde se aloja la plantilla
$config['full_name'] = "Cosmeticos"; //Nombre completo que aparecerá en la lista
$config['author'] = "Nick Morales";
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