<?php
/**
 * Created by PhpStorm.
 * User: liuhan
 * Date: 17/4/10
 * Time: 下午8:07
 */
$dotenv = new \Dotenv\Dotenv(__DIR__);
$ret = $dotenv->load();
//defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG') == 'true');
//defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV') ?: 'prod');