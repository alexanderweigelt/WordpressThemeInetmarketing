<form method="get" id="searchform" class="form-search form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="assistive-text hidden">Suche</label>
    <div class="form-group input-append">
        <input id="s"  class="form-control search-query" type="search" name="s" placeholder="Suchbegriff...">
        <button class="btn btn-default" name="submit" id="searchsubmit" type="submit"><span class="glyphicon glyphicon-search"></span> suchen</button>
    </div>
</form>