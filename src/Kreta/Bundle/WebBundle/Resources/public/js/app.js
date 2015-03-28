/*
 * This file belongs to Kreta.
 * The source code of application includes a LICENSE file
 * with all information about license.
 *
 * @author benatespina <benatespina@gmail.com>
 * @author gorkalaucirica <gorka.lauzirika@gmail.com>
 */

import {HeaderView} from 'views/layout/mainMenu';
import {MainView} from 'views/layout/mainContent';
import {LeftAsideView} from 'views/layout/leftAside';
import {RightAsideView} from 'views/layout/rightAside';
import {Router} from 'router';
import {Config} from 'config';

'use strict';

$(() => {
  function getCookie(name) {
    var value = '; ' + document.cookie;
    var parts = value.split('; ' + name + '=');
    if (parts.length === 2) {
      return parts.pop().split(';').shift();
    }
  }

  var App = {
    views: {},
    collections: {},
    config: new Config(),
    accessToken: getCookie('access_token')
  };

  window.App = App;

  Backbone.$.ajaxSetup({
    headers: {'Authorization': 'Bearer ' + App.accessToken}
  });

  new Router();
  new HeaderView();

  App.views.main = new MainView();
  App.views.leftAside = new LeftAsideView();
  App.views.rightAside = new RightAsideView();

  Backbone.history.start({pushState: true});
});

