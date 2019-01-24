<div class="section feature">
  <div class="section-wrapper">
    <div class="feature-wrap">
      <a class="feature-section fadeIn" href="/index.php?page_id=4">
        <div class="feature-sectionGradation">
          <div class="feature-sectionWrap">
            <div class="feature-sectionTitle">
              <?php
              // $page_id = 801;
              $page_id = 4;
              $content = get_page($page_id);
              //タイトルの出力
              echo $content -> post_title;
              ?>
            </div>
            <div class="button button-ghost">詳細はこちら</div>
          </div>
        </div>
        <div class="feature-image">
          <?php
          $page_id = 801;
          // $page_id = 4;
          $content = get_page($page_id);
          //アイキャッチ（サムネイル）の取得
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_image_src($image_id, true);
          echo get_the_post_thumbnail($content->ID ,'large');
          ?>
        </div>
      </a>
      <a class="feature-section fadeIn" href="/index.php?page_id=16">
        <div class="feature-sectionGradation">
          <div class="feature-sectionWrap">
            <div class="feature-sectionTitle">
              <?php
              // $page_id = 801;
              $page_id = 16;
              $content = get_page($page_id);
              //タイトルの出力
              echo $content -> post_title;
              ?>
            </div>
            <div class="button button-ghost">詳細はこちら</div>
          </div>
        </div>
        <div class="feature-image">
          <?php
          $page_id = 801;
          // $page_id = 16;
          
          $content = get_page($page_id);
          //アイキャッチ（サムネイル）の取得
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_image_src($image_id, true);
          echo get_the_post_thumbnail($content->ID, 'large');
          ?>
        </div>
      </a>
    </div>
  </div>
</div>
