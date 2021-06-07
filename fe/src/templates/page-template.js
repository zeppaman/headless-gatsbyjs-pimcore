// @flow strict
import React from 'react';
import { graphql } from 'gatsby';
import Layout from '../components/Layout';
import Sidebar from '../components/Sidebar';
import Page from '../components/Page';
import { useSiteMetadata } from '../hooks';




const PageTemplate = ({ data} ) => {

  console.info(data);

  const  page=data.pimcore.getPage;

  const { title: siteTitle, subtitle: siteSubtitle } = useSiteMetadata();

  const { 
    Title: pageTitle,
    description: metaDescription,   
    Body: pageBody
  } =page;

 const socialImageUrl=page.socialImage.fullpath;

  return (
    <Layout title={`${pageTitle} - ${siteTitle}`} description={metaDescription} socialImage={socialImageUrl} >
      <Sidebar />
      <Page title={pageTitle}>
        <div dangerouslySetInnerHTML={{ __html: pageBody }} />
      </Page>
    </Layout>
  );
};

export const query = graphql`
query PageBySlug($id: Int!){
  pimcore {
    getPage(id: $id) {
          id,
          Title,
          Body,
          slug,
          socialImage {
            fullpath
          },
          published,
          classname,
          description
        }
      }
}
`;

export default PageTemplate;
