<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  location:
    label: Location
    type:  text
  vimeo_url:
    label: Vimeo Url
    type: url
  description:
    label: Description
    type:  textarea
  credits:
    label: Credits
    type: textarea
  toggle:
    label: Show Film Stills?
    type: toggle
    text: yes/no