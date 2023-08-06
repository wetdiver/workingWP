/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay: 500,                            
		animation: {opacity:'show',height:'show'},  
		speed: 'fast'                        
	});

 	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 200 ) {
			$( '.back-to-top' ).addClass( 'show-back-to-top' );
		} else {
			$( '.back-to-top' ).removeClass( 'show-back-to-top' );
		}
	});

	// Click event to scroll to top.
	$( '.back-to-top' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 500 );
		return false;
	});
});

function niwas_resort_hotel_open() {
	jQuery(".sidenav").addClass('show');
}
function niwas_resort_hotel_close() {
	jQuery(".sidenav").removeClass('show');
}

function niwas_resort_hotel_menuAccessibility() {
	var links, i, len,
	    niwas_resort_hotel_menu = document.querySelector( '.nav-menu' ),
	    niwas_resort_hotel_iconToggle = document.querySelector( '.nav-menu ul li:first-child a' );
    
	let niwas_resort_hotel_focusableElements = 'button, a, input';
	let niwas_resort_hotel_firstFocusableElement = niwas_resort_hotel_iconToggle; // get first element to be focused inside menu
	let niwas_resort_hotel_focusableContent = niwas_resort_hotel_menu.querySelectorAll(niwas_resort_hotel_focusableElements);
	let niwas_resort_hotel_lastFocusableElement = niwas_resort_hotel_focusableContent[niwas_resort_hotel_focusableContent.length - 1]; // get last element to be focused inside menu

	if ( ! niwas_resort_hotel_menu ) {
    	return false;
	}

	links = niwas_resort_hotel_menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
	    links[i].addEventListener( 'focus', toggleFocus, true );
	    links[i].addEventListener( 'blur', toggleFocus, true );
	}

	// Sets or removes the .focus class on an element.
	function toggleFocus() {
      	var self = this;

      	// Move up through the ancestors of the current link until we hit .mobile-menu.
      	while (-1 === self.className.indexOf( 'nav-menu' ) ) {
	      	// On li elements toggle the class .focus.
	      	if ( 'li' === self.tagName.toLowerCase() ) {
	          	if ( -1 !== self.className.indexOf( 'focus' ) ) {
	          		self.className = self.className.replace( ' focus', '' );
	          	} else {
	          		self.className += ' focus';
	          	}
	      	}
	      	self = self.parentElement;
      	}
	}
    
	// Trap focus inside modal to make it ADA compliant
	document.addEventListener('keydown', function (e) {
	    let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

	    if ( ! isTabPressed ) {
	    	return;
	    }

	    if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
	      	if (document.activeElement === niwas_resort_hotel_firstFocusableElement) {
		        niwas_resort_hotel_lastFocusableElement.focus(); // add focus for the last focusable element
		        e.preventDefault();
	      	}
	    } else { // if tab key is pressed
	    	if (document.activeElement === niwas_resort_hotel_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
		      	niwas_resort_hotel_firstFocusableElement.focus(); // add focus for the first focusable element
		      	e.preventDefault();
	    	}
	    }
	});   
}

jQuery(function($){
	$('.mobile-menu').click(function () {
	    niwas_resort_hotel_menuAccessibility();
  	});
  	$('.search-toggle').click(function () {
	    niwas_resort_hotel_search_focus();
  	});
});

function niwas_resort_hotel_search_open() {
	jQuery(".search-outer").addClass('show');
}
function niwas_resort_hotel_search_close() {
	jQuery(".search-outer").removeClass('show');
}

function niwas_resort_hotel_search_focus() {
	var links, i, len,
	    niwas_resort_hotel_search = document.querySelector( '.search-outer' ),
	    niwas_resort_hotel_iconToggle = document.querySelector( '.search-outer input[type="search"]' );
	    
	let niwas_resort_hotel_focusableElements = 'button, a, input';
	let niwas_resort_hotel_firstFocusableElement = niwas_resort_hotel_iconToggle; // get first element to be focused inside menu
	let niwas_resort_hotel_focusableContent = niwas_resort_hotel_search.querySelectorAll(niwas_resort_hotel_focusableElements);
	let niwas_resort_hotel_lastFocusableElement = niwas_resort_hotel_focusableContent[niwas_resort_hotel_focusableContent.length - 1]; // get last element to be focused inside menu

	if ( ! niwas_resort_hotel_search ) {
    	return false;
	}

	links = niwas_resort_hotel_search.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
	    links[i].addEventListener( 'focus', toggleFocus, true );
	    links[i].addEventListener( 'blur', toggleFocus, true );
	}

	// Sets or removes the .focus class on an element.
	function toggleFocus() {
      	var self = this;

      	// Move up through the ancestors of the current link until we hit .mobile-menu.
      	while (-1 === self.className.indexOf( 'search-outer' ) ) {
	      	// On li elements toggle the class .focus.
	      	if ( 'li' === self.tagName.toLowerCase() ) {
	          	if ( -1 !== self.className.indexOf( 'focus' ) ) {
	          		self.className = self.className.replace( ' focus', '' );
	          	} else {
	          		self.className += ' focus';
	          	}
	      	}
	      	self = self.parentElement;
      	}
	}
    
	// Trap focus inside modal to make it ADA compliant
	document.addEventListener('keydown', function (e) {
	    let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

	    if ( ! isTabPressed ) {
	    	return;
	    }

	    if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
	      	if (document.activeElement === niwas_resort_hotel_firstFocusableElement) {
		        niwas_resort_hotel_lastFocusableElement.focus(); // add focus for the last focusable element
		        e.preventDefault();
	      	}
	    } else { // if tab key is pressed
	    	if (document.activeElement === niwas_resort_hotel_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
		      	niwas_resort_hotel_firstFocusableElement.focus(); // add focus for the first focusable element
		      	e.preventDefault();
	    	}
	    }
	});   
}