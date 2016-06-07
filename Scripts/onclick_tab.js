<script>
    $('#product-nav').on('click', 'a', function(event) {
          event.preventDefault();

          var $el = $(event.target).closest('a');
          var hash = $el.attr('href').split('#')[1];
          $('a[href="#' + hash + '"]').tab('show');
        })
</script> 
// just add a id to the dropdown menu