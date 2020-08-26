<?php
/**
 * Template Name: ALL Pages
 * Template Post Type: page
 */
get_header();?>
<!--Link--><?= css();?>



<?php 

$page_id = get_option('page_on_front'); ?>
<?php // the_field('title', $page_id); ?>


<!-- HEADER -->
  <?php if( get_field('__header_chek') == 'enable_sidebar' ) { ?>

      <?php if( have_rows('__header', $page_id) ):

           // loop through the rows of data
          while ( have_rows('__header', $page_id) ) : the_row();  ?>

            <?php if( get_row_layout() == '__header' ): ?>

                  <header>

                        <div class="container">
                            <div class="row">
                              <div class="col m12 s12 l8 xl8">


                              <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                                <h3 class="title"><?php the_sub_field('title', $page_id); ?></h3>
                              <?php endif; ?>

                               <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                                <p><?php the_sub_field('content', $page_id); ?></p>
                              <?php endif; ?>


                              <ul class="list">

                                <?php if( have_rows('box_list', $page_id) ): ?>

                                    <?php while( have_rows('box_list', $page_id) ): the_row(); 
                                        // vars
                                        //$images = get_sub_field('images'); 
                                        //$title = get_sub_field('title'); 
                                        $paragraph = get_sub_field('paragraph', $page_id); ?> 

                                      <li class="ion-checkmark"><p><?php echo $paragraph ?></p></li>

                                    <?php endwhile; ?> 
                                <?php endif; ?> 

                              </ul>

                              </div>
                            </div>
                        </div>

                    </header>

            <?php endif;

          endwhile;

      endif; ?>
  
 <?php }?>
 
<?php if( have_rows('__header') ):

     // loop through the rows of data
    while ( have_rows('__header') ) : the_row();  ?>

      <?php if( get_row_layout() == '__header' ): ?>

            <header>

                  <div class="container">
                      <div class="row">
                        <div class="col m12 s12 l8 xl8">


                        <?php if( get_sub_field('title')): ?><!-- if under__the -->
                          <h3 class="title"><?php the_sub_field('title'); ?></h3>
                        <?php endif; ?>

                         <?php if( get_sub_field('content')): ?><!-- if under__the -->
                          <p><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>

                          <?php if( have_rows('box_list') ): ?>
                        <ul class="list">

                              <?php while( have_rows('box_list') ): the_row(); 
                                  // vars
                                  //$images = get_sub_field('images'); 
                                  //$title = get_sub_field('title'); 
                                  $paragraph = get_sub_field('paragraph'); ?> 

                                <li class="ion-checkmark"><p><?php echo $paragraph ?></p></li>

                              <?php endwhile; ?> 
                        </ul>
                              
                          <?php endif; ?> 



                        </div>
                      </div>
                  </div>

              </header>

      <?php endif;

    endwhile;

endif; ?>
<!-- END HEADER -->


<!-- breadcrumbs__ -->
<?php if ( !is_front_page() ) { ?>

  <div class="breadcrumbs__">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl12">

              <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

        </div>
      </div>
    </div>
  </div>

<?php } ?>
<!-- END breadcrumbs__ -->

<!-- section  new  -->

<?php if( have_rows('__section_new') ):

     // loop through the rows of data
    while ( have_rows('__section_new') ) : the_row();  ?>

      <?php
        if( get_row_layout() == '__section_new' ): ?>

             <section class="home_section_new section__ oh-y  <?php if(get_row_index() == '1'){ echo 'num__';}?>">
                   <div class="container">
                    <div class="row">
                      <div class="col m12 s12 l12 xl12">

                           <?php if( get_sub_field('content')): ?><!-- if under__the -->
                            <?php the_sub_field('content'); ?>
                          <?php endif; ?>
                          
                          
                          
                      </div>

                    </div>
                  </div>

              </section> 

      <?php endif;

    endwhile;

endif; ?>

<!-- END section new -->



<!-- section 1 -->
  <?php if( get_field('chek_1') == 'enable_sidebar' ) { ?>

      <?php if( have_rows('__section_1', $page_id) ):

           // loop through the rows of data
          while ( have_rows('__section_1', $page_id) ) : the_row();  ?>

            <?php
              if( get_row_layout() == '__section_1' ): ?>

                   <section class="home_section_1 section__ oh-y">
                         <div class="container">
                          <div class="row">
                            <div class="col m12 s12 l12 xl12">

                                <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                                  <h2><?php the_sub_field('title', $page_id); ?></h2>
                                <?php endif; ?>

                                 <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                                  <p class="subtitle"><?php the_sub_field('content', $page_id); ?></p>
                                <?php endif; ?>
                            </div>

                          </div>

                          <div class="row">

                            <?php if( have_rows('box_list', $page_id) ): ?>

                                <?php while( have_rows('box_list', $page_id) ): the_row(); 
                                    // vars
                                    $images = get_sub_field('images', $page_id); 
                                    //$title = get_sub_field('title'); 
                                    $paragraph = get_sub_field('paragraph', $page_id); ?> 

                                  <div class="col m6 s6 l4 xl3">
                                    <div class="box__info">

                                     <?php if( !empty( $images ) ): ?>
                                        <img class="img" src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" />
                                    <?php endif; ?>

                                    <?php if( $paragraph ): ?><!-- if under__the -->
                                        <p><?php echo $paragraph ?></p>
                                   <?php endif; ?>

                                    </div>
                                  </div>

                                <?php endwhile; ?> 
                            <?php endif; ?> 

                          </div>
                        </div>

                    </section> 

            <?php endif;

          endwhile;

      endif; ?>

  <?php } ?>
  
  
  
