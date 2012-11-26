<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<!-- Begin Left -->
<div id="left">
<?php // see if the page requires sub navigation
	if ($page != 'index.php') { ?>
    <h2 id="sub-navigation-head"><?php 
		// if the page requires sub navigation write the proper headline into the page
		if ($page == 'about.php' || $page == 'about-mission.php' || $page == 'about-process.php' || $page == 'about-team.php' ) { print 'About'; }
		elseif ($page == 'services.php' || $page == 'services-design.php' || $page == 'services-development.php' || $page == 'services-strategy.php' ) { print 'Services'; }
		elseif ($page == 'work.php' || $page == 'work-logos.php' || $page == 'work-print.php' || $page == 'work-web.php' ) { print 'Work'; } 
		elseif ($page == 'blog.php') { print 'Blog'; }
		elseif ($page == 'contact.php') { print 'Contact'; }
	?></h2>
    <ul id="sub-navigation-items">
		<?php // write the proper "about" sub navigation
        if ($page == 'about.php' || $page == 'about-mission.php' || $page == 'about-process.php' || $page == 'about-team.php' ) { ?>
            <li<?php if ($page == 'about-mission.php') { print ' class="sub-on"'; } ?>><a href="about-mission.php">Mission</a></li>
            <li<?php if ($page == 'about-process.php') { print ' class="sub-on"'; } ?>><a href="about-process.php">Process</a></li>
            <li<?php if ($page == 'about-team.php') { print ' class="sub-on"'; } ?>><a href="about-team.php">Team</a></li> <?php } ?>
        <?php //  // write the proper "services" sub navigation
        if ($page == 'services.php' || $page == 'services-strategy.php' || $page == 'services-design.php' || $page == 'services-development.php' ) { ?>
            <li<?php if ($page == 'services-strategy.php') { print ' class="sub-on"'; } ?>><a href="services-strategy.php">Strategy</a></li>
            <li<?php if ($page == 'services-design.php') { print ' class="sub-on"'; } ?>><a href="services-design.php">Design</a></li>
            <li<?php if ($page == 'services-development.php') { print ' class="sub-on"'; } ?>><a href="services-development.php">Development</a></li> <?php } ?>
        <?php //  // write the proper "work" sub navigation
        if ($page == 'work.php' || $page == 'work-logos.php' || $page == 'work-print.php' || $page == 'work-web.php' ) { ?>
            <li<?php if ($page == 'work-logos.php') { print ' class="sub-on"'; } ?>><a href="work-logos.php">Logos</a></li>
            <li<?php if ($page == 'work-print.php') { print ' class="sub-on"'; } ?>><a href="work-print.php">Print</a></li>
            <li<?php if ($page == 'work-web.php') { print ' class="sub-on"'; } ?>><a href="work-web.php">Web</a></li> <?php } ?>
    </ul>
<?php } ?>
</div>
<!-- End Left -->