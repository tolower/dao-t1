<?php
	echo 'hello,world111';
	//连接本地的 Redis 服务
   $redis = new Redis();
   $ip=$_ENV['REDIS_PORT_6379_TCP_ADDR'];
   $port=$_ENV['REDIS_PORT_6379_TCP_PORT'];
   echo $ip;
   echo $port;
   $redis->connect($ip, $port);
   echo "Connection to server sucessfully";
   //设置 redis 字符串数据
   $redis->set("tutorial-name", "Redis tutorial");
   // 获取存储的数据并输出
   echo "Stored string in redis:: " . $redis->get("tutorial-name");
	phpinfo();
?>
