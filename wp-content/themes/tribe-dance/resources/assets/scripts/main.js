// import external dependencies

import 'jquery';
import './autoload/**/*'

import Router from './util/Router';
import common from './routes/common';
import home from './routes/front';

/** Populate Router instance with DOM routes */
const routes = new Router({
  common,
  home,
  // front,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
