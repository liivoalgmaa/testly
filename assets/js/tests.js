//removes my tests, takes id from the tests_index_view.php
function remove_test_ajax(id) {
//sends a request without content to the server(that initializes remove function)
	$.post(BASE_URL + "tests/remove/" + id)

//.done receives info required by .post and saves it into 'data'
		.done(function (data) {
			if (data == 'OK') {
				$('table#tests-table>tbody>tr#test' + id).remove();
				alert("Test kustutatud")
			}
			else {
				alert("Viga\n\nserver vastas:'" + data + "'.\n\nkontakteeru arendajaga");
			}

		}
	);

}
$(document).ready(function () {

	$('#add_test').click(function () {

		var elem = $(this).closest('#confirmOverlay');

		$.confirm({
			'buttons': {
				'Kinnita': {
					'class' : 'blue',
					'action': function add() {
						return $.ajax({type: 'post', name: 'test_name', dataType: 'json', url: BASE_URL + 'tests/add', async: false})
							.done(function (msg) {
							}).responseText
					}
				},
				'Loobu'  : {
					'class' : 'gray',
					'action': function () {
					} // Nothing to do in this case. You can as well omit the action property.
				}
			}
		});

	});

});

(function (cash) {

	$.confirm = function (params) {

		if ($('#confirmOverlay').length) {
			// A confirm is already shown on the page:
			return false;
		}

		var buttonHTML = '';
		$.each(params.buttons, function (name, obj) {

			// Generating the markup for the buttons:

			buttonHTML += '<a href="#" class="button ' + obj['class'] + '">' + name + '<span></span></a>';

			if (!obj.action) {
				obj.action = function () {
				};
			}
		});

		var markup = [
			'<div id="confirmOverlay">',
			'<div id="confirmBox">',
			'<center><h1>' + "Sisesta testi nimi: " + '</h1></center>',
			'<center><input type="text" name="test_name" ></center>',
			'<div id="confirmButtons">',
			buttonHTML,
			'</div></div></div>'
		].join('');

		$(markup).hide().appendTo('body').fadeIn();

		var buttons = $('#confirmBox .button'),
			i = 0;

		$.each(params.buttons, function (name, obj) {
			buttons.eq(i++).click(function () {

				// Calling the action attribute when a
				// click occurs, and hiding the confirm.

				obj.action();
				$.confirm.hide();
				return false;
			});
		});
	};

	$.confirm.hide = function remove() {
		$('#confirmOverlay').fadeOut(function () {
			$(this).remove();
		});

	};


})(jQuery);