<?php if( have_rows('__section_1') ):

     // loop through the rows of data
    while ( have_rows('__section_1') ) : the_row();  ?>

      <?php
        if( get_row_layout() == '__section_1' ): ?>

             <section class="home_section_1 section__ oh-y">
                   <div class="container">
                    <div class="row">
                      <div class="col m12 s12 l12 xl12">

                          <?php if( get_sub_field('title')): ?><!-- if under__the -->
                            <h2><?php the_sub_field('title'); ?></h2>
                          <?php endif; ?>

                           <?php if( get_sub_field('content')): ?><!-- if under__the -->
                            <p class="subtitle"><?php the_sub_field('content'); ?></p>
                          <?php endif; ?>
                      </div>

                    </div>

                    <div class="row">

                      <?php if( have_rows('box_list') ): ?>

                          <?php while( have_rows('box_list') ): the_row(); 
                              // vars
                              $images = get_sub_field('images'); 
                              //$title = get_sub_field('title'); 
                              $paragraph = get_sub_field('paragraph'); ?> 

                            <div class="col m6 s6 l4 xl3">
                              <div class="box__info">

                               <?php if( !empty( $images ) ): ?>
                                  <img class="img" src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" />
                              <?php endif; ?>

                              <?php if( $paragraph ): ?><!-- if under__the -->
                                  <p><?php echo $paragraph ?></p>
                             <?php endif; ?>

                              </div>
                            </div>

                          <?php endwhile; ?> 
                      <?php endif; ?> 

                    </div>
                  </div>

              </section> 

      <?php endif;

    endwhile;

endif; ?>

<!-- END section 1 -->









