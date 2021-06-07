'use strict';

const path = require('path');
const _ = require('lodash');
const createCategoriesPages = require('./pagination/create-categories-pages.js');
const createTagsPages = require('./pagination/create-tags-pages.js');
const createPostsPages = require('./pagination/create-posts-pages.js');

const createPages = async ({ graphql, actions }) => {
  const { createPage } = actions;

  // 404
  createPage({
    path: '/404',
    component: path.resolve('./src/templates/not-found-template.js')
  });

  // Tags list
  createPage({
    path: '/tags',
    component: path.resolve('./src/templates/tags-list-template.js')
  });

  // Categories list
  createPage({
    path: '/categories',
    component: path.resolve('./src/templates/categories-list-template.js')
  });

  
  // Pages
  const resultPage = await graphql(`
  {
    pimcore {
      getPageListing {
        edges {
          node {
            id
            slug
            classname,
            id
          }
        }
      }
    }
  }
  `);

const edgesPage  = resultPage.data.pimcore.getPageListing.edges;
console.info(resultPage.data.pimcore.getPageListing.edges[0]);
console.info(edgesPage);
_.each(edgesPage, (edge) => {
  console.info(edge);
    if (_.get(edge, 'node.classname') === 'Page') {
      
      console.info("CREATING Page"+edge.node.slug)
      createPage({
        path: edge.node.slug,
        component: path.resolve('./src/templates/page-template.js'),
        context: { 
          id: parseInt(edge.node.id)
        }
      });
    }});
  

     // Pages
  const resultPost = await graphql(`
  {
    pimcore {
      getPostListing {
        edges {
          node {
            slug,
            classname,
            id
          }
        }
      }
    }
  }
  `);

const edgesPost  = resultPost.data.pimcore.getPostListing.edges;
console.info(edgesPost);

_.each(edgesPost, (edge) => {
    if (_.get(edge, 'node.classname') === 'Post') {
      console.info(edge);
      console.info("CREATING Post "+edge.node.slug)
      createPage({
        path: edge.node.slug,
        component: path.resolve('./src/templates/post-template.js'),
        context: { 
          id: parseInt(edge.node.id)
        }
      });
    }});

  // // Feeds
  // await createTagsPages(graphql, actions);
  // await createCategoriesPages(graphql, actions);
  // await createPostsPages(graphql, actions);
};

module.exports = createPages;
