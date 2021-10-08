/**
 * RD Search
 * @param {object} options
 * @param {string|Element} options.output - search result output element
 * @param {string|Element} [options.input] - search input element
 * @param {string} [options.filter] - search files filtration
 * @param {string} [options.handler] - search request handler file
 * @param {string} [options.template] - search result markup template
 * @param {string} [options.mode] - 'live', 'submit'
 * @param {number} [options.minStrLength] - minimum live search string length for searching
 * @constructor
 */
function RDSearch ( options ) {
	// Check init conditions
	if ( !options.output ) {
		throw new Error( 'output is required parameter for RDSearch' );
	}

	// Merge defaults & options
	for ( let param in RDSearch.defaults ) {
		this[ param ] = ( typeof( options[ param ] ) !== 'undefined' )
			? options[ param ]
			: RDSearch.defaults[ param ];
	}

	if ( typeof( this.form ) === 'string' ) {
		this.form = document.querySelector( this.form );
	}

	if ( typeof( this.output ) === 'string' ) {
		this.output = document.querySelector( this.output );
	}

	this.input = this.form.querySelector( 'input[name="s"]' );
	this.form.RDSearch = this;

	if ( location.search ) {
		this.getResult( location.search );
	}

	if ( this.form ) {
		this.addHandlers();
	}
}

/**
 * Defaults
 * @type {object}
 */
RDSearch.defaults = {
	handler: 'bat/rd-search.php',
	filter: '*.html',
	template:
		`<h5 class="search-title"><a target="_top" href="#{href}" class="search-link">#{title}</a></h5>
		<p>...#{token}...</p>
		<p class="match"><em>Terms matched: #{count} - URL: #{href}</em></p>`,
	form: null,
	input: null,
	output: null,
	mode: null,
	liveResults: 5,
	minStrLength: 3 // Only with mode: live
};

/**
 * Add event listeners to search form and input
 */
RDSearch.prototype.addHandlers = function () {
	switch ( this.mode ) {
		case 'live':
			let timeoutId;

			this.input.addEventListener( 'focus', () => {
				if ( this.input.value.trim().length >= this.minStrLength ) {
					clearTimeout( timeoutId );
					this.output.classList.add( 'rd-search-show' );
				}
			});

			this.input.addEventListener( 'blur', () => {
				timeoutId = setTimeout( () => {
					this.output.classList.remove( 'rd-search-show' );
				}, 1500 );
			});

			this.output.addEventListener( 'mousemove', () => {
				clearTimeout( timeoutId );
				this.output.classList.add( 'rd-search-show' );
			});

			this.output.addEventListener( 'mouseleave', () => {
				timeoutId = setTimeout( () => {
					this.output.classList.remove( 'rd-search-show' );
				}, 1500 );
			});

			this.input.addEventListener( 'input', () => {
				if ( this.input.value.trim().length >= this.minStrLength ) {
					this.output.classList.add( 'rd-search-show' );
					this.getResult({ s: this.input.value });
				} else {
					this.output.classList.remove( 'rd-search-show' );
				}
			});
			break;

		case 'submit':
			this.form.addEventListener( 'submit', ( event ) => {
				event.preventDefault();
				this.getResult({ s: this.input.value });
			});
			break;
	}
};

/**
 * Output search results to the specified element
 * @param {object} params - valid object for URLSearchParams constructor
 */
RDSearch.prototype.getResult = function ( params ) {
	this.output.classList.add( 'rd-search-loading' );

	let
		xhr = new XMLHttpRequest(),
		req = new URLSearchParams( params );

	req.append( 'template', this.template );
	req.append( 'filter', this.filter );

	if ( this.mode === 'live' ) {
		req.append( 'liveSearch', true );
		req.append( 'liveCount', this.liveResults );
	}

	xhr.open( 'GET', this.handler +'?'+ req.toString(), true );

	xhr.onreadystatechange = ( event ) => {
		if( xhr.readyState === 4 && xhr.status === 200 ) {
			this.output.innerHTML = xhr.response;
			this.output.classList.remove( 'rd-search-loading' );
		}
	};

	xhr.send();
};
