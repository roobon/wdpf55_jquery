import React from 'react';
import Special from './Special';

const Myself = ({pRing}) => {
    return (
        <div className='border'>
          <b>  Myself </b>

            <Special rRing={pRing}></Special>
        </div>
    );
};

export default Myself;