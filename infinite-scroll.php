
<?php
    global $paged;
    if( empty( $paged ) ) $paged = 1;

    global $wp_query;
    $pages = $wp_query -> max_num_pages;
    if( !$pages ) {
        $pages = 1;
    }
    // 1ページしかない or 最後のページでは出力しない条件分岐をさせる
    if( $pages != 1 && $paged < $pages ) {
 ?>
    <div class="pagination-section-content">
        <div class="button button-ghost more-button" type="button">もっと見る</div>
    </div>
    
    <div class="scroller-status pagination-section-content" style="display:none;">
        <div class="infinite-scroll-request">
            <div class="loading"></div>
        </div>
        <!-- <p class="infinite-scroll-last">これ以上は記事がありません</p>
        <p class="infinite-scroll-error">読み込むページがありません</p> -->
    </div>

<?php } 
 ?>