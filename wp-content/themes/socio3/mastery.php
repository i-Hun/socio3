<?php 
/*
Template Name: Mastery
*/
get_header("post"); ?>

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
				<style type="text/css">
				.section-container section .title a, .section-container .section .title a, .section-container.auto section .title a, .section-container.auto .section .title a {
				color: #CCC;
				font-size: 22px;
				font-weight: 100;
				padding: 0 0.5em;
				}
				</style>
				<div class="section-container tabs" data-section="tabs">
					<section class="active">
						<p class="title" data-section-title><a href="#">Общая информация</a></p>
						<div class="content" data-section-content>
							<h4>Основная образовательная программа по направлению подготовки 040100 Социология.</h4>
							<ul class="disc">
								<li>Квалификация (степень) – «магистр социологии».</li>
								<li>Программа – «Социология управления».</li>
								<li>Руководитель программы – доктор социологических наук, профессор, заведующий кафедрой региональной экономики и управления территориями О. М. Рой.</li>
								<li>Форма обучения – очная.</li>
								<li>Срок обучения – 2 года.</li>
							</ul>
							Область профессиональной деятельности магистров включает: экономику, науку, культуру, политику, образование.
							Магистр по направлению подготовки 040100 Социология готовится к следующим видам профессиональной деятельности:
							<table border="1" cellspacing="0" cellpadding="0">
							<tbody>
							<tr>
							<td width="243"><strong>Научно-исследовательская деятельность</strong></td>
							<td width="617" valign="top">
							<ul class="disc">
								<li>самостоятельная разработка и проведение   фундаментальных и прикладных социологических исследований;</li>
								<li>критический анализ результатов   исследований;</li>
								<li>обработка и интерпретация социальной,   демографической,  экономической и   другой информации с использованием современных информационных технологий,   средств коммуникации и связи;</li>
								<li>самостоятельная подготовка отчетов,   аналитических записок, профессиональных публикаций, презентация  результатов исследовательских работ;</li>
							</ul>
							</td>
							</tr>
							<tr>
							<td width="243"><strong>Производственно-прикладная деятельность</strong></td>
							<td width="424" valign="top">
							<ul class="disc">
								<li>социологическая экспертиза разработанных и   принимаемых к реализации социальных программ, проектов, планов мероприятий,   проектов нормативных правовых актов, методических материалов;</li>
								<li>создание и поддержание   нормативно-методической и информационной базы исследований с целью разработки   и успешной реализации программ социального развития предприятий, учреждений,   территорий и иных общностей;</li>
								<li>идентификация потребностей и интересов   социальных групп, предложение механизмов их согласования между собой и с   социально-экономическими приоритетами развития социальных общностей (трудовых   коллективов, территориальных общностей);</li>
								<li>участие в формировании кадрового состава   предприятий и учреждений, составление прогнозов потребности в кадрах; участие   в формировании индивидуальных карьерных планов, профессиональной ориентации и   производственной адаптации занятых; разработка систем оценки профессиональных   компетенций работников и результатов их труда;</li>
							</ul>
							</td>
							</tr>
							<tr>
							<td width="243"><strong>Проектная деятельность</strong></td>
							<td width="424" valign="top">
							<ul class="disc">
								<li>самостоятельная разработка и проведение   исследований по диагностике, оценке, оптимизации социальных показателей,   процессов и отношений;</li>
								<li>самостоятельная разработка методического   инструментария, нормативных документов, информационных материалов для   осуществления исследовательской, аналитической и консалтинговой проектной   деятельности;</li>
								<li>разработка, реализация и распространение   результатов проектов по изучению общественного мнения;</li>
								<li>научно-методическое и информационное   обеспечение маркетинговых исследований, участие в разработке рекомендаций для   маркетинговых служб;</li>
							</ul>
							</td>
							</tr>
							<tr>
							<td width="243"><strong>Организационно-управленческая деятельность</strong></td>
							<td width="424" valign="top">
							<ul class="disc">
								<li>разработка мониторинга социальной сферы;</li>
								<li>разработка программ, методик и организация   социологических исследований, направленных на оценку результативности,   эффективности и последствий программной и проектной деятельности органов   управления;</li>
								<li>формирование и анализ информационных   массивов, обеспечивающих разработку управленческого воздействия на социальную   сферу;</li>
								<li>организация управленческих процессов в   органах власти и управления, органах местного самоуправления,   административно-управленческих подразделениях организаций и учреждений;</li>
							</ul>
							</td>
							</tr>
							<tr>
							<td width="243"><strong>Педагогическая деятельность</strong></td>
							<td width="424" valign="top">
							<ul class="disc">
								<li>подготовка и проведение занятий по   социологическим и социально-гуманитарным дисциплинам в средней школе и в   высших учебных заведениях;</li>
								<li>организация учебного процесса,   самостоятельная подготовка учебных программ, учебно-методической документации   по курсам.</li>
							</ul>
							</td>
							</tr>
							</tbody>
							</table>
						</div>
					</section>
					<section>
						<p class="title" data-section-title><a href="#">Компетенции</a></p>
						<div class="content" data-section-content>
							<h4>Наиболее значимые компетенции, формируемые в ходе освоения ООП:</h4>
							<ul class="disc">
								<li>Способность осваивать новые теории, модели, методы исследования, навыки разработки новых методических подходов с учетом целей и задач исследования.</li>
								<li>Способность и умение самостоятельно использовать знание новейших тенденций в области методов и теорий современной социологической теории, методологии и методов социальных наук применительно к задачам фундаментального или прикладного исследования социальных общностей, институтов и процессов, общественного мнения.</li>
								<li>Способность профессионально составлять проекты аналитических разработок в соответствии с нормативными документами и представлять результаты исследовательской работы с учетом особенностей потенциальной аудитории.</li>
								<li>Способность свободно пользоваться современными методами сбора, обработки и интерпретации комплексной социальной информации для постановки и решения организационно-управленческих задач.</li>
								<li>Способность и готовность к планированию и осуществлению проектных работ в области изучения общественного мнения, организации работы маркетинговых служб, проведения социальной экспертизы политических и научно-технических решений.</li>
								<li>Способность участвовать в разработке основанных на профессиональных социологических знаниях предложений и рекомендаций по решению социальных проблем, в разработке механизмов согласования интересов социальных групп и общностей.</li>
								<li>Способность самостоятельно разрабатывать основанные на профессиональных социологических знаниях предложения и рекомендации по решению социальных проблем, а также разрабатывать механизмы согласования интересов социальных групп и общностей.</li>
								<li>Умение обрабатывать и анализировать данные для подготовки аналитических решений, экспертных заключений и рекомендаций.</li>
							</ul>
						</div>
					</section>
					<section>
						<p class="title" data-section-title><a href="#">Поступление</a></p>
						<div class="content" data-section-content>
							<p>Вступительный экзамен в магистратуру по направлению «Социология» проводится в форме собеседования. Каждый абитуриент отвечает по экзаменационному билету, состоящему из четырех вопросов. Два вопроса из - раздела Программы «Теория и история социологии», два вопроса из раздела  «Методология и методы социологического исследования».
							Каждый вопрос оценивается по 25-бальной шкале. Критерий оценки за каждый вопрос:</p>
							<ul class="disc">
								<li>ответ правильный и полный – 25 баллов;</li>
								<li>ответ правильный, неполный – 15 баллов;</li>
								<li>ответ неправильный – 0 баллов.</li>
							</ul>
							<p>Итоговая оценка выводится посредством суммирования оценок комиссии по всем вопросам экзаменационного билета. Максимальная оценка за четыре правильных ответа составляет 100 баллов. Успешно прошедшими испытания признаются те лица, которые при сдачи экзамена получили 30 и более баллов.</p>
							<a href="/download/2012/Программа%20экзамена%20магистров.doc">Скачать программу экзамена</a>
						</div>
					</section>
					<section>
						<p class="title" data-section-title><a href="#">Обучение</a></p>
						<div class="content" data-section-content>
							<h4>Изучаемые дисциплины</h4>
							<ul class="disc">
								<li>Обязательные дисциплины:
							<ul class="circle">
								<li>Иностранный язык: профессиональная терминология и основы перевода научных текстов</li>
								<li>Методология научных исследований</li>
								<li>История и методология социологии</li>
								<li>Правоведение</li>
								<li>Современные социологические теории</li>
								<li>Современные методы социологических исследований</li>
								<li>Научно-исследовательский семинар</li>
								<li>Социальная стратификация  современного российского общества</li>
								<li>Современные проблемы государственного управления</li>
								<li>Современные методы исследования организаций</li>
								<li>Социальные коммуникации в управлении</li>
								<li>Дисциплины по выбору.</li>
							</ul>
							</li>
							</ul>
							<ul class="disc">
								<li>Дисциплины по выбору.
							<ul class="circle">
								<li>Личное (исследовательское)интервью: теория и практика</li>
								<li>Фокус-группы: теория и практика</li>
								<li>Контент-анализ: теория и практика</li>
								<li>Экспертный опрос: теория и практика</li>
								<li>Логика социологического исследования</li>
								<li>Методы анализа социологических данных</li>
								<li>Территориальное общественное самоуправление</li>
								<li>Управление в социальной сфере</li>
								<li>Кадровая политика и кадровый аудит</li>
								<li>Маркетинг территорий</li>
								<li>Методика преподавания в высшей школе</li>
							</ul>
							</li>
							<em>На их основе студент формирует индивидуальную программу подготовки. Предоставляется возможность выбрать также дисциплины из других магистерских программ:</em></ul>
							<strong>Научно-исследовательская работа студентов</strong>: 1,2,3 семестры. Организационная форма - научно-исследовательский семинар.

							<strong>Практики</strong>: научно-исследовательская, производственная (4 семестр)

							<strong>Итоговая аттестация</strong> – защита магистерской диссертации
							<h4>Основные базы практик:</h4>
							<ul class="disc">
								<li>БУ ОО «Региональный центр по связям с общественностью»</li>
								<li>ОАО «Мобильные системы связи»</li>
								<li>ООО «Маркетинговое агентство «Делфи»</li>
								<li>Научно-производственное объединение «Ориентир»</li>
								<li>БУ ОО «МинСпортМедиа»</li>
								<li>Омская региональная маркетинговая ассоциация</li>
							</ul>
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