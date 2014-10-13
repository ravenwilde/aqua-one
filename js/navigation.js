/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var header, container, button, menu;
	
	header = document.getElementById( 'masthead' );
	if ( ! header )
		return;

	container = document.getElementById( 'site-navigation' );
	if ( ! container )
		return;

	button = header.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button )
		return;

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
		menu.className += ' nav-menu';

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) )
			container.className = container.className.replace( ' toggled', '' );
			//button.className = button.className.replace(' is-active', '');
		else
			container.className += ' toggled';
			//button.className += ' is-active';
	};
} )();