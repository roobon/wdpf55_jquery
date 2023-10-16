import React, { useContext } from 'react';
import { remiMoney } from './Grandpa';

const Uncle = () => {
    const [money, setMoney] = useContext(remiMoney)
    return (
        <div className='border '>
           Uncle send {money}
            <br />
            <br />
           <button onClick={ () => setMoney( money + 100 )}> add 100$ </button>
            
        </div>
    );
};

export default Uncle;