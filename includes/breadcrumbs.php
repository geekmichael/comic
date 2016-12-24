<?php
function the_breadcrumb() {
    echo '当前位置：<a href="'.home_url().'" rel="nofollow">首页</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        //the_category(' &bull; ');
            if (is_single()) {
        //        echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;搜索结果... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}
