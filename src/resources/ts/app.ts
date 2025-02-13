import $ from 'jquery';

console.log('jQuery is working!');

$(document).ready(function() {
  console.log('jQuery is working!');

  $('body').append('<p>Hello from TypeScript and jQuery!</p>');
  console.log('Hello from TypeScript and jQuery!');
});
