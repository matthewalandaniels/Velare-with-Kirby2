<?php if(!defined('KIRBY')) exit ?>

title: Article
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
	date:
		label: Published Date
		type: date
		format: MM/DD/YYYY
		default: today
	vimeo_embed:
		label: Vimeo Embed Code
		type: textarea
		icon: code
		buttons: false
		help: Get this code from clicking the share button on the video. <br> Make sure you <u>uncheck</u> the "Show text link underneath this video." option.
	text:
		label: Text
		type: textarea
