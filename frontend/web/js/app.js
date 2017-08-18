var $jq = jQuery.noConflict();

function showModal(id) {
	$jq('#' + id).modal('show');
}

$jq(function() {
	setTimeout(function() {
		$jq('body').removeClass('loading');
	}, 500);
});