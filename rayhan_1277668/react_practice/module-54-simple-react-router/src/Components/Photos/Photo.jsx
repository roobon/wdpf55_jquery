import React from 'react';
import { Link } from 'react-router-dom';

const Photo = ({myPhotos}) => {
    // console.log(myPhotos);
    const { title, body, id   } = myPhotos ;
    return (
        <div className='friend_div'>
            <h3> {title}  </h3>
           
            <Link to={`/photo/${id}`}>  <p> see more... </p> </Link>
        </div>
    );
};

export default Photo;