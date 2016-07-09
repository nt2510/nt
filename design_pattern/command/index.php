<?php

include_once 'OpenTvCommand.php';
include_once 'CloseTvCommand.php';
include_once 'ChangeChannelCommand.php';
include_once 'Remote.php';

$openTv = new OpenTvCommand;
$closeTv = new CloseTvCommand;
$changeChannel = new ChangeChannelCommand;
$remote = new Remote($openTv, $closeTv, $changeChannel);

$remote->open();
$remote->change();
$remote->close();