<!-- section 2 -->
<?php if( get_field('chek_2') == 'enable_sidebar' ) { ?>


    <?php if( have_rows('__section_2', $page_id) ):

       // loop through the rows of data
      while ( have_rows('__section_2', $page_id) ) : the_row();  ?>



        <?php  if( get_row_layout() == '__section_2' ): ?>


           <section class="home_section_5 section__ oh-y">

               <div class="container">

                <div class="row">
                  <div class="col m12 s12 l12 xl12">

                      <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                        <h2><?php the_sub_field('title', $page_id); ?></h2>
                      <?php endif; ?>

                       <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                        <p><?php the_sub_field('content', $page_id); ?></p>
                      <?php endif; ?>
                  </div>
                 </div>

                <div class="row">

                  <?php if( have_rows('box_list', $page_id) ): ?>

                      <?php while( have_rows('box_list', $page_id) ): the_row(); 
                          // vars
    //                      $images = get_sub_field('images'); 
                          $title = get_sub_field('title', $page_id); 
                          $paragraph = get_sub_field('paragraph', $page_id); ?> 

                          <div class="col m6 s12 l3 xl3 digits inner">

                                <div class="block">

                                <?php if( $title ): ?><!-- if under__the -->
                                    <span <?php if(get_row_index() == '1'){ 
                                    echo 'id="years"'; }elseif(get_row_index() == '2'){ echo 'id="orders"'; }elseif(get_row_index() == '3'){ echo 'id="experts"'; }elseif(get_row_index() == '4'){ echo 'id="customers"'; }?>><?php echo $title ?></span>
                               <?php endif; ?>

                                 <?php if( $paragraph ): ?><!-- if under__the -->
                                      <p class="descr"><?php echo $paragraph ?></p>
                                 <?php endif; ?>

                              </div>

                        </div>

                      <?php endwhile; ?> 
                  <?php endif; ?>   


                </div>
              </div>

            </section>

<script>

  
  
window.onload=function(){

	function number_to(id,from,to,duration)
	{
		var element = document.getElementById(id);
		var start = new Date().getTime();
		setTimeout(function() {
			var now = (new Date().getTime()) - start;
			var progress = now / duration;
			var result = Math.floor((to - from) * progress + from);
			element.innerHTML = progress < 1 ? result : to;
			if (progress < 1) setTimeout(arguments.callee, 10);
		}, 10);
	}

	const elem = [
		document.querySelector('.digits'),
	];
	let isLeaving = false;
	const config = {
		root: null, // avoiding 'root' or setting it to 'null' sets it to default value: viewport
		rootMargin: '0px',
		threshold: 0.5
	};
	let observer = new IntersectionObserver(function(elem) {
		if (elem[0].isIntersecting) {
			// we are ENTERING the "capturing frame". Set the flag.
			number_to("years",0,12,1000);
			number_to("orders",0,97.56,1000);
			number_to("experts",0,768,1000);
			number_to("customers",0,4.8,1000)
			isLeaving = true;

			// Do something with entering entry
		} else if (isLeaving) {
			// we are EXITING the "capturing frame"
			isLeaving = false;
			// Do something with exiting entry
		}
	}, config);

	observer.observe(elem[0]);

	// Check mobile device
	const getMobileOperatingSystem = function () {
		const n = navigator.userAgent || navigator.vendor || window.opera;
		// return /windows phone/i.test(n) ? "Windows Phone" : /android/i.test(n) ? "Android" : !!/iPad|iPhone|iPod/.test(n) && "iOS"
		const isMobile = /windows phone/i.test(n) ? "Windows Phone" : /android/i.test(n) ? "Android" : !!/iPad|iPhone|iPod/.test(n) && "iOS"
		return isMobile;
	};

	// Tab section
	const tab = document.querySelectorAll('.order-tab');
	const tabBody = document.querySelectorAll('.order-content');
	const btnNextTab = document.querySelectorAll('.btn-next-tab');

	tab.forEach(function(elem) {
		elem.addEventListener('click', openNextTab);
		elem.addEventListener('mouseover', openNextTab);
	});

	btnNextTab.forEach(function(elem) {
		elem.addEventListener('click', openNextTab);
	});

	function openNextTab(e) {
		if (!getMobileOperatingSystem()) {
			e.preventDefault();
		}
		removeAllActive();
		// this.classList.add('is-active');
		// console.log(this);
		let idTab = this.getAttribute('href');
		document.querySelector(idTab).classList.add('is-active');
		document.querySelector('.order-tab[href="' +idTab + '"]').classList.add('is-active')
	}

	function removeAllActive() {
		tab.forEach(function(elem) {
			elem.classList.remove('is-active');
		});
		tabBody.forEach(function(elem) {
			elem.classList.remove('is-active');
		});
	}

	//Carousel
	function Carousel(setting) {
		if(document.querySelector(setting.wrap) === null) {
			console.error(`Carousel not fount selector ${setting.wrap}`);
			return;
		}
		/* Scope privates methods and properties */
		let privates = {},
			xDown, yDown, xUp, yUp, xDiff, yDiff;
		/* Public methods */
		// Prev slide
		this.prev_slide = () => {
			if(!privates.isAnimationEnd) {
				return;
			}
			privates.isAnimationEnd = false;
			--privates.opt.position;
			if(privates.opt.position < 0) {
				privates.sel.wrap.classList.add('s-notransition');
				privates.sel.wrap.style["transform"] = `translateX(-${privates.opt.max_position}00%)`;
				privates.opt.position = privates.opt.max_position - 1;
			}
			setTimeout(() => {
				privates.sel.wrap.classList.remove('s-notransition');
				privates.sel.wrap.style["transform"] = `translateX(-${privates.opt.position}00%)`;
			}, 10);

			privates.sel.wrap.addEventListener('transitionend', () => {
				privates.isAnimationEnd = true;
			});

			if(privates.setting.autoplay === true) {
				privates.timer.become();
			}
		};
		// Next slide
		this.next_slide = () => {
			if(!privates.isAnimationEnd) {
				return;
			}
			privates.isAnimationEnd = false;

			if(privates.opt.position < privates.opt.max_position) {
				++privates.opt.position;
			}
			privates.sel.wrap.classList.remove('s-notransition');
			privates.sel.wrap.style["transform"] = `translateX(-${privates.opt.position}00%)`;

			privates.sel.wrap.addEventListener('transitionend', () => {
				if(privates.opt.position >= privates.opt.max_position) {
					privates.sel.wrap.style["transform"] = 'translateX(0)';
					privates.sel.wrap.classList.add('s-notransition');
					privates.opt.position = 0;
				}

				privates.isAnimationEnd = true;
			});

			if(privates.setting.autoplay === true) {
				privates.timer.become();
			}
		};
		// Pause timer carousel
		this.pause = () => {
			if(privates.setting.autoplay === true) {
				privates.timer.pause();
			}
		};
		// Become timer carousel
		this.become = (autoplayDelay = privates.setting.autoplayDelay) => {
			if(privates.setting.autoplay === true) {
				privates.setting.autoplayDelay = autoplayDelay;
				privates.timer.become();
			}
		};
		// Go to
		this.goto = (index) => {
			privates.opt.position = index - 1;
			this.next_slide();
		};
		// Item
		this.index = () => {
			return privates.opt.position;
		};
		/* privates methods */
		privates.hts = (e) => {
			xDown = e.touches[0].clientX;
			yDown = e.touches[0].clientY;
		};
		privates.htm = (e) => {
			if ( ! xDown || ! yDown ) {
				return;
			}
			xUp = e.touches[0].clientX;
			yUp = e.touches[0].clientY;

			xDiff = xDown - xUp;
			yDiff = yDown - yUp;

			if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
				if ( xDiff > 0 ) {
					this.next_slide();
				} else {
					this.prev_slide();
				}
			}
			xDown = 0;
			yDown = 0;
		}
		/* privates properties */
		privates.default = {
			"touch": true,
			"autoplay": false,
			"autoplayDelay": 3000,
			"pauseOnFocus": true,
			"pauseOnHover": true
		};
		privates.setting = Object.assign(privates.default, setting);
		privates.isAnimationEnd = true;
		privates.sel = {
			"wrap": document.querySelector(privates.setting.wrap),
			"children": document.querySelector(privates.setting.wrap).children,
			"prev": document.querySelector(privates.setting.prev),
			"next": document.querySelector(privates.setting.next)
		};
		privates.opt = {
			"position": 0,
			"max_position": document.querySelector(privates.setting.wrap).children.length
		};
		/* Constructor */
		// Clone first elem to end wrap
		privates.sel.wrap.appendChild(privates.sel.children[0].cloneNode(true));
		// Autoplay
		if(privates.setting.autoplay === true) {
			privates.timer = new Timer(this.next_slide, privates.setting.autoplayDelay);
		}
		// Control
		if(privates.sel.prev !== null) {
			privates.sel.prev.addEventListener('click', () => {
				this.prev_slide();
			});
		}
		if(privates.sel.next !== null) {
			privates.sel.next.addEventListener('click', () => {
				this.next_slide();
			});
		}
		// Touch events
		if(privates.setting.touch === true) {
			privates.sel.wrap.addEventListener('touchstart', privates.hts, false);
			privates.sel.wrap.addEventListener('touchmove', privates.htm, false);
		}
		// Pause on hover
		if(privates.setting.autoplay === true && privates.setting.pauseOnHover === true) {
			privates.sel.wrap.addEventListener('mouseenter', () => {
				privates.timer.pause();
			});
			privates.sel.wrap.addEventListener('mouseleave', () => {
				privates.timer.become();
			});
		}
	}
	function Timer(callback, delay) {
		/* privates properties */
		let timerId, start, remaining = delay;
		/* Public methods */
		this.resume = () => {
			start = new Date();
			timerId = setTimeout(() => {
				remaining = delay;
				this.resume();
				callback();
			}, remaining);
		};
		this.pause = () => {
			clearTimeout(timerId);
			remaining -= new Date() - start;
		};
		this.become = () => {
			clearTimeout(timerId);
			remaining = delay;
			this.resume();
		};
		/* Constructor */
		this.resume();
	}
	let a = new Carousel({
		"wrap": ".js-carousel__wrap",
		"prev": ".js-carousel__prev",
		"next": ".js-carousel__next",
		"touch": true,
		"autoplay": false,
		// "autoplayDelay": 3000
	});
	// End carousel

	//email discount
	let xhr = new XMLHttpRequest(); // Ñƒ ÐºÐ¾Ð½ÑÑ‚Ñ€ÑƒÐºÑ‚Ð¾Ñ€Ð° Ð½ÐµÑ‚ Ð°Ñ€Ð³ÑƒÐ¼ÐµÐ½Ñ‚Ð¾Ð²
	xhr.open('POST', '/article/xmlhttprequest/example/load');

};
</script>

        <?php endif;

      endwhile;

  endif; ?>


