
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$.ajaxSetup({
	headers: {
	    'X-CSRF-TOKEN': window.Laravel.csrfToken,
	}
});

$('.delete').on('click', function() {
	$.post({
        type: 'delete',
        url: this.href,
    }).done(function (data) {
        //alert('success');
        console.log(data);
    });

	return false;
});


//require('./jquery');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.


Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
 */