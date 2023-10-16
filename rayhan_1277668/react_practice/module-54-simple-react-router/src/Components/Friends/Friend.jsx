import React from 'react';
import { Link } from 'react-router-dom';

const Friend = ({friend}) => {
    const {id, name, email, phone } = friend ; 
    return (
        <div className='friend_div'>
            Name : {name}  <br />
            email : {email} <br />
            phone : {phone}  <br />
            <Link to={`/friend/${id}`}> Show Details </Link>
        </div>
    );
};

export default Friend;