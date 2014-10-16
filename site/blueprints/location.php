<?php if(!defined('KIRBY')) exit ?>

title: Location
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  top:
    label: Distance From The Top
    type: text
    width: 1/4
    default: 1
  left:
    label: Distance From The Left
    type: text
    width: 1/4
    default: 1
    info: text