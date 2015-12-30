<form role="search" method="get" class="search-form form-inline pull-right" action="<?php echo home_url( '/' ); ?>">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Texto a buscar</label>
    <input type="search" class="search-field form-control" id="exampleInputEmail3" placeholder="<?php echo esc_attr_x( 'Buscar …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </div>
  <input type="submit" class="search-submit btn btn-warning-outline" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>