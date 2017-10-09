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
          beforeSend: function() {
        		$('.lowerBlogRow').append( '<div class="page-content" id="loader">Loading New Posts...</div>' );
            $('#loadMoreButton').hide();
        	},
      success: function(rep) {
        _self.data('page', newPage);
        $('.lowerBlogRow #loader').remove();
        $('.lowerBlogRow').append(rep);
        $('#loadMoreButton').show();
      }
    })
  })
})
