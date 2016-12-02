/*
 * This file is part of the Kreta package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

import React from 'react';

import SectionHeader from './SectionHeader';

export default props => (
  <section className="section">
    <SectionHeader actions={props.action} title={props.title}/>
    <div className="section__content">
      {props.children}
    </div>
  </section>
);