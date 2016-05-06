<?php

function hash_salt($string)
{
	return hash('sha512', $string . config_item('encryption_key'));
}

function alias($string)
{
	$string = convert_accented_characters($string);
	$string = url_title($string, '-', TRUE);
	return $string;
}

function excerpt($string, $q)
{
	$string = word_limiter($string, $q);
	return $string;
}