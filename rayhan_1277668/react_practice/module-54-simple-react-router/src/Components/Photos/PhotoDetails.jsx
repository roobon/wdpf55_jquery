import React from 'react';
import { useLoaderData } from 'react-router-dom';

const PhotoDetails = () => {
    const post = useLoaderData() ;
    console.log(post);
    return (
        <div>
            <h1> Title:  {post.title} </h1>
            <h3> Description: {post.body}  </h3>
        </div>
    );
};

export default PhotoDetails;