
function chgVideo(yt_id){
	$('.main_vod .player').empty().append('<iframe src="https://www.youtube.com/embed/'+yt_id+'?rel=0;amp;autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
	$('.main_vod .button').hide();
}
