<?php

if ( defined( 'WP_ENV' ) && WP_ENV == 'local' ) {
	require dirname( __FILE__ ) . '/debug-bar/debug-bar.php';
	require dirname( __FILE__ ) . '/debug-bar-console/debug-bar-console.php';
	require dirname( __FILE__ ) . '/debug-bar-cron/debug-bar-cron.php';
	require dirname( __FILE__ ) . '/debug-bar-extender/debug-bar-extender.php';
	require dirname( __FILE__ ) . '/log-deprecated-notices/log-deprecated-notices.php';
	require dirname( __FILE__ ) . '/log-viewer/log-viewer.php';
	require dirname( __FILE__ ) . '/monster-widget/monster-widget.php';
	require dirname( __FILE__ ) . '/piglatin/piglatin.php';
	require dirname( __FILE__ ) . '/query-monitor/query-monitor.php';
	require dirname( __FILE__ ) . '/rewrite-rules-inspector/rewrite-rules-inspector.php';
	require dirname( __FILE__ ) . '/user-switching/user-switching.php';
	require dirname( __FILE__ ) . '/rtl-tester/rtl-tester.php';
	require dirname( __FILE__ ) . '/simply-show-ids/simply-show-ids.php';
	require dirname( __FILE__ ) . '/theme-check/theme-check.php';
	require dirname( __FILE__ ) . '/theme-test-drive/theme-test-drive.php';
	require dirname( __FILE__ ) . '/regenerate-thumbnails/regenerate-thumbnails.php';
}
