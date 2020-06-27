<form action="/" method="get" class="search">
    <i class="fas fa-search"></i>
    <input type="text" name="s" id="search" value="<?php the_search_query();?>" required>
    <button type="submit">Search</button>
</form>