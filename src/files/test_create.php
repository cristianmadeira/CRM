<?php

require '../Include/Config.php';

// This file is generated by Composer
require_once dirname(__FILE__) . '/../vendor/autoload.php';


use ChurchCRM\File as File;
use ChurchCRM\FileAssociation;
use ChurchCRM\PersonQuery;
use ChurchCRM\Utils\MiscUtils;

$file = new File();

$filename = MiscUtils::random_word();
$contents = MiscUtils::random_word().MiscUtils::random_word().MiscUtils::random_word();
$file->setFileName($filename.".txt");
$file->setContent($contents);
$file->save();

$Person = PersonQuery::create()->findOneById(1);

$fileAssociation = new FileAssociation();
$fileAssociation->setFile($file);
$fileAssociation->setPerson($Person);
$fileAssociation->save();