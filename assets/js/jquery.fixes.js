(function($, window, document) {
  $.fn.andSelf = function() {
    return this.addBack.apply(this, arguments);
  }
})(window.jQuery, window, document);
