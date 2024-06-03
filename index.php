<?php
require_once('vendor/autoload.php');

use Smarty\Smarty;

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

class IframeController
{
    public $iframeLink;

    public function navigateTo($link)
    {
        $this->iframeLink = $link;
    }
}

function listHtmlFiles($dir, &$results = array()) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $path = $dir . '/' . $file;
            if (is_dir($path)) {
                listHtmlFiles($path, $results);
            } else {
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                if (strtolower($ext) == 'html') {
                    $filename = basename($path, '.html');
                    $results[] = $filename;
                }
            }
        }
    }
    return $results;
}

function getPathToFileName($dir, &$results = array()) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $path = $dir . '/' . $file;
            if (is_dir($path)) {
                getPathToFileName($path, $results);
            } else {
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                if (strtolower($ext) == 'html') {
                    $filename = basename($path, '.html');
                    $results[$filename] = $path;
                }
            }
        }
    }
    return $results;
}

$iframecontroller = new IframeController();
$htmlfiles = listHtmlFiles(__DIR__ . '/markmaps');
$pathToHtmlFiles = getPathToFileName(__DIR__ . '/markmaps');
$smarty->assign('htmlfiles', $htmlfiles);
$smarty->assign('pathToHtmlFiles', $pathToHtmlFiles);
$smarty->assign('iframeController', $iframecontroller);

$smarty->display('index.tpl');
