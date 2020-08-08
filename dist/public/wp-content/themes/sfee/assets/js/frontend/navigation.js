/**
 * File navigation.js.
 *
 * Handles toggling the navigation and search menu
 */
( function($) {
	const $masthead = $( '#masthead' ); // Site Header
	const $buttons = $masthead.find( '> button[class*="-toggle"]' ),
		$containers = $masthead.find( '> .is-collapsable' );

	// Default options
	const options = {
		duration: 200 // Animation duration
	}

	// Handle document click
	const handleDocumentClick = function() {
		const { duration } = options;

		// Remove active states from all other buttons and containers
		$buttons.removeClass( 'is-active' );
		$buttons.attr( 'aria-expanded', false );
		$containers.slideUp( duration );

		// Remove document event listener
		document.removeEventListener( 'click', handleDocumentClick );

		// Remove focus from search field
		const $searchField = $containers.find( '.search-field ');
		if ( $searchField ) {
			$searchField.blur();
		}
	}

	// Handle button click
	$masthead.on( 'click', 'button[class*="-toggle"]', function(e) {
		e.preventDefault();

		const $button = $(this);
		const $container = $masthead.find( `#${$button.attr( 'aria-controls' )}` );

		const { duration } = options;

		// Remove active states from all other buttons and containers
		$buttons.not( $button ).removeClass( 'is-active' );
		$buttons.not( $button ).attr( 'aria-expanded', false );
		$containers.not( $container ).slideUp( duration );

		// Remove document event listener
		document.removeEventListener( 'click', handleDocumentClick );

		// Update state
		if ( $button.hasClass( 'is-active' ) ) {
			// Add active state to this button and container
			$button.removeClass( 'is-active' );
			$button.attr( 'aria-expanded', false );
			$container.slideUp( duration );

			// Remove document event listener
			document.removeEventListener( 'click', handleDocumentClick );

			// Remove focus from search field
			const $searchField = $container.find( '.search-field ');
			if ( $searchField ) {
				$searchField.blur();
			}
		} else {
			// Remove active state from this button and container
			$button.addClass( 'is-active' );
			$button.attr( 'aria-expanded', true );
			$container.slideDown( duration );

			// Add document event listener
			document.addEventListener( 'click', handleDocumentClick );

			// Add focus to search field
			const $searchField = $container.find( '.search-field ');
			if ( $searchField ) {
				$searchField.focus();
			}
		}

		return false;
	});
}(jQuery) );
