
<?php
    global $active_class;

    $link = get_field('link');

    
    // echo  '<pre>';
    // print_r($link);
    // echo '</pre>';
?>


<div class="item bottom30">
                  <h2 class="text-capitalize font-xlight whitecolor">
                     <span class="d-block"><?php the_title()?></span>
                     <span class="d-block font-xlight"><?php the_content()?></span>
                  </h2>
                  <a class="button btnsecondary top40 pagescroll" href="#our-process">Sign me up!</a>
               </div>

            <!-- SLIDE  -->
            <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" class="rev_gradient <?php echo $active_class?>">
               
                <!-- MAIN IMAGE -->
                <img src="<?php the_field('image')?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"  data-no-retina>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme" 
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                   data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" 
                   data-whitespace="nowrap" data-responsive_offset="on"
                   data-width="['none','none','none','none']" data-type="text"
                   data-textalign="['center','center','center','center']"
                   data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                   data-start="1200" data-splitin="none" data-splitout="none">
                    <h1 class="text-capitalize fontbold whitecolor"><?php the_title()?></h1>
                </div>
                <div class="tp-caption tp-resizeme" 
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                   data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                   data-whitespace="nowrap" data-responsive_offset="on"
                   data-width="['none','none','none','none']" data-type="text"
                   data-textalign="['center','center','center','center']"
                   data-transform_idle="o:1;" 
                   data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                   data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"  
                   data-start="1000" data-splitin="none" data-splitout="none">
                    <h1 class="text-capitalize font-xlight whitecolor"><?php the_content()?></h1>
                </div>
                  <a class="tp-caption tp-resizeme" href="<?php echo $link['url']?>"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                     data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','160']" 
                     data-width="200" data-height="none"
                     data-whitespace="normal" data-type="button" 
                     data-actions='' data-responsive_offset="on"
                     data-textAlign="['center','center','center','center']"
                     data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                     data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                     data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;"}]'
                     style=" box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                     <span class="button btnprimary-alt pagescroll"><?php echo $link['title']?></span> 
                 </a>
            </li>
           