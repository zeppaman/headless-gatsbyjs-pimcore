// @flow strict
import React from 'react';
import { graphql } from 'gatsby';
import Layout from '../components/Layout';
import Post from '../components/Post';
import { useSiteMetadata } from '../hooks';



const PostTemplate = ({ data }) => {
  console.log(data);
  const { title: siteTitle, subtitle: siteSubtitle } = useSiteMetadata();
  const  post=data.pimcore.getPostListing.edges[0].node;
  const {
  title: postTitle,
  description: metaDescription,  
  } =post;

  const socialImageUrl=post.socialImage.fullpath;

  return (
    <Layout title={`${postTitle} - ${siteTitle}`} description={metaDescription} socialImage={socialImageUrl} >
      <Post post={post} />
    </Layout>
  );
};

export const query = graphql`
  query PostBySlug($filter: String!) {
    pimcore {
      getPostListing(filter: $filter ) {
        edges {
          node {
            Draft
            Text
            Title
            tags {
              name
              id
            }
            classname
            description
            id
            slug
            socialImage {
              fullpath
            }
            
          }
        }
      }
    }
  }
`;

export default PostTemplate;
