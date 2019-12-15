var div = document.getElementById( "xss" );
var url = location.hash.substring(1);
var elm = document.createElement( "a" );
elm.setAttribute( "href", url );
elm.appendChild( document.createTextNode( url ) );
div.appendChild( elm );