<?php } ?>
  
  
<?php if( have_rows('__section_2') ):

     // loop through the rows of data
    while ( have_rows('__section_2') ) : the_row();  ?>



      <?php  if( get_row_layout() == '__section_2' ): ?>
        
        
         <section class="home_section_5 section__ oh-y">
            
             <div class="container">

              <div class="row">
                <div class="col m12 s12 l12 xl12">

                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                     <?php if( get_sub_field('content')): ?><!-- if under__the -->
                      <p><?php the_sub_field('content'); ?></p>
                    <?php endif; ?>
                </div>
               </div>

              <div class="row">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row(); 
                        // vars
  //                      $images = get_sub_field('images'); 
                        $title = get_sub_field('title'); 
                        $paragraph = get_sub_field('paragraph'); ?> 

                        <div class="col m6 s12 l3 xl3 digits inner">

                           <div class="block">

                               <?php if( $title ): ?><!-- if under__the -->
                                    <span <?php if(get_row_index() == '1'){ 
                                    echo 'id="years"'; }elseif(get_row_index() == '2'){ echo 'id="orders"'; }elseif(get_row_index() == '3'){ echo 'id="experts"'; }elseif(get_row_index() == '4'){ echo 'id="customers"'; }?>><?php echo $title ?></span>
                               <?php endif; ?>

                               <?php if( $paragraph ): ?><!-- if under__the -->
                                    <p class="descr"><?php echo $paragraph ?></p>
                               <?php endif; ?>

                            </div>

                      </div>

                    <?php endwhile; ?> 
                <?php endif; ?>   




              </div>
            </div>

          </section>
 
<script>

  
  
