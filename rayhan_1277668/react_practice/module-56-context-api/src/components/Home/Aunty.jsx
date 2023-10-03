import React, { useContext } from 'react';
import { remiMoney } from './Grandpa';

const Aunty = () => {
    const [money, setMoney] = useContext(remiMoney);
    // const honey =   money * 0.5 ;  
    return (
        <div className='border'>
           Aunty got the  { money * 0.5   }
        </div>
    );
};

export default Aunty;