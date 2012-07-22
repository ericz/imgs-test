importScripts('binarypack.js', 'binary.js');  

var imgs = new ImgsClient('ws://academyready.com:8085');


self.onmessage = function (oEvent) {
  var data = oEvent.data;
  imgs.request(data);
};


function ImgsClient(url, images) {

  var self = this;
  
  // Start Binary.js server
  this._client = new BinaryClient(url);
  
  this._client.on('open', function(){
    self._init();
  });
  
  this._client.on('stream', function(stream, command){
    self._image(stream, command);
  });
  
  this._queue = [];
  this._URL = (webkitURL || URL);
  
};

ImgsClient.prototype.request = function(images){
  if(!this._request) {
    this._queue = this._queue.concat(images);
  } else {
    // Initial load
    for (var i = 0, ii = images.length; i < ii; i++) {
      var imageId = images[i].id;
      var src = images[i].src;
      this._request.write({type: 'image', src: src, id: imageId});   
    }
    throw new Error('all written');
  }
}

ImgsClient.prototype._init = function(){
  this._request = this._client.createStream({type: 'request'});
  this.request(this._queue);
};

ImgsClient.prototype._image = function(stream, command) {
  var self = this;
  var parts = [];
  
  stream.on('data', function(data){
    parts.push(data);
  });
  stream.on('end', function(){
    postMessage({id: command.id, src: command.src, data: self._createObjectURL(parts)});
  });
}

ImgsClient.prototype._createObjectURL = function(data){
  return this._URL.createObjectURL(new Blob(data));
};