window.onload=function(){

	function number_to(id,from,to,duration)
	{
		var element = document.getElementById(id);
		var start = new Date().getTime();
		setTimeout(function() {
			var now = (new Date().getTime()) - start;
			var progress = now / duration;
			var result = Math.floor((to - from) * progress + from);
			element.innerHTML = progress < 1 ? result : to;
			if (progress < 1) setTimeout(arguments.callee, 10);
		}, 10);
	}

	const elem = [
		document.querySelector('.digits'),
	];
	let isLeaving = false;
	const config = {
		root: null, // avoiding 'root' or setting it to 'null' sets it to default value: viewport
		rootMargin: '0px',
		threshold: 0.5
	};
	let observer = new IntersectionObserver(function(elem) {
		if (elem[0].isIntersecting) {
			// we are ENTERING the "capturing frame". Set the flag.
			number_to("years",0,12,1000);
			number_to("orders",0,97.56,1000);
			number_to("experts",0,768,1000);
			number_to("customers",0,4.8,1000)
			isLeaving = true;

			// Do something with entering entry
		} else if (isLeaving) {
			// we are EXITING the "capturing frame"
			isLeaving = false;
			// Do something with exiting entry
		}
	}, config);

	observer.observe(elem[0]);

	// Check mobile device
	const getMobileOperatingSystem = function () {
		const n = navigator.userAgent || navigator.vendor || window.opera;
		// return /windows phone/i.test(n) ? "Windows Phone" : /android/i.test(n) ? "Android" : !!/iPad|iPhone|iPod/.test(n) && "iOS"
		const isMobile = /windows phone/i.test(n) ? "Windows Phone" : /android/i.test(n) ? "Android" : !!/iPad|iPhone|iPod/.test(n) && "iOS"
		return isMobile;
	};

	// Tab section
	const tab = document.querySelectorAll('.order-tab');
	const tabBody = document.querySelectorAll('.order-content');
	const btnNextTab = document.querySelectorAll('.btn-next-tab');

	tab.forEach(function(elem) {
		elem.addEventListener('click', openNextTab);
		elem.addEventListener('mouseover', openNextTab);
	});

	btnNextTab.forEach(function(elem) {
		elem.addEventListener('click', openNextTab);
	});

	function openNextTab(e) {
		if (!getMobileOperatingSystem()) {
			e.preventDefault();
		}
		removeAllActive();
		// this.classList.add('is-active');
		// console.log(this);
		let idTab = this.getAttribute('href');
		document.querySelector(idTab).classList.add('is-active');
		document.querySelector('.order-tab[href="' +idTab + '"]').classList.add('is-active')
	}

	function removeAllActive() {
		tab.forEach(function(elem) {
			elem.classList.remove('is-active');
		});
		tabBody.forEach(function(elem) {
			elem.classList.remove('is-active');
		});
	}

	//Carousel
	function Carousel(setting) {
		if(document.querySelector(setting.wrap) === null) {
			console.error(`Carousel not fount selector ${setting.wrap}`);
			return;
		}
		/* Scope privates methods and properties */
		let privates = {},
			xDown, yDown, xUp, yUp, xDiff, yDiff;
		/* Public methods */
		// Prev slide
		this.prev_slide = () => {
			if(!privates.isAnimationEnd) {
				return;
			}
			privates.isAnimationEnd = false;
			--privates.opt.position;
			if(privates.opt.position < 0) {
				privates.sel.wrap.classList.add('s-notransition');
				privates.sel.wrap.style["transform"] = `translateX(-${privates.opt.max_position}00%)`;
				privates.opt.position = privates.opt.max_position - 1;
			}
			setTimeout(() => {
				privates.sel.wrap.classList.remove('s-notransition');
				privates.sel.wrap.style["transform"] = `translateX(-${privates.opt.position}00%)`;
			}, 10);

			privates.sel.wrap.addEventListener('transitionend', () => {
				privates.isAnimationEnd = true;
			});

			if(privates.setting.autoplay === true) {
				privates.timer.become();
			}
		};
		// Next slide
		this.next_slide = () => {
			if(!privates.isAnimationEnd) {
				return;
			}
			privates.isAnimationEnd = false;

			if(privates.opt.position < privates.opt.max_position) {
				++privates.opt.position;
			}
			privates.sel.wrap.classList.remove('s-notransition');
			privates.sel.wrap.style["transform"] = `translateX(-${privates.opt.position}00%)`;

			privates.sel.wrap.addEventListener('transitionend', () => {
				if(privates.opt.position >= privates.opt.max_position) {
					privates.sel.wrap.style["transform"] = 'translateX(0)';
					privates.sel.wrap.classList.add('s-notransition');
					privates.opt.position = 0;
				}

				privates.isAnimationEnd = true;
			});

			if(privates.setting.autoplay === true) {
				privates.timer.become();
			}
		};
		// Pause timer carousel
		this.pause = () => {
			if(privates.setting.autoplay === true) {
				privates.timer.pause();
			}
		};
		// Become timer carousel
		this.become = (autoplayDelay = privates.setting.autoplayDelay) => {
			if(privates.setting.autoplay === true) {
				privates.setting.autoplayDelay = autoplayDelay;
				privates.timer.become();
			}
		};
		// Go to
		this.goto = (index) => {
			privates.opt.position = index - 1;
			this.next_slide();
		};
		// Item
		this.index = () => {
			return privates.opt.position;
		};
		/* privates methods */
		privates.hts = (e) => {
			xDown = e.touches[0].clientX;
			yDown = e.touches[0].clientY;
		};
		privates.htm = (e) => {
			if ( ! xDown || ! yDown ) {
				return;
			}
			xUp = e.touches[0].clientX;
			yUp = e.touches[0].clientY;

			xDiff = xDown - xUp;
			yDiff = yDown - yUp;

			if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
				if ( xDiff > 0 ) {
					this.next_slide();
				} else {
					this.prev_slide();
				}
			}
			xDown = 0;
			yDown = 0;
		}
		/* privates properties */
		privates.default = {
			"touch": true,
			"autoplay": false,
			"autoplayDelay": 3000,
			"pauseOnFocus": true,
			"pauseOnHover": true
		};
		privates.setting = Object.assign(privates.default, setting);
		privates.isAnimationEnd = true;
		privates.sel = {
			"wrap": document.querySelector(privates.setting.wrap),
			"children": document.querySelector(privates.setting.wrap).children,
			"prev": document.querySelector(privates.setting.prev),
			"next": document.querySelector(privates.setting.next)
		};
		privates.opt = {
			"position": 0,
			"max_position": document.querySelector(privates.setting.wrap).children.length
		};
		/* Constructor */
		// Clone first elem to end wrap
		privates.sel.wrap.appendChild(privates.sel.children[0].cloneNode(true));
		// Autoplay
		if(privates.setting.autoplay === true) {
			privates.timer = new Timer(this.next_slide, privates.setting.autoplayDelay);
		}
		// Control
		if(privates.sel.prev !== null) {
			privates.sel.prev.addEventListener('click', () => {
				this.prev_slide();
			});
		}
		if(privates.sel.next !== null) {
			privates.sel.next.addEventListener('click', () => {
				this.next_slide();
			});
		}
		// Touch events
		if(privates.setting.touch === true) {
			privates.sel.wrap.addEventListener('touchstart', privates.hts, false);
			privates.sel.wrap.addEventListener('touchmove', privates.htm, false);
		}
		// Pause on hover
		if(privates.setting.autoplay === true && privates.setting.pauseOnHover === true) {
			privates.sel.wrap.addEventListener('mouseenter', () => {
				privates.timer.pause();
			});
			privates.sel.wrap.addEventListener('mouseleave', () => {
				privates.timer.become();
			});
		}
	}
	function Timer(callback, delay) {
		/* privates properties */
		let timerId, start, remaining = delay;
		/* Public methods */
		this.resume = () => {
			start = new Date();
			timerId = setTimeout(() => {
				remaining = delay;
				this.resume();
				callback();
			}, remaining);
		};
		this.pause = () => {
			clearTimeout(timerId);
			remaining -= new Date() - start;
		};
		this.become = () => {
			clearTimeout(timerId);
			remaining = delay;
			this.resume();
		};
		/* Constructor */
		this.resume();
	}
	let a = new Carousel({
		"wrap": ".js-carousel__wrap",
		"prev": ".js-carousel__prev",
		"next": ".js-carousel__next",
		"touch": true,
		"autoplay": false,
		// "autoplayDelay": 3000
	});
	// End carousel

	//email discount
	let xhr = new XMLHttpRequest(); // Ñƒ ÐºÐ¾Ð½ÑÑ‚Ñ€ÑƒÐºÑ‚Ð¾Ñ€Ð° Ð½ÐµÑ‚ Ð°Ñ€Ð³ÑƒÐ¼ÐµÐ½Ñ‚Ð¾Ð²
	xhr.open('POST', '/article/xmlhttprequest/example/load');

};
</script>
     
      <?php endif;

    endwhile;

