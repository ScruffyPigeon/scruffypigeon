<?php
//load base classes
include 'controllers/Controller.php';
include 'views/View.php';
include 'models/Model.php';
//

//----load others----
foreach (glob("controllers/*.php") as $filename)
{
	if ($filename != 'controllers/Controller.php')
	{
    	include $filename;
	}
}

foreach (glob("views/*.php") as $filename)
{
    if ($filename != 'views/View.php')
	{
    	include $filename;
	}
}

foreach (glob("models/*.php") as $filename)
{
    if ($filename != 'models/Model.php')
	{
    	include $filename;
	}
}
//----finish loading----
//

function renderHeader()
{
	$view = new View(null);
	$viewFields['Logo'] = 'resources/images/scruffypigeonlogo.png';
	$view->render('views/partials/_header.phtml', $viewFields);
}

function renderNav()
{
	$view = new View(null);
	$view->render('views/partials/_navigation.phtml');
}

function renderHeadMetaTitleEtc()
{
	$view = new View(null);
	$view->render('views/partials/_headmetatitle.phtml');
}

function renderFooter()
{
	$view = new View(null);
	$view->render('views/partials/_footer.phtml');
}

function renderBody()
{
	if (isset($_GET['controller']) && !empty($_GET['controller'])) {
	$controllerName = $_GET['controller'] . 'Controller';
    $controller = new $controllerName();
	}
	if (isset($_GET['action']) && !empty($_GET['action'])) {
	    $controller->{$_GET['action']}();
	}
}

function renderSite()
{
	renderHeadMetaTitleEtc();
	renderHeader();
	renderNav();
	renderBody();
	renderFooter();
}

renderSite();