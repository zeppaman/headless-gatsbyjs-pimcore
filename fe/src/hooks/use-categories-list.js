// @flow strict
import { useStaticQuery, graphql } from 'gatsby';

const useCategoriesList = () => {
  const { pimcore } = useStaticQuery(
    graphql`
      query CategoriesListQuery {
        pimcore {
          getCategoryListing {
            edges {
              node {
                classname
                description
                html
                id
                slug
                
              }
            }
          }
        }
      }
    `
  );

  return pimcore.getCategoryListing.edges.map(x=>x.node);
};

export default useCategoriesList;