endif; ?>





<!-- END section 2 -->





<!-- section 3 -->
<?php if( get_field('chek_3') == 'enable_sidebar' ) { ?>
  

    <?php if( have_rows('__section_3', $page_id) ):

       // loop through the rows of data
      while ( have_rows('__section_3', $page_id) ) : the_row();  ?>

        <?php  if( get_row_layout() == '__section_3' ): ?>


      <section class="home_section_4 section__ oh-y">
             <div class="container">

              <div class="row">
                <div class="col m12 s12 l12 xl12">

                    <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                      <h2><?php the_sub_field('title', $page_id); ?></h2>
                    <?php endif; ?>

                     <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                      <p><?php the_sub_field('content', $page_id); ?></p>
                    <?php endif; ?>
                </div>
               </div>

              <div class="row">
                <div class="col m12 s12 l6 xl6">
                  <!--Start Edu-Profit.com code-->
                  <script type="text/javascript">
                  var partner_id = 19627;
                  var sub_id = "";
                  (function() {
                  var sc = document.createElement('script'); sc.type = 'text/javascript'; sc.async = true;
                  sc.src = 'https://www.edu-profit.com/orderformph-new2.js';
                  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sc, s);
                  })();
                  </script>
                  <div id="orderformph-new-2"></div>
                  <!--End Edu-Profit.com code-->

                </div>

                <div class="col m12 s12 l6 xl6">


                    <?php if( get_sub_field('title_h3', $page_id)): ?><!-- if under__the -->
                      <h3><?php the_sub_field('title_h3', $page_id); ?></h3>
                    <?php endif; ?>

                    <?php if( get_sub_field('text_in_block', $page_id)): ?><!-- if under__the -->
                      <?php the_sub_field('text_in_block', $page_id); ?>
                    <?php endif; ?>


                </div>

              </div>
            </div>

          </section>



        <?php endif;

      endwhile;

  endif; ?>

<?php } ?>

<?php if( have_rows('__section_3') ):

     // loop through the rows of data
    while ( have_rows('__section_3') ) : the_row();  ?>



      <?php  if( get_row_layout() == '__section_3' ): ?>
        
        
    <section class="home_section_4 section__ oh-y">
           <div class="container">
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                   <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <p><?php the_sub_field('content'); ?></p>
                  <?php endif; ?>
              </div>
             </div>
           
            <div class="row">
              <div class="col m12 s12 l6 xl6">
                <!--Start Edu-Profit.com code-->
                <script type="text/javascript">
                var partner_id = 19627;
                var sub_id = "";
                (function() {
                var sc = document.createElement('script'); sc.type = 'text/javascript'; sc.async = true;
                sc.src = 'https://www.edu-profit.com/orderformph-new2.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sc, s);
                })();
                </script>
                <div id="orderformph-new-2"></div>
                <!--End Edu-Profit.com code-->
            
              </div>
              
              <div class="col m12 s12 l6 xl6">

              
                  <?php if( get_sub_field('title_h3')): ?><!-- if under__the -->
                    <h3><?php the_sub_field('title_h3'); ?></h3>
                  <?php endif; ?>
                  
                  <?php if( get_sub_field('text_in_block')): ?><!-- if under__the -->
                    <?php the_sub_field('text_in_block'); ?>
                  <?php endif; ?>

              
              </div>

            </div>
          </div>
                     
        </section>
         

     
      <?php endif;

    endwhile;

endif; ?>

<!-- END section 3 -->




<!-- section 4 -->
<?php if( get_field('chek_4') == 'enable_sidebar' ) { ?>
  

    <?php if( have_rows('__section_4', $page_id) ):

       // loop through the rows of data
      while ( have_rows('__section_4', $page_id) ) : the_row();  ?>

        <?php  if( get_row_layout() == '__section_4' ): ?>


         <section class="home_section_2 section__ oh-y">
           <div class="container">
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title', $page_id); ?></h2>
                  <?php endif; ?>

                   <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                    <p><?php the_sub_field('content', $page_id); ?></p>
                  <?php endif; ?>
              </div>
             </div>
             
            <div class="row">
              <div class="col m12 s12 l12 xl12">
              
              
              <div class="slid">
               
              <?php if( have_rows('box_list', $page_id) ): ?>

                  <?php while( have_rows('box_list', $page_id) ): the_row(); 
                      // vars
//                      $images = get_sub_field('images'); 
                      $title = get_sub_field('title', $page_id); 
                      $paragraph = get_sub_field('paragraph', $page_id); ?> 

                        <div>
                            <div class="block">

                              <?php if( $title ): ?><!-- if under__the -->
                                  <h3><?php echo $title ?></h3>
                             <?php endif; ?>


                            <?php if( $paragraph ): ?><!-- if under__the -->
                              <p class="title"><?php echo $paragraph; ?></p>
                            <?php endif; ?>


                            </div>
                        </div>


                  <?php endwhile; ?> 
              <?php endif; ?>  
              
               </div>

                
              </div>
              
            </div>
          </div>
                    
        </section>
         


        <?php endif;

      endwhile;

  endif; ?>

<?php } ?>

<?php if( have_rows('__section_4') ):

     // loop through the rows of data
    while ( have_rows('__section_4') ) : the_row();  ?>



      <?php  if( get_row_layout() == '__section_4' ): ?>
        
       <section class="home_section_2 section__ oh-y">
           <div class="container">
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title'); ?></h2>
                  <?php endif; ?>

                   <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <p><?php the_sub_field('content'); ?></p>
                  <?php endif; ?>
              </div>
             </div>
             
            <div class="row">
              <div class="col m12 s12 l12 xl12">
              
              
              <div class="slid">
               
              <?php if( have_rows('box_list') ): ?>

                  <?php while( have_rows('box_list') ): the_row(); 
                      // vars
