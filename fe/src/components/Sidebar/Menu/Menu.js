// @flow strict
import React from 'react';
import { Link } from 'gatsby';
import styles from './Menu.module.scss';
import { StaticQuery, graphql } from "gatsby"


type Props = {
  menu: {
    slug: string,
    Title: string
  }[]
};

const Menu = ({ menu }: Props) => {

  return (
    <StaticQuery
      query={graphql`
      {
        pimcore {
          getPageListing {
            edges {
              node {
                Title
                id
                slug
                home
              }
            }
          }
        }
        
      }
      `}

      render={data => {
        const menu=data.pimcore.getPageListing.edges;
       return( <nav className={styles['menu']}>
        <ul className={styles['menu__list']}>
          {menu.map((item) => (
            <li className={styles['menu__list-item']} key={item.node.slug}>
              <Link
                to={item.node.slug}
                className={styles['menu__list-item-link']}
                activeClassName={styles['menu__list-item-link--active']}
              >
                {item.node.Title}
              </Link>
            </li>
          ))}
        </ul>
      </nav>
      )}}
      />
  )
  }

export default Menu;

