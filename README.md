# fenxiao


php最佳版本推荐5.4！

1、使用数据库管理工具navicat或者phpmyadmin导入根目录的sql数据库文件

2、修改数据库配置文件data/config.php的信息为自己的：

$config['db']['master']['host'] = '127.0.0.1'; //数据库地址 win主机用127.0.0.1 linux主机用localhost
$config['db']['master']['username'] = 'root';//数据库账号
$config['db']['master']['password'] = 'root';//数据库密码
$config['db']['master']['port'] = '3306';
$config['db']['master']['database'] = 'wq19';//数据库名称


3、打开站点，默认账号密码为admin  admin
