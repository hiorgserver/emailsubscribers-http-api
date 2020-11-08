<?php
/*
  Plugin Name: EmailSubscribers HTTP API
  Plugin URI: https://github.com/hiorgserver/emailsubscribers-http-api
  Description: HTTP-API, um neue Abonnenten zu Email Subscribers hinzuzufügen
  Version: 0.1
  Author: HiOrg Server GmbH
  Author URI: http://www.hiorg-server.de
  License: GPL
 */

add_action('init', 'emailsubscribers_http_api_init');

function emailsubscribers_http_api_init() {
    add_shortcode("http2emailsubscribers","process_http2emailsubscribers");
}

function h2es_error($message) {
	echo json_encode(['status' => 'ERROR', 'message' => $message]);
	exit;
}

function process_http2emailsubscribers($atts) {
    
    extract(shortcode_atts(array("secret" => ""), $atts));
    if (!empty($secret) && ($_REQUEST["secret"]!=$secret)) {
		h2es_error('invalid secret');
    }
	
	if ('subscribe' !== $_REQUEST['ig_es_external_action']) {
		h2es_error('POST-Parameter `ig_es_external_action` does not equals `subscribe`');
	}
    
    $handler = new ES_Handle_Subscription();
	// constructor fuehrt direkt aus: ->handle_external_subscription();
	// dies gibt eine JSON-Response zurück 
	// und bricht die Verarbeitung ab.

	h2es_error('POST-Parameter `list` must contain existent list-hash');
}
