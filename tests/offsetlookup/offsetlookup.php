<?php

$variable['data']['title'] = html_entity_decode(wp_get_document_title());
$variable['veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString']['title'] = html_entity_decode(wp_get_document_title());
$variable['data']['veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString'] = html_entity_decode(wp_get_document_title());
$variable['veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString']['veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString'] = html_entity_decode(wp_get_document_title());
$variable[1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111][1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111] = html_entity_decode(wp_get_document_title());
$variable['veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString'] = $variable->registered['veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString'];
$variable = get_taxonomy_function(get_queried_object_function()->taxonomy)->object_type[0];
$someArray[] = $this->something->long->that->not->makes->it->break->onto->two->break->lines();
