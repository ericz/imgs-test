/*! imgs.js build:0.0.4, development. Copyright(c) 2012 Eric Zhang <eric@ericzhang.com> MIT Licensed */
(function(exports){
/**
 * Light EventEmitter. Ported from Node.js/events.js
 * Eric Zhang
 */


var util = {
  inherits: function(ctor, superCtor) {
    ctor.super_ = superCtor;
    ctor.prototype = Object.create(superCtor.prototype, {
      constructor: {
        value: ctor,
        enumerable: false,
        writable: true,
        configurable: true
      }
    });
  },
  extend: function(dest, source) {
    for(var key in source) {
      if(source.hasOwnProperty(key)) {
        dest[key] = source[key];
      }
    }
    return dest;
  },
  info: console.log.bind(console),
  setZeroTimeout: (function(global) {
    var timeouts = [];
    var messageName = 'zero-timeout-message';

    // Like setTimeout, but only takes a function argument.	 There's
    // no time argument (always zero) and no arguments (you have to
    // use a closure).
    function setZeroTimeoutPostMessage(fn) {
      timeouts.push(fn);
      global.postMessage(messageName, '*');
    }		

    function handleMessage(event) {
      if (event.source == global && event.data == messageName) {
        if (event.stopPropagation) {
          event.stopPropagation();
        }
        if (timeouts.length) {
          timeouts.shift()();
        }
      }
    }
    if (global.addEventListener) {
      global.addEventListener('message', handleMessage, true);
    } else if (global.attachEvent) {
      global.attachEvent('onmessage', handleMessage);
    }
    return setZeroTimeoutPostMessage;
  }(this))
};


function ImgsClient(url, options) {

  var self = this;

  options = util.extend({}, options);
  
  this._client = new BinaryClient('ws://academyready.com:8085');
  
  this._client.on('open', function(){
    console.log('open');
  
    self._init();
  });
  
  this._client.on('stream', function(stream){
    
    stream.on('data', function(data){
      for(var i = 0,  ii = data.length; i < ii; i++) {
        var id = data[i].id;
        self._images[id].src = self._URL.createObjectURL(new Blob([data[i].data]));
      }
    });
  
  });
  
  
  this._cache = {};
  
  this._URL = (webkitURL || URL);
  
  this._images = {};
  
  // Image id generator
  this._imageId = 0;
  
  
};



ImgsClient.prototype._init = function(){
 // Initial load
  var imgs = document.getElementsByTagName('img');
  var data = [];
  for (var i = 0, ii = imgs.length; i < ii; i++) {
    var src;
    if(src = imgs[i].getAttribute('stream')) {
      var imageId = this._imageId++;
      var image = this._images[imageId] = imgs[i];
      var cached;
      if(cached = this._cache[src]) {
        image.src = cached;
      } else {
        data.push({src: src, id: imageId});
      }
    }
  }
  this._client.send(data,{type: 'request'});
};


exports.ImgsClient = ImgsClient;
})(this);
