// function find_page_number( element ) {
//   element.find('span').remove();
//   return parseInt( element.html() );
// }
//
// 	$(document).on( 'click', 'ul.pagination a', function( event ) {
// 		event.preventDefault();
// page = find_page_number( $(this).clone() );
//     $.ajax({
// 		url : load_posts.ajaxurl,
// 		type : 'post',
// 		data : {
// 			action : 'load_posts',
//       query_vars : load_posts.query_vars,
// 				page : page
// 		},
//     beforeSend: function() {
//   		$('#main').find( '.blogPost' ).remove();
//   		$('#content nav').remove();
//   		$(document).scrollTop();
//   		$('#main').append( '<div class="page-content" id="loader">Loading New Posts...</div>' );
//   	},
//   	success: function( html ) {
//       alert(html);
//   		$('#main #loader').remove();
//   		$('#main').append( html );
//   	}
// 	});
// 	})

jQuery(document).ready(function($) {

  $(document).on('click','.loadMore',function(){
    var _self = $(this)
    var page = _self.data('page')
    var newPage = page + 1
    var ajaxurl = _self.data('url')
    console.log(ajaxurl)

    $.ajax({
      url: ajaxurl,
      type: 'post',
      data: {
        page: page,
        action: 'addMorePosts',
      },
      error: function(rep) {
        console.log(rep)
      },
      success: function(rep) {
        _self.data('page', newPage)
        $('.lowerBlogRow').append(rep)
      }
    })
  })
})
