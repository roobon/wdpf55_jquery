import React, { createContext, useState } from 'react';
import Father from './Father';
import './Grandpa.css';
import Uncle from './Uncle';
import Aunty from './Aunty';

export const remiMoney = createContext(0);
export const GoldRing = createContext('Gold');

const Grandpa = () => {
    const [money, setMoney] = useState(0);
    const dRing = 'Diamong_Ring' ;
    return (
        <div className='border'>
           <b> Grandpa got {money}</b>

           <remiMoney.Provider value={[money, setMoney]}>
           <GoldRing.Provider value='Golden Ring'>
                
             <div className=' flex'>
             <Father dRing={dRing}>  </Father>
                <Uncle></Uncle>
                <Aunty></Aunty>
             </div>
                </GoldRing.Provider>
           </remiMoney.Provider>

        </div>
    );
};

export default Grandpa;