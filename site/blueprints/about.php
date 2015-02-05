<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  hero_header:
    label: Hero Header
    type:  text
  hero_subheader:
    label: Hero Subheader
    type:  textarea
  line_a:
    type:  line
  bios_header:
    label: Bios Header
    type:  text
  bios_subheader:
    label: Bios Subheader
    type:  textarea
  line_b:
    type:  line
  philosophy_header:
    label: Philosophy Header
    type:  text
  philosophy_subheader:
    label: Philosophy Subheader
    type:  textarea
  principles:
    label: Our Principles
    type:  structure
    entry: >
      {{principle}}
      {{principle_desc}}
      {{principle_lr}}
    fields:
      principle:
        label: Principle
        type:  text
      principle_desc:
        label: Principle Description
        type:  textarea
      principle_lr:
        label: Left or Right?
        type:  radio
        options:
          left: Left
          right: Right