function navLinks($controller, $action)
{
	window.location = 'index.php?controller=' + $controller + '&action=' + $action;
}

function embiggen($id)
{
	$('#small-gallery-image_' + $id).toggleClass("hide");
	$('#large-gallery-image_' + $id).toggleClass("hide");
	$('#galleryImageList').toggleClass("big");
}

function ensmallen($id)
{
	$('#small-gallery-image_' + $id).toggleClass("hide");
	$('#large-gallery-image_' + $id).toggleClass("hide");
}