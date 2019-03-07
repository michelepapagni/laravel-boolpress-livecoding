
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function() {

    $.ajax({
        url: 'http://localhost:8000/ajax/posts',
        method: 'GET',
        success: function(data)
        {
            console.log(data);
        },
        error: function()
        {
            alert('Si è verificato un errore');
        }
    });

});
