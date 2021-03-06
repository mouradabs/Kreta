/*
 * This file is part of the Kreta package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

import Relay from 'react-relay';
import RelayQuery from 'react-relay/lib/RelayQuery';
import RelayQueryRequest from 'react-relay/lib/RelayQueryRequest';

const query = Relay.QL`
  query {
    organizations(organizationConnectionInput: $organizationConnectionInput) {
      totalCount,
      edges {
        node {
          id,
          name,
          slug,
          owners {
            id
          }
          projects(first: $projectsFirst) {
            totalCount,
            pageInfo {
              hasNextPage
            },
            edges {
              node {
                id,
                name,
                slug,
                organization {
                  slug
                }
              }
            }
          }
        }
      }
    }
  }
`;

class OrganizationsQueryRequest extends RelayQueryRequest {
  static build({name = null, organizationsFirst = 5, projectsFirst = 5} = {}) {
    const organizationConnectionInput = {};

    if (name) {
      organizationConnectionInput.name = name;
    }
    if (organizationsFirst) {
      organizationConnectionInput.first = organizationsFirst;
    }

    return new RelayQueryRequest(
      RelayQuery.Root.create(query, {}, {
        organizationConnectionInput,
        projectsFirst
      })
    );
  }
}

export default OrganizationsQueryRequest;
