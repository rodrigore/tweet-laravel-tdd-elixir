// var $ = require('jquery');

// $('#form').on('submit', function (e) {
//   e.preventDefault();

//   var $form = $(this);
//   var $errors = $('#errors')

//   var $promise = $.post($form.attr('action'), $form.serialize())

//   $promise.done(function(data) {
//     $errors.hide();
//   });

//   $promise.fail(function(data) {
//     var $ul = $errors.find('ul').first();

//     $.each(data.responseJSON, function(key, value) {
//       $ul.html('').append( $('<li>', {text: value}) );
//     });

//     $errors.show();
//   })

// })
// o

var angular = require('angular');

angular
.module('tweet', [])
.controller('ListController', function($http) {
  var vm = this;

  vm.data = [];
    $http
      .get('/api/tweets')
      .then(function(data){
        console.log('succes', data.data);
        vm.data = data.data;
      });
  });