//                      $images = get_sub_field('images'); 
                      $title = get_sub_field('title'); 
                      $paragraph = get_sub_field('paragraph'); ?> 

                        <div>
                            <div class="block">

                              <?php if( $title ): ?><!-- if under__the -->
                                  <h3><?php echo $title ?></h3>
                             <?php endif; ?>


                            <?php if( $paragraph ): ?><!-- if under__the -->
                              <p class="title"><?php echo $paragraph; ?></p>
                            <?php endif; ?>


                            </div>
                        </div>


                  <?php endwhile; ?> 
              <?php endif; ?>  
              
               </div>

                
              </div>
              
            </div>
          </div>
                    
        </section>
         

     
      <?php endif;

    endwhile;

endif; ?>

<!-- END section 4 -->







<!-- section 5 -->
<?php if( get_field('chek_5') == 'enable_sidebar' ) { ?>
  

    <?php if( have_rows('__section_5', $page_id) ):

       // loop through the rows of data
      while ( have_rows('__section_5', $page_id) ) : the_row();  ?>

        <?php  if( get_row_layout() == '__section_5' ): ?>


           <section class="home_section_3 section__ oh-y">
           <div class="container">
           
           
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title', $page_id)): ?><!-- if under__the -->
                    <h2><?php the_sub_field('title', $page_id); ?></h2>
                  <?php endif; ?>

                   <?php if( get_sub_field('content', $page_id)): ?><!-- if under__the -->
                    <p><?php the_sub_field('content', $page_id); ?></p>
                  <?php endif; ?>
              </div>
             </div>
           
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                <div class="tab__menu">

                <?php if( have_rows('box_list', $page_id) ): ?>

                    <?php while( have_rows('box_list', $page_id) ): the_row(); 
                        // vars
  //                      $images = get_sub_field('images'); 
                        $menu_name = get_sub_field('menu_name', $page_id); 
                       // $title = get_sub_field('title'); 
                       // $paragraph = get_sub_field('paragraph'); ?> 

                       <a data-tab="<?php echo get_row_index(); ?>" class="<?php if(get_row_index() == '1'){ ?>active<?php }; ?>"><?php echo $menu_name ?></a>

                    <?php endwhile; ?> 
                <?php endif; ?>   

             </div>

          </div>
       <div class="col m12 s12 l12 xl12">
       
        <div class="tab__content">
           
           
              <?php if( have_rows('box_list', $page_id) ): ?>

                  <?php while( have_rows('box_list', $page_id) ): the_row(); 
                      // vars
                      // $images = get_sub_field('images'); 
                
                      $title = get_sub_field('title', $page_id); 
                      $paragraph = get_sub_field('paragraph', $page_id); ?> 

                     <div data-tab="<?php echo get_row_index(); ?>" class="<?php if(get_row_index() == '1'){ ?>active<?php }; ?> tab__block<?php echo get_row_index(); ?>">
                     
                       
                       
                       <?php if( get_row_index() == '1'){ ?>

                          <?php if( $title ): ?><!-- if under__the -->
                            <h1><?php echo $title; ?></h1>
                          <?php endif; ?>   
                                         
                        <?php  }else{ ?>
                         
                          <?php if( $title ): ?><!-- if under__the -->
                            <h2><?php echo $title; ?></h2>
                          <?php endif; ?>   
                                    
                        <?php } ?>
                                          
                        <?php if( $paragraph ): ?><!-- if under__the -->
                          <?php echo $paragraph; ?>
                        <?php endif; ?>

                     
                     </div>
                    
              

                  <?php endwhile; ?> 
              <?php endif; ?>   

        </div>


  
                  
                     
                        
                              
                  
              </div>
              
            </div>
          </div>
                     
        </section>
        


        <?php endif;

      endwhile;

  endif; ?>

<?php } ?>

<?php if( have_rows('__section_5') ):

     // loop through the rows of data
    while ( have_rows('__section_5') ) : the_row();  ?>



      <?php  if( get_row_layout() == '__section_5' ): ?>
       
        
     <section class="home_section_3 section__ oh-y">
           <div class="container">
           
           
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <span class="h2"><?php the_sub_field('title'); ?></span>
                  <?php endif; ?>

                   <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <p><?php the_sub_field('content'); ?></p>
                  <?php endif; ?>
              </div>
             </div>
           
           
           
            <div class="row">
              <div class="col m12 s12 l12 xl12">

                <div class="tab__menu">

                <?php if( have_rows('box_list') ): ?>

                    <?php while( have_rows('box_list') ): the_row(); 
                        // vars
  //                      $images = get_sub_field('images'); 
                        $menu_name = get_sub_field('menu_name'); 
                       // $title = get_sub_field('title'); 
                       // $paragraph = get_sub_field('paragraph'); ?> 

                       <a data-tab="<?php echo get_row_index(); ?>" class="<?php if(get_row_index() == '1'){ ?>active<?php }; ?>"><?php echo $menu_name ?></a>

                    <?php endwhile; ?> 
                <?php endif; ?>   

             </div>

          </div>
       <div class="col m12 s12 l12 xl12">
       
        <div class="tab__content">
           
           
              <?php if( have_rows('box_list') ): ?>

                  <?php while( have_rows('box_list') ): the_row(); 
                      // vars
                      // $images = get_sub_field('images'); 
                
                      $title = get_sub_field('title'); 
                      $paragraph = get_sub_field('paragraph'); ?> 

                     <div data-tab="<?php echo get_row_index(); ?>" class="<?php if(get_row_index() == '1'){ ?>active<?php }; ?> tab__block<?php echo get_row_index(); ?>">
                     
                       <?php if( get_row_index() == '1'){ ?>

                          <?php if( $title ): ?><!-- if under__the -->
                            <h1><?php echo $title; ?></h1>
                          <?php endif; ?>   
                                         
                        <?php  }else{ ?>
                         
                          <?php if( $title ): ?><!-- if under__the -->
                            <h2><?php echo $title; ?></h2>
                          <?php endif; ?>   
                                    
                        <?php } ?>
                                          
                        <?php if( $paragraph ): ?><!-- if under__the -->
                          <?php echo $paragraph; ?>
                        <?php endif; ?>

                     
                     </div>
                    
              

                  <?php endwhile; ?> 
              <?php endif; ?>   

        </div>       
                  
              </div>
              
            </div>
          </div>
                     
        </section>
        

     
      <?php endif;

    endwhile;

