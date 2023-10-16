import React, { useContext } from 'react';
import { GoldRing } from './Grandpa';

const Special = ({rRing}) => {
    const angti = useContext(GoldRing) 
    return (
        <div>
           <small> Special got {rRing}</small> <br />
           <small> also got {angti}</small>
        </div>
    );
};

export default Special;