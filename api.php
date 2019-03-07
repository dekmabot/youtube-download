<?php
/**
 * Created by PhpStorm.
 * User: dekma
 * Date: 06.03.2019
 * Time: 23:15
 */

if (isset($_POST['url'])) {
    $url = $_POST['url'];
    
    if (!substr_count($url, 'https://www.youtube.com/watch?v=')) {
        header("Content-type: application/json; charset=utf-8");
        print(json_encode(['result' => 'failed', 'message' => 'Youtube URL is wrong: ' . $url]));
        exit();
    }
    
    $id = md5(microtime() . rand());
    $path = 'files/' . md5($id) . '.mp4';
    
    $command = '/usr/local/bin/youtube-dl ' . $url . ' -o ' . $path . ' > /dev/null 2>/dev/null &';
    exec($command);
    
    header("Content-type: application/json; charset=utf-8");
    print(json_encode(['result' => 'ok', 'id' => $id, 'command' => $command]));
    exit();
}

if (isset($_GET['checkId'])) {
    $id = $_GET['checkId'];
    $path = 'files/' . md5($id) . '.mp4';
    if (!file_exists($path)) {
        header("Content-type: application/json; charset=utf-8");
        print(json_encode(['result' => 'waiting', 'check' => $path]));
        exit();
    }
    
    header("Content-type: application/json; charset=utf-8");
    print(json_encode(['result' => 'ok', 'url' => 'http://' . $_SERVER['HTTP_HOST'] . '/api.php?file=' . $id]));
    exit();
}

if (isset($_GET['file'])) {
    
    $id = $_GET['file'];
    $path = 'files/' . md5($id) . '.mp4';
    
    header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/' . $path);
    exit;
}




