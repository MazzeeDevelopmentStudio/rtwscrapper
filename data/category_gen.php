<?php
	$c = array(
		'2' => array(
			'NAME'      => 'PROGRAMMING JOBS',
			'CANONICAL' => 'programming',
			'RSSURL'    => 'https://weworkremotely.com/categories/2-programming/jobs.rss'
		),
		'4' => array(
			'NAME'      => 'ALL OTHER JOBS',
			'CANONICAL' => 'remote',
			'RSSURL'    => 'https://weworkremotely.com/categories/4-remote/jobs.rss'
		),
		'1' => array(
			'NAME'      => 'DESIGN JOBS',
			'CANONICAL' => 'design',
			'RSSURL'    => 'https://weworkremotely.com/categories/1-design/jobs.rss'
		),
		'7' => array(
			'NAME'      => 'CUSTOMER SUPPORT JOBS',
			'CANONICAL' => 'customer-support',
			'RSSURL'    => 'https://weworkremotely.com/categories/7-customer-support/jobs.rss'
		),
		'9' => array(
			'NAME'      => 'MARKETING JOBS',
			'CANONICAL' => 'marketing',
			'RSSURL'    => 'https://weworkremotely.com/categories/9-marketing/jobs.rss'
		),
		'6' => array(
			'NAME'      => 'DEVOPS & SYSADMIN JOBS',
			'CANONICAL' => 'devops-sysadmin',
			'RSSURL'    => 'https://weworkremotely.com/categories/6-devops-sysadmin/jobs.rss'
		),
		'3' => array(
			'NAME'      => 'BUSINESS/EXEC & MANAGEMENT JOBS',
			'CANONICAL' => 'business-exec-management',
			'RSSURL'    => 'https://weworkremotely.com/categories/3-business-exec-management/jobs.rss'
		),
		'5' => array(
			'NAME'      => 'COPYWRITING JOBS',
			'CANONICAL' => 'copywriting',
			'RSSURL'    => 'https://weworkremotely.com/categories/5-copywriting/jobs.rss'
		)
	);
	
	$json = json_encode($c);
	
	print($json);
	
?>