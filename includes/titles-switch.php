<?php 

$page = basename($_SERVER['SCRIPT_NAME']);


switch($page):
	/* Home Page */	
	case 'index.php':
		print 'Home (Switch)';
		break;
	/* About Pages */	
	case 'about.php':
		print 'About';
		break;
	case 'about-mission.php':
		print 'About Our Mission';
		break;
	case 'about-process.php':
		print 'About Our Process';
		break;
	case 'about-team.php':
		print 'About Our Team';
		break;
	/* Services Pages */	
	case 'services.php':
		print 'Services';
		break;
	case 'services-strategy.php':
		print 'Strategy Services';
		break;
	case 'services-design.php':
		print 'Design Services';
		break;
	case 'services-development.php':
		print 'Development Services';
		break;
	/* Work Pages */	
	case 'work.php':
		print 'Work';
		break;
	case 'work-logos.php':
		print 'Logo Work';
		break;
	case 'work-print.php':
		print 'Print Work';
		break;
	case 'work-web.php':
		print 'Web Work';
		break;
	/* Blog Page */	
	case 'blog.php':
		print 'Blog';
		break;
	/* Contact Page */	
	case 'contact.php':
		print 'Contact';
		break;

?>