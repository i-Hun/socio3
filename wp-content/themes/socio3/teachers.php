<?php
/*
Template Name: Teachers
*/
get_header("post"); ?>
<style type="text/css">
	.boxgrid{
		width: 210px; 
		height: 280px; 
		border: solid 1px #e6e6db; 
		overflow: hidden; 
		position: relative; 
		margin:0 auto;
	}
		.boxgrid img{ 
			position: absolute; 
			top: 0; 
			left: 0; 
			border: 0; 
		}
		.boxgrid h4{ 
			line-height:23px;
			text-align:center;
			margin: 5px 10px 10px 10px;
			color: #fff;
			font-size:18px;
			font-weight: 100;
		}
		
		.boxgrid h5{
			text-align:center;					
			color:#eee; 
			font-size:16px;
			margin-top:-10px;
			margin-left:15px;
			font-weight: 100;
		}
		.boxgrid p{ 
			text-align:center;	
			font-weight:bold; 					
			font-size:16px;
			line-height:25px;
			font-weight: 100;
		}

	.cover{ 
		float: left; 
		position: absolute; 
		background:rgba(0,0,0,0.65);
		border-top:0px solid #fff;
		box-shadow: 0 0 2px 0px #000;
		height: 280px; 
		width: 100%; 
		/* For IE 5-7 */
		filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=90);
		/* For IE 8 */
		-MS-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";

		top: 225px;
		left: 0;
	}

	.divide {
		height: 35px;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		
		
		$('.boxgrid').hover(function(){
			$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
		}, function() {
			$(".cover", this).stop().animate({top:'225px'},{queue:false,duration:160});
		});
	});
</script>

