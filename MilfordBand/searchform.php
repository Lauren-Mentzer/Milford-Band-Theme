<a id="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
<form action="/" method="get" id="searchForm">
    <div class="input-group">
        <input type="text" name="s" id="search" class="form-control" value="<?php the_search_query(); ?>" />
        <button class="btn btn-secondary" id="search-button" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
</form>
