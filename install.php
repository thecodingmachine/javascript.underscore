<?php
// First, let's request the install utilities
require_once __DIR__."/../../autoload.php";

use Mouf\Html\Utils\WebLibraryManager\WebLibraryInstaller;
use Mouf\Actions\InstallUtils;
use Mouf\MoufManager;

// Let's init Mouf
InstallUtils::init(InstallUtils::$INIT_APP);

// Let's create the instances
$moufManager = MoufManager::getMoufManager();

WebLibraryInstaller::installLibrary("javascript.underscore.debug",
	array(
	'vendor/mouf/javascript.underscore/lib/underscore.js'
	), array(),	array(), false
);

WebLibraryInstaller::installLibrary("javascript.underscore",
array(
'vendor/mouf/javascript.underscore/lib/underscore-min.js'
		), array(),	array(), true
);

// Let's rewrite the MoufComponents.php file to save the component
$moufManager->rewriteMouf();

// Finally, let's continue the install
InstallUtils::continueInstall();
?>