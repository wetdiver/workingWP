( function( api ) {

	// Extends our custom "niwas-resort-hotel" section.
	api.sectionConstructor['niwas-resort-hotel'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );