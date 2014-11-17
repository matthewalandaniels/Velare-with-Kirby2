<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields: true
  meta:
    label: Site Meta Data
    type: headline
  title:
    label: Title
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  text
  newsletter_info:
    label: Newsletter Info
    type: headline
  newsletter_title:
    label: Newsletter Title
    type: text
  newsletter_text:
    label: Newsletter Text
    type: textarea
  social_media_links:
    label: Social Media Links
    type: headline
  twitter_link:
    label: Twitter Link
    type: url
    icon: twitter
  pinterest_link:
    label: Pinterest Link
    type: url
    icon: pinterest
  facebook_link:
    label: Facebook Link
    type: url
    icon: facebook
