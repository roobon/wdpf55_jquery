import React from 'react';
import Myself from './Myself';
import Sister from './Sister';
import Brother from './Brother';

const Father = ({ dRing }) => {
    return (
        <div className='border'>
            <b> Father </b>


            <div className='border flex'>
                <Myself pRing={dRing}></Myself>
                <Sister></Sister>
                <Brother></Brother>

            </div>
        </div>
    );
};

export default Father;