endif; ?>

<!-- END section 5 -->


<!-- ORDER FORM -->
<?php if( have_rows('__order_form') ):
     // loop through the rows of data
    while ( have_rows('__order_form') ) : the_row();  ?>

      <?php  if( get_row_layout() == '__order_form' ): ?>

        <section class="section__order_form section__ oh-y">
            <div class="container">
                <div class="row">
                     
                    <div class="col m12 s12 l12 xl12"> 

                      <?php if( get_sub_field('title')): ?><!-- if under__the -->
                        <h2><?php the_sub_field('title'); ?></h2>
                      <?php endif; ?>

                      <?php if( get_sub_field('content')): ?><!-- if under__the -->
                        <p><?php the_sub_field('content'); ?></p>
                      <?php endif; ?>

                    </div>

                     <div class="col m12 s12 l12 xl12">

                    <?php the_content();?>

                    </div>
                    
                   </div>
            </div>
        </section>

      <?php endif;

    endwhile;

endif; ?>


<!-- END ORDER FORM -->



<!-- Contact us -->
<?php if( have_rows('__section_contact_us') ):
     // loop through the rows of data
    while ( have_rows('__section_contact_us') ) : the_row();  ?>

      <?php  if( get_row_layout() == '__section_contact_us' ): ?>

        <section class="section__contact section__ oh-y">
            <div class="container">
                <div class="row">
                     
                     <div class="col m12 s12 l12 xl12"> 
                     
                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>
                  
                  </div>

                     <div class="col m12 s12 l6 xl5">
                    


                   <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <p><?php the_sub_field('content'); ?></p>
                  <?php endif; ?>
                  
               
                   
                    </div>
           
                     <div class="col m12 s12 l6 xl7">
                       
                        <div class="box__map">
                              <div id="map"></div>
                        </div>
                        
                           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                          <script type="text/javascript">
                            
                            $( document ).ready(function() {
                              
                              function createMap(){
                                  var opts = {

                                            center: {
                                   <?php if( have_rows('google_map','option') ): ?>
                                      <?php while( have_rows('google_map','option') ): the_row(); ?>
                                                lat: <?php echo the_sub_field('lat','option'); ?>,
                                                lng: <?php echo the_sub_field('lng','option'); ?>,
                                      <?php endwhile; ?>
                                  <?php endif; ?>
                                            },

                                    
                                      zoom: 18,
                                      zoomControl: true,
                                      zoomControlOptions: {
                                          position: google.maps.ControlPosition.LEFT_BOTTOM
                                      },
                                      mapTypeControl:false,
                                      scaleControl: false,
                                      streetViewControl: false,

                                      fullscreenControl: true,
                                      fullscreenControlOptions: {
                                          position: google.maps.ControlPosition.TOP_LEFT
                                      },

                                    
                                      styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}],
                                      maxZoom: 20,
                                      minZoom: 0,
                                      mapTypeId: 'roadmap',
                                  };

                                  opts.clickableIcons = true;
                                  opts.disableDoubleClickZoom = false;
                                  opts.draggable = true;
                                  opts.keyboardShortcuts = true;
                                  opts.scrollwheel = true;

                                  var map = new google.maps.Map(document.getElementById('map'), opts);

                                  (function(){
                                      var markerOptions = {
                                          map: map,
                                          position: {
                                           <?php if( have_rows('google_map','option') ): ?>
                                              <?php while( have_rows('google_map','option') ): the_row(); ?>
                                                        lat: <?php echo the_sub_field('lat','option'); ?>,
                                                        lng: <?php echo the_sub_field('lng','option'); ?>,
                                              <?php endwhile; ?>
                                          <?php endif; ?>
                                          }
                                      };

                                      markerOptions.icon = {
                                          path: 'M11 2c-3.9 0-7 3.1-7 7 0 5.3 7 13 7 13 0 0 7-7.7 7-13 0-3.9-3.1-7-7-7Zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5 0-1.4 1.1-2.5 2.5-2.5 1.4 0 2.5 1.1 2.5 2.5 0 1.4-1.1 2.5-2.5 2.5Z',
                                          scale: 1.6363636363636363636363636364,
                                          anchor: new google.maps.Point(11, 22),
                                          fillOpacity: 1,
                                          fillColor: '#f44336',
                                          strokeOpacity: 0
                                      };

                                      var marker = new google.maps.Marker(markerOptions);

                                  })();				

                              }
                              
                             });
                              
                          </script>
                         

                          <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDo5PKemTCTYVggybmmNMczPa0lMo5zExA&v=3.31&language=en&libraries=places,geometry&callback=createMap"></script> 
     

                      </div>
                   </div>
            </div>
        </section>

      <?php endif;

    endwhile;

endif; ?>


<!-- END Contact us -->





<?php
//get_sidebar();
get_footer(); ?>

