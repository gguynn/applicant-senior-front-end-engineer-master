/**
 * File navigation.js.
 *
 * Handles toggling the navigation and search menu
 * Depends on jQuery
 *
 * Author: GGuynn
 */
( function( $ ) {
	// Setup
	const sfeeNavigation = () => {
		const $siteHeader = $( '#masthead' ); // Site Header

		return {
			$siteHeader,
			$buttons: $siteHeader.find( '> button[class*="toggle--"]' ),
			$containers: $siteHeader.find( '> .is-collapsable' ),
			defaultOptions: {
				// Animation duration
				duration: 200,
				// Animation timing function
				easing: {
					enter: ( x, t, b, c, d ) => {
						return ( c * Math.sin( t / d * ( Math.PI / 2 ) ) ) + b;
					},
					leave: ( x, t, b, c, d ) => {
						return ( -c * Math.cos( t / d * ( Math.PI / 2 ) ) ) + c + b;
					},
				},
				// External element when clicked hides all menus
				externalEl: $( '#primary' )[ 0 ], // Site Main
			},
		};
	};

	// Closure
	( function( { $siteHeader, $buttons, $containers, defaultOptions } ) {
		// Handle external click
		const handleExternalClick = ( { options } ) => {
			const { duration, easing, externalEl } = options;

			// Remove active states from all other buttons and containers
			$buttons.removeClass( 'is-active' );
			$buttons.attr( 'aria-expanded', false );
			$containers.slideUp( duration, easing.leave );

			// Remove external click event listener
			externalEl.removeEventListener( 'click', handleExternalClick );

			// Remove focus from search field
			const $searchField = $containers.find( '.search-field ' );
			if ( $searchField ) {
				$searchField.blur();
			}
		};

		const onExternalClick = () => {
			return handleExternalClick( { options: defaultOptions } );
		};

		// Show the navigation or search menu
		const showCurrentMenu = ( { $button, $container, options } ) => {
			const { duration, easing, externalEl } = options;

			// Remove active state from this button and container
			$button.addClass( 'is-active' );
			$button.attr( 'aria-expanded', true );
			$container.slideDown( duration, easing.enter );

			// Add focus to search field (if exists)
			const $searchField = $container.find( '.search-field ' );
			if ( $searchField ) {
				$searchField.focus();
			}

			// Add document event listener
			externalEl.addEventListener( 'click', onExternalClick );
		};

		// Hide the navigation or search menu
		const hideCurrentMenu = ( { $button, $container, options } ) => {
			const { duration, easing, externalEl } = options;

			// Add active state to this button and container
			$button.removeClass( 'is-active' );
			$button.attr( 'aria-expanded', false );
			$container.slideUp( duration, easing.leave );

			// Remove focus from search field (if exists)
			const $searchField = $container.find( '.search-field ' );
			if ( $searchField ) {
				$searchField.blur();
			}

			// Remove esternal click event listener
			externalEl.removeEventListener( 'click', onExternalClick );
		};

		// Hides all menus except current
		const hideAllMenusExceptCurrent = ( { $button, $container, options } ) => {
			const { duration, easing, externalEl } = options;

			// Remove active states from all other buttons and containers
			$buttons.not( $button ).removeClass( 'is-active' );
			$buttons.not( $button ).attr( 'aria-expanded', false );
			$containers.not( $container ).slideUp( duration, easing.leave );

			// Remove external click event listener
			externalEl.removeEventListener( 'click', onExternalClick );
		};

		// Handle button click (passive)
		$siteHeader.on( 'click', 'button[class*="toggle--"]', function( e ) {
			e.preventDefault();

			const $button = $( this );

			const current = {
				$button,
				$container: $siteHeader.find( `#${ $button.attr( 'aria-controls' ) }` ),
				options: defaultOptions,
			};

			// Hides all menus except current
			hideAllMenusExceptCurrent( current );

			// Hide or show the navigation or search menu
			if ( $button.hasClass( 'is-active' ) ) {
				hideCurrentMenu( current );
			} else {
				showCurrentMenu( current );
			}

			return false;
		} );
	}( sfeeNavigation() ) );
}( window.jQuery ) );