<!-- Row for main content area -->
	
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="large-3 columns post_info">
		<div class="page_nav">
		<?php
			  if($post->post_parent)
			  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			  else
			  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
			  if ($children) { ?>
			  <ul >
			  <?php echo $children; ?>
			  </ul>
		  <?php } ?>
		  <?php echo $cfs->get('rich_text'); ?>
		</div>
	</div>
	<div class="small-12 large-9 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">

				<div class="section-container tabs" data-section="tabs">
					<section class="active">
						<p class="title " data-section-title><a href="#news">Штатные</a></p>
						<div class="content" data-section-content>

							<div class="row">
								<div class="large-4 small-12 columns">
									<div class="boxgrid">
										<img class="teacher-photo" src="/wp-content/img/teachers/ia.jpg" alt="Огородникова Ирина Анатольевна" />
										<div class="cover">
											<h4>Огородникова Ирина Анатольевна</h4>
											<h5>Заведующая кафедрой</h5>
											<p>	
												<a class="nice small radius secondary button" href="http://socio.omsu.ru/?page_id=109#nice1">Дисциплины »</a>
												<a href="mailto:ogorodnikova.irina@gmail.com" >ogorodnikova.irina<br>@gmail.com</a>
											</p>
										</div>
									</div>
								</div>
								<div class="large-4 small-12 columns">
									<div class="boxgrid ">
										<img src="/wp-content/img/teachers_old/user-woman.png" width="210" align="left">
										<div class="cover">
											<h4>Багно Ирина Геннадьевна</h4>
											<h5>Доцент, кандидат философских наук.</h5>
											<p>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=189#nice1">Дисциплины »</a>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=189#nice2" >Публикации »</a>
											</p>
										</div>
									</div>
								</div>

								<div class="large-4 small-12 columns">
									<div class="boxgrid ">
										<img src="/wp-content/img/teachers_old/varova.png" height="280" width="210" align="left">
										<div class="cover">
											<h4>Варова Наталья Леонидовна</h4>
											<h5>Доцент, кандидат философских наук.</h5>
											<p>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=200#nice1">Дисциплины »</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="hide-for-small divide"></div>
							<div class="row">
								<div class="large-4 small-12 columns">
									<div class="boxgrid ">
										<img src="/wp-content/img/teachers_old/user-man.png" height="280" width="210" align="left">
										<div class="cover">
											<h4>Деревянченко Юрий Иванович</h4>
											<h5>Доцент, кандидат философских наук.</h5>
										</div>
									</div>
								</div>
								<div class="large-4 small-12 columns">
									<div class="boxgrid ">
										<img src="/wp-content/img/teachers/kv.jpg" width="210" alt="Павленко Ксения Викторовна" align="left">
										<div class="cover">
											<h4>Павленко Ксения Викторовна</h4>
											<h5>Доцент, кандидат социологических наук.</h5>
											<p>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=212#nice1">Дисциплины »</a>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=212#nice2" >Публикации »</a>
												<a href="mailto:pavlenko.ks@gmail.com" >pavlenko.ks@gmail.com</a>
											</p>
										</div>
									</div>
								</div>
								<div class="large-4 small-12 columns">
									<div class="boxgrid ">
										<img src="/wp-content/img/teachers_old/pautova.jpg" width="210" align="left">
										<div class="cover">
											<h4>Паутова Лариса Александровна</h4>
											<h5>Доцент, Доктор социологических наук.</h5>
											<p>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=193#nice1">Дисциплины »</a>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=193#nice2" >Публикации »</a>
												<a href="mailto:pautova@fom.ru">pautova@fom.ru</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="hide-for-small divide"></div>
							<div class="row">
								<div class="large-4 small-12 columns">
									<div class="boxgrid ">
										<img src="/wp-content/img/teachers/mv.jpg" height="280" width="210" align="left">
										<div class="cover">
											<h4>Озерова Мария Викторовна</h4>
											<h5>Старший преподаватель</h5>
											<p>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=215#nice1">Дисциплины »</a>
												<a  class="nice small radius secondary button" href="http://socio.omsu.ru/?page_id=215#nice2">Публикации »</a>
												<a href="mailto:mary_erof@mail.ru" >mary_erof@mail.ru</a>
											</p>
										</div>
									</div>
								</div>
								<div class="large-4 small-12 columns">
									<div class="boxgrid ">
										<img src="/wp-content/img/teachers/sk.jpg" height="280" width="210" align="left">
										<div class="cover">
											<h4>Бекова Сауле Каэржановна</h4>
											<h5>Преподаватель</h5>
											<p>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=218#nice1">Дисциплины »</a>
												<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=218#nice2">Публикации »</a>
												<a href="mailto:bekova.sk@gmail.com" >bekova.sk@gmail.com</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section>
						<p class="title" data-section-title><a href="#events">Совместители</a></p>
						<div class="content" data-section-content>
							<div style="float: left; width: 45%;">
								<h4>Агарков Анатолий Александрович</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
								<p>Дисциплины:</p>
								<ul>
									<li>Политическая социология</li>
								</ul>
							</div>
							<div style="float: right; width: 45%;">
								<h4>Бондаренко Игорь Александрович</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
								<h5>Доктор философских наук, профессор кафедры философии ОмГУ</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Спецеминар: Методология социологии</li>
									<li>История и методология социология</li>
									<li>Современные социологические теории</li>
								</ul>
							</div>
							<div style="clear: both;"> </div>
							
							
							<div style="float: left; width: 45%;">
								<h4>Волкова Ирина Витальевна</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers/volkova.jpg" width="100" alt="" align="left">
								<h5>Информационно-консалтинговая компания «Универсал-Информ»</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Демография</li>
								</ul>
							</div>
							<div style="float: right; width: 45%;">
								<h4>Вольвач Владимир Григорьевич</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
								<h5>Кандидат социологических наук, доцент кафедры управления ОмЭИ</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Социология журналистики</li>
								</ul>
							</div>
							<div style="clear: both;"> </div>
							
							<div style="float: left; width: 45%;">
								<h4>Городецкая Ольга Александровна</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
								<h5>ООО «УК «Сладуница», бренд-менеджер</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Социология</li>
								</ul>
							</div>
							<div style="float: right; width: 45%;">
								<h4>Данилов Вячеслав Леонидович</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
								<h5>Доктор философских наук, доцент кафедры истории и теории религии ОмГУ</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Социология религии</li>
								</ul>
							</div>
							
							<div style="clear: both;"> </div>
							
							<div style="float: left; width: 45%;">
								<h4>Дьяченко Дмитрий Григорьевич</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
								<h5>БУ ОО "Региональный центр по связям с общественностью", социолог</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Социология массовой коммуникации</li>
								</ul>
							</div>
							<div style="float: right; width: 45%;">
								<h4>Ефименко Евгений Николаевич</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
								<h5>Кандидат исторических наук, доцент кафедры всеобщей истории ОмГУ</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>История зарубежной социологии</li>
								</ul>
							</div>
							
							<div style="clear: both;"> </div>
							
							<div style="float: left; width: 45%;">
								<h4>Корусенко Светлана Николаевна</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
								<h5>Кандидат исторических наук, доцент кафедры этнографии и музееведения ОмГУ</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Социальная антропология</li>
								</ul>
							</div>
							<div style="float: right; width: 45%;">
								<h4>Лореш Максим Андреевич</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/loresh.jpg" width="100" alt="" align="left">
								<h5>ОмГТУ, доцент</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Количественные методы анализа и обработки данных</li>
								</ul>
							</div>
							
							<div style="clear: both;"> </div>
							
							<div style="float: left; width: 45%;">
								<h4>Малеева Галина Михайловна</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
								<h5> ОмГТУ, старший преподаватель</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Социология</li>
								</ul>
							</div>
							<div style="float: right; width: 45%;">
								<h4>Назаренко Юрий Александрович</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/ua.png" width="100" alt="" align="left">
								<h5>БУ ООО «Региональный центр по связям с общественностью», первый зам. директора</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Методология и методика социологического исследования</li>
								</ul>
							</div>
							
							<div style="clear: both;"> </div>
							
							<div style="float: left; width: 45%;">
								<h4>Ромашова Инна Петровна</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
								<h5>Кандидат филологических наук, доцент кафедры теоретической и прикладной лингвистики ОмГУ</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Практикум обучения</li>
								</ul>
							</div>
							<div style="float: right; width: 45%;">
								<h4>Миронов Виктор Владимирович</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
								<h5>Кандидат исторических наук, доцент кафедры ИиТМО ОмГУ</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Социология международных отношений</li>
								</ul>
							</div>
							
							<div style="clear: both;"> </div>
							
							<div style="float: left; width: 45%;">
								<h4>Стрелкова Алена Александровна</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
								<h5>Главный специалист отдела по работе с персоналом филиала ОАО «МТС в Омской области»</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Социальная психология</li>
								</ul>
							</div>
							<div style="float: right; width: 45%;">
								<h4>Федосеева Дарья Николаевна</h4>
								<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
								<h5> Маркетинговое агентство «Делфи», руководитель клиентского отдела</h5>
								<p>Дисциплины:</p>
								<ul>
									<li>Спецсеминар: основы маркетинга</li>
								</ul>
							</div>
							<div style="clear: both;"></div>
						</div>
					</section>
				</div>
				</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>
