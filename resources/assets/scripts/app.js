/**
 * External Dependencies
 */
// import 'jquery';
// import 'bootstrap';

import 'provincial-v2/dist/main.js'
import 'typeahead.js/dist/typeahead.bundle.js'
import Bloodhound from 'typeahead.js/dist/bloodhound.js'

jQuery('.map-collapse').on( 'click', function(){
  jQuery(this).children().toggleClass('icofont-plus icofont-minus')
})

import React, { useState, useCallback } from "react";
import ReactDOM from "react-dom";
import Gallery from "react-photo-gallery";
import Carousel, { Modal, ModalGateway } from "react-images";

function App() {

  const element = document.getElementById("gallery");
  const photos = JSON.parse(element.dataset.photo);
  const direction = element.dataset.direction;

  const [currentImage, setCurrentImage] = useState(0);
  const [viewerIsOpen, setViewerIsOpen] = useState(false);

  const openLightbox = useCallback((event, { photo, index }) => {
    setCurrentImage(index);
    setViewerIsOpen(true);
  }, []);

  const closeLightbox = () => {
    setCurrentImage(0);
    setViewerIsOpen(false);
  };

  return (
    <div>
      <Gallery photos={photos} direction={direction} onClick={openLightbox} />
      <ModalGateway>
        {viewerIsOpen ? (
          <Modal onClose={closeLightbox}>
            <Carousel
              currentIndex={currentImage}
              views={photos.map(x => ({
                ...x,
                srcset: x.srcSet,
                caption: x.title
              }))}
            />
          </Modal>
        ) : null}
      </ModalGateway>
    </div>
  );
}
if ( document.getElementById("gallery") )
ReactDOM.render(<App />, document.getElementById("gallery"));

const Handlebars = require("handlebars")
jQuery('.search-typeahead').each( function(){
  var data = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: {
      url: this.dataset.apiurl,
      // cache: false,
      // ttl: 10000,
      transform: function( respose ) {
        let res = []
        for( let i of respose ) {
          res.push([i['title'],{title:i['title'],url:i['url']}])
        }
        return res
      }
    }
  })


  jQuery(this).typeahead( { 
    minLength: 0,
    highlight: true
  }, {
    name: 'service-json',
    display:'title',
    source: data,
    templates: {
      suggestion: Handlebars.compile('<p><a href="{{url}}">{{title}}</a></p>')
    },
    limit:10
  } )

  jQuery(this).bind('typeahead:select', function(ev, suggestion) {
    window.location = suggestion.url
  })

})
