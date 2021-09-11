addServer(array (
  'host' => 'www.wsfdb.cn',
  'user' => '2278typecho',
  'password' => 'lvl5817518!',
  'charset' => 'utf8mb4',
  'port' => '3306',
  'database' => '2278typecho',
  'engine' => 'MyISAM',
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);