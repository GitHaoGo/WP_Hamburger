
<form class="search-icon" method="get" action="<?php echo esc_url(home_url()); ?>">
    <input type="search" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="キーワードを入力" class="search" name="s" id="s">
    <i class="fa fa-search"></i>
    <input type="submit" value="検索" class="search-btn">
</form>