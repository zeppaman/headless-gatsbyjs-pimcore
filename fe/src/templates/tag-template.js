// @flow strict
import React from 'react';
import { graphql } from 'gatsby';
import Layout from '../components/Layout';
import Sidebar from '../components/Sidebar';
import Feed from '../components/Feed';
import Page from '../components/Page';
import { useSiteMetadata } from '../hooks';

type Props = {
  data: AllMarkdownRemark,
  pageContext: PageContext
};

const TagTemplate = ({data, pageContext} ) => {
  const { title: siteTitle, subtitle: siteSubtitle } = useSiteMetadata();

  console.log(data);

  const tag=pageContext.name;
  const { edges } = data.pimcore.getPostListing;
  const pageTitle = `All Posts tagged as "${tag}"  ${siteTitle}` ;

  return (
    <Layout title={pageTitle} description={siteSubtitle}>
      <Sidebar />
      <Page title={tag}>
        <Feed edges={edges} />
      </Page>
    </Layout>
  );
};

export const query = graphql`
  {
    site {
      siteMetadata {
        title
        subtitle
      }
    }
   
    pimcore {
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

export default TagTemplate;
