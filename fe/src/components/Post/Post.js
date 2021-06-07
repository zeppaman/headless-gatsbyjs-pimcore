// @flow strict
import React from 'react';
import { Link } from 'gatsby';
import Author from './Author';
import Comments from './Comments';
import Content from './Content';
import Meta from './Meta';
import Tags from './Tags';
import styles from './Post.module.scss';


const Post = ( data ) => {
const post= data.post;

  const { Text: html } = post;
  const { slug } = post;
  const { tags, Title: title} = post;

  const date=new Date(post.date);
  console.log(tags);

  return (
    <div className={styles['post']}>
      <Link className={styles['post__home-button']} to="/">All Articles</Link>

      <div className={styles['post__content']}>
        <Content body={html} title={title} />
      </div>

      <div className={styles['post__footer']}>
        <Meta date={date} />
        <Tags tags={tags}  />
        <Author />
      </div>

      <div className={styles['post__comments']}>
        <Comments postSlug={slug} postTitle={title} />
      </div>
    </div> 
  );
};

export default Post;
