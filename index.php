<?php
/////////////////////////////////////////////////
/// code được thực hiện bởi Trần Minh Quang   ///
/// vui lòng không xóa dòng này               ///
/// cảm ơn các bạn đã sử dụng bộ code nàyy    ///
/////////////////////////////////////////////////
?>
<?php 
require_once('TMQ/function.php'); 
if(caidat('baotri') == 1){
    header("Location: /baotri.php");
}
if($TMQ["ban"] == 1){
    header("Location: /block.php");
}
require_once('TMQ/head.php'); ?>
 
 
 
 <!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
    <div class="c-content-box">
		<div id="slider" class="owl-theme section section-cate slideshow_full_width ">
			<div id="slide_banner" class="owl-carousel">
			    <?php $smtp = $db->query("SELECT * FROM `TMQ_banner`");
			    foreach($smtp as $row){
			    ?> 
			    
									<div class="item">
						<a href="<?=$row['url'];?>" alt="<?=$row['title'];?>">
							<img src="<?=$row['image'];?>" alt="<?=$row['title'];?>">
						</a>
					</div>
    
<?php } ?>					
							</div>
		</div>
	</div>
<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<!-- Begin: Testimonals 1 component -->
		<div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
			<!-- Begin: Title 1 component -->
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-bold">Danh mục game</h3>
				<div class="c-line-center c-theme-bg"></div>
			</div>
			<div class="row row-flex-safari game-list">
							<?php
		$get_cm = $db->query("SELECT * FROM `TMQ_chuyenmuc` WHERE  `loaicm` = '1' AND `trangthai` = 'on'"); //lấy danh sách chuyên mục
foreach($get_cm as $cm){ //Chạy vòng lặp. Cái này giống while(....)
$tongsoacc = $db->query('SELECT * FROM `TMQ_baiviet` WHERE `loainick` = '.$cm['id'].' ')->rowcount();
$daban = $db->query('SELECT * FROM `TMQ_baiviet` WHERE `loainick` = '.$cm['id'].' AND `trangthai` = 0 ')->rowcount();
?>			
						<div class="col-sm-3 col-xs-6 p-5">
							<div class="classWithPad">
								<div class="news_image">
																			<a href="/<?php echo ''.xoa_dau($cm['ten']).'-'.$cm['id'].' '; ?>" title="<?=$cm['ten'];?>" class=""><img src="<?=$cm['img'];?>" alt="<?=$cm['ten'];?>"></a>
									

								</div>
								<div class="news_title">
									<h2>
																					<a href="/<?php echo ''.xoa_dau($cm['ten']).'-'.$cm['id'].' '; ?>" title="<?=$cm['ten'];?>"><?=$cm['ten'];?></a>
																			</h2>


								</div>
								<div class="news_description">
									<p>
										Số tài khoản: <?=number_format($tongsoacc);?>
									</p>
									<p>
										Đã bán: <?=number_format($daban);?>
									</p>
								
								</div>
								<div class="a-more">
									<div class="row">

										<div class="col-xs-12">
											<div class="view">
																									<a href="/<?php echo ''.xoa_dau($cm['ten']).'-'.$cm['id'].' '; ?>" title="<?=$cm['ten'];?>">Xem tất cả</a>
												

											</div>
										</div>

									</div>
								</div>


							</div>
						</div>
						<?php } ?>
					<!-- End-->
		</div>
		<!-- End-->
	</div>
</div>

<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<!-- Begin: Testimonals 1 component -->
		<div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
			<!-- Begin: Title 1 component -->
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-bold">Danh mục game random</h3>
				<div class="c-line-center c-theme-bg"></div>
			</div>
			<div class="row row-flex-safari game-list">
							<?php
		$get_cm = $db->query("SELECT * FROM `TMQ_chuyenmuc` WHERE `loaicm` = '2' AND `trangthai` = 'on'"); //lấy danh sách chuyên mục
foreach($get_cm as $cm){ //Chạy vòng lặp. Cái này giống while(....)
$tongsoacc = $db->query('SELECT * FROM `TMQ_baiviet` WHERE `loainick` = '.$cm['id'].' ')->rowcount();
$daban = $db->query('SELECT * FROM `TMQ_baiviet` WHERE `loainick` = '.$cm['id'].' AND `trangthai` = 0 ')->rowcount();
?>			
						<div class="col-sm-3 col-xs-6 p-5">
							<div class="classWithPad">
								<div class="news_image">
																			<a href="/<?php echo ''.xoa_dau($cm['ten']).'-'.$cm['id'].' '; ?>" title="<?=$cm['ten'];?>" class=""><img src="<?=$cm['img'];?>" alt="<?=$cm['ten'];?>"></a>
									

								</div>
								<div class="news_title">
									<h2>
																					<a href="/<?php echo ''.xoa_dau($cm['ten']).'-'.$cm['id'].' '; ?>" title="<?=$cm['ten'];?>"><?=$cm['ten'];?></a>
																			</h2>


								</div>
								<div class="news_description">
									<p>
										Số tài khoản: <?=number_format($tongsoacc);?>
									</p>
									<p>
										Đã bán: <?=number_format($daban);?>
									</p>
								
								</div>
								<div class="a-more">
									<div class="row">

										<div class="col-xs-12">
											<div class="view">
																									<a href="/<?php echo ''.xoa_dau($cm['ten']).'-'.$cm['id'].' '; ?>" title="<?=$cm['ten'];?>">Xem tất cả</a>
												

											</div>
										</div>

									</div>
								</div>


							</div>
						</div>
						<?php } ?>
					<!-- End-->
		</div>
		<!-- End-->
	</div>
</div>



</div></div></div>
<div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
</div>
<div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
<?=caidat('thongbao');?>
</div>
<div class="modal-footer">
<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div>
<style type="text/css">
    @media  only screen and (min-width: 768px){
        .row-flex-safari .classWithPad {
            height: 389px;
            max-height: 360px;
        }
    }
</style>
<script>

            $(document).ready(function(){
                if ($.cookie('noticeModal') != '1') {

                    $('#noticeModal').modal('show')
                    //show popup here

                    var date = new Date();
                    var minutes = 60*12;
                    date.setTime(date.getTime() + (minutes * 60 * 1000));
                    $.cookie('noticeModal', '1', { expires: date}); }
            });
        </script>

</div>
<?php require_once('TMQ/end.php'); ?>