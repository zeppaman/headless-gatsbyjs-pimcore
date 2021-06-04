// @flow strict
import React from 'react';
import { graphql } from 'gatsby';
import Layout from '../components/Layout';
import Post from '../components/Post';
import { useSiteMetadata } from '../hooks';



const PostTemplate = ({ data }) => {
  console.log(data);
  const { title: siteTitle, subtitle: siteSubtitle } = useSiteMetadata();
  const  post=data.pimcore.getPost;
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
    query PostBySlug($id: Int!)  {
      pimcore {
        getPost(id: $id) {
          Draft
          Text
          Title
          classname
          date
          description
          id
          slug
        }
      }
    }
`;

export default PostTemplate;
