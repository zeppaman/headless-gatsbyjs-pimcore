// @flow strict
import { useStaticQuery, graphql } from 'gatsby';
const _ = require('lodash');

const useTagsList = () => {
    
  let tags=[];


  const { pimcore } = useStaticQuery(
    graphql`
    {
      pimcore {
        getPostListing {
          edges {
            node {
              slug,
              classname,
              id,
              tags
              {
                id
                name
                path
              }
            }
          }
        }
      }
    }
    `);

   
  const edgesPost  = pimcore.getPostListing.edges;


    _.each(edgesPost, (edge) => {       
        tags=[...tags,...edge.node.tags];     
    });

    tags=[...new Set(tags)];

    return tags;

};

export default useTagsList;
