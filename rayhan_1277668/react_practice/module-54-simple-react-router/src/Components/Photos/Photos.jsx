import React from 'react';
import { useLoaderData } from 'react-router-dom';
import Photo from './Photo';


const Photos = () => {
    const myPhotos = useLoaderData();
    // console.log(myPhotos);
    return (
        <div>
            <h3> All {myPhotos.length} phosts </h3>

            {
                myPhotos.map( myPhotos => <Photo
                key={myPhotos.id}
                myPhotos={myPhotos}
                >
                    
                </Photo> )
            }
        </div>
    );
};

export default Photos;