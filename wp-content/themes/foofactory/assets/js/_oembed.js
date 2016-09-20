import $ from 'jquery';
$('.oembed .placeholder.video').on('click', function(event) {
      $(this).addClass('playing');
      console.log($(this).find('iframe'));
      console.log($(this).data('videourl'));

       $(this).find('iframe').attr('src', $(this).data('videourl'));
});
