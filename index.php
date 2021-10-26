<?php
    $hostname = getHostName();
    $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
    $remote_addr = $_SERVER['REMOTE_ADDR'];
    $instance_id = @file_get_contents("http://instance-data/latest/meta-data/instance-id");
    $elb_dns = $_SERVER['SERVER_NAME'];
    socket_connect($sock, "8.8.8.8", 53);
    socket_getsockname($sock, $ipaddr);
    echo "<h1>InstanceID: [$instance_id]</h1>";
    echo "<h1>Hostname: [$hostname]</h1>";
    echo "<h1>Host Private IP: [$ipaddr]</h1>";
    echo "<h1>ELB Private IP: [$remote_addr]</h1>";
    echo "<h1>ELB DNS: [$elb_dns]</h1><br>";
?>