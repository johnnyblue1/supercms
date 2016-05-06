<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(

	'users_create' => array(
	   	array(
			 'field'   => 'name', 
			 'label'   => 'Imię', 
			 'rules'   => 'trim|required'
		),
	   	array(
			 'field'   => 'email', 
			 'label'   => 'Email', 
			 'rules'   => 'trim|required|valid_email|is_unique[users.email]'
		),
	   	array(
			 'field'   => 'password', 
			 'label'   => 'Hasło', 
			 'rules'   => 'trim|required|matches[passconf]'
		),   
	   	array(
			 'field'   => 'passconf', 
			 'label'   => 'Potwierdzenie hasła', 
			 'rules'   => 'trim|required'
		),
	),

	'users_edit' => array(
	    array(
			 'field'   => 'name', 
			 'label'   => 'Imię', 
			 'rules'   => 'trim|required'
		),
	    array(
			 'field'   => 'email', 
			 'label'   => 'Email', 
			 'rules'   => 'trim|required|valid_email|callback__unique_email'
		),
	    array(
			 'field'   => 'password', 
			 'label'   => 'Hasło', 
			 'rules'   => 'trim|matches[passconf]'
		),   
	    array(
			 'field'   => 'passconf', 
			 'label'   => 'Potwierdzenie hasła', 
			 'rules'   => 'trim'
		),
	),

	'panel_login' => array(
	    array(
			 'field'   => 'email', 
			 'label'   => 'Email', 
			 'rules'   => 'trim|required|valid_email'
		),
	    array(
			 'field'   => 'password', 
			 'label'   => 'Hasło', 
			 'rules'   => 'trim|required'
		),   
	),

	'pages_create' => array(
	   	array(
			 'field'   => 'title', 
			 'label'   => 'Tytuł', 
			 'rules'   => 'trim|required'
		),
	   	array(
			 'field'   => 'alias', 
			 'label'   => 'Alias', 
			 'rules'   => 'trim|required|is_unique[pages.alias]'
		),
	   	array(
			 'field'   => 'content', 
			 'label'   => 'Treść', 
			 'rules'   => 'trim|required'
		),   
	),

	'pages_edit' => array(
	   	array(
			 'field'   => 'title', 
			 'label'   => 'Tytuł', 
			 'rules'   => 'trim|required'
		),
	   	array(
			 'field'   => 'alias', 
			 'label'   => 'Alias', 
			 'rules'   => 'trim|required|callback__unique_alias'
		),
	   	array(
			 'field'   => 'content', 
			 'label'   => 'Treść', 
			 'rules'   => 'trim|required'
		), 
	),

	'blog_create' => array(
	   	array(
			 'field'   => 'title', 
			 'label'   => 'Tytuł', 
			 'rules'   => 'trim|required'
		),
	   	array(
			 'field'   => 'alias', 
			 'label'   => 'Alias', 
			 'rules'   => 'trim|required|is_unique[blog.alias]'
		),
	   	array(
			 'field'   => 'date', 
			 'label'   => 'Data', 
			 'rules'   => 'trim|required'
		),
	   	array(
			 'field'   => 'content', 
			 'label'   => 'Treść', 
			 'rules'   => 'trim|required'
		),   
	),

	'blog_edit' => array(
	   	array(
			 'field'   => 'title', 
			 'label'   => 'Tytuł', 
			 'rules'   => 'trim|required'
		),
	   	array(
			 'field'   => 'alias', 
			 'label'   => 'Alias', 
			 'rules'   => '<trim></trim>'
		),
	   	array(
			 'field'   => 'date', 
			 'label'   => 'Data', 
			 'rules'   => 'trim|required'
		),
	   	array(
			 'field'   => 'content', 
			 'label'   => 'Treść', 
			 'rules'   => 'trim|required'
		),   
	),

);