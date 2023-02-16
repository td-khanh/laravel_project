<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
       <div class="section-bar clearfix">
          <div class="section-title">
             <span>Phim Hot</span>
          </div>
       </div>
       <section class="tab-content">
          <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
             <div class="halim-ajax-popular-post-loading hidden"></div>
             <div id="halim-ajax-popular-post" class="popular-post">
                @foreach($phimhot_sidebar as $key => $data)
                <div class="item post-37176">
                   <a href="{{route('movie',$data->slug)}}" title="{{$data->title}}">
                      <div class="item-link">
                         <img src="{{asset('/uploads/movie/'.$data->image)}}" class="lazy post-thumb" alt="{{$data->title}}" title="{{$data->title}}" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="{{$data->title}}">{{$data->title}}</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
                @endforeach
             </div>
          </div>
          <div class="section-bar clearfix">
            <div class="section-title">
               <span>Top Views</span>
               
            </div>
         </div>
         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-home" aria-selected="true">Ngày</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-profile" aria-selected="false">Tuần</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-contact" aria-selected="false">Tháng</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="day" role="tabpanel" aria-labelledby="day-tab">
                <div class="item post-37176">
                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                       <div class="item-link">
                          <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                          <span class="is_trailer">Trailer</span>
                       </div>
                       <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                    </a>
                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                    <div style="float: left;">
                       <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                       <span style="width: 0%"></span>
                       </span>
                    </div>
                 </div>
            </div>
            <div class="tab-pane fade" id="week" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="item post-37176">
                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                       <div class="item-link">
                          <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                          <span class="is_trailer">Trailer</span>
                       </div>
                       <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                    </a>
                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                    <div style="float: left;">
                       <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                       <span style="width: 0%"></span>
                       </span>
                    </div>
                 </div>
            </div>
            <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="item post-37176">
                    <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                       <div class="item-link">
                          <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                          <span class="is_trailer">Trailer</span>
                       </div>
                       <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                    </a>
                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                    <div style="float: left;">
                       <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                       <span style="width: 0%"></span>
                       </span>
                    </div>
                 </div>
            </div>
          </div>
       <div class="clearfix"></div>
    </div>
 </aside>