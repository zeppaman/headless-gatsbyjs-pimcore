// @flow strict
import React from 'react';
import { graphql } from 'gatsby';
import Layout from '../components/Layout';
import Sidebar from '../components/Sidebar';
import Feed from '../components/Feed';
import Page from '../components/Page';
import Pagination from '../components/Pagination';
import { useSiteMetadata } from '../hooks';

type Props = {
  data:{}
};

const CategoryTemplate = ({ data }: Props) => {
  console.log(data);
  const { title: siteTitle, subtitle: siteSubtitle } = useSiteMetadata();

  const { edges } = data.pimcore.getPostListing;
  const  category  = data.pimcore.getCategory.description;
  const pageTitle =  `${category} - ${siteTitle}`;

  return (
    <Layout title={pageTitle} description={siteSubtitle}>
      <Sidebar />
      <Page title={category}>
        {category}
        <h2>Post</h2>
        <Feed edges={edges} />        
      </Page>
    </Layout>
  );
};

export const query = graphql`
  query CategoryPage($id: Int!) {
   pimcore {
    getCategory(id: $id) {
      classname
      description
      fullpath
      html
      id
      slug
      socialImage {
        fullpath
      }
    }

    getPostListing {
      edges {
        node {
          Text
          Title
          date
          description
          id
          slug
          tags {
            id
            name
            path
          }
        }
      }
    }
 
  
  }
  }
`;

export default CategoryTemplate;
