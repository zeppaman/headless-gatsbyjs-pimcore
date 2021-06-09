'use strict';

const path = require('path');
const _ = require('lodash');

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

let tags=[];
const edgesPost  = resultPost.data.pimcore.getPostListing.edges;


_.each(edgesPost, (edge) => {
    if (_.get(edge, 'node.classname') === 'Post') {
      console.log(edge.node.tags);
      tags=[...tags,...edge.node.tags]
      console.info(tags);

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


      // Pages
  const resultCat = await graphql(`
  {
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
  `);

const edgesCat  = resultCat.data.pimcore.getCategoryListing.edges;
//console.info(edgesPost);

_.each(edgesCat, (edge) => {
    if (_.get(edge, 'node.classname') === 'Category') {
      console.info(edge);
      console.info("CREATING Category "+edge.node.slug)
      createPage({
        path: "/category/"+edge.node.slug,
        component: path.resolve('./src/templates/category-template.js'),
        context: { 
          id: parseInt(edge.node.id)
        }
      });
    }});

 
  tags=[...new Set(tags)];


  
_.each(tags, (edge) => {
 
    

    console.info(edge);
    console.info("CREATING Tag "+edge.path)
    createPage({
      path: "/tag"+edge.path,
      component: path.resolve('./src/templates/tag-template.js'),
      context: { 
        slug: edge.path,
        name: edge.name
      }
    });
  });

  console.log(tags);

  await createPostsPages(graphql, actions);
};

module.exports = createPages;
