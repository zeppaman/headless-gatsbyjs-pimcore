// @flow strict
import React from 'react';
import { Link } from 'gatsby';
import kebabCase from 'lodash/kebabCase';
import Sidebar from '../components/Sidebar';
import Layout from '../components/Layout';
import Page from '../components/Page';
import { useSiteMetadata, useCategoriesList } from '../hooks';

const CategoriesListTemplate = () => {
  const { title, subtitle } = useSiteMetadata();
  const categories = useCategoriesList();
  console.log(categories);

  return (
    <Layout title={`Categories - ${title}`} description={subtitle}>
      <Sidebar />
      <Page title="Categories">
        <ul>
          {categories.map((category) => (
            <li key={category.slug}>
              <Link to={`/category/${kebabCase(category.slug)}/`}>
                {category.description} 
              </Link>
            </li>
          ))}
        </ul>
      </Page>
    </Layout>
  );
};

export default CategoriesListTemplate;
