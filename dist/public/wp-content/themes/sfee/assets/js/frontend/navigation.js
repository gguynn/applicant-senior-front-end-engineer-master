/**
 * File navigation.js.
 *
 * Handles toggling the navigation and search menu
 */
( function( $ ) {
	const $masthead = $( '#masthead' ); // Site Header
	const $buttons = $masthead.find( '> button[class*="-toggle"]' ),
		$containers = $masthead.find( '> .is-collapsable' );
	const $primary = $( '#primary' ); // Site Main

	// Helper functions
	const easeInSine = function( x, t, b, c, d ) {
		return ( -c * Math.cos( t / d * ( Math.PI / 2 ) ) ) + c + b;
	};

	const easeOutSine = function( x, t, b, c, d ) {
		return ( c * Math.sin( t / d * ( Math.PI / 2 ) ) ) + b;
	};

	// Default options
	const options = {
		// Animation duration
		duration: 200,
		// Animation timing function
		easing: {
			enter: easeOutSine,
			leave: easeInSine,
		},
	};

	// Handle document click
	const handleDocumentClick = function() {
		const { duration, easing } = options;

		// Remove active states from all other buttons and containers
		$buttons.removeClass( 'is-active' );
		$buttons.attr( 'aria-expanded', false );
		$containers.slideUp( duration, easing.leave );

		// Remove document event listener
		$primary[ 0 ].removeEventListener( 'click', handleDocumentClick );

		// Remove focus from search field
		const $searchField = $containers.find( '.search-field ' );
		if ( $searchField ) {
			$searchField.blur();
		}
	};

	// Handle button click
	$masthead.on( 'click', 'button[class*="-toggle"]', function( e ) {
		e.preventDefault();

		const $button = $( this );
		const $container = $masthead.find( `#${ $button.attr( 'aria-controls' ) }` );

		const { duration, easing } = options;

		// Remove active states from all other buttons and containers
		$buttons.not( $button ).removeClass( 'is-active' );
		$buttons.not( $button ).attr( 'aria-expanded', false );
		$containers.not( $container ).slideUp( duration, easing.leave );

		// Remove document event listener
		$primary[ 0 ].removeEventListener( 'click', handleDocumentClick );

		// Update state
		if ( $button.hasClass( 'is-active' ) ) {
			// Add active state to this button and container
			$button.removeClass( 'is-active' );
			$button.attr( 'aria-expanded', false );
			$container.slideUp( duration, easing.leave );

			// Remove document event listener
			$primary[ 0 ].removeEventListener( 'click', handleDocumentClick );

			// Remove focus from search field
			const $searchField = $container.find( '.search-field ' );
			if ( $searchField ) {
				$searchField.blur();
			}
		} else {
			// Remove active state from this button and container
			$button.addClass( 'is-active' );
			$button.attr( 'aria-expanded', true );
			$container.slideDown( duration, easing.enter );

			// Add document event listener
			$primary[ 0 ].addEventListener( 'click', handleDocumentClick );

			// Add focus to search field
			const $searchField = $container.find( '.search-field ' );
			if ( $searchField ) {
				$searchField.focus();
			}
		}

		return false;
	} );
}( window.jQuery ) );
