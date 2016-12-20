<?php
get_template_part( 'templates/header' );

if ( get_field( 'slides' ) ) {
	$slides = get_field('slides');
}else{
	$slides = array (
		array(
			'image' => array (
				'url'=>THEME_IMAGES_URI.'slideshow/slideshow_banner01.jpg',
				'width'=>680,
				'height'=>260,
				'alt'=>'示例图片',
				'mime_type'=>'image/jpeg',
			),
		),	);
}

?>
	<div class="popular">
		<span class="key">热血漫画：</span>
		<div class="value">
			<a href="#">火影忍者</a>
			<a href="#">火影忍者</a>
			<a href="#">火影忍者</a>
		</div>
	</div><!-- .popular -->
	<div class="hotspot">
		<div class="hotspot-slider">
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php foreach ( $slides as $key => $slide ): ?>
					<li <?php if ($key == 0): ?>class="active"<?php endif; ?> data-target="#carousel" data-slide-to="<?php echo esc_attr( $key ); ?>"></li>
					<?php endforeach; ?>
				</ol>
				<div class="carousel-inner">
					<?php foreach ( $slides as $key => $slide ): ?>
						<div class="item <?php if ( $key == 0 ): ?>active<?php endif; ?>">
							<img src="<?php echo esc_url( $slide['image']['url'] ); ?>" width="<?php echo esc_attr( $slide['image']['width'] ); ?>" height="<?php echo esc_attr( $slide['image']['height'] ); ?>" alt="<?php echo esc_attr( $slide['image']['alt'] ); ?>">
						</div>
					<?php endforeach; ?>
				</div>
			</div>		
		</div>
		<div class="hotspot-sidebar">
			<div class="ranking">
			<div class="head-wrap clearfix">
				<h2 class="green-title">推荐排行</h2>
			</div>
			<div class="list-wrap clear-margin">
				<div class="list-page" style="display: block;" data-hook="tab-section" tab-index="0">
					<div class="topone">
						<a href="#" class="pic-wrap" title="#" target="_blank">
							<img src="http://images.dmzj.com/webpic/1/onepunchmanfengmianl.jpg" class="pic">
							<span class="sort">1</span>
						</a>
						<div class="info-wrap">
							<a href="#" class="title" target="_blank">一拳超人</a>
							<p class="des">简介：光头男一拳解决各种不服</p>
						</div>
					</div>
					<div class="list">
						<a href="#" class="item" target="_blank">
							<span class="sort text-overflow high">2</span>
							<span class="title text-overflow">狐妖小红娘</span>
							<span class="des text-overflow">迷糊狐狸没节操</span>
						</a>
						<a href="#" class="item" target="_blank">
							<span class="sort text-overflow high">3</span>
							<span class="title text-overflow">狂野少女</span>
							<span class="des text-overflow">女生有那么一点点暴力</span>
						</a>
						<a href="#" class="item" target="_blank">
							<span class="sort text-overflow ">4</span>
							<span class="title text-overflow">妖精的尾巴</span>
							<span class="des text-overflow">少女露西得偿所愿加入了“妖精尾巴”的公会，随后，二男二女一猫的旅程就此展开……</span>
						</a>
						<a href="#" class="item" target="_blank">
							<span class="sort text-overflow ">5</span>
							<span class="title text-overflow">妖怪名单</span>
							<span class="des text-overflow">人狐千年之恋</span>
						</a>
						<a href="#" class="item" target="_blank">
							<span class="sort text-overflow ">6</span>
							<span class="title text-overflow">仙逆</span>
							<span class="des text-overflow">顺为凡逆则仙</span>
						</a>
						<a href="#" class="item" target="_blank">
							<span class="sort text-overflow ">7</span>
							<span class="title text-overflow">银之守墓人</span>
							<span class="des text-overflow">人民币玩家穿越到游戏</span>
						</a>
						<a href="#" class="item" target="_blank">
							<span class="sort text-overflow ">8</span>
							<span class="title text-overflow">斗破苍穹</span>
							<span class="des text-overflow">这是斗气的世界</span>
						</a>
						<a href="#" class="item" target="_blank">
							<span class="sort text-overflow ">9</span>
							<span class="title text-overflow">驭灵师</span>
							<span class="des text-overflow">我被丢到自己的漫画里啦</span>
						</a>
						<a href="http://www.hao123.com/manhua/detail/4057" class="item" target="_blank">
							<span class="sort text-overflow ">10</span>
							<span class="title text-overflow">姐姐的妄想日记</span>
							<span class="des text-overflow">10864</span>
						</a>
					</div><!-- .list -->
				</div><!-- .list-page -->
			</div><!-- .list-wrap -->
		</div><!-- .ranking -->
		</div><!-- .hotspot-sidebar -->
	</div><!-- .hotspot -->
	<div class="classify-box">
		<div class="classify-wrap">
			<div class="item first" monkey="shaixuanticai">
				<h3 class="title">按题材</h3>
				<div class="list">
					<a href="http://www.hao123.com/manhua/list/?cate=校园">校园</a>
					<a href="http://www.hao123.com/manhua/list/?cate=后宫">后宫</a>
					<a href="http://www.hao123.com/manhua/list/?cate=耽美">耽美</a>
					<a href="http://www.hao123.com/manhua/list/?cate=热血">热血</a>
					<a href="http://www.hao123.com/manhua/list/?cate=百合">百合</a>
					<a href="http://www.hao123.com/manhua/list/?cate=恐怖">恐怖</a>
					<a href="http://www.hao123.com/manhua/list/?cate=侦探">侦探</a>
					<a href="http://www.hao123.com/manhua/list/?cate=科幻">科幻</a>
					<a href="http://www.hao123.com/manhua/list/?cate=格斗">格斗</a>
					<a href="http://www.hao123.com/manhua/list/?cate=冒险">冒险</a>
					<a href="http://www.hao123.com/manhua/list/?cate=伪娘">伪娘</a>
					<a href="http://www.hao123.com/manhua/list/?cate=悬疑">悬疑</a>
					<a href="http://www.hao123.com/manhua/list/?cate=奇幻">奇幻</a>
				</div>
			</div>
			<div class="item second" monkey="shaixuandiyu">
				<h3 class="title">按地域</h3>
				<div class="list">
					<a href="http://www.hao123.com/manhua/list/?area=日本">日本</a>
					<a href="http://www.hao123.com/manhua/list/?area=韩国">韩国</a>
					<a href="http://www.hao123.com/manhua/list/?area=欧美">欧美</a>
					<a href="http://www.hao123.com/manhua/list/?area=内地">内地</a>
				</div>
			</div>
			<div class="item third" monkey="shaixuanstate">
				<h3 class="title">按状态</h3>
				<div class="list">
					<a href="http://www.hao123.com/manhua/list/?finish=连载中">连载中</a>
					<a href="http://www.hao123.com/manhua/list/?finish=已完结">已完结</a>
				</div>
			</div>
		</div>
		<a href="#" target="_blank" title="#" class="ad">
			<img src="http://s0.hao123img.com/res/img/moe/0605mengzhuye.jpg" alt="">
		</a>
	</div><!-- .classify-box -->
	<div class="comic-row">
		<div class="comic-section w930 pull-left">
			<div class="comic-section-head clearfix">
				<h2>热门漫画</h2>
				<div class="tab">
					<a href="#" class="item active" data-hook="tab-controller" tab-index="0">热门漫画</a>
					<a href="#" class="item" data-hook="tab-controller" tab-index="1">国内漫画</a>
					<a href="#" class="item" data-hook="tab-controller" tab-index="2">少女革命</a>
					<a href="#" class="item" data-hook="tab-controller" tab-index="3">日本漫画</a>
					<a href="#" class="item" data-hook="tab-controller" tab-index="4">福利漫画</a>
				</div>
			</div>
			<div class="comic-section-main">
				<div class="list-wrap">
					<div class="list-page" style="display: none;" data-hook="tab-section" tab-index="0" monkey="remennan">
						<a href="#" class="featured" target="_blank" title="龙域猎手">
						<img src="http://s0.hao123img.com/res/img/moe/1114mh3.jpg" alt="" class="pic">
						<span class="title">龙域猎手</span>
						<span class="des text-overflow">十六年前灭顶之灾的少年，竟和他的仇敌同行</span>
						</a>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/18096" class="pic-wrap" target="_blank" title="驭灵师">
							<img src="http://c-r5.sosobook.cn/logo/logo5/217885/201609301918/32h.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/18096" class="title" target="_blank">驭灵师</a>
							<p class="des">穿越到漫画里啦</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/11089" class="pic-wrap" target="_blank" title="大唐无双">
							<img src="http://easyread.nos.netease.com/pic20160912a4b1a3ff49b2454fb089649a4cb5b792.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/11089" class="title" target="_blank">大唐无双</a>
							<p class="des">穿越进游戏去打怪泡妞</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/13220" class="pic-wrap" target="_blank" title="唐寅在异界">
							<img src="http://images.dmzj.com/img/webpic/8/1006424881467035475.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/13220" class="title" target="_blank">唐寅在异界</a>
							<p class="des">用功夫称霸异世</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/8553" class="pic-wrap" target="_blank" title="尸界">
							<img src="http://easyread.nos.netease.com/pic/2016/07/25/9b473bace85c44b6ae3e61024946046b.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/8553" class="title" target="_blank">尸界</a>
							<p class="des">尸潮爆发，不杀就等被杀</p>
						</div>

						<a href="http://www.hao123.com/manhua/detail/11098" class="featured" target="_blank" title="战国武校">
						<img src="http://s0.hao123img.com/res/img/moe/1208mh3.jpg" alt="" class="pic">
						<span class="title">战国武校</span>
						<span class="des text-overflow">入学女校，欣赏妹子卖肉大乱斗！</span>
						</a>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/15783" class="pic-wrap" target="_blank" title="据说我是王的女儿">
							<img src="http://manhua.qpic.cn/manhua_cover/0/19_17_16_bbfa9fccb4166d3be1c33f0165fa4800.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/15783" class="title" target="_blank">据说我是王的女儿</a>
							<p class="des">丫头变公主</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/3577" class="pic-wrap" target="_blank" title="狐妖小红娘">
							<img src="http://manhua.qpic.cn/manhua_cover/0/14_22_57_7eaddcbe018f4c589050f680b8bd6dd2.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/3577" class="title" target="_blank">狐妖小红娘</a>
							<p class="des">迷糊萝莉小狐妖</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/3627" class="pic-wrap" target="_blank" title="家有鬼妻">
							<img src="http://manhua.qpic.cn/manhua_cover/0/03_00_53_3c2f861d653840d6c95c9f683a4d4571.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/3627" class="title" target="_blank">家有鬼妻</a>
							<p class="des">变成女鬼防止老公被抢</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/5323" class="pic-wrap" target="_blank" title="川灵物语">
							<img src="http://images.dmzj.com/img/webpic/4/1000992241462010694.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/5323" class="title" target="_blank">川灵物语</a>
							<p class="des">夜探校舍遇幽灵</p>
						</div>

						</div>
					<div class="list-page" data-hook="tab-section" tab-index="1" monkey="remennv" style="display: none;">
						<a href="http://www.hao123.com/manhua/detail/8619" class="featured" target="_blank" title="我才不会被女孩子欺负呢">
						<img src="http://s0.hao123img.com/res/img/moe/1010mh2.jpg" alt="" class="pic">
						<span class="title">我才不会被女孩子欺负呢</span>
						<span class="des text-overflow">暴虐我的少年竟是萌妹子，目睹这幕我惊呆了</span>
						</a>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/19208" class="pic-wrap" target="_blank" title="超自然大英雄">
							<img src="http://easyread.nos.netease.com/pic20161128551048ea69e24ed9b0796cb2608a9cf7.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/19208" class="title" target="_blank">超自然大英雄</a>
							<p class="des">黑暗种都是纸老虎</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/11126" class="pic-wrap" target="_blank" title="中国怪谈">
							<img src="http://easyread.nos.netease.com/pic201601252a5460095352498285abf551d4ba72ce.jpeg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/11126" class="title" target="_blank">中国怪谈</a>
							<p class="des">小智的一万种死法</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/5178" class="pic-wrap" target="_blank" title="仙侠世界">
							<img src="http://images.dmzj.com/img/webpic/10/1450758680.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/5178" class="title" target="_blank">仙侠世界</a>
							<p class="des">适者生存，强者主宰万界</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/7237" class="pic-wrap" target="_blank" title="罗刹大人请留步">
							<img src="http://manhua.qpic.cn/manhua_cover/0/20_16_04_be2565267923dcaf2a3c285f9c86909c.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/7237" class="title" target="_blank">罗刹大人请留步</a>
							<p class="des">魑魅魍魉开始涌入人间！</p>
						</div>

						<a href="http://www.hao123.com/manhua/detail/11169" class="featured" target="_blank" title="狐话狐说">
						<img src="http://s0.hao123img.com/res/img/moe/1031mh2.jpg" alt="" class="pic">
						<span class="title">狐话狐说</span>
						<span class="des text-overflow">选择困难！是要青梅竹马还是霸道狐王？</span>
						</a>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/6789" class="pic-wrap" target="_blank" title="妖神记">
							<img src="http://images.dmzj.com/img/webpic/4/1447215436.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/6789" class="title" target="_blank">妖神记</a>
							<p class="des">妖神一出，谁与争锋</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/132" class="pic-wrap" target="_blank" title="斗罗大陆">
							<img src="http://manhua.qpic.cn/manhua_cover/0/22_15_05_7f4fa72ecff8912e430b47273dff82d1.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/132" class="title" target="_blank">斗罗大陆</a>
							<p class="des">穿越异世武魂觉醒</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/137" class="pic-wrap" target="_blank" title="妖怪名单">
							<img src="http://manhua.qpic.cn/manhua_cover/0/24_14_01_5dc93d9ad1d02878f8246ec7cd210400.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/137" class="title" target="_blank">妖怪名单</a>
							<p class="des">女友是魅惑众生狐狸精</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/6604" class="pic-wrap" target="_blank" title="我家大师兄脑子有坑">
							<img src="http://images.dmzj.com/img/webpic/7/1002475871439187470.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/6604" class="title" target="_blank">我家大师兄脑子有坑</a>
							<p class="des">穿越没带主角光环怎么活</p>
						</div>
					</div>
					<div class="list-page" data-hook="tab-section" tab-index="2" monkey="remenxinfan" style="display: none;">
						<a href="http://www.hao123.com/manhua/detail/13233" class="featured" target="_blank" title="通灵妃">
						<img src="http://s0.hao123img.com/res/img/moe/1129mh1.jpg" alt="" class="pic">
						<span class="title">通灵妃</span>
						<span class="des text-overflow">身负异能大小姐调戏夜王府的小王爷</span>
						</a>
						<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/4230" class="pic-wrap" target="_blank" title="凤临天下-王妃十三岁">
						<img src="http://manhua.qpic.cn/manhua_cover/0/21_17_40_262395c393f1808362bdfac7b7e3026f.jpg/0" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/4230" class="title" target="_blank">凤临天下-王妃十三岁</a>
						<p class="des">女特种兵玩穿越</p>
						</div>

						<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/10743" class="pic-wrap" target="_blank" title="我的黑道男友">
						<img src="http://manhua.qpic.cn/manhua_cover/0/08_15_57_eda90f92b01529feab7d5225cccc27b2.jpg/0" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/10743" class="title" target="_blank">我的黑道男友</a>
						<p class="des">我被帅哥绑架了</p>
						</div>

						<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/12177" class="pic-wrap" target="_blank" title="豪门第一盛婚">
						<img src="http://manhua.qpic.cn/manhua_cover/0/22_17_19_b30db897d1886349aad0832fa6d93f07.jpg/0" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/12177" class="title" target="_blank">豪门第一盛婚</a>
						<p class="des">新婚小妻是个贼</p>
						</div>

						<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/3946" class="pic-wrap" target="_blank" title="最强邪少">
						<img src="http://manhua.qpic.cn/manhua_cover/0/18_14_38_692b51c993eed182f2de025f229de520.jpg/0" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/3946" class="title" target="_blank">最强邪少</a>
						<p class="des">这家伙竟然是个牛郎</p>
						</div>

						<a href="http://www.hao123.com/manhua/detail/8415" class="featured" target="_blank" title="今天开始做明星">
						<img src="http://s0.hao123img.com/res/img/moe/0511mh6.jpg" alt="" class="pic">
						<span class="title">今天开始做明星</span>
						<span class="des text-overflow">亲生姐姐不择手段改造弟弟成伪娘</span>
						</a>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/14986" class="pic-wrap" target="_blank" title="王牌校草">
							<img src="http://manhua.qpic.cn/manhua_cover/0/09_09_15_384061dbc725a0b755612e6a4bbd7856.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/14986" class="title" target="_blank">王牌校草</a>
							<p class="des">她看光了校草全身</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/11108" class="pic-wrap" target="_blank" title="讨喜笨王妃">
							<img src="http://easyread.nos.netease.com/pic20160704cf7b045ed04c49d999d8d814044fb38d.jpg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/11108" class="title" target="_blank">讨喜笨王妃</a>
							<p class="des">穿越古代成为王妃</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/3784" class="pic-wrap" target="_blank" title="拐个皇帝回现代">
							<img src="http://manhua.qpic.cn/manhua_cover/0/29_11_08_041ae665b5c22f647449af8b02ad674d.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/3784" class="title" target="_blank">拐个皇帝回现代</a>
							<p class="des">暴君接受现代妹子强悍改造</p>
						</div>

						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/11103" class="pic-wrap" target="_blank" title="纯情丫头火辣辣">
							<img src="http://easyread.nos.netease.com/pic201601256a5bc22916cc4c9899ef6b2415c8f22f.jpeg" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/11103" class="title" target="_blank">纯情丫头火辣辣</a>
							<p class="des">把黑道帅哥给上了</p>
						</div>
					</div>
					<div class="list-page" data-hook="tab-section" tab-index="3" monkey="" style="display: block;">
					<a href="http://www.hao123.com/manhua/detail/78" class="featured" target="_blank" title="我叫坂本我最屌">
					<img src="http://s0.hao123img.com/res/img/moe/0419rmbb04.jpg" alt="" class="pic">
					<span class="title">我叫坂本我最屌</span>
					<span class="des text-overflow">屌是不需要理由的</span>
					</a>
					<div class="thumb-list-item">
					<a href="http://www.hao123.com/manhua/detail/15460" class="pic-wrap" target="_blank" title="超人高中生们">
					<img src="http://images.dmzj.com/webpic/10/chaorengaozhongshengmenzaiyishijieyenenghuodefengshengshuiqi.jpg" alt="" class="pic">
					</a>
					<a href="http://www.hao123.com/manhua/detail/15460" class="title" target="_blank">超人高中生们</a>
					<p class="des">异界也能风生水起</p>
					</div>

					<div class="thumb-list-item">
					<a href="http://www.hao123.com/manhua/detail/5764" class="pic-wrap" target="_blank" title="辉夜大小姐想让我告白">
					<img src="http://images.dmzj.com/webpic/10/huiyedaxiaojiexin.jpg" alt="" class="pic">
					</a>
					<a href="http://www.hao123.com/manhua/detail/5764" class="title" target="_blank">辉夜大小姐想让我告白</a>
					<p class="des">天才们的恋爱头脑战</p>
					</div>

					<div class="thumb-list-item">
					<a href="http://www.hao123.com/manhua/detail/18233" class="pic-wrap" target="_blank" title="蛮娇姬友">
					<img src="http://c-r5.sosobook.cn/logo/logo5/217662/201603211030/32h.jpg" alt="" class="pic">
					</a>
					<a href="http://www.hao123.com/manhua/detail/18233" class="title" target="_blank">蛮娇姬友</a>
					<p class="des">大小姐爱上白丝女仆</p>
					</div>

					<div class="thumb-list-item">
					<a href="http://www.hao123.com/manhua/detail/12438" class="pic-wrap" target="_blank" title="汤摇庄的幽奈同学">
					<img src="http://images.dmzj.com/webpic/18/tangyaozhuangdeyounaitongxuefengmnianl.jpg" alt="" class="pic">
					</a>
					<a href="http://www.hao123.com/manhua/detail/12438" class="title" target="_blank">汤摇庄的幽奈同学</a>
					<p class="des">活色生香的肉欲享受</p>
					</div>

					<a href="http://www.hao123.com/manhua/detail/18255" class="featured" target="_blank" title="捏造trap–NTR-">
					<img src="http://s0.hao123img.com/res/img/moe/1019mh.png" alt="" class="pic">
					<span class="title">捏造trap–NTR-</span>
					<span class="des text-overflow">对温柔男友的愧疚，对抚摸的难以割舍...</span>
					</a>
					<div class="thumb-list-item">
					<a href="http://www.hao123.com/manhua/detail/16882" class="pic-wrap" target="_blank" title="我的老婆是伪娘">
					<img src="http://images.dmzj.com/webpic/0/wodelaoposhiweiniangV2.jpg" alt="" class="pic">
					</a>
					<a href="http://www.hao123.com/manhua/detail/16882" class="title" target="_blank">我的老婆是伪娘</a>
					<p class="des">绅士们最喜欢的老婆</p>
					</div>

					<div class="thumb-list-item">
					<a href="http://www.hao123.com/manhua/detail/5847" class="pic-wrap" target="_blank" title="恋爱禁止的世界">
					<img src="http://images.dmzj.com/webpic/15/lianaijinzhideshiji00e.jpg" alt="" class="pic">
					</a>
					<a href="http://www.hao123.com/manhua/detail/5847" class="title" target="_blank">恋爱禁止的世界</a>
					<p class="des">「恋爱」更禁忌</p>
					</div>

					<div class="thumb-list-item">
					<a href="http://www.hao123.com/manhua/detail/18924" class="pic-wrap" target="_blank" title="我老婆是学生会长">
					<img src="http://c-r5.sosobook.cn/logo/logo5/212259/201610111924/32h.jpg" alt="" class="pic">
					</a>
					<a href="http://www.hao123.com/manhua/detail/18924" class="title" target="_blank">我老婆是学生会长</a>
					<p class="des">没羞没臊的同居生活</p>
					</div>

					<div class="thumb-list-item">
					<a href="http://www.hao123.com/manhua/detail/18202" class="pic-wrap" target="_blank" title="现代魔女图鉴">
					<img src="http://c-r5.sosobook.cn/logo/logo5/211219/201610261511/32h.jpg" alt="" class="pic">
					</a>
					<a href="http://www.hao123.com/manhua/detail/18202" class="title" target="_blank">现代魔女图鉴</a>
					<p class="des">魔女要造福人类？</p>
					</div>

					</div>
					<div class="list-page" data-hook="tab-section" tab-index="4" monkey="" style="display: none;">
					<a href="http://www.hao123.com/manhua/detail/4860" class="featured" target="_blank" title="百万女神">
					<img src="http://s0.hao123img.com/res/img/moe/0623mh.jpg" alt="" class="pic">
					<span class="title">百万女神</span>
					<span class="des text-overflow">少女，成为人气主播！（LOL类电竞女王）</span>
					</a>
					<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/17223" class="pic-wrap" target="_blank" title="妙手小村医">
						<img src="http://manhua.qpic.cn/manhua_cover/0/10_19_47_8c8db33caa5b58c0628df06d258ec70b.jpg/0" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/17223" class="title" target="_blank">妙手小村医</a>
						<p class="des">被美腿吸引的村医</p>
					</div>

					<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/7094" class="pic-wrap" target="_blank" title="失禁少女">
						<img src="http://images.dmzj.com/webpic/17/shijinshaonvxin.jpg" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/7094" class="title" target="_blank">失禁少女</a>
						<p class="des">再也忍受不了啦！</p>
					</div>

					<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/15199" class="pic-wrap" target="_blank" title="第一次的Gal">
						<img src="http://images.dmzj.com/webpic/3/diyicidegal.jpg" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/15199" class="title" target="_blank">第一次的Gal</a>
						<p class="des">下跪向辣妹告白</p>
					</div>

					<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/15601" class="pic-wrap" target="_blank" title="我的内裤被盯上了">
							<img src="http://images.dmzj.com/webpic/0/wodeneikubeidingshangle.jpg" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/15601" class="title" target="_blank">我的内裤被盯上了</a>
						<p class="des">胖次被妹子盯上了</p>
					</div>

					<a href="http://www.hao123.com/manhua/detail/3850" class="featured" target="_blank" title="天娇联盟">
						<img src="http://s0.hao123img.com/res/img/moe/0612mh5.jpg" alt="" class="pic">
						<span class="title">天娇联盟</span>
						<span class="des text-overflow">无耻宅男偷窥妹子洗澡</span>
					</a>
					<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/11759" class="pic-wrap" target="_blank" title="玩坏我也没关系">
						<img src="http://images.dmzj.com/webpic/11/bawowanhuaiyemeiguanxi.jpg" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/11759" class="title" target="_blank">玩坏我也没关系</a>
						<p class="des">校花你太放得开了</p>
					</div>

					<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/14796" class="pic-wrap" target="_blank" title="恶魔姐姐">
						<img src="http://images.dmzj.com/webpic/17/160509emjj2.jpg" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/14796" class="title" target="_blank">恶魔姐姐</a>
						<p class="des">和姐姐玩羞羞的事</p>
					</div>

					<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/6076" class="pic-wrap" target="_blank" title="娇羞的她是长头妖怪">
						<img src="http://images.dmzj.com/webpic/13/jiaoxiudetashichangtouyaoguaiV2.jpg" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/6076" class="title" target="_blank">娇羞的她是长头妖怪</a>
						<p class="des">青梅竹马总是脸红呢</p>
					</div>

					<div class="thumb-list-item">
						<a href="http://www.hao123.com/manhua/detail/11790" class="pic-wrap" target="_blank" title="寄生少女">
						<img src="http://manhua.qpic.cn/manhua_cover/0/14_15_43_ef100d2e894c5fbc18b4126c4a4094fd.jpg/0" alt="" class="pic">
						</a>
						<a href="http://www.hao123.com/manhua/detail/11790" class="title" target="_blank">寄生少女</a>
						<p class="des">不良少年偶遇性感女鬼</p>
					</div>

					</div>
				</div><!-- .list-wrap -->
			</div><!-- .comic-section-main -->
		</div><!-- .comic-section w930 pull-left -->
		<div class="comic-sidebar">
			<div class="ranking ranking-light">
				<div class="head-wrap clearfix">
					<h2 class="title">漫画人气排行</h2>
					<div class="tab-wrap">
						<a href="javascript:;" class="item active" data-hook="tab-controller" tab-index="0">日</a>
						<a href="javascript:;" class="item" data-hook="tab-controller" tab-index="1">周</a>
						<a href="javascript:;" class="item" data-hook="tab-controller" tab-index="2">月</a>
						<a href="javascript:;" class="item" data-hook="tab-controller" tab-index="3">总</a>
					</div>
				</div>
				<div class="list-wrap">
					<div class="list-page" style="display: block;" data-hook="tab-section" tab-index="0" monkey="renqirankday">
						<div class="topone">
							<a href="http://www.hao123.com/manhua/detail/54" class="pic-wrap" target="_blank" title="一拳超人"><img src="http://images.dmzj.com/webpic/1/onepunchmanfengmianl.jpg" alt="" class="pic"><span class="sort">1</span></a>
							<div class="info-wrap">
								<a href="http://www.hao123.com/manhua/detail/54" class="title" target="_blank">一拳超人</a>
								<p class="info text-overflow">
									<span class="key">作者：</span><span class="value">村田雄介/ONE</span>
								</p>
								<p class="info text-overflow">
									<span class="key">分类：</span><span class="value"><a href="/manhua/list?cate=%E5%86%92%E9%99%A9" target="_blank">冒险</a><a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a></span>
								</p>
								<p class="info text-overflow">
									<span class="key">话数：</span><span class="value">105话</span>
								</p>
								<p class="info text-overflow">
									<span class="key">最新：</span><span class="value">2月1日</span>
								</p>
							</div>
						</div>
						<div class="list">
							<a href="http://www.hao123.com/manhua/detail/6604" class="item" target="_blank"><span class="sort text-overflow high">2</span><span class="title text-overflow">我家大师兄脑子有坑</span><span class="des text-overflow">40634</span></a><a href="http://www.hao123.com/manhua/detail/64" class="item" target="_blank"><span class="sort text-overflow high">3</span><span class="title text-overflow">大贵族</span><span class="des text-overflow">19924</span></a><a href="http://www.hao123.com/manhua/detail/6789" class="item" target="_blank"><span class="sort text-overflow ">4</span><span class="title text-overflow">妖神记</span><span class="des text-overflow">17841</span></a><a href="http://www.hao123.com/manhua/detail/4088" class="item" target="_blank"><span class="sort text-overflow ">5</span><span class="title text-overflow">魔王与勇者与圣剑神殿</span><span class="des text-overflow">15294</span></a><a href="http://www.hao123.com/manhua/detail/4074" class="item" target="_blank"><span class="sort text-overflow ">6</span><span class="title text-overflow">猫之茗</span><span class="des text-overflow">12883</span></a><a href="http://www.hao123.com/manhua/detail/4766" class="item" target="_blank"><span class="sort text-overflow ">7</span><span class="title text-overflow">赤赫血物语</span><span class="des text-overflow">12160</span></a><a href="http://www.hao123.com/manhua/detail/6023" class="item" target="_blank"><span class="sort text-overflow ">8</span><span class="title text-overflow">地板下的魔王大人</span><span class="des text-overflow">11919</span></a><a href="http://www.hao123.com/manhua/detail/7133" class="item" target="_blank"><span class="sort text-overflow ">9</span><span class="title text-overflow">头条都是他</span><span class="des text-overflow">11808</span></a><a href="http://www.hao123.com/manhua/detail/4057" class="item" target="_blank"><span class="sort text-overflow ">10</span><span class="title text-overflow">姐姐的妄想日记</span><span class="des text-overflow">10864</span></a>
						</div>
					</div>
					<div class="list-page" data-hook="tab-section" tab-index="1" monkey="renqirankweek" style="display: none;">
						<div class="topone">
							<a href="http://www.hao123.com/manhua/detail/54" class="pic-wrap" target="_blank" title="一拳超人"><img src="http://images.dmzj.com/webpic/1/onepunchmanfengmianl.jpg" alt="" class="pic"><span class="sort">1</span></a>
							<div class="info-wrap">
								<a href="http://www.hao123.com/manhua/detail/54" class="title" target="_blank">一拳超人</a>
								<p class="info text-overflow">
									<span class="key">作者：</span><span class="value">村田雄介/ONE</span>
								</p>
								<p class="info text-overflow">
									<span class="key">分类：</span><span class="value"><a href="/manhua/list?cate=%E5%86%92%E9%99%A9" target="_blank">冒险</a><a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a></span>
								</p>
								<p class="info text-overflow">
									<span class="key">话数：</span><span class="value">105话</span>
								</p>
								<p class="info text-overflow">
									<span class="key">最新：</span><span class="value">2月1日</span>
								</p>
							</div>
						</div>
						<div class="list">
							<a href="http://www.hao123.com/manhua/detail/6604" class="item" target="_blank"><span class="sort text-overflow high">2</span><span class="title text-overflow">我家大师兄脑子有坑</span><span class="des text-overflow">222256</span></a><a href="http://www.hao123.com/manhua/detail/64" class="item" target="_blank"><span class="sort text-overflow high">3</span><span class="title text-overflow">大贵族</span><span class="des text-overflow">115897</span></a><a href="http://www.hao123.com/manhua/detail/6789" class="item" target="_blank"><span class="sort text-overflow ">4</span><span class="title text-overflow">妖神记</span><span class="des text-overflow">91677</span></a><a href="http://www.hao123.com/manhua/detail/4088" class="item" target="_blank"><span class="sort text-overflow ">5</span><span class="title text-overflow">魔王与勇者与圣剑神殿</span><span class="des text-overflow">83197</span></a><a href="http://www.hao123.com/manhua/detail/4074" class="item" target="_blank"><span class="sort text-overflow ">6</span><span class="title text-overflow">猫之茗</span><span class="des text-overflow">67225</span></a><a href="http://www.hao123.com/manhua/detail/7133" class="item" target="_blank"><span class="sort text-overflow ">7</span><span class="title text-overflow">头条都是他</span><span class="des text-overflow">59359</span></a><a href="http://www.hao123.com/manhua/detail/4799" class="item" target="_blank"><span class="sort text-overflow ">8</span><span class="title text-overflow">唐山葬</span><span class="des text-overflow">58023</span></a><a href="http://www.hao123.com/manhua/detail/70" class="item" target="_blank"><span class="sort text-overflow ">9</span><span class="title text-overflow">元气少女缘结神</span><span class="des text-overflow">54213</span></a><a href="http://www.hao123.com/manhua/detail/4795" class="item" target="_blank"><span class="sort text-overflow ">10</span><span class="title text-overflow">勇者死了！是因为勇者掉进了作为村民的我挖的陷阱里</span><span class="des text-overflow">51565</span></a>
						</div>
					</div>
					<div class="list-page" data-hook="tab-section" tab-index="2" monkey="renqirankmonth" style="display: none;">
						<div class="topone">
							<a href="http://www.hao123.com/manhua/detail/54" class="pic-wrap" target="_blank" title="一拳超人"><img src="http://images.dmzj.com/webpic/1/onepunchmanfengmianl.jpg" alt="" class="pic"><span class="sort">1</span></a>
							<div class="info-wrap">
								<a href="http://www.hao123.com/manhua/detail/54" class="title" target="_blank">一拳超人</a>
								<p class="info text-overflow">
									<span class="key">作者：</span><span class="value">村田雄介/ONE</span>
								</p>
								<p class="info text-overflow">
									<span class="key">分类：</span><span class="value"><a href="/manhua/list?cate=%E5%86%92%E9%99%A9" target="_blank">冒险</a><a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a></span>
								</p>
								<p class="info text-overflow">
									<span class="key">话数：</span><span class="value">105话</span>
								</p>
								<p class="info text-overflow">
									<span class="key">最新：</span><span class="value">2月1日</span>
								</p>
							</div>
						</div>
						<div class="list">
							<a href="http://www.hao123.com/manhua/detail/6604" class="item" target="_blank"><span class="sort text-overflow high">2</span><span class="title text-overflow">我家大师兄脑子有坑</span><span class="des text-overflow">1320766</span></a><a href="http://www.hao123.com/manhua/detail/64" class="item" target="_blank"><span class="sort text-overflow high">3</span><span class="title text-overflow">大贵族</span><span class="des text-overflow">938358</span></a><a href="http://www.hao123.com/manhua/detail/6789" class="item" target="_blank"><span class="sort text-overflow ">4</span><span class="title text-overflow">妖神记</span><span class="des text-overflow">452810</span></a><a href="http://www.hao123.com/manhua/detail/6616" class="item" target="_blank"><span class="sort text-overflow ">5</span><span class="title text-overflow">只有我不在的街道</span><span class="des text-overflow">441560</span></a><a href="http://www.hao123.com/manhua/detail/4799" class="item" target="_blank"><span class="sort text-overflow ">6</span><span class="title text-overflow">唐山葬</span><span class="des text-overflow">390952</span></a><a href="http://www.hao123.com/manhua/detail/4074" class="item" target="_blank"><span class="sort text-overflow ">7</span><span class="title text-overflow">猫之茗</span><span class="des text-overflow">383697</span></a><a href="http://www.hao123.com/manhua/detail/4088" class="item" target="_blank"><span class="sort text-overflow ">8</span><span class="title text-overflow">魔王与勇者与圣剑神殿</span><span class="des text-overflow">371554</span></a><a href="http://www.hao123.com/manhua/detail/70" class="item" target="_blank"><span class="sort text-overflow ">9</span><span class="title text-overflow">元气少女缘结神</span><span class="des text-overflow">344296</span></a><a href="http://www.hao123.com/manhua/detail/4045" class="item" target="_blank"><span class="sort text-overflow ">10</span><span class="title text-overflow">一条狗</span><span class="des text-overflow">339253</span></a>
						</div>
					</div>
					<div class="list-page" data-hook="tab-section" tab-index="3" monkey="renqirankall" style="display: none;">
						<div class="topone">
							<a href="http://www.hao123.com/manhua/detail/54" class="pic-wrap" target="_blank" title="一拳超人"><img src="http://images.dmzj.com/webpic/1/onepunchmanfengmianl.jpg" alt="" class="pic"><span class="sort">1</span></a>
							<div class="info-wrap">
								<a href="http://www.hao123.com/manhua/detail/54" class="title" target="_blank">一拳超人</a>
								<p class="info text-overflow">
									<span class="key">作者：</span><span class="value">村田雄介/ONE</span>
								</p>
								<p class="info text-overflow">
									<span class="key">分类：</span><span class="value"><a href="/manhua/list?cate=%E5%86%92%E9%99%A9" target="_blank">冒险</a><a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a></span>
								</p>
								<p class="info text-overflow">
									<span class="key">话数：</span><span class="value">105话</span>
								</p>
								<p class="info text-overflow">
									<span class="key">最新：</span><span class="value">2月1日</span>
								</p>
							</div>
						</div>
						<div class="list">
							<a href="http://www.hao123.com/manhua/detail/11773" class="item" target="_blank"><span class="sort text-overflow high">2</span><span class="title text-overflow">伪恋</span><span class="des text-overflow">29323359</span></a><a href="http://www.hao123.com/manhua/detail/67" class="item" target="_blank"><span class="sort text-overflow high">3</span><span class="title text-overflow">只有神知道的世界</span><span class="des text-overflow">28848022</span></a><a href="http://www.hao123.com/manhua/detail/4045" class="item" target="_blank"><span class="sort text-overflow ">4</span><span class="title text-overflow">一条狗</span><span class="des text-overflow">21434592</span></a><a href="http://www.hao123.com/manhua/detail/69" class="item" target="_blank"><span class="sort text-overflow ">5</span><span class="title text-overflow">天降之物</span><span class="des text-overflow">21397869</span></a><a href="http://www.hao123.com/manhua/detail/70" class="item" target="_blank"><span class="sort text-overflow ">6</span><span class="title text-overflow">元气少女缘结神</span><span class="des text-overflow">20571297</span></a><a href="http://www.hao123.com/manhua/detail/58" class="item" target="_blank"><span class="sort text-overflow ">7</span><span class="title text-overflow">山田和七个魔女</span><span class="des text-overflow">20459841</span></a><a href="http://www.hao123.com/manhua/detail/71" class="item" target="_blank"><span class="sort text-overflow ">8</span><span class="title text-overflow">魔笛MAGI</span><span class="des text-overflow">18437054</span></a><a href="http://www.hao123.com/manhua/detail/56" class="item" target="_blank"><span class="sort text-overflow ">9</span><span class="title text-overflow">UQ HOLDER!</span><span class="des text-overflow">16962358</span></a><a href="http://www.hao123.com/manhua/detail/46" class="item" target="_blank"><span class="sort text-overflow ">10</span><span class="title text-overflow">狂野少女</span><span class="des text-overflow">14822062</span></a>
						</div>
					</div>
				</div>
			</div>
			<a href="http://haokan.baidu.com/school" target="_blank" title="网红养成" class="ad">
				<img src="http://s0.hao123img.com/res/img/moe/0623mht1.PNG" alt="">
			</a>
		</div><!-- .comic-sidebar -->
	</div><!-- .comic-row -->
	<div class="comic-row-ad">
		<h2>AD</h2>
	</div><!-- .comic-row-ad -->
	<div class="comic-row">
		<div class="comic-section w930 pull-left">
			<div class="comic-section-head clearfix">
				<h2>最近更新</h2>
			</div>
			<div class="comic-section-main">
				<div class="list-wrap">
					<div class="list-page">
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/4795" class="pic-wrap" target="_blank" title="勇者死了！">
							<img src="http://images.dmzj.com/webpic/9/yongzhesilexin.png" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/4795" class="title" target="_blank">勇者死了！</a>
							<p class="des text-overflow">
								作者：スバルイチ
							</p>
							<p class="des text-overflow">
								最新：74话
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/3959" class="pic-wrap" target="_blank" title="灵魂行者">
							<img src="http://manhua.qpic.cn/manhua_cover/0/04_16_25_e8d65c12b47791d6ba95692402763016.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/3959" class="title" target="_blank">灵魂行者</a>
							<p class="des text-overflow">
								作者：梦之旅人
							</p>
							<p class="des text-overflow">
								最新：第一百三十二话：金库
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/16526" class="pic-wrap" target="_blank" title="神笔马尚">
							<img src="http://manhua.qpic.cn/manhua_cover/0/01_15_54_1e30a847b10c3bf86a142b150c8af0ed.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/16526" class="title" target="_blank">神笔马尚</a>
							<p class="des text-overflow">
								作者：糖人家
							</p>
							<p class="des text-overflow">
								最新：20.大起大落
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/3605" class="pic-wrap" target="_blank" title="爷在江湖飘">
							<img src="http://manhua.qpic.cn/manhua_cover/0/12_17_49_5867f5682f1d11f6dcccc305337eb355.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/3605" class="title" target="_blank">爷在江湖飘</a>
							<p class="des text-overflow">
								作者：颜开文化
							</p>
							<p class="des text-overflow">
								最新：028 祸不单行 上
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/3864" class="pic-wrap" target="_blank" title="通天劫">
							<img src="http://manhua.qpic.cn/manhua_cover/0/18_05_18_3a1735c9aecb9cc4b5c1385f0cebb152.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/3864" class="title" target="_blank">通天劫</a>
							<p class="des text-overflow">
								作者：源梦工作室
							</p>
							<p class="des text-overflow">
								最新：第七十二话 结束
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/12144" class="pic-wrap" target="_blank" title="绅士魔王">
							<img src="http://manhua.qpic.cn/manhua_cover/0/31_17_01_8fa9792ed6beeeccceab13f6eee4ecb3.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/12144" class="title" target="_blank">绅士魔王</a>
							<p class="des text-overflow">
								作者：任祥
							</p>
							<p class="des text-overflow">
								最新：047 谁的梦（1）
							</p>
						</div>
					</div>
				</div>
			</div><!-- .comic-section-main -->
		</div><!-- .comic-section w930 pull-left -->
		<div class="comic-sidebar">
			<div class="ranking ranking-light">
				<div class="head-wrap clearfix">
					<h2 class="title">漫画更新表</h2>
				</div>
				<div class="list-wrap">
					<div class="list-page" style="display: block;">
						<div class="list">
							<a href="http://www.hao123.com/manhua/detail/16854" class="item" target="_blank">
							<span class="sort high text-overflow">1</span>
							<span class="title text-overflow">中之人基因组【实况中】</span>
							<span class="des text-overflow">第18话</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/19207" class="item" target="_blank">
							<span class="sort high text-overflow">2</span>
							<span class="title text-overflow">朋友登录</span>
							<span class="des text-overflow">第12话</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/10728" class="item" target="_blank">
							<span class="sort high text-overflow">3</span>
							<span class="title text-overflow">命格师</span>
							<span class="des text-overflow">第17话 分头行动2</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/19206" class="item" target="_blank">
							<span class="sort text-overflow">4</span>
							<span class="title text-overflow">噬龙蚁</span>
							<span class="des text-overflow">第10话</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/5003" class="item" target="_blank">
							<span class="sort text-overflow">5</span>
							<span class="title text-overflow">公交男女爆笑漫画</span>
							<span class="des text-overflow">682-机场里的痛哭</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/19205" class="item" target="_blank">
							<span class="sort text-overflow">6</span>
							<span class="title text-overflow">异世界和智能手机在一起</span>
							<span class="des text-overflow">第01话</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/15213" class="item" target="_blank">
							<span class="sort text-overflow">7</span>
							<span class="title text-overflow">Fate/ZERO</span>
							<span class="des text-overflow">第11卷</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/18603" class="item" target="_blank">
							<span class="sort text-overflow">8</span>
							<span class="title text-overflow">亚鲁欧似乎继承了蓝血</span>
							<span class="des text-overflow">第038话</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .comic-sidebar -->
	</div><!-- .comic-row -->
	<div class="comic-row">
		<div class="comic-section w930 pull-left">
			<div class="comic-section-head clearfix">
				<h2>精品长篇</h2>
			</div>
			<div class="comic-section-main">
				<div class="list-wrap">
					<div class="list-page">
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/4795" class="pic-wrap" target="_blank" title="勇者死了！">
							<img src="http://images.dmzj.com/webpic/9/yongzhesilexin.png" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/4795" class="title" target="_blank">勇者死了！</a>
							<p class="des text-overflow">
								作者：スバルイチ
							</p>
							<p class="des text-overflow">
								最新：74话
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/3959" class="pic-wrap" target="_blank" title="灵魂行者">
							<img src="http://manhua.qpic.cn/manhua_cover/0/04_16_25_e8d65c12b47791d6ba95692402763016.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/3959" class="title" target="_blank">灵魂行者</a>
							<p class="des text-overflow">
								作者：梦之旅人
							</p>
							<p class="des text-overflow">
								最新：第一百三十二话：金库
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/16526" class="pic-wrap" target="_blank" title="神笔马尚">
							<img src="http://manhua.qpic.cn/manhua_cover/0/01_15_54_1e30a847b10c3bf86a142b150c8af0ed.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/16526" class="title" target="_blank">神笔马尚</a>
							<p class="des text-overflow">
								作者：糖人家
							</p>
							<p class="des text-overflow">
								最新：20.大起大落
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/3605" class="pic-wrap" target="_blank" title="爷在江湖飘">
							<img src="http://manhua.qpic.cn/manhua_cover/0/12_17_49_5867f5682f1d11f6dcccc305337eb355.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/3605" class="title" target="_blank">爷在江湖飘</a>
							<p class="des text-overflow">
								作者：颜开文化
							</p>
							<p class="des text-overflow">
								最新：028 祸不单行 上
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/3864" class="pic-wrap" target="_blank" title="通天劫">
							<img src="http://manhua.qpic.cn/manhua_cover/0/18_05_18_3a1735c9aecb9cc4b5c1385f0cebb152.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/3864" class="title" target="_blank">通天劫</a>
							<p class="des text-overflow">
								作者：源梦工作室
							</p>
							<p class="des text-overflow">
								最新：第七十二话 结束
							</p>
						</div>
						<div class="thumb-list-item">
							<a href="http://www.hao123.com/manhua/detail/12144" class="pic-wrap" target="_blank" title="绅士魔王">
							<img src="http://manhua.qpic.cn/manhua_cover/0/31_17_01_8fa9792ed6beeeccceab13f6eee4ecb3.jpg/0" alt="" class="pic">
							</a>
							<a href="http://www.hao123.com/manhua/detail/12144" class="title" target="_blank">绅士魔王</a>
							<p class="des text-overflow">
								作者：任祥
							</p>
							<p class="des text-overflow">
								最新：047 谁的梦（1）
							</p>
						</div>
					</div>
				</div>
			</div><!-- .comic-section-main -->
		</div><!-- .comic-section w930 pull-left -->
		<div class="comic-sidebar">
			<div class="ranking ranking-light">
				<div class="head-wrap clearfix">
					<h2 class="title">完结漫画排行榜</h2>
				</div>
				<div class="list-wrap">
					<div class="list-page" style="display: block;">
						<div class="list">
							<a href="http://www.hao123.com/manhua/detail/16854" class="item" target="_blank">
							<span class="sort high text-overflow">1</span>
							<span class="title text-overflow">中之人基因组【实况中】</span>
							<span class="des text-overflow">第18话</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/19207" class="item" target="_blank">
							<span class="sort high text-overflow">2</span>
							<span class="title text-overflow">朋友登录</span>
							<span class="des text-overflow">第12话</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/10728" class="item" target="_blank">
							<span class="sort high text-overflow">3</span>
							<span class="title text-overflow">命格师</span>
							<span class="des text-overflow">第17话 分头行动2</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/19206" class="item" target="_blank">
							<span class="sort text-overflow">4</span>
							<span class="title text-overflow">噬龙蚁</span>
							<span class="des text-overflow">第10话</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/5003" class="item" target="_blank">
							<span class="sort text-overflow">5</span>
							<span class="title text-overflow">公交男女爆笑漫画</span>
							<span class="des text-overflow">682-机场里的痛哭</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/19205" class="item" target="_blank">
							<span class="sort text-overflow">6</span>
							<span class="title text-overflow">异世界和智能手机在一起</span>
							<span class="des text-overflow">第01话</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/15213" class="item" target="_blank">
							<span class="sort text-overflow">7</span>
							<span class="title text-overflow">Fate/ZERO</span>
							<span class="des text-overflow">第11卷</span>
							</a>
							<a href="http://www.hao123.com/manhua/detail/18603" class="item" target="_blank">
							<span class="sort text-overflow">8</span>
							<span class="title text-overflow">亚鲁欧似乎继承了蓝血</span>
							<span class="des text-overflow">第038话</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .comic-sidebar -->
	</div><!-- .comic-row -->
	<div class="comic-row">
		<div class="comic-section">
			<div class="comic-section-head clearfix">
				<h2>推荐必看</h2>
			</div>
		</div>
		<div class="comic-section-main">
			<div class="recommend-list">
				<div class="title-wrap">
					<h3 class="title">热烈推荐</h3>
				</div>
				<div class="flagged">
					<a href="http://www.hao123.com/manhua/detail/11773" class="pic-wrap" target="_blank" title="伪恋">
						<img src="http://images.dmzj.com/webpic/17/160726weilianfml.jpg" alt="" class="pic">
					</a>
					<div class="des">
						<a href="http://www.hao123.com/manhua/detail/11773" class="title">伪恋</a>
						<p class="info">
						<span class="grey999">作者：</span>
						<span class="grey666 clearfix">古味直志</span>
						</p>
						<p class="info">
						<span class="grey999">分类：</span>
						<span class="grey666">
						<a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a>&nbsp;<a href="/manhua/list?cate=%E7%88%B1%E6%83%85" target="_blank">爱情</a>&nbsp;</span>
						</p>
						<p class="info">
						<span class="grey999">简介：</span>
						<span class="grey666">想开后宫？泡妞要趁早</span>
						<a href="http://www.hao123.com/manhua/detail/11773" class="red" target="_blank">[阅读]</a>
						</p>
						<p class="info text-overflow">
						<span class="grey999">最新：</span>
						<span class="grey666" title="229话">229话</span>
						</p>
					</div>
				</div><!-- .featured -->
				<ul class="extra clearfix">
					<li><a href="http://www.hao123.com/manhua/detail/4785" target="_blank">变成那个她</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4818" target="_blank">邻居同居LDK</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/115" target="_blank">妖狐X仆SS</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6779" target="_blank">请与废柴的我谈恋爱</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/5858" target="_blank">黑鸟恋人</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4815" target="_blank"> 红发的白雪公主</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/57" target="_blank">妖精的尾巴</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4083" target="_blank">干物妹小埋</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8169" target="_blank">某科学的超电磁炮</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/114" target="_blank">白兔糖</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/53" target="_blank">我的英雄学院</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6336" target="_blank">境界的轮回</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4080" target="_blank">夏目友人帐</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/3734" target="_blank">后街女孩</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8013" target="_blank">打工吧魔王大人</a></li>
				</ul><!-- .extra -->
			</div><!-- .recommended -->
			<div class="recommend-list">
				<div class="title-wrap">
					<h3 class="title">热烈推荐</h3>
				</div>
				<div class="flagged">
					<a href="http://www.hao123.com/manhua/detail/11773" class="pic-wrap" target="_blank" title="伪恋">
						<img src="http://images.dmzj.com/webpic/17/160726weilianfml.jpg" alt="" class="pic">
					</a>
					<div class="des">
						<a href="http://www.hao123.com/manhua/detail/11773" class="title">伪恋</a>
						<p class="info">
						<span class="grey999">作者：</span>
						<span class="grey666 clearfix">古味直志</span>
						</p>
						<p class="info">
						<span class="grey999">分类：</span>
						<span class="grey666">
						<a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a>&nbsp;<a href="/manhua/list?cate=%E7%88%B1%E6%83%85" target="_blank">爱情</a>&nbsp;</span>
						</p>
						<p class="info">
						<span class="grey999">简介：</span>
						<span class="grey666">想开后宫？泡妞要趁早</span>
						<a href="http://www.hao123.com/manhua/detail/11773" class="red" target="_blank">[阅读]</a>
						</p>
						<p class="info text-overflow">
						<span class="grey999">最新：</span>
						<span class="grey666" title="229话">229话</span>
						</p>
					</div>
				</div><!-- .featured -->
				<ul class="extra clearfix">
					<li><a href="http://www.hao123.com/manhua/detail/4785" target="_blank">变成那个她</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4818" target="_blank">邻居同居LDK</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/115" target="_blank">妖狐X仆SS</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6779" target="_blank">请与废柴的我谈恋爱</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/5858" target="_blank">黑鸟恋人</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4815" target="_blank"> 红发的白雪公主</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/57" target="_blank">妖精的尾巴</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4083" target="_blank">干物妹小埋</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8169" target="_blank">某科学的超电磁炮</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/114" target="_blank">白兔糖</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/53" target="_blank">我的英雄学院</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6336" target="_blank">境界的轮回</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4080" target="_blank">夏目友人帐</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/3734" target="_blank">后街女孩</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8013" target="_blank">打工吧魔王大人</a></li>
				</ul><!-- .extra -->
			</div><!-- .recommended -->
			<div class="recommend-list">
				<div class="title-wrap">
					<h3 class="title">热烈推荐</h3>
				</div>
				<div class="flagged">
					<a href="http://www.hao123.com/manhua/detail/11773" class="pic-wrap" target="_blank" title="伪恋">
						<img src="http://images.dmzj.com/webpic/17/160726weilianfml.jpg" alt="" class="pic">
					</a>
					<div class="des">
						<a href="http://www.hao123.com/manhua/detail/11773" class="title">伪恋</a>
						<p class="info">
						<span class="grey999">作者：</span>
						<span class="grey666 clearfix">古味直志</span>
						</p>
						<p class="info">
						<span class="grey999">分类：</span>
						<span class="grey666">
						<a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a>&nbsp;<a href="/manhua/list?cate=%E7%88%B1%E6%83%85" target="_blank">爱情</a>&nbsp;</span>
						</p>
						<p class="info">
						<span class="grey999">简介：</span>
						<span class="grey666">想开后宫？泡妞要趁早</span>
						<a href="http://www.hao123.com/manhua/detail/11773" class="red" target="_blank">[阅读]</a>
						</p>
						<p class="info text-overflow">
						<span class="grey999">最新：</span>
						<span class="grey666" title="229话">229话</span>
						</p>
					</div>
				</div><!-- .featured -->
				<ul class="extra clearfix">
					<li><a href="http://www.hao123.com/manhua/detail/4785" target="_blank">变成那个她</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4818" target="_blank">邻居同居LDK</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/115" target="_blank">妖狐X仆SS</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6779" target="_blank">请与废柴的我谈恋爱</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/5858" target="_blank">黑鸟恋人</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4815" target="_blank"> 红发的白雪公主</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/57" target="_blank">妖精的尾巴</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4083" target="_blank">干物妹小埋</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8169" target="_blank">某科学的超电磁炮</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/114" target="_blank">白兔糖</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/53" target="_blank">我的英雄学院</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6336" target="_blank">境界的轮回</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4080" target="_blank">夏目友人帐</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/3734" target="_blank">后街女孩</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8013" target="_blank">打工吧魔王大人</a></li>
				</ul><!-- .extra -->
			</div><!-- .recommended -->
			<div class="recommend-list">
				<div class="title-wrap">
					<h3 class="title">热烈推荐</h3>
				</div>
				<div class="flagged">
					<a href="http://www.hao123.com/manhua/detail/11773" class="pic-wrap" target="_blank" title="伪恋">
						<img src="http://images.dmzj.com/webpic/17/160726weilianfml.jpg" alt="" class="pic">
					</a>
					<div class="des">
						<a href="http://www.hao123.com/manhua/detail/11773" class="title">伪恋</a>
						<p class="info">
						<span class="grey999">作者：</span>
						<span class="grey666 clearfix">古味直志</span>
						</p>
						<p class="info">
						<span class="grey999">分类：</span>
						<span class="grey666">
						<a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a>&nbsp;<a href="/manhua/list?cate=%E7%88%B1%E6%83%85" target="_blank">爱情</a>&nbsp;</span>
						</p>
						<p class="info">
						<span class="grey999">简介：</span>
						<span class="grey666">想开后宫？泡妞要趁早</span>
						<a href="http://www.hao123.com/manhua/detail/11773" class="red" target="_blank">[阅读]</a>
						</p>
						<p class="info text-overflow">
						<span class="grey999">最新：</span>
						<span class="grey666" title="229话">229话</span>
						</p>
					</div>
				</div><!-- .featured -->
				<ul class="extra clearfix">
					<li><a href="http://www.hao123.com/manhua/detail/4785" target="_blank">变成那个她</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4818" target="_blank">邻居同居LDK</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/115" target="_blank">妖狐X仆SS</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6779" target="_blank">请与废柴的我谈恋爱</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/5858" target="_blank">黑鸟恋人</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4815" target="_blank"> 红发的白雪公主</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/57" target="_blank">妖精的尾巴</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4083" target="_blank">干物妹小埋</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8169" target="_blank">某科学的超电磁炮</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/114" target="_blank">白兔糖</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/53" target="_blank">我的英雄学院</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6336" target="_blank">境界的轮回</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4080" target="_blank">夏目友人帐</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/3734" target="_blank">后街女孩</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8013" target="_blank">打工吧魔王大人</a></li>
				</ul><!-- .extra -->
			</div><!-- .recommended -->
			<div class="recommend-list">
				<div class="title-wrap">
					<h3 class="title">热烈推荐</h3>
				</div>
				<div class="flagged">
					<a href="http://www.hao123.com/manhua/detail/11773" class="pic-wrap" target="_blank" title="伪恋">
						<img src="http://images.dmzj.com/webpic/17/160726weilianfml.jpg" alt="" class="pic">
					</a>
					<div class="des">
						<a href="http://www.hao123.com/manhua/detail/11773" class="title">伪恋</a>
						<p class="info">
						<span class="grey999">作者：</span>
						<span class="grey666 clearfix">古味直志</span>
						</p>
						<p class="info">
						<span class="grey999">分类：</span>
						<span class="grey666">
						<a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a>&nbsp;<a href="/manhua/list?cate=%E7%88%B1%E6%83%85" target="_blank">爱情</a>&nbsp;</span>
						</p>
						<p class="info">
						<span class="grey999">简介：</span>
						<span class="grey666">想开后宫？泡妞要趁早</span>
						<a href="http://www.hao123.com/manhua/detail/11773" class="red" target="_blank">[阅读]</a>
						</p>
						<p class="info text-overflow">
						<span class="grey999">最新：</span>
						<span class="grey666" title="229话">229话</span>
						</p>
					</div>
				</div><!-- .featured -->
				<ul class="extra clearfix">
					<li><a href="http://www.hao123.com/manhua/detail/4785" target="_blank">变成那个她</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4818" target="_blank">邻居同居LDK</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/115" target="_blank">妖狐X仆SS</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6779" target="_blank">请与废柴的我谈恋爱</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/5858" target="_blank">黑鸟恋人</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4815" target="_blank"> 红发的白雪公主</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/57" target="_blank">妖精的尾巴</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4083" target="_blank">干物妹小埋</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8169" target="_blank">某科学的超电磁炮</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/114" target="_blank">白兔糖</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/53" target="_blank">我的英雄学院</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6336" target="_blank">境界的轮回</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4080" target="_blank">夏目友人帐</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/3734" target="_blank">后街女孩</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8013" target="_blank">打工吧魔王大人</a></li>
				</ul><!-- .extra -->
			</div><!-- .recommended -->
			<div class="recommend-list">
				<div class="title-wrap">
					<h3 class="title">热烈推荐</h3>
				</div>
				<div class="flagged">
					<a href="http://www.hao123.com/manhua/detail/11773" class="pic-wrap" target="_blank" title="伪恋">
						<img src="http://images.dmzj.com/webpic/17/160726weilianfml.jpg" alt="" class="pic">
					</a>
					<div class="des">
						<a href="http://www.hao123.com/manhua/detail/11773" class="title">伪恋</a>
						<p class="info">
						<span class="grey999">作者：</span>
						<span class="grey666 clearfix">古味直志</span>
						</p>
						<p class="info">
						<span class="grey999">分类：</span>
						<span class="grey666">
						<a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a>&nbsp;<a href="/manhua/list?cate=%E7%88%B1%E6%83%85" target="_blank">爱情</a>&nbsp;</span>
						</p>
						<p class="info">
						<span class="grey999">简介：</span>
						<span class="grey666">想开后宫？泡妞要趁早</span>
						<a href="http://www.hao123.com/manhua/detail/11773" class="red" target="_blank">[阅读]</a>
						</p>
						<p class="info text-overflow">
						<span class="grey999">最新：</span>
						<span class="grey666" title="229话">229话</span>
						</p>
					</div>
				</div><!-- .featured -->
				<ul class="extra clearfix">
					<li><a href="http://www.hao123.com/manhua/detail/4785" target="_blank">变成那个她</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4818" target="_blank">邻居同居LDK</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/115" target="_blank">妖狐X仆SS</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6779" target="_blank">请与废柴的我谈恋爱</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/5858" target="_blank">黑鸟恋人</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4815" target="_blank"> 红发的白雪公主</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/57" target="_blank">妖精的尾巴</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4083" target="_blank">干物妹小埋</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8169" target="_blank">某科学的超电磁炮</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/114" target="_blank">白兔糖</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/53" target="_blank">我的英雄学院</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6336" target="_blank">境界的轮回</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4080" target="_blank">夏目友人帐</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/3734" target="_blank">后街女孩</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8013" target="_blank">打工吧魔王大人</a></li>
				</ul><!-- .extra -->
			</div><!-- .recommended -->
			<div class="recommend-list">
				<div class="title-wrap">
					<h3 class="title">热烈推荐</h3>
				</div>
				<div class="flagged">
					<a href="http://www.hao123.com/manhua/detail/11773" class="pic-wrap" target="_blank" title="伪恋">
						<img src="http://images.dmzj.com/webpic/17/160726weilianfml.jpg" alt="" class="pic">
					</a>
					<div class="des">
						<a href="http://www.hao123.com/manhua/detail/11773" class="title">伪恋</a>
						<p class="info">
						<span class="grey999">作者：</span>
						<span class="grey666 clearfix">古味直志</span>
						</p>
						<p class="info">
						<span class="grey999">分类：</span>
						<span class="grey666">
						<a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a>&nbsp;<a href="/manhua/list?cate=%E7%88%B1%E6%83%85" target="_blank">爱情</a>&nbsp;</span>
						</p>
						<p class="info">
						<span class="grey999">简介：</span>
						<span class="grey666">想开后宫？泡妞要趁早</span>
						<a href="http://www.hao123.com/manhua/detail/11773" class="red" target="_blank">[阅读]</a>
						</p>
						<p class="info text-overflow">
						<span class="grey999">最新：</span>
						<span class="grey666" title="229话">229话</span>
						</p>
					</div>
				</div><!-- .featured -->
				<ul class="extra clearfix">
					<li><a href="http://www.hao123.com/manhua/detail/4785" target="_blank">变成那个她</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4818" target="_blank">邻居同居LDK</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/115" target="_blank">妖狐X仆SS</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6779" target="_blank">请与废柴的我谈恋爱</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/5858" target="_blank">黑鸟恋人</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4815" target="_blank"> 红发的白雪公主</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/57" target="_blank">妖精的尾巴</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4083" target="_blank">干物妹小埋</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8169" target="_blank">某科学的超电磁炮</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/114" target="_blank">白兔糖</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/53" target="_blank">我的英雄学院</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6336" target="_blank">境界的轮回</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4080" target="_blank">夏目友人帐</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/3734" target="_blank">后街女孩</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8013" target="_blank">打工吧魔王大人</a></li>
				</ul><!-- .extra -->
			</div><!-- .recommended -->
			<div class="recommend-list">
				<div class="title-wrap">
					<h3 class="title">热烈推荐</h3>
				</div>
				<div class="flagged">
					<a href="http://www.hao123.com/manhua/detail/11773" class="pic-wrap" target="_blank" title="伪恋">
						<img src="http://images.dmzj.com/webpic/17/160726weilianfml.jpg" alt="" class="pic">
					</a>
					<div class="des">
						<a href="http://www.hao123.com/manhua/detail/11773" class="title">伪恋</a>
						<p class="info">
						<span class="grey999">作者：</span>
						<span class="grey666 clearfix">古味直志</span>
						</p>
						<p class="info">
						<span class="grey999">分类：</span>
						<span class="grey666">
						<a href="/manhua/list?cate=%E6%AC%A2%E4%B9%90%E5%90%91" target="_blank">欢乐向</a>&nbsp;<a href="/manhua/list?cate=%E7%88%B1%E6%83%85" target="_blank">爱情</a>&nbsp;</span>
						</p>
						<p class="info">
						<span class="grey999">简介：</span>
						<span class="grey666">想开后宫？泡妞要趁早</span>
						<a href="http://www.hao123.com/manhua/detail/11773" class="red" target="_blank">[阅读]</a>
						</p>
						<p class="info text-overflow">
						<span class="grey999">最新：</span>
						<span class="grey666" title="229话">229话</span>
						</p>
					</div>
				</div><!-- .featured -->
				<ul class="extra clearfix">
					<li><a href="http://www.hao123.com/manhua/detail/4785" target="_blank">变成那个她</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4818" target="_blank">邻居同居LDK</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/115" target="_blank">妖狐X仆SS</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6779" target="_blank">请与废柴的我谈恋爱</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/5858" target="_blank">黑鸟恋人</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4815" target="_blank"> 红发的白雪公主</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/57" target="_blank">妖精的尾巴</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4083" target="_blank">干物妹小埋</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8169" target="_blank">某科学的超电磁炮</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/114" target="_blank">白兔糖</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/53" target="_blank">我的英雄学院</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/6336" target="_blank">境界的轮回</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/4080" target="_blank">夏目友人帐</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/3734" target="_blank">后街女孩</a></li>
					<li><a href="http://www.hao123.com/manhua/detail/8013" target="_blank">打工吧魔王大人</a></li>
				</ul><!-- .extra -->
			</div><!-- .recommended -->
		</div><!-- .comic-section-main -->
	</div><!-- .comic-row -->
	<div class="comic-row">
		<div class="comic-section">
			<div class="comic-section-head clearfix">
				<h2>精选专题</h2>
			</div>
		</div>
		<div class="comic-section-main">
			<div class="choice-box clearfix">
				<ul>
				<li>
					<a href="http://www.hao123.com/zt/Blood"target="_blank" title="热血专题">
						<img src="http://s0.hao123img.com/res/img/moe/1202mhzt.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.hao123.com/zt/Blood" target="_blank" title="热血专题">
						<img src="http://s0.hao123img.com/res/img/moe/1202mhzt.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.hao123.com/zt/xuanhuan" target="_blank" title="玄幻漫画专题">
						<img src="http://s0.hao123img.com/res/img/moe/0818zt2.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.hao123.com/zt/FFF" target="_blank" title="fff动漫专题">
						<img src="http://s0.hao123img.com/res/img/moe/1202mhzt1.jpg" alt="">
					</a>
				</li>
				<li class="clear-margin">
					<a href="http://www.hao123.com/zt/girlA" target="_blank" title="少女动漫专题">
						<img src="http://s0.hao123img.com/res/img/moe/0818zt4.jpg" alt="">
					</a>
				</li>
				</ul>
			</div>
		</div><!-- .comic-section-main -->
	</div>
<?php get_template_part( 'templates/footer' ); ?>