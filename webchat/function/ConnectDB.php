<?php

function isConnectDB()
{
    $link=mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
    $connect = mysql_select_db(app_gdmc12580,$link);
    return $connect;
}
?>