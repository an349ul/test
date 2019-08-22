<?
echo 'phpのテストです。<br>';
$dbinfo = parse_url(getenv('DATABASE_URL'));  //DATABASE_URLはHeroku上で定義されている変数。DBの接続情報が含まれている。
$dsn = 'pgsql:host=' . $dbinfo['host'] . ';dbname=' . substr($dbinfo['path'], 1);
$pdo = new PDO($dsn, $dbinfo['user'], $dbinfo['pass']);
var_dump($pdo->getAttribute(PDO::ATTR_SERVER_VERSION));
phpinfo();
?>
