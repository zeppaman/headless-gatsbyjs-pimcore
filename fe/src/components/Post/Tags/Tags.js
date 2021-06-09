// @flow strict
import React from 'react';
import { Link } from 'gatsby';
import styles from './Tags.module.scss';

type Props = {
  tags: []
};

const Tags = ({ tags }: Props) => {
console.info(tags)  ;
const tagKeys=Object.keys(tags);

return (
<div>
  <div className={styles['tags']}>
    TAGS
    <ul className={styles['tags__list']}>
      {tagKeys.map((key, i) => (
     
        <li className={styles['tags__list-item']} key={tags[key].id}>
         
         

         <Link to={"/tag"+tags[key].path} className={styles['tags__list-item-link']}>
         {tags[key].name}
        </Link> 
        </li>
      ))}
    </ul>
  </div>
  </div>
)};

export default Tags;


