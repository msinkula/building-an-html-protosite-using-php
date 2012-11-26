<?php 

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') { print 'Home'; }

if ($page == 'about.php') { print 'About'; }

	if ($page == 'about-mission.php') { print 'About Our Mission'; }
    
    if ($page == 'about-process.php') { print 'About Our Process'; }
    
    if ($page == 'about-team.php') { print 'About Our Team'; }

if ($page == 'services.php') { print 'Services'; }

	if ($page == 'services-strategy.php') { print 'Strategy Services'; }
	
	if ($page == 'services-design.php') { print 'Design Services'; }
	
	if ($page == 'services-development.php') { print 'Development Services'; }

if ($page == 'work.php') { print 'Work'; }

	if ($page == 'work-logos.php') { print 'Logo Work'; }
	
	if ($page == 'work-print.php') { print 'Print Work'; }
	
	if ($page == 'work-web.php') { print 'Web Work'; }

if ($page == 'blog.php') { print 'Blog'; }

if ($page == 'contact.php') { print 'Contact'; } 

?>