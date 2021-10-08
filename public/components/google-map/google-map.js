

function SimpleGoogleMap ( data ) {
	( { node, markers, ...params } = data );
	node.simpleGoogleMap = this;
	this.node = node;
	this.markers = markers;
	this.params = params;
	this.geocoder = new google.maps.Geocoder();

	if ( typeof( this.params.center ) === 'string' ) {
		this.map = new google.maps.Map( this.node, { ...this.params, center: { lat: 0, lng: 0 } } );
		this.setCenter( this.params.center );
	} else {
		this.map = new google.maps.Map( this.node, this.params );
	}

	this.procMarkers();

	return this;
}

SimpleGoogleMap.prototype.setCenter = function ( str ) {
	this.getPosition( str, ( function ( position ) {
		this.params.center = position;
		this.map.setCenter( this.params.center );
	}).bind( this ));
};

SimpleGoogleMap.prototype.procMarkers = function () {
	if ( this.markers instanceof Object && Object.getOwnPropertyNames( this.markers ).length > 0 ) {
		for ( let id in this.markers ) {
			let marker = this.markers[ id ];

			if ( typeof( marker.position ) === 'string' ) {
				this.getPosition( marker.position, ( function ( position ) {
					marker.position = position;
					this.setMarker( id );
				}).bind( this ));
			} else {
				this.setMarker( id );
			}
		}
	}
};

SimpleGoogleMap.prototype.setMarker = function ( id ) {
	let marker = this.markers[id];

	marker.instance = new google.maps.Marker({
		map: this.map,
		...marker
	});

	if ( marker.html ) {
		marker.info = new google.maps.InfoWindow({
			content: marker.html
		});

		marker.instance.addListener( 'click', ( function() {
			for ( let key in this.markers ) {
				if ( typeof( this.markers[key].info ) !== 'undefined' ) {
					this.markers[ key ].info.close();
				}
			}

			marker.info.open( this.map, marker.instance );
		}).bind( this ));
	}
};

SimpleGoogleMap.prototype.addMarker = function ( id, params ) {
	let marker = this.markers[id] = params;

	if ( typeof( marker.position ) === 'string' ) {
		this.getPosition( marker.position, ( function ( position ) {
			marker.position = position;
			this.setMarker( id );
		}).bind( this ));
	} else {
		this.setMarker( id );
	}
};

SimpleGoogleMap.prototype.delMarker = function ( id ) {
	this.markers[id].instance.setMap( null );
	delete this.markers[id];
};

SimpleGoogleMap.prototype.hideMarker = function ( id ) {
	this.markers[id].instance.setMap( null );
};

SimpleGoogleMap.prototype.showMarker = function ( id ) {
	this.markers[id].instance.setMap( this.map );
};

SimpleGoogleMap.prototype.getPosition = function ( str, cb ) {
	this.geocoder.geocode( { address: str }, ( function( results, status ) {
		if ( status === 'OK' ) {
			cb( results[0].geometry.location );
		} else if ( status === 'OVER_QUERY_LIMIT' ) {
			setTimeout( this.getPosition.bind( this, str, cb ), 1000 );
		} else {
			console.warn( status, str );
		}
	}).bind( this ));
};

SimpleGoogleMap.prototype.showInfo = function ( id ) {
	for ( let key in this.markers ) {
		if ( typeof( this.markers[key].info ) !== 'undefined' ) {
			this.markers[key].info.close();
		}
	}

	if ( typeof( this.markers[ id ] ) !== 'undefined' ) {
		this.markers[ id ].info.open( this.map, this.markers[ id ].instance );
	}
};

SimpleGoogleMap.prototype.search = function ( str ) {
	for ( let id in this.markers ) this.delMarker( id );

	this.getPosition( str, ( function ( position ) {
		this.map.setCenter( position );
		this.addMarker( str, { position: position } );
	}).bind( this ));
};

SimpleGoogleMap.prototype.filter = function ( tags ) {
	let
		ids = Object.getOwnPropertyNames( this.markers ),
		filtered = [];

	if ( tags.includes( '*' ) ) {
		filtered = ids;
	} else {
		filtered = ids.filter( ( function( id ) {
			let marker = this.markers[id];
			for ( let i = 0; i < marker.tags.length; i++ ) if ( tags.includes( marker.tags[i] ) ) return true;
			return false;
		}).bind( this ));
	}

	for ( let id in this.markers ) {
		if ( filtered.includes( id ) ) this.showMarker( id );
		else this.hideMarker( id );
	}
};
