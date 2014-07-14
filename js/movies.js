function showMovies(movies) {
	if (movies != "") {
		$('#results').html(movies);
	} else {
		$('#results').html("No movie has been found!");
	}
}

function searchMovies() {
	$.post("movies.php",{title:$('#title').val(),gendre:$('#gendre').val()},showMovies);
};

function getClick() {
	$('#search').click(searchMovies);
};

$(document).ready(getClick);